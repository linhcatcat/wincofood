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

/* inc/menu_footer.html.twig */
class __TwigTemplate_85b060ea7d2aec57462fe5ff14c1a13682375d724e67c9b7666a9c4e351fbb5e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/menu_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/menu_footer.html.twig"));

        // line 1
        echo "<footer class=\"wrap-container winco\">
\t<div class=\"footer-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 6
            echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"winco-title\">
\t\t\t\t\t\t<h4>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 10
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\MenuFooterController::menuFooterSub", ["parentId" => twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 10)]));
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"winco-title\">
\t\t\t\t\t\t<h4>Kênh WincoFood</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<iframe width=\"360\" class=\"kenh-winco-food\" src=\"https://www.youtube.com/embed/VHhqeDEUgFY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"copy-right\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"center\">Copyright © 2020 WincoFood Corp. All rights reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/menu_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  62 => 10,  57 => 8,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"wrap-container winco\">
\t<div class=\"footer-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for m in menus %}
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"winco-title\">
\t\t\t\t\t\t<h4>{{m.name}}</h4>
\t\t\t\t\t</div>
\t\t\t\t\t{{ render(controller('App\\\\Controller\\\\MenuFooterController::menuFooterSub', {parentId: m.id})) }}
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"winco-title\">
\t\t\t\t\t\t<h4>Kênh WincoFood</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<iframe width=\"360\" class=\"kenh-winco-food\" src=\"https://www.youtube.com/embed/VHhqeDEUgFY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"copy-right\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"center\">Copyright © 2020 WincoFood Corp. All rights reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>", "inc/menu_footer.html.twig", "E:\\xampp\\htdocs\\wincofood\\templates\\inc\\menu_footer.html.twig");
    }
}
