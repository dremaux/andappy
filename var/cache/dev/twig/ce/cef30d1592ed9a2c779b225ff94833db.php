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
class __TwigTemplate_e7cd75a0358b16c289726a2a4b1c15d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("script/script3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("script/script4.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<div class=\"sensi\">
<h2>Sensibilité</h2>
    <input name=\"range-left\" id=\"range-left\" list=\"tickmarks\" />
    
    <datalist id=\"tickmarks\">
    <option value=\"512\"  >
    <option value=\"1024\" >
    <option value=\"2048\" >
    <option value=\"4096\" >
    <option value=\"8192\" >
    </datalist>
</div>


<body>
    <div class=\"container mt-4\">
        <div class=\"jumbotron\"> 
            <div class=\"container\">
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "                <button id=\"togg1\" class=\"btn btn-primary\"><img src=\"\\images\\properties\\cercle-style.png\" height=\"50\" width=\"50\"></button>
                <button id=\"togg2\" class=\"btn btn-primary\"><img src=\"\\images\\properties\\roue.png\" height=\"50\" width=\"50\"></button>
            ";
        }
        // line 33
        echo "  
                <div class=\"form_row\">
                    <div id=\"d1\">
                        <div id=\"circle3\"><img src=\"\\images\\properties\\cercle-style.png\" alt=\"\" /></div>   
                    </div>
                </div>
                <div class=\"form_row\">
                    <div id=\"d2\">
                        <div id=\"circle4\"><img src=\"\\images\\properties\\roue.png\" alt=\"\" /></div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"cercle\">
        <div id=\"circle\"></div>
        <div id=\"circle2\"></div>
    </div>
</body> 
   
<style>
.pagination {
    justify-content: center;
}
</style>

<script>
    let togg1 = document.getElementById(\"togg1\");
    let togg2 = document.getElementById(\"togg2\");
    let d1 = document.getElementById(\"d1\");
    let d2 = document.getElementById(\"d2\");

    //on cache tout les cercles
    d2.style.display = \"none\";
    d1.style.display = \"none\";

    //si le cercle id=d1 est appeller alors l'affiche en cachant tout les autre cercle
    togg1.addEventListener(\"click\", () => {
    if(getComputedStyle(d1).display != \"none\"){
        d1.style.display = \"none\";
    } else {
        d1.style.display = \"block\";
        d2.style.display = \"none\";
    }
    })

    function togg(){
    if(getComputedStyle(d2).display != \"none\"){
        d2.style.display = \"none\";
    } else {
        d2.style.display = \"block\";
        d1.style.display = \"none\";
    }
    };
    togg2.onclick = togg;
</script>

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
        return array (  128 => 33,  123 => 31,  121 => 30,  100 => 11,  90 => 10,  78 => 7,  74 => 6,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block javascripts %}
        <script src=\"{{ asset('script/script.js') }}\"></script>
        <script src=\"{{ asset('script/script3.js') }}\"></script>
        <script src=\"{{ asset('script/script4.js') }}\"></script>
{% endblock %}

{% block body %}

<div class=\"sensi\">
<h2>Sensibilité</h2>
    <input name=\"range-left\" id=\"range-left\" list=\"tickmarks\" />
    
    <datalist id=\"tickmarks\">
    <option value=\"512\"  >
    <option value=\"1024\" >
    <option value=\"2048\" >
    <option value=\"4096\" >
    <option value=\"8192\" >
    </datalist>
</div>


<body>
    <div class=\"container mt-4\">
        <div class=\"jumbotron\"> 
            <div class=\"container\">
            {% if app.user %}
                <button id=\"togg1\" class=\"btn btn-primary\"><img src=\"\\images\\properties\\cercle-style.png\" height=\"50\" width=\"50\"></button>
                <button id=\"togg2\" class=\"btn btn-primary\"><img src=\"\\images\\properties\\roue.png\" height=\"50\" width=\"50\"></button>
            {% endif %}  
                <div class=\"form_row\">
                    <div id=\"d1\">
                        <div id=\"circle3\"><img src=\"\\images\\properties\\cercle-style.png\" alt=\"\" /></div>   
                    </div>
                </div>
                <div class=\"form_row\">
                    <div id=\"d2\">
                        <div id=\"circle4\"><img src=\"\\images\\properties\\roue.png\" alt=\"\" /></div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"cercle\">
        <div id=\"circle\"></div>
        <div id=\"circle2\"></div>
    </div>
</body> 
   
<style>
.pagination {
    justify-content: center;
}
</style>

<script>
    let togg1 = document.getElementById(\"togg1\");
    let togg2 = document.getElementById(\"togg2\");
    let d1 = document.getElementById(\"d1\");
    let d2 = document.getElementById(\"d2\");

    //on cache tout les cercles
    d2.style.display = \"none\";
    d1.style.display = \"none\";

    //si le cercle id=d1 est appeller alors l'affiche en cachant tout les autre cercle
    togg1.addEventListener(\"click\", () => {
    if(getComputedStyle(d1).display != \"none\"){
        d1.style.display = \"none\";
    } else {
        d1.style.display = \"block\";
        d2.style.display = \"none\";
    }
    })

    function togg(){
    if(getComputedStyle(d2).display != \"none\"){
        d2.style.display = \"none\";
    } else {
        d2.style.display = \"block\";
        d1.style.display = \"none\";
    }
    };
    togg2.onclick = togg;
</script>

{% endblock %}", "pages/home.html.twig", "C:\\Users\\lucas\\Documents\\GitHub\\andappy\\templates\\pages\\home.html.twig");
    }
}