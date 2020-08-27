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

/* project/index.html.twig */
class __TwigTemplate_e278a6ec420bd1742626e0d3f33bb254ac805573b0e8ae0fc353cb6c520c786d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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

        echo "Hello Project Controller!";
        
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
     ";
        // line 7
        $this->loadTemplate("layout/navbar.html.twig", "project/index.html.twig", 7)->display($context);
        // line 8
        echo "
    <div class=\"container\">
    <h1  style=\"margin-top: 20px; text-align: center;\">Liste des projets</h1>
    <a style= \"margin-top: 10px; margin-bottom: 5px;\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project-create");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Créer un projet</a>

            <table class=\"table table-bordered\" style=\"text-align: center;\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th> Nom </th>
                        <th> Description </th>
                        <th> Groupe(s) </th>
                        <th> Modifier </th>
                    </tr>
                </thead>
            ";
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projet_list"]) || array_key_exists("projet_list", $context) ? $context["projet_list"] : (function () { throw new RuntimeError('Variable "projet_list" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 24
            echo "                <tr>
                <td style=\"vertical-align:middle;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo " </td>
                <td style=\"vertical-align:middle;\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo " </td>
                ";
            // line 27
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["projet"], "getTeam", [], "any", false, false, false, 27))) {
                // line 28
                echo "                    <td style=\"vertical-align:middle;\">  
                    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["projet"], "getTeam", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                    // line 30
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 30), "html", null, true);
                    echo " ,
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                    </td>
                ";
            }
            // line 34
            echo "                    <td>
                        ";
            // line 35
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["projet"], "getProjectAdmin", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35))) {
                // line 36
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["idProject" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                        ";
            } else {
                // line 38
                echo "                            Impossible, vous n'êtes pas l'administateur du groupe.
                        ";
            }
            // line 40
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 43,  165 => 40,  161 => 38,  155 => 36,  153 => 35,  150 => 34,  146 => 32,  137 => 30,  133 => 29,  130 => 28,  128 => 27,  124 => 26,  120 => 25,  117 => 24,  112 => 23,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Project Controller!{% endblock %}

{% block body %}

     {% include 'layout/navbar.html.twig'%}

    <div class=\"container\">
    <h1  style=\"margin-top: 20px; text-align: center;\">Liste des projets</h1>
    <a style= \"margin-top: 10px; margin-bottom: 5px;\" href=\"{{ path('project-create') }}\" class=\"btn btn-success\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Créer un projet</a>

            <table class=\"table table-bordered\" style=\"text-align: center;\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th> Nom </th>
                        <th> Description </th>
                        <th> Groupe(s) </th>
                        <th> Modifier </th>
                    </tr>
                </thead>
            {# légèrement différent de php avec foreach userList as user #}
            {% for projet in projet_list %}
                <tr>
                <td style=\"vertical-align:middle;\">{{ projet.name }} </td>
                <td style=\"vertical-align:middle;\">{{ projet.description }} </td>
                {% if projet.getTeam is not empty %}
                    <td style=\"vertical-align:middle;\">  
                    {% for team in projet.getTeam %}
                        {{team.name}} ,
                    {% endfor %}
                    </td>
                {% endif %}
                    <td>
                        {% if projet.getProjectAdmin == app.user.id %}
                            <a href=\"{{ path('project_edit',{idProject: projet.id}) }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                        {% else %}
                            Impossible, vous n'êtes pas l'administateur du groupe.
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </table>
    </div>
{% endblock %}
", "project/index.html.twig", "/app/templates/project/index.html.twig");
    }
}
