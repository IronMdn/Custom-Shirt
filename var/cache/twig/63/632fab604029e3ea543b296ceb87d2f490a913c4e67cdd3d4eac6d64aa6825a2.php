<?php

/* custom/mesure_etape1.html.twig */
class __TwigTemplate_88c3d4accaf0f5c642b11f7022bbc76e42f73cf43b5c0f89d4168b011d0d30aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/mesure_etape1.html.twig", 1);
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
        $__internal_2f5b82ed3aafaf1f524d26921cb9b1d66914593a199685d3b53204997e26055c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5b82ed3aafaf1f524d26921cb9b1d66914593a199685d3b53204997e26055c->enter($__internal_2f5b82ed3aafaf1f524d26921cb9b1d66914593a199685d3b53204997e26055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/mesure_etape1.html.twig"));

        $__internal_994a10f93099e1e12d2222283c2561715e18e9463f9517772e7691cdb5407d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994a10f93099e1e12d2222283c2561715e18e9463f9517772e7691cdb5407d3a->enter($__internal_994a10f93099e1e12d2222283c2561715e18e9463f9517772e7691cdb5407d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/mesure_etape1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5b82ed3aafaf1f524d26921cb9b1d66914593a199685d3b53204997e26055c->leave($__internal_2f5b82ed3aafaf1f524d26921cb9b1d66914593a199685d3b53204997e26055c_prof);

        
        $__internal_994a10f93099e1e12d2222283c2561715e18e9463f9517772e7691cdb5407d3a->leave($__internal_994a10f93099e1e12d2222283c2561715e18e9463f9517772e7691cdb5407d3a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9df500be97e192a3fe2f6112f29b651d45d9c84c4c35650dbd111f30ddd1d5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df500be97e192a3fe2f6112f29b651d45d9c84c4c35650dbd111f30ddd1d5b7->enter($__internal_9df500be97e192a3fe2f6112f29b651d45d9c84c4c35650dbd111f30ddd1d5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8bd787c6aebeacda033013953dadf3829655f4b7b3812700aa7a54215ed651d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bd787c6aebeacda033013953dadf3829655f4b7b3812700aa7a54215ed651d->enter($__internal_c8bd787c6aebeacda033013953dadf3829655f4b7b3812700aa7a54215ed651d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prise de mesure";
        
        $__internal_c8bd787c6aebeacda033013953dadf3829655f4b7b3812700aa7a54215ed651d->leave($__internal_c8bd787c6aebeacda033013953dadf3829655f4b7b3812700aa7a54215ed651d_prof);

        
        $__internal_9df500be97e192a3fe2f6112f29b651d45d9c84c4c35650dbd111f30ddd1d5b7->leave($__internal_9df500be97e192a3fe2f6112f29b651d45d9c84c4c35650dbd111f30ddd1d5b7_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3178330b8fea06d3ffad68ab1e30b53836a4e6727c0d8bafff78df67b6cc3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3178330b8fea06d3ffad68ab1e30b53836a4e6727c0d8bafff78df67b6cc3d0->enter($__internal_a3178330b8fea06d3ffad68ab1e30b53836a4e6727c0d8bafff78df67b6cc3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f4d1b060e2191f0840318a9ae814255bb3d7a8195ae2807b644808583d8a8424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d1b060e2191f0840318a9ae814255bb3d7a8195ae2807b644808583d8a8424->enter($__internal_f4d1b060e2191f0840318a9ae814255bb3d7a8195ae2807b644808583d8a8424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <h1>Etape suivante ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:40%;\">40%</div>
        </div>
        <h2>Mesurez votre poids et votre taille</h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 col-lg-12\">
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <label>Votre taille</label>
                            <input type=\"number\" name=\"taille\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "taille", array()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Merci de renseigner votre taille en cm\">
                        </div>
                        <div class=\"form-group\">
                            <label>Votre poids</label>
                            <input type=\"number\" name=\"poids\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "poids", array()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Merci de renseigner votre poids en kilogrammes\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Passez à l'étape suivante</button>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4 col-lg-4\">
                </div>
            </div>
        </div>
    ";
        
        $__internal_f4d1b060e2191f0840318a9ae814255bb3d7a8195ae2807b644808583d8a8424->leave($__internal_f4d1b060e2191f0840318a9ae814255bb3d7a8195ae2807b644808583d8a8424_prof);

        
        $__internal_a3178330b8fea06d3ffad68ab1e30b53836a4e6727c0d8bafff78df67b6cc3d0->leave($__internal_a3178330b8fea06d3ffad68ab1e30b53836a4e6727c0d8bafff78df67b6cc3d0_prof);

    }

    public function getTemplateName()
    {
        return "custom/mesure_etape1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  81 => 16,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
{% block title 'Prise de mesure' %}

    {% block content %}
        <h1>Etape suivante ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:40%;\">40%</div>
        </div>
        <h2>Mesurez votre poids et votre taille</h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 col-lg-12\">
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <label>Votre taille</label>
                            <input type=\"number\" name=\"taille\" value=\"{{ user.taille }}\" class=\"form-control\" placeholder=\"Merci de renseigner votre taille en cm\">
                        </div>
                        <div class=\"form-group\">
                            <label>Votre poids</label>
                            <input type=\"number\" name=\"poids\" value=\"{{ user.poids }}\" class=\"form-control\" placeholder=\"Merci de renseigner votre poids en kilogrammes\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Passez à l'étape suivante</button>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4 col-lg-4\">
                </div>
            </div>
        </div>
    {% endblock %}
", "custom/mesure_etape1.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\mesure_etape1.html.twig");
    }
}
