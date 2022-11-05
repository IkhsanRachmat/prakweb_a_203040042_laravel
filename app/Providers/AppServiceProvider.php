<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
	@@ -23,6 +25,6 @@ public function register()
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}