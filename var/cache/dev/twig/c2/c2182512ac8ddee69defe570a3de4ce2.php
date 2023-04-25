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

/* catalogue/accueil.html.twig */
class __TwigTemplate_6b8017bb774fa4cfe97ab8d43d9345c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/accueil.html.twig", 1);
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

        echo "Accueil
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
        echo "
\t";
        // line 8
        $this->loadTemplate("_partials/_carousel.html.twig", "catalogue/accueil.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        $this->loadTemplate("_partials/_cardsPromo.html.twig", "catalogue/accueil.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("_partials/_shipmentInfo.html.twig", "catalogue/accueil.html.twig", 10)->display($context);
        // line 11
        echo "    ";
        $this->loadTemplate("_partials/_produitsPhares.html.twig", "catalogue/accueil.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("_partials/_baniereLivraison.html.twig", "catalogue/accueil.html.twig", 12)->display($context);
        // line 13
        echo "    
    ";
        // line 15
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\NavController::bandeau"));
        echo "

\t";
        // line 17
        $this->loadTemplate("_partials/_produitsPopulaires.html.twig", "catalogue/accueil.html.twig", 17)->display($context);
        // line 18
        echo "    ";
        $this->loadTemplate("_partials/_temoignageClient.html.twig", "catalogue/accueil.html.twig", 18)->display($context);
        // line 19
        echo "    ";
        $this->loadTemplate("_partials/_marques.html.twig", "catalogue/accueil.html.twig", 19)->display($context);
        // line 20
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 20,  120 => 19,  117 => 18,  115 => 17,  109 => 15,  106 => 13,  103 => 12,  100 => 11,  97 => 10,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}

\t{% include '_partials/_carousel.html.twig' %}
    {% include '_partials/_cardsPromo.html.twig' %}
    {% include '_partials/_shipmentInfo.html.twig' %}
    {% include '_partials/_produitsPhares.html.twig' %}
    {% include '_partials/_baniereLivraison.html.twig' %}
    
    {# {% include '_partials/_bandeauCategories.html.twig' %} #}
    {{ render(controller('App\\\\Controller\\\\NavController::bandeau' )) }}

\t{% include '_partials/_produitsPopulaires.html.twig' %}
    {% include '_partials/_temoignageClient.html.twig' %}
    {% include '_partials/_marques.html.twig' %}

{% endblock %}
", "catalogue/accueil.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/catalogue/accueil.html.twig");
    }
}
