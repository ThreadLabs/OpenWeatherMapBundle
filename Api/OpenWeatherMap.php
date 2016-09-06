<?php

namespace ThreadLabs\OpenWeatherMapBundle\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Stephen Wilkinson
 */
class OpenWeatherMap
{
    const API_URL = 'http://api.openweathermap.org/data/2.5/%s';

    const ENDPOINT_WEATHER = 'weather';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $appId;

    /**
     * @param Client $client
     * @param string $appId
     */
    public function __construct(Client $client, $appId)
    {
        $this->client = $client;
        $this->appId = $appId;
    }

    /**
     * Get the current weather for a city, with optional two-digit country code
     *
     * @param string $city
     * @param string $countryCode
     *
     * @return array|null
     */
    public function getWeatherForCity($city, $countryCode = null)
    {
        if (null !== $countryCode) {
            $city .= ',' . $countryCode;
        }

        $query = ['q' => $city];

        return $this->request(self::ENDPOINT_WEATHER, ['query' => $query]);
    }

    /**
     * Get the current weather for a city ID
     *
     * @param int $id
     *
     * @return array|null
     */
    public function getWeatherForCityId($id)
    {
        $query = ['id' => $id];

        return $this->request(self::ENDPOINT_WEATHER, ['query' => $query]);
    }

    /**
     * Get the current weather for geographical coordinates
     *
     * @param string $lat
     * @param string $lon
     *
     * @return array|null
     */
    public function getWeatherForCoordinates($lat, $lon)
    {
        $query = [
            'lat' => $lat,
            'lon' => $lon
        ];

        return $this->request(self::ENDPOINT_WEATHER, ['query' => $query]);
    }

    /**
     * Get the current weather for a zip code in the given country
     *
     * @param string $zip
     * @param string $countryCode
     *
     * @return array|null
     */
    public function getWeatherForZipCode($zip, $countryCode)
    {
        $zip .= ',' . $countryCode;

        $query = ['q' => $zip];

        return $this->request(self::ENDPOINT_WEATHER, ['query' => $query]);
    }

    /**
     * Make a request and return the decoded json body, or null if invalid/empty
     *
     * @param string     $endpoint
     * @param array      $options
     * @param string     $method
     *
     * @return array|null
     */
    private function request($endpoint, $options = [], $method = Request::METHOD_GET)
    {
        try {
            $response = $this->client->request($method, sprintf(self::API_URL, $endpoint), $options);
        } catch (RequestException $e) {
            // @todo handle properly
            return null;
        }

        return json_decode($response->getBody(), true);
    }
}