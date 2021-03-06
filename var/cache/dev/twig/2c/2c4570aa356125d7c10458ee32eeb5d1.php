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

/* pages/home.html.twig */
class __TwigTemplate_9b63401a5837bea3431103c8134f45a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"jumbotron text-center\">
<h1>Bienvenue sur mon Agence</h1>
<p>ce text est un test pour voir si je ne fait pas n'importe quoi, j'??crit ce qui me passe pare la t??te pour la pr??sentation de mon site</p>
</div>

<div class=\"container\">
    <h2>Les derniers biens</h2>
    <div class=\"row flex\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 13
            echo "            <div class=\"col-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 17), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
                        </h5>
                        <p class=\"card-text\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", [], "any", false, false, false, 19), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "postalCode", [], "any", false, false, false, 19), "html", null, true);
            echo ")</p>
                        <div class=\"text-primary\" style=\"font-weight: bold;font-size: 2rem;\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "formatedPrice", [], "any", false, false, false, 20), "html", null, true);
            echo " ???</div>
                    </div>
                </div>
            </div>    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>        

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 25,  101 => 20,  95 => 19,  88 => 17,  82 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"jumbotron text-center\">
<h1>Bienvenue sur mon Agence</h1>
<p>ce text est un test pour voir si je ne fait pas n'importe quoi, j'??crit ce qui me passe pare la t??te pour la pr??sentation de mon site</p>
</div>

<div class=\"container\">
    <h2>Les derniers biens</h2>
    <div class=\"row flex\">
        {% for property in properties %}
            <div class=\"col-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <a href=\"{{ path('property.show', {id: property.id, slug: property.slug}) }}\">{{property.title}}</a>
                        </h5>
                        <p class=\"card-text\">{{ property.city}} ({{ property.postalCode }})</p>
                        <div class=\"text-primary\" style=\"font-weight: bold;font-size: 2rem;\">{{ property.formatedPrice }} ???</div>
                    </div>
                </div>
            </div>    
        {% endfor %}
    </div>
</div>        

{% endblock %}", "pages/home.html.twig", "C:\\Users\\lucas\\Documents\\GitHub\\andappy\\templates\\pages\\home.html.twig");
    }
}
