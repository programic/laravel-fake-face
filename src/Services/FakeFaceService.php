<?php

namespace Programic\FakeFace\Services;

use Faker\Provider\Base;
use GuzzleHttp\Client;

class FakeFaceService extends Base
{
    protected $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client(['base_uri' => 'https://fakeface.rest/face/']);
    }

    /**
     * @param array<string, string> $query
     * 
     * @return object
     */
    private function request($query = []){
        $response = $this->httpClient->request('GET', 'json', [
            'query' => $query
        ]);

        return json_decode($response->getBody(), true);
    }

    /**
     * @param int $minAge
     * @param int $maxAge
     * @param Gender $gender
     * 
     * @return array<string, string>
     */
    private function getQueryParams($minAge, $maxAge, $gender){
        return [
            "minimum_age" => $minAge,
            "maximum_age" => $maxAge,
            "gender" => $gender
        ];
    }

    /**
     * @param int $minAge
     * @param int $maxAge
     * @param Gender $gender
     * 
     * @return string
     */
    public function fakeFaceUrl($minAge = 25, $maxAge = 50, Gender $gender = null): string
    {
        return $this->request($this->getQueryParams($minAge, $maxAge, $gender))->image_url;
    }

    /**
     * @param int $minAge
     * @param int $maxAge
     * @param Gender $gender
     * 
     * @return string
     */
    public function fakeFace($minAge = 25, $maxAge = 50, Gender $gender = null): object
    {
        return $this->request($this->getQueryParams($minAge, $maxAge, $gender));
    }
}
