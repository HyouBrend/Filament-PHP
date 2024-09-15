<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Filament Admin Panel Path
    |--------------------------------------------------------------------------
    |
    | This is the URL path where your Filament admin panel will be accessible from.
    | You may change this path to anything you like.
    |
    */

    'path' => env('FILAMENT_PATH', 'admin'),

    /*
    |--------------------------------------------------------------------------
    | Filament Admin Panel URL
    |--------------------------------------------------------------------------
    |
    | You can specify the domain or subdomain where your Filament admin panel
    | should be available.
    |
    */

    'domain' => env('FILAMENT_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | Default Icon Set
    |--------------------------------------------------------------------------
    |
    | This is the default icon set to use in the Filament admin panel.
    | You may change this to 'heroicons' or any other icon set of your choice.
    |
    */

    'default_icon_set' => 'heroicons',

    /*
    |--------------------------------------------------------------------------
    | Filament Middleware Stack
    |--------------------------------------------------------------------------
    |
    | You can specify the middleware stack that should be used for all Filament
    | routes in your application.
    |
    */

    'middleware' => [
        'web',
        'auth',
    ],

    /*
    |--------------------------------------------------------------------------
    | Filament Dark Mode
    |--------------------------------------------------------------------------
    |
    | You can enable or disable dark mode for the Filament admin panel.
    |
    */

    'dark_mode' => true,

    /*
    |--------------------------------------------------------------------------
    | Default Date and Time Format
    |--------------------------------------------------------------------------
    |
    | This option controls the date and time format for the Filament admin panel.
    |
    */

    'date_format' => 'Y-m-d',
    'time_format' => 'H:i:s',

];