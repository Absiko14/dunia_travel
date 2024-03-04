<?php
use App\Http\Controllers\EmailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\CompagnieController;
use App\Http\Controllers\CompteBancaireController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SociauxController;
use App\Http\Controllers\TelephoneController;
use App\Http\Controllers\VolsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'index')->name('index');

});
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'index')->name('indexadmin');
    Route::get('/admin/agence', 'agence')->name('adminAgence');
    Route::get('/admin/telephone', 'telephone')->name('agenceTel');
    Route::get('/admin/email', 'email')->name('agenceEmail');
    Route::get('/admin/compagnie', 'compagnie')->name('agengeComp');
    Route::get('/admin/comptebanc', 'comptebanc')->name('agenceBank');
    Route::get('/admin/sociaux', 'sociaux')->name('agenceSociaux');

});
Route::controller(AgenceController::class)->group(function(){
    Route::get('/admin/addagence','addagence')->name('addagence');
    Route::post('/admin/addagence','authagence')->name('authagence');
    Route::get('/admin/editagence/{agence}','editagence')->name('editagence');
    Route::put('/admin/editagence/{agence}/edit','editagenceauth')->name('editagenceauth');
});

Route::controller(CompagnieController::class)->group(function(){
    Route::get('/admin/addagence','addacomp')->name('addcomp');
    Route::post('/admin/addagences','authcomp')->name('authcomp');
    Route::get('/admin/editagence/{comp}','editcomp')->name('editcomp');
    Route::put('/admin/editagence/{comp}/edit','editcompauth')->name('editcompauth');
});

Route::controller(CompteBancaireController::class)->group(function(){
    Route::get('/admin/addcomptebank','addcomptebank')->name('addcomptebank');
    Route::post('/admin/addcomptebanks','authcomptebank')->name('authcomptebank');
    Route::get('/admin/editcomptebank/{comptebank}','editcomptebank')->name('editcomptebank');
    Route::put('/admin/editcomptebank/{comptebank}/edit','editcompteauth')->name('editcomptebankauth');
});

Route::controller(EmailController::class)->group(function(){
    Route::get('/admin/addemail','addemail')->name('addemail');
    Route::post('/admin/addemails','authemail')->name('authemail');
    Route::get('/admin/editemail/{email}','editemail')->name('editemail');
    Route::put('/admin/editemail/{email}/edit','editemailauth')->name('editemailauth');
});

Route::controller(DestinationController::class)->group(function(){
    Route::get('/admin/adddestiation','adddestiation')->name('adddestiation');
    Route::post('/admin/adddestiations','authdestiation')->name('authdestiation');
    Route::get('/admin/adddestiation/{destiation}','editdestiation')->name('editdestiation');
    Route::put('/admin/adddestiation/{destiation}/edit','editdestiationauth')->name('editdestiationauth');
});

Route::controller(ReservationController::class)->group(function(){
    Route::get('/admin/addreservation','addreservation')->name('addreservation');
    Route::post('/admin/addreservations','authreservation')->name('authreservation');
    Route::get('/admin/addreservation/{reservation}','editreservation')->name('editreservation');
    Route::put('/admin/addreservation/{reservation}/edit','editreservationauth')->name('editreservationauth');
});

Route::controller(SociauxController::class)->group(function(){
    Route::get('/admin/addsociau','addsociau')->name('addsociau');
    Route::post('/admin/addsociaus','authsociau')->name('authsociau');
    Route::get('/admin/editsociau/{sociau}','editagence')->name('editsociau');
    Route::put('/admin/editsociau/{sociau}/edit','editagenceauth')->name('editsociauauth');
});

Route::controller(TelephoneController::class)->group(function(){
    Route::get('/admin/addtelephone','addtelephone')->name('addtelephone');
    Route::post('/admin/addtelephones','authtelephone')->name('authtelephone');
    Route::get('/admin/edittelephone/{telephone}','editagence')->name('edittelephone');
    Route::put('/admin/edittelephone/{telephone}/edit','editagenceauth')->name('edittelephoneauth');
});

Route::controller(VolsController::class)->group(function(){
    Route::get('/admin/addvols','addvols')->name('addvols');
    Route::post('/admin/addvolss','authvols')->name('authvols');
    Route::get('/admin/addvols/{vols}','editagence')->name('editvols');
    Route::put('/admin/addvols/{vols}/edit','editvolsauth')->name('editvolsauth');
});
