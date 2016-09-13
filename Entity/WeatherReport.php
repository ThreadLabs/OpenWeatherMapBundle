<?php

namespace ThreadLabs\OpenWeatherMapBundle\Entity;

use ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement\Pressure;
use ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement\Speed;
use ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement\Temperature;

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