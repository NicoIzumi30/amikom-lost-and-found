<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Request;
use App\Models\LoginLog;
use Illuminate\Auth\Events\Login;

class LoginLogger
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {

        $user = $event->user;
        $ipAddr = Request::ip();
        $device = Request::header('User-Agent');

        LoginLog::create([
            'user_id' => $user->id,
            'ip_address' => $ipAddr,
            'device' => $device
        ]);
    }
}
