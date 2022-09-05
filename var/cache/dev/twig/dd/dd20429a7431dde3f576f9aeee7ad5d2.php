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

/* admin/property/index.html.twig */
class __TwigTemplate_133cc90c0e8dbc5a181f683a126b8bff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/property/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/property/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/property/index.html.twig", 1);
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

        echo "Gérer les biens";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container mt-4\">

        <h1>Gérer les biens</h1>
        <br>
        <div class=\"text-center\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.index");
        echo "\" class=\"btn btn-primary\">Gérer les biens</a>
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.option.index");
        echo "\" class=\"btn btn-primary\">Gérer les options</a>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.agence.index");
        echo "\" class=\"btn btn-primary\">Gérer les agences</a>
        </div>
        <br>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "        <div class=\"alert alert-success\">
        ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>

                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>

                    <form methode=\"post\" action=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" style=\"display: inline-block\" onsubmit=\"return confirm('êtes vous vraiment sûr ?')\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 39))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-danger\">Supprimer</button>
                    </form>
                    
                </td>
            </tr>        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>
        </table>

        <div class=\"text-center\">
            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.new");
        echo "\" class=\"btn btn-primary\">Créer un nouveau bien</a>
        </div>

    </div>     
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/property/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 50,  172 => 46,  159 => 39,  154 => 37,  149 => 35,  144 => 33,  141 => 32,  137 => 31,  126 => 22,  117 => 19,  114 => 18,  110 => 17,  103 => 13,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Gérer les biens' %}

{% block body %}
    <div class=\"container mt-4\">

        <h1>Gérer les biens</h1>
        <br>
        <div class=\"text-center\">
            <a href=\"{{ path('admin.property.index') }}\" class=\"btn btn-primary\">Gérer les biens</a>
            <a href=\"{{ path('admin.option.index') }}\" class=\"btn btn-primary\">Gérer les options</a>
            <a href=\"{{ path('admin.agence.index') }}\" class=\"btn btn-primary\">Gérer les agences</a>
        </div>
        <br>

        {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
        {{ message }}
        </div>
        {% endfor %}

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for property in properties %}
            <tr>
                <td>{{ property.title }}</td>

                <td><a href=\"{{ path('admin.property.edit', {id: property.id}) }}\" class=\"btn btn-secondary\">Editer</a>

                    <form methode=\"post\" action=\"{{ path('admin.property.delete', {id: property.id}) }}\" style=\"display: inline-block\" onsubmit=\"return confirm('êtes vous vraiment sûr ?')\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ property.id) }}\">
                        <button class=\"btn btn-danger\">Supprimer</button>
                    </form>
                    
                </td>
            </tr>        
            {% endfor %}
            </tbody>
        </table>

        <div class=\"text-center\">
            <a href=\"{{ path('admin.property.new') }}\" class=\"btn btn-primary\">Créer un nouveau bien</a>
        </div>

    </div>     
{% endblock %}", "admin/property/index.html.twig", "C:\\Users\\Lucas.DREMAUX\\Documents\\GitHub\\andappy\\templates\\admin\\property\\index.html.twig");
    }
}
