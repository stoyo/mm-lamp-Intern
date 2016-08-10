<?php

return [

    'from' => [
        'address' => env('MAILGUN_FROM_ADDRESS', ''),
        'name'    => env('MAILGUN_FROM_NAME', ''),
    ],

    'reply_to' => env('MAILGUN_REPLY_TO', ''),

    'api_key' => env('MAILGUN_SECRET', ''),

    'public_api_key' => env('MAILGUN_PUBLIC', ''),

    'domain' => env('MAILGUN_DOMAIN', ''),

    'force_from_address' => env('MAILGUN_FORCE_FROM_ADDRESS', false),

    'catch_all' => env('MAILGUN_CATCH_ALL', ''),

    'testmode' => env('MAILGUN_TEST_MODE', false),
];
