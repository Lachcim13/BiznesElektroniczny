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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig */
class __TwigTemplate_14483c02e726af5b711b093ac9441ad2444284e543a48c96c4558525ebf9d75f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig"));

        // line 25
        echo "
<span
  class=\"preview-toggle\"
  ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "preview_data_route", [], "any", true, true)) {
            // line 29
            echo "    ";
            $context["params"] = [];
            // line 30
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "preview_route_params", [], "any", true, true)) {
                // line 31
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "preview_route_params", []));
                foreach ($context['_seq'] as $context["param_name"] => $context["record_field"]) {
                    // line 32
                    echo "        ";
                    $context["params"] = twig_array_merge(($context["params"] ?? $this->getContext($context, "params")), [$context["param_name"] => $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $context["record_field"], [], "array")]);
                    // line 33
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['param_name'], $context['record_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "    ";
            }
            // line 35
            echo "    data-preview-data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "preview_data_route", []), ($context["params"] ?? $this->getContext($context, "params"))), "html", null, true);
            echo "\"
  ";
        }
        // line 37
        echo ">
  <i class=\"text-primary material-icons js-expand d-none\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "icon_expand", []), "html", null, true);
        echo "</i>
  <i class=\"text-primary material-icons js-collapse d-none\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "options", []), "icon_collapse", []), "html", null, true);
        echo "</i>
</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 39,  75 => 38,  72 => 37,  66 => 35,  63 => 34,  57 => 33,  54 => 32,  49 => 31,  46 => 30,  43 => 29,  41 => 28,  36 => 25,);
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

<span
  class=\"preview-toggle\"
  {% if column.options.preview_data_route is defined %}
    {% set params = {} %}
    {% if column.options.preview_route_params is defined %}
      {% for param_name, record_field in column.options.preview_route_params %}
        {% set params = params|merge({(param_name) : record[record_field]}) %}
      {% endfor %}
    {% endif %}
    data-preview-data-url=\"{{ path(column.options.preview_data_route, params) }}\"
  {% endif %}
>
  <i class=\"text-primary material-icons js-expand d-none\">{{ column.options.icon_expand }}</i>
  <i class=\"text-primary material-icons js-collapse d-none\">{{ column.options.icon_collapse }}</i>
</span>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/preview.html.twig");
    }
}
