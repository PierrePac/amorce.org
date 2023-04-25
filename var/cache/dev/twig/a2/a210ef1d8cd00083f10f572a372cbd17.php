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

/* admin/produits/_form.html.twig */
class __TwigTemplate_8b6bb33576b12937d261ee75ff9b62e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/_form.html.twig"));

        // line 1
        echo "<div class=\"container-fluid col col-9 mx-auto\">
\t<div>
\t\t";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
\t\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 4, $this->source); })()), "refProduit", [], "any", false, false, false, 4), 'row');
        echo "
\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 5, $this->source); })()), "shortLibel", [], "any", false, false, false, 5), 'row');
        echo "
\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 6, $this->source); })()), "longLibel", [], "any", false, false, false, 6), 'row');
        echo "
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 7, $this->source); })()), "prixHt", [], "any", false, false, false, 7), 'row');
        echo "
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 8, $this->source); })()), "idCategorie", [], "any", false, false, false, 8), 'row');
        echo "
\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 9, $this->source); })()), "images", [], "any", false, false, false, 9), 'row');
        echo "
\t\t<button type=\"submit\" class=\"btn btn-outline-primary\">";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 10, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 11, $this->source); })()), 'form_end');
        echo "
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/produits/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid col col-9 mx-auto\">
\t<div>
\t\t{{form_start(produitForm)}}
\t\t{{form_row(produitForm.refProduit)}}
\t\t{{form_row(produitForm.shortLibel)}}
\t\t{{form_row(produitForm.longLibel)}}
\t\t{{form_row(produitForm.prixHt)}}
\t\t{{form_row(produitForm.idCategorie)}}
\t\t{{form_row(produitForm.images)}}
\t\t<button type=\"submit\" class=\"btn btn-outline-primary\">{{button_label|default('Ajouter')}}</button>
\t\t{{form_end(produitForm)}}
\t</div>
</div>
", "admin/produits/_form.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/admin/produits/_form.html.twig");
    }
}
