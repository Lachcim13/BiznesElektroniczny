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

/* @PrestaShop/Admin/Improve/International/Geolocation/index.html.twig */
class __TwigTemplate_9f2083428566d873cfece755863b5bc7d42d0324866bcad73e819ef699cd5c3f extends \Twig\Template
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
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 26);
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
        if ( !($context["geolocationDatabaseAvailable"] ?? $this->getContext($context, "geolocationDatabaseAvailable"))) {
            // line 31
            echo "    <div class=\"row\">
      <div class=\"col\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <span class=\"alert-text\">
            ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Since December 30, 2019, you need to register for a [1]MaxMind[/1] account to get a license key to be able to download the geolocation data. Once downloaded, extract the data using Winrar or Gzip into the /app/Resources/geoip/ directory.", ["[1]" => "<a href=\"https://dev.maxmind.com/geoip/geoip2/geolite2\" target=\"_blank\">", "[/1]" => "<a/>"], "Admin.Notifications.Warning");
            echo "
          </span>
        </div>
      </div>
    </div>
  ";
        }
        // line 41
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-12\">
      ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationByIpAddressForm"] ?? $this->getContext($context, "geolocationByIpAddressForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_geolocation_by_ip_address_save")]);
        echo "
        ";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 45)->display($context);
        // line 46
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationByIpAddressForm"] ?? $this->getContext($context, "geolocationByIpAddressForm")), 'form_end');
        echo "
    </div>

    <div class=\"col-xl-12\">
      ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationOptionsForm"] ?? $this->getContext($context, "geolocationOptionsForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_geolocation_options_save")]);
        echo "
        ";
        // line 51
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 51)->display($context);
        // line 52
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationOptionsForm"] ?? $this->getContext($context, "geolocationOptionsForm")), 'form_end');
        echo "
    </div>

    <div class=\"col-xl-12\">
      ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationIpAddressWhitelistForm"] ?? $this->getContext($context, "geolocationIpAddressWhitelistForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_geolocation_whitelist_save")]);
        echo "
        ";
        // line 57
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 57)->display($context);
        // line 58
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationIpAddressWhitelistForm"] ?? $this->getContext($context, "geolocationIpAddressWhitelistForm")), 'form_end');
        echo "
    </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/geolocation.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  143 => 65,  134 => 64,  118 => 58,  116 => 57,  112 => 56,  104 => 52,  102 => 51,  98 => 50,  90 => 46,  88 => 45,  84 => 44,  79 => 41,  70 => 35,  64 => 31,  61 => 30,  52 => 29,  30 => 26,);
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
{% trans_default_domain 'Admin.International.Feature' %}

{% block content %}
  {% if not geolocationDatabaseAvailable %}
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <span class=\"alert-text\">
            {{ 'Since December 30, 2019, you need to register for a [1]MaxMind[/1] account to get a license key to be able to download the geolocation data. Once downloaded, extract the data using Winrar or Gzip into the /app/Resources/geoip/ directory.'|trans({'[1]': '<a href=\"https://dev.maxmind.com/geoip/geoip2/geolite2\" target=\"_blank\">', '[/1]': '<a/>'}, 'Admin.Notifications.Warning')|raw }}
          </span>
        </div>
      </div>
    </div>
  {% endif %}

  <div class=\"row justify-content-center\">
    <div class=\"col-xl-12\">
      {{ form_start(geolocationByIpAddressForm, {'action': path('admin_geolocation_by_ip_address_save')}) }}
        {% include '@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig' %}
      {{ form_end(geolocationByIpAddressForm) }}
    </div>

    <div class=\"col-xl-12\">
      {{ form_start(geolocationOptionsForm, {'action': path('admin_geolocation_options_save')}) }}
        {% include '@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig' %}
      {{ form_end(geolocationOptionsForm) }}
    </div>

    <div class=\"col-xl-12\">
      {{ form_start(geolocationIpAddressWhitelistForm, {'action': path('admin_geolocation_whitelist_save')}) }}
        {% include '@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig' %}
      {{ form_end(geolocationIpAddressWhitelistForm) }}
    </div>
  </div>

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/geolocation.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Geolocation/index.html.twig");
    }
}
