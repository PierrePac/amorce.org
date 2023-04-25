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

/* _partials/_ficheProduit.html.twig */
class __TwigTemplate_a403aaf04803965f2f8b9826513d7f7d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_ficheProduit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_ficheProduit.html.twig"));

        // line 1
        echo "
<div class=\"row\">
\t<div class=\"col-12 col-md-6\">
\t\t<div id=\"carouselProduit\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
\t\t\t</div>
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 14
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["photo"], "refProduit", [], "any", false, false, false, 14) == (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 14, $this->source); })()))) {
                // line 15
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["photo"], "majorPicture", [], "any", false, false, false, 15) == 1)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["photo"], "src", [], "any", false, false, false, 17)), "html", null, true);
                    echo "\" class=\"d-block img-fluid mx-auto\" style=\"max-height: 400px;\" alt=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 17, $this->source); })()), "shortLibel", [], "any", false, false, false, 17), "html", null, true);
                    echo ">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["photo"], "src", [], "any", false, false, false, 21)), "html", null, true);
                    echo "\" class=\"d-block img-fluid mx-auto\" style=\"max-height: 400px;\" alt=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 21, $this->source); })()), "shortLibel", [], "any", false, false, false, 21), "html", null, true);
                    echo ">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t</div>
\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t</button>
\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t</button>
\t\t</div>
\t</div>
\t<div class=\"col-12 col-md-6\">
\t\t<h2>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 38, $this->source); })()), "shortLibel", [], "any", false, false, false, 38), "html", null, true);
        echo "</h2>
\t\t<p>R";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 39, $this->source); })()), "longLibel", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
\t\t<p class=\"text-primary\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 40, $this->source); })()), "prixHt", [], "any", false, false, false, 40), "html", null, true);
        echo " €</p>
\t\t<form action=\"\">
\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t<select class=\"form-select\" id=\"inputGroupSelect02\" style=\"max-width: 150px;\">
\t\t\t\t\t<option selected value=\"0\">Quantité</option>
\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t</select>
\t\t\t\t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-outline-primary\">Ajouter au panier</a>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_ficheProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 55,  120 => 40,  116 => 39,  112 => 38,  98 => 26,  92 => 25,  89 => 24,  81 => 21,  78 => 20,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"row\">
\t<div class=\"col-12 col-md-6\">
\t\t<div id=\"carouselProduit\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
\t\t\t</div>
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t{% for photo in photos %}
\t\t\t\t\t{% if photo.refProduit == produit %}
\t\t\t\t\t\t{% if photo.majorPicture == 1 %}
\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t<img src=\"{{asset(photo.src)}}\" class=\"d-block img-fluid mx-auto\" style=\"max-height: 400px;\" alt={{produit.shortLibel}}>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<img src=\"{{asset(photo.src)}}\" class=\"d-block img-fluid mx-auto\" style=\"max-height: 400px;\" alt={{produit.shortLibel}}>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t</button>
\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselProduit\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t</button>
\t\t</div>
\t</div>
\t<div class=\"col-12 col-md-6\">
\t\t<h2>{{produit.shortLibel}}</h2>
\t\t<p>R{{produit.longLibel}}</p>
\t\t<p class=\"text-primary\">{{produit.prixHt}} €</p>
\t\t<form action=\"\">
\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t<select class=\"form-select\" id=\"inputGroupSelect02\" style=\"max-width: 150px;\">
\t\t\t\t\t<option selected value=\"0\">Quantité</option>
\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t</select>
\t\t\t\t<a href=\"{{ path('panier_add', {id: produit.id }) }}\" type=\"submit\" class=\"btn btn-outline-primary\">Ajouter au panier</a>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
", "_partials/_ficheProduit.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_ficheProduit.html.twig");
    }
}
