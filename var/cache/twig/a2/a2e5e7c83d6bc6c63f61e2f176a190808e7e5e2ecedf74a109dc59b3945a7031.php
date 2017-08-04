<?php

/* custom/mesure_etape2.html.twig */
class __TwigTemplate_54418561dc54daef0dd040b3eff8d2bc6f147e0924f9493132abbd11fc89382a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/mesure_etape2.html.twig", 1);
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
        $__internal_8a4bde93157adf2ba116725aa1ee74a2fe5cc2cfaf6976a5ff97ab1ece68b8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4bde93157adf2ba116725aa1ee74a2fe5cc2cfaf6976a5ff97ab1ece68b8cf->enter($__internal_8a4bde93157adf2ba116725aa1ee74a2fe5cc2cfaf6976a5ff97ab1ece68b8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/mesure_etape2.html.twig"));

        $__internal_47a9a1367aaae6637fa1c9a79fa88c5a505b33c7d4ecfad506a5c3291ed12a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a9a1367aaae6637fa1c9a79fa88c5a505b33c7d4ecfad506a5c3291ed12a90->enter($__internal_47a9a1367aaae6637fa1c9a79fa88c5a505b33c7d4ecfad506a5c3291ed12a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/mesure_etape2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a4bde93157adf2ba116725aa1ee74a2fe5cc2cfaf6976a5ff97ab1ece68b8cf->leave($__internal_8a4bde93157adf2ba116725aa1ee74a2fe5cc2cfaf6976a5ff97ab1ece68b8cf_prof);

        
        $__internal_47a9a1367aaae6637fa1c9a79fa88c5a505b33c7d4ecfad506a5c3291ed12a90->leave($__internal_47a9a1367aaae6637fa1c9a79fa88c5a505b33c7d4ecfad506a5c3291ed12a90_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef80ce4c39e0edcbe15e175fddd2f923564c130a1cbdeb62d9a683c766331186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef80ce4c39e0edcbe15e175fddd2f923564c130a1cbdeb62d9a683c766331186->enter($__internal_ef80ce4c39e0edcbe15e175fddd2f923564c130a1cbdeb62d9a683c766331186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e0e80808d754eee4f5d53d80242416191755224d2125fce82badc0eafe79b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e0e80808d754eee4f5d53d80242416191755224d2125fce82badc0eafe79b34->enter($__internal_1e0e80808d754eee4f5d53d80242416191755224d2125fce82badc0eafe79b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prise de mesure";
        
        $__internal_1e0e80808d754eee4f5d53d80242416191755224d2125fce82badc0eafe79b34->leave($__internal_1e0e80808d754eee4f5d53d80242416191755224d2125fce82badc0eafe79b34_prof);

        
        $__internal_ef80ce4c39e0edcbe15e175fddd2f923564c130a1cbdeb62d9a683c766331186->leave($__internal_ef80ce4c39e0edcbe15e175fddd2f923564c130a1cbdeb62d9a683c766331186_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_03f17bbbbb4c2a0bbba5bdf0f709cbbcbb9be63b06e3fbc8b057edfd790f5fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f17bbbbb4c2a0bbba5bdf0f709cbbcbb9be63b06e3fbc8b057edfd790f5fa1->enter($__internal_03f17bbbbb4c2a0bbba5bdf0f709cbbcbb9be63b06e3fbc8b057edfd790f5fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd3da2e9bffb1a88cd1308d339ec7b308dc187ff12bc389572134f900d133603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3da2e9bffb1a88cd1308d339ec7b308dc187ff12bc389572134f900d133603->enter($__internal_dd3da2e9bffb1a88cd1308d339ec7b308dc187ff12bc389572134f900d133603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <h1 class=\"header_formulaire\">Mesurez votre haut du corps</h1>
        <hr>
            </div>
        <form method=\"post\">
            <div class=\"container-fluid\">
                <div class=\"form-group\">
                   ";
        // line 22
        echo "                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Mesure de votre tour de cou </h2>
                            <label>Explication de prise de mesure :</label>
                            <p class=\"text_hidden\">Tenez-vous droit sans bomber le torse. Passez le mètre ruban autour du cou au milieu du cou et faites le tour. Vérifiez que le mètre soit au même niveau devant et derrière vous.</p>
                            <img src=\"https://sleeve7.com/fr/media/wysiwyg/Blog/Mesurer-tour-de-cou.jpg\" id=\"img_form\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <br>
                            <label>Vidéo explicative de prise de mesure :</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/vcxRkpTzKUQ\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Tour de cou\" :</h2>
                            <input type=\"value\" name=\"tour_cou\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["tour_cou"]) ? $context["tour_cou"] : $this->getContext($context, "tour_cou")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Insérez votre tour de cou en cm\">
                        </div>
                    </div>
        <hr>
                   ";
        // line 38
        echo " 
                    <div class=\"row\">                            
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Mesure de votre tour de poitrine </h2>
                            <label>Explication de prise de mesure :</label>
                            <p>Tenez-vous droit sans bomber le torse. Passez le mètre ruban sous les bras au niveau des pectoraux, là où votre poitrine est la plus large et faites le tour. Vérifiez que le mètre soit au même niveau devant et derrière vous.</p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsPoitrine400.jpg\" id=\"img_form\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <br>
                            <label>Vidéo explicative de prise de mesure</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/YTMRHnbU4DE\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Tour de poitrine\" :</h2>
                            <input type=\"value\" name=\"tour_poitrine\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["tour_poitrine"]) ? $context["tour_poitrine"] : $this->getContext($context, "tour_poitrine")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Inserez votre tour de poitrine en cm\">
                        </div>
                    </div>
        <hr>                    
                    <div class=\"row\">                            
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Mesure de votre tour de taille </h2>
                            <label>Explication de prise de mesure :</label>
                            <p>Tenez-vous droit sans rentrer ou sortir le ventre. Enroulez le mètre ruban autour de votre taille juste au-dessus du nombril. Vérifiez que le mètre soit au même niveau devant et derrière vous. </p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsCeinture400.jpg\" id=\"img_form\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <br>
                            <label>Vidéo explicative de prise de mesure</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/8vahmRoNuvs\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Tour de taille\" :</h2>
                            <input type=\"value\" name=\"tour_taille\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["tour_taille"]) ? $context["tour_taille"] : $this->getContext($context, "tour_taille")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Inserez votre tour de taille en cm\">
                        </div>
                    </div>
        <hr>                    
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">  
                            <h2 class=\"sub_title_form\"> Mesure de votre tour de bassin</h2>
                            <label>Explication de prise de mesure :</label>
                            <p>Placez-vous, les pieds légèrement écartés. Portez un pantalon et faites le tour de votre bassin avec le mètre ruban à l’endroit le plus large, au milieu des fesses.   Vérifiez que le mètre soit au même niveau devant et derrière vous.  </p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsBassin400.jpg\" id=\"img_form\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <br>
                            <label>Vidéo explicative de prise de mesure</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/zSU7d5-nQ0k\" width=\"100%\" height=\"300\" frameborder=\"0\"  allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2>Insérez votre mesure \"Tour de bassin\" :</h2>
                            <input type=\"value\" name=\"tour_bassin\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["tour_bassin"]) ? $context["tour_bassin"] : $this->getContext($context, "tour_bassin")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Inserez votre tour de taille en cm\">
                        </div>
                    </div>
                <button type=\"submit\" class=\"btn btn-primary\">Passez à l'étape suivante</button>
            </div>
        </form>
        <div class=\"row\">
            </div>
        </div>
    ";
        
        $__internal_dd3da2e9bffb1a88cd1308d339ec7b308dc187ff12bc389572134f900d133603->leave($__internal_dd3da2e9bffb1a88cd1308d339ec7b308dc187ff12bc389572134f900d133603_prof);

        
        $__internal_03f17bbbbb4c2a0bbba5bdf0f709cbbcbb9be63b06e3fbc8b057edfd790f5fa1->leave($__internal_03f17bbbbb4c2a0bbba5bdf0f709cbbcbb9be63b06e3fbc8b057edfd790f5fa1_prof);

    }

    public function getTemplateName()
    {
        return "custom/mesure_etape2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 83,  141 => 67,  122 => 51,  107 => 38,  100 => 34,  86 => 22,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
        <h1 class=\"header_formulaire\">Mesurez votre haut du corps</h1>
        <hr>
            </div>
        <form method=\"post\">
            <div class=\"container-fluid\">
                <div class=\"form-group\">
                   {# ROW TOUR DE COU #}
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Mesure de votre tour de cou </h2>
                            <label>Explication de prise de mesure :</label>
                            <p class=\"text_hidden\">Tenez-vous droit sans bomber le torse. Passez le mètre ruban autour du cou au milieu du cou et faites le tour. Vérifiez que le mètre soit au même niveau devant et derrière vous.</p>
                            <img src=\"https://sleeve7.com/fr/media/wysiwyg/Blog/Mesurer-tour-de-cou.jpg\" id=\"img_form\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <br>
                            <label>Vidéo explicative de prise de mesure :</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/vcxRkpTzKUQ\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Tour de cou\" :</h2>
                            <input type=\"value\" name=\"tour_cou\" value=\"{{ tour_cou }}\" class=\"form-control\" placeholder=\"Insérez votre tour de cou en cm\">
                        </div>
                    </div>
        <hr>
                   {# ROW TOUR DE POITRINE #} 
                    <div class=\"row\">                            
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Mesure de votre tour de poitrine </h2>
                            <label>Explication de prise de mesure :</label>
                            <p>Tenez-vous droit sans bomber le torse. Passez le mètre ruban sous les bras au niveau des pectoraux, là où votre poitrine est la plus large et faites le tour. Vérifiez que le mètre soit au même niveau devant et derrière vous.</p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsPoitrine400.jpg\" id=\"img_form\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <br>
                            <label>Vidéo explicative de prise de mesure</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/YTMRHnbU4DE\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Tour de poitrine\" :</h2>
                            <input type=\"value\" name=\"tour_poitrine\" value=\"{{ tour_poitrine }}\" class=\"form-control\" placeholder=\"Inserez votre tour de poitrine en cm\">
                        </div>
                    </div>
        <hr>                    
                    <div class=\"row\">                            
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">
                            <h2 class=\"sub_title_form\"> Mesure de votre tour de taille </h2>
                            <label>Explication de prise de mesure :</label>
                            <p>Tenez-vous droit sans rentrer ou sortir le ventre. Enroulez le mètre ruban autour de votre taille juste au-dessus du nombril. Vérifiez que le mètre soit au même niveau devant et derrière vous. </p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsCeinture400.jpg\" id=\"img_form\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <br>
                            <label>Vidéo explicative de prise de mesure</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/8vahmRoNuvs\" width=\"100%\" height=\"300\" frameborder=\"0\" allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2> Insérez votre mesure \"Tour de taille\" :</h2>
                            <input type=\"value\" name=\"tour_taille\" value=\"{{ tour_taille }}\" class=\"form-control\" placeholder=\"Inserez votre tour de taille en cm\">
                        </div>
                    </div>
        <hr>                    
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-8 col-lg-8\">  
                            <h2 class=\"sub_title_form\"> Mesure de votre tour de bassin</h2>
                            <label>Explication de prise de mesure :</label>
                            <p>Placez-vous, les pieds légèrement écartés. Portez un pantalon et faites le tour de votre bassin avec le mètre ruban à l’endroit le plus large, au milieu des fesses.   Vérifiez que le mètre soit au même niveau devant et derrière vous.  </p>
                            <img src=\"http://www.cottonsociety.com/modules/cs_shirtgenerator/design/img/mesures_corps/CorpsBassin400.jpg\" id=\"img_form\" class=\"img-responsive\" alt=\"\" width=\"400\"/>
                            <br>
                            <label>Vidéo explicative de prise de mesure</label>
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/zSU7d5-nQ0k\" width=\"100%\" height=\"300\" frameborder=\"0\"  allowfullscreen></iframe>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <h2>Insérez votre mesure \"Tour de bassin\" :</h2>
                            <input type=\"value\" name=\"tour_bassin\" value=\"{{ tour_bassin }}\" class=\"form-control\" placeholder=\"Inserez votre tour de taille en cm\">
                        </div>
                    </div>
                <button type=\"submit\" class=\"btn btn-primary\">Passez à l'étape suivante</button>
            </div>
        </form>
        <div class=\"row\">
            </div>
        </div>
    {% endblock %}
", "custom/mesure_etape2.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\mesure_etape2.htmL.twig");
    }
}
