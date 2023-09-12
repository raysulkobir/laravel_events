<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\AdminFollowup;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendAdminMail
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
    public function handle(UserRegistered $event): void
    {
        Mail::to('test2@gmail.com')->send(new AdminFollowup());

    }
}
