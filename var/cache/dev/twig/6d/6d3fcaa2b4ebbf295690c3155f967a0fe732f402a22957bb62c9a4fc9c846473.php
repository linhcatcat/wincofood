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

/* inc/slide.html */
class __TwigTemplate_8ffdd9e58dc59df2f4a1947fc6492df6ab20bad28f1ebe835bc3cbcc9626cc9d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/slide.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/slide.html"));

        // line 1
        echo "<div id=\"demo\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

  <!-- Indicators -->
  <ul class=\"carousel-indicators\">
    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
  </ul>

  <!-- The slideshow -->
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <a href=\"/\"><img src=\"http://wincofood.com.vn/sites/default/files/banner/pedia-gold.jpg\" alt=\"Los Angeles\"></a>
    </div>
    <div class=\"carousel-item\">
      <a href=\"/\"><img src=\"http://wincofood.com.vn/sites/default/files/banner/canxi.png\" alt=\"Chicago\"></a>
    </div>
    <div class=\"carousel-item\">
      <a href=\"/\"><img src=\"http://wincofood.com.vn/sites/default/files/banner/pedia.png\" alt=\"New York\"></a>
    </div>
  </div>

  <!-- Left and right controls -->
  <!-- <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\"></span>
  </a>
  <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\"></span>
  </a> -->
</div>

<!-- <div class=\"slide-show\">
  <div id=\"carousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#carousel\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
      
      <div class=\"carousel-item active\" style=\"background-image: url('http://wincofood.com.vn/sites/default/files/banner/pedia-gold.jpg')\">
        <a class=\"custom-link\" href=\"/\"></a>
        <div class=\"carousel-caption d-none d-md-block\">
          <h2 class=\"display-4\">First Slide</h2>
          <p class=\"lead\">This is a description for the first slide.</p>
        </div>
      </div>
      
      <div class=\"carousel-item\" style=\"background-image: url('http://wincofood.com.vn/sites/default/files/banner/canxi.png')\">
        <a class=\"custom-link\" href=\"/product\"></a>
        <div class=\"carousel-caption d-none d-md-block\">
          <h2 class=\"display-4\">Second Slide</h2>
          <p class=\"lead\">This is a description for the second slide.</p>
        </div>
      </div>
      
      <div class=\"carousel-item\" style=\"background-image: url('http://wincofood.com.vn/sites/default/files/banner/pedia.png')\">
        <a class=\"custom-link\" href=\"/product\"></a>
        <div class=\"carousel-caption d-none d-md-block\">
          <h2 class=\"display-4\">Third Slide</h2>
          <p class=\"lead\">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</div> -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/slide.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"demo\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">

  <!-- Indicators -->
  <ul class=\"carousel-indicators\">
    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
  </ul>

  <!-- The slideshow -->
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <a href=\"/\"><img src=\"http://wincofood.com.vn/sites/default/files/banner/pedia-gold.jpg\" alt=\"Los Angeles\"></a>
    </div>
    <div class=\"carousel-item\">
      <a href=\"/\"><img src=\"http://wincofood.com.vn/sites/default/files/banner/canxi.png\" alt=\"Chicago\"></a>
    </div>
    <div class=\"carousel-item\">
      <a href=\"/\"><img src=\"http://wincofood.com.vn/sites/default/files/banner/pedia.png\" alt=\"New York\"></a>
    </div>
  </div>

  <!-- Left and right controls -->
  <!-- <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\"></span>
  </a>
  <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\"></span>
  </a> -->
</div>

<!-- <div class=\"slide-show\">
  <div id=\"carousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#carousel\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
      
      <div class=\"carousel-item active\" style=\"background-image: url('http://wincofood.com.vn/sites/default/files/banner/pedia-gold.jpg')\">
        <a class=\"custom-link\" href=\"/\"></a>
        <div class=\"carousel-caption d-none d-md-block\">
          <h2 class=\"display-4\">First Slide</h2>
          <p class=\"lead\">This is a description for the first slide.</p>
        </div>
      </div>
      
      <div class=\"carousel-item\" style=\"background-image: url('http://wincofood.com.vn/sites/default/files/banner/canxi.png')\">
        <a class=\"custom-link\" href=\"/product\"></a>
        <div class=\"carousel-caption d-none d-md-block\">
          <h2 class=\"display-4\">Second Slide</h2>
          <p class=\"lead\">This is a description for the second slide.</p>
        </div>
      </div>
      
      <div class=\"carousel-item\" style=\"background-image: url('http://wincofood.com.vn/sites/default/files/banner/pedia.png')\">
        <a class=\"custom-link\" href=\"/product\"></a>
        <div class=\"carousel-caption d-none d-md-block\">
          <h2 class=\"display-4\">Third Slide</h2>
          <p class=\"lead\">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</div> -->", "inc/slide.html", "E:\\xampp\\htdocs\\wincofood\\templates\\inc\\slide.html");
    }
}
