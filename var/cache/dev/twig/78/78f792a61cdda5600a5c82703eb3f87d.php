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

/* _partials/_cardsPromo.html.twig */
class __TwigTemplate_9f279eac4fb23c8de899218e302fb408 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_cardsPromo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_cardsPromo.html.twig"));

        // line 1
        echo "<div class=\"container-fluid row mt-5 pb-2\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 3
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 3) <= 3)) {
                // line 4
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 4, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 5
                    echo "\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["photo"], "refProduit", [], "any", false, false, false, 5) == $context["produit"])) {
                        // line 6
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["photo"], "majorPicture", [], "any", false, false, false, 6) == 1)) {
                            // line 7
                            echo "\t\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"card bg-light\" style=\"max-width: 540px; height: 100%\">
\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 11
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "src", [], "any", false, false, false, 11), "html", null, true);
                            echo "\" class=\"img-fluid rounded-start\" alt=\"promo_pic\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"max-height: 450px;\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                            // line 15
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "shortLibel", [], "any", false, false, false, 15), "html", null, true);
                            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text \">";
                            // line 16
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "longLibel", [], "any", false, false, false, 16), "html", null, true);
                            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">";
                            // line 17
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixHt", [], "any", false, false, false, 17), "html", null, true);
                            echo " €</button>
\t\t\t\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn btn-outline-primary mx-3\" href=\"";
                            // line 18
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit", ["slug" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
                            echo "\">Découvrire</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                        }
                        // line 25
                        echo "\t\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t";
            }
            // line 28
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_cardsPromo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  111 => 28,  108 => 27,  102 => 26,  99 => 25,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  70 => 11,  64 => 7,  61 => 6,  58 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid row mt-5 pb-2\">
\t{% for produit in produits %}
\t\t{% if produit.id <= 3  %}
\t\t\t{% for photo in photos %}
\t\t\t\t{% if photo.refProduit == produit %}
\t\t\t\t\t{% if photo.majorPicture == 1 %}
\t\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"card bg-light\" style=\"max-width: 540px; height: 100%\">
\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{photo.src}}\" class=\"img-fluid rounded-start\" alt=\"promo_pic\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"max-height: 450px;\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{produit.shortLibel}}</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text \">{{produit.longLibel}}</p>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">{{produit.prixHt}} €</button>
\t\t\t\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn btn-outline-primary mx-3\" href=\"{{ path('produit', {slug: produit.slug}) }}\">Découvrire</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t{% endif %}
\t{% endfor %}
</div>
", "_partials/_cardsPromo.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_cardsPromo.html.twig");
    }
}
