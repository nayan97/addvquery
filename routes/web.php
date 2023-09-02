

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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


  // $comm =DB::table('comments')->get();
  // $comm =DB::table('comments')->pluck('id');

  // $user =DB::table('users')->where('name', 'chadd walter')->first();

  // $user =DB::table('users')->where('name', 'chadd walter')->value('email');


  // dump($user);

  


    return view('welcome');
});
