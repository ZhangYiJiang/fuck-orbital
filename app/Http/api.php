<?php

Route::group(['prefix' => 'v1'], function(){
    Route::get('fucks', 'ApiController@listFucks');
    Route::get('fucks/{fuck_vector}', 'ApiController@getFucks');
});
