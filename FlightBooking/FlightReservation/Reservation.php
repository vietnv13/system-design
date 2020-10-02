<?php

namespace SystemDesign\FlightBooking\FlightReservation;

use SystemDesign\FlightBooking\FlightManagement\FlightSchedule;

/**
 * Class Reservation
 * @package SystemDesign\FlightBooking\FlightReservation
 */
class Reservation
{
    /**
     * @var string
     */
    private string $reservationNumber;

    /**
     * @var FlightSchedule
     */
    private FlightSchedule $flightSchedule;

    /**
     * @var array
     */
    private array $seatMap;

    /**
     * @var string
     */
    private string $creationDate;

    /**
     * @var string
     */
    private string $reservationStatus;
}