<?php

/**
 * Extension Manager/Repository config file for ext "typo3_tutor_masterconfig".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Tutor Masterconfig',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '9.1.0-9.1.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Typo3tutor\\Typo3TutorMasterconfig\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sacha Vorbeck',
    'author_email' => 'vorbeck@TYPO3Tutor.de',
    'author_company' => 'TYPO3Tutor',
    'version' => '1.0.0',
];
