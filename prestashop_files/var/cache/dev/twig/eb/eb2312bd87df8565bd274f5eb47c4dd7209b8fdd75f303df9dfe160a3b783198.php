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

/* @PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig */
class __TwigTemplate_a70f9ffc479c6202c22fb58290b0af7153e79adf218d2e798fdd013413ade005 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'payment_preferences_form' => [$this, 'block_payment_preferences_form'],
            'payment_modules_currency_restrictions' => [$this, 'block_payment_modules_currency_restrictions'],
            'payment_modules_group_restrictions' => [$this, 'block_payment_modules_group_restrictions'],
            'payment_modules_country_restrictions' => [$this, 'block_payment_modules_country_restrictions'],
            'payment_modules_carrier_restrictions' => [$this, 'block_payment_modules_carrier_restrictions'],
            'payment_preferences_block_rest' => [$this, 'block_payment_preferences_block_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('payment_preferences_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_payment_preferences_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_preferences_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_preferences_form"));

        // line 28
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paymentPreferencesForm"] ?? $this->getContext($context, "paymentPreferencesForm")), 'form_start');
        echo "
  ";
        // line 29
        $this->displayBlock('payment_modules_currency_restrictions', $context, $blocks);
        // line 55
        echo "
  ";
        // line 56
        $this->displayBlock('payment_modules_group_restrictions', $context, $blocks);
        // line 82
        echo "
  ";
        // line 83
        $this->displayBlock('payment_modules_country_restrictions', $context, $blocks);
        // line 109
        echo "
  ";
        // line 110
        $this->displayBlock('payment_modules_carrier_restrictions', $context, $blocks);
        // line 135
        echo "
  ";
        // line 136
        $this->displayBlock('payment_preferences_block_rest', $context, $blocks);
        // line 139
        echo "
  ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paymentPreferencesForm"] ?? $this->getContext($context, "paymentPreferencesForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_payment_modules_currency_restrictions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_currency_restrictions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_currency_restrictions"));

        // line 30
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">euro_symbol</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the currency, or currencies, for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paymentPreferencesForm"] ?? $this->getContext($context, "paymentPreferencesForm")), "currency_restrictions", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-currency-restrictions-save-button\">
            ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_payment_modules_group_restrictions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_group_restrictions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_group_restrictions"));

        // line 57
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">group</i>
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the customer group(s), for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paymentPreferencesForm"] ?? $this->getContext($context, "paymentPreferencesForm")), "group_restrictions", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-group-restrictions-save-button\">
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_payment_modules_country_restrictions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_country_restrictions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_country_restrictions"));

        // line 84
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">public</i>
        ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the country, or countries, in which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paymentPreferencesForm"] ?? $this->getContext($context, "paymentPreferencesForm")), "country_restrictions", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-country-restrictions-save-button\">
            ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_payment_modules_carrier_restrictions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_carrier_restrictions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_modules_carrier_restrictions"));

        // line 111
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i>
        ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the carrier, or carrier, for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>
        <div class=\"form-group\">
          ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paymentPreferencesForm"] ?? $this->getContext($context, "paymentPreferencesForm")), "carrier_restrictions", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-carrier-restrictions-save-button\">
            ";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_payment_preferences_block_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_preferences_block_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_preferences_block_rest"));

        // line 137
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["paymentPreferencesForm"] ?? $this->getContext($context, "paymentPreferencesForm")), 'rest');
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  333 => 137,  324 => 136,  308 => 129,  299 => 123,  292 => 119,  284 => 114,  279 => 111,  270 => 110,  254 => 103,  245 => 97,  237 => 92,  229 => 87,  224 => 84,  215 => 83,  199 => 76,  190 => 70,  182 => 65,  174 => 60,  169 => 57,  160 => 56,  144 => 49,  135 => 43,  127 => 38,  119 => 33,  114 => 30,  105 => 29,  93 => 140,  90 => 139,  88 => 136,  85 => 135,  83 => 110,  80 => 109,  78 => 83,  75 => 82,  73 => 56,  70 => 55,  68 => 29,  63 => 28,  45 => 27,  42 => 26,);
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
{% trans_default_domain 'Admin.Payment.Feature' %}

{% block payment_preferences_form %}
  {{ form_start(paymentPreferencesForm) }}
  {% block payment_modules_currency_restrictions %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">euro_symbol</i>
        {{ 'Currency restrictions'|trans({}, 'Admin.Payment.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            {{ 'Please mark each checkbox for the currency, or currencies, for which you want the payment module(s) to be available.'|trans({}, 'Admin.Payment.Help') }}
          </small>
        </p>

        <div class=\"form-group\">
          {{ form_widget(paymentPreferencesForm.currency_restrictions) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-currency-restrictions-save-button\">
            {{ 'Save'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {% endblock %}

  {% block payment_modules_group_restrictions %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">group</i>
        {{ 'Group restrictions'|trans({}, 'Admin.Payment.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            {{ 'Please mark each checkbox for the customer group(s), for which you want the payment module(s) to be available.'|trans({}, 'Admin.Payment.Help') }}
          </small>
        </p>

        <div class=\"form-group\">
          {{ form_widget(paymentPreferencesForm.group_restrictions) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-group-restrictions-save-button\">
            {{ 'Save'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {% endblock %}

  {% block payment_modules_country_restrictions %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">public</i>
        {{ 'Country restrictions'|trans({}, 'Admin.Payment.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            {{ 'Please mark each checkbox for the country, or countries, in which you want the payment module(s) to be available.'|trans({}, 'Admin.Payment.Help') }}
          </small>
        </p>

        <div class=\"form-group\">
          {{ form_widget(paymentPreferencesForm.country_restrictions) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-country-restrictions-save-button\">
            {{ 'Save'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {% endblock %}

  {% block payment_modules_carrier_restrictions %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i>
        {{ 'Carrier restrictions'|trans({}, 'Admin.Payment.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            {{ 'Please mark each checkbox for the carrier, or carrier, for which you want the payment module(s) to be available.'|trans({}, 'Admin.Payment.Help') }}
          </small>
        </p>
        <div class=\"form-group\">
          {{ form_widget(paymentPreferencesForm.carrier_restrictions) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-carrier-restrictions-save-button\">
            {{ 'Save'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {% endblock %}

  {% block payment_preferences_block_rest %}
    {{ form_rest(paymentPreferencesForm) }}
  {% endblock %}

  {{ form_end(paymentPreferencesForm) }}
{% endblock %}
", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig");
    }
}
