<?php

/* custom/mesure_etape4.html.twig */
class __TwigTemplate_2ba1abd89fa2a477f15d450e5f83de16e60d1481a6d081a087522ca43c521044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/mesure_etape4.html.twig", 1);
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
        $__internal_91b9ac32f13565a5d2dca938a2e03efb481c0677399c8e753f6b3662a6de4ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b9ac32f13565a5d2dca938a2e03efb481c0677399c8e753f6b3662a6de4ad0->enter($__internal_91b9ac32f13565a5d2dca938a2e03efb481c0677399c8e753f6b3662a6de4ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/mesure_etape4.html.twig"));

        $__internal_fccfd8d540eaa7355b5586465d6452fb2c4fa96018d4a2773f902d35c2ed5ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccfd8d540eaa7355b5586465d6452fb2c4fa96018d4a2773f902d35c2ed5ef4->enter($__internal_fccfd8d540eaa7355b5586465d6452fb2c4fa96018d4a2773f902d35c2ed5ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/mesure_etape4.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91b9ac32f13565a5d2dca938a2e03efb481c0677399c8e753f6b3662a6de4ad0->leave($__internal_91b9ac32f13565a5d2dca938a2e03efb481c0677399c8e753f6b3662a6de4ad0_prof);

        
        $__internal_fccfd8d540eaa7355b5586465d6452fb2c4fa96018d4a2773f902d35c2ed5ef4->leave($__internal_fccfd8d540eaa7355b5586465d6452fb2c4fa96018d4a2773f902d35c2ed5ef4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ca2fb581cda02ecb14d24875a22bad9e5b55c30ce7e912869e8616745939b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca2fb581cda02ecb14d24875a22bad9e5b55c30ce7e912869e8616745939b74->enter($__internal_2ca2fb581cda02ecb14d24875a22bad9e5b55c30ce7e912869e8616745939b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99d37b0edd64d93b7e1de3755981ce51b5ff805794c799e3e4809402065db049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d37b0edd64d93b7e1de3755981ce51b5ff805794c799e3e4809402065db049->enter($__internal_99d37b0edd64d93b7e1de3755981ce51b5ff805794c799e3e4809402065db049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prise de mesure";
        
        $__internal_99d37b0edd64d93b7e1de3755981ce51b5ff805794c799e3e4809402065db049->leave($__internal_99d37b0edd64d93b7e1de3755981ce51b5ff805794c799e3e4809402065db049_prof);

        
        $__internal_2ca2fb581cda02ecb14d24875a22bad9e5b55c30ce7e912869e8616745939b74->leave($__internal_2ca2fb581cda02ecb14d24875a22bad9e5b55c30ce7e912869e8616745939b74_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_f5257d6bbdd77cf3eae84dced6f45cc017b979d34ff36d2f560be58248210519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5257d6bbdd77cf3eae84dced6f45cc017b979d34ff36d2f560be58248210519->enter($__internal_f5257d6bbdd77cf3eae84dced6f45cc017b979d34ff36d2f560be58248210519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d0a14114582d6ebaf854ee4e3fcd02020ae38a750eb83958aacc7addcff2ff45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a14114582d6ebaf854ee4e3fcd02020ae38a750eb83958aacc7addcff2ff45->enter($__internal_d0a14114582d6ebaf854ee4e3fcd02020ae38a750eb83958aacc7addcff2ff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 col-lg-12\">
                <label>Votre chemise est configuré ! </label>
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">60%</div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 col-lg-12\">
        <h1 class=\"header_formulaire\">Mesurez votre carrure</h1>
        <hr>
            </div>
        <form method=\"post\">
            <div class=\"container-fluid\">
                <div class=\"form-group\">
                   ";
        // line 22
        echo "                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <div class=\"form-group\">
                                <h2 class=\"sub_title_form\"> Carrure du dos </h2>
                                <label>Explication de prise de mesure :</label>
                                <p class=\"text_hidden\">Mesurez celle-ci en partant de votre chute d’épaule gauche (là où commence le bras et où vous sentez un os) jusqu’à l’extrémité de votre épaule droite. Si vous utilisez une chemise, suivez la couture pour vous guider.</p>
                                <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsCarrure400.jpg\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                                <label>Vidéo explicative de prise de mesure</label>
                                <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/bUrQzIACMNA\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Carrure  :</h2>
                            <input type=\"value\" name=\"carrure\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["carrure"]) ? $context["carrure"] : $this->getContext($context, "carrure")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre carrure en cm\">
                        </div>
                        
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <div class=\"form-group\">
                              <h2 class=\"sub_title_form\"> Demi-Dos </h2>
                              <label>Explication de prise de mesure :</label>
                              <p class=\"text_hidden\">Mesurez en partant de votre chute d’épaule (là où commence le bras et où vous sentez un os) jusqu’à la base de votre cou.</p>
                              <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsPoignet400.jpg\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                              <label>Vidéo explicative de prise de mesure</label>
                              <iframe class=\"embed-responsive-item\"  src=\"https://www.youtube.com/embed/ToI_32qbLL0\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                       </div>
                       <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Demi-dos gauche :</h2>
                            <input type=\"value\" name=\"epaule_droite\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["epaule_droite"]) ? $context["epaule_droite"] : $this->getContext($context, "epaule_droite")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre mesure d'épaule droite en cm\">
                            <h2> Insérez votre mesure \"Demi-dos gauche :</h2>
                            <input type=\"value\" name=\"epaule_gauche\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["epaule_gauche"]) ? $context["epaule_gauche"] : $this->getContext($context, "epaule_gauche")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre mesure d'épaule gauche en cm\">
                        </div>
                    </div>
                        
                    <div class=\"row\">    
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <div class=\"form-group\">
                                <h2 class=\"sub_title_form\"> Longueur de dos  </h2>
                                <label> Explication de prise d emesure : </label>
                                <p class=\"text_hidden\">Tenez le bout de votre mètre et posez-le au niveau de la base du cou jusqu’à la taille de veste souhaitée. </p>
                                <label>Vidéo explicative de prise de mesure</label>
                                <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsDos400.jpg\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                                <br>
                                <iframe class=\"embed-responsive-item\"  src=\"https://www.youtube.com/embed/_nGNXfaZf5E\"  width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                           <h2> Insérez votre mesure \"Longueur de dos\" :</h2>
                           <input type=\"value\" name=\"dos\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["dos"]) ? $context["dos"] : $this->getContext($context, "dos")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre longueur de dos en cm\">
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Passez à l'étape suivante</button>
            </div>
        </form>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-4 col-lg-4\">
                ";
        // line 81
        echo "

            </div>
        </div>
    ";
        
        $__internal_d0a14114582d6ebaf854ee4e3fcd02020ae38a750eb83958aacc7addcff2ff45->leave($__internal_d0a14114582d6ebaf854ee4e3fcd02020ae38a750eb83958aacc7addcff2ff45_prof);

        
        $__internal_f5257d6bbdd77cf3eae84dced6f45cc017b979d34ff36d2f560be58248210519->leave($__internal_f5257d6bbdd77cf3eae84dced6f45cc017b979d34ff36d2f560be58248210519_prof);

    }

    public function getTemplateName()
    {
        return "custom/mesure_etape4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 81,  146 => 71,  125 => 53,  120 => 51,  101 => 35,  86 => 22,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
                <label>Votre chemise est configuré ! </label>
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">60%</div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 col-lg-12\">
        <h1 class=\"header_formulaire\">Mesurez votre carrure</h1>
        <hr>
            </div>
        <form method=\"post\">
            <div class=\"container-fluid\">
                <div class=\"form-group\">
                   {# ROW TOUR DE COU #}
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <div class=\"form-group\">
                                <h2 class=\"sub_title_form\"> Carrure du dos </h2>
                                <label>Explication de prise de mesure :</label>
                                <p class=\"text_hidden\">Mesurez celle-ci en partant de votre chute d’épaule gauche (là où commence le bras et où vous sentez un os) jusqu’à l’extrémité de votre épaule droite. Si vous utilisez une chemise, suivez la couture pour vous guider.</p>
                                <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsCarrure400.jpg\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                                <label>Vidéo explicative de prise de mesure</label>
                                <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/bUrQzIACMNA\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Carrure  :</h2>
                            <input type=\"value\" name=\"carrure\" value=\"{{ carrure }}\" class=\"form-control\" placeholder=\"Insérez votre carrure en cm\">
                        </div>
                        
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <div class=\"form-group\">
                              <h2 class=\"sub_title_form\"> Demi-Dos </h2>
                              <label>Explication de prise de mesure :</label>
                              <p class=\"text_hidden\">Mesurez en partant de votre chute d’épaule (là où commence le bras et où vous sentez un os) jusqu’à la base de votre cou.</p>
                              <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsPoignet400.jpg\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                              <label>Vidéo explicative de prise de mesure</label>
                              <iframe class=\"embed-responsive-item\"  src=\"https://www.youtube.com/embed/ToI_32qbLL0\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                       </div>
                       <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Demi-dos gauche :</h2>
                            <input type=\"value\" name=\"epaule_droite\" value=\"{{ epaule_droite }}\" class=\"form-control\" placeholder=\"Insérez votre mesure d'épaule droite en cm\">
                            <h2> Insérez votre mesure \"Demi-dos gauche :</h2>
                            <input type=\"value\" name=\"epaule_gauche\" value=\"{{ epaule_gauche }}\" class=\"form-control\" placeholder=\"Insérez votre mesure d'épaule gauche en cm\">
                        </div>
                    </div>
                        
                    <div class=\"row\">    
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <div class=\"form-group\">
                                <h2 class=\"sub_title_form\"> Longueur de dos  </h2>
                                <label> Explication de prise d emesure : </label>
                                <p class=\"text_hidden\">Tenez le bout de votre mètre et posez-le au niveau de la base du cou jusqu’à la taille de veste souhaitée. </p>
                                <label>Vidéo explicative de prise de mesure</label>
                                <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsDos400.jpg\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                                <br>
                                <iframe class=\"embed-responsive-item\"  src=\"https://www.youtube.com/embed/_nGNXfaZf5E\"  width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                           <h2> Insérez votre mesure \"Longueur de dos\" :</h2>
                           <input type=\"value\" name=\"dos\" value=\"{{ dos }}\" class=\"form-control\" placeholder=\"Insérez votre longueur de dos en cm\">
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
", "custom/mesure_etape4.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\mesure_etape4.html.twig");
    }
}
