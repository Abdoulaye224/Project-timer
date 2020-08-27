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

/* layout/navbar.html.twig */
class __TwigTemplate_790948f9e80e76f32404c4399a906c3966feb4928eab29584f26fcd2e3a9a630 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/navbar.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
   <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/timer.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
  


    
    <nav class=\"navbar navbar-expand-lg \">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 13
                echo "                                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
                echo "\" class=\"host\">Mon Profil</a>
                            ";
            }
            // line 15
            echo "                        ";
        }
        // line 16
        echo "                    </li>

                    <li>
                        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        echo "\" class=\"host\">Utilisateurs</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\" class=\"host\">Groupes</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project");
        echo "\" class=\"host\">Projets</a>
                    </li>
                     <li>
                        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timer-team");
        echo "\" class=\"host\">Timer</a>
                    </li>
                </ul>

                <ul class=\"navbar-nav ml-auto\" >

                    ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-outline-danger\">Déconnexion</a>
                        ";
        } else {
            // line 38
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"btn btn-outline-success account\">Connexion</a>
                        ";
        }
        // line 40
        echo "                    </li>

                </ul>
            </div>

    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  133 => 38,  128 => 36,  125 => 35,  123 => 34,  114 => 28,  108 => 25,  102 => 22,  96 => 19,  91 => 16,  88 => 15,  82 => 13,  79 => 12,  77 => 11,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

   <link href=\"{{ asset('css/timer.css') }}\" type=\"text/css\" rel=\"stylesheet\">
  


    
    <nav class=\"navbar navbar-expand-lg \">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            {% if is_granted('ROLE_USER') %}
                                <a href=\"{{ path('profile') }}\" class=\"host\">Mon Profil</a>
                            {% endif %}
                        {% endif %}
                    </li>

                    <li>
                        <a href=\"{{ path('user_list') }}\" class=\"host\">Utilisateurs</a>
                    </li>
                    <li>
                        <a href=\"{{ path('team') }}\" class=\"host\">Groupes</a>
                    </li>
                    <li>
                        <a href=\"{{ path('project') }}\" class=\"host\">Projets</a>
                    </li>
                     <li>
                        <a href=\"{{ path('timer-team') }}\" class=\"host\">Timer</a>
                    </li>
                </ul>

                <ul class=\"navbar-nav ml-auto\" >

                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger\">Déconnexion</a>
                        {% else %}
                            <a href=\"{{ path('home') }}\" class=\"btn btn-outline-success account\">Connexion</a>
                        {% endif %}
                    </li>

                </ul>
            </div>

    </nav>
{% endblock %}
", "layout/navbar.html.twig", "/app/templates/layout/navbar.html.twig");
    }
}
