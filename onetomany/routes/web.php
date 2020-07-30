<?php

use App\User;
use App\Post;
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

Route::get('/insert',function(){

        $user = User::findOrFail(1);

        $post = new Post(['title'=>'This my first post2','body'=>'i am study on laravel2']);

        $user->posts()->save($post);

});

Route::get('/read',function(){

    $user = User::findOrFail(1);

    foreach($user->posts as $post){

        echo $post->title.'<br>';
    }

});

Route::get('/update',function(){

    $user = User::findorFail(1);

    $user->posts()->where('Id','=',2)->update(['title'=>'laravel','body'=>'laravel is good']);

});


Route::get('/delete',function(){


        $user= User::findorFail(1);
        $user->posts()->whereId(1)->delete();

});