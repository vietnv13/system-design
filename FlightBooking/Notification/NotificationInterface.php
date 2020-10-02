<?php

namespace SystemDesign\Notification;

/**
 * Interface NotificationInterface
 */
interface NotificationInterface
{
    /**
     * @return bool
     */
    public function send(): bool;
}