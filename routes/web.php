<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\HomeController;

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
//for frontend
Route::get('/', [SiteController::class, 'getHome'])->name('getHome');
Route::get('/page/{slug}', [SiteController::class, 'getPage'])->name('getPage');
Route::get('/team/{type}', [SiteController::class, 'getTeam'])->name('getTeam');
Route::get('/features', [SiteController::class, 'getFeatures'])->name('getFeatures');
Route::get('/gallery', [SiteController::class, 'getGallery'])->name('getGallery');
Route::get('/news', [SiteController::class, 'getNews'])->name('getNews');
Route::get('/news/{slug}', [SiteController::class, 'getNewsDetail'])->name('getNewsDetail');
Route::get('/contact', [SiteController::class, 'getContact'])->name('getContact');
Route::get('/notices', [SiteController::class, 'getNotices'])->name('getNotices');
Route::get('/notice/{slug}', [SiteController::class, 'getNoticeDetail'])->name('getNoticeDetail');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('welcome');
});
//for backend
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/manage/noticeboard', [HomeController::class, 'getManageNoticeboard'])->name('getManageNoticeboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/noticeboard/add', [HomeController::class, 'getAddNoticeboard'])->name('getAddNoticeboard');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/noticeboard/add', [HomeController::class, 'postAddNoticeboard'])->name('postAddNoticeboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/noticeboard/delete/{noticeboard}', [HomeController::class, 'getDeleteNoticeboard'])->name('getDeleteNoticeboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/noticeboard/edit/{noticeboard}', [HomeController::class, 'getEditNoticeboard'])->name('getEditNoticeboard');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/noticeboard/edit/{noticeboard}', [HomeController::class, 'postEditNoticeboard'])->name('postEditNoticeboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/slider', [HomeController::class, 'getManageSlider'])->name('getManageSlider');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/slider/add', [HomeController::class, 'getAddSlider'])->name('getAddSlider');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/slider/add', [HomeController::class, 'postAddSlider'])->name('postAddSlider');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/slider/delete/{slider}', [HomeController::class, 'getDeleteSlider'])->name('getDeleteSlider');

// for news
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/news', [HomeController::class, 'getManageNews'])->name('getManageNews');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/news/add', [HomeController::class, 'getAddNews'])->name('getAddNews');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/news/add', [HomeController::class, 'postAddNews'])->name('postAddNews');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/news/delete/{news}', [HomeController::class, 'getDeleteNews'])->name('getDeleteNews');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/news/edit/{news}', [HomeController::class, 'getEditNews'])->name('getEditNews');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/news/edit/{news}', [HomeController::class, 'postEditNews'])->name('postEditNews');

//for team
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/team', [HomeController::class, 'getManageTeam'])->name('getManageTeam');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/team/add', [HomeController::class, 'getAddTeam'])->name('getAddTeam');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/team/add', [HomeController::class, 'postAddTeam'])->name('postAddTeam');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/team/delete/{team}', [HomeController::class, 'getDeleteTeam'])->name('getDeleteTeam');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/team/edit/{team}', [HomeController::class, 'getEditTeam'])->name('getEditTeam');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/team/edit/{team}', [HomeController::class, 'postEditTeam'])->name('postEditTeam');

//for feature
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/feature', [HomeController::class, 'getManageFeature'])->name('getManageFeature');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/feature/add', [HomeController::class, 'getAddFeature'])->name('getAddFeature');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/feature/add', [HomeController::class, 'postAddFeature'])->name('postAddFeature');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/feature/delete/{feature}', [HomeController::class, 'getDeleteFeature'])->name('getDeleteFeature');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/feature/edit/{feature}', [HomeController::class, 'getEditFeature'])->name('getEditFeature');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/feature/edit/{feature}', [HomeController::class, 'postEditFeature'])->name('postEditFeature');



//for gallery
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/gallery', [HomeController::class, 'getManageGallery'])->name('getManageGallery');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/gallery/add', [HomeController::class, 'getAddGallery'])->name('getAddGallery');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/gallery/add', [HomeController::class, 'postAddGallery'])->name('postAddGallery');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/gallery/delete/{gallery}', [HomeController::class, 'getDeleteGallery'])->name('getDeleteGallery');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/gallery/edit/{gallery}', [HomeController::class, 'getEditGallery'])->name('getEditGallery');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/gallery/edit/{gallery}', [HomeController::class, 'postEditGallery'])->name('postEditGallery');


//for page
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/page', [HomeController::class, 'getManagePage'])->name('getManagePage');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/page/add', [HomeController::class, 'getAddPage'])->name('getAddPage');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/page/add', [HomeController::class, 'postAddPage'])->name('postAddPage');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/page/delete/{page}', [HomeController::class, 'getDeletePage'])->name('getDeletePage');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage/page/edit/{page}', [HomeController::class, 'getEditPage'])->name('getEditPage');
Route::middleware(['auth:sanctum', 'verified'])->post('/manage/page/edit/{page}', [HomeController::class, 'postEditPage'])->name('postEditPage');