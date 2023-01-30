<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anoController;

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
Route::get('/', function () {
    return view('index');
});
Route::match(['get','post'],'/applyCertificate',[anoController::class,'index']);

Route::get('/Userdashbord', function () {
    return view('Userdashbord');
});
Route::get('/admindashbord', function () {
    return view('admindashbord');
});

Route::match(['get','post'],'/viewbirthCertificate',[anoController::class,'viewbirthCertificate']);

Route::match(['get','post'],'/viewApplicaiton',[anoController::class,'viewApplicaiton']);

Route::match(['get','post'],'applyCertificates',[anoController::class,'apply']);

Route::post('/index', [anoController::class, 'login']);
Route::post('/getdist',[anoController::class,'getdist']);
Route::match(['get','post'],'logout',[anoController::class,'logout']);

Route::get('/approved', [anoController::class, 'approvedAction']);
Route::get('/reject', [anoController::class, 'rejectAction']);
Route::get('/certificate', [anoController::class, 'certificate']);
Route::get('pdf',[anoController::class,'generatepdf']);
