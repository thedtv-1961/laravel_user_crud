<?php

Route::get('/', function (){
    return view('welcome');
});

Route::resource('roles', 'RoleController')->except(['show']);
