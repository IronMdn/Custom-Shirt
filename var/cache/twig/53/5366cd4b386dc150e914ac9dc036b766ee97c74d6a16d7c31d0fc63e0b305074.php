<?php

/* user/register.html.twig */
class __TwigTemplate_eacc5c004d321c1207cdac1c891c4dde8ff20622376e9e84dfda4492a4f10b27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6032c375b6854badc0692d2ca55919eb28441ba8858a798f543982e05ebe674e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6032c375b6854badc0692d2ca55919eb28441ba8858a798f543982e05ebe674e->enter($__internal_6032c375b6854badc0692d2ca55919eb28441ba8858a798f543982e05ebe674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_5122625a73ac74c4d3ab444f7cc5af867581f1110bfc0a51a899f1d1790f9de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5122625a73ac74c4d3ab444f7cc5af867581f1110bfc0a51a899f1d1790f9de8->enter($__internal_5122625a73ac74c4d3ab444f7cc5af867581f1110bfc0a51a899f1d1790f9de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6032c375b6854badc0692d2ca55919eb28441ba8858a798f543982e05ebe674e->leave($__internal_6032c375b6854badc0692d2ca55919eb28441ba8858a798f543982e05ebe674e_prof);

        
        $__internal_5122625a73ac74c4d3ab444f7cc5af867581f1110bfc0a51a899f1d1790f9de8->leave($__internal_5122625a73ac74c4d3ab444f7cc5af867581f1110bfc0a51a899f1d1790f9de8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d46e3834c6faafc2edebebd3bbf83b7ee824499abde6728a2d37ac6cca3dcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d46e3834c6faafc2edebebd3bbf83b7ee824499abde6728a2d37ac6cca3dcf0->enter($__internal_6d46e3834c6faafc2edebebd3bbf83b7ee824499abde6728a2d37ac6cca3dcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b11505f0512061d03632d8a1a39d9e5dc676b1baad8d8d74419ac584476861c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b11505f0512061d03632d8a1a39d9e5dc676b1baad8d8d74419ac584476861c->enter($__internal_9b11505f0512061d03632d8a1a39d9e5dc676b1baad8d8d74419ac584476861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_9b11505f0512061d03632d8a1a39d9e5dc676b1baad8d8d74419ac584476861c->leave($__internal_9b11505f0512061d03632d8a1a39d9e5dc676b1baad8d8d74419ac584476861c_prof);

        
        $__internal_6d46e3834c6faafc2edebebd3bbf83b7ee824499abde6728a2d37ac6cca3dcf0->leave($__internal_6d46e3834c6faafc2edebebd3bbf83b7ee824499abde6728a2d37ac6cca3dcf0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f17caa084a5579504ff49a33313e4e27e0c83b7aea21b42287938aca6a288e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f17caa084a5579504ff49a33313e4e27e0c83b7aea21b42287938aca6a288e0->enter($__internal_0f17caa084a5579504ff49a33313e4e27e0c83b7aea21b42287938aca6a288e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cf0424e6e7b6844d6aeab6d4b6ce1efa9a5fcfb760313b8ecc77903bf206fc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0424e6e7b6844d6aeab6d4b6ce1efa9a5fcfb760313b8ecc77903bf206fc1b->enter($__internal_cf0424e6e7b6844d6aeab6d4b6ce1efa9a5fcfb760313b8ecc77903bf206fc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container\">
        <h1>Inscription</h1>
        <form method=\"post\">
            <div class=\"form-group\">
                <label>Nom</label>
                <input type=\"text\" name=\"nom\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Prénom</label>
                <input type=\"text\" name=\"prenom\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Date de naissance</label>
                <input type=\"date\" name=\"date_naissance\" value=\"";
        // line 19
        if ( !(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()), "d/m/Y"), "html", null, true);
        }
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Email</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Mot de passe</label>
                <input type=\"password\" name=\"password\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Confirmation du mot de passe</label>
                <input type=\"password\" name=\"password_confirm\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Adresse</label>
                <input type=\"text\" name=\"adresse\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Complément d'adresse</label>
                <input type=\"text\" name=\"complement_adresse\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "complement_adresse", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Code postal</label>
                <input type=\"number\" name=\"code_postal\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "code_postal", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Ville</label>
                <input type=\"text\" name=\"ville\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Téléphone</label>
                <input type=\"text\" name=\"tel\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tel", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Sexe</label>
                <select name='sexe'>
                    <option value=''>Quel est votre sexe ?</option>
                    <option value='m'>Homme</option>
                    <option value='f'>Femme</option>
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">
                Enregistrer
            </button>
        </form>
    </div>
";
        
        $__internal_cf0424e6e7b6844d6aeab6d4b6ce1efa9a5fcfb760313b8ecc77903bf206fc1b->leave($__internal_cf0424e6e7b6844d6aeab6d4b6ce1efa9a5fcfb760313b8ecc77903bf206fc1b_prof);

        
        $__internal_0f17caa084a5579504ff49a33313e4e27e0c83b7aea21b42287938aca6a288e0->leave($__internal_0f17caa084a5579504ff49a33313e4e27e0c83b7aea21b42287938aca6a288e0_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  134 => 47,  127 => 43,  120 => 39,  113 => 35,  98 => 23,  89 => 19,  82 => 15,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title 'Inscription' %}

{% block content %}
    <div class=\"container\">
        <h1>Inscription</h1>
        <form method=\"post\">
            <div class=\"form-group\">
                <label>Nom</label>
                <input type=\"text\" name=\"nom\" value=\"{{ user.nom }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Prénom</label>
                <input type=\"text\" name=\"prenom\" value=\"{{ user.prenom }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Date de naissance</label>
                <input type=\"date\" name=\"date_naissance\" value=\"{% if user.date_naissance is not null %}{{ user.date_naissance|date('d/m/Y') }}{% endif %}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Email</label>
                <input type=\"text\" name=\"email\" value=\"{{ user.email }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Mot de passe</label>
                <input type=\"password\" name=\"password\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Confirmation du mot de passe</label>
                <input type=\"password\" name=\"password_confirm\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Adresse</label>
                <input type=\"text\" name=\"adresse\" value=\"{{ user.adresse }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Complément d'adresse</label>
                <input type=\"text\" name=\"complement_adresse\" value=\"{{ user.complement_adresse }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Code postal</label>
                <input type=\"number\" name=\"code_postal\" value=\"{{ user.code_postal }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Ville</label>
                <input type=\"text\" name=\"ville\" value=\"{{ user.ville }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Téléphone</label>
                <input type=\"text\" name=\"tel\" value=\"{{ user.tel }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Sexe</label>
                <select name='sexe'>
                    <option value=''>Quel est votre sexe ?</option>
                    <option value='m'>Homme</option>
                    <option value='f'>Femme</option>
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">
                Enregistrer
            </button>
        </form>
    </div>
{% endblock %}
", "user/register.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\templates\\user\\register.html.twig");
    }
}
