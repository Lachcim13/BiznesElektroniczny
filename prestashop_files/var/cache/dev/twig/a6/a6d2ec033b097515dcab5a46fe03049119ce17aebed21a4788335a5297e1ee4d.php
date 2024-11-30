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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig */
class __TwigTemplate_0178048feed7bd6bed3db82899596640222b1427ca57b93a05200dbce34d9fde extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["choices"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "choice_provider", []), "getChoices", [0 => ($context["record"] ?? $this->getContext($context, "record"))], "method");
        // line 27
        $context["selectedChoice"] = $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "field", []), [], "array");
        // line 28
        $context["selectedChoiceName"] = "";
        // line 29
        $context["routeParams"] = $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayPluck(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "record_route_params", []));
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 32
            echo "  ";
            if (($context["value"] == ($context["selectedChoice"] ?? $this->getContext($context, "selectedChoice")))) {
                // line 33
                echo "    ";
                $context["selectedChoiceName"] = $context["name"];
                // line 34
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        // line 37
        $context["classes"] = "btn btn-secondary dropdown-toggle dropdown-toggle-split rounded";
        // line 38
        echo "
";
        // line 39
        if ( !twig_test_empty(($context["choices"] ?? $this->getContext($context, "choices")))) {
            // line 40
            echo "  <div class=\"dropdown\">
    <button
      ";
            // line 42
            if ($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "color_field", [])) {
                // line 43
                echo "        ";
                $context["textColor"] = ((call_user_func_array($this->env->getFunction('is_color_bright')->getCallable(), [$this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "color_field", []), [], "array")])) ? ("#383838") : ("white"));
                // line 44
                echo "        style=\"background-color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "color_field", []), [], "array"), "html", null, true);
                echo "; color: ";
                echo twig_escape_filter($this->env, ($context["textColor"] ?? $this->getContext($context, "textColor")), "html", null, true);
                echo ";\"
        ";
                // line 45
                $context["classes"] = (($context["classes"] ?? $this->getContext($context, "classes")) . " coloured");
                // line 46
                echo "      ";
            }
            // line 47
            echo "      class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? $this->getContext($context, "classes")), "html", null, true);
            echo "\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
      data-flip=\"false\"
    >
      ";
            // line 54
            echo twig_escape_filter($this->env, ($context["selectedChoiceName"] ?? $this->getContext($context, "selectedChoiceName")), "html", null, true);
            echo "
    </button>
    <div
      class=\"dropdown-menu js-choice-options\"
      data-url=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "route", []), ($context["routeParams"] ?? $this->getContext($context, "routeParams"))), "html", null, true);
            echo "\"
    >
      ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                if (($context["value"] != ($context["selectedChoice"] ?? $this->getContext($context, "selectedChoice")))) {
                    // line 61
                    echo "        <button class=\"js-dropdown-item dropdown-item\" data-value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</button>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </div>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 63,  126 => 61,  121 => 60,  116 => 58,  109 => 54,  98 => 47,  95 => 46,  93 => 45,  86 => 44,  83 => 43,  81 => 42,  77 => 40,  75 => 39,  72 => 38,  70 => 37,  67 => 36,  60 => 34,  57 => 33,  54 => 32,  50 => 31,  47 => 30,  45 => 29,  43 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set choices = column.options.choice_provider.getChoices(record) %}
{% set selectedChoice = record[column.options.field] %}
{% set selectedChoiceName = '' %}
{% set routeParams = record|array_pluck(column.options.record_route_params) %}

{% for name,value in choices %}
  {% if value == selectedChoice %}
    {% set selectedChoiceName = name %}
  {% endif %}
{% endfor %}

{% set classes = 'btn btn-secondary dropdown-toggle dropdown-toggle-split rounded' %}

{% if choices is not empty %}
  <div class=\"dropdown\">
    <button
      {% if column.options.color_field %}
        {% set textColor = is_color_bright(record[column.options.color_field]) ? '#383838' : 'white' %}
        style=\"background-color: {{ record[column.options.color_field] }}; color: {{ textColor }};\"
        {% set classes = classes ~ ' coloured' %}
      {% endif %}
      class=\"{{ classes }}\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
      data-flip=\"false\"
    >
      {{ selectedChoiceName }}
    </button>
    <div
      class=\"dropdown-menu js-choice-options\"
      data-url=\"{{ url(column.options.route, routeParams) }}\"
    >
      {% for name,value in choices if value != selectedChoice %}
        <button class=\"js-dropdown-item dropdown-item\" data-value=\"{{ value }}\">{{ name }}</button>
      {% endfor %}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/choice.html.twig");
    }
}
