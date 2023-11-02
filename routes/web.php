<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestResults;
use App\Http\Controllers\SaveTests;
use App\Http\Controllers\ViewTest;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ViewTest::class, 'index'])->name('main');
Route::get('/test-make', [ViewTest::class, 'make'])->name('test-make');
Route::get('/test-list', [ViewTest::class, 'list'])->name('test-list');
Route::get('/test-ready/{id}', [ViewTest::class, 'readyTest'])->name('test-ready');
Route::get('/test/{id}', [ViewTest::class, 'test'])->name('test');
Route::get('/results/{id}/{score}/{result}', [ViewTest::class, 'results'])->name('results');
Route::post('/test-make', [SaveTests::class, 'save'])->name('test-make-db');
Route::post('/test/{id}', [TestResults::class, 'testResults'])->name('test-db');
