<?php

class DbSettings implements SettingsInterface
{

    public static function get(): array
    {
        return [
               'driver'        => getenv('DB_DRIVER'),
               'host'          => getenv('DB_HOST'),
               'port'          => getenv('DB_PORT'),
               'dbname'        => getenv('DB_NAME'),
               'user'          => getenv('DB_USER'),
               'password'      => getenv('DB_PASSWORD'),
               'service'       => true,
               'charset'       => 'UTF8',
               'driverOptions' => ['charset' => 'UTF8'],
           ];
    }

}
