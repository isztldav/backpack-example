<?php

namespace App\Providers;

use App\Models\Vm_request;
use App\Observers\Vm_requesObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Vm_request::observe(Vm_requesObserver::class);
    }
}
