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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig */
class __TwigTemplate_78c779ce94dbbea063a65104a825b09a8e2d0a09a203867e1cc641bc273f1034 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "orderInformation", []), "id", [])) {
            // line 34
            echo "          <h2>
            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "orderInformation", []), "id", []), "vieworder" => 1]), "html", null, true);
            echo "\">
              ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order #%d", ["%d" => sprintf($this->getAttribute($this->getAttribute(            // line 37
($context["cartView"] ?? $this->getContext($context, "cartView")), "orderInformation", []), "id", []), "\"%06d")], "Admin.Orderscustomers.Feature"), "html", null, true);
            // line 38
            echo "
            </a>
          </h2>

          <p class=\"mb-0\">
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Made on:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "orderInformation", []), "placed_date", []), "html", null, true);
            echo "
          </p>
        ";
        } else {
            // line 47
            echo "          <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No order was created from this cart.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</h2>

          ";
            // line 49
            if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "id", [])) {
                // line 50
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["createOrderFromCartLink"] ?? $this->getContext($context, "createOrderFromCartLink")), "html", null, true);
                echo "\"
               class=\"btn btn-outline-secondary\"
            >
              ";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create an order from this cart.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 56
            echo "        ";
        }
        // line 57
        echo "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 57,  99 => 56,  93 => 53,  86 => 50,  84 => 49,  78 => 47,  72 => 44,  68 => 43,  61 => 38,  59 => 37,  58 => 36,  54 => 35,  51 => 34,  49 => 33,  41 => 28,  36 => 25,);
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
    {{ 'Order information'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col\">
        {% if cartView.orderInformation.id %}
          <h2>
            <a href=\"{{ getAdminLink('AdminOrders', true, {'id_order': cartView.orderInformation.id, 'vieworder': 1}) }}\">
              {{ 'Order #%d'|trans({
                '%d': cartView.orderInformation.id|format('\"%06d')
              }, 'Admin.Orderscustomers.Feature') }}
            </a>
          </h2>

          <p class=\"mb-0\">
            {{ 'Made on:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            {{ cartView.orderInformation.placed_date }}
          </p>
        {% else %}
          <h2>{{ 'No order was created from this cart.'|trans({}, 'Admin.Orderscustomers.Feature') }}</h2>

          {% if cartView.customerInformation.id %}
            <a href=\"{{ createOrderFromCartLink }}\"
               class=\"btn btn-outline-secondary\"
            >
              {{ 'Create an order from this cart.'|trans({}, 'Admin.Orderscustomers.Feature') }}
            </a>
          {% endif %}
        {% endif %}
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig");
    }
}
