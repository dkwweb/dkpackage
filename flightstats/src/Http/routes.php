<?php

Route::group(['prefix' => 'flightstats', 'namespace' => 'Dkweb\Flightstats\Http\Controllers'], function () {

	Route::get('/', ['as' => 'flightstats.index', 'uses' => 'FlightstatsController@index']);

});