<?php

namespace kenobi883\GoToMeeting;

use Illuminate\Support\ServiceProvider;

/**
 * GotoMeeting ServiceProvider.
 *
 * @category   Laravel GoToMeeting
 *
 * @copyright  Copyright (c) 2016
 * @author     heydavid713 <heydavid713@aim.com>
 */
class GoToMeetingServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/citrix.php' => config_path('citrix.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
