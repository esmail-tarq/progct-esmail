<?php

use App\Http\Controllers\SiteOne\SiteOneController;
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

Route::get('/', function () {
    return view('welcome');
});


// لانشاء صفحة جديدة
Route::get('/user/progile', function () {
    return ('<h1>esmail</h1>');
});
//لطباعة اي شئ تكتبه في ال url
Route::get('/user/progile/{id}', function ($id) {
    echo 'user id' . $id;
});
//بكود واجد يتم انشاء صفحتين
Route::get('/news{id?}', function ($id = null) {
    $news = [1, 2, 3, 4, 6, 8]; // ← تم التصحيح هنا
if ($id) {
   echo 'new is '.$id;
}else{
    echo 'all news: <br>';
    foreach($news as $new){
        echo $new . '<br>'; // ← علشان ينعرض كل رقم في سطر لحاله
    }
}
});

Route::prefix('site1')->name('site1.')->controller(SiteOneController::class)->group(
    function(){
 Route::get('/home' ,'home')->name('home');
 Route::get('/services' ,'services')->name('services');
 Route::get('/Portfolio' ,'Portfolio')->name('Portfolio');
 Route::get('/about' ,'about')->name('about');
 Route::get('/Team' ,'Team')->name('Team');
 Route::get('/contact' ,'contact')->name('contact');
 Route::post('/contact' ,'postcontact')->name('postcontact');
    });

