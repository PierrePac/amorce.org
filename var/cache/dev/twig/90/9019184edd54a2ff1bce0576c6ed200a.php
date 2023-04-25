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

/* panier/validation.html.twig */
class __TwigTemplate_c27fa9f68cf95e3e32bd008931a95ef3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/validation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/validation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/validation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Valider votre commande
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container col col-9 mx-auto\">
\t\t<section class=\"p-3\">
\t\t\t<h1>votre commande</h1>
\t\t</section>
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 22
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 23), "shortLibel", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 24), "prixHt", [], "any", false, false, false, 24), "html", null, true);
            echo "
\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 27) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 27), "prixHt", [], "any", false, false, false, 27)), "html", null, true);
            echo "
\t\t\t\t\t\t\t€</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\" class=\"text-center\">Votre panier est vide</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</tbody>
\t\t\t<tfoot>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">Total</td>
\t\t\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t€</td>
\t\t\t\t</tr>
\t\t\t</tfoot>
\t\t</table>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 my-2\">
\t\t\t\t<div class=\"card h-100 my-2\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Information personnelles</h5>
\t\t\t\t\t\t<div class=\"d-flex flex-column flex-nowrap\">
\t\t\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-4\">Nom:</p>
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-6\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-4\">Prénom</p>
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-6\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-4\">Téléphone:</p>
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-6\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "telephone", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-4\">E-mail:</p>
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-6\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 my-2\">
\t\t\t\t<div class=\"card h-100 my-2\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Coordonnées</h5>
\t\t\t\t\t\t<div class=\"container-fluid col col-9 mx-auto\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("panier/_formAdresse.html.twig", "panier/validation.html.twig", 77)->display($context);
        // line 78
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("panier/_form.html.twig", "panier/validation.html.twig", 78)->display($context);
        // line 79
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 79,  205 => 78,  202 => 77,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  150 => 39,  144 => 35,  135 => 31,  126 => 27,  122 => 26,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Valider votre commande
{% endblock %}

{% block body %}
\t<div class=\"container col col-9 mx-auto\">
\t\t<section class=\"p-3\">
\t\t\t<h1>votre commande</h1>
\t\t</section>
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for element in dataPanier %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ element.produit.shortLibel }}</td>
\t\t\t\t\t\t<td>{{ element.produit.prixHt }}
\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t<td>{{ element.quantite }}</td>
\t\t\t\t\t\t<td>{{ element.quantite * element.produit.prixHt }}
\t\t\t\t\t\t\t€</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\" class=\"text-center\">Votre panier est vide</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t\t<tfoot>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">Total</td>
\t\t\t\t\t<td>{{ total }}
\t\t\t\t\t\t€</td>
\t\t\t\t</tr>
\t\t\t</tfoot>
\t\t</table>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 my-2\">
\t\t\t\t<div class=\"card h-100 my-2\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Information personnelles</h5>
\t\t\t\t\t\t<div class=\"d-flex flex-column flex-nowrap\">
\t\t\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-4\">Nom:</p>
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-6\">{{user.nom}}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-4\">Prénom</p>
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-6\">{{user.prenom}}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-4\">Téléphone:</p>
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-6\">{{user.telephone}}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-4\">E-mail:</p>
\t\t\t\t\t\t\t\t<p class=\"col-6 col-lg-6\">{{user.email}}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 my-2\">
\t\t\t\t<div class=\"card h-100 my-2\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Coordonnées</h5>
\t\t\t\t\t\t<div class=\"container-fluid col col-9 mx-auto\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{# modal Ajout d'adresse#}
\t\t\t\t\t\t\t\t{% include \"panier/_formAdresse.html.twig\" %}
\t\t\t\t\t\t\t\t{% include \"panier/_form.html.twig\" %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}
", "panier/validation.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/panier/validation.html.twig");
    }
}
