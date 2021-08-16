<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('/as', function (Request $request) {
  // $validated = $request->validate([
  //   'title' => 'required|unique:posts|max:255',
  //   'body' => 'required',
  // ]);

  return redirect('/')->with(['success' => 'Opaoapa']);
})->name('logout');
