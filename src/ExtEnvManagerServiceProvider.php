<?php

namespace Fadlisaad\ExtEnvManager;

use Illuminate\Support\ServiceProvider;

class ExtEnvManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(ExtEnvManager $extension)
    {
        if (! ExtEnvManager::boot()) {
            return ;
        }

        $this->app->booted(function () {
            ExtEnvManager::routes(__DIR__.'/../routes/web.php');
        });
    }
}
