<?php

/* user/login.html.twig */
class __TwigTemplate_55951f89559fea469d26b697302dd5bd656234d662153cbdaaf2e2b29440d076 extends Twig_Template
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
        $__internal_cb09075788528106fe9b5204801a9430edd9c3862106d25977f06b6f8c076b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb09075788528106fe9b5204801a9430edd9c3862106d25977f06b6f8c076b80->enter($__internal_cb09075788528106fe9b5204801a9430edd9c3862106d25977f06b6f8c076b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_d8fa08108d19e37121ca6c69abf009c63a9e9f95292d72b8a7b0edec7860641e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fa08108d19e37121ca6c69abf009c63a9e9f95292d72b8a7b0edec7860641e->enter($__internal_d8fa08108d19e37121ca6c69abf009c63a9e9f95292d72b8a7b0edec7860641e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb09075788528106fe9b5204801a9430edd9c3862106d25977f06b6f8c076b80->leave($__internal_cb09075788528106fe9b5204801a9430edd9c3862106d25977f06b6f8c076b80_prof);

        
        $__internal_d8fa08108d19e37121ca6c69abf009c63a9e9f95292d72b8a7b0edec7860641e->leave($__internal_d8fa08108d19e37121ca6c69abf009c63a9e9f95292d72b8a7b0edec7860641e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ee3b055ec18ae8e79957a5335cd7bf04108e9918ac6d983f71b6b43cd62b016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee3b055ec18ae8e79957a5335cd7bf04108e9918ac6d983f71b6b43cd62b016->enter($__internal_5ee3b055ec18ae8e79957a5335cd7bf04108e9918ac6d983f71b6b43cd62b016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d19c90e040bcc90f0507604be4be7720f988dd84fd5b0efa5bb43f36fdfca103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19c90e040bcc90f0507604be4be7720f988dd84fd5b0efa5bb43f36fdfca103->enter($__internal_d19c90e040bcc90f0507604be4be7720f988dd84fd5b0efa5bb43f36fdfca103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_d19c90e040bcc90f0507604be4be7720f988dd84fd5b0efa5bb43f36fdfca103->leave($__internal_d19c90e040bcc90f0507604be4be7720f988dd84fd5b0efa5bb43f36fdfca103_prof);

        
        $__internal_5ee3b055ec18ae8e79957a5335cd7bf04108e9918ac6d983f71b6b43cd62b016->leave($__internal_5ee3b055ec18ae8e79957a5335cd7bf04108e9918ac6d983f71b6b43cd62b016_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6859c03c6acb836af7bd9cd65b106aa99c6a48db8d5f4883cb99f4f73321cdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6859c03c6acb836af7bd9cd65b106aa99c6a48db8d5f4883cb99f4f73321cdf8->enter($__internal_6859c03c6acb836af7bd9cd65b106aa99c6a48db8d5f4883cb99f4f73321cdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_396635269ca91dd982b8e83e148f7f99242b05060a0e343e76e68e625d9fef35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396635269ca91dd982b8e83e148f7f99242b05060a0e343e76e68e625d9fef35->enter($__internal_396635269ca91dd982b8e83e148f7f99242b05060a0e343e76e68e625d9fef35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_396635269ca91dd982b8e83e148f7f99242b05060a0e343e76e68e625d9fef35->leave($__internal_396635269ca91dd982b8e83e148f7f99242b05060a0e343e76e68e625d9fef35_prof);

        
        $__internal_6859c03c6acb836af7bd9cd65b106aa99c6a48db8d5f4883cb99f4f73321cdf8->leave($__internal_6859c03c6acb836af7bd9cd65b106aa99c6a48db8d5f4883cb99f4f73321cdf8_prof);

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
", "user/login.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\templates\\user\\login.html.twig");
    }
}
