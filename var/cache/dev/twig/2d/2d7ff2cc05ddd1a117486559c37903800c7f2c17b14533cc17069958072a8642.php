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

/* inc/navbar.html */
class __TwigTemplate_139ff1b18ef449af6d229c5669a62d051a6779f5cd5acc53b21a8313c66c480e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html"));

        // line 1
        echo "<!-- <nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
  <div class=\"container\">
    <a href=\"/\" class=\"navbar-brand\">GM</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
      <span class=\"navbar-toggle-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a href=\"/\" class=\"nav-link\">Trang chủ</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"/product\" class=\"nav-link\">Sản Phẩm</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"/article/new\" class=\"nav-link\">New Article</a>
        </li>
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <li class=\"nav-item\">
          <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link\">Đăng xuất</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\" class=\"nav-link\">Hi ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
        </li>
        ";
        } else {
            // line 26
            echo "        <li class=\"nav-item\">
          <a href=\"/login\" class=\"nav-link\">Đăng nhập</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"/register\" class=\"nav-link\">Đăng ký</a>
        </li>
        ";
        }
        // line 33
        echo "      </ul>
    </div>
  </div>
</nav> -->

<nav class=\"navbar navbar-light navbar-expand-lg mainmenu\">
  <div class=\"container\">
    <a href=\"/\" class=\"navbar-brand\">GM</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"active\"><a href=\"#\">Home <span class=\"sr-only\">(current)</span></a></li>
            <li><a href=\"#\">Link</a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown2</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown3</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                        </ul>
                    </li>
                    </ul>
                </li>
                </ul>
            </li>
            <li><a href=\"#\">Service</a></li>
        </ul>
    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  81 => 26,  73 => 23,  67 => 20,  64 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
  <div class=\"container\">
    <a href=\"/\" class=\"navbar-brand\">GM</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
      <span class=\"navbar-toggle-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a href=\"/\" class=\"nav-link\">Trang chủ</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"/product\" class=\"nav-link\">Sản Phẩm</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"/article/new\" class=\"nav-link\">New Article</a>
        </li>
        {% if app.user %}
        <li class=\"nav-item\">
          <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">Đăng xuất</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"{{ path('app_profile') }}\" class=\"nav-link\">Hi {{app.user.username}}</a>
        </li>
        {% else %}
        <li class=\"nav-item\">
          <a href=\"/login\" class=\"nav-link\">Đăng nhập</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"/register\" class=\"nav-link\">Đăng ký</a>
        </li>
        {% endif %}
      </ul>
    </div>
  </div>
</nav> -->

<nav class=\"navbar navbar-light navbar-expand-lg mainmenu\">
  <div class=\"container\">
    <a href=\"/\" class=\"navbar-brand\">GM</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"active\"><a href=\"#\">Home <span class=\"sr-only\">(current)</span></a></li>
            <li><a href=\"#\">Link</a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown2</a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown3</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                        </ul>
                    </li>
                    </ul>
                </li>
                </ul>
            </li>
            <li><a href=\"#\">Service</a></li>
        </ul>
    </div>
  </div>
</nav>", "inc/navbar.html", "E:\\xampp\\htdocs\\wincofood\\templates\\inc\\navbar.html");
    }
}
