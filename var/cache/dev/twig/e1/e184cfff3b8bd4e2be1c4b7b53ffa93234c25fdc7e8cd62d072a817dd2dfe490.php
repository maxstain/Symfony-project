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

/* shared/_menu.html.twig */
class __TwigTemplate_4ceb72e4ce4724dfca258a1118b8f4fa73e1f4b6c7ee89f0d0dae7df0ae12c9a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<a class=\"navbar-brand\" href=\"/\">Shopify.tn</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t\t<ul class=\"mr-auto navbar-nav\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/\">Home
\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tArticles
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/articles\">Liste Articles</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/articles/add\">Ajouter Article</a>
\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"my-2 my-lg-0\">
\t\t\tHello, ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
            echo "
\t\t</div>
\t\t<div class=\"mx-2\">
\t\t\t|
\t\t</div>
\t\t<div class=\"my-2 my-lg-0\">
\t\t\t<a href=\"/logout\">Logout</a>
\t\t</div>
\t\t";
        } else {
            // line 36
            echo "\t\t<div class=\"my-2 my-lg-0\">
\t\t\t<a href=\"/login\">Login</a>
\t\t</div>
\t\t";
        }
        // line 40
        echo "\t</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  86 => 36,  74 => 27,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<a class=\"navbar-brand\" href=\"/\">Shopify.tn</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t{% if app.user %}
\t\t<ul class=\"mr-auto navbar-nav\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"/\">Home
\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tArticles
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/articles\">Liste Articles</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/articles/add\">Ajouter Article</a>
\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"my-2 my-lg-0\">
\t\t\tHello, {{ app.user.username }}
\t\t</div>
\t\t<div class=\"mx-2\">
\t\t\t|
\t\t</div>
\t\t<div class=\"my-2 my-lg-0\">
\t\t\t<a href=\"/logout\">Logout</a>
\t\t</div>
\t\t{% else %}
\t\t<div class=\"my-2 my-lg-0\">
\t\t\t<a href=\"/login\">Login</a>
\t\t</div>
\t\t{% endif %}
\t</div>
</nav>
", "shared/_menu.html.twig", "C:\\xampp\\htdocs\\Symfony-project\\templates\\shared\\_menu.html.twig");
    }
}
