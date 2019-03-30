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

/* macros/macros.html.twig */
class __TwigTemplate_50fb9c50678b092c1d4d0835938d5a53a694a1db05efff8517ddc53eccbbf8cc extends \Twig\Template
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
    }

    // line 1
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["macros"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "    ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 6
                    echo "      <li>
        <a href=\"";
                    // line 7
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\"";
                    echo ($context["active_page"] ?? null);
                    echo ">
          ";
                    // line 8
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
        </a>
        <ul>
          ";
                    // line 11
                    echo $context["macros"]->getnav_loop($context["p"]);
                    echo "
        </ul>
      </li>
    ";
                } else {
                    // line 15
                    echo "      <li>
        <a href=\"";
                    // line 16
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo " \">
          ";
                    // line 17
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
        </a>
      </li>
    ";
                }
                // line 21
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  89 => 17,  83 => 16,  80 => 15,  73 => 11,  67 => 8,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  47 => 3,  44 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(page) %}
  {% import _self as macros %}
  {% for p in page.children.visible %}
    {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
    {% if p.children.visible.count > 0 %}
      <li>
        <a href=\"{{ p.url }}\"{{ active_page }}>
          {{ p.menu }}
        </a>
        <ul>
          {{ macros.nav_loop(p) }}
        </ul>
      </li>
    {% else %}
      <li>
        <a href=\"{{ p.url }}\" class=\"{{ active_page }} \">
          {{ p.menu }}
        </a>
      </li>
    {% endif %}
  {% endfor %}
{% endmacro %}
", "macros/macros.html.twig", "/home/janis/Dokumente/Projekte/Politive/user/themes/quark/templates/macros/macros.html.twig");
    }
}
