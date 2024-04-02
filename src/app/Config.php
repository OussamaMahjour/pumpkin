<?php
namespace App;

class Config{
    protected array $config = [];

    public function __construct(array $env)
    {
        $this->config=[
            'db' =>[
                'host' => $env['DB_HOST'],
                'user' => $env['DB_USER'],
                'password' => $env['DB_PASS'],
                'dbname' => $env['DB_DATABASE'],
                'driver' => $env['DB_DRIVER']??'pdo_mysql'
            ],
            'environment' => $env['APP_ENVIRONMENT']?? 'production'
        ];
    }
    public function __get($name)
    {
        return $this->config[$name];
    }
}