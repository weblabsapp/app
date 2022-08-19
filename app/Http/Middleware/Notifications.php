<?php

namespace App\Http\Middleware;

use App\Repositories\NotificationsRepository;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Notifications
{
    private NotificationsRepository $notificationsRepository;

    public function __construct(NotificationsRepository $notificationsRepository)
    {
        $this->notificationsRepository = $notificationsRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $request->session()->put('new_notifications',
                $this->notificationsRepository->getNewCount(Auth::id())
            );
        }

        return $next($request);
    }
}
