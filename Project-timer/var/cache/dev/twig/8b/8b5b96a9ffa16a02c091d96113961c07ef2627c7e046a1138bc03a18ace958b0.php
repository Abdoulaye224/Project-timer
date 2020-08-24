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

/* team/index.html.twig */
class __TwigTemplate_918f07a58bc5cb39e5b2b6747562356276ccb701de8e898fe9f72decf0f7a459 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/index.html.twig", 1);
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

        echo "Hello Team Controller!";
        
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
        $this->loadTemplate("layout/navbar.html.twig", "team/index.html.twig", 7)->display($context);
        // line 8
        echo "
    <div class=\"container\">
    <h1 style=\"margin-top: 20px; text-align: center;\">Liste des groupes</h1>

        <a style= \"margin-top: 10px; margin-bottom: 5px;\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team-create");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un groupe</a>
            <table class=\"table table-bordered\" style=\"text-align: center;\">
                <thead class=\"thead-dark\">
                <tr>
                    <th> Nom </th>
                    <th> Membres </th>
                    <th> Modifier </th>
                  <!--  <th colspan=\"3\"> Action</th> -->
                </tr>
                </thead>
            ";
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["team_list"]) || array_key_exists("team_list", $context) ? $context["team_list"] : (function () { throw new RuntimeError('Variable "team_list" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 24
            echo "                <tr>
                <td style=\"vertical-align:middle;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo " </td>
                ";
            // line 26
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["team"], "getUsers", [], "any", false, false, false, 26))) {
                // line 27
                echo "                    <td style=\"vertical-align:middle;\"> 
                    ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["team"], "getUsers", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                    // line 29
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "firstName", [], "any", false, false, false, 29), "html", null, true);
                    echo "
                        ";
                    // line 30
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, $context["team"], "getTeamAdmin", [], "any", false, false, false, 30))) {
                        // line 31
                        echo "                         [ADMIN]
                        ";
                    }
                    // line 33
                    echo "                        ,
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                    </td>
                    <td style=\"vertical-align:middle;\">
                        ";
                // line 37
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["team"], "getTeamAdmin", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))) {
                    // line 38
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_edit", ["idTeam" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                        ";
                } else {
                    // line 40
                    echo "                            Impossible, vous n'êtes pas l'administateur du groupe.
                        ";
                }
                // line 42
                echo "                    </td>
                ";
            }
            // line 44
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 46,  171 => 44,  167 => 42,  163 => 40,  157 => 38,  155 => 37,  151 => 35,  144 => 33,  140 => 31,  138 => 30,  133 => 29,  129 => 28,  126 => 27,  124 => 26,  120 => 25,  117 => 24,  112 => 23,  99 => 12,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Team Controller!{% endblock %}

{% block body %}

    {% include 'layout/navbar.html.twig'%}

    <div class=\"container\">
    <h1 style=\"margin-top: 20px; text-align: center;\">Liste des groupes</h1>

        <a style= \"margin-top: 10px; margin-bottom: 5px;\" href=\"{{ path('team-create') }}\" class=\"btn btn-success\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ajouter un groupe</a>
            <table class=\"table table-bordered\" style=\"text-align: center;\">
                <thead class=\"thead-dark\">
                <tr>
                    <th> Nom </th>
                    <th> Membres </th>
                    <th> Modifier </th>
                  <!--  <th colspan=\"3\"> Action</th> -->
                </tr>
                </thead>
            {# légèrement différent de php avec foreach userList as user #}
            {% for team in team_list %}
                <tr>
                <td style=\"vertical-align:middle;\">{{ team.name }} </td>
                {% if team.getUsers is not empty %}
                    <td style=\"vertical-align:middle;\"> 
                    {% for users in team.getUsers %}
                        {{users.firstName}}
                        {% if users.id == team.getTeamAdmin %}
                         [ADMIN]
                        {% endif %}
                        ,
                    {% endfor %}
                    </td>
                    <td style=\"vertical-align:middle;\">
                        {% if team.getTeamAdmin == app.user.id %}
                            <a href=\"{{ path('team_edit',{idTeam: team.id}) }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                        {% else %}
                            Impossible, vous n'êtes pas l'administateur du groupe.
                        {% endif %}
                    </td>
                {% endif %}
                </tr>
            {% endfor %}
            </table>
    </div>
{% endblock %}
", "team/index.html.twig", "/app/templates/team/index.html.twig");
    }
}
