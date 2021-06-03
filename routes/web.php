<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * Route Frontend
 */
Route::get('/', 'App\Http\Controllers\FrontendController@homePage')->name('home.page');
Route::get('/about-us', 'App\Http\Controllers\FrontendController@showAboutUsPage')->name('about.page');
Route::get('/services', 'App\Http\Controllers\FrontendController@showOurServicePage')->name('service.page');
Route::get('/documentary', 'App\Http\Controllers\FrontendController@showDocumentaryPage')->name('documentary.page');
Route::get('/clients', 'App\Http\Controllers\FrontendController@showClientPage')->name('client.page');
Route::get('/gallery', 'App\Http\Controllers\FrontendController@showGalleryPage')->name('gallery.page');
Route::get('/contact-us', 'App\Http\Controllers\FrontendController@showContactUsPage')->name('contact.page');

//E-mail Send
Route::post('/event-mail', 'App\Http\Controllers\EventMailController@sendEventMail')->name('event.mail');

/**
 * Admin Login
 */
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showAdminLoginForm'])->name('admin.login');
Route::get('/admin/register', [App\Http\Controllers\AdminController::class, 'showAdminRegisterForm'])->name('admin.register');


Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');
Route::post('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('admin.register');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'showAdminDashboard'])->name('admin.dashboard');

    //Slider
    Route::resource('/slider', 'App\Http\Controllers\SliderController');

    //Events Concern
    Route::resource('/events', 'App\Http\Controllers\EventController');

    //About Us
    Route::resource('/about-management', 'App\Http\Controllers\TopManagementController');
    Route::resource('/about-vice', 'App\Http\Controllers\MessageController');
    Route::get('/about-text-message', 'App\Http\Controllers\TopManagementController@showAboutTextMessage')->name('about.text.message');
    Route::post('/about-text-message', 'App\Http\Controllers\TopManagementController@insertAboutTextMessage')->name('about.text.message');

    //Settings
    Route::get('/setting/option', 'App\Http\Controllers\SettingController@showSettingOption')->name('theme.option');
    Route::post('/setting/option', 'App\Http\Controllers\SettingController@insertSettingOption')->name('theme.option');
    Route::get('/setting/footer', 'App\Http\Controllers\FooterController@showFooterOption')->name('theme.footer');
    Route::post('/setting/footer', 'App\Http\Controllers\FooterController@insertFooterOption')->name('theme.footer');

    //Clients
    Route::resource('/event/client', 'App\Http\Controllers\ClientController');

    //Gallery
    Route::resource('/event/gallery', 'App\Http\Controllers\GalleryController');

    /**
     * Event Services Page
     */
    //Event Management
    Route::resource('/event/management', 'App\Http\Controllers\EventManagementController');
    //Event Logistics
    Route::resource('/event/logistics', 'App\Http\Controllers\EventLogisticController');
    //Event Security
    Route::resource('/event/security', 'App\Http\Controllers\EventSecurityController');
    //Event Services
    Route::resource('/event/provide', 'App\Http\Controllers\EventProvideController');
    //Event Document
    Route::get('/event/services/document', 'App\Http\Controllers\EventServicesController@showServicesDocument')->name('event.services.document');
    Route::post('/event/services/document', 'App\Http\Controllers\EventServicesController@insertServicesDocument')->name('event.services.document');

    /**
     * Our Portfolio for HomePage
     */
    Route::get('/event/portfolio', 'App\Http\Controllers\EventForceController@showOurPortfolio')->name('event.portfolio');
    Route::post('/event/portfolio', 'App\Http\Controllers\EventForceController@insertOurPortfolio')->name('event.portfolio');

    /**
     * Documentary Page
     */
    //Who We Are
    Route::get('/event/who-we-are', 'App\Http\Controllers\EventForceController@showWhoWeAre')->name('who.we.are');
    Route::post('/event/who-we-are', 'App\Http\Controllers\EventForceController@insertWhoWeAre')->name('who.we.are');
    //Documentary Videos
    Route::resource('/event/documentary/videos', 'App\Http\Controllers\DocumentaryVideoController');
    //Documentary Sofar
    Route::resource('/event/documentary/sofar', 'App\Http\Controllers\DocumentarySoFarController');
    Route::post('/event/documentary-text', 'App\Http\Controllers\EventForceController@insertSoFarText')->name('sofar.text');

    /**
     * Contact Page
     */
    //Top Banner
    Route::get('/event/contact-banner', 'App\Http\Controllers\EventForceController@showContactBanner')->name('contact.banner');
    Route::post('/event/contact-banner', 'App\Http\Controllers\EventForceController@insertContactBanner')->name('contact.banner');
    //Google Location
    Route::get('/event/contact-map', 'App\Http\Controllers\EventForceController@showContactGoogle')->name('contact.map');
    Route::post('/event/contact-map', 'App\Http\Controllers\EventForceController@insertContactGoogle')->name('contact.map');
    

});