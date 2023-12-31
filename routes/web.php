<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\DocusignController;
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
  
/*Route::get('/', function () {
    return view('welcome');
});*/
  
Route::get('docusign',[DocusignController::class, 'index'])->name('docusign');
Route::get('connect-docusign',[DocusignController::class, 'connectDocusign'])->name('connect.docusign');
Route::get('docusign/callback',[DocusignController::class,'callback'])->name('docusign.callback');
Route::get('sign-document',[DocusignController::class,'signDocument'])->name('docusign.sign');
Route::get('download-envelope', [DocusignController::class,'downloadEnvelopeDocument'])->name('docusign.downloadEnvelope');