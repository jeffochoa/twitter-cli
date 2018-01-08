<?php
return [
    'telegram' => [
        'api_token' => '',
        'bot_username' => '',
        'channel_username' => '', // Channel username to send message
        'channel_signature' => '' // This will be assigned in the footer of message
    ],
    'twitter' => [
        'consurmer_key' => $_ENV['CONSUMER_KEY'],
        'consurmer_secret' => $_ENV['CONSUMER_SECRET'],
        'access_token' => $_ENV['ACCESS_TOKEN'],
        'access_token_secret' => $_ENV['ACCESS_TOKEN_SECRET'],
    ],
    'facebook' => [
        'app_id' => '',
        'app_secret' => '',
        'default_graph_version' => '',
        'page_access_token' => ''
    ]
];
