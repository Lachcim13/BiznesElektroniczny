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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig */
class __TwigTemplate_7678db7f197d537df076fe61d7a116d722f787ae7c6c90d93bff6bf0d44f22d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'employee_options_form' => [$this, 'block_employee_options_form'],
            'employee_options_form_rest' => [$this, 'block_employee_options_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('employee_options_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_employee_options_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_options_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_options_form"));

        // line 27
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_employees_save_options")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Employee options", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label for=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), "password_change_time", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control-label\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password regeneration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </label>

          <div class=\"col-sm\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), "password_change_time", []), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), "password_change_time", []), 'widget');
        echo "
            <small class=\"form-text\">
              ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Security: Minimum time to wait between two password changes.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </small>

            ";
        // line 47
        if ( !($context["canOptionsBeChanged"] ?? $this->getContext($context, "canOptionsBeChanged"))) {
            // line 48
            echo "            <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
              </p>
            </div>
            ";
        }
        // line 54
        echo "          </div>
        </div>

        <div class=\"form-group row\">
          <label for=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), "allow_employee_specific_language", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control-label\">
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Memorize the language used in Admin panel forms", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </label>

          <div class=\"col-sm\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), "allow_employee_specific_language", []), 'errors');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), "allow_employee_specific_language", []), 'widget');
        echo "
            <small class=\"form-text\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow employees to select a specific language for the Admin panel form.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </small>

            ";
        // line 69
        if ( !($context["canOptionsBeChanged"] ?? $this->getContext($context, "canOptionsBeChanged"))) {
            // line 70
            echo "            <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
              </p>
            </div>
            ";
        }
        // line 76
        echo "          </div>
        </div>

        ";
        // line 79
        $this->displayBlock('employee_options_form_rest', $context, $blocks);
        // line 82
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary pull-right\"
                ";
        // line 87
        if ( !($context["canOptionsBeChanged"] ?? $this->getContext($context, "canOptionsBeChanged"))) {
            echo "disabled";
        }
        // line 88
        echo "        >
          ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
  ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_employee_options_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_options_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_options_form_rest"));

        // line 80
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeOptionsForm"] ?? $this->getContext($context, "employeeOptionsForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 80,  200 => 79,  188 => 94,  180 => 89,  177 => 88,  173 => 87,  166 => 82,  164 => 79,  159 => 76,  152 => 72,  148 => 70,  146 => 69,  140 => 66,  135 => 64,  131 => 63,  124 => 59,  120 => 58,  114 => 54,  107 => 50,  103 => 48,  101 => 47,  95 => 44,  90 => 42,  86 => 41,  79 => 37,  75 => 36,  67 => 31,  59 => 27,  41 => 26,  38 => 25,);
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

{% block employee_options_form %}
  {{ form_start(employeeOptionsForm, {'action': path('admin_employees_save_options') }) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      {{ 'Employee options'|trans({}, 'Admin.Advparameters.Feature') }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label for=\"{{ employeeOptionsForm.password_change_time.vars.id }}\" class=\"form-control-label\">
            {{ 'Password regeneration'|trans({}, 'Admin.Advparameters.Feature') }}
          </label>

          <div class=\"col-sm\">
            {{ form_errors(employeeOptionsForm.password_change_time) }}
            {{ form_widget(employeeOptionsForm.password_change_time) }}
            <small class=\"form-text\">
              {{ 'Security: Minimum time to wait between two password changes.'|trans({}, 'Admin.Advparameters.Feature') }}
            </small>

            {% if not canOptionsBeChanged %}
            <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
              <p class=\"alert-text\">
                {{ 'You can\\'t change the value of this configuration field in the context of this shop.'|trans({}, 'Admin.Notifications.Warning') }}
              </p>
            </div>
            {% endif %}
          </div>
        </div>

        <div class=\"form-group row\">
          <label for=\"{{ employeeOptionsForm.allow_employee_specific_language.vars.id }}\" class=\"form-control-label\">
            {{ 'Memorize the language used in Admin panel forms'|trans({}, 'Admin.Advparameters.Feature') }}
          </label>

          <div class=\"col-sm\">
            {{ form_errors(employeeOptionsForm.allow_employee_specific_language) }}
            {{ form_widget(employeeOptionsForm.allow_employee_specific_language) }}
            <small class=\"form-text\">
              {{ 'Allow employees to select a specific language for the Admin panel form.'|trans({}, 'Admin.Advparameters.Feature') }}
            </small>

            {% if not canOptionsBeChanged %}
            <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
              <p class=\"alert-text\">
                {{ 'You can\\'t change the value of this configuration field in the context of this shop.'|trans({}, 'Admin.Notifications.Warning') }}
              </p>
            </div>
            {% endif %}
          </div>
        </div>

        {% block employee_options_form_rest %}
          {{ form_rest(employeeOptionsForm) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary pull-right\"
                {% if not canOptionsBeChanged %}disabled{% endif %}
        >
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  </div>
  {{ form_end(employeeOptionsForm) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig");
    }
}
