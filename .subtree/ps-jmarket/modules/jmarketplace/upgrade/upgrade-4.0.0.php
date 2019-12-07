<?php
/**
* 2007-2016 PrestaShop
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
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Function used to update your module from previous versions to the version 4.0.0,
 * Don't forget to create one file per version.
 */
function upgrade_module_4_0_0($module)
{
    //SELLER PROFILE
    Configuration::updateValue('JMARKETPLACE_SHOW_PSHOP_NAME', 1);
    Configuration::updateValue('JMARKETPLACE_SHOW_PLANGUAGE', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PCIF', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PEMAIL', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PPHONE', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PFAX', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PADDRESS', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PCOUNTRY', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PSTATE', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PCITY', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PPOSTAL_CODE', 0);
    Configuration::updateValue('JMARKETPLACE_SHOW_PDESCRIPTION', 1);
    Configuration::updateValue('JMARKETPLACE_SHOW_PLOGO', 1);
    return $module;
}
