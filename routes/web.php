<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
    return view('TaskManager/welcome');
});
Route::get('TaskManager/welcome', function () {
    return view('TaskManager/welcome');
});

/**
 * Add A New Category view
 */
Route::get('TaskManager/addCategory', 'CategoryController@addCategory');
/**
 * Add A New toDoTasl view
 */
Route::get('TaskManager/addToDoTask', 'CategoryController@addToDoTasks');
/**
 * view list of categories
 */
Route::get('TaskManager/masterDetials', 'CategoryController@categories');
/**
 * view list of tasks that realted to selected Category
 */
Route::get('TaskManager/masterDetials/{category}', 'CategoryController@categoriesTasks');
/**
 * Add A New Category functionality
 */
Route::get('/create_category', [CategoryController::class, 'createCategories']);

/**
 * Add A New Task functionality
 */
Route::get('/create_task', [CategoryController::class, 'createToDoTasks']);

/**
 * delete task
 */
Route::get('/delete_task/{task}', 'CategoryController@delete_task');

/**
 * delete Category functionality
 */
Route::get('/delete_category/{category}', 'CategoryController@delete_category');
