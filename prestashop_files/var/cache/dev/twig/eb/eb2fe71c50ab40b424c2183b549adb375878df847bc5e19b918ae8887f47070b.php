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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig */
class __TwigTemplate_b5184a9a94c4b42bd4a6a736ea4e914c99bb56a830cfae8f1a62dc070129222d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["severity"] = $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), "severity", []);
        // line 27
        $context["withMessage"] = $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "with_message", []);
        // line 28
        echo "
";
        // line 29
        if ((($context["severity"] ?? $this->getContext($context, "severity")) == 1)) {
            // line 30
            echo "  ";
            $context["severityClass"] = "success";
            // line 31
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? $this->getContext($context, "withMessage"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Informative only", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 32
($context["severity"] ?? $this->getContext($context, "severity")) == 2)) {
            // line 33
            echo "  ";
            $context["severityClass"] = "warning";
            // line 34
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? $this->getContext($context, "withMessage"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 35
($context["severity"] ?? $this->getContext($context, "severity")) == 3)) {
            // line 36
            echo "  ";
            $context["severityClass"] = "danger";
            // line 37
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? $this->getContext($context, "withMessage"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 38
($context["severity"] ?? $this->getContext($context, "severity")) == 4)) {
            // line 39
            echo "  ";
            $context["severityClass"] = "dark";
            // line 40
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? $this->getContext($context, "withMessage"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Major issue (crash)!", [], "Admin.Advparameters.Help")) : (""));
        } else {
            // line 42
            echo "  ";
            $context["severityClass"] = "";
            // line 43
            echo "  ";
            $context["severityMessage"] = "";
        }
        // line 45
        echo "
<span class=\"badge badge-pill badge-";
        // line 46
        echo twig_escape_filter($this->env, ($context["severityClass"] ?? $this->getContext($context, "severityClass")), "html", null, true);
        echo "\">
  ";
        // line 47
        if (($context["withMessage"] ?? $this->getContext($context, "withMessage"))) {
            // line 48
            echo "    ";
            echo twig_escape_filter($this->env, ($context["severityMessage"] ?? $this->getContext($context, "severityMessage")), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, ($context["severity"] ?? $this->getContext($context, "severity")), "html", null, true);
            echo ")
  ";
        } else {
            // line 50
            echo "    ";
            echo twig_escape_filter($this->env, ($context["severity"] ?? $this->getContext($context, "severity")), "html", null, true);
            echo "
  ";
        }
        // line 52
        echo "</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 52,  103 => 50,  95 => 48,  93 => 47,  89 => 46,  86 => 45,  82 => 43,  79 => 42,  75 => 40,  72 => 39,  70 => 38,  67 => 37,  64 => 36,  62 => 35,  59 => 34,  56 => 33,  54 => 32,  51 => 31,  48 => 30,  46 => 29,  43 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set severity = record.severity %}
{% set withMessage = column.options.with_message %}

{% if severity == 1 %}
  {% set severityClass = 'success' %}
  {% set severityMessage = withMessage ? 'Informative only'|trans({}, 'Admin.Advparameters.Help') : '' %}
{% elseif severity == 2 %}
  {% set severityClass = 'warning' %}
  {% set severityMessage = withMessage ? 'Warning'|trans({}, 'Admin.Advparameters.Help') : '' %}
{% elseif severity == 3 %}
  {% set severityClass = 'danger' %}
  {% set severityMessage = withMessage ? 'Error'|trans({}, 'Admin.Advparameters.Help') : '' %}
{% elseif severity == 4 %}
  {% set severityClass = 'dark' %}
  {% set severityMessage = withMessage ? 'Major issue (crash)!'|trans({}, 'Admin.Advparameters.Help') : '' %}
{% else %}
  {% set severityClass = '' %}
  {% set severityMessage = '' %}
{% endif %}

<span class=\"badge badge-pill badge-{{ severityClass }}\">
  {% if withMessage %}
    {{ severityMessage }} ({{ severity }})
  {% else %}
    {{ severity }}
  {% endif %}
</span>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/severity_level.html.twig");
    }
}
