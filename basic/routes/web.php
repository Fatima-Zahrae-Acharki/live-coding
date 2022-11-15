<?php

use App\Http\Controllers\apprenticesController;
use App\Http\Controllers\briefController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\taskController;
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


Route::get('/test', function () {
    return view('test');
});

Route::post('insert', [crudController::class, 'insert'])->name('insert');

Route::get('/test', [crudController::class, 'show']);
Route::get('delete/{id}',[crudController::class, 'deletePromo']);

Route::get('edit/{id}', [crudController::class, 'edit_promotion']); 
Route::post('update/{id}', [crudController::class, 'update']);
Route::get('delete/{id}', [crudController::class, 'delete']);
Route::get('search', [crudController::class, 'search']);
Route::get('search/{searchResult}', [crudController::class, 'search']);

Route::get('addStudent/{id}',[apprenticesController::class, 'addStudent']);
Route::post('insert_student',[apprenticesController::class, 'insert_student']);
Route::get('edt_S/{id}',[apprenticesController::class, 'edt_S']);
Route::post('updateS/{id}',[apprenticesController::class, 'updateS']);
Route::get('edit/delete/{id}',[apprenticesController::class, 'delete']);

Route::get('addBrief', [briefController::class, 'viewBrief']);
Route::get('allbriefs', [briefController::class, 'allbriefs']);
Route::post('addBrief', [briefController::class, 'addBrief']);
Route::get('showBrief', [briefController::class, 'showBriefs']);

Route::get('editBrief/{id}', [briefController::class, 'editBrief']);
Route::get('updateBrief/{id}', [briefController::class, 'viewUpd']);
Route::post('/editBrief/{id}/updateBrief', [briefController::class, 'updateBrief']);
Route::get('/showBrief/{id}',[briefController::class, 'deleteBrief']);

Route::get('addTask/{id}', [taskController::class, 'viewTask']);
Route::get('allTasks', [taskController::class, 'allTasks']);
Route::post('/addtask', [taskController::class, 'addTask']);
Route::get('showTasks', [taskController::class, 'showTasks']);

Route::get('editTask/{id}', [taskController::class, 'editTask']);
Route::get('updateTask/{id}', [taskController::class, 'viewUpdt']);
Route::post('/updateTask/{id}', [taskController::class, 'updateTask']);
Route::get('/deleteTask/{id}',[taskController::class, 'deleteTask']);



