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

/* _partials/_marques.html.twig */
class __TwigTemplate_ac9f014d84fb0899439d5ede4b663afc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_marques.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_marques.html.twig"));

        // line 1
        echo "<div>
\t<h2 class=\"my-4 text-center\">Les marques partenaires</h2>
</div>
<div>
<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/marques/marque_1.jpg"), "html", null, true);
        echo "\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/marques/marque_2.jpg"), "html", null, true);
        echo "\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/marques/marque_3.jpg"), "html", null, true);
        echo "\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/marques/marque_4.jpg"), "html", null, true);
        echo "\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/marques/marque_5.jpg"), "html", null, true);
        echo "\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/marques/marque_6.jpg"), "html", null, true);
        echo "\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/marques/marque_7.jpg"), "html", null, true);
        echo "\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_marques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
\t<h2 class=\"my-4 text-center\">Les marques partenaires</h2>
</div>
<div>
<img src=\"{{asset('assets/media/marques/marque_1.jpg')}}\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"{{asset('assets/media/marques/marque_2.jpg')}}\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"{{asset('assets/media/marques/marque_3.jpg')}}\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"{{asset('assets/media/marques/marque_4.jpg')}}\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"{{asset('assets/media/marques/marque_5.jpg')}}\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"{{asset('assets/media/marques/marque_6.jpg')}}\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
<img src=\"{{asset('assets/media/marques/marque_7.jpg')}}\" alt=\"marque\" class=\"img-fluid mx-3 my-2 rounded\">
</div>
", "_partials/_marques.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_marques.html.twig");
    }
}
