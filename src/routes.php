<?php
Route::group(
    ['namespace' => ':uc:vendor\\:uc:package\\Controllers'], function () {

    Route::group(
        ['prefix' => 'api',
            'middleware' => ['auth:api'],
        ], function () {

        //
    });


    Route::group(
        ['middleware' => ['auth']], function () {

        //
    });

});
