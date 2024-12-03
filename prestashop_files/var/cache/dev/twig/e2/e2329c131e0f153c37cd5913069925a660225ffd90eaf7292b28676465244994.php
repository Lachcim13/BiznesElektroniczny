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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig */
class __TwigTemplate_9bb5b50d296dbb3e35a244953391f857f4e6418c9a9723385db0ce691613a5d5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'employee_addons_connect' => [$this, 'block_employee_addons_connect'],
            'employee_form' => [$this, 'block_employee_form'],
            'employee_form_rest' => [$this, 'block_employee_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 26)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('employee_addons_connect', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('employee_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_employee_addons_connect($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_addons_connect"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_addons_connect"));

        // line 30
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 30)->display(twig_array_merge($context, ["level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage"))]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_employee_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_form"));

        // line 34
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Employees", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), 'errors');
        echo "

        ";
        // line 43
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "firstname", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name", [], "Admin.Global")]);
        // line 45
        echo "

        ";
        // line 47
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "lastname", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name", [], "Admin.Global")]);
        // line 49
        echo "

        ";
        // line 51
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "avatarUrl", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Avatar", [], "Admin.Global")]);
        // line 53
        echo "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["avatarUrl"] ?? $this->getContext($context, "avatarUrl")), "html", null, true);
        echo "\" alt=\"\">
          </div>
        </div>

        ";
        // line 62
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "has_enabled_gravatar", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable gravatar", [], "Admin.Global")]);
        // line 64
        echo "

        ";
        // line 66
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "email", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email address", [], "Admin.Global")]);
        // line 68
        echo "

        ";
        // line 70
        $context["passwordHelpMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password should be at least %num% characters long.", ["%num%" => 8], "Admin.Advparameters.Help");
        // line 71
        echo "
        ";
        // line 72
        if (($context["isRestrictedAccess"] ?? $this->getContext($context, "isRestrictedAccess"))) {
            // line 73
            echo "            ";
            $context["oldPasswordVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "old_password", []), "vars", []), ((array_key_exists("old_password", $context)) ? (_twig_default_filter(($context["old_password"] ?? $this->getContext($context, "old_password")), [])) : ([])));
            // line 74
            echo "            ";
            $context["newPasswordFirstVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []), (($this->getAttribute(($context["new_password"] ?? null), "first_options", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["new_password"] ?? null), "first_options", []), [])) : ([])));
            // line 75
            echo "            ";
            $context["newPasswordSecondVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "new_password", []), "children", []), "second", []), "vars", []), (($this->getAttribute(($context["new_password"] ?? null), "second_options", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["new_password"] ?? null), "second_options", []), [])) : ([])));
            // line 76
            echo "
            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "Admin.Global"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 83
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "change_password_button", []), 'widget', ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password...", [], "messages"), "attr" => ["class" => "btn-outline-secondary js-change-password"]]);
            // line 88
            echo "

                <div class=\"card card-body js-change-password-block d-none\">
                  ";
            // line 92
            echo "                  ";
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "old_password", []), ($context["oldPasswordVars"] ?? $this->getContext($context, "oldPasswordVars")), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current password", [], "messages"), "required" => true]);
            // line 95
            echo "

                  ";
            // line 98
            echo "                  <div class=\"form-group row\">
                      ";
            // line 99
            echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New password", [], "messages"), ($context["passwordHelpMessage"] ?? $this->getContext($context, "passwordHelpMessage")), "", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []), "id", []), true);
            echo "
                    <div class=\"col-sm\">
                      ";
            // line 101
            echo $context["ps"]->getform_widget_with_error($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "new_password", []), "children", []), "first", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []));
            echo "
                    </div>
                  </div>

                  ";
            // line 106
            echo "                  ";
            // line 107
            echo "                  ";
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "new_password", []), "children", []), "second", []), ($context["newPasswordSecondVars"] ?? $this->getContext($context, "newPasswordSecondVars")), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm password", [], "messages"), "help" => "", "required" => true]);
            // line 111
            echo "

                  <div class=\"form-group row\">
                    <label class=\"form-control-label\"></label>
                    <div class=\"col-sm\">
                      ";
            // line 116
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "generated_password", []), 'widget');
            echo "
                    </div>
                    <div class=\"col-sm\">
                      ";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "generate_password_button", []), 'widget', ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate password", [], "messages"), "attr" => ["class" => "btn-outline-secondary"]]);
            // line 124
            echo "
                    </div>
                  </div>

                  ";
            // line 128
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "change_password", []), "cancel_button", []), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "attr" => ["class" => "btn-outline-secondary js-change-password-cancel"]]);
            // line 133
            echo "

                  ";
            // line 136
            echo "                  <div class=\"js-password-strength-feedback d-none\">
                    <span class=\"strength-low\">";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-medium\">";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Okay", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-high\">";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Good", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-extreme\">";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fabulous", [], "messages"), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
            </div>
        ";
        } else {
            // line 146
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "password", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "Admin.Global"), "help" =>             // line 148
($context["passwordHelpMessage"] ?? $this->getContext($context, "passwordHelpMessage"))]);
            // line 149
            echo "
        ";
        }
        // line 151
        echo "
        ";
        // line 152
        if ((($context["isRestrictedAccess"] ?? $this->getContext($context, "isRestrictedAccess")) && ($context["showAddonsConnectButton"] ?? $this->getContext($context, "showAddonsConnectButton")))) {
            // line 153
            echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              PrestaShop Addons
            </label>
            <div class=\"col-sm\">
              ";
            // line 158
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "prestashop_addons", []), "vars", []), "is_addons_connected", [])) {
                // line 159
                echo "                <p>
                  <i class=\"material-icons\">account_circle</i>
                  ";
                // line 161
                echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are currently connected as %username%", [], "Admin.Advparameters.Feature"), ["%username%" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 163
($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "prestashop_addons", []), "vars", []), "addons_username", [])]), "html", null, true);
                // line 164
                echo "
                </p>
              ";
            }
            // line 167
            echo "
              <div>
                ";
            // line 169
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "prestashop_addons", []), "vars", []), "is_addons_connected", [])) {
                // line 170
                echo "                  ";
                list($context["label"], $context["target"]) =                 [$this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out from PrestaShop Addons", [], "Admin.Advparameters.Feature"), "#module-modal-addons-logout"];
                // line 174
                echo "                ";
            } else {
                // line 175
                echo "                  ";
                list($context["label"], $context["target"]) =                 [$this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in", [], "Admin.Advparameters.Feature"), "#module-modal-addons-connect"];
                // line 179
                echo "                ";
            }
            // line 180
            echo "
                ";
            // line 181
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "prestashop_addons", []), 'widget', ["attr" => ["class" => "btn-outline-secondary", "data-toggle" => "modal", "data-target" =>             // line 185
($context["target"] ?? $this->getContext($context, "target"))], "label" =>             // line 187
($context["label"] ?? $this->getContext($context, "label"))]);
            // line 188
            echo "
              </div>
            </div>
          </div>
        ";
        }
        // line 193
        echo "
        ";
        // line 194
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "language", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global")]);
        // line 196
        echo "

        ";
        // line 198
        if ( !($context["isRestrictedAccess"] ?? $this->getContext($context, "isRestrictedAccess"))) {
            // line 199
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "active", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow or disallow this employee to log in to the Admin panel.", [], "Admin.Advparameters.Help")]);
            // line 202
            echo "

          ";
            // line 204
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "profile", []), ["attr" => ["data-admin-profile" =>             // line 206
($context["superAdminProfileId"] ?? $this->getContext($context, "superAdminProfileId")), "data-get-tabs-url" =>             // line 207
($context["getTabsUrl"] ?? $this->getContext($context, "getTabsUrl"))]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permission profile", [], "Admin.Advparameters.Feature")]);
            // line 211
            echo "

          ";
            // line 213
            if ($this->getAttribute(($context["employeeForm"] ?? null), "shop_association", [], "any", true, true)) {
                // line 214
                echo "            ";
                echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select the shops the employee is allowed to access.", [], "Admin.Advparameters.Help")]);
                // line 217
                echo "
          ";
            }
            // line 219
            echo "        ";
        }
        // line 220
        echo "
        ";
        // line 221
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), "default_page", []), ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default page", [], "Admin.Advparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This page will be displayed just after login.", [], "Admin.Advparameters.Help")]);
        // line 224
        echo "

        ";
        // line 226
        $this->displayBlock('employee_form_rest', $context, $blocks);
        // line 229
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <a href=\"";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_employees_index");
        echo "\" class=\"btn btn-outline-secondary\" id=\"cancel-link\">
        ";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary float-right\" id=\"save-button\">
        ";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
  ";
        // line 240
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 226
    public function block_employee_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_form_rest"));

        // line 227
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeForm"] ?? $this->getContext($context, "employeeForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 227,  412 => 226,  400 => 240,  393 => 236,  387 => 233,  383 => 232,  378 => 229,  376 => 226,  372 => 224,  370 => 221,  367 => 220,  364 => 219,  360 => 217,  357 => 214,  355 => 213,  351 => 211,  349 => 207,  348 => 206,  347 => 204,  343 => 202,  340 => 199,  338 => 198,  334 => 196,  332 => 194,  329 => 193,  322 => 188,  320 => 187,  319 => 185,  318 => 181,  315 => 180,  312 => 179,  309 => 175,  306 => 174,  303 => 170,  301 => 169,  297 => 167,  292 => 164,  290 => 163,  289 => 161,  285 => 159,  283 => 158,  276 => 153,  274 => 152,  271 => 151,  267 => 149,  265 => 148,  263 => 146,  254 => 140,  250 => 139,  246 => 138,  242 => 137,  239 => 136,  235 => 133,  233 => 128,  227 => 124,  225 => 119,  219 => 116,  212 => 111,  209 => 107,  207 => 106,  200 => 101,  195 => 99,  192 => 98,  188 => 95,  185 => 92,  180 => 88,  177 => 83,  171 => 79,  166 => 76,  163 => 75,  160 => 74,  157 => 73,  155 => 72,  152 => 71,  150 => 70,  146 => 68,  144 => 66,  140 => 64,  138 => 62,  131 => 58,  124 => 53,  122 => 51,  118 => 49,  116 => 47,  112 => 45,  110 => 43,  105 => 41,  98 => 37,  91 => 34,  82 => 33,  71 => 30,  62 => 29,  52 => 33,  49 => 32,  47 => 29,  44 => 28,  42 => 26,  39 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}
{% trans_default_domain 'Admin.Advparameters.Feature' %}

{% block employee_addons_connect %}
  {% include '@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
{% endblock %}

{% block employee_form %}
  {{ form_start(employeeForm) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      {{ 'Employees'|trans }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        {{ form_errors(employeeForm) }}

        {{ ps.form_group_row(employeeForm.firstname, {}, {
          'label': 'First name'|trans({}, 'Admin.Global')
        }) }}

        {{ ps.form_group_row(employeeForm.lastname, {}, {
          'label': 'Last name'|trans({}, 'Admin.Global')
        }) }}

        {{ ps.form_group_row(employeeForm.avatarUrl, {}, {
          'label': 'Avatar'|trans({}, 'Admin.Global')
        }) }}

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            <img class=\"img-thumbnail clickable-avatar\" src=\"{{ avatarUrl }}\" alt=\"\">
          </div>
        </div>

        {{ ps.form_group_row(employeeForm.has_enabled_gravatar, {}, {
          'label': 'Enable gravatar'|trans({}, 'Admin.Global')
        }) }}

        {{ ps.form_group_row(employeeForm.email, {}, {
          'label': 'Email address'|trans({}, 'Admin.Global')
        }) }}

        {% set passwordHelpMessage = 'Password should be at least %num% characters long.'|trans({ '%num%': 8 }, 'Admin.Advparameters.Help') %}

        {% if isRestrictedAccess %}
            {% set oldPasswordVars = employeeForm.change_password.old_password.vars|merge(old_password|default({})) %}
            {% set newPasswordFirstVars = employeeForm.change_password.new_password.children.first.vars|merge(new_password.first_options|default({})) %}
            {% set newPasswordSecondVars = employeeForm.change_password.new_password.children.second.vars|merge(new_password.second_options|default({})) %}

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                {{ 'Password'|trans({}, 'Admin.Global') }}
              </label>
              <div class=\"col-sm\">
                {# \"Change password\" button #}
                {{ form_widget(employeeForm.change_password.change_password_button, {
                  label: 'Change password...'|trans({}, 'messages'),
                  attr: {
                    class: 'btn-outline-secondary js-change-password',
                  }
                }) }}

                <div class=\"card card-body js-change-password-block d-none\">
                  {# Current password input #}
                  {{ ps.form_group_row(employeeForm.change_password.old_password, oldPasswordVars, {
                    label: 'Current password'|trans({}, 'messages'),
                    required: true,
                  }) }}

                  {# New password first input #}
                  <div class=\"form-group row\">
                      {{ ps.label_with_help('New password'|trans({}, 'messages'), passwordHelpMessage, '', employeeForm.change_password.new_password.children.first.vars.id, true) }}
                    <div class=\"col-sm\">
                      {{ ps.form_widget_with_error(employeeForm.change_password.new_password.children.first, employeeForm.change_password.new_password.children.first.vars) }}
                    </div>
                  </div>

                  {# New password second input (confirmation) #}
                  {# Empty help text needed to render the text container for validation feedback messages #}
                  {{ ps.form_group_row(employeeForm.change_password.new_password.children.second, newPasswordSecondVars, {
                    label: 'Confirm password'|trans({}, 'messages'),
                    help: '',
                    required: true,
                  }) }}

                  <div class=\"form-group row\">
                    <label class=\"form-control-label\"></label>
                    <div class=\"col-sm\">
                      {{ form_widget(employeeForm.change_password.generated_password) }}
                    </div>
                    <div class=\"col-sm\">
                      {{ form_widget(employeeForm.change_password.generate_password_button, {
                        label: 'Generate password'|trans({}, 'messages'),
                        attr: {
                          class: 'btn-outline-secondary',
                        }
                      }) }}
                    </div>
                  </div>

                  {{ ps.form_group_row(employeeForm.change_password.cancel_button, {
                    label: 'Cancel'|trans({}, 'Admin.Actions'),
                    attr: {
                      class: 'btn-outline-secondary js-change-password-cancel',
                    }
                  }) }}

                  {# Password strength feedback messages - used in JS #}
                  <div class=\"js-password-strength-feedback d-none\">
                    <span class=\"strength-low\">{{ 'Invalid'|trans({}, 'messages') }}</span>
                    <span class=\"strength-medium\">{{ 'Okay'|trans({}, 'messages') }}</span>
                    <span class=\"strength-high\">{{ 'Good'|trans({}, 'messages') }}</span>
                    <span class=\"strength-extreme\">{{ 'Fabulous'|trans({}, 'messages') }}</span>
                  </div>
                </div>
              </div>
            </div>
        {% else %}
          {{ ps.form_group_row(employeeForm.password, {}, {
            'label': 'Password'|trans({}, 'Admin.Global'),
            'help': passwordHelpMessage,
          }) }}
        {% endif %}

        {% if isRestrictedAccess and showAddonsConnectButton %}
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              PrestaShop Addons
            </label>
            <div class=\"col-sm\">
              {% if employeeForm.prestashop_addons.vars.is_addons_connected %}
                <p>
                  <i class=\"material-icons\">account_circle</i>
                  {{ 'You are currently connected as %username%'
                        |trans({}, 'Admin.Advparameters.Feature')
                        |replace({ '%username%': employeeForm.prestashop_addons.vars.addons_username })
                  }}
                </p>
              {% endif %}

              <div>
                {% if employeeForm.prestashop_addons.vars.is_addons_connected %}
                  {% set label, target =
                    'Sign out from PrestaShop Addons'|trans({}, 'Admin.Advparameters.Feature'),
                    '#module-modal-addons-logout'
                  %}
                {% else %}
                  {% set label, target =
                    'Sign in'|trans({}, 'Admin.Advparameters.Feature'),
                    '#module-modal-addons-connect'
                  %}
                {% endif %}

                {{ form_widget(employeeForm.prestashop_addons, {
                  attr: {
                    'class': 'btn-outline-secondary',
                    'data-toggle': 'modal',
                    'data-target': target,
                  },
                  label: label,
                }) }}
              </div>
            </div>
          </div>
        {% endif %}

        {{ ps.form_group_row(employeeForm.language, {}, {
          'label': 'Language'|trans({}, 'Admin.Global')
        }) }}

        {% if not isRestrictedAccess %}
          {{ ps.form_group_row(employeeForm.active, {}, {
            'label': 'Active'|trans({}, 'Admin.Global'),
            'help': 'Allow or disallow this employee to log in to the Admin panel.'|trans({}, 'Admin.Advparameters.Help')
          }) }}

          {{ ps.form_group_row(employeeForm.profile, {
            'attr': {
              'data-admin-profile': superAdminProfileId,
              'data-get-tabs-url': getTabsUrl,
            }
          }, {
            'label': 'Permission profile'|trans({}, 'Admin.Advparameters.Feature')
          }) }}

          {% if employeeForm.shop_association is defined %}
            {{ ps.form_group_row(employeeForm.shop_association, {}, {
              'label': 'Shop association'|trans({}, 'Admin.Global'),
              'help': 'Select the shops the employee is allowed to access.'|trans({}, 'Admin.Advparameters.Help')
            }) }}
          {% endif %}
        {% endif %}

        {{ ps.form_group_row(employeeForm.default_page, {'attr': {'data-minimumResultsForSearch': '7', 'data-toggle': 'select2'}}, {
          'label': 'Default page'|trans,
          'help': 'This page will be displayed just after login.'|trans({}, 'Admin.Advparameters.Help')
        }) }}

        {% block employee_form_rest %}
          {{ form_rest(employeeForm) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <a href=\"{{ path('admin_employees_index') }}\" class=\"btn btn-outline-secondary\" id=\"cancel-link\">
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
      <button class=\"btn btn-primary float-right\" id=\"save-button\">
        {{ 'Save'|trans({}, 'Admin.Actions') }}
      </button>
    </div>
  </div>
  {{ form_end(employeeForm) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig");
    }
}
