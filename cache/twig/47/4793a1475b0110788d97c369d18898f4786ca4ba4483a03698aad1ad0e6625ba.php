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

/* partials/javascripts.html.twig */
class __TwigTemplate_414c7c9a89a0b642fe1be2bb5dc9f998dc2245a4f237eaad3e8dd51ab25be035 extends \Twig\Template
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
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 2
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.login", 1 => "admin.super"])) {
            // line 3
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/vendor.min.js"), 1 => ["loading" => "defer"]], "method");
            // line 4
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/admin.min.js"), 1 => ["loading" => "defer"]], "method");
            // line 5
            echo "
";
            // line 6
            if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") || ($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "edge"))) {
                // line 7
                echo "    ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/form-attr.polyfill.js")], "method");
            }
            // line 9
            echo "
";
            // line 10
            try {
                $this->loadTemplate("partials/javascripts-extra.html.twig", "partials/javascripts.html.twig", 10)->display($context);
            } catch (LoaderError $e) {
                // ignore missing template
            }

        }
    }

    public function getTemplateName()
    {
        return "partials/javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  47 => 9,  43 => 7,  41 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% do assets.add('jquery',101) %}
{% if authorize(['admin.login', 'admin.super']) %}
{% do assets.addJs(theme_url~'/js/vendor.min.js', { 'loading':'defer' }) %}
{% do assets.addJs(theme_url~'/js/admin.min.js' , { 'loading':'defer' }) %}

{% if browser.getBrowser == 'msie' or browser.getBrowser == 'edge' %}
    {% do assets.addJs(theme_url~'/js/form-attr.polyfill.js') %}
{% endif %}

{% include 'partials/javascripts-extra.html.twig' ignore missing %}
{% endif %}
", "partials/javascripts.html.twig", "/home/janis/Dokumente/Projekte/Politive/user/plugins/admin/themes/grav/templates/partials/javascripts.html.twig");
    }
}
