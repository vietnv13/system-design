<?php

namespace SystemDesign\FlightBooking\FlightManagement;
/**
 * Class Flight
 * @package SystemDesign\FlightBooking\FlightManagement
 */
class Flight
{
    /**
     * @var string
     */
    private string $flightNo;

    /**
     * @var int
     */
    private int $duration;

    /**
     * @var Airport
     */
    private Airport $departure;

    /**
     * @var Airport
     */
    private Airport $arrival;

    /**
     * @var Seat[]
     */
    private array $seats;

    public function __construct()
    {

    }
}