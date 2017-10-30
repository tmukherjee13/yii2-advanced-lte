<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'bootstrap'  => ['tmukherjee13\core\ModuleBootstrap'],
    'modules'    => [
        'core'     => [
            'class' => 'tmukherjee13\core\Module',
        ],
    ],

];
