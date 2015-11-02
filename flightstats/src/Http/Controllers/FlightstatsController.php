<?php
namespace Dkweb\Flightstats\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FlightstatsController extends Controller
{

	public function index(FlightStats $flightStats)
	{

		echo '<pre>';

	$schedule = $flightStats->getFlightStatus()->statusByFlightNumber('SU', '3505', new \DateTime('2015-11-02'));



	// $url = Request::url("https://api.flightstats.com/flex/flightstatus/rest/v2/json/flight/status/AF/4432/dep/2015/10/29?appId=402aa598&appKey=daee2c0ffaed30afc1d2e98122ccfa60&utc=false&airport=SVO");

		print_r($schedule);
	}
}