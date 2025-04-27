<?php

/**
 * Extension Manager/Repository config file for ext "greenmeals".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'GreenMeals',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Greenmeals\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Michaela Brantner',
    'author_email' => 's2210456005@fhooe.at',
    'author_company' => 'fhooe',
    'version' => '1.0.0',
];
