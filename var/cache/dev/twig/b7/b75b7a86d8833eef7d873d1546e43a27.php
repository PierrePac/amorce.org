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

/* _partials/_nav.html.twig */
class __TwigTemplate_165cf05295254fcf7409c64e5e968db6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        // line 1
        echo "<div class=\"container-fluid bg-light mx-0 d-flex flex-row flex-wrap justify-content-around justify-content-lg-between\">
\t<div class=\"w-25 order-0\">
\t\t<img class=\"w-100 rounded\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/logo/logo_resized.png"), "html", null, true);
        echo "\" alt=\"Logo\">
\t</div>
\t<div class=\"flex-grow order-3 order-lg-2 d-flex justify-content-center flex-grow-1 align-items-center\">
\t\t<nav class=\"navbar navbar-light bg-light w-100 mx-lg-5\">
\t\t\t<form class=\"d-flex flex-row flex-grow-1\">
\t\t\t\t<select class=\"form-select btn btn-outline-success px-0\" aria-label=\"Default select example\">
\t\t\t\t\t<option selected>Catégories</option>
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 11
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "sousCat", [], "any", false, false, false, 11) == null)) {
                // line 12
                echo "\t\t\t\t\t\t\t<option>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomination", [], "any", false, false, false, 13), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomination", [], "any", false, false, false, 13), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</select>
\t\t\t\t<input class=\"form-control mr-sm-2 mx-2\" type=\"search\" placeholder=\"Search\" aria-bs-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0 mx-2\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t</nav>
\t</div>
\t<div class=\"order-2 order-lg-3 d-flex justify-content-center align-items-center\">
\t\t";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "\t\t\t";
            // line 26
            echo "\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fa-solid fa-user text-primary mx-2 display-6\"></i>
\t\t\t</a>
\t\t\t";
            // line 30
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t<i class=\"fa-solid fa-right-from-bracket mx-2 display-6\"></i>
\t\t\t</a>
\t\t";
        } else {
            // line 34
            echo "\t\t\t";
            // line 35
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t<i class=\"fa-solid fa-right-to-bracket text-primary mx-2 display-6\"></i>
\t\t\t</a>
\t\t\t";
            // line 39
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
\t\t\t\t<i class=\"fa-solid fa-user-plus text-primary mx-2 display-6\"></i>
\t\t\t</a>
\t\t";
        }
        // line 43
        echo "\t\t";
        // line 44
        echo "\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo "\">
\t\t\t<i class=\"fa-solid fa-cart-shopping text-primary mx-2 display-6\"></i>
\t\t</a>
\t</div>
</div>
<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
\t<div class=\"container-fluid d-flex flex-column justify-content-evenly flex-md-row flex-nowrap\">
\t\t<div class=\"btn-group\">
\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\"><a class=\"text-decoration-none\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Menu</a></button>
\t\t\t<button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<span class=\"visually-hidden\">Toggle Dropdown</span>
\t\t\t</button>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 58
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "sousCat", [], "any", false, false, false, 58) == null)) {
                // line 59
                echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomination", [], "any", false, false, false, 60), "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t";
            }
            // line 64
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"d-flex flex-row flex-wrap \">
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2\" aria-current=\"page\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2 disabled\" aria-current=\"page\" href=\"#\">Promotions</a>
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2 disabled\" aria-current=\"page\" href=\"#\">Nouveautés</a>
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2 disabled\" aria-current=\"page\" href=\"#\">Les Marques</a>
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2 disabled\" aria-current=\"page\" href=\"#\">QuiSommes-Nous ?</a>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 69,  173 => 65,  167 => 64,  158 => 60,  155 => 59,  152 => 58,  148 => 57,  140 => 52,  128 => 44,  126 => 43,  118 => 39,  111 => 35,  109 => 34,  101 => 30,  96 => 26,  94 => 25,  92 => 24,  83 => 17,  77 => 16,  67 => 13,  64 => 12,  61 => 11,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-light mx-0 d-flex flex-row flex-wrap justify-content-around justify-content-lg-between\">
\t<div class=\"w-25 order-0\">
\t\t<img class=\"w-100 rounded\" src=\"{{asset('assets/media/logo/logo_resized.png')}}\" alt=\"Logo\">
\t</div>
\t<div class=\"flex-grow order-3 order-lg-2 d-flex justify-content-center flex-grow-1 align-items-center\">
\t\t<nav class=\"navbar navbar-light bg-light w-100 mx-lg-5\">
\t\t\t<form class=\"d-flex flex-row flex-grow-1\">
\t\t\t\t<select class=\"form-select btn btn-outline-success px-0\" aria-label=\"Default select example\">
\t\t\t\t\t<option selected>Catégories</option>
\t\t\t\t\t{% for categorie in categories %}
\t\t\t\t\t\t{% if categorie.sousCat == null %}
\t\t\t\t\t\t\t<option>
\t\t\t\t\t\t\t\t<a href=\"{{ path('categorie', {slug: categorie.slug}) }}\" value=\"{{categorie.nomination}}\">{{categorie.nomination}}</a>
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t\t<input class=\"form-control mr-sm-2 mx-2\" type=\"search\" placeholder=\"Search\" aria-bs-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-success my-2 my-sm-0 mx-2\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t</nav>
\t</div>
\t<div class=\"order-2 order-lg-3 d-flex justify-content-center align-items-center\">
\t\t{% if app.user %}
\t\t\t{# mon compte #}
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fa-solid fa-user text-primary mx-2 display-6\"></i>
\t\t\t</a>
\t\t\t{# me déconnecter #}
\t\t\t<a href=\"{{ path('app_logout') }}\">
\t\t\t\t<i class=\"fa-solid fa-right-from-bracket mx-2 display-6\"></i>
\t\t\t</a>
\t\t{% else %}
\t\t\t{# connexion #}
\t\t\t<a href=\"{{ path('app_login') }}\">
\t\t\t\t<i class=\"fa-solid fa-right-to-bracket text-primary mx-2 display-6\"></i>
\t\t\t</a>
\t\t\t{# M'inscrire #}
\t\t\t<a href=\"{{ path('app_register') }}\">
\t\t\t\t<i class=\"fa-solid fa-user-plus text-primary mx-2 display-6\"></i>
\t\t\t</a>
\t\t{% endif %}
\t\t{# panier #}
\t\t<a href=\"{{path('panier_index')}}\">
\t\t\t<i class=\"fa-solid fa-cart-shopping text-primary mx-2 display-6\"></i>
\t\t</a>
\t</div>
</div>
<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
\t<div class=\"container-fluid d-flex flex-column justify-content-evenly flex-md-row flex-nowrap\">
\t\t<div class=\"btn-group\">
\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\"><a class=\"text-decoration-none\" href=\"{{ path('accueil') }}\">Menu</a></button>
\t\t\t<button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<span class=\"visually-hidden\">Toggle Dropdown</span>
\t\t\t</button>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t{% for categorie in categories %}
\t\t\t\t{% if categorie.sousCat == null %}
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('categorie', { slug: categorie.slug }) }}\">{{categorie.nomination}}</a>
\t\t\t\t</li>
\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"d-flex flex-row flex-wrap \">
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2\" aria-current=\"page\" href=\"{{ path('accueil') }}\">Accueil</a>
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2 disabled\" aria-current=\"page\" href=\"#\">Promotions</a>
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2 disabled\" aria-current=\"page\" href=\"#\">Nouveautés</a>
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2 disabled\" aria-current=\"page\" href=\"#\">Les Marques</a>
\t\t\t<a class=\"btn btn-outline-primary mx-2 mx-md-4 my-2 disabled\" aria-current=\"page\" href=\"#\">QuiSommes-Nous ?</a>
\t\t</div>
\t</div>
</nav>
", "_partials/_nav.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_nav.html.twig");
    }
}
