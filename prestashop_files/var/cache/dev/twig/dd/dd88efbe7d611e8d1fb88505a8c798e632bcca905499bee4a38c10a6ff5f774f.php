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

/* @PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig */
class __TwigTemplate_852c5f56eb3cf2dd5318b623f6ba85e9f9a119d8c6d36e0a3c07b2d82632a1f0 extends \Twig\Template
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
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", 25);
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
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 32
        if ( !($context["isSingleShopContext"] ?? $this->getContext($context, "isSingleShopContext"))) {
            // line 33
            echo "          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that this page is available in a single shop context only. Switch context to work on it.", [], "Admin.Notifications.Info"), "html", null, true);
            echo "
            </p>
          </div>
        ";
        } elseif ((        // line 38
($context["paymentModulesCount"] ?? $this->getContext($context, "paymentModulesCount")) == 0)) {
            // line 39
            echo "          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No payment module installed", [], "Admin.Payment.Notification"), "html", null, true);
            echo "
            </p>
          </div>
        ";
        } else {
            // line 45
            echo "          <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is where you decide what payment modules are available for different variations like your customers' currency, group, and country.", [], "Admin.Payment.Help"), "html", null, true);
            echo "
            </p>
            <p class=\"alert-text\">
              ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A check mark indicates you want the payment module available.", [], "Admin.Payment.Help"), "html", null, true);
            echo "
              ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If it is not checked then this means that the payment module is disabled.", [], "Admin.Payment.Help"), "html", null, true);
            echo "
            </p>
          </div>

          ";
            // line 55
            $this->loadTemplate("@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", 55)->display($context);
            // line 56
            echo "        ";
        }
        // line 57
        echo "      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/payment_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 65,  139 => 63,  130 => 62,  117 => 57,  114 => 56,  112 => 55,  105 => 51,  101 => 50,  95 => 47,  91 => 45,  84 => 41,  80 => 39,  78 => 38,  72 => 35,  68 => 33,  66 => 32,  61 => 29,  52 => 28,  30 => 25,);
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
{% trans_default_domain 'Admin.Payment.Feature' %}

{% block content %}
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        {% if not isSingleShopContext %}
          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">
              {{ 'Note that this page is available in a single shop context only. Switch context to work on it.'|trans({}, 'Admin.Notifications.Info') }}
            </p>
          </div>
        {% elseif paymentModulesCount == 0 %}
          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">
              {{ 'No payment module installed'|trans({}, 'Admin.Payment.Notification') }}
            </p>
          </div>
        {% else %}
          <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
              {{ 'This is where you decide what payment modules are available for different variations like your customers\\' currency, group, and country.'|trans({}, 'Admin.Payment.Help') }}
            </p>
            <p class=\"alert-text\">
              {{ 'A check mark indicates you want the payment module available.'|trans({}, 'Admin.Payment.Help') }}
              {{ 'If it is not checked then this means that the payment module is disabled.'|trans({}, 'Admin.Payment.Help') }}
            </p>
          </div>

          {% include '@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig' %}
        {% endif %}
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/payment_preferences.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Payment/Preferences/payment_preferences.html.twig");
    }
}
