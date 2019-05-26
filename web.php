<?php
use Gondr\Route;

Route::get("/", "MainController@index");
Route::get("/board", "BoardController@list");

Route::get("/lunch","MainController@lunch");

//권한관리
// if (isset($_SESSION['user'])) {
//     Route::get("/", "MainController@index");
// }
