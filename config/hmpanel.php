<?php

    return [

        // Panel Credential
        'username'          => env('HMPANEL_USERNAME', 'administrator'),
        'password'          => env('HMPANEL_PASSWORD', '12345678'),

        // JWT Settings
        'jwt_secret'        => env('JWT_SECRET', env('APP_KEY')),
        'jwt_access'        => env('JWT_ACCESS', 900),
        'jwt_refresh'       => env('JWT_REFRESH', 7200),

        // Custom Vars
        'name'              => env('HMPANEL_NAME', 'HmPanel Control Panel'),
        'website'           => env('HMPANEL_WEBSITE', 'https://hmpanel.sh'),
        'activesetupcount'  => env('HMPANEL_ACTIVESETUPCOUNT', 'https://service.hmpanel.sh/setupcount'),
        'documentation'     => env('HMPANEL_DOCUMENTATION', 'https://hmpanel.sh/docs.html'),
        'app'               => env('HMPANEL_APP', 'https://play.google.com/store/apps/details?id=it.christiangiupponi.hmpanel'),

        // Global Settings
        'users_prefix'      => env('HMPANEL_USERS_PREFIX', 'cp'),
        'phpvers'           => ['8.1','8.0','7.4'],
        'services'          => ['nginx','php','mysql','redis','supervisor'],
        'default_php'       => '8.0',

    ];
