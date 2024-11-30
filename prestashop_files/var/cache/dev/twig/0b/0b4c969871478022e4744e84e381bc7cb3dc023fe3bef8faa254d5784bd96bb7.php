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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig */
class __TwigTemplate_c37d5d10295c4ea8300c26a731982dfae745826e1d4b2aebec23a8e2da4ce6b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      ";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "id", [])) {
            // line 33
            echo "        <div class=\"col\">
          <h2>
            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "id", [])]), "html", null, true);
            echo "\">
              ";
            // line 36
            if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "gender", [])) {
                // line 37
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "gender", []), "html", null, true);
                echo "
              ";
            }
            // line 39
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "first_name", []), "html", null, true);
            echo "
              ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "last_name", []), "html", null, true);
            echo "
            </a>
          </h2>

          <p class=\"mb-0\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account registration date:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "registration_date", []), "html", null, true);
            echo "
          </p>

          <p class=\"mb-0\">
            ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valid orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "valid_orders_count", []), "html", null, true);
            echo "
          </p>

          <p class=\"mb-0\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "total_spent_since_registration", []), "html", null, true);
            echo "
          </p>
        </div>

        <div class=\"col text-right\">
          <a href=\"mailto:";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "email", []), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
            ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? $this->getContext($context, "cartView")), "customerInformation", []), "email", []), "html", null, true);
            echo "
          </a>
        </div>
      ";
        } else {
            // line 66
            echo "        <div class=\"col\">
          <h2 class=\"mb-0\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Guest not registered", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</h2>
        </div>
      ";
        }
        // line 70
        echo "    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 70,  127 => 67,  124 => 66,  117 => 62,  113 => 61,  105 => 56,  101 => 55,  94 => 51,  90 => 50,  83 => 46,  79 => 45,  71 => 40,  66 => 39,  60 => 37,  58 => 36,  54 => 35,  50 => 33,  48 => 32,  41 => 28,  36 => 25,);
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
    {{ 'Customer information'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      {% if cartView.customerInformation.id %}
        <div class=\"col\">
          <h2>
            <a href=\"{{ path('admin_customers_view', {'customerId': cartView.customerInformation.id }) }}\">
              {% if cartView.customerInformation.gender %}
                {{ cartView.customerInformation.gender }}
              {% endif %}
              {{ cartView.customerInformation.first_name }}
              {{ cartView.customerInformation.last_name }}
            </a>
          </h2>

          <p class=\"mb-0\">
            {{ 'Account registration date:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            {{ cartView.customerInformation.registration_date }}
          </p>

          <p class=\"mb-0\">
            {{ 'Valid orders placed:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            {{ cartView.customerInformation.valid_orders_count }}
          </p>

          <p class=\"mb-0\">
            {{ 'Total spent since registration:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            {{ cartView.customerInformation.total_spent_since_registration }}
          </p>
        </div>

        <div class=\"col text-right\">
          <a href=\"mailto:{{ cartView.customerInformation.email }}\" class=\"btn btn-outline-secondary\">
            {{ cartView.customerInformation.email }}
          </a>
        </div>
      {% else %}
        <div class=\"col\">
          <h2 class=\"mb-0\">{{ 'Guest not registered'|trans({}, 'Admin.Orderscustomers.Feature') }}</h2>
        </div>
      {% endif %}
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig");
    }
}
