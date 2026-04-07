<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmailOtp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
	public function logout(Request $request)
	{
		$isAdmin = Auth::check() && Auth::user()->hasRole('admin');

		Auth::logout();

		$request->session()->invalidate();
		$request->session()->regenerateToken();

		return $isAdmin ? redirect()->route('login') : redirect()->route('home');
	}

	public function showForgotPasswordForm()
	{
		return view('frontend.auth.forgot-password');
	}

	public function sendForgotPasswordOtp(Request $request)
	{
		$request->validate([
			'email' => ['required', 'email', 'exists:users,email'],
		]);

		$user = User::where('email', $request->email)->first();
		$otp = (string) random_int(100000, 999999);

		EmailOtp::where('email', $user->email)->where('purpose', 'forgot_password')->delete();

		EmailOtp::create([
			'email' => $user->email,
			'purpose' => 'forgot_password',
			'otp_hash' => Hash::make($otp),
			'payload' => ['user_id' => $user->id],
			'expires_at' => now()->addMinutes(10),
		]);

		Mail::raw("Your password reset OTP is {$otp}. It will expire in 10 minutes.", function ($message) use ($user) {
			$message->to($user->email)->subject('DeveonHost Password Reset OTP');
		});

		session(['otp_forgot_email' => $user->email]);

		return redirect()->route('password.otp.form')->with('success', 'OTP has been sent to your email.');
	}

	public function showForgotPasswordOtpForm()
	{
		if (! session('otp_forgot_email')) {
			return redirect()->route('password.request')->withErrors(['email' => 'Start forgot password again.']);
		}

		return view('frontend.auth.forgot-password-otp', ['email' => session('otp_forgot_email')]);
	}

	public function verifyForgotPasswordOtp(Request $request)
	{
		$request->validate([
			'otp' => ['required', 'digits:6'],
		]);

		$email = session('otp_forgot_email');

		if (! $email) {
			return redirect()->route('password.request')->withErrors(['email' => 'OTP session expired.']);
		}

		$otpRecord = EmailOtp::where('email', $email)
			->where('purpose', 'forgot_password')
			->where('expires_at', '>', now())
			->latest('id')
			->first();

		if (! $otpRecord || ! Hash::check($request->otp, $otpRecord->otp_hash)) {
			return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
		}

		EmailOtp::where('email', $email)->where('purpose', 'forgot_password')->delete();
		$request->session()->forget('otp_forgot_email');
		session(['password_reset_email' => $email]);

		return redirect()->route('password.reset.form');
	}

	public function showForgotPasswordResetForm()
	{
		if (! session('password_reset_email')) {
			return redirect()->route('password.request')->withErrors(['email' => 'Verify OTP first.']);
		}

		return view('frontend.auth.forgot-password-reset', ['email' => session('password_reset_email')]);
	}

	public function resetForgotPasswordOtpPassword(Request $request)
	{
		if (! session('password_reset_email')) {
			return redirect()->route('password.request')->withErrors(['email' => 'Password reset session expired.']);
		}

		$request->validate([
			'password' => ['required', 'confirmed', 'min:8'],
		]);

		$user = User::where('email', session('password_reset_email'))->first();

		if (! $user) {
			return redirect()->route('password.request')->withErrors(['email' => 'User not found.']);
		}

		$user->update([
			'password' => Hash::make($request->password),
		]);

		$request->session()->forget('password_reset_email');

		return redirect()->route('user.login')->with('success', 'Password updated successfully.');
	}

	public function showResetForm(string $token)
	{
		return redirect()->route('password.request')->with('success', 'Use OTP flow to reset your password.');
	}

	public function resetPassword(Request $request)
	{
		return redirect()->route('password.request');
	}
}
