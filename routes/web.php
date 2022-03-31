<?php

use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});

Route::get('/about',function(){
    $name='DANA';
    $age=21;
   return view ('about' , compact ('name' , 'age'));
});

Route::get('/tasks',function(){
    $tasks=[
        'first-task' => 'Task1',
        'second-task' => 'Task2',
        'third-task' => 'Task3',
    ];
    return view('tasks',compact('tasks'));
});

Route::get('show/{id}',function($id){
    $tasks=[
        'first-task' => 'Task1',
        'second-task' => 'Task2',
        'third-task' => 'Task3',
    ];
    $task = $tasks[$id];
    return view('show',compact('task' , 'id'));
});

Route::get('/contact_us',function(){
    return view('contact_us');
});

Route::post('/contact_us',function(){
    $name=$_POST['name'];
    return view('contact_us',compact('name'));
});
