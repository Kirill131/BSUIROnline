<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
	 
    public function boot()
    {
		View::composer('*', 'App\Providers\ViewComposers\SiteComposer');
        User::created(function($user){
			@mail($user->email,'auth','<p>"Ты приглашен в майкрософт!!!"</p>','From:microsoft@mail.com');
		});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
