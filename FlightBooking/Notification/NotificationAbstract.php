<?php


namespace SystemDesign\Notification;

/**
 * Class NotificationAbstract
 * @package SystemDesign\Notification
 */
abstract class NotificationAbstract implements NotificationInterface
{
    /**
     * @var int
     */
    private int $notificationId;

    /**
     * @var string
     */
    private string $createdOn;

    /**
     * @var string
     */
    private string $content;

}