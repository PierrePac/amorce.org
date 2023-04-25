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

/* admin/produits/index.html.twig */
class __TwigTemplate_3c9e230f85215e04daff4101256b73fd extends Template
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
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "admin/produits/index.html.twig", 1);
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

        echo "Administration des produits
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
        echo "\t<div class=\"container-fluid col col-9 mx-auto\">
\t\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_add");
        echo "\" class=\"btn btn-outline-primary mx-2 my-2\">Rajouter un produit</a>
\t\t<div class=\"accordion mb-5\" id=\"AccordeonLeon\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 11
            echo "\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t<h2 class=\"accordion-header\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 13), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "shortLibel", [], "any", false, false, false, 14), "html", null, true);
            echo "
\t\t\t\t\t\t</button>

\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\" data-bs-parent=\"#AccordeonLeon\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "longLibel", [], "any", false, false, false, 20), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-row justify-content-end mx-3 my-3\">
\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success mx-2\">Modifier le produit</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger mx-2\">Supprimer le produit</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/produits/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 30,  138 => 24,  134 => 23,  128 => 20,  121 => 18,  114 => 14,  108 => 13,  104 => 12,  101 => 11,  97 => 10,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Administration des produits
{% endblock %}

{% block body %}
\t<div class=\"container-fluid col col-9 mx-auto\">
\t\t<a href=\"{{ path('admin_produits_add') }}\" class=\"btn btn-outline-primary mx-2 my-2\">Rajouter un produit</a>
\t\t<div class=\"accordion mb-5\" id=\"AccordeonLeon\">
\t\t\t{% for produit in produits %}
\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t<h2 class=\"accordion-header\" id=\"{{produit.id}}\">
\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{produit.slug}}\" aria-expanded=\"true\" aria-controls=\"{{produit.slug}}\">
\t\t\t\t\t\t\t{{produit.shortLibel}}
\t\t\t\t\t\t</button>

\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"{{produit.slug}}\" class=\"accordion-collapse collapse\" aria-labelledby=\"{{produit.id}}\" data-bs-parent=\"#AccordeonLeon\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t{{produit.longLibel}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex flex-row justify-content-end mx-3 my-3\">
\t\t\t\t\t\t\t<a href=\"{{ path('admin_produits_edit', {id: produit.id}) }}\" class=\"btn btn-outline-success mx-2\">Modifier le produit</a>
\t\t\t\t\t\t\t<a href=\"{{ path('admin_produits_delete', {id: produit.id}) }}\" class=\"btn btn-outline-danger mx-2\">Supprimer le produit</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% endfor %}
\t\t</div>
\t</div>


{% endblock %}
", "admin/produits/index.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/admin/produits/index.html.twig");
    }
}
