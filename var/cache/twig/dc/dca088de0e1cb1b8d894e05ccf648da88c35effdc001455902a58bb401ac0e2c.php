<?php

/* user/modif.html.twig */
class __TwigTemplate_c233ba45949b539c799410a8064dfd1d8dee17f7fa5ad20c36f61744f9d082af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/modif.html.twig", 1);
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
        $__internal_e02436d1fea2a630397dd817b9f20037cf73fe96f547ab18e9b32dab15cf0d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02436d1fea2a630397dd817b9f20037cf73fe96f547ab18e9b32dab15cf0d6f->enter($__internal_e02436d1fea2a630397dd817b9f20037cf73fe96f547ab18e9b32dab15cf0d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/modif.html.twig"));

        $__internal_a6b014ec8139453e697ee0dec2747a250b423aea822c583d3b513afb4ff99803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b014ec8139453e697ee0dec2747a250b423aea822c583d3b513afb4ff99803->enter($__internal_a6b014ec8139453e697ee0dec2747a250b423aea822c583d3b513afb4ff99803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02436d1fea2a630397dd817b9f20037cf73fe96f547ab18e9b32dab15cf0d6f->leave($__internal_e02436d1fea2a630397dd817b9f20037cf73fe96f547ab18e9b32dab15cf0d6f_prof);

        
        $__internal_a6b014ec8139453e697ee0dec2747a250b423aea822c583d3b513afb4ff99803->leave($__internal_a6b014ec8139453e697ee0dec2747a250b423aea822c583d3b513afb4ff99803_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75593b50580599a9c24cd0ff9e4426ba1528b501c6339d359c2ce96d5bf892a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75593b50580599a9c24cd0ff9e4426ba1528b501c6339d359c2ce96d5bf892a6->enter($__internal_75593b50580599a9c24cd0ff9e4426ba1528b501c6339d359c2ce96d5bf892a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56e8d0312da300fa8626bc21d87c923fb5d1adb047b0872f0c27702361f003f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e8d0312da300fa8626bc21d87c923fb5d1adb047b0872f0c27702361f003f6->enter($__internal_56e8d0312da300fa8626bc21d87c923fb5d1adb047b0872f0c27702361f003f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modification de votre profil";
        
        $__internal_56e8d0312da300fa8626bc21d87c923fb5d1adb047b0872f0c27702361f003f6->leave($__internal_56e8d0312da300fa8626bc21d87c923fb5d1adb047b0872f0c27702361f003f6_prof);

        
        $__internal_75593b50580599a9c24cd0ff9e4426ba1528b501c6339d359c2ce96d5bf892a6->leave($__internal_75593b50580599a9c24cd0ff9e4426ba1528b501c6339d359c2ce96d5bf892a6_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_051160147c6bfc284d0a995ac9aa9466c603bebba35e1ee953ff40fce09878f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051160147c6bfc284d0a995ac9aa9466c603bebba35e1ee953ff40fce09878f6->enter($__internal_051160147c6bfc284d0a995ac9aa9466c603bebba35e1ee953ff40fce09878f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1d66d9418ba9600c08dce2c4a796cdd6451e70c12e2d0bb65121f47a07ca162b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d66d9418ba9600c08dce2c4a796cdd6451e70c12e2d0bb65121f47a07ca162b->enter($__internal_1d66d9418ba9600c08dce2c4a796cdd6451e70c12e2d0bb65121f47a07ca162b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Modification de votre profil</h1>
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-12 col-sm-12 col-xs-12\">
    <form method=\"post\">
        <input type=\"hidden\" name=\"id_user\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id_user", array()), "html", null, true);
        echo "\">
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
            <input type=\"date\" name=\"date_naissance\" class=\"form-control\" id=\"date_naissance\" value=";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()), "d/m/Y"), "html", null, true);
        echo ">
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
        
        $__internal_1d66d9418ba9600c08dce2c4a796cdd6451e70c12e2d0bb65121f47a07ca162b->leave($__internal_1d66d9418ba9600c08dce2c4a796cdd6451e70c12e2d0bb65121f47a07ca162b_prof);

        
        $__internal_051160147c6bfc284d0a995ac9aa9466c603bebba35e1ee953ff40fce09878f6->leave($__internal_051160147c6bfc284d0a995ac9aa9466c603bebba35e1ee953ff40fce09878f6_prof);

    }

    public function getTemplateName()
    {
        return "user/modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  142 => 55,  134 => 50,  126 => 45,  118 => 40,  105 => 30,  97 => 25,  89 => 20,  81 => 15,  75 => 12,  68 => 7,  59 => 6,  41 => 3,  11 => 1,);
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

{% block title \"Modification de votre profil\" %}


{% block content %}
    <h1>Modification de votre profil</h1>
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-12 col-sm-12 col-xs-12\">
    <form method=\"post\">
        <input type=\"hidden\" name=\"id_user\" value=\"{{ user.id_user }}\">
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
            <input type=\"date\" name=\"date_naissance\" class=\"form-control\" id=\"date_naissance\" value={{ user.date_naissance|date('d/m/Y') }}>
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
", "user/modif.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\user\\modif.html.twig");
    }
}
