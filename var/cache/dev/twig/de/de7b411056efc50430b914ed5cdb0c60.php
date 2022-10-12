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

/* base.html.twig */
class __TwigTemplate_e8aa4d165802b2417b7e82f250827b48 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
 <html lang=\"fr\">
     <head>
         <meta charset=\"UTF-8\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
         <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
         <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
         
         <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/indexe.css"), "html", null, true);
        echo "\">
         <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\" integrity=\"sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
 
         ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "     </head>   
     
    <body>
         <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
             <div class=\"container-fluid\">
                 <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"images\\properties\\acceuil.png\" weidht=\"40\" height=\"40\"></a>
                 <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                     <span class=\"navbar-toggler-icon\"></span>
                 </button>
                
                 <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                     <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                         <li class=\"nav-item\">    
                             <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
        echo "\"><img src=\"images\\properties\\logo_shop.png\" weidht=\"40\" height=\"40\"></a>
                         </li>
                     </ul>
                
                    <ul  class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"nav-link\"> Se connecter</a>
                        </li>
                    </ul>
                    ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "role", [], "any", false, false, false, 37) == "Admin")) {
                // line 38
                echo "                            <ul  class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
                echo "\" class=\"nav-link\">S'inscrire</a>
                                </li>
                            </ul>
                        ";
            }
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                
                
                ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            echo "   
                     <ul  class=\"navbar-nav\">
                         <li class=\"nav-item\">
                             <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" style=\"color:white; text-decoration: none;\"><img src=\"images\\properties\\deconnexion.png\" weidht=\"40\" height=\"40\"></a>
                         </li>
                     </ul>
                ";
        }
        // line 54
        echo "                 </div>
             </div>
         </nav>
    
         ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        
        ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", [0 => "_route"], "method", false, false, false, 61) != "randomQuestion")) {
                // line 62
                echo "                ";
                // line 103
                echo "            ";
            }
            // line 104
            echo "        ";
        }
        echo " 
       
        
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
         <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js\" integrity=\"sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/\" crossorigin=\"anonymous\"></script>
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\" integrity=\"sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
         
         <script> 
             \$('.form-select').select2({ width: '50%' }); 
         </script>
 
         ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "    </body>
 </html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AndHappy";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 115,  224 => 58,  206 => 13,  187 => 7,  176 => 116,  174 => 115,  159 => 104,  156 => 103,  154 => 62,  151 => 61,  149 => 60,  146 => 59,  144 => 58,  138 => 54,  131 => 50,  125 => 47,  121 => 45,  118 => 44,  111 => 40,  107 => 38,  104 => 37,  102 => 36,  96 => 33,  87 => 27,  76 => 19,  69 => 14,  67 => 13,  60 => 9,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
 <html lang=\"fr\">
     <head>
         <meta charset=\"UTF-8\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
         <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
         <title>{% block title %}AndHappy{% endblock %}</title>
         
         <link rel=\"stylesheet\" href=\"{{ asset('css/indexe.css') }}\">
         <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\" integrity=\"sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
 
         {% block stylesheets %}{% endblock %}
     </head>   
     
    <body>
         <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
             <div class=\"container-fluid\">
                 <a class=\"navbar-brand\" href=\"{{ path('home') }}\"><img src=\"images\\properties\\acceuil.png\" weidht=\"40\" height=\"40\"></a>
                 <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                     <span class=\"navbar-toggler-icon\"></span>
                 </button>
                
                 <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                     <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                         <li class=\"nav-item\">    
                             <a class=\"navbar-brand\" href=\"{{ path('shop') }}\"><img src=\"images\\properties\\logo_shop.png\" weidht=\"40\" height=\"40\"></a>
                         </li>
                     </ul>
                
                    <ul  class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('login') }}\" class=\"nav-link\"> Se connecter</a>
                        </li>
                    </ul>
                    {% if app.user %}
                        {% if app.user.role == \"Admin\" %}
                            <ul  class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('register') }}\" class=\"nav-link\">S'inscrire</a>
                                </li>
                            </ul>
                        {% endif %}
                    {% endif %}
                
                
                {% if app.user %}   
                     <ul  class=\"navbar-nav\">
                         <li class=\"nav-item\">
                             <a href=\"{{ path('logout') }}\" style=\"color:white; text-decoration: none;\"><img src=\"images\\properties\\deconnexion.png\" weidht=\"40\" height=\"40\"></a>
                         </li>
                     </ul>
                {% endif %}
                 </div>
             </div>
         </nav>
    
         {% block body %}{% endblock %}
        
        {% if app.user %}
            {% if app.request.attributes.get('_route') != \"randomQuestion\" %}
                {# <script>

                    const popupWidth    = 600;
                    const popupHeight   = 300;

                    const maxQuestionPopupPerPage           = 2;
                    const questionPopupMinimumRestartTime   = 100;   //secondes
                    const questionPopupRandomTimeRange      = 3;    //secondes
                    const questionPopupURL                  = \"http://localhost:8000/randomQuestion\";
                    
                    function generateQuestionPopupRandomTime() {
                        var min = 0;
                        var max = questionPopupRandomTimeRange;
                        randomValue = Math.floor(Math.random() * (max - min + 1)) + min;
                        return randomValue;
                    };

                    randomQuestionPopup = function(randomQuestionPopupTime){
                        setTimeout(() => window.open(questionPopupURL, \"Popup window\", `width=\${popupWidth} height=\${popupHeight}`), randomQuestionPopupTime * 1000)
                    };
                    
                    var lastPopupTimestamp = '{{app.user.lastPopupDate}}';
                    var currentTimestamp = Math.floor(Date.now() / 1000);
                    var randomQuestionPopupTime = 0;

                    if ((lastPopupTimestamp - currentTimestamp + questionPopupMinimumRestartTime) < 0){
                        randomQuestionPopupTime = generateQuestionPopupRandomTime();
                    }else{
                        randomQuestionPopupTime = generateQuestionPopupRandomTime() + (lastPopupTimestamp - currentTimestamp + questionPopupMinimumRestartTime);
                    }

                    iteration = 0;
                    while (iteration < maxQuestionPopupPerPage){
                        questionPopupTime = randomQuestionPopupTime + iteration * questionPopupMinimumRestartTime + generateQuestionPopupRandomTime();
                        console.log(iteration, questionPopupTime);
                        randomQuestionPopup(questionPopupTime);
                        iteration = iteration + 1;
                    }
                    
                    
                </script> #}
            {% endif %}
        {% endif %} 
       
        
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
         <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js\" integrity=\"sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/\" crossorigin=\"anonymous\"></script>
         <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\" integrity=\"sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
         
         <script> 
             \$('.form-select').select2({ width: '50%' }); 
         </script>
 
         {% block javascripts %}{% endblock %}
    </body>
 </html>", "base.html.twig", "C:\\Users\\Lucas.DREMAUX\\Documents\\GitHub\\handappy\\templates\\base.html.twig");
    }
}
