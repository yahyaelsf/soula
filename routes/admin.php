<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\CkeEditorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourceController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\MailingListController;
use App\Http\Controllers\Admin\MusicController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VedioController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/storage-link', function () {
    Artisan::call('storage:link',[]);

    return "Storage link created!";
});
Route::get('/optimize', function () {
    Artisan::call('optimize:clear',[]);

    return "Optimized Successfully!";
});
    Route::get('/', HomeController::class)->name('home');


    Route::get('admins/data', [AdminController::class, 'datatable'])->name('admins.data')->can('admins-view');
    Route::get('admins/form', [AdminController::class, 'form'])->name('admins.form')->can('admins-store');
    Route::get('admins/update_status', [AdminController::class, 'updateStatus'])->name('admins.status')->can('admins-status');
    Route::get('admins', [AdminController::class, 'index'])->name('admins.index')->can('admins-view');
    Route::post('admins', [AdminController::class, 'store'])->name('admins.store')->can('admins-store');
    Route::delete('admins/{admin}', [AdminController::class, 'destroy'])->name('admins.delete')->can('admins-delete');


    Route::get('users/data', [UserController::class, 'datatable'])->name('users.data')->can('users-view');
    Route::get('users/form', [UserController::class, 'form'])->name('users.form')->can('users-store');
    Route::get('users/update_status', [UserController::class, 'updateStatus'])->name('users.status')->can('users-status');
    Route::get('users', [UserController::class, 'index'])->name('users.index')->can('users-view');
    Route::post('users', [UserController::class, 'store'])->name('users.store')->can('users-store');
    Route::delete('users/{slider}', [UserController::class, 'destroy'])->name('users.delete')->can('users-delete');


    Route::get('brands/data', [BrandController::class, 'datatable'])->name('brands.data')->can('brands-view');
    Route::get('brands/form', [BrandController::class, 'form'])->name('brands.form')->can('brands-store');
    Route::get('brands/update_status', [BrandController::class, 'updateStatus'])->name('brands.status')->can('brands-status');
    Route::get('brands', [BrandController::class, 'index'])->name('brands.index')->can('brands-view');
    Route::post('brands', [BrandController::class, 'store'])->name('brands.store')->can('brands-store');
    Route::delete('brands/{brand}', [BrandController::class, 'destroy'])->name('brands.delete')->can('brands-delete');


    Route::get('slider/data', [SliderController::class, 'datatable'])->name('slider.data')->can('slider-view');
    Route::get('slider/form', [SliderController::class, 'form'])->name('slider.form')->can('slider-store');
    Route::get('slider/update_status', [SliderController::class, 'updateStatus'])->name('slider.status')->can('slider-status');
    Route::get('slider', [SliderController::class, 'index'])->name('slider.index')->can('slider-view');
    Route::post('slider', [SliderController::class, 'store'])->name('slider.store')->can('slider-store');
    Route::delete('slider/{slider}', [SliderController::class, 'destroy'])->name('slider.delete')->can('slider-delete');

    Route::get('cources/data', [CourceController::class, 'datatable'])->name('cources.data')->can('cources-view');
    Route::get('cources/form', [CourceController::class, 'form'])->name('cources.form')->can('cources-store');
    Route::get('cources/update_status', [CourceController::class, 'updateStatus'])->name('cources.status')->can('cources-status');
    Route::get('cources', [CourceController::class, 'index'])->name('cources.index')->can('cources-view');
    Route::post('cources', [CourceController::class, 'store'])->name('cources.store')->can('cources-store');
    Route::delete('cources/{brand}', [CourceController::class, 'destroy'])->name('cources.delete')->can('cources-delete');

    Route::get('vedios/data', [VedioController::class, 'datatable'])->name('vedios.data')->can('vedios-view');
    Route::get('vedios/form', [VedioController::class, 'form'])->name('vedios.form')->can('vedios-store');
    Route::get('vedios/update_status', [VedioController::class, 'updateStatus'])->name('vedios.status')->can('vedios-status');
    Route::get('vedios', [VedioController::class, 'index'])->name('vedios.index')->can('vedios-view');
    Route::post('vedios', [VedioController::class, 'store'])->name('vedios.store')->can('vedios-store');
    Route::delete('vedios/{vedio}', [VedioController::class, 'destroy'])->name('vedios.delete')->can('vedios-delete');

    Route::get('musics/data', [MusicController::class, 'datatable'])->name('musics.data')->can('musics-view');
    Route::get('musics/form', [MusicController::class, 'form'])->name('musics.form')->can('musics-store');
    Route::get('musics/update_status', [MusicController::class, 'updateStatus'])->name('musics.status')->can('musics-status');
    Route::get('musics', [MusicController::class, 'index'])->name('musics.index')->can('musics-view');
    Route::post('musics', [MusicController::class, 'store'])->name('musics.store')->can('musics-store');
    Route::delete('musics/{music}', [MusicController::class, 'destroy'])->name('musics.delete')->can('musics-delete');

    Route::get('subscriptions/data', [SubscriptionController::class, 'datatable'])->name('subscriptions.data')->can('subscriptions-view');
    Route::get('subscriptions/form', [SubscriptionController::class, 'form'])->name('subscriptions.form')->can('subscriptions-store');
    Route::get('subscriptions/update_status', [SubscriptionController::class, 'updateStatus'])->name('subscriptions.status')->can('subscriptions-status');
    Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index')->can('subscriptions-view');
    Route::post('subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store')->can('subscriptions-store');
    Route::delete('subscriptions/{subscription}', [SubscriptionController::class, 'destroy'])->name('subscriptions.delete')->can('subscriptions-delete');

    Route::get('roles', [RoleController::class, 'index'])->name('roles.index')->can('roles-view');
    Route::get('roles/data', [RoleController::class, 'datatable'])->name('roles.data')->can('roles-view');;
    Route::post('roles', [RoleController::class, 'process'])->name('roles.process')->can('roles-store');
    Route::get('roles/form', [RoleController::class, 'form'])->name('roles.form')->can('roles-store');
    Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy')->can('roles-delete');;


    Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('permissions/data', [PermissionController::class, 'datatable'])->name('permissions.data');
    Route::post('permissions', [PermissionController::class, 'process'])->name('permissions.process');
    Route::get('permissions/form', [PermissionController::class, 'form'])->name('permissions.form');
    Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');

    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit')->can('settings-edit');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update')->can('settings-edit');


    Route::get('/change-localization', LocalizationController::class)->name('change-localization');





//    Route::get('loop_routes', function () {
//        $routes = Route::getRoutes();
//
//        foreach ($routes as $route) {
//
//            $permissionAlias = $route->action['middleware'][2] ?? '';
//            if (!$permissionAlias) continue;
//
//
//            $permissionName = explode(':', $permissionAlias)[1];
//            $permission = explode('-', $permissionName);
//
//            $parentName = $permission[0];
//            $childName = $permission[1];
//
//
//            echo 'parent name ' . $parentName . '<br>';
//            echo 'child name ' . $permissionName . '<br>';
//
//
//            if ($parentName && $permissionName) {
//                $parent = \App\Models\TPermission::where(['name' => $parentName])->first();
//                if ($parent) {
//                    $child = $parent->children()->where(['name' => $permissionName])->first();
//                    if (!$child) {
//                        $parent->children()->create(['name' => $permissionName, 'display_name' => $permissionName, 'guard_name' => 'admin']);
//                    }
//                }
//            }
//
//        }
//
//        echo '[+] Done';
//    });

});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('post_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



