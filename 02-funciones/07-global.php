<?php

class Configuration
{
    private $configuration = [];

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    public function get(string $key)
    {
        return isset($this->configuration[$key]) ?? $this->configuration[$key];
    }
}

$databaseConfig = new Configuration([
    "type" => "mysql",
    "name" => "test",
    "users" => "root",
    "password" => "password",
    "host" => "localhost",
]);

new PDO("{$databaseConfig['type']}:host={$databaseConfig['host']};dbname={$databaseConfig['name']}", $databaseConfig['user'], $databaseConfig['password']);



function configuration()
{
    return [
        "email" => "admin@mail.com",
        "emailpassword" => "urtaoetnseuo",
        "emailport" => 3030,
    ];
}



