

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


  //rooms table Query
  // $data =DB::table('rooms')->get();

  // $data =DB::table('rooms')->where('price','<','500')->get();
  // $data =DB::table('rooms')->where([
  //   ['price','<','500'],
  //   ['room_size','2']
  //   ])->get();

  // $data =DB::table('rooms')->where('room_size','2')
  // ->orwhere('price', '<', '400')->get();

      // $data = DB::table('rooms')
      //       ->where('price', '<' ,'400')
      //       ->orWhere(function($query) {
      //           $query->where('room_size', '>' ,'1')
      //                 ->where('room_size', '<' ,'4');
      //       })
      //       ->get();



      //Bokking Table Query

    // $result = DB::table('rooms')
    //         ->whereBetween('room_size',[1,3]) // whereNotBetween
    //         ->get();

    // $result = DB::table('rooms')
    //         ->whereNotIn('id',[1,2,3]) // whereIn
    //         ->get();
    // whereNull('column')  whereNotNull
    // whereDate('created_at', '2020-05-13')
    // whereMonth('created_at', '5')
    // whereDay('created_at', '13')
    // whereYear('created_at', '2020')
    // whereTime('created_at', '=', '12:25:10')
    // whereColumn('column1', '>', 'column2')
    // whereColumn([
    //     ['first_name', '=', 'last_name'],
    //     ['updated_at', '>', 'created_at']
    // ]

    $data = DB::table('users')
           ->whereExists(function ($query) {
               $query->select('id')
                     ->from('bookings')
                     ->whereRaw('bookings.user_id = users.id')
                     ->where('check_in', '=', '2023-09-02')
                     ->limit(1);
           })
           ->get();



  //comments Table Query
  // $comm =DB::table('comments')->get();
  // $comm =DB::table('comments')->pluck('id');

  // $user =DB::table('users')->where('name', 'chadd walter')->first();

  // $user =DB::table('users')->where('name', 'chadd walter')->value('email');


  // dump($user);


  dump($data);

  


    return view('welcome');
});
