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

/* _partials/_carousel.html.twig */
class __TwigTemplate_f4dd77b490934bcfb4afafd920a688b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_carousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_carousel.html.twig"));

        // line 1
        echo "<div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide\" data-bs-ride=\"carousel\">
\t<div class=\"carousel-indicators\">
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t</div>
\t<div class=\"carousel-inner\">
\t\t<div class=\"carousel-item active\" data-bs-interval=\"10000\">
\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/carousel/img_1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"carousel_pic\">
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/carousel/img_2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"carousel_pic\">
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-item\">
\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/carousel/img_3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"carousel_pic\">
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Previous</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Next</span>
\t</button>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  63 => 16,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide\" data-bs-ride=\"carousel\">
\t<div class=\"carousel-indicators\">
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t</div>
\t<div class=\"carousel-inner\">
\t\t<div class=\"carousel-item active\" data-bs-interval=\"10000\">
\t\t\t<img src=\"{{asset('assets/media/carousel/img_1.jpg')}}\" class=\"d-block w-100\" alt=\"carousel_pic\">
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t<img src=\"{{asset('assets/media/carousel/img_2.jpg')}}\" class=\"d-block w-100\" alt=\"carousel_pic\">
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-item\">
\t\t\t<img src=\"{{asset('assets/media/carousel/img_3.jpg')}}\" class=\"d-block w-100\" alt=\"carousel_pic\">
\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Previous</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Next</span>
\t</button>
</div>
", "_partials/_carousel.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_carousel.html.twig");
    }
}
