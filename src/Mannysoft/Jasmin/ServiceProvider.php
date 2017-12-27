<?php 

namespace Mannysoft\Jasmin;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Mannysoft\Jasmin\Jasmin;

class ServiceProvider extends BaseServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/jasmin.php' => config_path('jasmin.php'),
        ]);
        
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/jasmin.php', 'jasmin'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('jasmin', function() {
            return new Jasmin(config('jasmin'));
        });
    }

}
