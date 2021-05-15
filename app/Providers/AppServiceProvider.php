<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\Booking;
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
    public function boot()
    {
            Validator::extend('isbusy', function($attribute, $value, $parameters, $validator){
                $exists = Booking::where('number', $value)
                ->byBusy(\Arr::get($validator->getData(), $parameters[1]))
                ->first();
    
                return !$exists;
            }); 
    }
}
