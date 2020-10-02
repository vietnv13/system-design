<?php

namespace SystemDesign\FlightBooking\FlightManagement;

/**
 * Class FlightSchedule
 * @package SystemDesign\FlightBooking\FlightManagement
 */
class FlightSchedule
{
    /**
     * @var Flight
     */
    private Flight $flight;

    /**
     * @var string
     */
    private string $departureTime;

    /**
     * @var string
     */
    private string $gate;

    /**
     * @var string
     */
    private string $status;

}