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

/* _partials/_footer.html.twig */
class __TwigTemplate_949a1d2744be4a0ebd880ffb660e15d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        // line 1
        echo "<div class=\"bgcat d-flex flex-column flex-lg-row align-items-center justify-content-center my-4\">
\t<i class=\"fa-solid mx-2 text-light fa-envelope display-6 mt-3 mb-2\"></i>
\t<h6 class=\"text-light mx-2\">Connecté À Nos Mises À Jour Par E-Mail</h6>
\t<div class=\"d-flex flex-column col-12 col-lg-5 mx-2\">
\t\t<form class=\"g-3 my-3 needs-validation\" novalidate>
\t\t\t<div class=\"d-flex flex-row justify-content-center mb-2\">
\t\t\t\t<input type=\"email\" class=\"form-control ms-4 me-2\" id=\"validationCustom01\" value=\"rentrer votre e-mail\" style=\"max-width: 350px;\" required>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tLooks good!
\t\t\t\t</div>
\t\t\t\t<div >
\t\t\t\t\t<button class=\"btn btn-outline-primary\" type=\"submit\">
\t\t\t\t\t\t<i class=\"fa-sharp fa-solid fa-paper-plane\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-check d-flex flex-row justify-content-center\">
\t\t\t\t<input class=\"form-check-input mx-2\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
\t\t\t\t<label class=\"form-check-label text-Catégorieslight\" for=\"invalidCheck\">
\t\t\t\t\tJ'accepte les termes et conditions et la politique de confidentialité
\t\t\t\t</label>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tveuillez accepter les termes
\t\t\t\t</div>
\t\t\t</div>


\t\t</form>
\t\t<div class=\"d-flex flex-row justify-content-center mb-3\">
\t\t\t<i class=\"fa-brands mx-2 text-light  display-6 fa-twitter\"></i>
\t\t\t<i class=\"fa-brands mx-2 text-light  display-6 fa-instagram\"></i>
\t\t\t<i class=\"fa-brands mx-2 text-light  display-6 fa-facebook\"></i>
\t\t\t<i class=\"fa-brands mx-2 text-light  display-6 fa-youtube\"></i>
\t\t</div>
\t</div>
</div>

<div class=\"container-fluid bg-light my-3\">
\t<div class=\"row\">
\t\t<section class=\"col-12 col-md-6 col-lg-3 text-center my-2\">
\t\t\t<h3 class=\"text-secondary\">A PROPOS DE NOUS</h3>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">An item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A second item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A third item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A fourth item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">And a fifth one</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"col-12 col-md-6 col-lg-3  text-center my-2\">
\t\t\t<h3 class=\"text-secondary\">PRODUITS</h3>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">An item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A second item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A third item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A fourth item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">And a fifth one</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"col-12 col-md-6 col-lg-3  text-center my-2\">
\t\t\t<h3 class=\"text-secondary\">GREEN VILLAGE</h3>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">An item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A second item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A third item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A fourth item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">And a fifth one</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"col-12 col-md-6 col-lg-3  text-center my-2\">
\t\t\t<h3 class=\"text-secondary\">NOUS CONTACTER</h3>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">An item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A second item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A third item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A fourth item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">And a fifth one</li>
\t\t\t</ul>
\t\t</section>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bgcat d-flex flex-column flex-lg-row align-items-center justify-content-center my-4\">
\t<i class=\"fa-solid mx-2 text-light fa-envelope display-6 mt-3 mb-2\"></i>
\t<h6 class=\"text-light mx-2\">Connecté À Nos Mises À Jour Par E-Mail</h6>
\t<div class=\"d-flex flex-column col-12 col-lg-5 mx-2\">
\t\t<form class=\"g-3 my-3 needs-validation\" novalidate>
\t\t\t<div class=\"d-flex flex-row justify-content-center mb-2\">
\t\t\t\t<input type=\"email\" class=\"form-control ms-4 me-2\" id=\"validationCustom01\" value=\"rentrer votre e-mail\" style=\"max-width: 350px;\" required>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tLooks good!
\t\t\t\t</div>
\t\t\t\t<div >
\t\t\t\t\t<button class=\"btn btn-outline-primary\" type=\"submit\">
\t\t\t\t\t\t<i class=\"fa-sharp fa-solid fa-paper-plane\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-check d-flex flex-row justify-content-center\">
\t\t\t\t<input class=\"form-check-input mx-2\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
\t\t\t\t<label class=\"form-check-label text-Catégorieslight\" for=\"invalidCheck\">
\t\t\t\t\tJ'accepte les termes et conditions et la politique de confidentialité
\t\t\t\t</label>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tveuillez accepter les termes
\t\t\t\t</div>
\t\t\t</div>


\t\t</form>
\t\t<div class=\"d-flex flex-row justify-content-center mb-3\">
\t\t\t<i class=\"fa-brands mx-2 text-light  display-6 fa-twitter\"></i>
\t\t\t<i class=\"fa-brands mx-2 text-light  display-6 fa-instagram\"></i>
\t\t\t<i class=\"fa-brands mx-2 text-light  display-6 fa-facebook\"></i>
\t\t\t<i class=\"fa-brands mx-2 text-light  display-6 fa-youtube\"></i>
\t\t</div>
\t</div>
</div>

<div class=\"container-fluid bg-light my-3\">
\t<div class=\"row\">
\t\t<section class=\"col-12 col-md-6 col-lg-3 text-center my-2\">
\t\t\t<h3 class=\"text-secondary\">A PROPOS DE NOUS</h3>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">An item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A second item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A third item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A fourth item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">And a fifth one</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"col-12 col-md-6 col-lg-3  text-center my-2\">
\t\t\t<h3 class=\"text-secondary\">PRODUITS</h3>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">An item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A second item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A third item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A fourth item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">And a fifth one</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"col-12 col-md-6 col-lg-3  text-center my-2\">
\t\t\t<h3 class=\"text-secondary\">GREEN VILLAGE</h3>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">An item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A second item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A third item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A fourth item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">And a fifth one</li>
\t\t\t</ul>
\t\t</section>
\t\t<section class=\"col-12 col-md-6 col-lg-3  text-center my-2\">
\t\t\t<h3 class=\"text-secondary\">NOUS CONTACTER</h3>
\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">An item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A second item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A third item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">A fourth item</li>
\t\t\t\t<li class=\"list-group-item bg-light text-secondary\">And a fifth one</li>
\t\t\t</ul>
\t\t</section>
\t</div>
</div>
", "_partials/_footer.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_footer.html.twig");
    }
}
