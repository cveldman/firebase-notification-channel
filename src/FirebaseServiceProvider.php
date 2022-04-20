<?php

namespace Veldman\Firebase;

use Illuminate\Support\ServiceProvider;

class FirebaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /**
         * Here's some example code we use for the pusher package.
        $this->app->when(Channel::class)
        ->needs(Pusher::class)
        ->give(function () {
        $pusherConfig = config('broadcasting.connections.pusher');
        return new Pusher(
        $pusherConfig['key'],
        $pusherConfig['secret'],
        $pusherConfig['app_id']
        );
        });
         */
    }

    public function register()
    {
    }
}