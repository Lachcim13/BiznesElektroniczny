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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig */
class __TwigTemplate_aec80408c779c83138c60f46743a427fb6696f5fbf35b8445a7865564162a45a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'catalog_categories_listing' => [$this, 'block_catalog_categories_listing'],
            'addon_card_see_more' => [$this, 'block_addon_card_see_more'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      ";
        // line 24
        $this->displayBlock('catalog_categories_listing', $context, $blocks);
        // line 43
        echo "    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_catalog_categories_listing($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        // line 25
        echo "        <div class=\"module-short-list\">
          ";
        // line 26
        if (twig_test_empty(($context["modules"] ?? $this->getContext($context, "modules")))) {
            // line 27
            echo "            <div class=\"modules-list module-list-empty\">
              <p>
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You do not have any uninstalled module.", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "
              </p>
            </div>
          ";
        } else {
            // line 33
            echo "            ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig", 33)->display(twig_array_merge($context, ["modules" => ($context["modules"] ?? $this->getContext($context, "modules")), "display_type" => "list", "origin" => "manage", "id" => "all"]));
            // line 34
            echo "
            ";
            // line 35
            $this->displayBlock('addon_card_see_more', $context, $blocks);
            // line 40
            echo "          ";
        }
        // line 41
        echo "        </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_addon_card_see_more($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_card_see_more"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_card_see_more"));

        // line 36
        echo "              ";
        if ((twig_length_filter($this->env, ($context["modules"] ?? $this->getContext($context, "modules"))) > ($context["maxModulesDisplayed"] ?? $this->getContext($context, "maxModulesDisplayed")))) {
            // line 37
            echo "                ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/see_more.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig", 37)->display(twig_array_merge($context, ["id" => "all"]));
            // line 38
            echo "              ";
        }
        // line 39
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 39,  142 => 38,  139 => 37,  136 => 36,  127 => 35,  116 => 41,  113 => 40,  111 => 35,  108 => 34,  105 => 33,  98 => 29,  94 => 27,  92 => 26,  89 => 25,  80 => 24,  68 => 43,  66 => 24,  62 => 22,  53 => 21,  31 => 19,);
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

{% block content %}
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      {% block catalog_categories_listing %}
        <div class=\"module-short-list\">
          {% if modules is empty %}
            <div class=\"modules-list module-list-empty\">
              <p>
                {{ 'You do not have any uninstalled module.' | trans({}, 'Modules.Mbo.Modulescatalog') }}
              </p>
            </div>
          {% else  %}
            {% include '@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig' with { 'modules': modules, 'display_type': 'list', 'origin': 'manage', 'id': 'all' } %}

            {% block addon_card_see_more %}
              {% if (modules | length) > maxModulesDisplayed %}
                {% include '@PrestaShop/Admin/Module/Includes/see_more.html.twig' with { 'id': 'all' } %}
              {% endif %}
            {% endblock %}
          {% endif %}
        </div>
      {% endblock %}
    </div>
  </div>
{% endblock %}
", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig", "/var/www/html/modules/ps_mbo/views/templates/admin/controllers/module_catalog/uninstalled-modules.html.twig");
    }
}
