{**
* 2015-2017 Crystals Services
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
*  @author    Crystals Services Sarl <contact@crystals-services.com>
*  @copyright 2015-2017 Crystals Services Sarl
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of Crystals Services Sarl
*}

{if $secondaryMenu.level!=2}</li>{/if}
{if $lastItems}
	{if $secondaryMenu.level==2}
			</div>
			</div>
				{if isset($secondaryMenu.html_contents[$htmlContentPositionsConst.RIGHT])  && (!empty($secondaryMenu.html_contents[$htmlContentPositionsConst.RIGHT]))}
				<div class="mp-image-right hidden-sm hidden-xs">
					<div class="mp-image-right_inner row">
						<div class="col-md-12">
							{$secondaryMenu.html_contents[$htmlContentPositionsConst.RIGHT] nofilter}{* HTML, cannot escape*}
						</div>
					</div>
				</div>
				{/if}
			</div>
			{if isset($secondaryMenu.html_contents[$htmlContentPositionsConst.DOWN])  && (!empty($secondaryMenu.html_contents[$htmlContentPositionsConst.DOWN]))}
			<div class="mp-image-bottom hidden-sm hidden-xs">
				<div class="mp-image-bottom_inner row">
					<div class="col-md-12">
						{$secondaryMenu.html_contents[$htmlContentPositionsConst.DOWN] nofilter}{* HTML, cannot escape*}
					</div>
				</div>
			</div>
			{/if}
			<div class="clear"></div>
		</div>
	{else}
		</ul>
	{/if}
{else}
	{if $secondaryMenu.level==2}
		</div>
	{/if}
{/if}