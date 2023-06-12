<?php

use App\Http\Controllers\WizardController;
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


Route::get('/step1', [WizardController::class, 'step1'])->name('wizard.step1');
Route::post('/step1', [WizardController::class, 'postStep1'])->name('wizard.postStep1');
Route::get('/step2/{step1DataId}', [WizardController::class, 'step2'])->name('wizard.step2');
Route::post('/step2', [WizardController::class, 'postStep2'])->name('wizard.postStep2');
Route::get('/step3', [WizardController::class, 'step3'])->name('wizard.step3');
Route::post('/step3', [WizardController::class, 'postStep3'])->name('wizard.postStep3');
Route::get('/step0', [WizardController::class, 'step0'])->name('wizard.step0');
