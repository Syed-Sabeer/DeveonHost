<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmailOtp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
	public function login()
	{
		return view('admin.auth.login');
	}

	public function userlogin()
	{
		return view('frontend.auth.login');
	}

	public function adminLoginAttempt(Request $request)
	{
		$credentials = $request->validate([
			'email' => ['required', 'email'],
			'password' => ['required', 'string'],
		]);

		if (! Auth::attempt($credentials, $request->boolean('remember'))) {
			return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
		}

		$request->session()->regenerate();

		if (! Auth::user()->hasRole('admin')) {
			Auth::logout();
			return back()->withErrors(['email' => 'Admin access is required.']);
		}

		return redirect()->intended(route('admin.dashboard'));
	}

	public function loginAttempt(Request $request)
	{
		$validated = $request->validate([
			'email' => ['required', 'email'],
			'password' => ['required', 'string'],
		]);

		$user = User::where('email', $validated['email'])->first();

		if (! $user || ! Hash::check($validated['password'], $user->password)) {
			return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
		}

		if ($user->hasRole('admin')) {
			return back()->withErrors(['email' => 'Please use the admin login page.']);
		}

		$otp = (string) random_int(100000, 999999);

		EmailOtp::where('email', $user->email)->where('purpose', 'login')->delete();

		EmailOtp::create([
			'email' => $user->email,
			'purpose' => 'login',
			'otp_hash' => Hash::make($otp),
			'payload' => [
				'user_id' => $user->id,
				'remember' => $request->boolean('remember'),
			],
			'expires_at' => now()->addMinutes(10),
		]);

		Mail::raw("Your login OTP is {$otp}. It will expire in 10 minutes.", function ($message) use ($user) {
			$message->to($user->email)->subject('DeveonHost Login OTP');
		});

		session(['otp_login_email' => $user->email]);

		return redirect()->route('user.login.otp.form')->with('success', 'OTP has been sent to your email.');
	}

	public function showOtpForm()
	{
		if (! session('otp_login_email')) {
			return redirect()->route('user.login')->withErrors(['email' => 'Start login again to receive OTP.']);
		}

		return view('frontend.auth.login-otp', ['email' => session('otp_login_email')]);
	}

	public function verifyOtp(Request $request)
	{
		$request->validate([
			'otp' => ['required', 'digits:6'],
		]);

		$email = session('otp_login_email');

		if (! $email) {
			return redirect()->route('user.login')->withErrors(['email' => 'OTP session expired.']);
		}

		$otpRecord = EmailOtp::where('email', $email)
			->where('purpose', 'login')
			->where('expires_at', '>', now())
			->latest('id')
			->first();

		if (! $otpRecord || ! Hash::check($request->otp, $otpRecord->otp_hash)) {
			return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
		}

		$user = User::find($otpRecord->payload['user_id'] ?? null);

		if (! $user) {
			return redirect()->route('user.login')->withErrors(['email' => 'User not found.']);
		}

		Auth::login($user, (bool) ($otpRecord->payload['remember'] ?? false));
		$request->session()->regenerate();

		EmailOtp::where('email', $email)->where('purpose', 'login')->delete();
		$request->session()->forget('otp_login_email');

		return redirect()->intended(route('home'));
	}
}
