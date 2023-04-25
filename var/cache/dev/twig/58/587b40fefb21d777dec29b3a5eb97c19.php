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

/* _partials/_temoignageClient.html.twig */
class __TwigTemplate_835dfdafb0a72d3ea0a7dd2f7b8fad1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_temoignageClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_temoignageClient.html.twig"));

        // line 1
        echo "<div>
    <h2 class=\"my-4 text-center\">Avis Clients</h2>
</div>
<div class=\"bgcat my-3\">
\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<div class=\"w-75 mx-auto d-flex flex-column flex-lg-row align-items-center justify-content-center\">
\t\t\t\t\t<img class=\"img-fluid img-thumbnail rounded-circle my-4\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/profil/profil_1.png"), "html", null, true);
        echo "\" alt=\"avatar\">
\t\t\t\t\t<i class=\"fa-solid fa-quote-left display-5 d-none d-lg-block text-light mx-3\"></i>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis quam accusamus blanditiis praesentium, numquam, quibusdam porro eaque tempore repellendus et commodi libero eum natus illo consequuntur suscipit voluptatem modi quis? Harum reprehenderit animi et odio, earum iste minus illo fugiat accusantium! Earum sit officia tempora blanditiis perspiciatis rem nemo.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<div class=\"w-75 mx-auto d-flex flex-column flex-lg-row align-items-center justify-content-center\">
\t\t\t\t\t<img class=\"img-fluid img-thumbnail rounded-circle my-4\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/profil/profil_2.png"), "html", null, true);
        echo "\" alt=\"avatar\">
\t\t\t\t\t<i class=\"fa-solid fa-quote-left display-5 d-none d-lg-block text-light mx-3\"></i>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis quam accusamus blanditiis praesentium, numquam, quibusdam porro eaque tempore repellendus et commodi libero eum natus illo consequuntur suscipit voluptatem modi quis? Harum reprehenderit animi et odio, earum iste minus illo fugiat accusantium! Earum sit officia tempora blanditiis perspiciatis rem nemo.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<div class=\"w-75 mx-auto d-flex flex-column flex-lg-row align-items-center justify-content-center\">
\t\t\t\t\t<img class=\"img-fluid img-thumbnail rounded-circle my-4\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/profil/profil_3.png"), "html", null, true);
        echo "\" alt=\"avatar\">
\t\t\t\t\t<i class=\"fa-solid fa-quote-left display-5 d-none d-lg-block text-light mx-3\"></i>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis quam accusamus blanditiis praesentium, numquam, quibusdam porro eaque tempore repellendus et commodi libero eum natus illo consequuntur suscipit voluptatem modi quis? Harum reprehenderit animi et odio, earum iste minus illo fugiat accusantium! Earum sit officia tempora blanditiis perspiciatis rem nemo.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t</button>
\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t</button>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_temoignageClient.html.twig";
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
        return new Source("<div>
    <h2 class=\"my-4 text-center\">Avis Clients</h2>
</div>
<div class=\"bgcat my-3\">
\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<div class=\"w-75 mx-auto d-flex flex-column flex-lg-row align-items-center justify-content-center\">
\t\t\t\t\t<img class=\"img-fluid img-thumbnail rounded-circle my-4\" src=\"{{asset('assets/media/profil/profil_1.png')}}\" alt=\"avatar\">
\t\t\t\t\t<i class=\"fa-solid fa-quote-left display-5 d-none d-lg-block text-light mx-3\"></i>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis quam accusamus blanditiis praesentium, numquam, quibusdam porro eaque tempore repellendus et commodi libero eum natus illo consequuntur suscipit voluptatem modi quis? Harum reprehenderit animi et odio, earum iste minus illo fugiat accusantium! Earum sit officia tempora blanditiis perspiciatis rem nemo.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<div class=\"w-75 mx-auto d-flex flex-column flex-lg-row align-items-center justify-content-center\">
\t\t\t\t\t<img class=\"img-fluid img-thumbnail rounded-circle my-4\" src=\"{{asset('assets/media/profil/profil_2.png')}}\" alt=\"avatar\">
\t\t\t\t\t<i class=\"fa-solid fa-quote-left display-5 d-none d-lg-block text-light mx-3\"></i>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis quam accusamus blanditiis praesentium, numquam, quibusdam porro eaque tempore repellendus et commodi libero eum natus illo consequuntur suscipit voluptatem modi quis? Harum reprehenderit animi et odio, earum iste minus illo fugiat accusantium! Earum sit officia tempora blanditiis perspiciatis rem nemo.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<div class=\"w-75 mx-auto d-flex flex-column flex-lg-row align-items-center justify-content-center\">
\t\t\t\t\t<img class=\"img-fluid img-thumbnail rounded-circle my-4\" src=\"{{asset('assets/media/profil/profil_3.png')}}\" alt=\"avatar\">
\t\t\t\t\t<i class=\"fa-solid fa-quote-left display-5 d-none d-lg-block text-light mx-3\"></i>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis quam accusamus blanditiis praesentium, numquam, quibusdam porro eaque tempore repellendus et commodi libero eum natus illo consequuntur suscipit voluptatem modi quis? Harum reprehenderit animi et odio, earum iste minus illo fugiat accusantium! Earum sit officia tempora blanditiis perspiciatis rem nemo.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t</button>
\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t</button>
\t</div>
</div>
", "_partials/_temoignageClient.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_temoignageClient.html.twig");
    }
}
