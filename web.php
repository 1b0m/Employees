<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

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

Route::get('/quiz', function () {
    return view('Quizindex');
});
Route::get('/quizg', function () {
    return view('Quizg');
});
Route::post('quizg','App\Http\Controllers\QuizController@index'); //Posts from specified to specified has to be lowercase

Route::get('/quizc', function () {
    return view('Quizc');
});

Route::get('/employees/index', function () {
    return view('Employees');
});
