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


Route::get('/', function () {

    return view('welcome');
});

Route::get('/tasks',function(){

    $tasks = DB::table('tasks')->get();

//    return $tasks;
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}',function($id){

    $task = DB::table('tasks')->find($id);

    return view('tasks.show',compact('task'));
});






//Route::get('user/{userId}/pass/{passId}', function ($id, $passId){
//    return '<h1>'.'User '.$id.'<br>'.' Pass '.$passId.'</h1>';
//});
//Route::get('/user/{name?}',function($name = null){
//    return 'ok'.$name;
//});
//Route::get('/user/{name?}',function($name = 'Manh'){
//    return 'ok'.$name;
//});
//Route::get('user/{name}/age/{age}', function ($name, $age) {
//    //
//    return 'Name : '.$name.'</br>'.'Age : '.$age;
//})->where(['name'=>'[A-Za-z]+', 'age' => '[0-9]+']);
