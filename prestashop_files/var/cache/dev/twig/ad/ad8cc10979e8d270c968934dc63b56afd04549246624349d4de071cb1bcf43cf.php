<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig */
class __TwigTemplate_d9d521e0959f3ed9354ab31e9a82f714af44816783b9c5670898f405acd3eb33 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig"));

        // line 25
        echo "
<div class=\"card\" id=\"customer-search-block\">
  <h3 class=\"card-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</h3>
  <div class=\"card-body\">
    <div class=\"row js-search-customer-row mb-3\">
      <div class=\"col-3\">
        <span class=\"float-right\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for a customer", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"col-4\">
        <input type=\"text\"
               class=\"form-control\"
               id=\"customer-search-input\"
        >
        <small class=\"form-text\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for an existing customer by typing the first letters of his/her name.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
        </small>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>

        <a id=\"customer-add-btn\" class=\"btn btn-primary\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_create", ["liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
        echo "\">
          ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new customer", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </a>
      </div>
    </div>

    <div id=\"customer-search-empty-result-warn\" class=\"row d-none\">
      <div class=\"col\">
        <div class=\"col\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No customers found", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
          </div>
        </div>
      </div>
    </div>

    <div id=\"customer-search-loading-notice\" class=\"row d-none\">
      <div class=\"col\">
        <div class=\"col\">
          <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching for customers", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col\">
        <div class=\"row js-customer-search-results\"></div>
      </div>
    </div>
    <div class=\"row d-none\" id=\"customer-checkout-history\">
      <div class=\"col\">
        <ul class=\"nav nav-pills\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active show js-customer-carts-tab\"
               id=\"customer-carts-tab\"
               data-toggle=\"pill\"
               href=\"#customer-carts-tab-content\"
               role=\"tab\"
               aria-controls=\"pills-home\"
               aria-expanded=\"true\"
               aria-selected=\"true\"
            >
              ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-customer-orders-tab\"
               id=\"customer-orders-tab\"
               data-toggle=\"pill\"
               href=\"#customer-orders-tab-content\"
               role=\"tab\"
               aria-controls=\"pills-home\"
               aria-expanded=\"true\"
               aria-selected=\"true\"
            >
              ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item ml-auto\">
            <button class=\"navbar-toggler\" type=\"button\"
                    data-toggle=\"collapse\"
                    data-target=\"#customer-tab-content-container\"
                    id=\"customer-tab-content-container-toggler\"
                    aria-expanded=\"true\"
                    aria-label=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle", [], "Admin.Global"), "html", null, true);
        echo "\">
              <p class=\"mb-0 mt-2\"><i class=\"material-icons\"></i></p>
            </button>
          </li>
        </ul>
        <div class=\"tab-content collapse show\" id=\"customer-tab-content-container\">
          <div class=\"tab-pane fade active show\" id=\"customer-carts-tab-content\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <table class=\"table\" id=\"customer-carts-table\">
              <thead class=\"d-none\">
                <tr>
                  <th>";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
                  <th>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
                  <th>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</th>
                  <th></th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <div class=\"tab-pane fade\" id=\"customer-orders-tab-content\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <table class=\"table\" id=\"customer-orders-table\">
              <thead class=\"d-none\">
              <tr>
                <th>";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total paid", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th></th>
              </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"customer-search-result-template\" class=\"d-none\">
  <div class=\"col-4 js-customer-search-result-col\">
    <div class=\"card js-customer-search-result\">
      <div class=\"card-header\">
        <h3 class=\"card-header-title d-inline-block js-customer-name\"></h3>
        <div class=\"d-inline-block float-right\">
          #<span class=\"js-customer-id\"></span>
        </div>
      </div>
      <div class=\"card-body\">
        <p class=\"mb-0 js-customer-email\"></p>
        <p class=\"mb-0 js-customer-birthday\"></p>
      </div>
      <div class=\"card-footer\">
        <a class=\"btn btn-outline-secondary js-details-customer-btn\">
          ";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details", [], "Admin.Global"), "html", null, true);
        echo "
        </a>
        <button type=\"button\" class=\"btn btn-outline-primary float-right js-choose-customer-btn\">
          ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <button type=\"button\" class=\"btn btn-outline-primary float-right js-change-customer-btn d-none\">
          ";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
</div>

<script id=\"customer-carts-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-id\"></td>
    <td class=\"js-cart-date\"></td>
    <td class=\"js-cart-total\"></td>
    <td class=\"text-right\">
      <a
        title=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View this cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "\"
        class=\"btn btn-outline-primary js-cart-details-btn\">
        ";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details", [], "Admin.Global"), "html", null, true);
        echo "
      </a>

      <button
        title=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use this cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "\"
        class=\"btn btn-outline-primary js-use-cart-btn\">
        ";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </button>
    </td>
  </tr>
</script>

<script id=\"customer-orders-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-order-id\"></td>
    <td class=\"js-order-date\"></td>
    <td class=\"js-order-products\"></td>
    <td class=\"js-order-total-paid\"></td>
    <td class=\"js-order-payment-method\"></td>
    <td class=\"js-order-status\"></td>
    <td class=\"text-right\">
      <a
        title=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View this order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "\"
        class=\"btn btn-outline-primary js-order-details-btn\">
        ";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details", [], "Admin.Global"), "html", null, true);
        echo "
      </a>

      <button
        title=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate this order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "\"
        class=\"btn btn-outline-primary js-use-order-btn\">
        ";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </button>
    </td>
  </tr>
</script>

<script id=\"js-empty-list-row\" type=\"text/template\">
  <tr class=\"empty_row js-empty-row\">
    <td colspan=\"8\" class=\"border-0\">
      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
        <p class=\"mb-2\">";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No records found", [], "Admin.Global"), "html", null, true);
        echo "</p>
      </div>
    </td>
  </tr>
</script>

<script id=\"js-loading-list-row\" type=\"text/template\">
  <tr class=\"empty_row js-empty-row\">
    <td colspan=\"8\" class=\"border-0\">
      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">autorenew</i></p>
        <p class=\"mb-2\">";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading...", [], "Admin.Global"), "html", null, true);
        echo "</p>
      </div>
    </td>
  </tr>
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 243,  338 => 232,  324 => 221,  319 => 219,  312 => 215,  307 => 213,  288 => 197,  283 => 195,  276 => 191,  271 => 189,  254 => 175,  248 => 172,  242 => 169,  211 => 141,  207 => 140,  203 => 139,  199 => 138,  195 => 137,  191 => 136,  177 => 125,  173 => 124,  169 => 123,  156 => 113,  144 => 104,  128 => 91,  100 => 66,  86 => 55,  74 => 46,  70 => 45,  65 => 43,  58 => 39,  47 => 31,  40 => 27,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

<div class=\"card\" id=\"customer-search-block\">
  <h3 class=\"card-header\">{{ 'Customer'|trans({}, 'Admin.Global') }}</h3>
  <div class=\"card-body\">
    <div class=\"row js-search-customer-row mb-3\">
      <div class=\"col-3\">
        <span class=\"float-right\">{{ 'Search for a customer'|trans({}, 'Admin.Orderscustomers.Feature') }}</span>
      </div>
      <div class=\"col-4\">
        <input type=\"text\"
               class=\"form-control\"
               id=\"customer-search-input\"
        >
        <small class=\"form-text\">
          {{ 'Search for an existing customer by typing the first letters of his/her name.'|trans({}, 'Admin.Orderscustomers.Help') }}
        </small>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">{{ 'or'|trans({}, 'Admin.Global') }}</span>

        <a id=\"customer-add-btn\" class=\"btn btn-primary\" href=\"{{ path('admin_customers_create', {'liteDisplaying': 1, 'submitFormAjax': 1}) }}\">
          {{ 'Add new customer'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </a>
      </div>
    </div>

    <div id=\"customer-search-empty-result-warn\" class=\"row d-none\">
      <div class=\"col\">
        <div class=\"col\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">{{ 'No customers found'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
          </div>
        </div>
      </div>
    </div>

    <div id=\"customer-search-loading-notice\" class=\"row d-none\">
      <div class=\"col\">
        <div class=\"col\">
          <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
              {{ 'Searching for customers'|trans({}, 'Admin.Orderscustomers.Notification') }}
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col\">
        <div class=\"row js-customer-search-results\"></div>
      </div>
    </div>
    <div class=\"row d-none\" id=\"customer-checkout-history\">
      <div class=\"col\">
        <ul class=\"nav nav-pills\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active show js-customer-carts-tab\"
               id=\"customer-carts-tab\"
               data-toggle=\"pill\"
               href=\"#customer-carts-tab-content\"
               role=\"tab\"
               aria-controls=\"pills-home\"
               aria-expanded=\"true\"
               aria-selected=\"true\"
            >
              {{ 'Carts'|trans({}, 'Admin.Global') }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-customer-orders-tab\"
               id=\"customer-orders-tab\"
               data-toggle=\"pill\"
               href=\"#customer-orders-tab-content\"
               role=\"tab\"
               aria-controls=\"pills-home\"
               aria-expanded=\"true\"
               aria-selected=\"true\"
            >
              {{ 'Orders'|trans({}, 'Admin.Global') }}
            </a>
          </li>
          <li class=\"nav-item ml-auto\">
            <button class=\"navbar-toggler\" type=\"button\"
                    data-toggle=\"collapse\"
                    data-target=\"#customer-tab-content-container\"
                    id=\"customer-tab-content-container-toggler\"
                    aria-expanded=\"true\"
                    aria-label=\"{{ 'Toggle'|trans({}, 'Admin.Global') }}\">
              <p class=\"mb-0 mt-2\"><i class=\"material-icons\"></i></p>
            </button>
          </li>
        </ul>
        <div class=\"tab-content collapse show\" id=\"customer-tab-content-container\">
          <div class=\"tab-pane fade active show\" id=\"customer-carts-tab-content\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <table class=\"table\" id=\"customer-carts-table\">
              <thead class=\"d-none\">
                <tr>
                  <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'Total'|trans({}, 'Admin.Global') }}</th>
                  <th></th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <div class=\"tab-pane fade\" id=\"customer-orders-tab-content\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <table class=\"table\" id=\"customer-orders-table\">
              <thead class=\"d-none\">
              <tr>
                <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Products'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Total paid'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
                <th>{{ 'Payment'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Status'|trans({}, 'Admin.Global') }}</th>
                <th></th>
              </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"customer-search-result-template\" class=\"d-none\">
  <div class=\"col-4 js-customer-search-result-col\">
    <div class=\"card js-customer-search-result\">
      <div class=\"card-header\">
        <h3 class=\"card-header-title d-inline-block js-customer-name\"></h3>
        <div class=\"d-inline-block float-right\">
          #<span class=\"js-customer-id\"></span>
        </div>
      </div>
      <div class=\"card-body\">
        <p class=\"mb-0 js-customer-email\"></p>
        <p class=\"mb-0 js-customer-birthday\"></p>
      </div>
      <div class=\"card-footer\">
        <a class=\"btn btn-outline-secondary js-details-customer-btn\">
          {{ 'Details'|trans({}, 'Admin.Global') }}
        </a>
        <button type=\"button\" class=\"btn btn-outline-primary float-right js-choose-customer-btn\">
          {{ 'Choose'|trans({}, 'Admin.Actions') }}
        </button>
        <button type=\"button\" class=\"btn btn-outline-primary float-right js-change-customer-btn d-none\">
          {{ 'Change'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  </div>
</div>

<script id=\"customer-carts-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-id\"></td>
    <td class=\"js-cart-date\"></td>
    <td class=\"js-cart-total\"></td>
    <td class=\"text-right\">
      <a
        title=\"{{ 'View this cart'|trans({}, 'Admin.Orderscustomers.Feature') }}\"
        class=\"btn btn-outline-primary js-cart-details-btn\">
        {{ 'Details'|trans({}, 'Admin.Global') }}
      </a>

      <button
        title=\"{{ 'Use this cart'|trans({}, 'Admin.Orderscustomers.Feature') }}\"
        class=\"btn btn-outline-primary js-use-cart-btn\">
        {{ 'Use'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </button>
    </td>
  </tr>
</script>

<script id=\"customer-orders-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-order-id\"></td>
    <td class=\"js-order-date\"></td>
    <td class=\"js-order-products\"></td>
    <td class=\"js-order-total-paid\"></td>
    <td class=\"js-order-payment-method\"></td>
    <td class=\"js-order-status\"></td>
    <td class=\"text-right\">
      <a
        title=\"{{ 'View this order'|trans({}, 'Admin.Orderscustomers.Feature') }}\"
        class=\"btn btn-outline-primary js-order-details-btn\">
        {{ 'Details'|trans({}, 'Admin.Global') }}
      </a>

      <button
        title=\"{{ 'Duplicate this order'|trans({}, 'Admin.Orderscustomers.Feature') }}\"
        class=\"btn btn-outline-primary js-use-order-btn\">
        {{ 'Use'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </button>
    </td>
  </tr>
</script>

<script id=\"js-empty-list-row\" type=\"text/template\">
  <tr class=\"empty_row js-empty-row\">
    <td colspan=\"8\" class=\"border-0\">
      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
        <p class=\"mb-2\">{{ 'No records found'|trans({}, 'Admin.Global') }}</p>
      </div>
    </td>
  </tr>
</script>

<script id=\"js-loading-list-row\" type=\"text/template\">
  <tr class=\"empty_row js-empty-row\">
    <td colspan=\"8\" class=\"border-0\">
      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">autorenew</i></p>
        <p class=\"mb-2\">{{ 'Loading...'|trans({}, 'Admin.Global') }}</p>
      </div>
    </td>
  </tr>
</script>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig");
    }
}
