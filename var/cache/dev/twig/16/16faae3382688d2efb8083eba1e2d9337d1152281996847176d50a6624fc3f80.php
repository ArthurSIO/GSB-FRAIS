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

/* visiteur/enteteVisiteur.html.twig */
class __TwigTemplate_e322a8ff90da5c9bbc35c70159114cae4b91f5ffb954db1720115acd012ef631 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/enteteVisiteur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/enteteVisiteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<nav>
    <ul class=\"menu\">
    <img src=\"/images/gsb.png\" alt=\"\" />
    </ul>
    <ul class=\"menu\">
    <li>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["login"]) || array_key_exists("login", $context) ? $context["login"] : (function () { throw new RuntimeError('Variable "login" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</li>
    </ul>
    <ul class=\"form\">
    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suivreFiche");
        echo "\">Suivre Fiche</a</li>
    <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donnerDate");
        echo "\">Consulter Frais</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renseigner");
        echo "\">Renseigner Frais</a></li>
    <li class=\"pageV\">Menu</li>
    <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Déconnexion</a></li>   
  </ul>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/enteteVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  80 => 14,  76 => 13,  72 => 12,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<nav>
    <ul class=\"menu\">
    <img src=\"/images/gsb.png\" alt=\"\" />
    </ul>
    <ul class=\"menu\">
    <li>{{login}}</li>
    </ul>
    <ul class=\"form\">
    <li><a href=\"{{path( 'suivreFiche')}}\">Suivre Fiche</a</li>
    <li><a href=\"{{path( 'donnerDate')}}\">Consulter Frais</a></li>
    <li><a href=\"{{path( 'renseigner')}}\">Renseigner Frais</a></li>
    <li class=\"pageV\">Menu</li>
    <li><a href=\"{{path( 'accueil')}}\">Déconnexion</a></li>   
  </ul>
</nav>
{% endblock %}", "visiteur/enteteVisiteur.html.twig", "/var/www/html/GSB-FRAIS/templates/visiteur/enteteVisiteur.html.twig");
    }
}
