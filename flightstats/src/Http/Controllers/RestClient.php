<?php
namespace Dkweb\Flightstats\Http\Controllers;

use GuzzleHttp\Client;


// The constructor requires no arguments.

class RestClient
{


    protected $config;
    protected $apiUrl;
    /**
     * Constructor
     * @param array $config
     * @param string $apiUrl
     */
    public function __construct($config, $apiUrl)
    {
        $this->config = $config;
        $this->apiUrl = $apiUrl;
    }
    /**
     * Prepare the curl request
     *
     * @param string $apiCall the API call function
     * @param array $params Parameters (Optional)
     * @return array
 */
    protected function request($apiCall, $params = array())
    {


        $client = new Client([
            'base_uri' => $this->apiUrl.$apiCall,
            'verify' => false
        ]);

        return $client->request('GET','?appId=402aa598&appKey=daee2c0ffaed30afc1d2e98122ccfa60');
    }
}
