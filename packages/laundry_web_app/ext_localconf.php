<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LaunderyWebCleaners.LaundryWebApp',
            'Laundry',
            [
                'Order' => 'list, show, new, create, edit, update, delete',
                'Login' => 'list, show, new, create, edit, update, delete',
                'DeliveryPerson' => 'list, show, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'Orderitem' => 'list, show, new, create, edit, update, delete',
                'Address' => 'list, show, new, create, edit, update, delete',
                'Status' => 'list, show, new, create, edit, update, delete',
                'Product' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Order' => 'list, show, new, create, edit, update, delete',
                'Login' => 'create, update, delete',
                'DeliveryPerson' => 'create, update, delete',
                'Customer' => 'create, update, delete',
                'Orderitem' => 'create, update, delete',
                'Address' => 'create, update, delete',
                'Status' => 'create, update, delete',
                'Product' => 'create, update, delete'
            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LaunderyWebCleaners.LaundryWebApp',
            'Customerlist',
            [
                'Customer' => 'list, show, new, create, edit, update, delete',

            ],
            // non-cacheable actions
            [
                'Customer' => 'list, show, new, create, edit, update, delete',
            ]
        );
       \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LaunderyWebCleaners.LaundryWebApp',
            'DeliveryPerson',
            [
                'DeliveryPerson' => 'list, show, new, create, edit, update, delete',
            ],
            // non-cacheable actions
            [
                'DeliveryPerson' => 'list, show, new, create, edit, update, delete',
            ]
        );
       \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LaunderyWebCleaners.LaundryWebApp',
            'LaundryProduct',
            [
                'Product' => 'list, show, new, create, edit, update, delete'

            ],
            // non-cacheable actions
            [
                'Product' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LaunderyWebCleaners.LaundryWebApp',
            'NewOrder',
            [
                'Order' => 'list, show, new, create, edit, update, delete',
            ],
            // non-cacheable actions
            [
                'Order' => 'list, show, new, create, edit, update, delete',            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LaunderyWebCleaners.LaundryWebApp',
            'CurrentOrder',
            [
                'Order' => 'list, show, new, create, edit, update, delete',
            ],
            // non-cacheable actions
            [
                'Order' => 'list, show, new, create, edit, update, delete',            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'LaunderyWebCleaners.LaundryWebApp',
            'CompletedOrder',
            [
                'Order' => 'list, show, new, create, edit, update, delete',
            ],
            // non-cacheable actions
            [
                'Order' => 'list, show, new, create, edit, update, delete',            ]
        );
        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        laundry {
                            iconIdentifier = laundry_web_app-plugin-laundry
                            title = LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundry_web_app_laundry.name
                            description = LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundry_web_app_laundry.description
                            tt_content_defValues {
                                CType = list
                                list_type = laundrywebapp_laundry
                            }
                            
                        }
                        LaundryProduct {
                            iconIdentifier = laundry_web_app-plugin-laundry
                            title = LaundryProduct
                            description = LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundry_web_app_laundry.description
                            tt_content_defValues {
                                CType = list
                                list_type = laundrywebapp_laundry
                            }
                            
                        }
                        Customerlist {
                            iconIdentifier = laundry_web_app-plugin-laundry
                            title = Customerlist
                            description = LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundry_web_app_laundry.description
                            tt_content_defValues {
                                CType = list
                                list_type = laundrywebapp_laundry
                            }
                            
                        }
                        DeliveryPerson {
                            iconIdentifier = laundry_web_app-plugin-laundry
                            title = DeliveryPerson
                            description = LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundry_web_app_laundry.description
                            tt_content_defValues {
                                CType = list
                                list_type = laundrywebapp_laundry
                            }
                            
                        }
                         NewOrder {
                            iconIdentifier = laundry_web_app-plugin-laundry
                            title = NewOrder
                            description = LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundry_web_app_laundry.description
                            tt_content_defValues {
                                CType = list
                                list_type = laundrywebapp_laundry
                            }
                            
                        }
                         CurrentOrder {
                            iconIdentifier = laundry_web_app-plugin-laundry
                            title = CurrentOrder
                            description = LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundry_web_app_laundry.description
                            tt_content_defValues {
                                CType = list
                                list_type = laundrywebapp_laundry
                            }
                            
                        }
                         CompletedOrder {
                            iconIdentifier = laundry_web_app-plugin-laundry
                            title = CompletedOrder
                            description = LLL:EXT:laundry_web_app/Resources/Private/Language/locallang_db.xlf:tx_laundry_web_app_laundry.description
                            tt_content_defValues {
                                CType = list
                                list_type = laundrywebapp_laundry
                            }
                            
                        }
                        
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'laundry_web_app-plugin-laundry',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:laundry_web_app/Resources/Public/Icons/user_plugin_laundry.svg']
			);
		
    }
);
