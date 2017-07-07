<?php
/**
 * Created by PhpStorm.
 * User: xyrintech
 * Date: 16/10/15
 * Time: 18:48
 */

namespace XyrinTech\Tenantable;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

class TenantableServiceProvider extends ServiceProvider
{

    public function register(){
        $this->app->singleton(Resolver::class, function($app){
            return new Resolver($app);
        });
    }

    public function boot(Resolver $resolver){

        //resolve tenant, catch PDOExceptions to prevent errors during migration
        try {
        	$resolver->resolveTenant();
        } catch( \PDOException $e ) { }

    }

}