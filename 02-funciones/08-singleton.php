<?php

class DBConnection
{
    const DEFAULT_HOST = "mysql";
    const DEFAULT_HOST_PROD = "mysql";
    const POSTGRES_HOST = "postgres";
    const POSTGRES_HOST_PROD = "postgres";

    public function __construct($dsn = "mysql")
    {
        //existo
    }
}

$singleton = new DBConnection(DBConnection::POSTGRES_HOST);


