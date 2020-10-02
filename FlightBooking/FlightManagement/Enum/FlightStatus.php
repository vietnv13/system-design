<?php

namespace SystemDesign\FlightBooking\FlightManagement;

/**
 * Class FlightStatus
 * @package SystemDesign\FlightBooking\FlightManagement
 */
final class FlightStatus
{
    private const ACTIVE = 'active';
    private const SCHEDULED = 'scheduled';
    private const DELAYED = 'delayed';
    private const DEPARTED = 'departed';

    /**
     * @return string[]
     */
    public static function values()
    {
        return [
            self::ACTIVE,
            self::SCHEDULED,
            self::DELAYED,
            self::DEPARTED
        ];
    }
}