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

/* panier/_form.html.twig */
class __TwigTemplate_6e55c9cc76906c8ce12468edbc6bb58c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/_form.html.twig"));

        // line 1
        echo "
\t\t\t\t\t";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 3, $this->source); })()), "nomination_adresse", [], "any", false, false, false, 3), 'row');
        echo "
\t\t\t\t\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 4, $this->source); })()), "nomination_adresse2", [], "any", false, false, false, 4), 'row');
        echo "
\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#ajoutAdresse\">Ajouter une adresse</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"col-sm-6 my-2\">
\t<div class=\"card h-100 my-2\">
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title\">Mode de paiement</h5>
\t\t\t";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "raisonSocial", [], "any", false, false, false, 15) == null)) {
            // line 16
            echo "\t\t\t\t<div class=\"d-flex flex-column flex-nowrap\">
\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t<p class=\"col-6\">paiement par carte:</p>
\t\t\t\t\t\t<a href=\"\" type=\"button\" class=\"btn btn-outline-primary col-4\">
\t\t\t\t\t\t\tAPI paiement</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 24, $this->source); })()), "moyen_paiement", [], "any", false, false, false, 24), 'row');
            echo "
\t\t\t";
        }
        // line 26
        echo "\t\t</div>
\t</div>
</div>
<div class=\"col-12 mb-5 mt-3\">
\t<div class=\"col col-2 mx-auto\">
\t\t<button type=\"submit\" class=\"btn btn-outline-primary\">Commander</button>
\t\t";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 32, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "panier/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  86 => 26,  80 => 24,  70 => 16,  68 => 15,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
\t\t\t\t\t{{form_start(commandeForm)}}
\t\t\t\t\t{{form_row(commandeForm.nomination_adresse)}}
\t\t\t\t\t{{form_row(commandeForm.nomination_adresse2)}}
\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#ajoutAdresse\">Ajouter une adresse</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"col-sm-6 my-2\">
\t<div class=\"card h-100 my-2\">
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title\">Mode de paiement</h5>
\t\t\t{% if user.raisonSocial == null %}
\t\t\t\t<div class=\"d-flex flex-column flex-nowrap\">
\t\t\t\t\t<div class=\"row ps-3\">
\t\t\t\t\t\t<p class=\"col-6\">paiement par carte:</p>
\t\t\t\t\t\t<a href=\"\" type=\"button\" class=\"btn btn-outline-primary col-4\">
\t\t\t\t\t\t\tAPI paiement</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t{{form_row(commandeForm.moyen_paiement)}}
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>
<div class=\"col-12 mb-5 mt-3\">
\t<div class=\"col col-2 mx-auto\">
\t\t<button type=\"submit\" class=\"btn btn-outline-primary\">Commander</button>
\t\t{{form_end(commandeForm, {'render_rest': false})}}
\t</div>
</div>
", "panier/_form.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/panier/_form.html.twig");
    }
}
