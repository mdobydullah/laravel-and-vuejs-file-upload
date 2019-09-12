<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('upload_file', function () {
    return view('upload');
});
Route::post('store_file', 'FileUploadController@fileStore');
