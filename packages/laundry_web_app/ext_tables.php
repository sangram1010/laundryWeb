<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'LaunderyWebCleaners.LaundryWebApp',
            'Laundry',
            'Laundry'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('laundry_web_app', 'Configuration/TypoScript', 'LaundryWeb App');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_laundrywebapp_domain_model_login', 'EXT:laundry_web_app/Resources/Private/Language/locallang_csh_tx_laundrywebapp_domain_model_login.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_laundrywebapp_domain_model_login');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_laundrywebapp_domain_model_deliveryperson', 'EXT:laundry_web_app/Resources/Private/Language/locallang_csh_tx_laundrywebapp_domain_model_deliveryperson.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_laundrywebapp_domain_model_deliveryperson');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_laundrywebapp_domain_model_customer', 'EXT:laundry_web_app/Resources/Private/Language/locallang_csh_tx_laundrywebapp_domain_model_customer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_laundrywebapp_domain_model_customer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_laundrywebapp_domain_model_order', 'EXT:laundry_web_app/Resources/Private/Language/locallang_csh_tx_laundrywebapp_domain_model_order.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_laundrywebapp_domain_model_order');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_laundrywebapp_domain_model_orderitem', 'EXT:laundry_web_app/Resources/Private/Language/locallang_csh_tx_laundrywebapp_domain_model_orderitem.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_laundrywebapp_domain_model_orderitem');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_laundrywebapp_domain_model_address', 'EXT:laundry_web_app/Resources/Private/Language/locallang_csh_tx_laundrywebapp_domain_model_address.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_laundrywebapp_domain_model_address');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_laundrywebapp_domain_model_status', 'EXT:laundry_web_app/Resources/Private/Language/locallang_csh_tx_laundrywebapp_domain_model_status.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_laundrywebapp_domain_model_status');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_laundrywebapp_domain_model_product', 'EXT:laundry_web_app/Resources/Private/Language/locallang_csh_tx_laundrywebapp_domain_model_product.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_laundrywebapp_domain_model_product');

    }
);
