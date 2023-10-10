<?php

Route::group(['prefix' => '/constract', 'as' => 'constract.'], function () {
    Route::get('listing', 'ConstractController@listing')->name('listing');
});
