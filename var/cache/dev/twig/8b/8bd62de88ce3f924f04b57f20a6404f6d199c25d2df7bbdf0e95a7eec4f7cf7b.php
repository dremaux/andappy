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

/* property/_property.html.twig */
class __TwigTemplate_d1afc095035351f1fae100d71a36858887c03c819753412a513666b26daeed81 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/_property.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/_property.html.twig"));

        // line 1
        echo "<div class=\"card mb-4\">
    
    <div class=\"card-body\">
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 4, $this->source); })()), "filename", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 5, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height:230px;\">
    ";
        } else {
            // line 7
            echo "    <img src=\"";
            echo "/images/properties/nophoto.jpg";
            echo "\" alt=\"card-img-top\" style=\"width: 300px; height:230px;\">
    ";
        }
        // line 9
        echo "        <h5 class=\"card-title\">
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 10, $this->source); })()), "slug", [], "any", false, false, false, 10), "id" => twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">
                ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "
            </a>
        </h5>
        <p class=\"card-text\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 14, $this->source); })()), "surface", [], "any", false, false, false, 14), "html", null, true);
        echo "m² - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 14, $this->source); })()), "city", [], "any", false, false, false, 14), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 14, $this->source); })()), "postalCode", [], "any", false, false, false, 14), "html", null, true);
        echo ")</p>
        <div class=\"text-primary\" style=\"font-size:2rem; font-weight: bold;\">
            ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 16, $this->source); })()), "formatedPrice", [], "any", false, false, false, 16), "html", null, true);
        echo " €
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "property/_property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  75 => 14,  69 => 11,  65 => 10,  62 => 9,  56 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-4\">
    
    <div class=\"card-body\">
    {% if property.filename %}
    <img src=\"{{ vich_uploader_asset(property, 'imageFile') }}\" alt=\"card-img-top\" style=\"width: 100%; height:230px;\">
    {% else %}
    <img src=\"{{ '/images/properties/nophoto.jpg' }}\" alt=\"card-img-top\" style=\"width: 300px; height:230px;\">
    {% endif %}
        <h5 class=\"card-title\">
            <a href=\"{{ path('property.show', {slug: property.slug, id: property.id}) }}\">
                {{ property.title }}
            </a>
        </h5>
        <p class=\"card-text\">{{ property.surface }}m² - {{ property.city }} ({{ property.postalCode }})</p>
        <div class=\"text-primary\" style=\"font-size:2rem; font-weight: bold;\">
            {{ property.formatedPrice }} €
        </div>
    </div>
</div>", "property/_property.html.twig", "C:\\Users\\Lucas.DREMAUX\\Documents\\GitHub\\andappy\\templates\\property\\_property.html.twig");
    }
}
