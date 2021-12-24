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

/* ajout_article/index.html.twig */
class __TwigTemplate_41a58bc023a5917b32ec4174ed9d26ed44421f7030199f33a63e730e0ebec358 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajout_article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajout_article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ajout_article/index.html.twig", 1);
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

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
";
        
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
        echo "\t<style></style>

\t<div class=\"container\">
\t\t<h1>
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "
\t\t</h1>
\t\t<form action=\"\" method=\"get\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"designateur\">Designateur</label>
\t\t\t\t<input type=\"text\" name=\"designateur\" class=\"form-control\" id=\"designateur\" area-describedby=\"designateurHelp\" placeholder=\"Designateur\"/>

\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t<input type=\"text\" name=\"description\" class=\"form-control\" id=\"description\" area-describedby=\"descriptionHelp\" placeholder=\"Description\"/>

\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"prix\">Prix</label>
\t\t\t\t<input type=\"text\" name=\"prix\" class=\"form-control\" id=\"prix\" area-describedby=\"prixHelp\" placeholder=\"Prix\"/>

\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add</button>
\t\t\t\t<button type=\"reset\" class=\"btn btn-light\">Cancel</button>
\t\t\t</div>
\t\t</form>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ajout_article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 12,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ controller_name }}
{% endblock %}

{% block body %}
\t<style></style>

\t<div class=\"container\">
\t\t<h1>
\t\t\t{{ controller_name }}
\t\t</h1>
\t\t<form action=\"\" method=\"get\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"designateur\">Designateur</label>
\t\t\t\t<input type=\"text\" name=\"designateur\" class=\"form-control\" id=\"designateur\" area-describedby=\"designateurHelp\" placeholder=\"Designateur\"/>

\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"description\">Description</label>
\t\t\t\t<input type=\"text\" name=\"description\" class=\"form-control\" id=\"description\" area-describedby=\"descriptionHelp\" placeholder=\"Description\"/>

\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"prix\">Prix</label>
\t\t\t\t<input type=\"text\" name=\"prix\" class=\"form-control\" id=\"prix\" area-describedby=\"prixHelp\" placeholder=\"Prix\"/>

\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add</button>
\t\t\t\t<button type=\"reset\" class=\"btn btn-light\">Cancel</button>
\t\t\t</div>
\t\t</form>
\t</div>
{% endblock %}
", "ajout_article/index.html.twig", "C:\\xampp\\htdocs\\project1\\templates\\ajout_article\\index.html.twig");
    }
}
