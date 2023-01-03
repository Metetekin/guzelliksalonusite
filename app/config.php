<?php

define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', 'https://guzelliksalonu.sitearaci.com');

error_reporting(0);
date_default_timezone_set('Europe/Istanbul');

return [
  'db' => [
    'name'    =>  'sitearac_guzellik',
    'host'    =>  'localhost',
    'user'    =>  'sitearac_guzellik',
    'pass'    =>  '123emo123.',
    'charset' =>  'utf8mb4'
  ]
];
