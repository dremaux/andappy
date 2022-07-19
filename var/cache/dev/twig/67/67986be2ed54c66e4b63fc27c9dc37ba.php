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

/* admin/property/_form.html.twig */
class __TwigTemplate_bb4b388a02cc9f541a93af1d0f2a2f6d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/property/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/property/_form.html.twig"));

        // line 1
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"col-md-4\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), 'row');
        echo "</div>
            <div class=\"col-md-4\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "surface", [], "any", false, false, false, 5), 'row');
        echo "</div>
            <div class=\"col-md-4\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "price", [], "any", false, false, false, 6), 'row');
        echo "</div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "rooms", [], "any", false, false, false, 9), 'row');
        echo "</div>
            <div class=\"col-md-2\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "bedrooms", [], "any", false, false, false, 10), 'row');
        echo "</div>
            <div class=\"col-md-2\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "heat", [], "any", false, false, false, 11), 'row');
        echo "</div>
            <div class=\"col-md-2\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "floor", [], "any", false, false, false, 12), 'row');
        echo "</div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "imageFile", [], "any", false, false, false, 15), 'row');
        echo "</div>
            <div class=\"col-md-3\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "address", [], "any", false, false, false, 16), 'row');
        echo "</div>
            <div class=\"col-md-2\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "city", [], "any", false, false, false, 17), 'row');
        echo "</div>
            <div class=\"col-md-1\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "postal_code", [], "any", false, false, false, 18), 'row');
        echo "</div>
            <div class=\"col-md-2\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "sold", [], "any", false, false, false, 19), 'row');
        echo "</div>
        </div>
        <div>
            <p>Options :</p>
            <div>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "options", [], "any", false, false, false, 23), 'row');
        echo "</div>
        </div>
        <div>
            <p>Agences :</p>
            <div>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "agences", [], "any", false, false, false, 27), 'row');
        echo "</div>
        </div>
        <div>
            <div>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'row');
        echo "</div>
        </div>

        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'rest');
        echo "
        <button class=\"btn btn-primary\">";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 34, $this->source); })()), "enregistrer")) : ("enregistrer")), "html", null, true);
        echo "</button>
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/property/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 35,  128 => 34,  124 => 33,  118 => 30,  112 => 27,  105 => 23,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  58 => 6,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        {{ form_start(form) }}

        <div class=\"row\">
            <div class=\"col-md-4\">{{ form_row(form.title) }}</div>
            <div class=\"col-md-4\">{{ form_row(form.surface) }}</div>
            <div class=\"col-md-4\">{{ form_row(form.price) }}</div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\">{{ form_row(form.rooms) }}</div>
            <div class=\"col-md-2\">{{ form_row(form.bedrooms) }}</div>
            <div class=\"col-md-2\">{{ form_row(form.heat) }}</div>
            <div class=\"col-md-2\">{{ form_row(form.floor) }}</div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\">{{ form_row(form.imageFile) }}</div>
            <div class=\"col-md-3\">{{ form_row(form.address) }}</div>
            <div class=\"col-md-2\">{{ form_row(form.city) }}</div>
            <div class=\"col-md-1\">{{ form_row(form.postal_code) }}</div>
            <div class=\"col-md-2\">{{ form_row(form.sold) }}</div>
        </div>
        <div>
            <p>Options :</p>
            <div>{{ form_row(form.options) }}</div>
        </div>
        <div>
            <p>Agences :</p>
            <div>{{ form_row(form.agences) }}</div>
        </div>
        <div>
            <div>{{ form_row(form.description) }}</div>
        </div>

        {{ form_rest(form) }}
        <button class=\"btn btn-primary\">{{ button|default('enregistrer') }}</button>
        {{ form_end(form) }}", "admin/property/_form.html.twig", "C:\\Users\\lucas\\Documents\\GitHub\\andappy\\templates\\admin\\property\\_form.html.twig");
    }
}
