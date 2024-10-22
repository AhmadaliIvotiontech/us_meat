<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\admin\master\role\RolesController;
use App\Http\Controllers\admin\master\admin\SubAdminController;
use App\Http\Controllers\admin\master\vendor\VendorController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/flush', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});


// Route::get('/', function () {
//     return view('frontend/home');
// });
// Route::get('/experience', function () {
//     return view('frontend/experience');
// });
// Route::get('/product-list', function () {
//     return view('frontend/product-list');
// });
// Route::get('/recipes', function () {
//     return view('frontend/recipes');
// });
// Route::get('/recipes-details', function () {
//     return view('frontend/recipes-details');
// });

Route::get('/admin', function () {
    return view('backend/admin/login');
});

Route::group(['namespace' => 'App\Http\Controllers\backend\admin'], function()
{
    Route::post('admin/authenticate','LoginController@authenticate')->name('masterauthenticate');
    Route::post('admin/forgot','ForgotPasswordController@recoverpassword')->name('recoverform');
    Route::get('admin/logout','LogoutController@logout')->name('LogOut');

    // For Master Admin - Start
    Route::group(['namespace' => 'master'], function()
    {
        
        
        
        Route::prefix('admin/master')->middleware(['is_masteradmin'])->group(function () {

            Route::get('/dashboard', 'DashboardController@index')->name('masterDashboard');
            Route::get('/profile', 'ProfileController@index')->name('AdminProfile');
            Route::post('/update-profile', 'ProfileController@update')->name('updateProfile');
            Route::post('/update-password', 'ProfileController@changepassword')->name('updatePwd');

            Route::get('/add-user', 'UserController@index')->name('addUser');
            Route::post('/add-user-post', 'UserController@create')->name('addUserPost');
            Route::get('/list-user', 'UserController@list')->name('listUser');
            Route::get('/delete-user/{id}', 'UserController@delete');
            Route::get('/edit-user/{id}', 'UserController@show');
            Route::post('/update-user', 'UserController@update')->name('UpdateUserPost');


            Route::get('/banner', 'homepage\BannerController@index')->name('banner_master');
            Route::get('/add-banner', 'homepage\BannerController@add')->name('add_banner_master');
            Route::post('/add-banner-post', 'homepage\BannerController@create')->name('addBannerPost_master');
            Route::get('/delete-banner/{id}', 'homepage\BannerController@delete');
            Route::get('/edit-banner/{id}', 'homepage\BannerController@show');
            Route::post('/update-banner', 'homepage\BannerController@update')->name('updateBannerPost_master');

            Route::get('/meat-slider', 'homepage\MeatSliderController@index')->name('meat_slider_master');
            Route::get('/add-meat-slider', 'homepage\MeatSliderController@add')->name('add_meat_slider_master');
            Route::post('/add-meat-slider-post', 'homepage\MeatSliderController@create')->name('add_meat_slider_post_master');
            Route::get('/delete-meat-slider/{id}', 'homepage\MeatSliderController@delete');
            Route::get('/edit-meat-slider/{id}', 'homepage\MeatSliderController@show');
            Route::post('/update-meat-slider', 'homepage\MeatSliderController@update')->name('update_meat_slider_post_master');

            Route::get('/testimonial', 'homepage\TestimonialController@index')->name('testimonial_master');
            Route::get('/add-testimonial', 'homepage\TestimonialController@add')->name('add_testimonial_master');
            Route::post('/add-testimonial-post', 'homepage\TestimonialController@create')->name('add_testimonial_post_master');
            Route::get('/delete-testimonial/{id}', 'homepage\TestimonialController@delete');
            Route::get('/edit-testimonial/{id}', 'homepage\TestimonialController@show');
            Route::post('/update-testimonial', 'homepage\TestimonialController@update')->name('update_testimonial_post_master');

            Route::get('/where-to-buy', 'homepage\WheretobuyController@index')->name('where_to_buy_master');
            Route::get('/add-where-to-buy', 'homepage\WheretobuyController@add')->name('add_where_to_buy_master');
            Route::post('/add-where-to-buy-post', 'homepage\WheretobuyController@create')->name('add_where_to_buy_post_master');
            Route::get('/delete-where-to-buy/{id}', 'homepage\WheretobuyController@delete');
            Route::get('/edit-where-to-buy/{id}', 'homepage\WheretobuyController@show');
            Route::post('/update-where-to-buy', 'homepage\WheretobuyController@update')->name('update_where_to_buy_master');

            Route::get('/home-sections', 'homepage\SectionsController@index')->name('home_sections');
            Route::post('/update-home-sections', 'homepage\SectionsController@update')->name('updateHomeSectionPost');

            Route::get('/competitors', 'experience\CompetitorsController@index')->name('competitors');
            Route::get('/add-competitors', 'experience\CompetitorsController@add')->name('add_competitors');
            Route::post('/add-competitors-post', 'experience\CompetitorsController@create')->name('add_competitors_post');
            Route::get('/delete-competitors/{id}', 'experience\CompetitorsController@delete');
            Route::get('/edit-competitors/{id}', 'experience\CompetitorsController@show');
            Route::post('/update-competitors', 'experience\CompetitorsController@update')->name('update_competitors');

            Route::get('/experience-sections', 'experience\SectionsController@index')->name('experience_sections');
            Route::post('/update-experience-sections', 'experience\SectionsController@update')->name('updateExperienceSectionPost');

            Route::get('/cuts', 'cuts\CutsController@index')->name('cuts');
            Route::get('/add-cuts', 'cuts\CutsController@add')->name('add_cuts');
            Route::post('/add-cuts-post', 'cuts\CutsController@create')->name('add_cuts_post');
            Route::get('/delete-cuts/{id}', 'cuts\CutsController@delete');
            Route::get('/edit-cuts/{id}', 'cuts\CutsController@show');
            Route::post('/update-cuts', 'cuts\CutsController@update')->name('update_cuts');

            Route::get('/cuts-sections', 'cuts\SectionsController@index')->name('cuts_sections');
            Route::post('/update-cuts-sections', 'cuts\SectionsController@update')->name('updateCutSectionPost');

            Route::get('/recipes', 'recipes\RecipesController@index')->name('recipes');
            Route::get('/add-recipes', 'recipes\RecipesController@add')->name('add_recipes');
            Route::post('/add-recipes-post', 'recipes\RecipesController@create')->name('add_recipes_post');
            Route::get('/delete-recipes/{id}', 'recipes\RecipesController@delete');
            Route::get('/edit-recipes/{id}', 'recipes\RecipesController@show');
            Route::post('/update-recipes', 'recipes\RecipesController@update')->name('update_recipes');

            Route::get('/dropdown', 'dropdown\DropdownController@index')->name('dropdown');
            Route::get('/add-dropdown', 'dropdown\DropdownController@add')->name('add_dropdown');
            Route::post('/add-dropdown-post', 'dropdown\DropdownController@create')->name('add_dropdown_post');
            Route::get('/delete-dropdown/{id}', 'dropdown\DropdownController@delete');
            Route::get('/edit-dropdown/{id}', 'dropdown\DropdownController@show');
            Route::post('/update-dropdown', 'dropdown\DropdownController@update')->name('update_dropdown');

            Route::get('/recipes-details-sections', 'recipes_details\SectionsController@index')->name('recipes_details_sections');
            Route::post('/update-recipes-details-sections', 'recipes_details\SectionsController@update')->name('updateRecipeDetailsSectionPost');

            Route::get('/recipes-sections', 'recipes\SectionsController@index')->name('recipes_sections');
            Route::post('/update-recipes-sections', 'recipes\SectionsController@update')->name('updateRecipeSectionPost');

            Route::get('/inquiries', 'inquiries\InquirieController@index')->name('inquiries_master');
            Route::get('/add-product', 'product_management\ProductController@add')->name('add_product_master');
            Route::post('/add-product-post', 'product_management\ProductController@create')->name('addProductPost_master');
            Route::get('/delete-product/{id}', 'product_management\ProductController@delete');
            Route::get('/edit-product/{id}', 'product_management\ProductController@show');
            Route::post('/update-product', 'product_management\ProductController@update')->name('UpdateProductPost_master');

            Route::get('/about-sections', 'about\SectionsController@index')->name('about_sections');
            Route::post('/update-about-sections', 'about\SectionsController@update')->name('updateAboutSectionPost');

            Route::get('/footer-sections', 'footer\FooterController@index')->name('footer_sections');
            Route::post('/update-footer-sections', 'footer\FooterController@update')->name('updateFooterSectionPost');

        });
       
    });
    // For Master Admin - End

    // For Master Admin - Start
    Route::group(['namespace' => 'subadmin'], function()
    {
        Route::prefix('admin/subadmin')->middleware(['is_subadmin'])->group(function () {

            Route::get('/dashboard', 'DashboardController@index')->name('subadminDashboard');
            Route::get('/profile', 'ProfileController@index')->name('SubAdminProfile');
            Route::post('/update-profile', 'ProfileController@update')->name('SubAdmin_updateProfile');
            Route::post('/update-password', 'ProfileController@changepassword')->name('SubAdmin_updatePwd');
        
           
        });
    });
    // For Master Admin - End
}); 

Route::group(['namespace' => 'App\Http\Controllers\frontend'], function()
{
    Route::get('/','HomeController@index')->name('home');
    Route::get('/about-us','AboutController@index')->name('about');
    Route::get('/recipes-details','RecipesDetailsController@index')->name('recipes-details');
    Route::get('experience','ExperienceController@index')->name('experience');
    Route::get('recipes','RecipesController@index');
    Route::get('recipes/{radio}/{d1}/{d2}','RecipesController@fetch');
    Route::get('/cuts','CutsController@index');
    Route::get('cuts/{type}','CutsController@fetch');
    Route::get('cuts/{type}/{part}','CutsController@fetch_v1');
}); 

// Route::get('/recipes', function () {
//     return view('frontend/recipes');
// });