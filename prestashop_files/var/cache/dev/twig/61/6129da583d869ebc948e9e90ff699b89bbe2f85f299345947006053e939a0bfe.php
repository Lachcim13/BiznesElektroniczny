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

/* @PrestaShop/Admin/Sell/Order/Order/preview.html.twig */
class __TwigTemplate_ccaff94c164c04be0107345b7883fc00ca4afcde06fd287c532dc886afcb0b98 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_preview' => [$this, 'block_order_preview'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('order_preview', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_order_preview($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_preview"));

        // line 27
        echo "  <div class=\"row order-preview-content mt-2\">
    <div class=\"col-5\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">local_shipping</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-0\">
                <strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Global"), "html", null, true);
        echo ":</strong>
                ";
        // line 40
        if ( !$this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "isVirtual", [])) {
            // line 41
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "carrierName", []), "html", null, true);
            echo "
                ";
        } else {
            // line 43
            echo "                  -
                ";
        }
        // line 45
        echo "              </p>

              <p class=\"mb-0\">
                <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 49
        if (( !$this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "isVirtual", []) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "trackingNumber", [])))) {
            // line 50
            echo "                  ";
            if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "trackingUrl", [])) {
                // line 51
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "trackingUrl", []), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "trackingNumber", []), "html", null, true);
                echo "</a>
                  ";
            } else {
                // line 53
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingDetails", []), "trackingNumber", []), "html", null, true);
                echo "
                  ";
            }
            // line 55
            echo "                ";
        } else {
            // line 56
            echo "                  -
                ";
        }
        // line 58
        echo "              </p>

              <p class=\"mb-2\">
                <strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 62
        if ($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "virtual", [])) {
            // line 63
            echo "                  -
                ";
        }
        // line 65
        echo "              </p>

              ";
        // line 67
        if ( !$this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "virtual", [])) {
            // line 68
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "shippingAddressFormatted", []), "
"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 69
                echo "                  <p";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo " class=\"mb-0\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                echo "</p>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "              ";
        }
        // line 72
        echo "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">email</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-1\">
                <strong>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email:", [], "Admin.Global"), "html", null, true);
        echo "</strong>
              </p>

              <p class=\"mb-0\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceDetails", []), "email", []), "html", null, true);
        echo "</p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">receipt</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-1\">
                <strong>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
              </p>


              ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "invoiceAddressFormatted", []), "
"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 103
            echo "                <p";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo " class=\"mb-0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "</p>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-7\">
      <div class=\"table-responsive\">
        <table class=\"table product table-borderless border-bottom-0\">
          <thead>
          <tr>
            ";
        // line 115
        if ($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "taxIncluded", [])) {
            // line 116
            echo "              ";
            $context["taxInclusion"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", [], "Admin.Global");
            // line 117
            echo "            ";
        } else {
            // line 118
            echo "              ";
            $context["taxInclusion"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", [], "Admin.Global");
            // line 119
            echo "            ";
        }
        // line 120
        echo "
            <th>
              ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
              (";
        // line 123
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "productDetails", [])), "html", null, true);
        echo ")
            </th>
            <th>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"js-cell-product-stock-location\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
            ";
        // line 127
        if (($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "taxIncluded", []) == false)) {
            // line 128
            echo "              <th class=\"text-center\">
                ";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax", [], "Admin.Global"), "html", null, true);
            echo "
              </th>
            ";
        }
        // line 132
        echo "            <th class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"text-center\">
              ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "
              <small>";
        // line 135
        echo twig_escape_filter($this->env, ($context["taxInclusion"] ?? $this->getContext($context, "taxInclusion")), "html", null, true);
        echo "</small>
            </th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "productDetails", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["productDetail"]) {
            // line 141
            echo "            <tr class=\"";
            if (($this->getAttribute($context["loop"], "index", []) > ($context["productsPreviewLimit"] ?? $this->getContext($context, "productsPreviewLimit")))) {
                echo "js-product-preview-more d-none";
            }
            echo "\">
              <td class=\"p-1\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "name", []), "html", null, true);
            echo "</td>
              <td class=\"p-1\">";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "reference", []), "html", null, true);
            echo "</td>
              <td class=\"p-1 js-cell-product-stock-location\">
                ";
            // line 145
            if ( !twig_test_empty($this->getAttribute($context["productDetail"], "location", []))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "location", []), "html", null, true);
            }
            // line 146
            echo "              </td>
              ";
            // line 147
            if (($this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "taxIncluded", []) == false)) {
                // line 148
                echo "                <td class=\"p-1 text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "totalTax", []), "html", null, true);
                echo "</td>
              ";
            }
            // line 150
            echo "              <td class=\"p-1 text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "quantity", []), "html", null, true);
            echo "</td>
              <td class=\"p-1 text-center\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "totalPrice", []), "html", null, true);
            echo "</td>
            </tr>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
          ";
        // line 155
        if ((twig_length_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "productDetails", [])) > ($context["productsPreviewLimit"] ?? $this->getContext($context, "productsPreviewLimit")))) {
            // line 156
            echo "            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  ";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(%count% more)", ["%count%" => (twig_length_filter($this->env, $this->getAttribute(            // line 161
($context["orderPreview"] ?? $this->getContext($context, "orderPreview")), "productDetails", [])) - ($context["productsPreviewLimit"] ?? $this->getContext($context, "productsPreviewLimit")))], "Admin.Global"), "html", null, true);
            // line 162
            echo "
                </a>
              </td>
            </tr>
          ";
        }
        // line 167
        echo "          </tbody>
        </table>
      </div>

      <div class=\"text-right\">
        <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => ($context["orderId"] ?? $this->getContext($context, "orderId"))]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm mb-3\">
          ";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Open details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          <i class=\"material-icons\">arrow_right_alt</i>
        </a>
      </div>
    </div>
  </div>
  ";
        // line 179
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayOrderPreview", ["order_id" => ($context["orderId"] ?? $this->getContext($context, "orderId"))]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  454 => 179,  445 => 173,  441 => 172,  434 => 167,  427 => 162,  425 => 161,  424 => 160,  418 => 156,  416 => 155,  413 => 154,  396 => 151,  391 => 150,  385 => 148,  383 => 147,  380 => 146,  376 => 145,  371 => 143,  367 => 142,  360 => 141,  343 => 140,  335 => 135,  331 => 134,  325 => 132,  319 => 129,  316 => 128,  314 => 127,  310 => 126,  306 => 125,  301 => 123,  297 => 122,  293 => 120,  290 => 119,  287 => 118,  284 => 117,  281 => 116,  279 => 115,  267 => 105,  246 => 103,  228 => 102,  221 => 98,  207 => 87,  201 => 84,  187 => 72,  184 => 71,  163 => 69,  144 => 68,  142 => 67,  138 => 65,  134 => 63,  132 => 62,  128 => 61,  123 => 58,  119 => 56,  116 => 55,  110 => 53,  102 => 51,  99 => 50,  97 => 49,  93 => 48,  88 => 45,  84 => 43,  78 => 41,  76 => 40,  72 => 39,  58 => 27,  40 => 26,  37 => 25,);
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

{% block order_preview %}
  <div class=\"row order-preview-content mt-2\">
    <div class=\"col-5\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">local_shipping</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-0\">
                <strong>{{ 'Carrier'|trans({}, 'Admin.Global') }}:</strong>
                {% if not orderPreview.isVirtual %}
                  {{ orderPreview.shippingDetails.carrierName }}
                {% else %}
                  -
                {% endif %}
              </p>

              <p class=\"mb-0\">
                <strong>{{ 'Tracking number'|trans({}, 'Admin.Shipping.Feature') }}:</strong>
                {% if not orderPreview.isVirtual and orderPreview.shippingDetails.trackingNumber is not empty %}
                  {% if orderPreview.shippingDetails.trackingUrl %}
                    <a href=\"{{ orderPreview.shippingDetails.trackingUrl }}\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">{{ orderPreview.shippingDetails.trackingNumber }}</a>
                  {% else %}
                    {{ orderPreview.shippingDetails.trackingNumber }}
                  {% endif %}
                {% else %}
                  -
                {% endif %}
              </p>

              <p class=\"mb-2\">
                <strong>{{ 'Shipping details'|trans({}, 'Admin.Orderscustomers.Feature') }}:</strong>
                {% if orderPreview.virtual %}
                  -
                {% endif %}
              </p>

              {% if not orderPreview.virtual %}
                {% for line in orderPreview.shippingAddressFormatted|split(\"\\n\") %}
                  <p{% if not loop.last %} class=\"mb-0\"{% endif %}>{{ line }}</p>
                {% endfor %}
              {% endif %}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">email</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-1\">
                <strong>{{ 'Email:'|trans({}, 'Admin.Global') }}</strong>
              </p>

              <p class=\"mb-0\">{{ orderPreview.invoiceDetails.email }}</p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">receipt</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-1\">
                <strong>{{ 'Invoice details'|trans({}, 'Admin.Orderscustomers.Feature') }}:</strong>
              </p>


              {% for line in orderPreview.invoiceAddressFormatted|split(\"\\n\") %}
                <p{% if not loop.last %} class=\"mb-0\"{% endif %}>{{ line }}</p>
              {% endfor %}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-7\">
      <div class=\"table-responsive\">
        <table class=\"table product table-borderless border-bottom-0\">
          <thead>
          <tr>
            {% if orderPreview.taxIncluded %}
              {% set taxInclusion = 'Tax included'|trans({}, 'Admin.Global') %}
            {% else %}
              {% set taxInclusion = 'Tax excluded'|trans({}, 'Admin.Global') %}
            {% endif %}

            <th>
              {{ 'Products'|trans({}, 'Admin.Global') }}
              ({{ orderPreview.productDetails|length }})
            </th>
            <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
            <th class=\"js-cell-product-stock-location\">{{ 'Stock location'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
            {% if orderPreview.taxIncluded == false %}
              <th class=\"text-center\">
                {{ 'Tax'|trans({}, 'Admin.Global') }}
              </th>
            {% endif %}
            <th class=\"text-center\">{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
            <th class=\"text-center\">
              {{ 'Total'|trans({}, 'Admin.Global') }}
              <small>{{ taxInclusion }}</small>
            </th>
          </tr>
          </thead>
          <tbody>
          {% for productDetail in orderPreview.productDetails %}
            <tr class=\"{% if loop.index > productsPreviewLimit %}js-product-preview-more d-none{% endif %}\">
              <td class=\"p-1\">{{ productDetail.name }}</td>
              <td class=\"p-1\">{{ productDetail.reference }}</td>
              <td class=\"p-1 js-cell-product-stock-location\">
                {% if productDetail.location is not empty %}{{ productDetail.location }}{% endif %}
              </td>
              {% if orderPreview.taxIncluded == false %}
                <td class=\"p-1 text-center\">{{ productDetail.totalTax }}</td>
              {% endif %}
              <td class=\"p-1 text-center\">{{ productDetail.quantity }}</td>
              <td class=\"p-1 text-center\">{{ productDetail.totalPrice }}</td>
            </tr>
          {% endfor %}

          {% if orderPreview.productDetails|length > productsPreviewLimit %}
            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  {{ '(%count% more)'|trans({
                    '%count%': orderPreview.productDetails|length - productsPreviewLimit
                  }, 'Admin.Global') }}
                </a>
              </td>
            </tr>
          {% endif %}
          </tbody>
        </table>
      </div>

      <div class=\"text-right\">
        <a href=\"{{ path('admin_orders_view', {'orderId': orderId}) }}\" class=\"btn btn-primary btn-sm mb-3\">
          {{ 'Open details'|trans({}, 'Admin.Orderscustomers.Feature') }}
          <i class=\"material-icons\">arrow_right_alt</i>
        </a>
      </div>
    </div>
  </div>
  {{ renderhook('displayOrderPreview', {'order_id': orderId}) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/preview.html.twig");
    }
}
