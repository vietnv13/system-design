<?php

namespace SystemDesign\Notification;

/**
 * Class EmailNotification
 * @package SystemDesign\Notification
 */
class EmailNotification extends NotificationAbstract
{
    /**
     * @var string
     */
    private string $email;

    /**
     * @return bool
     */
    public function send(): bool
    {
        // TODO: Implement send() method.

        return true;
    }
}