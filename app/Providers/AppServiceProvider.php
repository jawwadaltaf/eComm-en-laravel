<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

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
    public function boot(Request $req)
    {
		$path_array = $req->segments();
		$admin_route = config('app.admin_route');

		 //https://localhost:8000/admin/anything
		if(in_array($admin_route,$path_array)){
			config(['app.app_scope' => 'admin']);
		}
		
		$app_scope = config('app.app_scope');
			
			if($app_scope == 'admin')
				$path = resource_path('admin/views'); //resources/admin/views
			else //if($app_scope == 'public')
				$path = resource_path('public/views');
				
				
			view()->addLocation($path);
        //
    }
}
