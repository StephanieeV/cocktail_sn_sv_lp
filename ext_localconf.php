<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SNSVLP.CocktailSnSvLp',
            'Pi1',
            [
                'Recipe' => 'list, show, search, highlight, random',
                'Review' => 'new, create'
            ],
            // non-cacheable actions
            [
                'Recipe' => 'search, random',
                'Review' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SNSVLP.CocktailSnSvLp',
            'Pi2',
            [
                'Cocktail' => 'list, show, search, random, highlight'
            ],
            // non-cacheable actions
            [
                'Cocktail' => 'search, random'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = cocktail_sn_sv_lp-plugin-pi1
                        title = LLL:EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_db.xlf:tx_cocktail_sn_sv_lp_pi1.name
                        description = LLL:EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_db.xlf:tx_cocktail_sn_sv_lp_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = cocktailsnsvlp_pi1
                        }
                    }
                    pi2 {
                        iconIdentifier = cocktail_sn_sv_lp-plugin-pi2
                        title = LLL:EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_db.xlf:tx_cocktail_sn_sv_lp_pi2.name
                        description = LLL:EXT:cocktail_sn_sv_lp/Resources/Private/Language/locallang_db.xlf:tx_cocktail_sn_sv_lp_pi2.description
                        tt_content_defValues {
                            CType = list
                            list_type = cocktailsnsvlp_pi2
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'cocktail_sn_sv_lp-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cocktail_sn_sv_lp/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
			$iconRegistry->registerIcon(
				'cocktail_sn_sv_lp-plugin-pi2',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cocktail_sn_sv_lp/Resources/Public/Icons/user_plugin_pi2.svg']
			);
		
    }
);
