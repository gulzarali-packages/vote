<?php
use Illuminate\Http\Request;

Route::group(['namespace'=>'GulzarAli\Vote\Http\Controllers'],function(){
    Route::get('contact','VoteController@index')->name('contact');
    Route::post('contact','VoteController@send');
});