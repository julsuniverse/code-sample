<?php

Route::group([
    'prefix' => 'location',
    'as' => 'location.',
    'namespace' => 'Location'
],
    function () {
        Route::resource('region', 'RegionController');
        Route::resource('state', 'StateController')->only(['index', 'show']);
        Route::group([
            'prefix' => 'state/{state}',
        ],
            function () {
                Route::resource('region', 'RegionController');
                Route::resource('state', 'StateController')->only(['index', 'show']);

                Route::group([
                    'prefix' => 'county/{county}',
                ],
                    function () {
                        Route::get('/', 'CountyController@show')->name('county.show');
                        Route::get('edit', 'CountyController@edit')->name('county.edit');
                        Route::put('update', 'CountyController@update')->name('county.update');
                    }
                );

                Route::group([
                    'prefix' => 'city/{city}',
                ],
                    function () {
                        Route::get('/', 'CityController@show')->name('city.show');
                        Route::get('edit', 'CityController@edit')->name('city.edit');
                        Route::put('update', 'CityController@update')->name('city.update');
                    }
                );

                Route::get('areas', 'AreaController@index')->name('area.index');
                Route::group([
                    'prefix' => 'area',
                ],
                    function () {
                        Route::get('create', 'AreaController@create')->name('area.create');
                        Route::put('create', 'AreaController@store')->name('area.store');
                        Route::get('{area}/edit', 'AreaController@edit')->name('area.edit');
                        Route::put('{area}/edit', 'AreaController@update')->name('area.update');
                        Route::delete('{area}/delete', 'AreaController@destroy')->name('area.destroy');
                    }
                );

            }
        );
    }
);