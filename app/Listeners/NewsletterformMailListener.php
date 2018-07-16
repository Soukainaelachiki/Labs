<?php

namespace App\Listeners;
use Mail;
use App\Mail\NewsletterMail;
use App\Events\Newsletterform;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsletterformMailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Newsletterform  $event
     * @return void
     */
    public function handle(Newsletterform $event)
    {
        Mail::to($event->request)->send(new  NewsletterMail($event->request));
    }
}
