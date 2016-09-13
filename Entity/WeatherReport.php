<?php

namespace ThreadLabs\OpenWeatherMapBundle\Entity;

use ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement\Precipitation;
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

    /**
     * @var Pressure
     */
    private $seaLevelPressure;

    /**
     * @var Pressure
     */
    private $groundLevelPressure;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $clouds;

    /**
     * @var Precipitation
     */
    private $rain;

    /**
     * @var Precipitation
     */
    private $snow;

    /**
     * @var \DateTime
     */
    private $sunrise;

    /**
     * @var \DateTime
     */
    private $sunset;

    /**
     * @var Location
     */
    private $location;

    /**
     * @return mixed
     */
    public function getConditionId()
    {
        return $this->conditionId;
    }

    /**
     * @param mixed $conditionId
     */
    public function setConditionId($conditionId)
    {
        $this->conditionId = $conditionId;
    }

    /**
     * @return string
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @param string $conditions
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return Temperature
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param Temperature $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return Temperature
     */
    public function getMaxTemperature()
    {
        return $this->maxTemperature;
    }

    /**
     * @param Temperature $maxTemperature
     */
    public function setMaxTemperature($maxTemperature)
    {
        $this->maxTemperature = $maxTemperature;
    }

    /**
     * @return Temperature
     */
    public function getMinTemperature()
    {
        return $this->minTemperature;
    }

    /**
     * @param Temperature $minTemperature
     */
    public function setMinTemperature($minTemperature)
    {
        $this->minTemperature = $minTemperature;
    }

    /**
     * @return Speed
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * @param Speed $windSpeed
     */
    public function setWindSpeed($windSpeed)
    {
        $this->windSpeed = $windSpeed;
    }

    /**
     * @return Speed
     */
    public function getWindDirection()
    {
        return $this->windDirection;
    }

    /**
     * @param Speed $windDirection
     */
    public function setWindDirection($windDirection)
    {
        $this->windDirection = $windDirection;
    }

    /**
     * @return Pressure
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * @param Pressure $pressure
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
    }

    /**
     * @return Pressure
     */
    public function getSeaLevelPressure()
    {
        return $this->seaLevelPressure;
    }

    /**
     * @param Pressure $seaLevelPressure
     */
    public function setSeaLevelPressure($seaLevelPressure)
    {
        $this->seaLevelPressure = $seaLevelPressure;
    }

    /**
     * @return Pressure
     */
    public function getGroundLevelPressure()
    {
        return $this->groundLevelPressure;
    }

    /**
     * @param Pressure $groundLevelPressure
     */
    public function setGroundLevelPressure($groundLevelPressure)
    {
        $this->groundLevelPressure = $groundLevelPressure;
    }

    /**
     * @return float
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @param float $humidity
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
    }

    /**
     * @return float
     */
    public function getClouds()
    {
        return $this->clouds;
    }

    /**
     * @param float $clouds
     */
    public function setClouds($clouds)
    {
        $this->clouds = $clouds;
    }

    /**
     * @return Precipitation
     */
    public function getRain()
    {
        return $this->rain;
    }

    /**
     * @param Precipitation $rain
     */
    public function setRain($rain)
    {
        $this->rain = $rain;
    }

    /**
     * @return Precipitation
     */
    public function getSnow()
    {
        return $this->snow;
    }

    /**
     * @param Precipitation $snow
     */
    public function setSnow($snow)
    {
        $this->snow = $snow;
    }

    /**
     * @return \DateTime
     */
    public function getSunrise()
    {
        return $this->sunrise;
    }

    /**
     * @param \DateTime $sunrise
     */
    public function setSunrise($sunrise)
    {
        $this->sunrise = $sunrise;
    }

    /**
     * @return \DateTime
     */
    public function getSunset()
    {
        return $this->sunset;
    }

    /**
     * @param \DateTime $sunset
     */
    public function setSunset($sunset)
    {
        $this->sunset = $sunset;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }


}