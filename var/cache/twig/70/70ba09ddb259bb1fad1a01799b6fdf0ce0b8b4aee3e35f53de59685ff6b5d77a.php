<?php

/* user/login.html.twig */
class __TwigTemplate_61552508f8c95e78b8bc8f4086743aa8a6aa42cf55012eed0a5a1a2ba642335c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/login.html.twig", 1);
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
        $__internal_f14e6174555df85e5201a3e2fb5bc5ad43452a13b11a919ab358b2782a98c9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14e6174555df85e5201a3e2fb5bc5ad43452a13b11a919ab358b2782a98c9e1->enter($__internal_f14e6174555df85e5201a3e2fb5bc5ad43452a13b11a919ab358b2782a98c9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_2c3e8c11d9f3d88d1e54d36504ce01b3aa50ee5fa8668eea70ac8e84b54214be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3e8c11d9f3d88d1e54d36504ce01b3aa50ee5fa8668eea70ac8e84b54214be->enter($__internal_2c3e8c11d9f3d88d1e54d36504ce01b3aa50ee5fa8668eea70ac8e84b54214be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f14e6174555df85e5201a3e2fb5bc5ad43452a13b11a919ab358b2782a98c9e1->leave($__internal_f14e6174555df85e5201a3e2fb5bc5ad43452a13b11a919ab358b2782a98c9e1_prof);

        
        $__internal_2c3e8c11d9f3d88d1e54d36504ce01b3aa50ee5fa8668eea70ac8e84b54214be->leave($__internal_2c3e8c11d9f3d88d1e54d36504ce01b3aa50ee5fa8668eea70ac8e84b54214be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7aaabb106a2e756075e0328fef58bbee2581aded3a390ce846180ee6a74e21c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaabb106a2e756075e0328fef58bbee2581aded3a390ce846180ee6a74e21c9->enter($__internal_7aaabb106a2e756075e0328fef58bbee2581aded3a390ce846180ee6a74e21c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b43be1a42dab3082ec4c5b83e7e3001752207a941afe1b66aa6b8d39a3b3d648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43be1a42dab3082ec4c5b83e7e3001752207a941afe1b66aa6b8d39a3b3d648->enter($__internal_b43be1a42dab3082ec4c5b83e7e3001752207a941afe1b66aa6b8d39a3b3d648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_b43be1a42dab3082ec4c5b83e7e3001752207a941afe1b66aa6b8d39a3b3d648->leave($__internal_b43be1a42dab3082ec4c5b83e7e3001752207a941afe1b66aa6b8d39a3b3d648_prof);

        
        $__internal_7aaabb106a2e756075e0328fef58bbee2581aded3a390ce846180ee6a74e21c9->leave($__internal_7aaabb106a2e756075e0328fef58bbee2581aded3a390ce846180ee6a74e21c9_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff73fbfaf8ca038cdd15aca98d5b70c38ade9ba76db94bbc2e68858c3256753d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff73fbfaf8ca038cdd15aca98d5b70c38ade9ba76db94bbc2e68858c3256753d->enter($__internal_ff73fbfaf8ca038cdd15aca98d5b70c38ade9ba76db94bbc2e68858c3256753d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fe0fb4a168e03a684e16f43d2f9544092cd93bf65ec50e0e7dd4dd90b2fd1ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0fb4a168e03a684e16f43d2f9544092cd93bf65ec50e0e7dd4dd90b2fd1ae4->enter($__internal_fe0fb4a168e03a684e16f43d2f9544092cd93bf65ec50e0e7dd4dd90b2fd1ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Connexion</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Email</label>
            <input type=\"text\" name=\"email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label>Mot de passe</label>
            <input type=\"password\" name=\"password\" class=\"form-control\">
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\"> 
            Se connecter
        </button>
        <a href=''>Mot de passe oublié ?</a>
    </form>
    <br>
    <a href='";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "'>Pas encore de compte ? Accédez au formulaire d'inscription en cliquant sur ce lien.</a>
 ";
        
        $__internal_fe0fb4a168e03a684e16f43d2f9544092cd93bf65ec50e0e7dd4dd90b2fd1ae4->leave($__internal_fe0fb4a168e03a684e16f43d2f9544092cd93bf65ec50e0e7dd4dd90b2fd1ae4_prof);

        
        $__internal_ff73fbfaf8ca038cdd15aca98d5b70c38ade9ba76db94bbc2e68858c3256753d->leave($__internal_ff73fbfaf8ca038cdd15aca98d5b70c38ade9ba76db94bbc2e68858c3256753d_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Connexion' %}

{% block content %}
<h1>Connexion</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Email</label>
            <input type=\"text\" name=\"email\" value=\"{{ email }}\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label>Mot de passe</label>
            <input type=\"password\" name=\"password\" class=\"form-control\">
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\"> 
            Se connecter
        </button>
        <a href=''>Mot de passe oublié ?</a>
    </form>
    <br>
    <a href='{{ path('register') }}'>Pas encore de compte ? Accédez au formulaire d'inscription en cliquant sur ce lien.</a>
 {% endblock %}
", "user/login.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\user\\login.html.twig");
    }
}
