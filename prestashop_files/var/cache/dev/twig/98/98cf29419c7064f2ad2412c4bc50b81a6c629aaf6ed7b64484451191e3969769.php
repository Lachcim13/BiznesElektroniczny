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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig */
class __TwigTemplate_0226031c948b8c5cd4834e408067509ca101e8c52764eb34109ba8fc98134d58 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'import_form' => [$this, 'block_import_form'],
            'import_file_history_block' => [$this, 'block_import_file_history_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig"));

        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["importForm"] ?? $this->getContext($context, "importForm")), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('import_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_import_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_form"));

        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? $this->getContext($context, "importForm")), 'form_start', ["attr" => ["data-file-upload-url" => ($context["importFileUploadUrl"] ?? $this->getContext($context, "importFileUploadUrl")), "data-delete-confirm-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to delete this entity:", [], "Admin.Advparameters.Notification"), "class" => "js-import-form"]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can read information on import at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
          ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </a>
      </p>
      <p class=\"alert-text\">
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more about the CSV format at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
          ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </a>
      </p>
    </div>

    <hr>

    <div class=\"form-group\">
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "entity", []), 'row');
        echo "
    </div>

    <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
      <ul>
        <li>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that the Category import does not support having two categories with the same name.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
        <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that you can have several products with the same reference.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      </ul>
    </div>

    <hr>

    <div class=\"form-group hidden-xs-up\">
      ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "csv", []), 'errors');
        echo "
      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "csv", []), 'widget', ["attr" => ["class" => "js-import-file-input"]]);
        echo "
    </div>

    <div class=\"form-group js-file-upload-form-group\">
      ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "file", []), 'label');
        echo "
      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "file", []), 'errors');
        echo "
          ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "file", []), 'widget', ["attr" => ["class" => "js-import-file", "data-max-file-upload-size" => ($context["maxFileUploadSize"] ?? $this->getContext($context, "maxFileUploadSize"))]]);
        echo "
        </div>
        <div class=\"col\">
          <span>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
          <button type=\"button\"
                  class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                  ";
        // line 82
        if (twig_test_empty(($context["importFileNames"] ?? $this->getContext($context, "importFileNames")))) {
            echo "disabled";
        }
        // line 83
        echo "          >
            <span class=\"badge badge-primary js-files-history-number\">";
        // line 84
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["importFileNames"] ?? $this->getContext($context, "importFileNames"))), "html", null, true);
        echo "</span>
            ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose from history / FTP", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
      <small class=\"form-text\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      <small class=\"form-text\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only UTF-8 and ISO 8859-1 encodings are allowed", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      <small class=\"form-text\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can also upload your file via FTP to the following directory: %s .", ["%s" => ($context["importDirectory"] ?? $this->getContext($context, "importDirectory"))], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
    </div>

    <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
      <p class=\"alert-text\">
        <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
      </p>
    </div>

    <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
      <button type=\"button\"
              class=\"close btn btn-outline-secondary js-change-import-file-btn\"
              aria-label=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", [], "Admin.Actions"), "html", null, true);
        echo "\"
      >
        <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
      </button>
      <p class=\"alert-text js-import-file\"></p>
    </div>

    ";
        // line 110
        $this->displayBlock('import_file_history_block', $context, $blocks);
        // line 113
        echo "
    <hr>
    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "iso_lang", []), 'row');
        echo "
    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "separator", []), 'row');
        echo "
    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "multiple_value_separator", []), 'row');
        echo "
    <hr>
    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "submitImportFile", []), 'label');
        echo "

    ";
        // line 122
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "submitImportFile", []), "setRendered", []);
        // line 123
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importForm"] ?? $this->getContext($context, "importForm")), 'widget');
        echo "
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "submitImportFile", []), "vars", []), "name", []), "html", null, true);
        echo "\">
        ";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["importForm"] ?? $this->getContext($context, "importForm")), "submitImportFile", []), "vars", []), "label", []), "html", null, true);
        echo "
        <i class=\"material-icons\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
";
        // line 134
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? $this->getContext($context, "importForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_import_file_history_block($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_file_history_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_file_history_block"));

        // line 111
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 111)->display($context);
        // line 112
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 112,  287 => 111,  278 => 110,  266 => 134,  257 => 128,  253 => 127,  245 => 123,  242 => 122,  237 => 119,  232 => 117,  228 => 116,  224 => 115,  220 => 113,  218 => 110,  208 => 103,  193 => 91,  189 => 90,  185 => 89,  178 => 85,  174 => 84,  171 => 83,  167 => 82,  161 => 79,  155 => 76,  151 => 75,  145 => 72,  138 => 68,  134 => 67,  124 => 60,  120 => 59,  112 => 54,  101 => 46,  97 => 45,  93 => 44,  86 => 40,  82 => 39,  78 => 38,  70 => 33,  64 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
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

{% trans_default_domain 'Admin.Advparameters.Feature' %}
{% form_theme importForm 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig' %}

{% block import_form %}
{{ form_start(importForm, {'attr': { 'data-file-upload-url': importFileUploadUrl, 'data-delete-confirm-message': ('Are you sure you want to delete this entity:'|trans({}, 'Admin.Advparameters.Notification')), 'class': 'js-import-form' }}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> {{ 'Import'|trans({}, 'Admin.Actions') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'You can read information on import at:'|trans({}, 'Admin.Advparameters.Help') }}
        <a href=\"{{ 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/import'|trans({}, 'Admin.Advparameters.Help') }}\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
          {{ 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/import'|trans({}, 'Admin.Advparameters.Help') }}
        </a>
      </p>
      <p class=\"alert-text\">
        {{ 'Read more about the CSV format at:'|trans({}, 'Admin.Advparameters.Help') }}
        <a href=\"{{ 'https://en.wikipedia.org/wiki/Comma-separated_values'|trans({}, 'Admin.Advparameters.Help') }}\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
          {{ 'https://en.wikipedia.org/wiki/Comma-separated_values'|trans({}, 'Admin.Advparameters.Help') }}
        </a>
      </p>
    </div>

    <hr>

    <div class=\"form-group\">
      {{ form_row(importForm.entity) }}
    </div>

    <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
      <ul>
        <li>{{ 'Note that the Category import does not support having two categories with the same name.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
        <li>{{ 'Note that you can have several products with the same reference.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      </ul>
    </div>

    <hr>

    <div class=\"form-group hidden-xs-up\">
      {{ form_errors(importForm.csv) }}
      {{ form_widget(importForm.csv, {'attr': {'class': 'js-import-file-input'}}) }}
    </div>

    <div class=\"form-group js-file-upload-form-group\">
      {{ form_label(importForm.file) }}
      <div class=\"row\">
        <div class=\"col\">
          {{ form_errors(importForm.file) }}
          {{ form_widget(importForm.file, {'attr': {'class': 'js-import-file', 'data-max-file-upload-size': maxFileUploadSize }}) }}
        </div>
        <div class=\"col\">
          <span>{{ 'or'|trans({}, 'Admin.Global') }}</span>
          <button type=\"button\"
                  class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                  {% if importFileNames is empty %}disabled{% endif %}
          >
            <span class=\"badge badge-primary js-files-history-number\">{{ importFileNames|length }}</span>
            {{ 'Choose from history / FTP'|trans({}, 'Admin.Advparameters.Feature') }}
          </button>
        </div>
      </div>
      <small class=\"form-text\">{{ 'Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots'|trans({}, 'Admin.Advparameters.Help') }}</small>
      <small class=\"form-text\">{{ 'Only UTF-8 and ISO 8859-1 encodings are allowed'|trans({}, 'Admin.Advparameters.Help') }}</small>
      <small class=\"form-text\">{{ 'You can also upload your file via FTP to the following directory: %s .'|trans({'%s': importDirectory}, 'Admin.Advparameters.Help') }}</small>
    </div>

    <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
      <p class=\"alert-text\">
        <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
      </p>
    </div>

    <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
      <button type=\"button\"
              class=\"close btn btn-outline-secondary js-change-import-file-btn\"
              aria-label=\"{{ 'Change'|trans({}, 'Admin.Actions') }}\"
      >
        <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
      </button>
      <p class=\"alert-text js-import-file\"></p>
    </div>

    {% block import_file_history_block %}
      {% include '@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig' %}
    {% endblock %}

    <hr>
    {{ form_row(importForm.iso_lang) }}
    {{ form_row(importForm.separator) }}
    {{ form_row(importForm.multiple_value_separator) }}
    <hr>
    {{ form_label(importForm.submitImportFile) }}

    {# This is done so importForm.submitImportFile is not rendered, as it's defined via plain HTML instead #}
    {% do importForm.submitImportFile.setRendered %}
    {{ form_widget(importForm) }}
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"{{ importForm.submitImportFile.vars.name }}\">
        {{ importForm.submitImportFile.vars.label }}
        <i class=\"material-icons\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
{{ form_end(importForm) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig");
    }
}
