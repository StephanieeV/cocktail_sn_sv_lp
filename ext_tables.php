<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SNSVLP.CocktailSnSvLp',
            'Pi1',
            'Recettes (SNSVLP)'
        );

        $pluginSignature = str_replace('_', '', 'cocktail_sn_sv_lp') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:cocktail_sn_sv_lp/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SNSVLP.CocktailSnSvLp',
            'Pi2',
            'Cocktails (SNSVLP)'
        );

        $pluginSignature = str_replace('_', '', 'cocktail_sn_sv_lp') . '_pi2';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:cocktail_sn_sv_lp/Configuration/FlexForms/flexform_pi2.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('cocktail_sn_sv_lp', 'Configuration/TypoScript', 'Cocktail SNSVLP');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailsnsvlp_domain_model_tag', 'EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_csh_tx_cocktailsnsvlp_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailsnsvlp_domain_model_tag');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailsnsvlp_domain_model_recipe', 'EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_csh_tx_cocktailsnsvlp_domain_model_recipe.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailsnsvlp_domain_model_recipe');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailsnsvlp_domain_model_step', 'EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_csh_tx_cocktailsnsvlp_domain_model_step.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailsnsvlp_domain_model_step');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailsnsvlp_domain_model_review', 'EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_csh_tx_cocktailsnsvlp_domain_model_review.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailsnsvlp_domain_model_review');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailsnsvlp_domain_model_cocktail', 'EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_csh_tx_cocktailsnsvlp_domain_model_cocktail.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailsnsvlp_domain_model_cocktail');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailsnsvlp_domain_model_utensil', 'EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_csh_tx_cocktailsnsvlp_domain_model_utensil.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailsnsvlp_domain_model_utensil');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailsnsvlp_domain_model_quantity', 'EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_csh_tx_cocktailsnsvlp_domain_model_quantity.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailsnsvlp_domain_model_quantity');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailsnsvlp_domain_model_ingredient', 'EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_csh_tx_cocktailsnsvlp_domain_model_ingredient.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailsnsvlp_domain_model_ingredient');

    }
);
