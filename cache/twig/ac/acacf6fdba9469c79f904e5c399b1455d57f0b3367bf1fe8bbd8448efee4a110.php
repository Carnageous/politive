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

/* partials/javascript-config.html.twig */
class __TwigTemplate_1b9edc79eb8aa1a3b166b1f6dd1152bcea842705c44b2d3330b0ef960b0f32e5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.login", 1 => "admin.super"])) {
            // line 2
            $context["notifications"] = ((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), "dashboard-notifications", [], "array") || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "dashboard", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "plugins", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "themes", []))) ? (1) : (0));
            // line 3
            echo "<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        current_url: '";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method"), "html", null, true);
            echo "',
        base_url_relative: '";
            // line 7
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "',
        base_url_simple: '";
            // line 8
            echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
            echo "',
        route: '";
            // line 9
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
            echo "',
        param_sep: '";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
            echo "',
        ";
            // line 11
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                // line 12
                echo "        enable_auto_updates_check: '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "enable_auto_updates_check", []), "html", null, true);
                echo "',
        ";
            }
            // line 14
            echo "        admin_timeout: '";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "session", []), "timeout", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "session", []), "timeout", [])) : (1800)), "html", null, true);
            echo "',
        admin_nonce: '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "getNonce", []), "html", null, true);
            echo "',
        language: '";
            // line 16
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", [], "any", false, true), "language", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", [], "any", false, true), "language", []), "en")) : ("en")), "html", null, true);
            echo "',
        pro_enabled: '";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-pro", [], "array"), "enabled", []), "html", null, true);
            echo "',
        notifications: ";
            // line 18
            echo twig_escape_filter($this->env, ($context["notifications"] ?? null), "html", null, true);
            echo ",
        local_notifications: '";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", [], "any", false, true), "local_notifications", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", [], "any", false, true), "local_notifications", []), false)) : (false)), "html", null, true);
            echo "',
        site: {
            delimiter: '";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", [], "any", false, true), "summary", [], "any", false, true), "delimiter", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", [], "any", false, true), "summary", [], "any", false, true), "delimiter", []), "===")) : ("===")), "html", null, true);
            echo "'
        }
    };
    window.GravAdmin.uri_params = {};

    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "params", [0 => null, 1 => true], "method"));
            foreach ($context['_seq'] as $context["param"] => $context["value"]) {
                // line 27
                echo "        window.GravAdmin.uri_params.";
                echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                echo " = \"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["value"], ["\\" => "/"]), "html", null, true);
                echo "\";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['param'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/javascript-config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  105 => 27,  101 => 26,  93 => 21,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  67 => 14,  61 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if authorize(['admin.login', 'admin.super']) %}
{% set notifications = (config.plugins.admin.widgets['dashboard-notifications'] or config.plugins.admin.notifications.dashboard or config.plugins.admin.notifications.plugins or config.plugins.admin.notifications.themes) ? 1 : 0 %}
<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        current_url: '{{ uri.route(true) }}',
        base_url_relative: '{{ base_url_relative }}',
        base_url_simple: '{{ base_url_simple }}',
        route: '{{ admin.route|trim('/') }}',
        param_sep: '{{ config.system.param_sep }}',
        {% if authorize(['admin.maintenance', 'admin.super']) %}
        enable_auto_updates_check: '{{ config.plugins.admin.enable_auto_updates_check }}',
        {% endif %}
        admin_timeout: '{{ config.plugins.admin.session.timeout ?: 1800 }}',
        admin_nonce: '{{ admin.getNonce }}',
        language: '{{ grav.user.language|default('en') }}',
        pro_enabled: '{{ config.plugins[\"admin-pro\"].enabled }}',
        notifications: {{ notifications }},
        local_notifications: '{{ config.system.local_notifications|default(false) }}',
        site: {
            delimiter: '{{ config.site.summary.delimiter|default('===') }}'
        }
    };
    window.GravAdmin.uri_params = {};

    {% for param, value in grav.uri.params(null, true) %}
        window.GravAdmin.uri_params.{{param}} = \"{{value|replace({'\\\\': '/'})}}\";
    {% endfor %}
</script>
{% endif %}
", "partials/javascript-config.html.twig", "/home/janis/Dokumente/Projekte/Politive/user/plugins/admin/themes/grav/templates/partials/javascript-config.html.twig");
    }
}
