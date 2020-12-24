<?php

$env = require 'env.php';

$GLOBALS['database'] =  [
            'HOST' => $env['database']['mysql']['DB_HOST'],
            'USERNAME' => $env['database']['mysql']['DB_USERNAME'],
            'PASSWORD' => $env['database']['mysql']['DB_PASSWORD'],
            'DBNAME' => $env['database']['mysql']['DB_NAME']
];