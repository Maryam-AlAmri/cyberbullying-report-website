<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\AuthController;
use App\Http\Controller\InstitutRegisterController;
use App\Http\Controller\ConsultantController;
use App\Models\InstitutonRegister;
use App\Http\Controllers\Mail;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\VictimController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/custom/login', [App\Http\Controllers\AuthController::class, 'login'])->name('custom.login');
Route::post('/custom/register', [App\Http\Controllers\AuthController::class, 'register'])->name('custom.register');

// User View
Route::get('/admin', [App\Http\Controllers\MainController::class, 'adminIndex']);
Route::get('/institution', [App\Http\Controllers\MainController::class, 'institutionIndex']);
Route::get('/consultant', [App\Http\Controllers\MainController::class, 'consultantIndex']);
Route::get('/victim', [App\Http\Controllers\MainController::class, 'victimIndex']);



Route::view('/aboutUs', 'admin.aboutUs');
Route::view('/contact', 'admin.contactUs');

//institution register
Route::view('/institution-register', 'institution.register');
Route::post('/institution/register', [App\Http\Controllers\InstitutRegisterController::class, 'store']);

//Admin Approve institution register
Route::view('/admin/Institution/list', 'admin.list-institution');
Route::get('/admin/Institution-list', [App\Http\Controllers\InstitutRegisterController::class, 'show_Institution']);
Route::post('/approved', [App\Http\Controllers\InstitutRegisterController::class, 'approved']);

//victims report
Route::view('/victims/report', 'victims.report');
Route::view('/Successful-Message', 'institution.successfulMessage');
Route::post('/createReport', [App\Http\Controllers\VictimController::class, 'create']);
Route::get('/victims/report', [App\Http\Controllers\InstitutRegisterController::class, 'showIntApprve']);

Route::view('/institution/report/list', 'institution.reportList');
Route::post('/institution/report/list', [App\Http\Controllers\VictimController::class, 'reportList']);

Route::get('/institution/report/selectReport/{id}',[App\Http\Controllers\VictimController::class, 'showData']);

Route::post('/creataDecision', [App\Http\Controllers\VictimController::class, 'creataDecision']);

Route::view('/institution/report/list', 'institution.reportList');

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
Route::view('/chatBot', 'victims.victim-index');


Route::view('/consultants-register', 'consultant.register');
Route::post('/consultants/register', [App\Http\Controllers\ConsultantController::class, 'store']);
Route::view('/admin/Consultant-list', 'admin.list-Consultant');
Route::get('/admin/Consultant-list', [App\Http\Controllers\ConsultantController::class, 'show_Consultant']);
Route::post('/consultants/register/approved', [App\Http\Controllers\ConsultantController::class, 'approved']);

// Route::get('/institution/report/selectReport/{id}',[App\Http\Controllers\VictimController::class, 'showConApprve']);
//Send Report to consulting
Route::view('/consultant/request/list', 'consultant.requestList');
Route::post('/consultant/request/list', [App\Http\Controllers\VictimController::class, 'requestListConsulting']);
Route::get('/consultant/request/selectRequest/{id}',[App\Http\Controllers\VictimController::class, 'showDataReport']);
Route::post('/creataDecisionTreatment', [App\Http\Controllers\VictimController::class, 'creataDecisionTreatment']);