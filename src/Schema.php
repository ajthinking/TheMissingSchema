<?php

namespace TheMissingSchema;

class Schema
{
    public static function show()
    {
        return (object) [
            'users' => [
                'name' => [
                    'type' => 'string'
                ],
                'email' => [
                    'type' => 'string'
                ],                
            ],
        ];
    }
}