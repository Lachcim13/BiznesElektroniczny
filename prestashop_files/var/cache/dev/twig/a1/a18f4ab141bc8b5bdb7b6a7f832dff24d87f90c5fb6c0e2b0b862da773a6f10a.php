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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig */
class __TwigTemplate_58894ce7a86d9aab28e35dca639d0c530e81bc2b139221661e29ef418f19980d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig"));

        // line 25
        echo "
<div class=\"card d-none\" id=\"addresses-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row d-none\" id=\"addresses-warning\">
      <div class=\"col\">
        <div class=\"alert alert-warning\">
          <div class=\"alert-text\">
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must add at least one address to process the order.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"row d-none\" id=\"addresses-content\">
      <div class=\"col\">
        <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <select class=\"form-control js-address-select custom-select\" id=\"delivery-address-select\"></select>

        <div class=\"card mt-3\">
          <div class=\"card-body clearfix\">
            <a class=\"btn btn-outline-primary float-right\" id=\"js-delivery-address-edit-btn\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "</a>
            <div id=\"delivery-address-details\"></div>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <select class=\"form-control js-address-select custom-select\" id=\"invoice-address-select\"></select>

        <div class=\"card mt-3\">
          <div class=\"card-body clearfix\">
            <a class=\"btn btn-outline-primary float-right\" id=\"js-invoice-address-edit-btn\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "</a>
            <div id=\"invoice-address-details\"></div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <a class=\"btn btn-primary\" id=\"js-add-address-btn\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_create", ["liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
        echo "\">
          ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 67,  97 => 66,  86 => 58,  78 => 53,  69 => 47,  61 => 42,  51 => 35,  41 => 28,  36 => 25,);
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

<div class=\"card d-none\" id=\"addresses-block\">
  <h3 class=\"card-header\">
    {{ 'Addresses'|trans({}, 'Admin.Global') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"row d-none\" id=\"addresses-warning\">
      <div class=\"col\">
        <div class=\"alert alert-warning\">
          <div class=\"alert-text\">
            {{ 'You must add at least one address to process the order.'|trans({}, 'Admin.Orderscustomers.Notification') }}
          </div>
        </div>
      </div>
    </div>
    <div class=\"row d-none\" id=\"addresses-content\">
      <div class=\"col\">
        <span>{{ 'Delivery'|trans({}, 'Admin.Global') }}</span>
        <select class=\"form-control js-address-select custom-select\" id=\"delivery-address-select\"></select>

        <div class=\"card mt-3\">
          <div class=\"card-body clearfix\">
            <a class=\"btn btn-outline-primary float-right\" id=\"js-delivery-address-edit-btn\">{{ 'Edit'|trans({}, 'Admin.Actions') }}</a>
            <div id=\"delivery-address-details\"></div>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span>{{ 'Invoice'|trans({}, 'Admin.Global') }}</span>
        <select class=\"form-control js-address-select custom-select\" id=\"invoice-address-select\"></select>

        <div class=\"card mt-3\">
          <div class=\"card-body clearfix\">
            <a class=\"btn btn-outline-primary float-right\" id=\"js-invoice-address-edit-btn\">{{ 'Edit'|trans({}, 'Admin.Actions') }}</a>
            <div id=\"invoice-address-details\"></div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <a class=\"btn btn-primary\" id=\"js-add-address-btn\" href=\"{{ path('admin_addresses_create', {'liteDisplaying': 1, 'submitFormAjax': 1}) }}\">
          {{ 'Add new address'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </a>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig");
    }
}
