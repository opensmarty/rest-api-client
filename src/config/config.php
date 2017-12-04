<?php

return array(

    /**
     * Rest client environment for selecting services
     * Available: 'production', 'dev'
     */
    'environment' => env('REST_CLIENT_ENV', 'production'),

    /**
     * Debug mode for showing logs
     */
    'debug_mode' => env('APP_DEBUG', false),

    /**
     * Access Token cache time
     * Set 0 to disable cache of access tokens
     */
    'oauth_tokens_cache_minutes' => 10,

    /**
     *  Guzzle Client Config
     */
    'guzzle_client_config' => [
        'timeout' => 29.0,      // Request timeout: 29 secs
    ],

    /**
     * Shared config for services
     */
    'shared_service_config' => [

        'headers' => [
            'User-Agent' => 'opensmarty-testing/1.0',
        ],

        'api_url' => 'api/',

        'oauth2_credentials' => [
            'client_id' => '1',
            'client_secret' => 'EpAeMzdkzzstElFqROrn61NVfpQiZEbuE8bWA48t',
        ],

        'oauth2_access_token_url' => 'oauth/token',

        'oauth2_grant_types' => [
            'client_credentials' => 'client_credentials',
            'authorization_code' => 'authorization_code',
            'refresh_token' => 'refresh_token',
            'password' => 'password',
        ],

    ],

    /**
     * Default Service
     */
    'default_service_name' => 'opensmarty-starter',

    /**
     * Services
     */
    'services' => [

        // environment: dev
        'dev' => [

            'local' => [

                'base_uri' => 'http://opensmarty-starter.app/',

                'headers' => [
                    'Accept' => 'application/x.opensmarty.v1+json',
                ],

            ],

            'opensmarty-starter' => [

                'base_uri' => 'http://dev.opensmarty-starter.app/',

                'headers' => [
                    'Accept' => 'application/x.opensmarty.v1+json',
                ],

            ],

        ],

        // environment: production
        'production' => [

            'opensmarty-starter' => [

                'base_uri' => 'http://opensmarty-starter.app/',

                'headers' => [
                    'Accept' => 'application/x.opensmarty.v1+json',
                ],

            ],

        ],

    ],

);
