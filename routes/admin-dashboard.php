<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\RequirementController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SmtpController;
use App\Http\Controllers\Admin\NotificationController;

// Accessible by all authenticated admins (superadmin, admin, mistri)
Route::prefix('admin')->middleware(['auth:admin', 'role:super-admin|admin|editor'])->group(function () {
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [AdminHomeController::class, 'show'])->name('admin.profile');
    Route::get('/profile/edit', [AdminHomeController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/profile/update', [AdminHomeController::class, 'update'])->name('admin.profile.update');

    Route::get('/password/change', [AdminHomeController::class, 'passwordChange'])->name('admin.password.change');
    Route::post('/password/update', [AdminHomeController::class, 'passwordUpdate'])->name('admin.password.update');
    Route::get('/logout', [LoginController::class, 'destroy'])->name('admin.logout');

    Route::get('/notifications/clear-all', [NotificationController::class, 'clearAll'])->name('notifications.clearAll');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/notifications/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');
});

// Accessible only by superadmin and admin
Route::prefix('admin')->middleware(['auth:admin', 'role:super-admin|admin'])->group(function () {
    // Role & Permission Management
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{id}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permissions');
    Route::put('roles/{id}/give-permissions', [RoleController::class, 'givePermissionToRole'])->name('roles.update-permissions');

    // Admin Users
    Route::resource('users', AdminUserController::class);

    // Registered Admin Approval
    Route::get('/registered-admins', [RegisteredAdminController::class, 'index'])->name('registered-admins.index');
    Route::put('/registered-admins/{id}/approve', [RegisteredAdminController::class, 'approve'])->name('registered-admins.approve');
    Route::delete('/registered-admins/{id}/reject', [RegisteredAdminController::class, 'reject'])->name('registered-admins.reject');

    
    // Front Page Management
    Route::resource('banner', BannerController::class);
    Route::resource('about', AboutController::class);
    Route::resource('team', TeamController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('client', ClientController::class);
    Route::resource('career', CareerController::class);
    Route::resource('req', RequirementController::class);
    
});

// Setting routes (also only for superadmin and admin)
Route::middleware(['auth:admin', 'role:super-admin|admin'])->prefix('setting')->group(function () {
    Route::resource('seo', SeoController::class)->only(['index', 'update']);
    Route::resource('smtp', SmtpController::class)->only(['index', 'update']);
    Route::resource('website', SettingController::class)->only(['index', 'update']);
    Route::resource('page', PageController::class);
});
