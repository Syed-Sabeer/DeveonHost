
<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\HostingController as AdminHostingController;
use App\Http\Controllers\Admin\HostingPlanController as AdminHostingPlanController;
use App\Http\Controllers\Admin\ContactSubmissionController as AdminContactSubmissionController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HostingController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Frontend\CheckoutController;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::middleware(['guest'])->group(function () {
    // User and admin authentication routes
    Route::get('admin/login', [LoginController::class, 'login'])->name('login');
    Route::post('admin/login-attempt', [LoginController::class, 'adminLoginAttempt'])->name('admin.login.attempt');

    Route::get('login', [LoginController::class, 'userlogin'])->name('user.login');
    Route::post('login-attempt', [LoginController::class, 'loginAttempt'])->name('login.attempt');
    Route::get('login/verify-otp', [LoginController::class, 'showOtpForm'])->name('user.login.otp.form');
    Route::post('login/verify-otp', [LoginController::class, 'verifyOtp'])->name('user.login.otp.verify');

    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('registration-attempt', [RegisterController::class, 'registerAttempt'])->name('register.attempt');
    Route::get('register/verify-otp', [RegisterController::class, 'showOtpForm'])->name('register.otp.form');
    Route::post('register/verify-otp', [RegisterController::class, 'verifyOtp'])->name('register.otp.verify');

    Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('forgot-password/send-otp', [AuthController::class, 'sendForgotPasswordOtp'])->name('password.otp.send');
    Route::get('forgot-password/verify-otp', [AuthController::class, 'showForgotPasswordOtpForm'])->name('password.otp.form');
    Route::post('forgot-password/verify-otp', [AuthController::class, 'verifyForgotPasswordOtp'])->name('password.otp.verify');
    Route::get('forgot-password/reset', [AuthController::class, 'showForgotPasswordResetForm'])->name('password.reset.form');
    Route::post('forgot-password/reset', [AuthController::class, 'resetForgotPasswordOtpPassword'])->name('password.update');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');


Route::get('/hosting/web-hosting', [HostingController::class, 'webHosting'])->name('hosting.web-hosting');
Route::get('/hosting/wordpress-hosting', [HostingController::class, 'wordpressHosting'])->name('hosting.wordpress-hosting');
Route::get('/hosting/cloud-hosting', [HostingController::class, 'cloudHosting'])->name('hosting.cloud-hosting');
Route::get('/hosting/shared-hosting', [HostingController::class, 'sharedHosting'])->name('hosting.shared-hosting');
Route::get('/hosting/dedicated-hosting', [HostingController::class, 'dedicatedHosting'])->name('hosting.dedicated-hosting');
Route::get('/hosting/vps-hosting', [HostingController::class, 'vpsHosting'])->name('hosting.vps-hosting');


Route::middleware(['auth'])->group(function () {
    Route::get('/account', [AccountController::class, 'dashboard'])->name('account.dashboard');
    Route::get('/account/profile', [AccountController::class, 'profile'])->name('account.profile');
    Route::put('/account/profile', [AccountController::class, 'updateProfile'])->name('account.profile.update');
    Route::get('/account/security', [AccountController::class, 'security'])->name('account.security');
    Route::put('/account/security', [AccountController::class, 'updatePassword'])->name('account.security.update');
    Route::get('/account/orders', [AccountController::class, 'orders'])->name('account.orders');

    Route::get('/checkout/{plan}', [CheckoutController::class, 'show'])->name('checkout.show');
    Route::post('/checkout/{plan}', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/checkout/{plan}/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('/checkout/{plan}/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');
});







Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('hostings', AdminHostingController::class)->except('show');
    Route::patch('hostings/{hosting}/toggle-status', [AdminHostingController::class, 'toggleStatus'])->name('hostings.toggle-status');

    Route::get('hostings/{hosting}/plans', [AdminHostingPlanController::class, 'index'])->name('hostings.plans.index');
    Route::get('hostings/{hosting}/plans/create', [AdminHostingPlanController::class, 'create'])->name('hostings.plans.create');
    Route::post('hostings/{hosting}/plans', [AdminHostingPlanController::class, 'store'])->name('hostings.plans.store');
    Route::get('hostings/{hosting}/plans/{plan}/edit', [AdminHostingPlanController::class, 'edit'])->name('hostings.plans.edit');
    Route::put('hostings/{hosting}/plans/{plan}', [AdminHostingPlanController::class, 'update'])->name('hostings.plans.update');
    Route::delete('hostings/{hosting}/plans/{plan}', [AdminHostingPlanController::class, 'destroy'])->name('hostings.plans.destroy');
    Route::patch('hostings/{hosting}/plans/{plan}/toggle-status', [AdminHostingPlanController::class, 'toggleStatus'])->name('hostings.plans.toggle-status');

    Route::get('contact-submissions', [AdminContactSubmissionController::class, 'index'])->name('contact-submissions.index');
    Route::get('contact-submissions/{contactSubmission}', [AdminContactSubmissionController::class, 'show'])->name('contact-submissions.show');

    Route::get('users', [UserManagementController::class, 'index'])->name('users.index');
    Route::get('users/{user}', [UserManagementController::class, 'show'])->name('users.show');

    Route::get('transactions', [AdminTransactionController::class, 'index'])->name('transactions.index');
    Route::get('transactions/{transaction}', [AdminTransactionController::class, 'show'])->name('transactions.show');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/sitemap.xml', function () {
    $filePath = base_path('sitemap.xml');

    if (File::exists($filePath)) {
        return response()->file($filePath, [
            'Content-Type' => 'text/plain'
        ]);
    }

    abort(404);
});

Route::get('/robots.txt', function () {
    $filePath = base_path('robots.txt');

    if (File::exists($filePath)) {
        return response()->file($filePath, [
            'Content-Type' => 'text/plain'
        ]);
    }

    abort(404);
});
Route::get('/llms.txt', function () {
    $filePath = base_path('llms.txt');

    if (File::exists($filePath)) {
        return response()->file($filePath, [
            'Content-Type' => 'text/plain'
        ]);
    }

    abort(404);
});
Route::get('/cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

    return 'All caches cleared successfully!';
});

Route::get('/storage-link', function () {
    try {
        $link = public_path('storage');

        // Remove the existing link if it exists
        if (File::exists($link)) {
            File::delete($link);
        }

        // Create the symbolic link again
        Artisan::call('storage:link');

        return '✅ Storage link has been refreshed successfully!';
    } catch (\Exception $e) {
        return '❌ Failed to refresh storage link: ' . $e->getMessage();
    }
});