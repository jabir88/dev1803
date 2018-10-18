<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
     'client_id' => '661919924874-tskj3ffedbocboeusd9jtjpq55fsn0v4.apps.googleusercontent.com',
     'client_secret' => 'Ix50UltB1aAqyXMvXLLHKYZo',
     'redirect' => 'http://localhost:8000/auth/google/callback',
      ],
    // 'facebook' => [
    //  'client_id' => '526493927774680',
    //  'client_secret' => 'd312c7202b36a112386f5336327aedb4',
    //  'redirect' => 'http://localhost:8000/auth/facebook/callback',
    //   ],
];
