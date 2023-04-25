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

/* _partials/_shipmentInfo.html.twig */
class __TwigTemplate_c999a5a479016a5c1324f3e3d3bbc6cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_shipmentInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_shipmentInfo.html.twig"));

        // line 1
        echo "<div class=\"d-flex justify-content-center border bg-info bg-gradient rounded py-5\">
\t<div class=\"row\">
\t\t<section class=\"col d-flex flex-row justify-content-center align-items-center\">
\t\t\t<i class=\"fa-solid fa-truck-fast text-light px-2 me-2 display-6\"></i>
\t\t\t<h5 class=\" text-light\">Livraison partout en France</h5>
\t\t</section>
\t\t<section class=\"col d-flex flex-row justify-content-center align-items-center\">
\t\t\t<i class=\"fa-solid fa-right-left text-light px-2 me-2 display-6\"></i>
\t\t\t<h5 class=\" text-light\">retour gratuit sous 30 jours</h5>
\t\t</section>
\t\t<section class=\"col d-flex flex-row justify-content-center align-items-center\">
\t\t\t<i class=\"fa-solid fa-wallet text-light px-2 me-2 display-6\"></i>
\t\t\t<h5 class=\" text-light\">Satisfait ou remboursé sous condition</h5>
\t\t</section>
\t\t<section class=\"col d-flex flex-row justify-content-center align-items-center\">
\t\t\t<i class=\"fa-solid fa-headset text-light px-2 me-2 display-6\"></i>
\t\t\t<h5 class=\" text-light\">contact 7/7 24/24</h5>
\t\t</section>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_shipmentInfo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex justify-content-center border bg-info bg-gradient rounded py-5\">
\t<div class=\"row\">
\t\t<section class=\"col d-flex flex-row justify-content-center align-items-center\">
\t\t\t<i class=\"fa-solid fa-truck-fast text-light px-2 me-2 display-6\"></i>
\t\t\t<h5 class=\" text-light\">Livraison partout en France</h5>
\t\t</section>
\t\t<section class=\"col d-flex flex-row justify-content-center align-items-center\">
\t\t\t<i class=\"fa-solid fa-right-left text-light px-2 me-2 display-6\"></i>
\t\t\t<h5 class=\" text-light\">retour gratuit sous 30 jours</h5>
\t\t</section>
\t\t<section class=\"col d-flex flex-row justify-content-center align-items-center\">
\t\t\t<i class=\"fa-solid fa-wallet text-light px-2 me-2 display-6\"></i>
\t\t\t<h5 class=\" text-light\">Satisfait ou remboursé sous condition</h5>
\t\t</section>
\t\t<section class=\"col d-flex flex-row justify-content-center align-items-center\">
\t\t\t<i class=\"fa-solid fa-headset text-light px-2 me-2 display-6\"></i>
\t\t\t<h5 class=\" text-light\">contact 7/7 24/24</h5>
\t\t</section>
\t</div>
</div>
", "_partials/_shipmentInfo.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_shipmentInfo.html.twig");
    }
}
