<?php
return [
    'backend' => [
        'frontName' => 'admin_1h1ocf'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'amqp' => [
            'host' => 'rabbitmq',
            'port' => '5672',
            'user' => 'rabbitmq_developer',
            'password' => 'bqYbQBOcA8v12LW',
            'virtualhost' => '/'
        ],
        'consumers_wait_for_messages' => 0
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'lcV1aWMUyGB5Idb4PeiQ34tLOqELh9Dt'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '491_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'cache-developer',
                    'database' => '0',
                    'port' => '6384',
                    'password' => 'dCkKLUX2HlFDki?5SEoX?M51J9?2zqhe',
                    'compress_data' => '1',
                    'compression_lib' => 'l4z'
                ]
            ],
            'page_cache' => [
                'id_prefix' => '491_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'crypt' => [
        'key' => 'ff1e076d2691b09a4a9dcd01dd90137d'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'mariadb',
                'dbname' => 'developerfitchsau_m2_cf3d_developer',
                'username' => 'developerfitchsau_m2_cf3d',
                'password' => 'B(pzF_jq0V01Ecf27847',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'session-developer',
            'port' => '6383',
            'password' => 'dCkKLUX2HlFDki?5SEoX?M51J9?2zqhe',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '0',
            'compression_threshold' => '2048',
            'compression_library' => 'lz4',
            'log_level' => '3',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0'
        ]
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'full_page' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'translate' => 1,
        'config_webservice' => 1
    ],
    'downloadable_domains' => [
        'developer.fitchs.au'
    ],
    'install' => [
        'date' => 'Thu, 03 Aug 2023 23:35:23 +0000'
    ],
    'http_cache_hosts' => [
        [
            'host' => 'varnish',
            'port' => '8081'
        ]
    ]
];
