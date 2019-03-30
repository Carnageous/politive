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

/* partials/base.html.twig */
class __TwigTemplate_9573743e7dafa370818ed538c36d3457f0422b72ffea2f12512584d7d0f7b4b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc([0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production-mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "</head>
<body id=\"top\" class=\"";
        // line 40
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        $this->displayBlock('hero', $context, $blocks);
        // line 75
        echo "
        <section id=\"start\">
        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "        </section>

    </div>

    ";
        // line 91
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 98
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 98)->display(array_merge($context, ["mobile" => true]));
        // line 99
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 101
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 101)->display(array_merge($context, ["tree" => true]));
        // line 102
        echo "            </nav>
        </div>
    </div>

";
        // line 106
        $this->displayBlock('bottom', $context, $blocks);
        // line 109
        echo "
</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('assets', $context, $blocks);
        // line 37
        echo "
";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 20
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 21
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
        // line 25
        echo "    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 31
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 33
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 35
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 40
    public function block_body_classes($context, array $blocks = [])
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 42
    public function block_header($context, array $blocks = [])
    {
        // line 43
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 44
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 47
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 52
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 55
        echo "                        </nav>

                        ";
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 58
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 58)->display($context);
            echo "</span>
                        ";
        }
        // line 60
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 52
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 53
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "                        ";
    }

    // line 74
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        // line 78
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 79
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 80
        $this->displayBlock('messages', $context, $blocks);
        // line 83
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "                </section>
            </section>
        ";
    }

    // line 80
    public function block_messages($context, array $blocks = [])
    {
        // line 81
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 81)->display($context);
        } catch (LoaderError $e) {
            // ignore missing template
        }

        // line 82
        echo "                    ";
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
    }

    // line 91
    public function block_footer($context, array $blocks = [])
    {
        // line 92
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 92)->display($context);
        // line 93
        echo "    ";
    }

    // line 106
    public function block_bottom($context, array $blocks = [])
    {
        // line 107
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 107,  353 => 106,  349 => 93,  346 => 92,  343 => 91,  338 => 83,  334 => 82,  326 => 81,  323 => 80,  317 => 84,  314 => 83,  312 => 80,  308 => 79,  305 => 78,  302 => 77,  297 => 74,  293 => 54,  290 => 53,  287 => 52,  271 => 60,  265 => 58,  263 => 57,  259 => 55,  257 => 52,  251 => 48,  249 => 47,  243 => 44,  240 => 43,  237 => 42,  231 => 40,  224 => 35,  219 => 34,  216 => 33,  207 => 31,  204 => 30,  201 => 29,  198 => 28,  195 => 27,  191 => 25,  188 => 24,  185 => 23,  182 => 22,  177 => 21,  172 => 20,  169 => 19,  166 => 18,  161 => 37,  159 => 33,  156 => 32,  154 => 27,  151 => 26,  149 => 18,  144 => 16,  140 => 15,  137 => 14,  135 => 13,  124 => 9,  121 => 8,  118 => 7,  110 => 109,  108 => 106,  102 => 102,  100 => 101,  96 => 99,  94 => 98,  88 => 94,  86 => 91,  80 => 87,  78 => 77,  74 => 75,  72 => 74,  69 => 73,  67 => 42,  62 => 40,  59 => 39,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}
    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/home/janis/Dokumente/Projekte/Politive/user/themes/quark/templates/partials/base.html.twig");
    }
}
