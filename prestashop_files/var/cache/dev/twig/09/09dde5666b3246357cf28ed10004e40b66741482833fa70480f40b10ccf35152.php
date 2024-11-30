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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig */
class __TwigTemplate_93503f36d3a5f6d086512deffd04976416cffb97ec52a078bb3becbf233a90f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig"));

        // line 25
        echo "
<div class=\"card d-none\" id=\"cart-rules-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col-3\">
        <span class=\"float-right\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for a voucher", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"col-4\" id=\"cart-rules-search-block\">
        <div class=\"col p-0\">
          <input type=\"text\" class=\"form-control\" id=\"search-cart-rules-input\">
          <ul id=\"search-cart-rules-result-box\" class=\"position-absolute bg-white w-100 form-control d-none list-unstyled\"></ul>
          <div class=\"text-danger align-top d-none\" id=\"js-cart-rule-error-block\">
            <i class=\"material-icons form-error-icon\">error_outline</i>
            <span id=\"js-cart-rule-error-text\"></span>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <a
          class=\"btn btn-primary\"
          id=\"js-add-cart-rule-btn\"
          href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["liteDisplaying" => 1, "submitFormAjax" => 1, "addcart_rule" => 1]), "html", null, true);
        echo "\"
        >
          ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new voucher", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </a>
      </div>
    </div>

    <table class=\"table d-none mt-2\" id=\"cart-rules-table\">
      <thead>
      <tr>
        <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th></th>
      </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<script id=\"cart-rules-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-rule-name\"></td>
    <td class=\"js-cart-rule-description\"></td>
    <td class=\"js-cart-rule-value\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-cart-rule-delete-btn\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remove", [], "Admin.Global"), "html", null, true);
        echo "</button>
    </td>
  </tr>
</script>

<script id=\"cart-rules-not-found-template\" type=\"text/template\">
  <li>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No voucher was found", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</li>
</script>

<script id=\"found-cart-rule-template\" type=\"text/template\">
  <li data-cart-rule-id=\"\" class=\"js-found-cart-rule found-cart-rule\"></li>
</script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 83,  114 => 77,  96 => 62,  92 => 61,  88 => 60,  77 => 52,  72 => 50,  65 => 46,  49 => 33,  41 => 28,  36 => 25,);
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

<div class=\"card d-none\" id=\"cart-rules-block\">
  <h3 class=\"card-header\">
    {{ 'Vouchers'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col-3\">
        <span class=\"float-right\">{{ 'Search for a voucher'|trans({}, 'Admin.Orderscustomers.Feature') }}</span>
      </div>
      <div class=\"col-4\" id=\"cart-rules-search-block\">
        <div class=\"col p-0\">
          <input type=\"text\" class=\"form-control\" id=\"search-cart-rules-input\">
          <ul id=\"search-cart-rules-result-box\" class=\"position-absolute bg-white w-100 form-control d-none list-unstyled\"></ul>
          <div class=\"text-danger align-top d-none\" id=\"js-cart-rule-error-block\">
            <i class=\"material-icons form-error-icon\">error_outline</i>
            <span id=\"js-cart-rule-error-text\"></span>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">{{ 'or'|trans({}, 'Admin.Global') }}</span>
        <a
          class=\"btn btn-primary\"
          id=\"js-add-cart-rule-btn\"
          href=\"{{ getAdminLink('AdminCartRules', true, {'liteDisplaying': 1, 'submitFormAjax': 1, 'addcart_rule': 1}) }}\"
        >
          {{ 'Add new voucher'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </a>
      </div>
    </div>

    <table class=\"table d-none mt-2\" id=\"cart-rules-table\">
      <thead>
      <tr>
        <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Description'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Value'|trans({}, 'Admin.Global') }}</th>
        <th></th>
      </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<script id=\"cart-rules-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-rule-name\"></td>
    <td class=\"js-cart-rule-description\"></td>
    <td class=\"js-cart-rule-value\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-cart-rule-delete-btn\">{{ 'Remove'|trans({}, 'Admin.Global') }}</button>
    </td>
  </tr>
</script>

<script id=\"cart-rules-not-found-template\" type=\"text/template\">
  <li>{{ 'No voucher was found'|trans({}, 'Admin.Orderscustomers.Feature') }}</li>
</script>

<script id=\"found-cart-rule-template\" type=\"text/template\">
  <li data-cart-rule-id=\"\" class=\"js-found-cart-rule found-cart-rule\"></li>
</script>

", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig");
    }
}
