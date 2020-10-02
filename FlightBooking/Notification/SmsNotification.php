<?php

namespace SystemDesign\Notification;

/**
 * Class SmsNotification
 * @package SystemDesign\Notification
 */
class SmsNotification extends NotificationAbstract
{
    /**
     * @var string
     */
    private string $phoneNumber;

    /**
     * @return bool
     */
    public function send(): bool
    {
        // TODO: Implement send() method.

        return true;
    }
}