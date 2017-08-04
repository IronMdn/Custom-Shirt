<?php

/* user/register.html.twig */
class __TwigTemplate_fa268cef3bd1f55519d1b1567514a889b503e4c7a0add5fa1c21780446453cdc extends Twig_Template
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
        $__internal_2217c52f1adea032a827d159889a9e801577e277d8bb031639f3def3d8390bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2217c52f1adea032a827d159889a9e801577e277d8bb031639f3def3d8390bd6->enter($__internal_2217c52f1adea032a827d159889a9e801577e277d8bb031639f3def3d8390bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_d21a7b25998485ba20468f39d1f8d3fa0469ed182fde048e0e57e6815cae2f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21a7b25998485ba20468f39d1f8d3fa0469ed182fde048e0e57e6815cae2f19->enter($__internal_d21a7b25998485ba20468f39d1f8d3fa0469ed182fde048e0e57e6815cae2f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2217c52f1adea032a827d159889a9e801577e277d8bb031639f3def3d8390bd6->leave($__internal_2217c52f1adea032a827d159889a9e801577e277d8bb031639f3def3d8390bd6_prof);

        
        $__internal_d21a7b25998485ba20468f39d1f8d3fa0469ed182fde048e0e57e6815cae2f19->leave($__internal_d21a7b25998485ba20468f39d1f8d3fa0469ed182fde048e0e57e6815cae2f19_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_539595ecfd85275e11eba9d987dcd3fd5a4d00983862c36fd7e4c1fda3e1f352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539595ecfd85275e11eba9d987dcd3fd5a4d00983862c36fd7e4c1fda3e1f352->enter($__internal_539595ecfd85275e11eba9d987dcd3fd5a4d00983862c36fd7e4c1fda3e1f352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6a97410735605db8a49dbb0d5457f9571c30208f939db7ad93574585bc6e973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a97410735605db8a49dbb0d5457f9571c30208f939db7ad93574585bc6e973->enter($__internal_b6a97410735605db8a49dbb0d5457f9571c30208f939db7ad93574585bc6e973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_b6a97410735605db8a49dbb0d5457f9571c30208f939db7ad93574585bc6e973->leave($__internal_b6a97410735605db8a49dbb0d5457f9571c30208f939db7ad93574585bc6e973_prof);

        
        $__internal_539595ecfd85275e11eba9d987dcd3fd5a4d00983862c36fd7e4c1fda3e1f352->leave($__internal_539595ecfd85275e11eba9d987dcd3fd5a4d00983862c36fd7e4c1fda3e1f352_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_da29fdf4d8e5397a7fba86f0951895c2fbf8d090bab62e4045cfb3c435aa3c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da29fdf4d8e5397a7fba86f0951895c2fbf8d090bab62e4045cfb3c435aa3c8d->enter($__internal_da29fdf4d8e5397a7fba86f0951895c2fbf8d090bab62e4045cfb3c435aa3c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_793ce3342ce77000dd50bb75c8fbddac4da18d2825f3e1944663f1da5e62d348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793ce3342ce77000dd50bb75c8fbddac4da18d2825f3e1944663f1da5e62d348->enter($__internal_793ce3342ce77000dd50bb75c8fbddac4da18d2825f3e1944663f1da5e62d348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_793ce3342ce77000dd50bb75c8fbddac4da18d2825f3e1944663f1da5e62d348->leave($__internal_793ce3342ce77000dd50bb75c8fbddac4da18d2825f3e1944663f1da5e62d348_prof);

        
        $__internal_da29fdf4d8e5397a7fba86f0951895c2fbf8d090bab62e4045cfb3c435aa3c8d->leave($__internal_da29fdf4d8e5397a7fba86f0951895c2fbf8d090bab62e4045cfb3c435aa3c8d_prof);

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
", "user/register.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\user\\register.html.twig");
    }
}
