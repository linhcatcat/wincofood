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

/* inc/admin_menu.html.twig */
class __TwigTemplate_505b31b0a90d17db50b4fb3371956a46da9e1c89e92abc29e7f861e9e4bc9c35 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/admin_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/admin_menu.html.twig"));

        // line 1
        echo "<div class=\"dd\" id=\"nestable1\">
    <ol class=\"dd-list\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 4
            echo "            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["m"], "parent", [], "any", false, false, false, 4), null)) {
                // line 5
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["m"], "checkParent", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "                    <li class=\"dd-item\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 6), "html", null, true);
                    echo "\" data-sort=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "sort", [], "any", false, false, false, 6), "html", null, true);
                    echo ">
                        <div class=\"dd-handle\">";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 7), "html", null, true);
                    echo "</div>
                        <ol class=\"dd-list\">
                            ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 9, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
                        // line 10
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["m1"], "parent", [], "any", false, false, false, 10)) {
                            // line 11
                            echo "                                    ";
                            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m1"], "parent", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 11))) {
                                // line 12
                                echo "                                        <li class=\"dd-item\" data-id=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m1"], "id", [], "any", false, false, false, 12), "html", null, true);
                                echo "\" data-sort=";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "sort", [], "any", false, false, false, 12), "html", null, true);
                                echo "><div class=\"dd-handle\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m1"], "name", [], "any", false, false, false, 12), "html", null, true);
                                echo "</div></li>
                                    ";
                            }
                            // line 14
                            echo "                                ";
                        }
                        // line 15
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "                        </ol>
                    </li>
                ";
                } else {
                    // line 19
                    echo "                    <li class=\"dd-item\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 19), "html", null, true);
                    echo "\" data-sort=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "sort", [], "any", false, false, false, 19), "html", null, true);
                    echo ">
                        <div class=\"dd-handle\">";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 20), "html", null, true);
                    echo "</div>
                    </li>
                ";
                }
                // line 23
                echo "            ";
            }
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ol>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/admin_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  119 => 24,  116 => 23,  110 => 20,  103 => 19,  98 => 16,  92 => 15,  89 => 14,  79 => 12,  76 => 11,  73 => 10,  69 => 9,  64 => 7,  57 => 6,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dd\" id=\"nestable1\">
    <ol class=\"dd-list\">
        {% for m in menus %}
            {% if m.parent == null %}
                {% if m.checkParent %}
                    <li class=\"dd-item\" data-id=\"{{m.id}}\" data-sort={{m.sort}}>
                        <div class=\"dd-handle\">{{m.name}}</div>
                        <ol class=\"dd-list\">
                            {% for m1 in menus %}
                                {% if m1.parent %}
                                    {% if m1.parent.id == m.id %}
                                        <li class=\"dd-item\" data-id=\"{{m1.id}}\" data-sort={{m.sort}}><div class=\"dd-handle\">{{m1.name}}</div></li>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        </ol>
                    </li>
                {% else %}
                    <li class=\"dd-item\" data-id=\"{{m.id}}\" data-sort={{m.sort}}>
                        <div class=\"dd-handle\">{{m.name}}</div>
                    </li>
                {% endif %}
            {% endif %}
        {% endfor %}
    </ol>
</div>", "inc/admin_menu.html.twig", "E:\\xampp\\htdocs\\wincofood\\templates\\inc\\admin_menu.html.twig");
    }
}
