<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Message;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        view()->composer('*', function($view) {
            $messages = Message::all();          
            $view->with('messages', $messages);            
        });
        
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
