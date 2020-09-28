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

Route::get('/', 'SiteController@index')->name('index');



/*
-----------------------
| Universal Dashboard |
-----------------------
| Development Credenetials
| username: tshegofatsosemenya@gmail.com
| pass: m3zum0_130y
-----------------------
*/

// Authentication Routes...
Route::get('$d_bu$!n3$$_d@$h_login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('$d_bu$!n3$$_d@$h_login', 'Auth\LoginController@login');
Route::post('$d_bu$!n3$$_d@$h_logout', 'Auth\LoginController@logout')->name('logout');

Route::get('$d_bu$!n3$$_d@$h_register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('$d_bu$!n3$$_d@$h_register', 'Auth\RegisterController@register');

Route::get('$d_bu$!n3$$_d@$h_password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('$d_bu$!n3$$_d@$h_password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('$d_bu$!n3$$_d@$h_password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('$d_bu$!n3$$_d@$h_password/reset', 'Auth\ResetPasswordController@reset');

// Dashboard Routes...
Route::get('/$d_bu$!n3$$_d@$h', 'DashboardController@index')->name('dashboardIndex');

    // ABOUT
Route::get('/$d_bu$!n3$$_d@$h/about', 'DashboardController@about')->name('dashboardAbout');
Route::put('/$d_bu$!n3$$_d@$h/about/{about}', 'DashboardController@updateAbout')->name('updateAbout');
Route::put('/$d_bu$!n3$$_d@$h/values/{value}', 'DashboardController@updateValue')->name('updateValue');
Route::put('/$d_bu$!n3$$_d@$h/stats/{stat}', 'DashboardController@updateStat')->name('updateStat');

    // PORTFOLIO
Route::get('/$d_bu$!n3$$_d@$h/portfolio', 'DashboardController@portfolio')->name('dashboardPortfolio');
Route::get('/$d_bu$!n3$$_d@$h/project/add', 'DashboardController@addProject')->name('addProject');
Route::post('/$d_bu$!n3$$_d@$h/projects/store', 'DashboardController@storeProject')->name('storeProject');
Route::post('/$d_bu$!n3$$_d@$h/projects/save', 'DashboardController@saveProject')->name('saveProject');
Route::get('/$d_bu$!n3$$_d@$h/projects/{project}/edit', 'DashboardController@editProject')->name('editProject');
Route::get('/$d_bu$!n3$$_d@$h/projects/{project}/store-update', 'DashboardController@storeUpdateProject')->name('storeUpdateProject');
Route::post('/$d_bu$!n3$$_d@$h/projects/{project}/delete-image', 'DashboardController@deleteImage')->name('deleteImage');
Route::put('/$d_bu$!n3$$_d@$h/projects/{project}/update', 'DashboardController@updateProject')->name('updateProject');
Route::delete('/$d_bu$!n3$$_d@$h/projects/{project}/delete', 'DashboardController@deleteProject')->name('deleteProject');

    // TESTIMONIALS
Route::get('/$d_bu$!n3$$_d@$h/testimonials/add', 'DashboardController@addTestimonial')->name('addTestimonial');
Route::post('/$d_bu$!n3$$_d@$h/testimonials/save', 'DashboardController@saveTestimonial')->name('saveTestimonial');
Route::get('/$d_bu$!n3$$_d@$h/testimonials/{testimonial}/edit', 'DashboardController@editTestimonial')->name('editTestimonials');
Route::put('/$d_bu$!n3$$_d@$h/testimonials/{testimonial}/update', 'DashboardController@updateTestimonial')->name('updateTestimonial');
Route::delete('/$d_bu$!n3$$_d@$h/testimonials/{testimonial}/delete', 'DashboardController@deleteTestimonial')->name('deleteTestimonial');

    // TEAM
Route::get('/$d_bu$!n3$$_d@$h/team', 'DashboardController@team')->name('dashboardTeam');
Route::get('/$d_bu$!n3$$_d@$h/team/add', 'DashboardController@addMember')->name('addMember');
Route::post('/$d_bu$!n3$$_d@$h/team/save', 'DashboardController@saveMember')->name('saveMember');
Route::get('/$d_bu$!n3$$_d@$h/team/{member}/edit', 'DashboardController@editMember')->name('editMember');
Route::put('/$d_bu$!n3$$_d@$h/team/{member}/update', 'DashboardController@updateMember')->name('updateMember');
Route::delete('/$d_bu$!n3$$_d@$h/team/{member}/delete', 'DashboardController@deleteMember')->name('deleteMember');

    // CONTACT
Route::get('/$d_bu$!n3$$_d@$h/contacts', 'DashboardController@contacts')->name('dashboardContact');
Route::get('/$d_bu$!n3$$_d@$h/contacts/add', 'DashboardController@addContact')->name('addContact');
Route::post('/$d_bu$!n3$$_d@$h/contacts/save', 'DashboardController@saveContact')->name('saveContact');
Route::get('/$d_bu$!n3$$_d@$h/contacts/{contact}/edit', 'DashboardController@editContact')->name('editContact');
Route::put('/$d_bu$!n3$$_d@$h/contacts/{contact}/update', 'DashboardController@updateContact')->name('updateContact');
Route::delete('/$d_bu$!n3$$_d@$h/contacts/{contact}/delete', 'DashboardController@deleteContact')->name('deleteContact');

Route::get('/$d_bu$!n3$$_d@$h/contacts/add/social_link', 'DashboardController@addSocialLink')->name('addSocialLink');
Route::post('/$d_bu$!n3$$_d@$h/contacts/save/social_link', 'DashboardController@saveSocialLink')->name('saveSocialLink');
Route::get('/$d_bu$!n3$$_d@$h/contacts/{contact}/edit/social_link', 'DashboardController@editSocialLink')->name('editSocialLink');
Route::put('/$d_bu$!n3$$_d@$h/contacts/{contact}/update/social_link', 'DashboardController@updateSocialLink')->name('updateSocialLink');
Route::delete('/$d_bu$!n3$$_d@$h/contacts/{contact}/delete/social_link', 'DashboardController@deleteSocialLink')->name('deleteSocialLink');

     //BLOG
Route::get('/$d_bu$!n3$$_d@$h/blog', 'DashboardController@blog')->name('dashboardBlog');
Route::get('/$d_bu$!n3$$_d@$h/blog/{post}/read', 'DashboardController@blogRead')->name('dashboardBlogRead');
Route::get('/$d_bu$!n3$$_d@$h/blog/create', 'DashboardController@createPost')->name('createPost');
Route::post('/$d_bu$!n3$$_d@$h/blog/save', 'DashboardController@savePost')->name('savePost');
Route::get('/$d_bu$!n3$$_d@$h/blog/{blog}/edit', 'DashboardController@edit')->name('updatePost');
Route::put('/$d_bu$!n3$$_d@$h/blog/{blog}', 'DashboardController@updatePost')->name('updatePost');
Route::delete('/$d_bu$!n3$$_d@$h/blog/{blog}', 'DashboardController@destroyPost')->name('deletePost');


// GALLERY
Route::get('/$d_bu$!n3$$_d@$h/gallery', 'DashboardController@gallery')->name('dashboardGallery');
Route::get('/$d_bu$!n3$$_d@$h/gallery/create', 'DashboardController@createpicture')->name('createPicture');
Route::post('/$d_bu$!n3$$_d@$h/gallery/storePicture', 'DashboardController@storePicture')->name('storePicture');
Route::delete('/$d_bu$!n3$$_d@$h/gallery/{gallery}', 'DashboardController@deletePicture')->name('deletePicture');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
