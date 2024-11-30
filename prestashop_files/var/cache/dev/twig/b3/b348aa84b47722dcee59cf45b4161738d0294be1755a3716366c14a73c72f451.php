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

/* @PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig */
class __TwigTemplate_a677a576a00306074b1aa1c45442c8de69504fa03fe7ab66acc383faa0d0fc93 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'admin_form_order_delivery_slip_pdf' => [$this, 'block_admin_form_order_delivery_slip_pdf'],
            'admin_form_order_delivery_slip_options' => [$this, 'block_admin_form_order_delivery_slip_options'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig"));

        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", 27)->unwrap();
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pdfForm"] ?? $this->getContext($context, "pdfForm")), 'form_start', ["attr" => ["class" => "form", "autocomplete" => "off", "id" => "form-delivery-slips-print-pdf"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_delivery_slip_pdf")]);
        // line 33
        echo "
    <div class=\"row justify-content-center\">
      ";
        // line 35
        $this->displayBlock('admin_form_order_delivery_slip_pdf', $context, $blocks);
        // line 68
        echo "    </div>
  ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pdfForm"] ?? $this->getContext($context, "pdfForm")), 'form_end');
        echo "

  ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), 'form_start', ["attr" => ["class" => "form", "id" => "form-delivery-slips-options"]]);
        echo "
    <div class=\"row justify-content-center\">
      ";
        // line 73
        $this->displayBlock('admin_form_order_delivery_slip_options', $context, $blocks);
        // line 113
        echo "    </div>
  ";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_admin_form_order_delivery_slip_pdf($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_form_order_delivery_slip_pdf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_form_order_delivery_slip_pdf"));

        // line 36
        echo "        <div class=\"col-xl-12\">
          <div class=\"card\" id=\"delivery_pdf_fieldset\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">print</i> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Print PDF", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
              <div class=\"card-text\">
                <div class=\"form-group row\">
                  ";
        // line 44
        echo $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pdfForm"] ?? $this->getContext($context, "pdfForm")), "date_from", []), 'errors');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pdfForm"] ?? $this->getContext($context, "pdfForm")), "date_from", []), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 51
        echo $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", [], "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pdfForm"] ?? $this->getContext($context, "pdfForm")), "date_to", []), 'errors');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pdfForm"] ?? $this->getContext($context, "pdfForm")), "date_to", []), 'widget');
        echo "
                  </div>
                </div>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pdfForm"] ?? $this->getContext($context, "pdfForm")), 'rest');
        echo "
              </div>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\" id=\"generate-delivery-slip-by-date\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate PDF", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_admin_form_order_delivery_slip_options($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_form_order_delivery_slip_options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_form_order_delivery_slip_options"));

        // line 74
        echo "        <div class=\"col-xl-12\">
          <div class=\"card\" id=\"delivery_options_fieldset\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">settings</i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery slip options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
              <div class=\"card-text\">
                <div class=\"form-group row\">
                  ";
        // line 82
        echo $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery prefix", [], "Admin.Orderscustomers.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prefix used for delivery slips.", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), "prefix", []), 'errors');
        echo "
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), "prefix", []), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 89
        echo $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery number", [], "Admin.Orderscustomers.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The next delivery slip will begin with this number and then increase with each additional slip.", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), "number", []), 'errors');
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), "number", []), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 96
        echo $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable product image", [], "Admin.Orderscustomers.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add an image before product name on delivery slip", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), "enable_product_image", []), 'errors');
        echo "
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), "enable_product_image", []), 'widget');
        echo "
                  </div>
                </div>
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["optionsForm"] ?? $this->getContext($context, "optionsForm")), 'rest');
        echo "
              </div>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\" id=\"save-delivery-slip-options-button\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_delivery.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 120,  284 => 118,  275 => 117,  259 => 107,  251 => 102,  245 => 99,  241 => 98,  236 => 96,  229 => 92,  225 => 91,  220 => 89,  213 => 85,  209 => 84,  204 => 82,  196 => 77,  191 => 74,  182 => 73,  166 => 62,  158 => 57,  152 => 54,  148 => 53,  143 => 51,  136 => 47,  132 => 46,  127 => 44,  119 => 39,  114 => 36,  105 => 35,  93 => 114,  90 => 113,  88 => 73,  83 => 71,  78 => 69,  75 => 68,  73 => 35,  69 => 33,  66 => 30,  57 => 29,  46 => 25,  44 => 27,  32 => 25,);
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
{% trans_default_domain \"Admin.Orderscustomers.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block content %}
  {{ form_start(pdfForm, {
    'attr' : {'class': 'form', 'autocomplete': 'off', id: 'form-delivery-slips-print-pdf'},
    'action': path('admin_order_delivery_slip_pdf') })
  }}
    <div class=\"row justify-content-center\">
      {% block admin_form_order_delivery_slip_pdf %}
        <div class=\"col-xl-12\">
          <div class=\"card\" id=\"delivery_pdf_fieldset\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">print</i> {{ 'Print PDF'|trans }}
            </h3>
            <div class=\"card-block row\">
              <div class=\"card-text\">
                <div class=\"form-group row\">
                  {{ ps.label_with_help('From'|trans({}, 'Admin.Global'), ('Format: 2011-12-31 (inclusive).'|trans({}, 'Admin.Orderscustomers.Help'))) }}
                  <div class=\"col-sm\">
                    {{ form_errors(pdfForm.date_from) }}
                    {{ form_widget(pdfForm.date_from) }}
                  </div>
                </div>
                <div class=\"form-group row\">
                  {{ ps.label_with_help('To'|trans({}, 'Admin.Global'), ('Format: 2011-12-31 (inclusive).'|trans({}, 'Admin.Orderscustomers.Help'))) }}
                  <div class=\"col-sm\">
                    {{ form_errors(pdfForm.date_to) }}
                    {{ form_widget(pdfForm.date_to) }}
                  </div>
                </div>
                {{ form_rest(pdfForm) }}
              </div>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\" id=\"generate-delivery-slip-by-date\">{{ 'Generate PDF'|trans }}</button>
              </div>
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {{ form_end(pdfForm) }}

  {{ form_start(optionsForm, {'attr' : {'class': 'form', 'id': 'form-delivery-slips-options'} }) }}
    <div class=\"row justify-content-center\">
      {% block admin_form_order_delivery_slip_options %}
        <div class=\"col-xl-12\">
          <div class=\"card\" id=\"delivery_options_fieldset\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">settings</i> {{ 'Delivery slip options'|trans }}
            </h3>
            <div class=\"card-block row\">
              <div class=\"card-text\">
                <div class=\"form-group row\">
                  {{ ps.label_with_help(('Delivery prefix'|trans), ('Prefix used for delivery slips.'|trans({}, 'Admin.Orderscustomers.Help'))) }}
                  <div class=\"col-sm\">
                    {{ form_errors(optionsForm.prefix) }}
                    {{ form_widget(optionsForm.prefix) }}
                  </div>
                </div>
                <div class=\"form-group row\">
                  {{ ps.label_with_help(('Delivery number'|trans), ('The next delivery slip will begin with this number and then increase with each additional slip.'|trans({}, 'Admin.Orderscustomers.Help'))) }}
                  <div class=\"col-sm\">
                    {{ form_errors(optionsForm.number) }}
                    {{ form_widget(optionsForm.number) }}
                  </div>
                </div>
                <div class=\"form-group row\">
                  {{ ps.label_with_help(('Enable product image'|trans), ('Add an image before product name on delivery slip'|trans({}, 'Admin.Orderscustomers.Help'))) }}
                  <div class=\"col-sm\">
                    {{ form_errors(optionsForm.enable_product_image) }}
                    {{ form_widget(optionsForm.enable_product_image) }}
                  </div>
                </div>
                {{ form_rest(optionsForm) }}
              </div>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\" id=\"save-delivery-slip-options-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
              </div>
            </div>
          </div>
        </div>
      {% endblock %}
    </div>
  {{ form_end(optionsForm) }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/order_delivery.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Delivery/slip.html.twig");
    }
}
