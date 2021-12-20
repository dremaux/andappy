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

/* property/show.html.twig */
class __TwigTemplate_8c40ccd0d555ca6e9c4e4b05ce7fba39a1ac2042f1bb79c05d952b96ae7db246 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 10, $this->source); })()), "filename", [], "any", false, false, false, 10)) {
            // line 11
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 11, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 700px; height:430px;\">
                ";
        } else {
            // line 13
            echo "                    <img src=\"";
            echo "/images/properties/nophoto.jpg";
            echo "\" alt=\"card-img-top\" style=\"width: 650px; height:475px;\">
                ";
        }
        // line 15
        echo "            </div>
            <div class=\"col-md-4\">
            </br></br></br></br></br>
                <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                <h2>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 19, $this->source); })()), "rooms", [], "any", false, false, false, 19), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 19, $this->source); })()), "surface", [], "any", false, false, false, 19), "html", null, true);
        echo " m²</h2>
                <div class=\"text-primary\" style=\"font-size: 2rem; font-weight: bold;\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 20, $this->source); })()), "formatedPrice", [], "any", false, false, false, 20), "html", null, true);
        echo " €</div>
            </div>
        </div>
        </br></br>
        <nav class=\"nav nav-tabs\" id=\"tabs\"></nav> 

        <p>
        ";
        // line 27
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true));
        echo "
        </P>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <h2>Caractéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface Habitable</td>
                        <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 36, $this->source); })()), "surface", [], "any", false, false, false, 36), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 40, $this->source); })()), "rooms", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 44, $this->source); })()), "bedrooms", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 48, $this->source); })()), "floor", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chaffage</td>
                        <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 52, $this->source); })()), "heatType", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-4\">
                <h2>Spécificité(s)</h2>
                <ul class=\"list-group\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 59, $this->source); })()), "options", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 60
            echo "                    <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
        </div>

        <div id=\"contactForm\" class=\"mt-4\">
            <h3>Contacter une Agence</h3>
            ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <p>Selectionné une ou plusieurs agences :</p>
                    <div class=\"col\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "agences", [], "any", false, false, false, 70), 'row');
        echo "</div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "firstname", [], "any", false, false, false, 73), 'row');
        echo "</div>
                    <div class=\"col\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "lastname", [], "any", false, false, false, 74), 'row');
        echo "</div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "phone", [], "any", false, false, false, 77), 'row');
        echo "</div>
                    <div class=\"col\">";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), 'row');
        echo "</div>
                </div>
                
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'rest');
        echo "
                <body>

                    <form method=\"POST\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LfnmLYdAAAAAK-hT48uVTshJvD0z-uFZJ1_gMoN\"></div>
                    <br/>
                    <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\">
                    </form>
                    <br/>
                </body>
                
            ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
        echo "   
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 92,  235 => 81,  229 => 78,  225 => 77,  219 => 74,  215 => 73,  209 => 70,  203 => 67,  196 => 62,  187 => 60,  183 => 59,  173 => 52,  166 => 48,  159 => 44,  152 => 40,  145 => 36,  133 => 27,  123 => 20,  117 => 19,  113 => 18,  108 => 15,  102 => 13,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}

{% block body %}

    <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                {% if property.filename %}
                    <img src=\"{{ vich_uploader_asset(property, 'imageFile') }}\" alt=\"card-img-top\" style=\"width: 700px; height:430px;\">
                {% else %}
                    <img src=\"{{ '/images/properties/nophoto.jpg' }}\" alt=\"card-img-top\" style=\"width: 650px; height:475px;\">
                {% endif %}
            </div>
            <div class=\"col-md-4\">
            </br></br></br></br></br>
                <h1>{{ property.title }}</h1>
                <h2>{{ property.rooms }} pièces - {{ property.surface }} m²</h2>
                <div class=\"text-primary\" style=\"font-size: 2rem; font-weight: bold;\">{{ property.formatedPrice }} €</div>
            </div>
        </div>
        </br></br>
        <nav class=\"nav nav-tabs\" id=\"tabs\"></nav> 

        <p>
        {{ property.description | nl2br }}
        </P>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <h2>Caractéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface Habitable</td>
                        <td>{{ property.surface }} m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ property.rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ property.bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ property.floor }}</td>
                    </tr>
                    <tr>
                        <td>Chaffage</td>
                        <td>{{ property.heatType }}</td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-4\">
                <h2>Spécificité(s)</h2>
                <ul class=\"list-group\">
                    {% for option in property.options %}
                    <li class=\"list-group-item\">{{ option.name }}</li>
                    {% endfor %}
            </div>
        </div>

        <div id=\"contactForm\" class=\"mt-4\">
            <h3>Contacter une Agence</h3>
            {{form_start(form)}}
                <div class=\"row\">
                    <p>Selectionné une ou plusieurs agences :</p>
                    <div class=\"col\">{{ form_row(form.agences) }}</div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">{{ form_row(form.firstname) }}</div>
                    <div class=\"col\">{{ form_row(form.lastname) }}</div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">{{ form_row(form.phone) }}</div>
                    <div class=\"col\">{{ form_row(form.email) }}</div>
                </div>
                
            {{ form_rest(form) }}
                <body>

                    <form method=\"POST\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LfnmLYdAAAAAK-hT48uVTshJvD0z-uFZJ1_gMoN\"></div>
                    <br/>
                    <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\">
                    </form>
                    <br/>
                </body>
                
            {{ form_end(form) }}   
        </div>
    </div>
{% endblock %}", "property/show.html.twig", "C:\\Users\\Lucas.DREMAUX\\Documents\\GitHub\\andappy\\templates\\property\\show.html.twig");
    }
}
