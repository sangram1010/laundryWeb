<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address',
        'label' => 'addressid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'houseno,street,state,country,email',
        'iconfile' => 'EXT:laundry_web_app/Resources/Public/Icons/tx_laundrywebapp_domain_model_address.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, addressid, houseno, street, pincode, state, country, contactno, email',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, addressid, houseno, street, pincode, state, country, contactno, email, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_laundrywebapp_domain_model_address',
                'foreign_table_where' => 'AND {#tx_laundrywebapp_domain_model_address}.{#pid}=###CURRENT_PID### AND {#tx_laundrywebapp_domain_model_address}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'addressid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address.addressid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'houseno' => [
            'exclude' => true,
            'label' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address.houseno',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'street' => [
            'exclude' => true,
            'label' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address.street',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'pincode' => [
            'exclude' => true,
            'label' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address.pincode',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'state' => [
            'exclude' => true,
            'label' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address.state',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'country' => [
            'exclude' => true,
            'label' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address.country',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'contactno' => [
            'exclude' => true,
            'label' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address.contactno',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundrywebapp_domain_model_address.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email,required'
            ]
        ],
    
    ],
];
