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

/* _partials/_nav_admin.html.twig */
class __TwigTemplate_09e1f7310b8bc337a1cb366ba15151ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav_admin.html.twig"));

        // line 1
        echo "<div class=\"container-fluid bg-light mx-0 d-flex flex-row flex-wrap justify-content-around justify-content-lg-between\">
\t<div class=\"w-25 order-0\">
\t\t<img class=\"w-100 rounded\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/logo/logo_resized.png"), "html", null, true);
        echo "\" alt=\"Logo\">
\t</div>
\t<div class=\"flex-grow order-3 order-lg-2 d-flex justify-content-center flex-grow-1 align-items-center\">
\t\t\t<h1>Administration des produits</h1>
\t</div>
</div>
<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
\t<div class=\"container-fluid d-flex flex-column justify-content-evenly flex-md-row flex-nowrap\">
\t\t<div class=\"d-flex flex-row flex-wrap \">
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2\" aria-current=\"page\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_nav_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-light mx-0 d-flex flex-row flex-wrap justify-content-around justify-content-lg-between\">
\t<div class=\"w-25 order-0\">
\t\t<img class=\"w-100 rounded\" src=\"{{asset('assets/media/logo/logo_resized.png')}}\" alt=\"Logo\">
\t</div>
\t<div class=\"flex-grow order-3 order-lg-2 d-flex justify-content-center flex-grow-1 align-items-center\">
\t\t\t<h1>Administration des produits</h1>
\t</div>
</div>
<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
\t<div class=\"container-fluid d-flex flex-column justify-content-evenly flex-md-row flex-nowrap\">
\t\t<div class=\"d-flex flex-row flex-wrap \">
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2\" aria-current=\"page\" href=\"{{ path('accueil') }}\">Accueil</a>
\t\t</div>
\t</div>
</nav>
", "_partials/_nav_admin.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_nav_admin.html.twig");
    }
}
