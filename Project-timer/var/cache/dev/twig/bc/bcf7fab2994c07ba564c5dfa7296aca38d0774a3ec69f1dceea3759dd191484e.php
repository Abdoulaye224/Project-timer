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

/* timer/index.html.twig */
class __TwigTemplate_fbc70f961e5fc253ddc55c6fca738b98e23ec9c90b579d44bfb25ea29598f524 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "timer/index.html.twig", 1);
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

        echo "Start Timer";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("layout/navbar.html.twig", "timer/index.html.twig", 8)->display($context);
        // line 9
        echo "
<!--
<div class=\"example-wrapper\">
    <ul>
        <li>temps globale du ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["projectTime"]) || array_key_exists("projectTime", $context) ? $context["projectTime"] : (function () { throw new RuntimeError('Variable "projectTime" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " [JOUR:HEUR:MINUTE:SECONDE]</li>
        <li>temps passé par la ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo " sur le ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["projectTeamTime"]) || array_key_exists("projectTeamTime", $context) ? $context["projectTeamTime"] : (function () { throw new RuntimeError('Variable "projectTeamTime" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " [JOUR:HEUR:MINUTE:SECONDE]</li>
        <li>temps passé par ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "firstName", [], "any", false, false, false, 15), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "lastName", [], "any", false, false, false, 15), "html", null, true);
        echo " sur le ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["projectUserTime"]) || array_key_exists("projectUserTime", $context) ? $context["projectUserTime"] : (function () { throw new RuntimeError('Variable "projectUserTime" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " [JOUR:HEUR:MINUTE:SECONDE]</li>
    </ul>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timer-start", ["idTeam" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "idProject" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">Démarrer un nouveau timer</a>
</div>
-->

<div class = \"container\">

    <table class = \"table table-bordered\" style = \"text-align:center; margin-top:100px;\">
        <thead class=\"thead-dark\">
            <tr>
                <th colspan=\"2\" style=\"font-size: 20px;\">Récapitulatif du temps passé sur le projet \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "\"</th>
            </tr>
            <tr>
                <td>Votre temps passé sur le projet</td>
                <td> ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["projectUserTime"]) || array_key_exists("projectUserTime", $context) ? $context["projectUserTime"] : (function () { throw new RuntimeError('Variable "projectUserTime" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " </td>
            </tr>
            <tr>
                <td>Temps passé par le groupe ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                <td> ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["projectTeamTime"]) || array_key_exists("projectTeamTime", $context) ? $context["projectTeamTime"] : (function () { throw new RuntimeError('Variable "projectTeamTime" does not exist.', 34, $this->source); })()), "html", null, true);
        echo " </td>
            </tr>
            <tr style=\"background-color: yellow;\">
                <td><strong>Temps Global</strong></td>
                <td><strong>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["projectTime"]) || array_key_exists("projectTime", $context) ? $context["projectTime"] : (function () { throw new RuntimeError('Variable "projectTime" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</strong></td>
            </tr>
    </table>
    <br>
    <div class=\"start\">
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timer-start", ["idTeam" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43), "idProject" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" class=\"btn btn-success btn-start\">
            <i class=\"fa fa-play\" aria-hidden=\"true\"></i>  Démarrer un nouveau timer
        </a>
    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "timer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 43,  178 => 38,  171 => 34,  167 => 33,  161 => 30,  154 => 26,  142 => 17,  131 => 15,  123 => 14,  117 => 13,  111 => 9,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Start Timer{% endblock %}

{% block head %} {% endblock %}

{% block body %}
    {% include 'layout/navbar.html.twig'%}

<!--
<div class=\"example-wrapper\">
    <ul>
        <li>temps globale du {{ project.name }} : {{ projectTime }} [JOUR:HEUR:MINUTE:SECONDE]</li>
        <li>temps passé par la {{ team.name }} sur le {{ project.name }}: {{ projectTeamTime }} [JOUR:HEUR:MINUTE:SECONDE]</li>
        <li>temps passé par {{ user.firstName }} {{ user.lastName }} sur le {{ project.name }}: {{ projectUserTime }} [JOUR:HEUR:MINUTE:SECONDE]</li>
    </ul>
    <a href=\"{{ path('timer-start',{idTeam: team.id, idProject: project.id}) }}\">Démarrer un nouveau timer</a>
</div>
-->

<div class = \"container\">

    <table class = \"table table-bordered\" style = \"text-align:center; margin-top:100px;\">
        <thead class=\"thead-dark\">
            <tr>
                <th colspan=\"2\" style=\"font-size: 20px;\">Récapitulatif du temps passé sur le projet \"{{ project.name }}\"</th>
            </tr>
            <tr>
                <td>Votre temps passé sur le projet</td>
                <td> {{ projectUserTime }} </td>
            </tr>
            <tr>
                <td>Temps passé par le groupe {{ team.name }}</td>
                <td> {{ projectTeamTime }} </td>
            </tr>
            <tr style=\"background-color: yellow;\">
                <td><strong>Temps Global</strong></td>
                <td><strong>{{ projectTime }}</strong></td>
            </tr>
    </table>
    <br>
    <div class=\"start\">
        <a href=\"{{ path('timer-start',{idTeam: team.id, idProject: project.id}) }}\" class=\"btn btn-success btn-start\">
            <i class=\"fa fa-play\" aria-hidden=\"true\"></i>  Démarrer un nouveau timer
        </a>
    </div>

</div>

{% endblock %}
", "timer/index.html.twig", "/app/templates/timer/index.html.twig");
    }
}
