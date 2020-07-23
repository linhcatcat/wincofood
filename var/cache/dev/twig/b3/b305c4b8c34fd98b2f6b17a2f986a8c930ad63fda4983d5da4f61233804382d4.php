<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* inc/navbar.html.twig */
class __TwigTemplate_08b2cf924c4722f752d1eea08cd9255df27192b77bca85cdf356a05c3337e97d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-light navbar-expand-lg mainmenu\">
  <div class=\"container\">
    <a href=\"/\" class=\"navbar-brand\">
      <img class=\"logo\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav m-auto\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 12
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["m"], "parent", [], "any", false, false, false, 12), null)) {
                // line 13
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["m"], "checkParent", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                        <li class=\"dropdown\">
                            ";
                    // line 15
                    if (0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["m"], "link", [], "any", false, false, false, 15))) {
                        // line 16
                        echo "                            <a class=\"dropdown-toggle active\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "link", [], "any", false, false, false, 16), "html", null, true);
                        echo "\" id=\"navbarDropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 16), "html", null, true);
                        echo "</a>
                            ";
                    } else {
                        // line 18
                        echo "                            <a class=\"dropdown-toggle\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "link", [], "any", false, false, false, 18), "html", null, true);
                        echo "\" id=\"navbarDropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 18), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 20
                    echo "                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 21, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
                        // line 22
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["m1"], "parent", [], "any", false, false, false, 22)) {
                            // line 23
                            echo "                                        ";
                            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m1"], "parent", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 23))) {
                                // line 24
                                echo "                                        <li><a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m1"], "link", [], "any", false, false, false, 24), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m1"], "name", [], "any", false, false, false, 24), "html", null, true);
                                echo "</a></li>
                                        ";
                            }
                            // line 26
                            echo "                                    ";
                        }
                        // line 27
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "                            </ul>
                        </li>
                    ";
                } else {
                    // line 31
                    echo "                        ";
                    if (0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["m"], "link", [], "any", false, false, false, 31))) {
                        // line 32
                        echo "                            <li><a class=\"active\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "link", [], "any", false, false, false, 32), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 32), "html", null, true);
                        echo "</a></li>
                        ";
                    } else {
                        // line 34
                        echo "                            <li><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "link", [], "any", false, false, false, 34), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 34), "html", null, true);
                        echo "</a></li>
                        ";
                    }
                    // line 36
                    echo "                    ";
                }
                // line 37
                echo "                ";
            }
            // line 38
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 39,  149 => 38,  146 => 37,  143 => 36,  135 => 34,  127 => 32,  124 => 31,  119 => 28,  113 => 27,  110 => 26,  102 => 24,  99 => 23,  96 => 22,  92 => 21,  89 => 20,  81 => 18,  73 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  58 => 11,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-light navbar-expand-lg mainmenu\">
  <div class=\"container\">
    <a href=\"/\" class=\"navbar-brand\">
      <img class=\"logo\" src=\"{{ asset('images/logo.png') }}\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav m-auto\">
            {% for m in menus %}
                {% if m.parent == null %}
                    {% if m.checkParent %}
                        <li class=\"dropdown\">
                            {% if currentPath == m.link %}
                            <a class=\"dropdown-toggle active\" href=\"{{m.link}}\" id=\"navbarDropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{m.name}}</a>
                            {% else %}
                            <a class=\"dropdown-toggle\" href=\"{{m.link}}\" id=\"navbarDropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{m.name}}</a>
                            {% endif %}
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                {% for m1 in menus %}
                                    {% if m1.parent %}
                                        {% if m1.parent.id == m.id %}
                                        <li><a href=\"{{m1.link}}\">{{m1.name}}</a></li>
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </li>
                    {% else %}
                        {% if currentPath == m.link %}
                            <li><a class=\"active\" href=\"{{m.link}}\">{{m.name}}</a></li>
                        {% else %}
                            <li><a href=\"{{m.link}}\">{{m.name}}</a></li>
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endfor %}
        </ul>
    </div>
  </div>
</nav>
", "inc/navbar.html.twig", "E:\\xampp\\htdocs\\wincofood\\templates\\inc\\navbar.html.twig");
    }
}
