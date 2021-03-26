<?php

//LOGIN
Route::get("dologin",function(){
	return view ('login');
});
Route::post("login",'MyController@login');

Route::get("logout",'MyController@logout');

Route::get('/',function(){
	return view('/main');
});

//ViewUser

Route::get("user","MyController@viewUser");

Route::get("newschedule",function(){
	return view ('schedule/formnewitem');
});

Route::get("schedule","MyController@viewSchedule");


Route::get("user_insertnewuser",function(){
	return view('user/formnewuser');
});
Route::post("user_p_insertuser","MyController@insertnewuser");

Route::post("user_cari","MyController@searchnewuser");

Route::post("user_delete","MyController@deletenewuser");
Route::post("user_edit","MyController@editnewuser");
Route::post("user_p_edituser","MyController@editnewuserConfirm");

Route::post("item_p_insertitem","MyController@insertnewitem");

Route::get("vehicle",function(){
	return view ('vehicle/formnewvehicle');
});
Route::post("vehicle_p_insertvehicle","MyController@insertnewvehicle");
