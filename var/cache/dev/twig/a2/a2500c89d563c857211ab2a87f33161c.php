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

/* _partials/_produitsPopulaires.html.twig */
class __TwigTemplate_8b34d65172868a0f0adc05b1873bb6d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_produitsPopulaires.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_produitsPopulaires.html.twig"));

        // line 1
        echo "<div>
\t<h2 class=\"my-4 text-center\">Produits Populaire</h2>
</div>
<div class=\"virtual-container-child my-5\">
\t<div class=\"virtual-wrap-slide-pop\">
\t\t<div
\t\t\tclass=\"virtual-slide-pop\" id=\"firstvirtualpop\">
\t\t\t";
        // line 9
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 26
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t";
        // line 46
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 63
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t";
        // line 83
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 100
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t";
        // line 120
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 137
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t";
        // line 157
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 174
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t";
        // line 194
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 211
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t";
        // line 231
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 248
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\" id=\"lastvirtualpop\">
\t\t\t";
        // line 268
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 285
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t";
        // line 305
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 322
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\" id=\"lastvirtualpop\">
\t\t\t";
        // line 342
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 359
        echo "\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/categories/xbox.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<button id=\"virtual-next-pop\">&#10095</button>
\t<button id=\"virtual-prev-pop\">&#10094</button>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_produitsPopulaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 362,  478 => 359,  462 => 345,  457 => 342,  438 => 325,  433 => 322,  417 => 308,  412 => 305,  393 => 288,  388 => 285,  372 => 271,  367 => 268,  348 => 251,  343 => 248,  327 => 234,  322 => 231,  303 => 214,  298 => 211,  282 => 197,  277 => 194,  258 => 177,  253 => 174,  237 => 160,  232 => 157,  213 => 140,  208 => 137,  192 => 123,  187 => 120,  168 => 103,  163 => 100,  147 => 86,  142 => 83,  123 => 66,  118 => 63,  102 => 49,  97 => 46,  78 => 29,  73 => 26,  57 => 12,  52 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
\t<h2 class=\"my-4 text-center\">Produits Populaire</h2>
</div>
<div class=\"virtual-container-child my-5\">
\t<div class=\"virtual-wrap-slide-pop\">
\t\t<div
\t\t\tclass=\"virtual-slide-pop\" id=\"firstvirtualpop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\" id=\"lastvirtualpop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"virtual-slide-pop\" id=\"lastvirtualpop\">
\t\t\t{# slide1 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# slide 2 #}
\t\t\t<div class=\"card mb-3\" style=\"max-width: 400px; min-width: 250px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('assets/media/categories/xbox.jpg')}}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">nom produit</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<button type=\"btn\" class=\"btn btn-outline-primary\">prix €</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<button id=\"virtual-next-pop\">&#10095</button>
\t<button id=\"virtual-prev-pop\">&#10094</button>
</div>
", "_partials/_produitsPopulaires.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_produitsPopulaires.html.twig");
    }
}
