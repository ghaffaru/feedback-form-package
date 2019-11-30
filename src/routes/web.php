<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Ghaff\Feedback\Http\Controllers'], function () {
    Route::get('feedback','FeedbackController@index');
    Route::post('feedback','FeedbackController@send')->name('feedback');
});
   