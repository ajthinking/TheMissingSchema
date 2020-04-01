<?php

namespace TheMissingSchema;

use DB;
use TheMissingSchema\Drivers\Sqlite;

class Schema
{
    public static function save()
    {
        $supportedDrivers = [
            'sqlite' => Sqlite::class
        ];

        try {
            $driver = $supportedDrivers[config('database.default')];
        } catch(\Exception $e) {
            dd("Supported database drivers: " . collect($supportedDrivers)->keys()->join(', '));
        }
        
        $schema = $driver::getSchema();

        file_put_contents(
            base_path('database/schema.json'),
            json_encode($schema, JSON_PRETTY_PRINT)
        );
    }
}