<?php

namespace Ghaff\Feedback;

use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(
            __DIR__.'/config/feedback.php', 'feedback'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views','feedback');
        $this->publishes([
            __DIR__.'/views' => resource_path('/views/vendor/feedback'),
        ]);    
        // $this->publishes([
        //     __DIR__.'/assets' => public_path('vendor/feedback'),
        // ], 'public');
        $this->loadMigrationsFrom(__DIR__. '/database/migrations');
     
        $this->publishes([
            __DIR__.'/config/feedback.php' => config_path('feedback.php'),
        ]);

    }
}
