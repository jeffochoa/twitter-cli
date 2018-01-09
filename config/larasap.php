<?php
return [
    'telegram' => [
        'api_token' => '',
        'bot_username' => '',
        'channel_username' => '', // Channel username to send message
        'channel_signature' => '' // This will be assigned in the footer of message
    ],
    'twitter' => [
        'consurmer_key' => env('CONSUMER_KEY'),
        'consurmer_secret' => env('CONSUMER_SECRET'),
        'access_token' => env('ACCESS_TOKEN'),
        'access_token_secret' => env('ACCESS_TOKEN_SECRET'),
    ],
    'facebook' => [
        'app_id' => '',
        'app_secret' => '',
        'default_graph_version' => '',
        'page_access_token' => ''
    ]
];
