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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig */
class __TwigTemplate_97f2ff19659fb87711c82f6547434094518d7556281f7f0b675f08276fca991b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart summary", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <table class=\"table\">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit price", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "products", []));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "          ";
            if ( !twig_test_empty($this->getAttribute($context["product"], "customization", []))) {
                // line 45
                echo "            <tr>
              <td>";
                // line 46
                echo $this->getAttribute($context["product"], "image", []);
                echo "</td>
              <td>
                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
                echo "\">
                  ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "

                  ";
                // line 51
                if ($this->getAttribute($context["product"], "attributes", [])) {
                    // line 52
                    echo "                    <br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "attributes", []), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "                  <br>

                  ";
                // line 56
                if ($this->getAttribute($context["product"], "reference", [])) {
                    // line 57
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
                    ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", []), "html", null, true);
                    echo "
                  ";
                }
                // line 60
                echo "
                  ";
                // line 61
                if (($this->getAttribute($context["product"], "reference", []) && $this->getAttribute($context["product"], "supplier_reference", []))) {
                    // line 62
                    echo "                    / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "supplier_reference", []), "html", null, true);
                    echo "
                  ";
                }
                // line 64
                echo "                </a>
              </td>
              <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "unit_price_formatted", []), "html", null, true);
                echo "</td>
              <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                echo "</td>
              <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock_quantity", []), "html", null, true);
                echo "</td>
              <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "total_price_formatted", []), "html", null, true);
                echo "</td>
            </tr>

            <tr>
              <td colspan=\"2\">
                ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["product"], "customization", []), "fields", []));
                foreach ($context['_seq'] as $context["_key"] => $context["customizationField"]) {
                    // line 75
                    echo "                  <div class=\"row\">
                    <div class=\"col-6 text-right\">
                      ";
                    // line 77
                    if ($this->getAttribute($context["customizationField"], "name", [])) {
                        // line 78
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customizationField"], "name", []), "html", null, true);
                        echo "</strong>
                      ";
                    } else {
                        // line 80
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Text #", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "</strong>
                      ";
                    }
                    // line 82
                    echo "                    </div>
                    <div class=\"col-6\">
                      ";
                    // line 84
                    if (($this->getAttribute($context["customizationField"], "type", []) == "customizable_file")) {
                        // line 85
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customizationField"], "image", []), "html", null, true);
                        echo "\">
                      ";
                    } else {
                        // line 87
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customizationField"], "value", []), "html", null, true);
                        echo "
                      ";
                    }
                    // line 89
                    echo "                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customizationField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "              </td>

              <td></td>
              <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "customization", []), "quantity", []), "html", null, true);
                echo "</td>
              <td></td>
              <td></td>
            </tr>
          ";
            }
            // line 100
            echo "
          ";
            // line 101
            if ((twig_test_empty($this->getAttribute($context["product"], "customization", [])) || ($this->getAttribute($context["product"], "cart_quantity", []) > $this->getAttribute($context["product"], "customization_quantity", [])))) {
                // line 102
                echo "            <tr>
              <td>";
                // line 103
                echo $this->getAttribute($context["product"], "image", []);
                echo "</td>
              <td>
                <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
                echo "\">
                  ";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "

                  ";
                // line 108
                if ($this->getAttribute($context["product"], "attributes", [])) {
                    // line 109
                    echo "                    <br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "attributes", []), "html", null, true);
                    echo "
                  ";
                }
                // line 111
                echo "                  <br>

                  ";
                // line 113
                if ($this->getAttribute($context["product"], "reference", [])) {
                    // line 114
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
                    ";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", []), "html", null, true);
                    echo "
                  ";
                }
                // line 117
                echo "
                  ";
                // line 118
                if (($this->getAttribute($context["product"], "reference", []) && $this->getAttribute($context["product"], "supplier_reference", []))) {
                    // line 119
                    echo "                    / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "supplier_reference", []), "html", null, true);
                    echo "
                  ";
                }
                // line 121
                echo "                </a>
              </td>
              <td>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "unit_price_formatted", []), "html", null, true);
                echo "</td>
              <td>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "cart_quantity", []), "html", null, true);
                echo "</td>
              <td>";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock_quantity", []), "html", null, true);
                echo "</td>
              <td>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "total_price_formatted", []), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            // line 129
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
        <tr>
          <td colspan=\"5\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total cost of products:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
          <td class=\"text-right\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "total_products_formatted", []), "html", null, true);
        echo "</td>
        </tr>

        ";
        // line 136
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "total_discounts", [])) {
            // line 137
            echo "          <tr>
            <td colspan=\"5\">";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total value of vouchers:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "total_discounts_formatted", []), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 142
        echo "
        ";
        // line 143
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "total_wrapping", [])) {
            // line 144
            echo "          <tr>
            <td colspan=\"5\">";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total cost of gift wrapping:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "total_wrapping_formatted", []), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 149
        echo "
        ";
        // line 150
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "total_shipping", [])) {
            // line 151
            echo "          <tr>
            <td colspan=\"5\">";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total shipping costs:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "total_shipping_formatted", []), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 156
        echo "
        <tr>
          <td colspan=\"5\">
            <strong>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong>
          </td>
          <td class=\"text-right\">
            <strong>";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "total_formatted", []), "html", null, true);
        echo "</strong>
          </td>
        </tr>
      </tbody>
    </table>

    ";
        // line 168
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "cart_rules", []))) {
            // line 169
            echo "      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discount name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th class=\"text-right\">";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
          ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "cart_rules", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cartRule"]) {
                // line 179
                echo "            <tr>
              <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["cartRule"], "id", []), "html", null, true);
                echo "</td>
              <td>
                <a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute(                // line 183
$context["cartRule"], "id", []), "updatecart_rule" => 1]), "html", null, true);
                // line 185
                echo "\">
                  ";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["cartRule"], "name", []), "html", null, true);
                echo "
                </a>
              </td>
              <td class=\"text-right\">
                ";
                // line 190
                if ($this->getAttribute($context["cartRule"], "is_free_shipping", [])) {
                    // line 191
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free shipping", [], "Admin.Shipping.Feature"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 193
                    echo "                  - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cartRule"], "formatted_value", []), "html", null, true);
                    echo "
                ";
                }
                // line 195
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartRule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "        </tbody>
      </table>
    ";
        }
        // line 201
        echo "
    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For this particular customer group, prices are displayed as:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
        <strong>
          ";
        // line 206
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "cartSummary", []), "is_tax_included", [])) {
            // line 207
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 209
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 211
        echo "        </strong>
      </p>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 211,  480 => 209,  474 => 207,  472 => 206,  467 => 204,  462 => 201,  457 => 198,  449 => 195,  443 => 193,  437 => 191,  435 => 190,  428 => 186,  425 => 185,  423 => 183,  422 => 182,  417 => 180,  414 => 179,  410 => 178,  403 => 174,  399 => 173,  395 => 172,  390 => 169,  388 => 168,  379 => 162,  373 => 159,  368 => 156,  362 => 153,  358 => 152,  355 => 151,  353 => 150,  350 => 149,  344 => 146,  340 => 145,  337 => 144,  335 => 143,  332 => 142,  326 => 139,  322 => 138,  319 => 137,  317 => 136,  311 => 133,  307 => 132,  303 => 130,  297 => 129,  291 => 126,  287 => 125,  283 => 124,  279 => 123,  275 => 121,  269 => 119,  267 => 118,  264 => 117,  259 => 115,  254 => 114,  252 => 113,  248 => 111,  242 => 109,  240 => 108,  235 => 106,  231 => 105,  226 => 103,  223 => 102,  221 => 101,  218 => 100,  210 => 95,  205 => 92,  197 => 89,  191 => 87,  185 => 85,  183 => 84,  179 => 82,  173 => 80,  167 => 78,  165 => 77,  161 => 75,  157 => 74,  149 => 69,  145 => 68,  141 => 67,  137 => 66,  133 => 64,  127 => 62,  125 => 61,  122 => 60,  117 => 58,  112 => 57,  110 => 56,  106 => 54,  100 => 52,  98 => 51,  93 => 49,  89 => 48,  84 => 46,  81 => 45,  78 => 44,  74 => 43,  67 => 39,  63 => 38,  59 => 37,  55 => 36,  51 => 35,  41 => 28,  36 => 25,);
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

<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Cart summary'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body\">
    <table class=\"table\">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>{{ 'Product'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Unit price'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Stock'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Total'|trans({}, 'Admin.Global') }}</th>
        </tr>
      </thead>
      <tbody>
        {% for product in cartView.cartSummary.products %}
          {% if product.customization is not empty %}
            <tr>
              <td>{{ product.image|raw }}</td>
              <td>
                <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">
                  {{ product.name }}

                  {% if product.attributes %}
                    <br> {{ product.attributes }}
                  {% endif %}
                  <br>

                  {% if product.reference %}
                    {{ 'Ref:'|trans({}, 'Admin.Orderscustomers.Feature') }}
                    {{ product.reference }}
                  {% endif %}

                  {% if product.reference and product.supplier_reference %}
                    / {{ product.supplier_reference }}
                  {% endif %}
                </a>
              </td>
              <td>{{ product.unit_price_formatted }}</td>
              <td>{{ product.quantity }}</td>
              <td>{{ product.stock_quantity }}</td>
              <td>{{ product.total_price_formatted }}</td>
            </tr>

            <tr>
              <td colspan=\"2\">
                {% for customizationField in product.customization.fields %}
                  <div class=\"row\">
                    <div class=\"col-6 text-right\">
                      {% if customizationField.name %}
                        <strong>{{ customizationField.name }}</strong>
                      {% else %}
                        <strong>{{ 'Text #'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
                      {% endif %}
                    </div>
                    <div class=\"col-6\">
                      {% if customizationField.type == 'customizable_file' %}
                        <img src=\"{{ customizationField.image }}\">
                      {% else %}
                        {{ customizationField.value }}
                      {% endif %}
                    </div>
                  </div>
                {% endfor %}
              </td>

              <td></td>
              <td>{{ product.customization.quantity }}</td>
              <td></td>
              <td></td>
            </tr>
          {% endif %}

          {% if product.customization is empty or product.cart_quantity > product.customization_quantity %}
            <tr>
              <td>{{ product.image|raw }}</td>
              <td>
                <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">
                  {{ product.name }}

                  {% if product.attributes %}
                    <br> {{ product.attributes }}
                  {% endif %}
                  <br>

                  {% if product.reference %}
                    {{ 'Ref:'|trans({}, 'Admin.Orderscustomers.Feature') }}
                    {{ product.reference }}
                  {% endif %}

                  {% if product.reference and product.supplier_reference %}
                    / {{ product.supplier_reference }}
                  {% endif %}
                </a>
              </td>
              <td>{{ product.unit_price_formatted }}</td>
              <td>{{ product.cart_quantity }}</td>
              <td>{{ product.stock_quantity }}</td>
              <td>{{ product.total_price_formatted }}</td>
            </tr>
          {% endif %}
        {% endfor %}

        <tr>
          <td colspan=\"5\">{{ 'Total cost of products:'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
          <td class=\"text-right\">{{ cartView.cartSummary.total_products_formatted }}</td>
        </tr>

        {% if cartView.cartSummary.total_discounts %}
          <tr>
            <td colspan=\"5\">{{ 'Total value of vouchers:'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
            <td class=\"text-right\">{{ cartView.cartSummary.total_discounts_formatted }}</td>
          </tr>
        {% endif %}

        {% if cartView.cartSummary.total_wrapping %}
          <tr>
            <td colspan=\"5\">{{ 'Total cost of gift wrapping:'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
            <td class=\"text-right\">{{ cartView.cartSummary.total_wrapping_formatted }}</td>
          </tr>
        {% endif %}

        {% if cartView.cartSummary.total_shipping %}
          <tr>
            <td colspan=\"5\">{{ 'Total shipping costs:'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
            <td class=\"text-right\">{{ cartView.cartSummary.total_shipping_formatted }}</td>
          </tr>
        {% endif %}

        <tr>
          <td colspan=\"5\">
            <strong>{{ 'Total'|trans({}, 'Admin.Global') }}</strong>
          </td>
          <td class=\"text-right\">
            <strong>{{ cartView.cartSummary.total_formatted }}</strong>
          </td>
        </tr>
      </tbody>
    </table>

    {% if cartView.cartSummary.cart_rules is not empty %}
      <table class=\"table\">
        <thead>
        <tr>
          <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Discount name'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th class=\"text-right\">{{ 'Value'|trans({}, 'Admin.Global') }}</th>
        </tr>
        </thead>
        <tbody>
          {% for cartRule in cartView.cartSummary.cart_rules %}
            <tr>
              <td>{{ cartRule.id }}</td>
              <td>
                <a href=\"{{ getAdminLink('AdminCartRules', true, {
                  id_cart_rule: cartRule.id,
                  updatecart_rule: 1
                }) }}\">
                  {{ cartRule.name }}
                </a>
              </td>
              <td class=\"text-right\">
                {% if cartRule.is_free_shipping %}
                  {{ 'Free shipping'|trans({}, 'Admin.Shipping.Feature') }}
                {% else %}
                  - {{ cartRule.formatted_value }}
                {% endif %}
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% endif %}

    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'For this particular customer group, prices are displayed as:'|trans({}, 'Admin.Orderscustomers.Notification') }}
        <strong>
          {% if cartView.cartSummary.is_tax_included %}
            {{ 'Tax included'|trans({}, 'Admin.Global') }}
          {% else %}
            {{ 'Tax excluded'|trans({}, 'Admin.Global') }}
          {% endif %}
        </strong>
      </p>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig");
    }
}
