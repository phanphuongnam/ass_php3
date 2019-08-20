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

Route::get('/', function() {
    return view('welcome');
});
Route::group(
    ['prefix' => 'products', 'as' => 'products.',
        'middleware' => ['auth','active.admin']

    ],
    function () {
        Route::get('/', 'ProductsController@index')->name('list');
        Route::get('add', 'ProductsController@createForm')->name('add');
        Route::post('create-post', 'ProductsController@create')->name('create-post');
        Route::get('{products}/edit', 'ProductsController@editForm')->name('edit');
        Route::get('{products}/delete', 'ProductsController@delete')->name('delete');
        Route::post('update-post', 'ProductsController@update')->name('update');
        Route::get('detail/{id}','ProductsController@detail')->name('detail');

    }
);
Route::group(
    ['prefix' => 'categories', 'as' => 'categories.','middleware' => ['auth','active.admin']
],
    function () {
        Route::get('/', 'CategoriesController@index')->name('list');
        Route::get('add', 'CategoriesController@createForm')->name('add');
        Route::post('create-post', 'CategoriesController@create')->name('create-post');
        Route::get('{categories}/edit', 'CategoriesController@editForm')->name('edit');
        Route::get('{categories}/delete', 'CategoriesController@delete')->name('delete');
        Route::post('update-post', 'CategoriesController@update')->name('update');
        Route::get('detail/{id}','CategoriesController@detail')->name('detail');

    }
 );
Route::group(
    ['prefix' => 'users', 'as' => 'users.'],
    function () {
        Route::get('/', 'UsersController@index')->name('list')->middleware(['auth', 'active.admin']);
        Route::get('login', 'UsersController@getLogin')->name('getLogin');
        Route::post('post-login', 'UsersController@postLogin')->name('postLogin');
        Route::get('logout', 'UsersController@logout')->name('logout');
        Route::get('add', 'UsersController@createForm')->name('add')->middleware(['auth','active.admin']);
        Route::post('create-post', 'UsersController@create')->name('create-post')->middleware(['auth','active.admin']);
        Route::get('{users}/edit', 'UsersController@editForm')->name('edit')->middleware(['auth','active.admin']);
        Route::get('{users}/delete', 'UsersController@delete')->name('delete')->middleware(['auth','active.admin']);
        Route::post('update-post', 'UsersController@update')->name('update')->middleware(['auth','active.admin']);
        Route::get('detail/{id}','UsersController@detail')->name('detail')->middleware(['auth','active.admin']);
        Route::get('/register', 'UsersController@registerForm')->name('register');
        Route::post('register-post', 'UsersController@register')->name('register-post')->middleware('auth');

  }
);
Route::group(
    ['prefix' => 'comments', 'as' => 'comments.','middleware' => ['auth','active.admin']],
    function () {
        Route::get('/', 'CommentsController@index')->name('list');
        Route::get('add', 'CommentsController@createForm')->name('add');
        Route::post('create-post', 'CommentsController@create')->name('create-post');
        Route::get('{comments}/edit', 'CommentsController@editForm')->name('edit');
        Route::get('{comments}/delete', 'CommentsController@delete')->name('delete');
        Route::post('update-post', 'CommentsController@update')->name('update');
        Route::get('detail/{id}','CommentsController@detail')->name('detail');

  }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
