<?php

namespace App\Repositories;

use App\Models\Notification;
use Czim\Repository\BaseRepository;
use Illuminate\Support\Facades\DB;

class NotificationsRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Notification::class;
    }

    /**
     * Get all notifications
     *
     * @param string $receiverId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll(string $receiverId)
    {
        $notifications = DB::select('SELECT *, IF(DATEDIFF(NOW(), created_at) <= 1, TRUE, FALSE) AS is_recent 
            FROM notifications
            WHERE receiver_id= :receiverId ORDER BY created_at', [
                'receiverId' => $receiverId
        ]);

        return $this->model->hydrate($notifications);
    }

    /**
     * Get new notifications count for a specific user
     *
     * @param string $receiverId
     * @return int
     */
    public function getNewCount(string $receiverId)
    {
        return $this->query()
            ->where('receiver_id', $receiverId)
            ->where('is_viewed', false)
            ->count();
    }

    /**
     * Mark notifications as read
     *
     * @param string $accountId
     * @return void
     */
    public function markAsRead(string $accountId)
    {
        $this->model->where('receiver_id', $accountId)
            ->update(['is_viewed' => true]);
    }
}
