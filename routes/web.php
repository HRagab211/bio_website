<?php

use App\Http\Controllers\SocailNetworkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use App\Http\Middleware\AdminCheck;
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
    $social=DB::table('socail_networks')->get();
    return view('index',compact('bios','social'));

})->name('index');

Route::get('Portfolio', function () {
$ports = DB::table('portfolios')->get();
return view('portfolio',compact('ports'));
});

Route::get('success',function (){
    return view('panel/header/success');
})->name('success');
//------------------------------------------------------------------------------

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

Route::controller(UserController::class)->group(function (){
    Route::get('login',"show")->name('login');
    Route::POST('login.verify','verify')        ->name('login.verify');
});



//
//});


Route::middleware('isadmin')->group(function (){

//-------------------------------------------panel-------------------------------------------
    Route::get('panel',function (){
        return view('panel.index');
    })->name('panel.system');
    //----------------------------------------------------------------logout----------------
    Route::get('logout',[UserController::class,'logout'])->name('logout');

//----------------------------Contact-----------------------------------------------------------------

    Route::controller(ContactController::class)->group(function (){

        Route::get('contact','index')->name('contact.index');
        Route::post('contact/store','store')->name('contact.store');
        Route::get('allmessages','viewallmessages')->name('messages.all');
        Route::get('message/{id}','viewmessage')->name('message.item');
        Route::get('delete/message/{id}','destroy')->name('message.delete');

    });


//Route::middleware([AdminCheck::class])->group(function (){
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
//----------------------------Bio-----------------------------------------------------------------
    Route::controller(BioController::class)->group(function (){
        Route::get('bio/index','index')->name('bio.index');
        Route::post('bio/update','update')->name('bio.update');
    });

   //--------------------------------------------Social-----------------------------------------
    Route::controller(SocailNetworkController::class)->group(function (){

        Route::get('social','index')->name('social.index');
        Route::get('social/add','show')->name('social.add');
        Route::post('social/store','store')->name('social.store');
        Route::get('social/edit/{id}','edit')->name('social.edit');
        Route::post('social/update/{id}','update')->name('social.update');
        Route::get('social/delete/{id}','delete')->name('social.delete');

    });
});
