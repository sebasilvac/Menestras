<?php

use App\User;
use App\Tienda;

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * @var \App\User
     */
    protected $defaultUser;

    /**
     * @var \App\Tienda
     */
    protected $defaultTienda;

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function defaultUser(){

        if( $this->defaultUser ){
            return $this->defaultUser;
        }

        return $this->defaultUser =  factory(\App\User::class)->create();
    }

    public function defaultTienda(){

        if( $this->defaultTienda ){
            return $this->defaultTienda;
        }

        return $this->defaultTienda =  factory(\App\Tienda::class)->create();
    }
}
