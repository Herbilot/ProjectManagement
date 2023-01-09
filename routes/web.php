<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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
//     return view('project-list');
// });
Route::get('/', [ProjectController::class,'index']);
Route::get('projects', [ProjectController::class,'index']);
Route::get('add-project', [ProjectController::class,'addProject']);
Route::post('save-project', [ProjectController::class,'saveProject']);
Route::get('project-details/{id}/add-phase', [ProjectController::class,'addPhase']);
Route::post('save-phase', [ProjectController::class,'savePhase']);
Route::get('project-details/{id}', [ProjectController::class,'getProjectById']);

