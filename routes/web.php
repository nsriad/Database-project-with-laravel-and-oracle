<?php

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

Route::get("/",'usercontroller@login') ;
Route::post("/login_code",'usercontroller@login_code') ;

Route::get("/registration",'usercontroller@registration') ;
Route::post("/registration_code",'usercontroller@registration_code') ;

Route::post("/update_user_code",'usercontroller@update_user_code') ;
Route::post("/show_all_user",'usercontroller@show_all_user') ;

Route::GET("/coursesettings",'usercontroller@coursesettings') ;
Route::POST("/course_code",'usercontroller@course_code') ;

Route::GET("/contest_setup",'usercontroller@contest_setup') ;
Route::POST("/contest_code",'usercontroller@contest_code') ;

Route::get('problem_settings',function(){
  return view('problem_settings') ;
});
Route::post("/probsettings_code",'usercontroller@probsettings_code') ;

Route::get("/homepage_admin",'usercontroller@homepage_admin') ;

Route::get('all_user_settings',function(){
  return view('all_user_settings') ;
});

Route::get('homepage_teacher',function(){
  return view('homepage_teacher') ;
});
Route::get('homepage',function(){
  return view('homepage') ;
});
