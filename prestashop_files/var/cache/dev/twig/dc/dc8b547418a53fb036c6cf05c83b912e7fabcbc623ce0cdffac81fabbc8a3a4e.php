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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig */
class __TwigTemplate_545ae6bac9a5f910b49ffd8193f751e8da5bb4ea01be269efe37d4f80dd87587 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig"));

        // line 28
        $context["enableSidebar"] = true;
        // line 29
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit: %lastname% %firstname%", ["%firstname%" => $this->getAttribute($this->getAttribute(        // line 30
($context["editableEmployee"] ?? $this->getContext($context, "editableEmployee")), "firstName", []), "value", []), "%lastname%" => $this->getAttribute($this->getAttribute(        // line 31
($context["editableEmployee"] ?? $this->getContext($context, "editableEmployee")), "lastName", []), "value", [])], "Admin.Advparameters.Feature");
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "  ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "vars", []), "errors", []))) {
            // line 36
            echo "    <div class=\"alert alert-danger\">
      ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 38
                echo "        <div class=\"alert-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </div>
  ";
        }
        // line 42
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", 45)->display(twig_array_merge($context, ["employeeForm" =>         // line 46
($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "level" =>         // line 47
($context["level"] ?? $this->getContext($context, "level")), "errorMessage" =>         // line 48
($context["errorMessage"] ?? $this->getContext($context, "errorMessage")), "isRestrictedAccess" =>         // line 49
($context["isRestrictedAccess"] ?? $this->getContext($context, "isRestrictedAccess")), "superAdminProfileId" =>         // line 50
($context["superAdminProfileId"] ?? $this->getContext($context, "superAdminProfileId")), "showAddonsConnectButton" =>         // line 51
($context["showAddonsConnectButton"] ?? $this->getContext($context, "showAddonsConnectButton")), "getTabsUrl" =>         // line 52
($context["getTabsUrl"] ?? $this->getContext($context, "getTabsUrl")), "avatarUrl" => $this->getAttribute(        // line 53
($context["editableEmployee"] ?? $this->getContext($context, "editableEmployee")), "avatarUrl", [])]));
        // line 55
        echo "    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 63
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/vendor/jquery-passy.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/employee_form.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 65,  133 => 63,  127 => 60,  118 => 59,  106 => 55,  104 => 53,  103 => 52,  102 => 51,  101 => 50,  100 => 49,  99 => 48,  98 => 47,  97 => 46,  96 => 45,  91 => 42,  87 => 40,  78 => 38,  74 => 37,  71 => 36,  68 => 35,  59 => 34,  48 => 26,  46 => 31,  45 => 30,  44 => 29,  42 => 28,  30 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% set enableSidebar = true %}
{% set layoutTitle = 'Edit: %lastname% %firstname%'|trans({
  '%firstname%': editableEmployee.firstName.value,
  '%lastname%': editableEmployee.lastName.value
}, 'Admin.Advparameters.Feature') %}

{% block content %}
  {% if employeeForm.vars.errors is not empty %}
    <div class=\"alert alert-danger\">
      {% for error in employeeForm.vars.errors %}
        <div class=\"alert-text\">{{ error.message }}</div>
      {% endfor %}
    </div>
  {% endif %}

  <div class=\"row justify-content-center\">
    <div class=\"col\">
      {% include '@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig' with {
        employeeForm: employeeForm,
        level: level,
        errorMessage: errorMessage,
        isRestrictedAccess: isRestrictedAccess,
        superAdminProfileId: superAdminProfileId,
        showAddonsConnectButton: showAddonsConnectButton,
        getTabsUrl: getTabsUrl,
        avatarUrl: editableEmployee.avatarUrl
      } %}
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  {# Password generation plugin #}
  <script src=\"{{ asset('themes/default/js/vendor/jquery-passy.js') }}\"></script>

  <script src=\"{{ asset('themes/new-theme/public/employee_form.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/edit.html.twig");
    }
}
