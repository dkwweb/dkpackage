<?php
namespace Dkweb\Flightstats;

use Illuminate\Support\ServiceProvider;

class FlightstatsServiceProvider extends ServiceProvider
{

	public function register()
	{
		$this->mergeConfigFrom(__DIR__ . '/../config/flightstats.php', 'flightstats');
		$this->app->bind('flightstats', function () {
			return new Flightstats;
		});
	}

	public function boot(){
		$this->publishes([__DIR__ . '/../config/flightstats.php' => config_path('flightstats.php')], 'config');
		require __DIR__ . '/Http/routes.php';
	}
}