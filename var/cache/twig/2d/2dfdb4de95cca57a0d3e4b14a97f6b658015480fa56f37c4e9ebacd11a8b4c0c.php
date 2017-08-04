<?php

/* custom/mesure_etape3.html.twig */
class __TwigTemplate_ac4274dc8e692acf287e0bddb8c6469afafc404644a014bc736266282f25e347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/mesure_etape3.html.twig", 1);
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
        $__internal_9285929121a5414a98772e97d087f89236682f27b348210c615605799cfe6419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9285929121a5414a98772e97d087f89236682f27b348210c615605799cfe6419->enter($__internal_9285929121a5414a98772e97d087f89236682f27b348210c615605799cfe6419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/mesure_etape3.html.twig"));

        $__internal_c5efcb82041f39247d3c620cf53912d0e67518d3a54fdd8efd6ac3912ae2a356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5efcb82041f39247d3c620cf53912d0e67518d3a54fdd8efd6ac3912ae2a356->enter($__internal_c5efcb82041f39247d3c620cf53912d0e67518d3a54fdd8efd6ac3912ae2a356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/mesure_etape3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9285929121a5414a98772e97d087f89236682f27b348210c615605799cfe6419->leave($__internal_9285929121a5414a98772e97d087f89236682f27b348210c615605799cfe6419_prof);

        
        $__internal_c5efcb82041f39247d3c620cf53912d0e67518d3a54fdd8efd6ac3912ae2a356->leave($__internal_c5efcb82041f39247d3c620cf53912d0e67518d3a54fdd8efd6ac3912ae2a356_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5454f3c00fbca2d9ab8c292cadb3c3bc358e793c451023e211dc47cd1457d657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5454f3c00fbca2d9ab8c292cadb3c3bc358e793c451023e211dc47cd1457d657->enter($__internal_5454f3c00fbca2d9ab8c292cadb3c3bc358e793c451023e211dc47cd1457d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efe44e205f1c206fbbcf782c12dcb8f7c32afd9d899e3ba1fa5d9d272936998e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe44e205f1c206fbbcf782c12dcb8f7c32afd9d899e3ba1fa5d9d272936998e->enter($__internal_efe44e205f1c206fbbcf782c12dcb8f7c32afd9d899e3ba1fa5d9d272936998e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prise de mesure";
        
        $__internal_efe44e205f1c206fbbcf782c12dcb8f7c32afd9d899e3ba1fa5d9d272936998e->leave($__internal_efe44e205f1c206fbbcf782c12dcb8f7c32afd9d899e3ba1fa5d9d272936998e_prof);

        
        $__internal_5454f3c00fbca2d9ab8c292cadb3c3bc358e793c451023e211dc47cd1457d657->leave($__internal_5454f3c00fbca2d9ab8c292cadb3c3bc358e793c451023e211dc47cd1457d657_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_844d92b1a0648190603667db33c73232041a0b0efafdc1896a20a922b0e908a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844d92b1a0648190603667db33c73232041a0b0efafdc1896a20a922b0e908a7->enter($__internal_844d92b1a0648190603667db33c73232041a0b0efafdc1896a20a922b0e908a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fa1139e7bc0bd4b5b421c12d1eb0a747a97745836b32d05a2d64b09496cd0f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1139e7bc0bd4b5b421c12d1eb0a747a97745836b32d05a2d64b09496cd0f9b->enter($__internal_fa1139e7bc0bd4b5b421c12d1eb0a747a97745836b32d05a2d64b09496cd0f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 col-lg-12\">
                <label>Etape suivante ! </label>
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">60%</div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 col-lg-12\">
        <h1 class=\"header_formulaire\">Mesurez vos bras et poignets</h1>
        <hr>
            </div>
        <form method=\"post\">
            <div class=\"container-fluid\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Longueur de bras</h2>
                            <label>Explication de prise de mesure :</label>
                            <p class=\"text_hidden\">Gardez les bras le long du corps (sans les tendre). En haut du bras, placez le mètre au niveau de la chute d’épaule jusqu’à la naissance du pouce/au niveau de la cassure de votre poignet. Mesurez vos 2 bras (droit et gauche).</p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsManche400.jpg    \" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <label> Vidéo explicative de prise de mesure :</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/KEG6LJictk0\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2 class=\"sub_title_form\"> Insérez vos mesures \"Longueurs de bras\": </h2>
                            <label> Mesure bras droit</label>
                            <input type=\"value\" name=\"manche_droite\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["manche_droite"]) ? $context["manche_droite"] : $this->getContext($context, "manche_droite")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre tour de manche droit en cm\">
                            <label> Mesure bras gauche</label>
                            <input type=\"value\" name=\"manche_gauche\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["manche_gauche"]) ? $context["manche_gauche"] : $this->getContext($context, "manche_gauche")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre tour de manche gauche en cm\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Poignet </h2>
                            <label>Explication de prise de mesure :</label>
                            <p class=\"text_hidden\">Placez le mètre au niveau de l’os du poignet en gardant un doigt entre le poignet et le mètre ruban</p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsPoignet400.jpg\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <label>Vidéo explicative de prise de mesure</label>
                            <br>
                            <iframe class=\"embed-responsive-item\"  src=\"https://www.youtube.com/embed/6-Pomrw3SMg\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                            <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2 class=\"sub_title_form\">
                            <label> Mesure Poignet droit</label>
                            <input type=\"value\" name=\"poignet_droit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["poignet_droit"]) ? $context["poignet_droit"] : $this->getContext($context, "poignet_droit")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre tour de poignet droit en cm\">
                            <label> Mesure Poignet gauche</label>
                            <input type=\"value\" name=\"poignet_gauche\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["poignet_gauche"]) ? $context["poignet_gauche"] : $this->getContext($context, "poignet_gauche")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre tour de poignet gauche en cm\">
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Passez à l'étape suivante</button>
            </div>
        </form>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-4 col-lg-4\">
                ";
        // line 63
        echo "

            </div>
        </div>
    ";
        
        $__internal_fa1139e7bc0bd4b5b421c12d1eb0a747a97745836b32d05a2d64b09496cd0f9b->leave($__internal_fa1139e7bc0bd4b5b421c12d1eb0a747a97745836b32d05a2d64b09496cd0f9b_prof);

        
        $__internal_844d92b1a0648190603667db33c73232041a0b0efafdc1896a20a922b0e908a7->leave($__internal_844d92b1a0648190603667db33c73232041a0b0efafdc1896a20a922b0e908a7_prof);

    }

    public function getTemplateName()
    {
        return "custom/mesure_etape3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 63,  127 => 53,  122 => 51,  103 => 35,  98 => 33,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 col-lg-12\">
                <label>Etape suivante ! </label>
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">60%</div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 col-lg-12\">
        <h1 class=\"header_formulaire\">Mesurez vos bras et poignets</h1>
        <hr>
            </div>
        <form method=\"post\">
            <div class=\"container-fluid\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Longueur de bras</h2>
                            <label>Explication de prise de mesure :</label>
                            <p class=\"text_hidden\">Gardez les bras le long du corps (sans les tendre). En haut du bras, placez le mètre au niveau de la chute d’épaule jusqu’à la naissance du pouce/au niveau de la cassure de votre poignet. Mesurez vos 2 bras (droit et gauche).</p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsManche400.jpg    \" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <label> Vidéo explicative de prise de mesure :</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/KEG6LJictk0\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2 class=\"sub_title_form\"> Insérez vos mesures \"Longueurs de bras\": </h2>
                            <label> Mesure bras droit</label>
                            <input type=\"value\" name=\"manche_droite\" value=\"{{ manche_droite }}\" class=\"form-control\" placeholder=\"Insérez votre tour de manche droit en cm\">
                            <label> Mesure bras gauche</label>
                            <input type=\"value\" name=\"manche_gauche\" value=\"{{ manche_gauche }}\" class=\"form-control\" placeholder=\"Insérez votre tour de manche gauche en cm\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Poignet </h2>
                            <label>Explication de prise de mesure :</label>
                            <p class=\"text_hidden\">Placez le mètre au niveau de l’os du poignet en gardant un doigt entre le poignet et le mètre ruban</p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsPoignet400.jpg\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <label>Vidéo explicative de prise de mesure</label>
                            <br>
                            <iframe class=\"embed-responsive-item\"  src=\"https://www.youtube.com/embed/6-Pomrw3SMg\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                            <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2 class=\"sub_title_form\">
                            <label> Mesure Poignet droit</label>
                            <input type=\"value\" name=\"poignet_droit\" value=\"{{ poignet_droit }}\" class=\"form-control\" placeholder=\"Insérez votre tour de poignet droit en cm\">
                            <label> Mesure Poignet gauche</label>
                            <input type=\"value\" name=\"poignet_gauche\" value=\"{{ poignet_gauche }}\" class=\"form-control\" placeholder=\"Insérez votre tour de poignet gauche en cm\">
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Passez à l'étape suivante</button>
            </div>
        </form>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-4 col-lg-4\">
                {#rajouter les liens de la config et des mesures prises au fur et à mesure#}


            </div>
        </div>
    {% endblock %}
", "custom/mesure_etape3.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\mesure_etape3.html.twig");
    }
}
