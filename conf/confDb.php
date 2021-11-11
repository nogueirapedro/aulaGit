<?php

class DbSettings implements SettingsInterface
{

    public static function get(): array
    {
        return [
               'driver'        => getenv('mysql'),
               'host'          => getenv('127.0.0.1'),
               'port'          => getenv('3306'),
               'dbname'        => getenv('database'),
               'user'          => getenv('pedro'),
               'password'      => getenv('Su4_Fl4G_C@cthiorr0'),
               'service'       => true,
               'charset'       => 'UTF8',
               'driverOptions' => ['charset' => 'UTF8'],
           ];
    }

}
