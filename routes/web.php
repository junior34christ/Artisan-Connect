<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\VentesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** set side bar active dynamic */
if (!function_exists('set_active')) {
    function set_active($route)
    {
        if (is_array($route)) {
            return in_array(Request::path(), $route) ? 'active' : '';
        }
        return Request::path() == $route ? 'active' : '';
    }
}


Route::get('/', function () {
    return view('layouts.Acceuil');
})->name('Acceuil');

Route::get('/welcome', function () {
    return view('layouts.welcome');
})->name('welcome');

Route::get('/page', function () {
    return view('layouts.page');
})->name('page');

Auth::routes();
Auth::routes(['verify' => true]);

// Authentication routes
Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
    });

    // Register routes
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'showRegistrationForm')->name('register');
        Route::post('/register', 'storeUser')->name('register');
    });

    // Route pour la récupération de mot de passe
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('password/reset', 'showLinkRequestForm')->name('auth.forgot-password');
        Route::post('password/email', 'sendResetLinkEmail')->name('password.email');
    });

    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('password/reset/{token}', 'showResetForm')->name('password.reset');
        Route::post('password/reset', 'reset')->name('password.update');
    });

    // Social routes...
    Route::get('login/{provider}', [SocialController::class, 'redirect'])->name('social.login');
    Route::get('login/{provider}/callback', [SocialController::class, 'callback'])->name('social.callback');
});


// Common routes (accessible by any authenticated user)
Route::middleware('auth')->group(function () {
    
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->name('home');
        Route::get('/profile', [HomeController::class, 'editProfile'])->name('dashboard.profile');
        Route::put('/profile', [HomeController::class, 'updateProfile'])->name('dashboard.profile');

    });
    
    Route::group(['middleware' => ['auth', 'chat.access']], function () {
        Route::get('/chat/{chat_id}', [ChatController::class, 'showChat']);
        Route::get('/chat/{chat_id}/messages', [ChatController::class, 'loadMessages']);
    });

    // route pour les notifications
    route::controller(NotificationController::class)->group(function () {
        Route::get('/notifications', 'index')->name('notifications.index');
    });
    
    // route pour la messagerie
    Route::controller(ChatController::class)->group(function () {
        Route::get('/messagerie', 'redirectToChatify');
    });

    // Application routes
    Route::controller(ApplicationController::class)->group(function () {
        Route::get('/calendar', 'calendar')->name('application.calendar');
        Route::get('/email', 'email')->name('application.email');
    });

    // Routes pour les paramètres
    route::controller(SettingsController::class)->group(function () {
        Route::get('/settings/email', 'email')->name('settings.emailsettings');
        Route::get('/settings/general', 'general')->name('settings.generalsettings');
    });

});

// Role-based routes
Route::group(['middleware' => ['auth','role:Artisan']], function () {
    Route::get('artisan/dashboard', [HomeController::class, 'index'])->name('dashboard.artisan_dashboard');
    
    
    
    // Product management routes for produit
    Route::controller(ProductController::class)->group(function () {
        Route::get('/products', 'index')->name('products.indexproduct');
        Route::get('/products/grid', 'grid')->name('products.gridProducts');
        Route::get('/products/create', 'create')->name('products.createproduct');
        Route::post('/products/store', 'store')->name('products.store');
        Route::get('/products/{product}/edit', 'edit')->name('products.editproduct');
        Route::put('/products/{product}', 'update')->name('products.update');
        Route::delete('/products/{product}', 'destroy')->name('products.destroy');
        Route::get('/products/{id}', 'show')->name('products.showproduct');
        
    });

    // Category management routes for Courturier
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/categories', 'index')->name('category.indexcategory');
        Route::get('/categories/grid', 'grid')->name('category.gridcategory');
        Route::get('/categories/create', 'create')->name('category.createcategory');
        Route::post('/categories/store', 'store')->name('category.store');
        Route::get('/categories/{category}/edit', 'edit')->name('category.edit');
        Route::put('/categories/{category}', 'update')->name('category.update');
        Route::delete('/categories/{category}', 'destroy')->name('category.destroy');
        Route::get('/categories/{id}', 'show')->name('category.show');
    });

    // Route pour les ventes
    route::controller(VentesController::class)->group(function () {
        Route::get('/ventes', 'index')->name('ventes.index');
        Route::get('/ventes/new', 'create')->name('ventes.addsales');
        Route::post('/ventes/store', 'store')->name('ventes.store');
        Route::get('/ventes/return-list', 'indexReturn')->name('ventes.indexreturn');
        Route::get('/ventes/return/create', 'createReturn')->name('ventes.createreturn');
        Route::get('search-products','search');
    });

    Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.indexsupplier');
    Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.createsupplier');
    Route::post('/suppliers', [SupplierController::class, 'store'])->name('suppliers.store');
    Route::get('/suppliers/{supplier}', [SupplierController::class, 'show'])->name('suppliers.showsupplier');
    Route::get('/suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.editsupplier');
    Route::put('/suppliers/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
    Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

    // route pour la liste des utilisateurs
    Route::get('users', [UserController::class, 'index'])->name('users.indexuser');
    Route::get('users/create', [UserController::class, 'create'])->name('users.createuser');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.showuser');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edituser');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Liste des magasins
    Route::get('stores', [StoreController::class, 'index'])->name('stores.indexstore');
    Route::get('stores/create', [StoreController::class, 'create'])->name('stores.createstore');
    Route::post('stores', [StoreController::class, 'store'])->name('stores.store');
    Route::get('stores/{store}', [StoreController::class, 'show'])->name('stores.showstore');
    Route::get('stores/{store}/edit', [StoreController::class, 'edit'])->name('stores.editstore');
    Route::put('stores/{store}', [StoreController::class, 'update'])->name('stores.update');
    Route::delete('stores/{store}', [StoreController::class, 'destroy'])->name('stores.destroy');

    // Route for displaying the list of countries
    Route::get('countries', [CountryController::class, 'index'])->name('countries.indexcountry');
    Route::get('countries/create', [CountryController::class, 'create'])->name('countries.createcountry');
    Route::post('countries', [CountryController::class, 'store'])->name('countries.store');
    Route::get('countries/{country}/edit', [CountryController::class, 'edit'])->name('countries.editcountry');
    Route::put('countries/{country}', [CountryController::class, 'update'])->name('countries.update');
    Route::delete('countries/{id}', [CountryController::class, 'destroy'])->name('countries.destroy');

    // Route pour les clients
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/customers', 'index')->name('customers.indexcustomer');
        Route::get('/customers/create', 'create')->name('customers.createcustomer');
        Route::post('/customers', 'store')->name('customers.store');
        Route::get('/customers/{customer}', 'show')->name('customers.showcustomer');
        Route::get('/customers/{customer}/edit', 'edit')->name('customers.editcustomer');
        Route::put('/customers/{customer}', 'update')->name('customers.update');
        Route::delete('/customers/{customer}', 'destroy')->name('customers.destroy');
    });

    // Route for displaying the list of states
    route::controller(StateController::class,)->group(function () {
        Route::get('states', 'index')->name('states.indexstate');
        Route::get('states/create', 'create')->name('states.createstate');
        Route::post('states', 'store')->name('states.store');
        Route::get('states/{state}/edit', 'edit')->name('states.editstate');
        Route::put('states/{state}', 'update')->name('states.update');
        Route::delete('states/{state}', 'destroy')->name('states.destroy');
    });
    
    // Routes pour les paramètres
    Route::controller(SettingsController::class)->group(function () {
        // Route::get('/settings/general', 'general')->name('settings.generalsettings');
        Route::get('/settings/setting', 'setting')->name('settings.setting');
        // Route::get('/settings/email', 'email')->name('settings.emailsettings');
        Route::get('/settings/payment', 'payment')->name('settings.paymentsettings');
        Route::get('/settings/currency', 'currency')->name('settings.currencysettings');
        Route::get('/settings/permissions', 'permissions')->name('settings.grouppermissions');
        Route::get('/settings/tax', 'tax')->name('settings.taxrates');
    });
});

Route::group(['middleware' => ['auth','role:Client']], function () {
    Route::get('client/dashboard', [HomeController::class, 'index'])->name('home');

   
});