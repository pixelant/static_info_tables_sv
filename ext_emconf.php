<?php
########################################################################
# Extension Manager/Repository config file for ext "static_info_tables_sv".
#
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (sv)',
    'description' => 'Swedish language pack for Static Info Tables.',
    'category' => 'misc',
    'shy' => 0,
    'version' => '6.6.0',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Mathas Bolt Lesniak',
    'author_email' => 'mathias@pixelant.no',
    'author_company' => 'Pixelant',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'static_info_tables' => '6.7.3-6.7.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ]
    ]
];
