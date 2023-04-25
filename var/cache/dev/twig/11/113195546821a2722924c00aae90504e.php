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

/* _partials/_catalogue.html.twig */
class __TwigTemplate_aa399693d9bf11fdf2e5dffe69e3f885 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_catalogue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_catalogue.html.twig"));

        // line 1
        echo "<div class=\"row\">
\t<div class=\"col-12 d-lg-none d-flex flex-row flex-wrap\">
\t\t";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 3, $this->source); })()), "sousCat", [], "any", false, false, false, 3) == null)) {
            // line 4
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 5
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "sousCat", [], "any", false, false, false, 5) == (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 5, $this->source); })()))) {
                    // line 6
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 6)]), "html", null, true);
                    echo "\" class=\"link-primary mx-2 my-3\" aria-current=\"page\">
\t\t\t\t\t\t";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nomination", [], "any", false, false, false, 7), "html", null, true);
                    echo "
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 10
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t";
        } else {
            // line 12
            echo "
\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 14
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "sousCat", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 14, $this->source); })()), "sousCat", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 15)]), "html", null, true);
                    echo "\" class=\"link-primary mx-2 my-3\" aria-current=\"page\">
\t\t\t\t\t\t";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nomination", [], "any", false, false, false, 16), "html", null, true);
                    echo "
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 19
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-3 d-none d-lg-block\">
\t\t<div class=\"d-flex flex-column flex-shrink-0 p-3  bg-light\" style=\"width: 280px;\">
\t\t\t<a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-decoration-none\">
\t\t\t\t<svg class=\"bi me-2\" width=\"40\" height=\"32\"></svg>
\t\t\t\t";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 28, $this->source); })()), "sousCat", [], "any", false, false, false, 28) == null)) {
            // line 29
            echo "\t\t\t\t\t<span class=\"fs-4\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 29, $this->source); })()), "nomination", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
\t\t\t\t</a>
\t\t\t\t<hr>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 34
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "sousCat", [], "any", false, false, false, 34) == (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 34, $this->source); })()))) {
                    // line 35
                    echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\" class=\"nav-link\" aria-current=\"page\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"></svg>
\t\t\t\t\t\t\t\t\t";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nomination", [], "any", false, false, false, 38), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t<span class=\"fs-4\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 44, $this->source); })()), "sousCat", [], "any", false, false, false, 44), "nomination", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
\t\t\t\t</a>
\t\t\t\t<hr>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 49
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "sousCat", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 49, $this->source); })()), "sousCat", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 51)]), "html", null, true);
                    echo "\" class=\"nav-link\" aria-current=\"page\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"></svg>
\t\t\t\t\t\t\t\t\t";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nomination", [], "any", false, false, false, 53), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t";
        }
        // line 59
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-12 col-lg-9 mt-5\">
\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\">
\t\t\t";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 64, $this->source); })()), "sousCat", [], "any", false, false, false, 64) == null)) {
            // line 65
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 65, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 66
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["cat"], "sousCat", [], "any", false, false, false, 66) == (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 66, $this->source); })()))) {
                    // line 67
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 67, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                        // line 68
                        echo "\t\t\t\t\t\t\t";
                        if (($context["cat"] == twig_get_attribute($this->env, $this->source, $context["produit"], "idCategorie", [], "any", false, false, false, 68))) {
                            // line 69
                            echo "\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 69, $this->source); })()));
                            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                                // line 70
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($context["produit"] == twig_get_attribute($this->env, $this->source, $context["photo"], "refProduit", [], "any", false, false, false, 70))) {
                                    // line 71
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, $context["photo"], "majorPicture", [], "any", false, false, false, 71) == 1)) {
                                        // line 72
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                        // line 74
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["photo"], "src", [], "any", false, false, false, 74)), "html", null, true);
                                        echo "\" class=\"card-img-top\" alt=\"produit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                                        // line 76
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "shortLibel", [], "any", false, false, false, 76), "html", null, true);
                                        echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-end bg-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p >";
                                        // line 79
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixHt", [], "any", false, false, false, 79), "html", null, true);
                                        echo " €</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 81
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit", ["slug" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 81)]), "html", null, true);
                                        echo "\" class=\"btn btn-outline-primary stretched-link\">Découvrire</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 86
                                    echo "\t\t\t\t\t\t\t\t\t";
                                }
                                // line 87
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 88
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 91
                    echo "\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 94, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 95
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["produit"], "idCategorie", [], "any", false, false, false, 95) == (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 95, $this->source); })()))) {
                    // line 96
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 96, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                        // line 97
                        echo "\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["photo"], "refProduit", [], "any", false, false, false, 97) == $context["produit"])) {
                            // line 98
                            echo "\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["photo"], "majorPicture", [], "any", false, false, false, 98) == 1)) {
                                // line 99
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                // line 101
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["photo"], "src", [], "any", false, false, false, 101)), "html", null, true);
                                echo "\" class=\"card-img-top\" alt=\"produit\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                                // line 103
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "shortLibel", [], "any", false, false, false, 103), "html", null, true);
                                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-end bg-white\">
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 106
                                echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 106));
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<p >";
                                // line 107
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixHt", [], "any", false, false, false, 107), "html", null, true);
                                echo " €</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 108
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit", ["slug" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 108)]), "html", null, true);
                                echo "\" class=\"btn btn-outline-primary stretched-link\">Découvrire</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 113
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 114
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    echo "\t\t\t\t\t";
                }
                // line 116
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "\t\t\t";
        }
        // line 118
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 118,  361 => 117,  355 => 116,  352 => 115,  346 => 114,  343 => 113,  335 => 108,  331 => 107,  327 => 106,  321 => 103,  316 => 101,  312 => 99,  309 => 98,  306 => 97,  301 => 96,  298 => 95,  293 => 94,  290 => 93,  284 => 92,  281 => 91,  278 => 90,  272 => 89,  269 => 88,  263 => 87,  260 => 86,  252 => 81,  247 => 79,  241 => 76,  236 => 74,  232 => 72,  229 => 71,  226 => 70,  221 => 69,  218 => 68,  213 => 67,  210 => 66,  205 => 65,  203 => 64,  196 => 59,  193 => 58,  187 => 57,  180 => 53,  175 => 51,  172 => 50,  169 => 49,  165 => 48,  157 => 44,  154 => 43,  148 => 42,  141 => 38,  136 => 36,  133 => 35,  130 => 34,  126 => 33,  118 => 29,  116 => 28,  107 => 21,  104 => 20,  98 => 19,  92 => 16,  87 => 15,  84 => 14,  80 => 13,  77 => 12,  74 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
\t<div class=\"col-12 d-lg-none d-flex flex-row flex-wrap\">
\t\t{% if categorie.sousCat == null %}
\t\t\t{% for cat in categories %}
\t\t\t\t{% if cat.sousCat == categorie %}
\t\t\t\t\t<a href=\"{{ path('categorie', {slug: cat.slug}) }}\" class=\"link-primary mx-2 my-3\" aria-current=\"page\">
\t\t\t\t\t\t{{cat.nomination}}
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t{% else %}

\t\t\t{% for cat in categories %}
\t\t\t\t{% if cat.sousCat == categorie.sousCat %}
\t\t\t\t\t<a href=\"{{ path('categorie', {slug: cat.slug}) }}\" class=\"link-primary mx-2 my-3\" aria-current=\"page\">
\t\t\t\t\t\t{{cat.nomination}}
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t{% endif %}
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-3 d-none d-lg-block\">
\t\t<div class=\"d-flex flex-column flex-shrink-0 p-3  bg-light\" style=\"width: 280px;\">
\t\t\t<a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-decoration-none\">
\t\t\t\t<svg class=\"bi me-2\" width=\"40\" height=\"32\"></svg>
\t\t\t\t{% if categorie.sousCat == null %}
\t\t\t\t\t<span class=\"fs-4\">{{categorie.nomination}}</span>
\t\t\t\t</a>
\t\t\t\t<hr>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t{% for cat in categories %}
\t\t\t\t\t\t{% if cat.sousCat == categorie %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('categorie', {slug: cat.slug}) }}\" class=\"nav-link\" aria-current=\"page\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"></svg>
\t\t\t\t\t\t\t\t\t{{cat.nomination}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<span class=\"fs-4\">{{categorie.sousCat.nomination}}</span>
\t\t\t\t</a>
\t\t\t\t<hr>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t{% for cat in categories %}
\t\t\t\t\t\t{% if cat.sousCat == categorie.sousCat %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('categorie', {slug: cat.slug}) }}\" class=\"nav-link\" aria-current=\"page\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"></svg>
\t\t\t\t\t\t\t\t\t{{cat.nomination}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-12 col-lg-9 mt-5\">
\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\">
\t\t\t{% if categorie.sousCat == null %}
\t\t\t\t{% for cat in categories %}
\t\t\t\t\t{% if cat.sousCat == categorie %}
\t\t\t\t\t\t{% for produit in produits %}
\t\t\t\t\t\t\t{% if cat == produit.idCategorie %}
\t\t\t\t\t\t\t\t{% for photo in photos %}
\t\t\t\t\t\t\t\t\t{% if produit == photo.refProduit %}
\t\t\t\t\t\t\t\t\t\t{% if photo.majorPicture == 1 %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(photo.src)}}\" class=\"card-img-top\" alt=\"produit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{produit.shortLibel}}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-end bg-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p >{{produit.prixHt}} €</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('produit', {slug: produit.slug}) }}\" class=\"btn btn-outline-primary stretched-link\">Découvrire</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t{% for produit in produits %}
\t\t\t\t\t{% if produit.idCategorie == categorie %}
\t\t\t\t\t\t{% for photo in photos %}
\t\t\t\t\t\t\t{% if photo.refProduit == produit %}
\t\t\t\t\t\t\t\t{% if photo.majorPicture == 1 %}
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(photo.src)}}\" class=\"card-img-top\" alt=\"produit\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{produit.shortLibel}}</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-end bg-white\">
\t\t\t\t\t\t\t\t\t\t\t{{ dump(produit.slug) }}
\t\t\t\t\t\t\t\t\t\t\t\t<p >{{produit.prixHt}} €</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('produit', {slug: produit.slug}) }}\" class=\"btn btn-outline-primary stretched-link\">Découvrire</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>
", "_partials/_catalogue.html.twig", "/home/pierre/Documents/GitHub/CDA_fil_rouge/Symfony/Green-Village/templates/_partials/_catalogue.html.twig");
    }
}
