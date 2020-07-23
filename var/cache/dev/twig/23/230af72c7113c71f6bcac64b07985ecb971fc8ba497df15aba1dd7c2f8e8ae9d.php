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

/* inc/slide.html.twig */
class __TwigTemplate_360c6d2d801e27bf82c1157f124a05b9ffb314d3d3071bc0b9c53211a47c454a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/slide.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/slide.html.twig"));

        // line 1
        echo "<div id=\"demo\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

  <!-- Indicators -->
  <ul class=\"carousel-indicators\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 5, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "      ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 6), 1)) {
                // line 7
                echo "      <li data-target=\"#demo\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7) - 1), "html", null, true);
                echo "\" class=\"active\"></li>
      ";
            } else {
                // line 9
                echo "      <li data-target=\"#demo\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9) - 1), "html", null, true);
                echo "\"></li>
      ";
            }
            // line 11
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </ul>

  <!-- The slideshow -->
  <div class=\"carousel-inner\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 17
            echo "      ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17), 1)) {
                // line 18
                echo "        <div class=\"carousel-item active\">
          <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 19), "html", null, true);
                echo "\"><img src=\"uploads/images/slides/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 19), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 19), "html", null, true);
                echo "\"></a>
        </div>
      ";
            } else {
                // line 22
                echo "        <div class=\"carousel-item\">
          <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 23), "html", null, true);
                echo "\"><img src=\"uploads/images/slides/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 23), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "\"></a>
        </div>
      ";
            }
            // line 26
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </div>

  <!-- Left and right controls -->
  <!-- <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\"></span>
  </a>
  <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\"></span>
  </a> -->
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 27,  147 => 26,  137 => 23,  134 => 22,  124 => 19,  121 => 18,  118 => 17,  101 => 16,  95 => 12,  81 => 11,  75 => 9,  69 => 7,  66 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"demo\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

  <!-- Indicators -->
  <ul class=\"carousel-indicators\">
    {% for slide in slides %}
      {% if loop.index == 1 %}
      <li data-target=\"#demo\" data-slide-to=\"{{loop.index-1}}\" class=\"active\"></li>
      {% else %}
      <li data-target=\"#demo\" data-slide-to=\"{{loop.index-1}}\"></li>
      {% endif %}
    {% endfor %}
  </ul>

  <!-- The slideshow -->
  <div class=\"carousel-inner\">
    {% for slide in slides %}
      {% if loop.index == 1 %}
        <div class=\"carousel-item active\">
          <a href=\"{{slide.link}}\"><img src=\"uploads/images/slides/{{slide.image}}\" alt=\"{{slide.title}}\"></a>
        </div>
      {% else %}
        <div class=\"carousel-item\">
          <a href=\"{{slide.link}}\"><img src=\"uploads/images/slides/{{slide.image}}\" alt=\"{{slide.title}}\"></a>
        </div>
      {% endif %}
    {% endfor %}
  </div>

  <!-- Left and right controls -->
  <!-- <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\"></span>
  </a>
  <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\"></span>
  </a> -->
</div>", "inc/slide.html.twig", "E:\\xampp\\htdocs\\wincofood\\templates\\inc\\slide.html.twig");
    }
}
