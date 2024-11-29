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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig */
class __TwigTemplate_107d7e6ae01cb2119e89747da8dfc857f79d73696c38cf7727b77549e7febfea extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"application/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["cdc_error_templating_url"] ?? $this->getContext($context, "cdc_error_templating_url")), "html", null, true);
        echo "\"></script>

  ";
        // line 25
        if ((array_key_exists("cdc_script_not_found", $context) && (($context["cdc_script_not_found"] ?? $this->getContext($context, "cdc_script_not_found")) === true))) {
            // line 26
            echo "    <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["cdc_error_url"] ?? $this->getContext($context, "cdc_error_url")), "html", null, true);
            echo "\"></script>
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        if ((array_key_exists("urlAccountsCdn", $context) &&  !twig_test_empty(($context["urlAccountsCdn"] ?? $this->getContext($context, "urlAccountsCdn"))))) {
            // line 30
            echo "    ";
            // line 31
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["urlAccountsCdn"] ?? $this->getContext($context, "urlAccountsCdn")), "html", null, true);
            echo "\" rel=preload></script>
    <script>
      if (window?.psaccountsVue) {
        window?.psaccountsVue?.init();
        ";
            // line 35
            $context["shop_context"] = twig_array_merge(($context["shop_context"] ?? $this->getContext($context, "shop_context")), ["accounts_component_loaded" => true]);
            // line 36
            echo "      }
    </script>
  ";
        }
        // line 39
        echo "
  <script>
    function addOrUpdateUrlParam(name, value)
    {
      var href = window.location.href;
      var regex = new RegExp(\"[&\\\\?]\" + name + \"=\");
      if(regex.test(href))
      {
        regex = new RegExp(\"([&\\\\?])\" + name + \"=\\\\d+\");
        window.location.href = href.replace(regex, \"\$1\" + name + \"=\" + value);
      }
      else
      {
        if(href.indexOf(\"?\") > -1)
          window.location.href = href + \"&\" + name + \"=\" + value;
        else
          window.location.href = href + \"?\" + name + \"=\" + value;
      }
    }

    if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
      if (typeof renderCdcError === 'function') {
        window.\$(document).ready(function() {
          renderCdcError(\$('#cdc-container'));
        });
      }
    } else {
      const currentUrl = new URL(window.location.href)
      if (currentUrl.searchParams.has('filterCategoryRef') && !currentUrl.searchParams.has('mbo_cdc_path')) {
        addOrUpdateUrlParam('mbo_cdc_path', encodeURIComponent('/#/modules'));
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = ";
        // line 72
        echo twig_jsonencode_filter(($context["shop_context"] ?? $this->getContext($context, "shop_context")));
        echo ";

        renderModules(context, '#cdc-container')
      }
    }
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 81
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["cdc_error_templating_css"] ?? $this->getContext($context, "cdc_error_templating_css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 86
        echo "  <prestashop-accounts style=\"display: none;\"></prestashop-accounts>

  <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mbo_module_cdc_error");
        echo "\"></div>

  ";
        // line 90
        $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/modal_import.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 90)->display(twig_array_merge($context, ["level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage"))]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 90,  193 => 88,  189 => 86,  180 => 85,  168 => 82,  163 => 81,  154 => 80,  137 => 72,  102 => 39,  97 => 36,  95 => 35,  87 => 31,  85 => 30,  83 => 29,  80 => 28,  74 => 26,  72 => 25,  67 => 23,  62 => 22,  53 => 21,  31 => 19,);
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
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
{% extends '@PrestaShop/Admin/Module/common.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script type=\"application/javascript\" src=\"{{ cdc_error_templating_url }}\"></script>

  {% if cdc_script_not_found is defined and cdc_script_not_found is same as(true) %}
    <script type=\"application/javascript\" src=\"{{ cdc_error_url }}\"></script>
  {% endif %}

  {% if urlAccountsCdn is defined and urlAccountsCdn is not empty %}
    {# PrestaShop Account #}
    <script src=\"{{ urlAccountsCdn }}\" rel=preload></script>
    <script>
      if (window?.psaccountsVue) {
        window?.psaccountsVue?.init();
        {% set shop_context = shop_context|merge({'accounts_component_loaded': true}) %}
      }
    </script>
  {% endif %}

  <script>
    function addOrUpdateUrlParam(name, value)
    {
      var href = window.location.href;
      var regex = new RegExp(\"[&\\\\?]\" + name + \"=\");
      if(regex.test(href))
      {
        regex = new RegExp(\"([&\\\\?])\" + name + \"=\\\\d+\");
        window.location.href = href.replace(regex, \"\$1\" + name + \"=\" + value);
      }
      else
      {
        if(href.indexOf(\"?\") > -1)
          window.location.href = href + \"&\" + name + \"=\" + value;
        else
          window.location.href = href + \"?\" + name + \"=\" + value;
      }
    }

    if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
      if (typeof renderCdcError === 'function') {
        window.\$(document).ready(function() {
          renderCdcError(\$('#cdc-container'));
        });
      }
    } else {
      const currentUrl = new URL(window.location.href)
      if (currentUrl.searchParams.has('filterCategoryRef') && !currentUrl.searchParams.has('mbo_cdc_path')) {
        addOrUpdateUrlParam('mbo_cdc_path', encodeURIComponent('/#/modules'));
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = {{ shop_context|json_encode()|raw }};

        renderModules(context, '#cdc-container')
      }
    }
  </script>
{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ cdc_error_templating_css }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block content %}
  <prestashop-accounts style=\"display: none;\"></prestashop-accounts>

  <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"{{ path('admin_mbo_module_cdc_error') }}\"></div>

  {% include '@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
{% endblock %}
", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", "/var/www/html/modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig");
    }
}
