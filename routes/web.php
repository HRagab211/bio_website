<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\DB;
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
    $bios= DB::table('bios')->get()->first();
    return view('index',compact('bios'));
})->name('index');

Route::get('Portfolio', function () {
$ports = DB::table('portfolios')->get();
return view('portfolio',compact('ports'));
});

Route::get('success',function (){
    return view('panel/header/success');
})->name('success');
//------------------------------------------------------------------------------

Route::get('panel',function (){
    return view('panel.index');
})->name('panel.system');
//Route::get('experience',function (){
//    return view('panel/experience/index');
//});
//Route::get('add/experience',function (){
//    return view('panel/experience/add');
//});
//---------Resume--------------------------
Route::controller(ResumeController::class)->group(function (){
   Route::get('resume','view')                                  ->name('resume.index');
});
//------------------------------------------------------------------------------

Route::controller(AdminController::class)->group(function (){
    Route::get('login',"show");
    Route::POST('login.verify','verify')        ->name('login.verify');
});

//----------------------Experience-----------------------------------------------
Route::controller(ExperienceController::class)->group(function (){
    Route::get('experience','show')                                 ->name('exp.index');
    Route::get('add/experience','add_experience_show');
    Route::post('store/experience','store')                          ->name('experience.store');
    Route::get('view/experience/{id}','item')                        ->name('experience.item');
    Route::get('delete/experience/{id}','destroy')                   ->name('exp.delete');
    Route::get('edit/experience/{id}','edit')                        ->name('experience.edit');
    Route::post('update/experience/{id}','update')                   ->name('experience.update');
});
//-----------------------------Education-----------------------------------------------------
Route::controller(EducationController::class)->group(function (){

    Route::get('education','show')                                  ->name('education.index');
    Route::get('add/education','add_education_show');
    Route::post('store/education','store')                          ->name('education.store');
    Route::get('view/education/{id}','item')                        ->name('education.item');
    Route::get('delete/education/{id}','destroy')                   ->name('education.delete');
    Route::get('edit/education/{id}','edit')                        ->name('education.edit');
    Route::post('update/education/{id}','update')                   ->name('education.update');
});
//----------------------------------Portfolio-----------------------------------------------------------
Route::resource('myportfolio',PortfolioController::class);
///Route::post('myportfolio/upd/{id}',[PortfolioController::class],'p_update')->name('myporto.update');
//---------------------------------------------------------------------------------------------
Route::controller(BioController::class)->group(function (){
    Route::get('bio/index','index')->name('bio.index');
    Route::post('bio/update','update')->name('bio.update');
});

//----------------------------Contact-----------------------------------------------------------------

Route::controller(ContactController::class)->group(function (){

    Route::get('contact','index')->name('contact.index');
    Route::post('contact/store','store')->name('contact.store');
    Route::get('allmessages','viewallmessages')->name('messages.all');
    Route::get('message/{id}','viewmessage')->name('message.item');
    Route::get('delete/message/{id}','destroy')->name('message.delete');

});

