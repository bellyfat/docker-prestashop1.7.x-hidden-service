<?php
/**
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2014 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Function used to update your module from previous versions to the version 1.9.6,
 * Don't forget to create one file per version.
 */
function upgrade_module_1_9_6($module)
{
    Configuration::updateValue('JMARKETPLACE_SHOW_CONTACT', 0);
    Configuration::updateValue('JMARKETPLACE_PAYPAL', 1);
    Configuration::updateValue('JMARKETPLACE_BANKWIRE', 1);
    
    Db::getInstance()->Execute(
        'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seller_favorite` (
	`id_customer` INT(10) UNSIGNED NOT NULL,
	`id_seller` INT(10) UNSIGNED NOT NULL,
	PRIMARY KEY (`id_customer`, `id_seller`),
	INDEX `id_seller` (`id_seller`)
        ) ENGINE = InnoDB DEFAULT CHARSET=utf8;'
    );
    
    $module->registerHook('backOfficeHeader');
    
    return $module;
}
