<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    /* Social Media */
    'facebook' => [
        'client_id'     => '561997857984151',
        'client_secret' => '126d2b9eda95bde1e5feaef165d5a15d',
        'redirect'      => 'https://localhost:8000/auth/facebook/callback',
    ],

    'google' => [
        'client_id'     => '248457475558-84tbnvmh4e8f2mo508o95o8ggdqsclro.apps.googleusercontent.com',
        'client_secret' => 'ik7SD9dwgPskoQ9KvGjDyHYE',
        'redirect'      => 'http://localhost:8000/auth/google/callback',
    ],

];
