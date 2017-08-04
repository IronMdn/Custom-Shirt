<?php

/* admin/user/admin_clients.html.twig */
class __TwigTemplate_983717d3e2d94f8a55017377b0bd468f53f5b74eb015fb2c232042e840e14984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/user/admin_clients.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03263c470d481315b50a71a1f890c5110624511d1a57b908c314a8b274accb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03263c470d481315b50a71a1f890c5110624511d1a57b908c314a8b274accb23->enter($__internal_03263c470d481315b50a71a1f890c5110624511d1a57b908c314a8b274accb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/admin_clients.html.twig"));

        $__internal_bd8be60a10a8e30cf31b7254a86eaec1e51e5f205119bdaaba7b8fb91bf011c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8be60a10a8e30cf31b7254a86eaec1e51e5f205119bdaaba7b8fb91bf011c5->enter($__internal_bd8be60a10a8e30cf31b7254a86eaec1e51e5f205119bdaaba7b8fb91bf011c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/admin_clients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03263c470d481315b50a71a1f890c5110624511d1a57b908c314a8b274accb23->leave($__internal_03263c470d481315b50a71a1f890c5110624511d1a57b908c314a8b274accb23_prof);

        
        $__internal_bd8be60a10a8e30cf31b7254a86eaec1e51e5f205119bdaaba7b8fb91bf011c5->leave($__internal_bd8be60a10a8e30cf31b7254a86eaec1e51e5f205119bdaaba7b8fb91bf011c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e610698a88b4c6fddc49fae8a4264cecdf2fc4fb12cda5982c653204774dfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e610698a88b4c6fddc49fae8a4264cecdf2fc4fb12cda5982c653204774dfa8->enter($__internal_0e610698a88b4c6fddc49fae8a4264cecdf2fc4fb12cda5982c653204774dfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d18fcc6d9780981f62cfbe7d0933db976298c8ae211cc04dfcb4a45756277da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18fcc6d9780981f62cfbe7d0933db976298c8ae211cc04dfcb4a45756277da8->enter($__internal_d18fcc6d9780981f62cfbe7d0933db976298c8ae211cc04dfcb4a45756277da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin Client";
        
        $__internal_d18fcc6d9780981f62cfbe7d0933db976298c8ae211cc04dfcb4a45756277da8->leave($__internal_d18fcc6d9780981f62cfbe7d0933db976298c8ae211cc04dfcb4a45756277da8_prof);

        
        $__internal_0e610698a88b4c6fddc49fae8a4264cecdf2fc4fb12cda5982c653204774dfa8->leave($__internal_0e610698a88b4c6fddc49fae8a4264cecdf2fc4fb12cda5982c653204774dfa8_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_05992847b153d285e0f81e8d5fc1afb17796b59540ad04ff5227af934c4ba2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05992847b153d285e0f81e8d5fc1afb17796b59540ad04ff5227af934c4ba2b2->enter($__internal_05992847b153d285e0f81e8d5fc1afb17796b59540ad04ff5227af934c4ba2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c16e064b784fa874896d80fdc32c78b71c659d371dbd3749cc19a20cc712b6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16e064b784fa874896d80fdc32c78b71c659d371dbd3749cc19a20cc712b6ab->enter($__internal_c16e064b784fa874896d80fdc32c78b71c659d371dbd3749cc19a20cc712b6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>PANEL ADMINISTRATEUR</h1>
    <h2>Edition client</h2>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-sm-12 col-xs-12\">
                <form method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"prenom\">Prénom</label>
                        <input type=\"text\" name=\"prenom\" class=\"form-control\" id=\"prenom\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"nom\">Nom</label>
                        <input type=\"text\" name=\"nom\" class=\"form-control\" id=\"nom\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date_naissance\">Date de naissance</label>
                        <input type=\"date\" name=\"date_naissance\" class=\"form-control\" id=\"date_naissance\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()), "d/m/Y"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email\">Courriel</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" value=\"******\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"adresse\">Adresse</label>
                        <input type=\"text\" name=\"adresse\" class=\"form-control\" id=\"adresse\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"complement_adresse\">Complément d'adresse</label>
                        <input type=\"text\" name=\"complement_adresse\" class=\"form-control\" id=\"complement_adresse\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "complement_adresse", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"code_postal\">Code postal</label>
                        <input type=\"number\" name=\"code_postal\" class=\"form-control\" id=\"code_postal\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "code_postal", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"ville\">Ville</label>
                        <input type=\"text\" name=\"ville\" class=\"form-control\" id=\"ville\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"tel\">Téléphone</label>
                        <input type=\"text\" name=\"tel\" class=\"form-control\" id=\"tel\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tel", array()), "html", null, true);
        echo "\">
                    </div>


                    <div class=\"form-group\">
                        <label for=\"\">Sexe</label>
                        <select name=\"sexe\" id=\"sexe\">
                                            <option value=\"masculin\">Masculin</option>
                            <option value=\"feminin\">Féminin</option>
                                        </select>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\" Value=\"Envoi\">
                        Enregistrer
                    </button>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_c16e064b784fa874896d80fdc32c78b71c659d371dbd3749cc19a20cc712b6ab->leave($__internal_c16e064b784fa874896d80fdc32c78b71c659d371dbd3749cc19a20cc712b6ab_prof);

        
        $__internal_05992847b153d285e0f81e8d5fc1afb17796b59540ad04ff5227af934c4ba2b2->leave($__internal_05992847b153d285e0f81e8d5fc1afb17796b59540ad04ff5227af934c4ba2b2_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b91cd050b9872f00042684bb963c7d17455c5c4c8ca0164398ca3625824c089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b91cd050b9872f00042684bb963c7d17455c5c4c8ca0164398ca3625824c089->enter($__internal_8b91cd050b9872f00042684bb963c7d17455c5c4c8ca0164398ca3625824c089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1089c70c50198fb675e3bf9c069c4b0df469979953805521d35e8f423698707f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1089c70c50198fb675e3bf9c069c4b0df469979953805521d35e8f423698707f->enter($__internal_1089c70c50198fb675e3bf9c069c4b0df469979953805521d35e8f423698707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 83
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
       <link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   ";
        
        $__internal_1089c70c50198fb675e3bf9c069c4b0df469979953805521d35e8f423698707f->leave($__internal_1089c70c50198fb675e3bf9c069c4b0df469979953805521d35e8f423698707f_prof);

        
        $__internal_8b91cd050b9872f00042684bb963c7d17455c5c4c8ca0164398ca3625824c089->leave($__internal_8b91cd050b9872f00042684bb963c7d17455c5c4c8ca0164398ca3625824c089_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/admin_clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 84,  187 => 83,  178 => 82,  148 => 60,  140 => 55,  132 => 50,  124 => 45,  116 => 40,  103 => 30,  95 => 25,  87 => 20,  79 => 15,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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

{% block title \"Admin Client\" %}
    

{% block content %}
    <h1>PANEL ADMINISTRATEUR</h1>
    <h2>Edition client</h2>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-sm-12 col-xs-12\">
                <form method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"prenom\">Prénom</label>
                        <input type=\"text\" name=\"prenom\" class=\"form-control\" id=\"prenom\" value=\"{{ user.prenom }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"nom\">Nom</label>
                        <input type=\"text\" name=\"nom\" class=\"form-control\" id=\"nom\" value=\"{{ user.nom }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date_naissance\">Date de naissance</label>
                        <input type=\"date\" name=\"date_naissance\" class=\"form-control\" id=\"date_naissance\" value=\"{{ user.date_naissance|date('d/m/Y') }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email\">Courriel</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"{{ user.email }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" value=\"******\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"adresse\">Adresse</label>
                        <input type=\"text\" name=\"adresse\" class=\"form-control\" id=\"adresse\" value=\"{{ user.adresse }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"complement_adresse\">Complément d'adresse</label>
                        <input type=\"text\" name=\"complement_adresse\" class=\"form-control\" id=\"complement_adresse\" value=\"{{ user.complement_adresse }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"code_postal\">Code postal</label>
                        <input type=\"number\" name=\"code_postal\" class=\"form-control\" id=\"code_postal\" value=\"{{ user.code_postal }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"ville\">Ville</label>
                        <input type=\"text\" name=\"ville\" class=\"form-control\" id=\"ville\" value=\"{{ user.ville }}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"tel\">Téléphone</label>
                        <input type=\"text\" name=\"tel\" class=\"form-control\" id=\"tel\" value=\"{{ user.tel }}\">
                    </div>


                    <div class=\"form-group\">
                        <label for=\"\">Sexe</label>
                        <select name=\"sexe\" id=\"sexe\">
                                            <option value=\"masculin\">Masculin</option>
                            <option value=\"feminin\">Féminin</option>
                                        </select>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\" Value=\"Envoi\">
                        Enregistrer
                    </button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

    
{% block stylesheets %}
       {{ parent() }}
       <link href=\"{{ asset('css/profile.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
   {% endblock %}
", "admin/user/admin_clients.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\admin\\user\\admin_clients.html.twig");
    }
}
