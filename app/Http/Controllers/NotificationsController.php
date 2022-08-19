<?php

namespace App\Http\Controllers;

use App\Notifications\NotificationsFactory;
use App\Repositories\NotificationsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    private NotificationsRepository $repository;

    public function __construct(NotificationsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * List all user notifications
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function list(Request $request)
    {
        $notifications = $this->repository->getAll(Auth::id());

        $recent = $earlier = [];

        foreach ($notifications as $notification) {
            $notification = NotificationsFactory::factory($notification);
            if ($notification->notification->is_recent) {
                $recent[] = $notification;
            } else {
                $earlier[] = $notification;
            }
        }

        $this->repository->markAsRead(Auth::id());

        return view('notifications', [
            'recent' => $recent,
            'earlier' => $earlier
        ]);
    }
}