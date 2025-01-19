<?php
use App\Http\Controllers\Rapport;
use App\Http\Controllers\Admin;
use App\Http\Controllers\BilletController;
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

Route::post('/update',[Rapport::class,'modification']);
Route::get('/',[BilletController::class, 'index']);
Route::get('/ticket',[BilletController::class,'tick']);
Route::post('/billet', [BilletController::class, 'billet']);
Route::get('/srsAdmin', [Admin::class, 'AdminLogin']);
Route::get('/Error',[Admin::class, 'error'] );
Route::post('/AdLog',[Admin::class, 'Login']);
Route::get('/Dashboard',[Admin::class, 'Dashboard']);
Route::get('/AdminNew', [Admin::class, 'RegisterAdmin']);
Route::post('register',[Admin::class, 'register']);
Route::get('/logout',[Admin::class, 'Logout']);
Route::get('/rapportAdmin',[Admin::class, 'message']);
Route::post('/rapport', [Rapport::class, 'rapported']);
Route::get('/message',[Rapport::class, 'message']);
Route::delete("delete/{id}",[Rapport::class, "delete" ]);
Route::delete("destroy/{id}", [BilletController::class, "destroy"]);
Route::get('/information',[Admin::class,'modify']);
Route::post('/updateMessage',[Rapport::class,'updateMess']);



?>

