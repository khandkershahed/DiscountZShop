<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DivisonController;
use App\Http\Controllers\Admin\EmailSettingController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\OfferTypeController;
use App\Http\Controllers\Admin\PageBannerController;
// use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\RoleController;
// use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpecialOfferController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\TermsAndConditionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

// Route::middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:admin'])->prefix(LaravelLocalization::setLocale() . '/admin')->name('admin.')->group(function () {
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('check-password', [PasswordController::class, 'checkPassword'])->name('checkPassword');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['verified'])->name('dashboard');

    Route::resources(
        [
            'faq-category' => FaqCategoryController::class, //done
        ],
        // ['except' => ['show', 'index', 'create', 'edit']]
    );
    Route::resources(
        [
            'offer-type' => OfferTypeController::class,
            'country'    => CountryController::class,
            'city'       => CityController::class,
            'division'   => DivisonController::class,
            'area'       => AreaController::class,
        ],
        // ['except' => ['show', 'create', 'edit']]
    );
    Route::resources(
        [
            'faq'             => FaqController::class,

            'email-settings'  => EmailSettingController::class,

            'page-banner'     => PageBannerController::class,

            'terms-condition' => TermsAndConditionController::class,
            'privacy-policy'  => PrivacyPolicyController::class,

            'store'           => StoreController::class,

            // Created By Ashiquzzaman
            'offer'           => OfferController::class,
            'coupon'          => CouponController::class,
            'about-us'        => AboutUsController::class,
            'slider'          => SliderController::class,
            'banner'          => BannerController::class,
            'homepage'        => HomePageController::class,
            'special-offer'   => SpecialOfferController::class,

        ],
        // ['except' => ['show']]
    );

    Route::resources(
        [
            'user'             => UserController::class,           //done
            'staff'            => StaffController::class,          //done
            'user-management'  => UserManagementController::class, //done
            'admin-managemnet' => UserManagementController::class, //done
            'categories'       => CategoryController::class,       //done
            'icons'            => IconController::class,           //done
            'newsletters'      => NewsletterController::class,
            'brands'           => BrandController::class, //done
            'contacts'         => ContactController::class,

        ],
    );

    Route::post('brand/store/store', [BrandController::class, 'brandStores'])->name('brand.stores.store');

    Route::get('active-mail-configuration', [EmailSettingController::class, 'activeMailConfiguration'])->name('active.mail.configuration');
    Route::put('email-settings', [EmailSettingController::class, 'emailUpdateOrCreate'])->name('email.settings.updateOrCreate');
    Route::post('send-test-mail', [EmailSettingController::class, 'sendTestMail'])->name('send.test.mail');

    Route::post('email-settings/toggle-status/{id}', [EmailSettingController::class, 'toggleStatus'])->name('email-settings.toggle-status');

    Route::post('icons/toggle-status/{id}', [IconController::class, 'toggleStatus'])->name('icons.toggle-status');
    // Route::post('brands/toggle-status/{id}', [BrandController::class, 'toggleStatus'])->name('brands.toggle-status');
    Route::post('page-banner/toggle-status/{id}', [PageBannerController::class, 'toggleStatus'])->name('page-banner.toggle-status');
    Route::post('banners/toggle-status/{id}', [BrandController::class, 'toggleStatus'])->name('banners.toggle-status');

    Route::get('/backup', [Controller::class, 'downloadBackup']);

    Route::get('role/{roleId}/give-permission', [RoleController::class, 'givePermission'])->name('role.give-permission');
    Route::patch('role/{roleId}/give-permission', [RoleController::class, 'storePermission'])->name('role.store-permission');

    Route::get('log', [LogController::class, 'index'])->name('log.index');
    Route::get('log/{id}', [LogController::class, 'show'])->name('log.show');
    Route::delete('log/{id}', [LogController::class, 'destroy'])->name('log.destroy');
    Route::get('log/download/{id}', [LogController::class, 'download'])->name('log.download');

    Route::get('activity_logs', [ActivityLogController::class, 'index'])->name('activity_logs.index');
    Route::get('activity_logs/{activity_log}', [ActivityLogController::class, 'show'])->name('activity_logs.show');
    Route::delete('activity_logs/{activity_log}', [ActivityLogController::class, 'destroy'])->name('activity_logs.destroy');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'updateOrcreateSetting'])->name('settings.updateOrCreate');

    // Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
    // Route::put('/about-us', [AboutUsController::class, 'updateOrcreateAboutUs'])->name('about-us.updateOrCreate');

    //Toogle Status
    Route::put('offer/status/{id}', [OfferController::class, 'updateStatus'])->name('offer.status.update');
    Route::put('special-offer/status/{id}', [SpecialOfferController::class, 'updateStatusSpecial'])->name('special.offer.status.update');
    Route::put('coupon/status/{id}', [CouponController::class, 'updateStatusCoupon'])->name('coupon.status.update');
    Route::put('slider/status/{id}', [SliderController::class, 'updateStatusSlider'])->name('slider.status.update');
    Route::put('banner/status/{id}', [BannerController::class, 'updateStatusBanner'])->name('banner.status.update');
    Route::put('brand/status/{id}', [BrandController::class, 'updateStatusBrand'])->name('brand.status.update');
    Route::put('staff/status/{id}', [StaffController::class, 'updateStaffStatus'])->name('staff.status');
});

// Role In Permission
Route::middleware(['auth:admin'])->group(function () {

    Route::controller(RoleController::class)->group(function () {

        //Permission
        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');

        //Role
        Route::get('/all/role', 'AllRole')->name('all.role');
        Route::post('/store/role', 'StoreRole')->name('store.role');
        Route::post('/update/role', 'UpdateRole')->name('update.role');
        Route::get('/delete/role/{id}', 'DeleteRole')->name('delete.role');

        //Role In Permission
        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
        Route::post('/role/permission/store', 'RolePermissionStore')->name('store.roles.permission');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
        Route::get('/admin/edit/roles/{id}', 'AdminRolesEdit')->name('admin.edit.roles');
        Route::post('/admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.roles.update');
        Route::get('/admin/delete/roles/{id}', 'AdminRolesDelete')->name('admin.delete.roles');

        //Admin Role Permission
        Route::get('/admin-all', 'AdminPermission')->name('all.admin.permission');
        Route::post('/admin-store', 'StoreAdminPermission')->name('store.admin.permission');
        Route::get('/admin-edit/{id}', 'EditAdminPermission')->name('edit.admin.permission');
        Route::post('/admin-update/{id}', 'UpdateAdmin')->name('update.admin');
        Route::get('/admin-delete/{id}', 'DeleteAdmin')->name('delete.admin');

        Route::get('/admin-inactive/{id}', 'InactiveAdmin')->name('admin.inactive');
        Route::get('/admin-active/{id}', 'ActiveAdmin')->name('admin.active');
    });
});
