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

/* _partials/_bandeauCategories.html.twig */
class __TwigTemplate_cc5e6c5757a9672845fc7be3d8b644f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_bandeauCategories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_bandeauCategories.html.twig"));

        // line 1
        echo "<div class=\"bgcat rounded\">

\t<div>
\t\t<h2 class=\"my-4 text-center\">Catégories</h2>
\t</div>
\t<div class=\"d-flex flex-row flex-wrap justify-content-evenly\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 8
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "sousCat", [], "any", false, false, false, 8) == null)) {
                // line 9
                echo "\t\t\t\t<div class=\" mb-5\">
\t\t\t\t\t<a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 10)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img class=\"img-fluid w-100 rounded-circle\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 11)), "html", null, true);
                echo "\" alt=\"cat\">
\t\t\t\t\t\t<p class=\"text-center\">";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomination", [], "any", false, false, false, 12), "html", null, true);
                echo "</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
            }
            // line 16
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_bandeauCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  76 => 16,  69 => 12,  65 => 11,  61 => 10,  58 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bgcat rounded\">

\t<div>
\t\t<h2 class=\"my-4 text-center\">Catégories</h2>
\t</div>
\t<div class=\"d-flex flex-row flex-wrap justify-content-evenly\">
\t\t{% for categorie in categories %}
\t\t\t{% if categorie.sousCat == null %}
\t\t\t\t<div class=\" mb-5\">
\t\t\t\t\t<a href=\"{{ path('categorie', {slug: categorie.slug}) }}\">
\t\t\t\t\t\t<img class=\"img-fluid w-100 rounded-circle\" src=\"{{asset(categorie.image)}}\" alt=\"cat\">
\t\t\t\t\t\t<p class=\"text-center\">{{categorie.nomination}}</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
</div>
", "_partials/_bandeauCategories.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_bandeauCategories.html.twig");
    }
}
