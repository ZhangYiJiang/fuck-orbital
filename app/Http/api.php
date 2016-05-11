<?php

Route::group(['prefix' => 'v1'], function(){
    Route::get('fucks', 'ApiController@fucks');
});
