
<?php

use App\Http\Controllers\Admin\AdminDashboardController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HostingController;
use App\Http\Controllers\Frontend\PricingController;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;





Route::group(['middleware' => ['guest']], function () {

    //User Login Authentication Routes
    Route::get('admin/login', [LoginController::class, 'login'])->name('login');
    Route::post('login-attempt', [LoginController::class, 'loginAttempt'])->name('login.attempt');
    Route::get('login', [LoginController::class, 'userlogin'])->name('user.login');

    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('registration-attempt', [RegisterController::class, 'registerAttempt'])->name('register.attempt');
Route::get('reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');



});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');


Route::get('/hosting/web-hosting', [HostingController::class, 'webHosting'])->name('hosting.web-hosting');
Route::get('/hosting/wordpress-hosting', [HostingController::class, 'wordpressHosting'])->name('hosting.wordpress-hosting');
Route::get('/hosting/cloud-hosting', [HostingController::class, 'cloudHosting'])->name('hosting.cloud-hosting');
Route::get('/hosting/shared-hosting', [HostingController::class, 'sharedHosting'])->name('hosting.shared-hosting');
Route::get('/hosting/dedicated-hosting', [HostingController::class, 'dedicatedHosting'])->name('hosting.dedicated-hosting');
Route::get('/hosting/vps-hosting', [HostingController::class, 'vpsHosting'])->name('hosting.vps-hosting');







Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');


});


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