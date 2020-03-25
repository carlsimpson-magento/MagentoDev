<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => 'localhost',
                'dbname' => 'magentodev',
                'username' => 'root',
                'password' => 'root',
                'active' => '1',
                'persistent' => null
            ],
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magentodev',
                'username' => 'root',
                'password' => 'root',
                'active' => '1',
                'driver_options' => [

                ]
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => '88b492bbcced9d73d7dca8e164f32217'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '7d3_'
            ],
            'page_cache' => [
                'id_prefix' => '7d3_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
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
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'google_product' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'magento-dev.test'
    ],
    'install' => [
        'date' => 'Wed, 25 Mar 2020 10:22:13 +0000'
    ]
];
