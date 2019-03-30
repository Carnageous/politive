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

/* dashboard.html.twig */
class __TwigTemplate_980df6267d9c372f7843b5fb9a2ad482bd69f53adfdb6500d67dc4ca8c2f4ab7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboard.html.twig", 1);
        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'widgets' => [$this, 'block_widgets'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        // line 5
        $context["clear_cache_url"] = (((($context["base_url_relative"] ?? null) . "/cache.json/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . twig_escape_filter($this->env, "clearCache", "html_attr"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = [])
    {
        // line 8
        echo "    <div class=\"button-bar\">
        ";
        // line 9
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super", 2 => "admin.cache"])) {
            // line 10
            echo "            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ($context["clear_cache_url"] ?? null), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            echo "</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "all"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "assets-only"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "images-only"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "cache-only"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"tmp-only\" data-clear-cache=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "tmp-only"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>
        ";
        }
        // line 24
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
            // line 25
            echo "            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
            echo "</button>
        ";
        }
        // line 27
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD"), "html", null, true);
        echo "</h1>
";
    }

    // line 31
    public function block_widgets($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "dashboard", [])) {
            // line 33
            echo "    <div class=\"dashboard-notifications-container\"></div>
    ";
        }
        // line 35
        echo "
    <div id=\"admin-dashboard\">
        ";
        // line 37
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_top", [])) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_top", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 39
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), $this->getAttribute($context["widget"], "template", [])) == true)) {
                    // line 40
                    echo "                    <div class=\"dashboard-item-flex\">
                        ";
                    // line 41
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", [])) . ".html.twig"), "dashboard.html.twig", 41)->display($context);
                    // line 42
                    echo "                    </div>
                ";
                }
                // line 44
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        // line 46
        echo "    </div>
";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        // line 50
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_main", [])) {
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_main", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 52
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), $this->getAttribute($context["widget"], "template", [])) == true)) {
                    // line 53
                    echo "                ";
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", [])) . ".html.twig"), "dashboard.html.twig", 53)->display($context);
                    // line 54
                    echo "            ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 59
    public function block_content_bottom($context, array $blocks = [])
    {
        // line 60
        echo "    <div id=\"admin-dashboard\">";
        // line 61
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_bottom", [])) {
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_bottom", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 63
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), $this->getAttribute($context["widget"], "template", [])) == true)) {
                    // line 64
                    echo "                    ";
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", [])) . ".html.twig"), "dashboard.html.twig", 64)->display($context);
                    // line 65
                    echo "                ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 68
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 68,  261 => 65,  258 => 64,  256 => 63,  239 => 62,  237 => 61,  235 => 60,  232 => 59,  214 => 54,  211 => 53,  209 => 52,  192 => 51,  190 => 50,  187 => 49,  182 => 46,  179 => 45,  165 => 44,  161 => 42,  159 => 41,  156 => 40,  153 => 39,  135 => 38,  133 => 37,  129 => 35,  125 => 33,  122 => 32,  119 => 31,  113 => 28,  110 => 27,  104 => 25,  101 => 24,  92 => 20,  86 => 19,  80 => 18,  74 => 17,  68 => 16,  58 => 11,  55 => 10,  53 => 9,  50 => 8,  47 => 7,  43 => 1,  41 => 5,  39 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set title = \"PLUGIN_ADMIN.DASHBOARD\"|tu %}

{% set clear_cache_url = base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache'|e('html_attr') %}

{% block titlebar %}
    <div class=\"button-bar\">
        {% if authorize(['admin.maintenance', 'admin.super', 'admin.cache']) %}
            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url, 'admin-form', 'admin-nonce') }}\" class=\"button\"><i class=\"fa fa-trash\"></i> {{ \"PLUGIN_ADMIN.CLEAR_CACHE\"|tu }}</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"{{  uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'all', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'assets-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'images-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'cache-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"tmp-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'tmp-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY\"|tu }}</a></li>
                </ul>
            </div>
        {% endif %}
        {% if authorize(['admin.maintenance', 'admin.super']) %}
            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> {{ \"PLUGIN_ADMIN.CHECK_FOR_UPDATES\"|tu }}</button>
        {% endif %}
    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> {{ \"PLUGIN_ADMIN.DASHBOARD\"|tu }}</h1>
{% endblock %}

{% block widgets %}
    {% if config.plugins.admin.notifications.dashboard %}
    <div class=\"dashboard-notifications-container\"></div>
    {% endif %}

    <div id=\"admin-dashboard\">
        {% if grav.twig.plugins_hooked_dashboard_widgets_top %}
            {% for widget in grav.twig.plugins_hooked_dashboard_widgets_top %}
                {% if attribute(config.plugins.admin.widgets, widget.template) == true %}
                    <div class=\"dashboard-item-flex\">
                        {% include 'partials/' ~ widget.template ~ '.html.twig' %}
                    </div>
                {% endif %}
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}

{% block content %}
    {%- if grav.twig.plugins_hooked_dashboard_widgets_main -%}
        {%- for widget in grav.twig.plugins_hooked_dashboard_widgets_main -%}
            {%- if attribute(config.plugins.admin.widgets, widget.template) == true %}
                {% include 'partials/' ~ widget.template ~ '.html.twig' %}
            {% endif -%}
        {%- endfor -%}
    {%- endif -%}
{% endblock %}

{% block content_bottom %}
    <div id=\"admin-dashboard\">
        {%- if grav.twig.plugins_hooked_dashboard_widgets_bottom -%}
            {%- for widget in grav.twig.plugins_hooked_dashboard_widgets_bottom -%}
                {%- if attribute(config.plugins.admin.widgets, widget.template) == true %}
                    {% include 'partials/' ~ widget.template ~ '.html.twig' %}
                {% endif -%}
            {%- endfor -%}
        {%- endif -%}
    </div>
{% endblock %}
", "dashboard.html.twig", "/home/janis/Dokumente/Projekte/Politive/user/plugins/admin/themes/grav/templates/dashboard.html.twig");
    }
}
