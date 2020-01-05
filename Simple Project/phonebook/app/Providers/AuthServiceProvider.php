<?php

namespace App\Providers;
use \Firebase\JWT\JWT;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
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
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {

        $this->app['auth']->viaRequest('api', function ($request) {
            $token=$request->input('access_token');
            $key=env('TOKEN_KEY');
            try{
                $decoded = JWT::decode($token, $key, array('HS256'));
                return new User();
                
            } catch(\Exception $e){
                return null;
            }   

        });
    }
}
