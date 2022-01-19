<?php

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
    /**
     * DB::raw() is used to make arbitrary SQL commands which aren't parsed any further by the query builder. They therefore can create a vector for attack via SQL injection.
     */
    $sql = DB::raw('select * from migrations');
    $migrations = DB::select($sql);
    dd($migrations);
    return view('welcome');
});


Route::get('database/problem1' , function(){
    /**
     * list migrations table rows 
     * i try sqllite connection
     */
    $migrations = DB::select("select * from migrations");
    return view('database/sql-lite-configuration-problem1' , compact('migrations'));
});
Route::get('database/transaction' , function(){
    // $failed = false;
    // DB::beginTransaction();
    // DB::statement('DROP TABLE roles');
    // if($failed){
    //     DB::rollback();
    // }else{
    //     DB::commit();
    // }
    $roles = DB::select('select * from roles');
    dd($roles);
});