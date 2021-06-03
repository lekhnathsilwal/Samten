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
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login','AdminController@showLoginForm')->name('login');
    Route::post('/check-login','AdminController@checkLogin')->name('check.login');
    Route::get('/forget-password','AdminController@forgetPassword')->name('forget.password');
    Route::post('/password-reset-mail','AdminController@passwordResetMail')->name('password.reset.mail');
    Route::get('reset-forget-password/{id}','AdminController@resetForgetPassword')->name('reset.forget.password')->middleware('signed');
    Route::post('/reset-password/{id}','AdminController@resetPassword')->name('reset.password');
});
Route::group(['middleware' => 'auth'], function () {

    // Admin Controller
    Route::get('/admin','AdminController@showDashboard')->name('dashboard');
    Route::get('/show-admin','AdminController@showAdmin')->name('show.admin');
    Route::get('/add-admin','AdminController@addAdmin')->name('add.admin');
    Route::post('/store-admin','AdminController@storeAdmin')->name('store.admin');
    Route::get('/logout','AdminController@logout')->name('logout');
    Route::get('/change-password','AdminController@changePassword')->name('change.password');
    Route::post('/update-password','AdminController@updatePassword')->name('update.password');
    Route::get('/edit-profile/{id}','AdminController@editProfile')->name('edit.profile');
    Route::post('/update-profile/{id}','AdminController@updateProfile')->name('update.profile');
    Route::get('/delete-admin/{id}','AdminController@deleteAdmin')->name('delete.admin');
    Route::get('/show-message','AdminController@showMessage')->name('show.message');
    Route::get('/delete-contact/{id}','AdminController@deleteContact')->name('delete.contact');

    //Site Controller
    Route::get('/change-slide/{id}','SiteController@changeSlide')->name('change.slide');
    Route::post('/update-slide/{id}','SiteController@updateSlide')->name('update.slide');
    Route::get('/add-slide','SiteController@addSlide')->name('add.slide');
    Route::post('/store-slide','SiteController@storeSlide')->name('store.slide');
    Route::get('/delete-slide/{id}','SiteController@deleteSlide')->name('delete.slide');
    Route::get('/add-message/{type}','SiteController@addMessage')->name('add.message');
    Route::post('/store-message/{type}','SiteController@storeMessage')->name('store.message');
    Route::get('/edit-message/{id}','SiteController@editMessage')->name('edit.message');
    Route::post('/update-message/{id}','SiteController@updateMessage')->name('update.message');
    Route::get('/delete-message/{id}','SiteController@deleteMessage')->name('delete.message');
    Route::get('/edit-total/{id}','SiteController@editTotal')->name('edit.total');
    Route::post('/update-total/{id}','SiteController@updateTotal')->name('update.total');
    Route::get('/edit-info','SiteController@editInfo')->name('edit.info');
    Route::post('/update-info','SiteController@updateInfo')->name('update.info');
    Route::get('/edit-icon/{id}','SiteController@editIcon')->name('edit.icon');
    Route::post('/update-icon/{id}','SiteController@updateIcon')->name('update.icon');
    
    //WeHave Controller
    Route::get('/add-we-have','WeHaveController@addWeHave')->name('add.weHave');
    Route::post('/store-we-have','WeHaveController@storeWeHave')->name('store.weHave');
    Route::get('/edit-we-have/{id}','WeHaveController@editWeHave')->name('edit.weHave');
    Route::post('/update-we-have/{id}','WeHaveController@updateWeHave')->name('update.weHave');
    Route::get('/delete-we-have/{id}','WeHaveController@deleteWeHave')->name('delete.weHave');

    // Video Controller
    Route::get('/add-video','VideoController@addVideo')->name('add.video');
    Route::post('/store-video','VideoController@storeVideo')->name('store.video');
    Route::get('/change-video/{id}','VideoController@changeVideo')->name('change.video');
    Route::post('/update-video/{id}','VideoController@updateVideo')->name('update.video');
    Route::get('/delete-video/{id}','VideoController@deleteVideo')->name('delete.video');

    // Program Controller
    Route::get('/add-program','ProgramController@addProgram')->name('add.program');
    Route::post('/store-program','ProgramController@storeProgram')->name('store.program');
    Route::get('/edit-program/{id}','ProgramController@editProgram')->name('edit.program');
    Route::post('/update-program/{id}','ProgramController@updateProgram')->name('update.program');
    Route::get('/delete-program/{id}','ProgramController@deleteProgram')->name('delete.program');
    
    // Program Description Controller
    Route::post('/store-programDesc/{id}','ProgramDescriptionController@storeProgramDesc')->name('store.programDesc');
    Route::get('/add-programDesc/{id}','ProgramDescriptionController@addProgramDesc')->name('add.programDesc');
    Route::get('/edit-programDesc/{id}','ProgramDescriptionController@editProgramDesc')->name('edit.programDesc');
    Route::post('/update-programDesc/{id}','ProgramDescriptionController@updateProgramDesc')->name('update.programDesc');
    Route::get('/delete-programDesc/{id}','ProgramDescriptionController@deleteProgramDesc')->name('delete.programDesc');

    // Gallery Controller
    Route::get('/add-gallery','GalleryController@addGallery')->name('add.gallery');
    Route::post('/store-gallery','GalleryController@storeGallery')->name('store.gallery');
    Route::get('/edit-gallery/{id}','GalleryController@editGallery')->name('edit.gallery');
    Route::post('/update-gallery/{id}','GalleryController@updateGallery')->name('update.gallery');
    Route::get('/delete-gallery/{id}','GalleryController@deleteGallery')->name('delete.gallery');
    
    // Calender Controller
    Route::get('/add-calender','CalenderController@addCalender')->name('add.calender');
    Route::post('/store-calender','CalenderController@storeCalender')->name('store.calender');
    Route::get('/edit-calender/{id}','CalenderController@editCalender')->name('edit.calender');
    Route::post('/update-calender/{id}','CalenderController@updateCalender')->name('update.calender');
    Route::get('/delete-calender/{id}','CalenderController@deleteCalender')->name('delete.calender');
    
    // Holiday Controller
    Route::get('/add-holiday/{id}','HolidayController@addHoliday')->name('add.holiday');
    Route::post('/store-holiday/{id}','HolidayController@storeHoliday')->name('store.holiday');
    Route::get('/edit-holiday/{id}','HolidayController@editHoliday')->name('edit.holiday');
    Route::post('/update-holiday/{id}','HolidayController@updateHoliday')->name('update.holiday');
    Route::get('/delete-holiday/{id}','HolidayController@deleteHoliday')->name('delete.holiday');

    // Achievement Controller
    Route::get('/add-achievement','AchievementController@addAchievement')->name('add.achievement');
    Route::post('/store-achievement','AchievementController@storeAchievement')->name('store.achievement');
    Route::get('/edit-achievement/{id}','AchievementController@editAchievement')->name('edit.achievement');
    Route::post('/update-achievement/{id}','AchievementController@updateAchievement')->name('update.achievement');
    Route::get('/delete-achievement/{id}','AchievementController@deleteAchievement')->name('delete.achievement');

    // Dob Controller
    Route::get('/add-bod','BodController@addBod')->name('add.bod');
    Route::post('/store-bod','BodController@storeBod')->name('store.bod');
    Route::get('/edit-bod/{id}','BodController@editBod')->name('edit.bod');
    Route::post('/update-bod/{id}','BodController@updateBod')->name('update.bod');
    Route::get('/delete-bod/{id}','BodController@deleteBod')->name('delete.bod');
});
Route::get('/','PagesController@showHome')->name('show.home');
Route::get('/show-about-us','PagesController@showAboutUs')->name('show.about_us');
Route::get('/show-bod','PagesController@showBod')->name('show.bod');
Route::get('/show-programs','PagesController@showPrograms')->name('show.programs');
Route::get('/show-achievements','PagesController@showAchievements')->name('show.achievements');
Route::get('/show-gallery','PagesController@showGallery')->name('show.gallery');
Route::get('/show-calender','PagesController@showCalender')->name('show.calender');
Route::get('/show-contact','PagesController@showContact')->name('show.contact');
Route::post('/store-contact','PagesController@storeContact')->name('store.contact');