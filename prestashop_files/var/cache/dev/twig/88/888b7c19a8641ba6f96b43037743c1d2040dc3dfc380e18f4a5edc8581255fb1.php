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

/* @PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig */
class __TwigTemplate_cd884904bb55645db20e1303f66fa3d0e3b19a842cff9eadde7864c6b1fae130 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'page_layout_customization_form_rest' => [$this, 'block_page_layout_customization_form_rest'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "  <div class=\"row\">
    <div class=\"col-12\">
      ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageLayoutCustomizationForm"] ?? $this->getContext($context, "pageLayoutCustomizationForm")), 'form_start');
        echo "
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-10\">
            <div class=\"card\">
              <h3 class=\"card-header\">
                <i class=\"material-icons\">settings</i>
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose layouts", [], "Admin.Actions"), "html", null, true);
        echo "
              </h3>
              <div class=\"card-body\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Layout", [], "Admin.Global"), "html", null, true);
        echo "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["customizablePage"]) {
            // line 50
            echo "                      <tr>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, (($this->getAttribute($context["customizablePage"], "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["customizablePage"], "title", []), $this->getAttribute($context["customizablePage"], "page", []))) : ($this->getAttribute($context["customizablePage"], "page", []))), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["customizablePage"], "description", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["pageLayoutCustomizationForm"] ?? $this->getContext($context, "pageLayoutCustomizationForm")), "layouts", [], "array"), $this->getAttribute($context["customizablePage"], "page", []), [], "array"), 'widget');
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customizablePage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                  </tbody>
                </table>

                ";
        // line 59
        $this->displayBlock('page_layout_customization_form_rest', $context, $blocks);
        // line 62
        echo "              </div>
              <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                  <button class=\"btn btn-primary\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageLayoutCustomizationForm"] ?? $this->getContext($context, "pageLayoutCustomizationForm")), 'form_end');
        echo "
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_page_layout_customization_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_layout_customization_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_layout_customization_form_rest"));

        // line 60
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pageLayoutCustomizationForm"] ?? $this->getContext($context, "pageLayoutCustomizationForm")), 'rest');
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  157 => 59,  143 => 71,  134 => 65,  129 => 62,  127 => 59,  122 => 56,  113 => 53,  109 => 52,  105 => 51,  102 => 50,  98 => 49,  91 => 45,  87 => 44,  83 => 43,  74 => 37,  65 => 31,  61 => 29,  52 => 28,  30 => 26,);
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

{% block content %}
  <div class=\"row\">
    <div class=\"col-12\">
      {{ form_start(pageLayoutCustomizationForm) }}
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-10\">
            <div class=\"card\">
              <h3 class=\"card-header\">
                <i class=\"material-icons\">settings</i>
                {{ 'Choose layouts'|trans({}, 'Admin.Actions') }}
              </h3>
              <div class=\"card-body\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>{{ 'Page'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Description'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Layout'|trans({}, 'Admin.Global') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for customizablePage in pages %}
                      <tr>
                        <td>{{ customizablePage.title|default(customizablePage.page) }}</td>
                        <td>{{ customizablePage.description }}</td>
                        <td>{{ form_widget(pageLayoutCustomizationForm['layouts'][customizablePage.page]) }}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>

                {% block page_layout_customization_form_rest %}
                  {{ form_rest(pageLayoutCustomizationForm) }}
                {% endblock %}
              </div>
              <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                  <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      {{ form_end(pageLayoutCustomizationForm) }}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/customize_page_layouts.html.twig");
    }
}
