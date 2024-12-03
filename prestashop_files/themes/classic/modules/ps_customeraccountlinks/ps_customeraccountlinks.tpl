{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="{$urls.pages.my_account}" rel="nofollow">
      {l s='Your account' d='Shop.Theme.Customeraccount'}
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">{l s='Your account' d='Shop.Theme.Customeraccount'}</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
    {if $customer.is_logged}
      {foreach from=$my_account_urls item=my_account_url}
      {if $my_account_url.title eq "Dane osobowe"}
        <li>
          <a href="{$my_account_url.url}" title="{$my_account_url.title}" rel="nofollow">
            Informacja
          </a>
        </li>
        <li>
          <a href="http://localhost:8080/index.php?controller=address" title="Dodaj pierwszy adres" rel="nofollow">
            Dodaj pierwszy adres
          </a>
        </li>
      {elseif $my_account_url.title eq "Moje pokwitowania - korekty płatności"}
        <li>
          <a href="{$my_account_url.url}" title="Potwierdzenia zwrotów" rel="nofollow">
            Potwierdzenia zwrotów
          </a>
        </li>
        <li>
          <a href="http://localhost:8080/index.php?mylogout=" title="Wyloguj się" rel="nofollow">
            Wyloguj się
          </a>
        </li>
      {elseif $my_account_url.title eq "Lista życzeń"}
      {elseif $my_account_url.title eq "Adresy"}
      {else}
        <li>
          <a href="{$my_account_url.url}" title="{$my_account_url.title}" rel="nofollow">
            {$my_account_url.title}
          </a>
        </li>
      {/if}
    {/foreach}
    {else}
      <li>
        <a href="http://localhost:8080/index.php?controller=my-account" title="Zaloguj się" rel="nofollow">
          Zaloguj się
        </a>
      </li>
      <li>
        <a href="http://localhost:8080/index.php?controller=authentication&create_account=1" title="Utwórz konto" rel="nofollow">
          Utwórz konto
        </a>
      </li>
    {/if}
    {hook h='displayMyAccountBlock'}
	</ul>
</div>
