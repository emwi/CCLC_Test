<?php

return [
    'dsn'     => "sqlite:.htsqlite.db",
    'username'            => "test",
    'password'            => "test",
    'driver_options'      => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
    'table_prefix'        => "test_",
    'verbose'             => true,
    'debug_connect'     => 'true',
];
