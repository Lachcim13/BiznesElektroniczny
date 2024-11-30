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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig */
class __TwigTemplate_174b3fdb9062d0ef5e5ec5110dca92c49f8bc8cac6da659b0f7359904c92ba0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig"));

        // line 25
        echo "
<div class=\"card d-none\" id=\"cart-block\">
  <h3 class=\"card-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h3>
  <div class=\"card-body\">
    <div class=\"alert alert-danger d-none\" id=\"js-cart-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <div class=\"col-3\">
        <span class=\"float-right\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"col-4\">
        <input id=\"product-search\" type=\"text\" class=\"form-control\">
        <small class=\"form-text\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for an existing product by typing the first letters of its name.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
        </small>
      </div>
    </div>

    <div class=\"row js-no-products-found d-none\">
      <div class=\"col\">
        <div class=\"alert alert-danger\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No products found", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

    <div class=\"row js-searching-products d-none\">
      <div class=\"col\">
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching for products", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

    <hr class=\"mt-3 mb-3\">

    <div class=\"row\">
      <div class=\"col\">
        <div id=\"product-search-results\" class=\"d-none\">
          <form id=\"js-add-product-form\">

            <div class=\"row js-product-select-row\">
              <div class=\"col-3\">
                <span class=\"float-right\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</span>
              </div>
              <div class=\"col-4\">
                <select name=\"product_id\" id=\"product-select\" class=\"form-control custom-select\" data-customization-label=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"></select>
              </div>
            </div>

            <div class=\"row mt-3 js-combinations-row d-none\">
              <div class=\"col-3\">
                <span class=\"float-right\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "</span>
              </div>
              <div class=\"col-4\">
                <select name=\"combination_id\" id=\"combination-select\" class=\"form-control custom-select\"></select>
              </div>
            </div>

            <div class=\"row mt-3 d-none\" id=\"js-customization-container\">
              <div class=\"col-3\">
                <span class=\"float-right\">
                  ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </span>
              </div>
              <div class=\"col-4 custom-fields-container\" id=\"js-custom-fields-container\"></div>
            </div>

            <div class=\"row mt-3 js-quantity-row\">
              <div class=\"col-3\">
                <span class=\"float-right\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</span>
              </div>
              <div class=\"col-2\">
                <input name=\"product_quantity\" id=\"quantity-input\" type=\"number\" min=\"1\" value=\"1\" class=\"form-control\">
                ";
        // line 100
        if (($context["stockManagementEnabled"] ?? $this->getContext($context, "stockManagementEnabled"))) {
            // line 101
            echo "                  <small class=\"form-text\">
                    ";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In stock", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
                    <span class=\"js-in-stock-counter\"></span>
                  </small>
                ";
        }
        // line 106
        echo "              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-1 offset-sm-3\">
                <button id=\"add-product-to-cart-btn\" type=\"button\" class=\"btn btn-primary\">
                  ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add to cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </button>
              </div>
            </div>

          </form>
          <div class=\"row\">
            <div class=\"col\">
              <hr>
            </div>
          </div>
        </div>
        <div class=\"js-no-records-found\"></div>
        <div class=\"row\">
          <div class=\"col\">
            <table id=\"products-table\" class=\"table d-none\">
              <thead>
              <tr>
                <th>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price per unit", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th></th>
              </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
        <div class=\"row js-tax-warning d-none\">
          <div class=\"col-4 offset-sm-3\">
            <div class=\"alert alert-warning\">
              <div class=\"alert-text\">
                ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The prices are without taxes.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-3\">
            <span class=\"float-right\">
              ";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "
            </span>
          </div>
          <div class=\"col-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-currency-select\">
              ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? $this->getContext($context, "currencies")));
        foreach ($context['_seq'] as $context["name"] => $context["id"]) {
            // line 160
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "            </select>
          </div>
        </div>
        <div class=\"row mt-3\">
          <div class=\"col-3\">
            <span class=\"float-right\">
              ";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
            </span>
          </div>
          <div class=\"col-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-language-select\">
              ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["name"] => $context["id"]) {
            // line 174
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";
        // line 184
        $context["requiredFieldMarkTemplate"] = ('' === $tmp = "  <span class=\"js-required-field-mark text-danger d-none\">*</span>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        echo "
<script id=\"js-product-custom-text-template\" type=\"text/template\">
  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 191
        echo twig_escape_filter($this->env, ($context["requiredFieldMarkTemplate"] ?? $this->getContext($context, "requiredFieldMarkTemplate")), "html", null, true);
        echo "
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <input name=\"\" type=\"text\" class=\"form-control js-product-custom-input\">
    </div>
  </div>
</script>

<script id=\"js-product-custom-file-template\" type=\"text/template\">
  <div class=\"row mt-3\">
    <div class=\"col\">
      ";
        // line 201
        echo twig_escape_filter($this->env, ($context["requiredFieldMarkTemplate"] ?? $this->getContext($context, "requiredFieldMarkTemplate")), "html", null, true);
        echo "
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <div class=\"custom-file\">
        <input name=\"\" type=\"file\" class=\"custom-file-input js-product-custom-input\">
        <label class=\"custom-file-label\">
          ";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true);
        echo "
        </label>
      </div>
    </div>
  </div>
</script>

<script id=\"products-table-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td><input class=\"form-control js-product-unit-input\" type=\"text\"></td>
    <td>
      <input type=\"number\" min=\"1\" class=\"form-control js-product-qty-input\" style=\"max-width: 100px;";
        // line 223
        if ( !($context["stockManagementEnabled"] ?? $this->getContext($context, "stockManagementEnabled"))) {
            echo "margin-top:0px;";
        }
        echo "\">
      ";
        // line 224
        if (($context["stockManagementEnabled"] ?? $this->getContext($context, "stockManagementEnabled"))) {
            // line 225
            echo "        <small class=\"form-text\">  
          ";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In stock", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          <span class=\"js-product-qty-stock\"></span>
        </small>
      ";
        }
        // line 230
        echo "    </td>
    <td class=\"js-product-total-price\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-product-remove-btn\">";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remove", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </td>
  </tr>
</script>

<script id=\"products-table-gift-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td>";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
    <td class=\"js-product-gift-qty\"></td>
    <td class=\"js-product-total-price\">";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
    <td></td>
  </tr>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-text-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"></span>
    </small>
  </div>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-file-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"> <img src=\"\" alt=\"\"></span>
    </small>
  </div>
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 248,  382 => 246,  366 => 233,  361 => 230,  354 => 226,  351 => 225,  349 => 224,  343 => 223,  323 => 206,  315 => 201,  302 => 191,  296 => 187,  293 => 184,  283 => 176,  272 => 174,  268 => 173,  260 => 168,  252 => 162,  241 => 160,  237 => 159,  229 => 154,  218 => 146,  203 => 134,  199 => 133,  195 => 132,  191 => 131,  187 => 130,  183 => 129,  162 => 111,  155 => 106,  148 => 102,  145 => 101,  143 => 100,  136 => 96,  125 => 88,  112 => 78,  103 => 72,  97 => 69,  80 => 55,  69 => 47,  58 => 39,  50 => 34,  40 => 27,  36 => 25,);
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

<div class=\"card d-none\" id=\"cart-block\">
  <h3 class=\"card-header\">{{ 'Cart'|trans({}, 'Admin.Orderscustomers.Feature') }}</h3>
  <div class=\"card-body\">
    <div class=\"alert alert-danger d-none\" id=\"js-cart-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <div class=\"col-3\">
        <span class=\"float-right\">{{ 'Search for a product'|trans({}, 'Admin.Orderscustomers.Feature') }}</span>
      </div>
      <div class=\"col-4\">
        <input id=\"product-search\" type=\"text\" class=\"form-control\">
        <small class=\"form-text\">
          {{ 'Search for an existing product by typing the first letters of its name.'|trans({}, 'Admin.Orderscustomers.Help') }}
        </small>
      </div>
    </div>

    <div class=\"row js-no-products-found d-none\">
      <div class=\"col\">
        <div class=\"alert alert-danger\" role=\"alert\">
          <p class=\"alert-text\">{{ 'No products found'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
        </div>
      </div>
    </div>

    <div class=\"row js-searching-products d-none\">
      <div class=\"col\">
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">{{ 'Searching for products'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
        </div>
      </div>
    </div>

    <hr class=\"mt-3 mb-3\">

    <div class=\"row\">
      <div class=\"col\">
        <div id=\"product-search-results\" class=\"d-none\">
          <form id=\"js-add-product-form\">

            <div class=\"row js-product-select-row\">
              <div class=\"col-3\">
                <span class=\"float-right\">{{ 'Product'|trans({}, 'Admin.Global') }}</span>
              </div>
              <div class=\"col-4\">
                <select name=\"product_id\" id=\"product-select\" class=\"form-control custom-select\" data-customization-label=\"{{ 'Customization'|trans({}, 'Admin.Catalog.Feature') }}\"></select>
              </div>
            </div>

            <div class=\"row mt-3 js-combinations-row d-none\">
              <div class=\"col-3\">
                <span class=\"float-right\">{{ 'Combination'|trans({}, 'Admin.Global') }}</span>
              </div>
              <div class=\"col-4\">
                <select name=\"combination_id\" id=\"combination-select\" class=\"form-control custom-select\"></select>
              </div>
            </div>

            <div class=\"row mt-3 d-none\" id=\"js-customization-container\">
              <div class=\"col-3\">
                <span class=\"float-right\">
                  {{ 'Customization'|trans({}, 'Admin.Catalog.Feature') }}
                </span>
              </div>
              <div class=\"col-4 custom-fields-container\" id=\"js-custom-fields-container\"></div>
            </div>

            <div class=\"row mt-3 js-quantity-row\">
              <div class=\"col-3\">
                <span class=\"float-right\">{{ 'Quantity'|trans({}, 'Admin.Global') }}</span>
              </div>
              <div class=\"col-2\">
                <input name=\"product_quantity\" id=\"quantity-input\" type=\"number\" min=\"1\" value=\"1\" class=\"form-control\">
                {% if stockManagementEnabled %}
                  <small class=\"form-text\">
                    {{ 'In stock'|trans({}, 'Admin.Orderscustomers.Feature') }}
                    <span class=\"js-in-stock-counter\"></span>
                  </small>
                {% endif %}
              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-1 offset-sm-3\">
                <button id=\"add-product-to-cart-btn\" type=\"button\" class=\"btn btn-primary\">
                  {{ 'Add to cart'|trans({}, 'Admin.Orderscustomers.Feature') }}
                </button>
              </div>
            </div>

          </form>
          <div class=\"row\">
            <div class=\"col\">
              <hr>
            </div>
          </div>
        </div>
        <div class=\"js-no-records-found\"></div>
        <div class=\"row\">
          <div class=\"col\">
            <table id=\"products-table\" class=\"table d-none\">
              <thead>
              <tr>
                <th>{{ 'Product'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Description'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Price per unit'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Price'|trans({}, 'Admin.Global') }}</th>
                <th></th>
              </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
        <div class=\"row js-tax-warning d-none\">
          <div class=\"col-4 offset-sm-3\">
            <div class=\"alert alert-warning\">
              <div class=\"alert-text\">
                {{ 'The prices are without taxes.'|trans({}, 'Admin.Orderscustomers.Notification') }}
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-3\">
            <span class=\"float-right\">
              {{ 'Currency'|trans({}, 'Admin.Global') }}
            </span>
          </div>
          <div class=\"col-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-currency-select\">
              {% for name, id in currencies %}
                <option value=\"{{ id }}\">{{ name }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
        <div class=\"row mt-3\">
          <div class=\"col-3\">
            <span class=\"float-right\">
              {{ 'Language'|trans({}, 'Admin.Global') }}
            </span>
          </div>
          <div class=\"col-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-language-select\">
              {% for name, id in languages %}
                <option value=\"{{ id }}\">{{ name }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{% set requiredFieldMarkTemplate %}
  <span class=\"js-required-field-mark text-danger d-none\">*</span>
{% endset %}

<script id=\"js-product-custom-text-template\" type=\"text/template\">
  <div class=\"row\">
    <div class=\"col\">
      {{ requiredFieldMarkTemplate }}
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <input name=\"\" type=\"text\" class=\"form-control js-product-custom-input\">
    </div>
  </div>
</script>

<script id=\"js-product-custom-file-template\" type=\"text/template\">
  <div class=\"row mt-3\">
    <div class=\"col\">
      {{ requiredFieldMarkTemplate }}
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <div class=\"custom-file\">
        <input name=\"\" type=\"file\" class=\"custom-file-input js-product-custom-input\">
        <label class=\"custom-file-label\">
          {{ 'Choose file(s)'|trans({}, 'Admin.Actions') }}
        </label>
      </div>
    </div>
  </div>
</script>

<script id=\"products-table-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td><input class=\"form-control js-product-unit-input\" type=\"text\"></td>
    <td>
      <input type=\"number\" min=\"1\" class=\"form-control js-product-qty-input\" style=\"max-width: 100px;{% if not stockManagementEnabled %}margin-top:0px;{% endif %}\">
      {% if stockManagementEnabled %}
        <small class=\"form-text\">  
          {{ 'In stock'|trans({}, 'Admin.Orderscustomers.Feature') }}
          <span class=\"js-product-qty-stock\"></span>
        </small>
      {% endif %}
    </td>
    <td class=\"js-product-total-price\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-product-remove-btn\">{{ 'Remove'|trans({}, 'Admin.Actions') }}</button>
    </td>
  </tr>
</script>

<script id=\"products-table-gift-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td>{{ 'Gift'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
    <td class=\"js-product-gift-qty\"></td>
    <td class=\"js-product-total-price\">{{ 'Gift'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
    <td></td>
  </tr>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-text-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"></span>
    </small>
  </div>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-file-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"> <img src=\"\" alt=\"\"></span>
    </small>
  </div>
</script>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig");
    }
}
