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

/* panier/_formAdresse.html.twig */
class __TwigTemplate_4d4dc8a6f3743c6f80299db39563eff3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/_formAdresse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/_formAdresse.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"ajoutAdresse\" tabindex=\"-1\" aria-labelledby=\"ajoutAdresseLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"ajoutAdresseLabel\">Ajouter une adresse</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajoutAdresseForm"]) || array_key_exists("ajoutAdresseForm", $context) ? $context["ajoutAdresseForm"] : (function () { throw new RuntimeError('Variable "ajoutAdresseForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajoutAdresseForm"]) || array_key_exists("ajoutAdresseForm", $context) ? $context["ajoutAdresseForm"] : (function () { throw new RuntimeError('Variable "ajoutAdresseForm" does not exist.', 10, $this->source); })()), "nomination_adresse", [], "any", false, false, false, 10), 'row');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajoutAdresseForm"]) || array_key_exists("ajoutAdresseForm", $context) ? $context["ajoutAdresseForm"] : (function () { throw new RuntimeError('Variable "ajoutAdresseForm" does not exist.', 11, $this->source); })()), "adresse", [], "any", false, false, false, 11), 'row');
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajoutAdresseForm"]) || array_key_exists("ajoutAdresseForm", $context) ? $context["ajoutAdresseForm"] : (function () { throw new RuntimeError('Variable "ajoutAdresseForm" does not exist.', 12, $this->source); })()), "ville", [], "any", false, false, false, 12), 'row');
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajoutAdresseForm"]) || array_key_exists("ajoutAdresseForm", $context) ? $context["ajoutAdresseForm"] : (function () { throw new RuntimeError('Variable "ajoutAdresseForm" does not exist.', 13, $this->source); })()), "cp", [], "any", false, false, false, 13), 'row');
        echo "
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary\">Ajouter l'adresse</button>
\t\t\t\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajoutAdresseForm"]) || array_key_exists("ajoutAdresseForm", $context) ? $context["ajoutAdresseForm"] : (function () { throw new RuntimeError('Variable "ajoutAdresseForm" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "panier/_formAdresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"ajoutAdresse\" tabindex=\"-1\" aria-labelledby=\"ajoutAdresseLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"ajoutAdresseLabel\">Ajouter une adresse</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t{{form_start(ajoutAdresseForm)}}
\t\t\t\t{{form_row(ajoutAdresseForm.nomination_adresse)}}
\t\t\t\t{{form_row(ajoutAdresseForm.adresse)}}
\t\t\t\t{{form_row(ajoutAdresseForm.ville)}}
\t\t\t\t{{form_row(ajoutAdresseForm.cp)}}
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary\">Ajouter l'adresse</button>
\t\t\t\t{{form_end(ajoutAdresseForm)}}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "panier/_formAdresse.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/panier/_formAdresse.html.twig");
    }
}
