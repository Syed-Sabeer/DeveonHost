<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmailOtp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
	public function register()
	{
		return view('frontend.auth.register');
	}

	public function registerAttempt(Request $request)
	{
		$validated = $request->validate([
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'email', 'max:255', 'unique:users,email'],
			'password' => ['required', 'confirmed', 'min:8'],
		]);

		$otp = (string) random_int(100000, 999999);

		EmailOtp::where('email', $validated['email'])->where('purpose', 'register')->delete();

		EmailOtp::create([
			'email' => $validated['email'],
			'purpose' => 'register',
			'otp_hash' => Hash::make($otp),
			'payload' => [
				'name' => $validated['name'],
				'email' => $validated['email'],
				'password' => Hash::make($validated['password']),
			],
			'expires_at' => now()->addMinutes(10),
		]);

		Mail::raw("Your registration OTP is {$otp}. It will expire in 10 minutes.", function ($message) use ($validated) {
			$message->to($validated['email'])->subject('DeveonHost Registration OTP');
		});

		session(['otp_register_email' => $validated['email']]);

		return redirect()->route('register.otp.form')->with('success', 'OTP has been sent to your email.');
	}

	public function showOtpForm()
	{
		if (! session('otp_register_email')) {
			return redirect()->route('register')->withErrors(['email' => 'Start registration again to receive OTP.']);
		}

		return view('frontend.auth.register-otp', ['email' => session('otp_register_email')]);
	}

	public function verifyOtp(Request $request)
	{
		$request->validate([
			'otp' => ['required', 'digits:6'],
		]);

		$email = session('otp_register_email');

		if (! $email) {
			return redirect()->route('register')->withErrors(['email' => 'OTP session expired.']);
		}

		$otpRecord = EmailOtp::where('email', $email)
			->where('purpose', 'register')
			->where('expires_at', '>', now())
			->latest('id')
			->first();

		if (! $otpRecord || ! Hash::check($request->otp, $otpRecord->otp_hash)) {
			return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
		}

		if (User::where('email', $email)->exists()) {
			return redirect()->route('register')->withErrors(['email' => 'Email is already registered.']);
		}

		$user = User::create([
			'name' => $otpRecord->payload['name'],
			'email' => $otpRecord->payload['email'],
			'password' => $otpRecord->payload['password'],
		]);

		$role = Role::firstOrCreate(['name' => 'user']);
		$user->assignRole($role);

		EmailOtp::where('email', $email)->where('purpose', 'register')->delete();
		$request->session()->forget('otp_register_email');

		Auth::login($user);
		$request->session()->regenerate();

		return redirect()->route('home');
	}
}
