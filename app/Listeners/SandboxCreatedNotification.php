<?php

namespace App\Listeners;

use App\Enums\NotificationTypesEnum;
use App\Repositories\LessonProgressRepository;
use App\Repositories\NotificationsRepository;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SandboxCreatedNotification implements ShouldQueue, ShouldBroadcast
{
    use InteractsWithQueue,
        InteractsWithSockets;

    private LessonProgressRepository $lessonProgressRepository;
    private NotificationsRepository $notificationsRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(
        LessonProgressRepository $lessonProgressRepository,
        NotificationsRepository $notificationsRepository
    ) {
        $this->lessonProgressRepository = $lessonProgressRepository;
        $this->notificationsRepository = $notificationsRepository;
    }

    public function broadcastOn()
    {
        // TODO: Implement broadcastOn() method.
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $lessonTag = $this->lessonProgressRepository->getLastEnrolledLessonTag(
            $event->data['receiver_id'], $event->data['course_id']
        );

        // Save DB
        $notification = $this->notificationsRepository->create([
            'type' => NotificationTypesEnum::TYPE_SANDBOX_READY,
            'receiver_id' => $event->data['receiver_id'],
            'placeholders' => [
                'course_tag' => $event->data['course_tag'],
                'lesson_tag' => $lessonTag
            ]
        ]);

        // Send socket message
    }
}
