<?php

namespace ThreadLabs\OpenWeatherMapBundle\Entity;

use ThreadLabs\OpenWeatherMapBundle\Value\Pressure;
use ThreadLabs\OpenWeatherMapBundle\Value\Speed;
use ThreadLabs\OpenWeatherMapBundle\Value\Temperature;

/**
 * @author Stephen Wilkinson
 */
class WeatherReport
{
    /**
     * @var int
     */
    private $conditionId;

    /**
     * @var string
     */
    private $conditions;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var Temperature
     */
    private $temperature;

    /**
     * @var Temperature
     */
    private $maxTemperature;

    /**
     * @var Temperature
     */
    private $minTemperature;

    /**
     * @var Speed
     */
    private $windSpeed;

    /**
     * @var Speed
     */
    private $windDirection;

    /**
     * @var Pressure
     */
    private $pressure;
}