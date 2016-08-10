<?php

#Authentication
Route::get('/signup', [
    'uses'=>'\App\Http\Controllers\AuthController@getSignup',
    'as'=>'auth.signup',
    'middleware'=>'guest',
]);
Route::post('/signup', [
    'uses'=>'\App\Http\Controllers\AuthController@postSignup',
    'middleware'=>'guest',
]);
Route::get('/signin', [
    'uses'=>'\App\Http\Controllers\AuthController@getSignin',
    'as'=>'auth.signin',
    'middleware'=>'guest',
]);
Route::post('/signin', [
    'uses'=>'\App\Http\Controllers\AuthController@postSignin',
    'middleware'=>'guest',
]);
Route::get('/signout', [
    'uses'=>'\App\Http\Controllers\AuthController@getSignout',
    'as'=>'auth.signout',
]); 

#User
Route::get('/', [
    'uses'=>'\App\Http\Controllers\User\HomeController@getIndex',
    'as'=>'user.index.index',
]);

Route::get('/blog', [
    'uses'=>'\App\Http\Controllers\User\BlogController@getBlog',
    'as'=>'user.blog.index',
]);

Route::get('/blog/{id}', [
    'uses'=>'\App\Http\Controllers\User\BlogController@getBlogPost',
    'as'=>'user.blog.custom',
]);

Route::get('/gallery', [
    'uses'=>'\App\Http\Controllers\User\GalleryController@getGallery',
    'as'=>'user.gallery.index',
]);

Route::get('/about', [
    'uses'=>'\App\Http\Controllers\User\AboutController@getAbout',
    'as'=>'user.about.index',
]);

Route::get('/contacts', [
    'uses'=>'\App\Http\Controllers\User\ContactsController@getContacts',
    'as'=>'user.contacts.index',
]);

Route::post('/contacts', [
    'uses'=>'\App\Http\Controllers\User\ContactsController@postContacts',
    'as'=>'user.contacts.index',
]);

#Admin
Route::get('/panel', [
    'uses'=>'\App\Http\Controllers\Admin\HomeController@getIndex',
    'as'=>'admin.index.index',
    'middleware'=>'auth',
]);

Route::get('/panel/blog', [
    'uses'=>'\App\Http\Controllers\Admin\BlogController@getBlog',
    'as'=>'admin.blog.index',
    'middleware'=>'auth',
]);

Route::get('/panel/gallery', [
    'uses'=>'\App\Http\Controllers\Admin\GalleryController@getGallery',
    'as'=>'admin.gallery.index',
    'middleware'=>'auth',
]);

Route::get('/panel/about', [
    'uses'=>'\App\Http\Controllers\Admin\AboutController@getAbout',
    'as'=>'admin.about.index',
    'middleware'=>'auth',
]);

Route::post('/panel/about', [
    'uses'=>'\App\Http\Controllers\Admin\AboutController@postAbout',
    'as'=>'admin.about.index',
    'middleware'=>'auth',
]);

Route::get('/panel/contacts', [
    'uses'=>'\App\Http\Controllers\Admin\ContactsController@getContacts',
    'as'=>'admin.contacts.index',
    'middleware'=>'auth',
]);

Route::get('/panel/gallery/new', [
    'uses'=>'\App\Http\Controllers\Admin\GalleryController@getAddNew',
    'as'=>'admin.gallery.new',
    'middleware'=>'auth',
]);

Route::post('/panel/gallery/new', [
    'uses'=>'\App\Http\Controllers\Admin\GalleryController@postAddNew',
    'as'=>'admin.gallery.new',
    'middleware'=>'auth',
]);

Route::get('/panel/gallery/{id}/delete', [
    'uses'=>'\App\Http\Controllers\Admin\GalleryController@getDelete',
    'as'=>'admin.gallery.delete',
    'middleware'=>'auth',
]);

Route::get('/panel/blog/new', [
    'uses'=>'\App\Http\Controllers\Admin\BlogController@getAddNew',
    'as'=>'admin.blog.new',
    'middleware'=>'auth',
]);

Route::post('/panel/blog/new', [
    'uses'=>'\App\Http\Controllers\Admin\BlogController@postAddNew',
    'as'=>'admin.blog.new',
    'middleware'=>'auth',
]);

Route::get('/panel/blog/{id}/edit', [
    'uses'=>'\App\Http\Controllers\Admin\BlogController@getEdit',
    'as'=>'admin.blog.edit',
    'middleware'=>'auth',
]);

Route::post('/panel/blog/{id}/edit', [
    'uses'=>'\App\Http\Controllers\Admin\BlogController@postEdit',
    'as'=>'admin.blog.edit',
    'middleware'=>'auth',
]);

Route::get('/panel/blog/{id}/delete', [
    'uses'=>'\App\Http\Controllers\Admin\BlogController@getDelete',
    'as'=>'admin.blog.delete',
    'middleware'=>'auth',
]);