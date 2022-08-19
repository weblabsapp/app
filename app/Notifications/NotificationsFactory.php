<?php

namespace App\Notifications;


use App\Models\Notification;

class NotificationsFactory
{
    private Notification $notification;

    /**
     * Get notifications factory
     *
     * @param Notification $notification
     * @return AbstractNotification|null
     */
    public static function factory(Notification $notification)
    {
        $instance = new static;
        $instance->notification = $notification;

        return $instance->getNotification();
    }

    /**
     * Get notification instance
     *
     * @return AbstractNotification|null
     */
    public function getNotification()
    {
        $notificationType = $this->notification->type;

        $notificationsNamespace = namespace\AbstractNotification::class;
        $className = str_replace(' ', '', ucwords(str_replace('_', ' ', $notificationType)));
        $className = (str_replace('AbstractNotification', $className, $notificationsNamespace));

        try {
            return new $className($this->notification);
        } catch (\Throwable $exception) {
            return null;
        }
    }
}