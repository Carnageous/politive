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

/* partials/base-root.html.twig */
class __TwigTemplate_0cbfb9aab273d4e1d7794bb346c3a753ae40469dad208e25758ebca33d1c5c5a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'page' => [$this, 'block_page'],
            'navigation' => [$this, 'block_navigation'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'messages' => [$this, 'block_messages'],
            'widgets' => [$this, 'block_widgets'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
            'modals' => [$this, 'block_modals'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["uri"] ?? null), "extension", [], "method") == "json")) {
            $this->loadTemplate("default.json.twig", "partials/base-root.html.twig", 1)->display($context);
        } else {
            // line 2
            echo "    ";
            $context["icon_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "admin_icons", []);
            // line 3
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    ";
            // line 6
            $this->displayBlock('head', $context, $blocks);
            // line 33
            echo "    </head>
    ";
            // line 34
            $this->displayBlock('body', $context, $blocks);
            // line 122
            echo "    </html>
";
        }
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 8
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " | ";
        } else {
            if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 10
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 12
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", []), "html", null, true);
            echo "\">
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 15
            echo "            <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
        ";
        } else {
            // line 17
            echo "            <meta name=\"robots\" content=\"noindex, nofollow\">
        ";
        }
        // line 19
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\">

        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base-root.html.twig", 27)->display($context);
        // line 28
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 23
        echo "            ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base-root.html.twig", 23)->display($context);
        // line 24
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        // line 29
        echo "            ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base-root.html.twig", 29)->display($context);
        // line 30
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        // line 35
        echo "    <body class=\"ga-theme-17x ";
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "size", []) == "small")) ? ("sidebar-closed") : (""));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "body_classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 36
        $this->displayBlock('page', $context, $blocks);
        // line 117
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 120
        echo "    </body>
    ";
    }

    // line 36
    public function block_page($context, array $blocks = [])
    {
        // line 37
        echo "        <div class=\"remodal-bg\">

            ";
        // line 39
        $this->displayBlock('navigation', $context, $blocks);
        // line 42
        echo "
            <main id=\"admin-main\" >
                ";
        // line 44
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base-root.html.twig", 44)->display($context);
        // line 45
        echo "                <div id=\"titlebar\" class=\"titlebar\">
                    ";
        // line 46
        $this->displayBlock('titlebar', $context, $blocks);
        // line 47
        echo "                </div>

                ";
        // line 49
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 75
        echo "
                ";
        // line 76
        $this->displayBlock('modals', $context, $blocks);
        // line 112
        echo "
            </main>
            <div id='overlay'></div>
        </div>
        ";
    }

    // line 39
    public function block_navigation($context, array $blocks = [])
    {
        // line 40
        echo "                ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base-root.html.twig", 40)->display($context);
        // line 41
        echo "            ";
    }

    // line 46
    public function block_titlebar($context, array $blocks = [])
    {
    }

    // line 49
    public function block_content_wrapper($context, array $blocks = [])
    {
        // line 50
        echo "                <div class=\"content-wrapper\">
                    <div class=\"";
        // line 51
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "content_padding", [])) {
            echo "content-padding";
        }
        echo "\">
                        ";
        // line 52
        $this->displayBlock('messages', $context, $blocks);
        // line 55
        echo "
                        ";
        // line 56
        $this->displayBlock('widgets', $context, $blocks);
        // line 57
        echo "                        <div class=\"default-box-shadow\">
                            ";
        // line 58
        $this->displayBlock('content_top', $context, $blocks);
        // line 59
        echo "                            <div class=\"admin-block\">";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "</div>
                            ";
        // line 62
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "show_github_msg", [])) {
            // line 63
            echo "                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "</a></div>
                            ";
        }
        // line 65
        echo "                            ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 66
        echo "                        </div>
                        ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "                    </div>
                </div>
                ";
    }

    // line 52
    public function block_messages($context, array $blocks = [])
    {
        // line 53
        echo "                            ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 53)->display($context);
        // line 54
        echo "                        ";
    }

    // line 56
    public function block_widgets($context, array $blocks = [])
    {
    }

    // line 58
    public function block_content_top($context, array $blocks = [])
    {
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
    }

    // line 65
    public function block_content_bottom($context, array $blocks = [])
    {
    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        // line 68
        echo "                        <footer id=\"footer\">
                             <a href=\"http://getgrav.org\">Grav</a> v<span class=\"grav-version\">";
        // line 69
        echo twig_escape_filter($this->env, twig_constant("GRAV_VERSION"), "html", null, true);
        echo "</span> - Admin v";
        echo twig_escape_filter($this->env, ($context["admin_version"] ?? null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.WAS_MADE_WITH")), "html", null, true);
        echo " <i class=\"fa fa-heart-o pulse\"></i> ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BY")), "html", null, true);
        echo " <a href=\"https://trilby.media\">Trilby Media</a>.
                        </footer>
                        ";
    }

    // line 76
    public function block_modals($context, array $blocks = [])
    {
        // line 77
        echo "                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.METADATA"), "html", null, true);
        echo " for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                        <p class=\"bigger\">
                            ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
                ";
    }

    // line 117
    public function block_bottom($context, array $blocks = [])
    {
        // line 118
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base-root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 118,  409 => 117,  400 => 107,  396 => 106,  389 => 102,  384 => 100,  375 => 94,  366 => 88,  357 => 82,  351 => 79,  347 => 77,  344 => 76,  331 => 69,  328 => 68,  325 => 67,  320 => 65,  315 => 60,  310 => 58,  305 => 56,  301 => 54,  298 => 53,  295 => 52,  289 => 72,  287 => 67,  284 => 66,  281 => 65,  275 => 63,  273 => 62,  270 => 61,  268 => 60,  266 => 59,  264 => 58,  261 => 57,  259 => 56,  256 => 55,  254 => 52,  248 => 51,  245 => 50,  242 => 49,  237 => 46,  233 => 41,  230 => 40,  227 => 39,  219 => 112,  217 => 76,  214 => 75,  212 => 49,  208 => 47,  206 => 46,  203 => 45,  201 => 44,  197 => 42,  195 => 39,  191 => 37,  188 => 36,  183 => 120,  180 => 117,  178 => 36,  169 => 35,  166 => 34,  159 => 30,  156 => 29,  153 => 28,  146 => 24,  143 => 23,  140 => 22,  136 => 32,  133 => 28,  131 => 27,  128 => 26,  126 => 22,  120 => 20,  117 => 19,  113 => 17,  107 => 15,  104 => 14,  98 => 12,  92 => 10,  90 => 9,  77 => 8,  74 => 7,  71 => 6,  65 => 122,  63 => 34,  60 => 33,  58 => 6,  53 => 3,  50 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if uri.extension() == 'json' %}{% include 'default.json.twig' %}{% else %}
    {% set icon_style = config.plugins.admin.admin_icons %}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if title %}{{ title }} | {% else %}{% if header.title %}{{ header.title }} | {% endif %}{% endif %}{{ site.title }}</title>
        {% if header.description %}
            <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
            <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
            <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% else %}
            <meta name=\"robots\" content=\"noindex, nofollow\">
        {% endif %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url_simple }}{{ theme_url }}/images/favicon.png\">

        {% block stylesheets %}
            {% include 'partials/stylesheets.html.twig' %}
            {{ assets.css()|raw }}
        {% endblock %}

        {% include 'partials/javascript-config.html.twig' %}
        {% block javascripts %}
            {% include 'partials/javascripts.html.twig' %}
            {{ assets.js()|raw }}
        {% endblock %}
    {% endblock %}
    </head>
    {% block body %}
    <body class=\"ga-theme-17x {{ config.plugins.admin.sidebar.size == 'small' ? 'sidebar-closed' : '' }} {{ config.plugins.admin.body_classes }} {{ body_classes }}\">
        {% block page %}
        <div class=\"remodal-bg\">

            {% block navigation %}
                {% include 'partials/nav.html.twig' %}
            {% endblock %}

            <main id=\"admin-main\" >
                {% include 'partials/nav-toggle.html.twig' %}
                <div id=\"titlebar\" class=\"titlebar\">
                    {% block titlebar %}{% endblock %}
                </div>

                {% block content_wrapper %}
                <div class=\"content-wrapper\">
                    <div class=\"{% if config.plugins.admin.content_padding %}content-padding{% endif %}\">
                        {% block messages %}
                            {% include 'partials/messages.html.twig' %}
                        {% endblock %}

                        {% block widgets %}{% endblock %}
                        <div class=\"default-box-shadow\">
                            {% block content_top %}{% endblock %}
                            <div class=\"admin-block\">
                                {%- block content %}{% endblock -%}
                            </div>
                            {% if config.plugins.admin.show_github_msg %}
                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\">{{ 'PLUGIN_ADMIN.ADMIN_REPORT_ISSUE'|tu }}</a></div>
                            {% endif %}
                            {% block content_bottom %}{% endblock %}
                        </div>
                        {% block footer %}
                        <footer id=\"footer\">
                             <a href=\"http://getgrav.org\">Grav</a> v<span class=\"grav-version\">{{ constant('GRAV_VERSION') }}</span> - Admin v{{ admin_version }} - {{ \"PLUGIN_ADMIN.WAS_MADE_WITH\"|tu|lower }} <i class=\"fa fa-heart-o pulse\"></i> {{ \"PLUGIN_ADMIN.BY\"|tu|lower }} <a href=\"https://trilby.media\">Trilby Media</a>.
                        </footer>
                        {% endblock %}
                    </div>
                </div>
                {% endblock %}

                {% block modals %}
                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>{{ \"PLUGIN_ADMIN.METADATA\"|tu }} for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
                        <p class=\"bigger\">
                            {{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC\"|tu }}
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
                        </div>
                    </form>
                </div>
                {% endblock %}

            </main>
            <div id='overlay'></div>
        </div>
        {% endblock page %}
    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}
    </body>
    {% endblock body %}
    </html>
{% endif %}
", "partials/base-root.html.twig", "/home/janis/Dokumente/Projekte/Politive/user/plugins/admin/themes/grav/templates/partials/base-root.html.twig");
    }
}
