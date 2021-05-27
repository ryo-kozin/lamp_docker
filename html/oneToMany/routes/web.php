<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Post;
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


Route::get('/create', function() {
    $user = User::findOrFail(1);
    $post = new Post(['title'=>'My first post with Edwin', 'body'=>'I love laravel']);
    $user->posts()->save($post);
});

Route::get('/read', function() {
    $user = User::findOrFail(1);
    foreach ($user->posts as $post) {
        echo $post->title . '<br>';
    }
    // dd($user->posts);
    // return $user->posts;
});

Route::get('/update', function() {
    $user = User::find(1);
    $user->posts()->where('id', '=', 2)->update(['title'=>'I love laravel 2', 'body'=>'This is awesome']);
    // $user->posts()->whereBody('I love laravel')->update(['title'=>'I love laravel', 'body'=>'This is awesome']);
});

Route::get('/delete', function() {
    $user = User::findOrFail(1);
    $user->posts()->delete();
    // $user->posts()->whereId('1')->delete();
});