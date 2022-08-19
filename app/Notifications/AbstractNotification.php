<?php

namespace App\Notifications;

use App\Models\Notification;

abstract class AbstractNotification
{
    public Notification $notification;

    /**
     * Get notification instance
     *
     * @param Notification $notification
     */
    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function formatSenderName()
    {
        $sender = $this->notification->sender_id;
    }

    abstract public function getTitle();

    abstract public function getText();

    abstract public function getIcon();

    abstract public function getActionButtons();
}