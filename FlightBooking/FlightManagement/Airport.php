<?php

namespace SystemDesign\FlightBooking\FlightManagement;

/**
 * Class Airport
 * @package SystemDesign\FlightBooking\FlightManagement
 */
class Airport
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $code;

    /**
     * @var Flight[]
     */
    private array $flightList = [];

    /**
     * @return Flight[]
     */
    public function getFlightList()
    {
        return $this->flightList;
    }
}