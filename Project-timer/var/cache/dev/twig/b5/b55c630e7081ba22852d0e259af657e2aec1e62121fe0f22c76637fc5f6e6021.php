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

/* group/index.html.twig */
class __TwigTemplate_b5c4cf4750ffe89c6796245c59e2dee72d1b61c4ecffa459e273d3436136293b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "group/index.html.twig", 1);
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

        echo "Hello Group Controller!";
        
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
        echo "<!--
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/var/www/project/src/Controller/GroupController.php", 0), "html", null, true);
        echo "\">src/Controller/GroupController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/var/www/project/templates/group/index.html.twig", 0), "html", null, true);
        echo "\">templates/group/index.html.twig</a></code></li>
    </ul>
</div>
-->
 <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        .example-wrapper ul {text-decoration: none;}
        .example-wrapper a {text-decoration: none;}
        .example-wrapper ul li {padding: 10px; margin: 10px; text-decoration: none;}
        .example-wrapper ul li a{padding: 10px; margin: 3px; text-decoration: none; display: inline;}
        .example-wrapper a {text-decoration: none;}
    </style>

    <div class=\"container\">
        <div Class=\"row justify-content-center\">
    <h1>Liste des groupes</h1>
            <table Class=\"table\">
                <thead>
                <tr>
                    <th> nom </th>
                    <th> utilisateur </th>
                    <th> modifier </th>
                  <!--  <th colspan=\"3\"> Action</th> -->
                </tr>
                </thead>
            ";
        // line 45
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["group_list"]) || array_key_exists("group_list", $context) ? $context["group_list"] : (function () { throw new RuntimeError('Variable "group_list" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 46
            echo "                <tr>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo " </td>
                ";
            // line 48
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "getUser", [], "any", false, false, false, 48))) {
                // line 49
                echo "                    <td> 
                    - menbre du groupe : 
                    ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "getUser", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                    // line 52
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "firstName", [], "any", false, false, false, 52), "html", null, true);
                    echo " ,
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                    </td>
                    <td>
                        ";
                // line 56
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["group"], "getGroupAdmin", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "                            <a href=\"\">modifier</a>
                        ";
                }
                // line 59
                echo "                    </td>
                ";
            }
            // line 61
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </table>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "group/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 63,  182 => 61,  178 => 59,  174 => 57,  172 => 56,  168 => 54,  159 => 52,  155 => 51,  151 => 49,  149 => 48,  145 => 47,  142 => 46,  137 => 45,  108 => 18,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Group Controller!{% endblock %}

{% block body %}
<!--
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/var/www/project/src/Controller/GroupController.php'|file_link(0) }}\">src/Controller/GroupController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/var/www/project/templates/group/index.html.twig'|file_link(0) }}\">templates/group/index.html.twig</a></code></li>
    </ul>
</div>
-->
 <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        .example-wrapper ul {text-decoration: none;}
        .example-wrapper a {text-decoration: none;}
        .example-wrapper ul li {padding: 10px; margin: 10px; text-decoration: none;}
        .example-wrapper ul li a{padding: 10px; margin: 3px; text-decoration: none; display: inline;}
        .example-wrapper a {text-decoration: none;}
    </style>

    <div class=\"container\">
        <div Class=\"row justify-content-center\">
    <h1>Liste des groupes</h1>
            <table Class=\"table\">
                <thead>
                <tr>
                    <th> nom </th>
                    <th> utilisateur </th>
                    <th> modifier </th>
                  <!--  <th colspan=\"3\"> Action</th> -->
                </tr>
                </thead>
            {# légèrement différent de php avec foreach userList as user #}
            {% for group in group_list %}
                <tr>
                <td>{{ group.name }} </td>
                {% if group.getUser is not empty %}
                    <td> 
                    - menbre du groupe : 
                    {% for users in group.getUser %}
                        {{users.firstName}} ,
                    {% endfor %}
                    </td>
                    <td>
                        {% if group.getGroupAdmin == app.user.id %}
                            <a href=\"\">modifier</a>
                        {% endif %}
                    </td>
                {% endif %}
                </tr>
            {% endfor %}
            </table>
    </div>
    </div>
{% endblock %}
", "group/index.html.twig", "/app/templates/group/index.html.twig");
    }
}
