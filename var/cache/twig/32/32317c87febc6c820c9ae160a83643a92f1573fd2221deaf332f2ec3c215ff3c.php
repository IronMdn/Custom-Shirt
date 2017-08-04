<?php

/* custom/customrecap.html.twig */
class __TwigTemplate_33970f8d8f4fa2b333b2b1c70f63fc588057a3b48c5ca4fe5cc085013022f89e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/customrecap.html.twig", 1);
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
        $__internal_4f8b345c6135e749284fcb59397efe9c625742323d341f2c7ae9b29173b462ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8b345c6135e749284fcb59397efe9c625742323d341f2c7ae9b29173b462ac->enter($__internal_4f8b345c6135e749284fcb59397efe9c625742323d341f2c7ae9b29173b462ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/customrecap.html.twig"));

        $__internal_8da3138f6b841daefbd8e615d2e55fc093c15f5878b3ab2e12f0b356031056bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da3138f6b841daefbd8e615d2e55fc093c15f5878b3ab2e12f0b356031056bb->enter($__internal_8da3138f6b841daefbd8e615d2e55fc093c15f5878b3ab2e12f0b356031056bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/customrecap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8b345c6135e749284fcb59397efe9c625742323d341f2c7ae9b29173b462ac->leave($__internal_4f8b345c6135e749284fcb59397efe9c625742323d341f2c7ae9b29173b462ac_prof);

        
        $__internal_8da3138f6b841daefbd8e615d2e55fc093c15f5878b3ab2e12f0b356031056bb->leave($__internal_8da3138f6b841daefbd8e615d2e55fc093c15f5878b3ab2e12f0b356031056bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f6e6d9591271f050386e3e402ab2aba378c46b4d3771fa32fe5a02895d194d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6e6d9591271f050386e3e402ab2aba378c46b4d3771fa32fe5a02895d194d1->enter($__internal_7f6e6d9591271f050386e3e402ab2aba378c46b4d3771fa32fe5a02895d194d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ea374ce1867482e27fc0491957fa5ba922e385aeb106b37f5ca892f4317c9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea374ce1867482e27fc0491957fa5ba922e385aeb106b37f5ca892f4317c9ba->enter($__internal_6ea374ce1867482e27fc0491957fa5ba922e385aeb106b37f5ca892f4317c9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Récapitulatif";
        
        $__internal_6ea374ce1867482e27fc0491957fa5ba922e385aeb106b37f5ca892f4317c9ba->leave($__internal_6ea374ce1867482e27fc0491957fa5ba922e385aeb106b37f5ca892f4317c9ba_prof);

        
        $__internal_7f6e6d9591271f050386e3e402ab2aba378c46b4d3771fa32fe5a02895d194d1->leave($__internal_7f6e6d9591271f050386e3e402ab2aba378c46b4d3771fa32fe5a02895d194d1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3232c35be25df51bbb69dbb1d4cbedf3a47679e442147bca09522bfbe77653b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3232c35be25df51bbb69dbb1d4cbedf3a47679e442147bca09522bfbe77653b->enter($__internal_a3232c35be25df51bbb69dbb1d4cbedf3a47679e442147bca09522bfbe77653b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3c10bb80c16370968dde11df9716812d08ef633ac4276313903f7b9d090d26ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c10bb80c16370968dde11df9716812d08ef633ac4276313903f7b9d090d26ec->enter($__internal_3c10bb80c16370968dde11df9716812d08ef633ac4276313903f7b9d090d26ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
        <h2 style=\"text-align:center\"> Voici votre configuration </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                        <table class=\"table\" style=\"border:1px solid #ccc;\">
                            <h3>Sélection de la chemise</h3>
                            <tr style=\"border:1px solid #ccc;\">
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>
                                <th>Modifier</th>
                             </tr>
                             <tr>
                                 <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tissu"]) ? $context["tissu"] : $this->getContext($context, "tissu")), "nom", array()), "html", null, true);
        echo "</td>
                                 <td><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tissu"]) ? $context["tissu"] : $this->getContext($context, "tissu")), "photo", array()), "html", null, true);
        echo "\" alt=\"\" width=\"200\" class=\"select_img\"></td>
                                 <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tissu"]) ? $context["tissu"] : $this->getContext($context, "tissu")), "prix", array()), "html", null, true);
        echo "</td>
                                 <td><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_1_tissu");
        echo "\">Modifier votre chemise</td>
                             </tr>
                        </table>
                </div>
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                        <table class=\"table\" style=\"border:1px solid #ccc;\">
                            <h3>Sélection des boutons</h3>
                            <tr style=\"border:1px solid #ccc;\">
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>
                                <th>Modifier</th>
                             </tr>
                             <tr>
                                 <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bouton"]) ? $context["bouton"] : $this->getContext($context, "bouton")), "titre_bouton", array()), "html", null, true);
        echo "</td>
                                 <td><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bouton"]) ? $context["bouton"] : $this->getContext($context, "bouton")), "photo_bouton", array()), "html", null, true);
        echo "\" alt=\"\" width=\"200\" class=\"select_img\"></td>
                                 <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bouton"]) ? $context["bouton"] : $this->getContext($context, "bouton")), "prix_bouton", array()), "html", null, true);
        echo "</td>
                                 <td><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_2_bouton");
        echo "\">Modifier le bouton</td>
                             </tr>
                        </table>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <h3>Sélection du col</h3>
                        <tr style=\"border:1px solid #ccc;\">
                            <th>Titre</th>
                            <th>Photo</th>
                            <th>Prix</th>
                            <th>Modifier</th>
                         </tr>
                         <tr>
                             <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "titre_col", array()), "html", null, true);
        echo "</td>
                             <td><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "photo_col", array()), "html", null, true);
        echo "\" alt=\"\" width=\"200\" class=\"select_img\"></td>
                             <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "prix_col", array()), "html", null, true);
        echo "</td>
                             <td><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_3_col");
        echo "\">Modifier le col</td>
                         </tr>
                    </table>
                   </div>
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                        <table class=\"table\" style=\"border:1px solid #ccc;\">
                            <h3>Sélection de la coupe</h3>
                            <tr style=\"border:1px solid #ccc;\">
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>
                                <th>Modifier</th>
                             </tr>
                             <tr>
                                 <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupe"]) ? $context["coupe"] : $this->getContext($context, "coupe")), "titre_coupe", array()), "html", null, true);
        echo "</td>
                                 <td><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupe"]) ? $context["coupe"] : $this->getContext($context, "coupe")), "photo_coupe", array()), "html", null, true);
        echo "\" alt=\"\" width=\"200\" class=\"select_img\"></td>
                                 <td>";
        // line 73
        echo "</td>
                                 <td><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_4_coupe");
        echo "\">Modifier la coupe</a></td>
                             </tr>
                        </table>
                </div>
            </div>
            <h2 style=\"text-align:center\"> Vos mesures </h2>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <tr>
                            <th colspan=\"3\">Poids et Taille</th
                        </tr>

                        <tr style=\"border:1px solid #ccc;\">
                            <th>Poids</th>
                            <th>Taille</th>
                            <th>Modifier</th>
                        </tr>
                        <tr>
                            <td>";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["poids"]) ? $context["poids"] : $this->getContext($context, "poids")), "html", null, true);
        echo " kg</td>
                            <td>";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["taille"]) ? $context["taille"] : $this->getContext($context, "taille")), "html", null, true);
        echo " cm</td>
                            <td><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_5_poidstaille");
        echo "\">Modifier</a></td>
                        </tr>
                    </table>
                </div>
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <tr>
                            <th colspan=\"3\">Haut du corps</th>
                        </tr>

                        <tr style=\"border:1px solid #ccc;\">
                            <th>Tour de cou</th>
                            <th>Tour de poitrine</th>
                            <th>Tour de taille</th>
                            <th>Tour de bassin</th>
                            <th>Modifier</th>
                        </tr>
                        <tr>
                            <td>";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["tour_cou"]) ? $context["tour_cou"] : $this->getContext($context, "tour_cou")), "html", null, true);
        echo " cm</td>
                            <td>";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["tour_poitrine"]) ? $context["tour_poitrine"] : $this->getContext($context, "tour_poitrine")), "html", null, true);
        echo " cm</td>
                            <td>";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["tour_taille"]) ? $context["tour_taille"] : $this->getContext($context, "tour_taille")), "html", null, true);
        echo " cm</td>
                            <td>";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["tour_bassin"]) ? $context["tour_bassin"] : $this->getContext($context, "tour_bassin")), "html", null, true);
        echo " cm</td>
                            <td><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_5_tronc");
        echo "\">Modifier</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <tr>
                            <th colspan=\"7\">Longueur de bras</th>
                        <tr style=\"border:1px solid #ccc;\">
                            <th>Bras gauche</th>
                            <th>Bras droit</th>
                            <th>Poignet gauche</th>
                            <th>Poignet droit</th>
                            <th>Modifier</th>
                        </tr>
                         <tr>
                             <td>";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["manche_gauche"]) ? $context["manche_gauche"] : $this->getContext($context, "manche_gauche")), "html", null, true);
        echo " cm</td>
                             <td>";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["manche_droite"]) ? $context["manche_droite"] : $this->getContext($context, "manche_droite")), "html", null, true);
        echo " cm</td>
                             <td>";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["poignet_gauche"]) ? $context["poignet_gauche"] : $this->getContext($context, "poignet_gauche")), "html", null, true);
        echo " cm</td>
                             <td>";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["poignet_droit"]) ? $context["poignet_droit"] : $this->getContext($context, "poignet_droit")), "html", null, true);
        echo " cm</td>
                             <td><a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_5_bras");
        echo "\">Modifier</a></td>
                         </tr>
                    </table>
                </div>
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <tr>
                            <th colspan=\"7\">Longueur de bras</th>
                        <tr style=\"border:1px solid #ccc;\">
                            <th>Carrure</th>
                            <th>Epaule_droite</th>
                            <th>Epaule_gauche</th>
                            <th>Dos</th>
                            <th>Modifier</th>
                        </tr>
                         <tr>
                             <td>";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["carrure"]) ? $context["carrure"] : $this->getContext($context, "carrure")), "html", null, true);
        echo " cm</td>
                             <td>";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["epaule_droite"]) ? $context["epaule_droite"] : $this->getContext($context, "epaule_droite")), "html", null, true);
        echo " cm</td>
                             <td>";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["epaule_gauche"]) ? $context["epaule_gauche"] : $this->getContext($context, "epaule_gauche")), "html", null, true);
        echo " cm</td>
                             <td>";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["dos"]) ? $context["dos"] : $this->getContext($context, "dos")), "html", null, true);
        echo " cm</td>
                             <td><a href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_5_carrure");
        echo "\">Modifier</a></td>
                         </tr>
                    </table>
                </div>
            </div>
";
        // line 171
        echo "           <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_validate");
        echo "\">Allez vers le panier</a>
        </div>                                 

    ";
        
        $__internal_3c10bb80c16370968dde11df9716812d08ef633ac4276313903f7b9d090d26ec->leave($__internal_3c10bb80c16370968dde11df9716812d08ef633ac4276313903f7b9d090d26ec_prof);

        
        $__internal_a3232c35be25df51bbb69dbb1d4cbedf3a47679e442147bca09522bfbe77653b->leave($__internal_a3232c35be25df51bbb69dbb1d4cbedf3a47679e442147bca09522bfbe77653b_prof);

    }

    public function getTemplateName()
    {
        return "custom/customrecap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 171,  323 => 159,  319 => 158,  315 => 157,  311 => 156,  307 => 155,  288 => 139,  284 => 138,  280 => 137,  276 => 136,  272 => 135,  251 => 117,  247 => 116,  243 => 115,  239 => 114,  235 => 113,  214 => 95,  210 => 94,  206 => 93,  184 => 74,  181 => 73,  177 => 72,  173 => 71,  156 => 57,  152 => 56,  148 => 55,  144 => 54,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title 'Récapitulatif' %}
    {% block content %}

        <h2 style=\"text-align:center\"> Voici votre configuration </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                        <table class=\"table\" style=\"border:1px solid #ccc;\">
                            <h3>Sélection de la chemise</h3>
                            <tr style=\"border:1px solid #ccc;\">
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>
                                <th>Modifier</th>
                             </tr>
                             <tr>
                                 <td>{{tissu.nom}}</td>
                                 <td><img src=\"{{tissu.photo}}\" alt=\"\" width=\"200\" class=\"select_img\"></td>
                                 <td>{{tissu.prix}}</td>
                                 <td><a href=\"{{ path('etape_1_tissu') }}\">Modifier votre chemise</td>
                             </tr>
                        </table>
                </div>
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                        <table class=\"table\" style=\"border:1px solid #ccc;\">
                            <h3>Sélection des boutons</h3>
                            <tr style=\"border:1px solid #ccc;\">
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>
                                <th>Modifier</th>
                             </tr>
                             <tr>
                                 <td>{{bouton.titre_bouton}}</td>
                                 <td><img src=\"{{bouton.photo_bouton}}\" alt=\"\" width=\"200\" class=\"select_img\"></td>
                                 <td>{{bouton.prix_bouton}}</td>
                                 <td><a href=\"{{ path('etape_2_bouton')}}\">Modifier le bouton</td>
                             </tr>
                        </table>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <h3>Sélection du col</h3>
                        <tr style=\"border:1px solid #ccc;\">
                            <th>Titre</th>
                            <th>Photo</th>
                            <th>Prix</th>
                            <th>Modifier</th>
                         </tr>
                         <tr>
                             <td>{{col.titre_col}}</td>
                             <td><img src=\"{{col.photo_col}}\" alt=\"\" width=\"200\" class=\"select_img\"></td>
                             <td>{{col.prix_col}}</td>
                             <td><a href=\"{{ path('etape_3_col') }}\">Modifier le col</td>
                         </tr>
                    </table>
                   </div>
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                        <table class=\"table\" style=\"border:1px solid #ccc;\">
                            <h3>Sélection de la coupe</h3>
                            <tr style=\"border:1px solid #ccc;\">
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>
                                <th>Modifier</th>
                             </tr>
                             <tr>
                                 <td>{{coupe.titre_coupe}}</td>
                                 <td><img src=\"{{coupe.photo_coupe}}\" alt=\"\" width=\"200\" class=\"select_img\"></td>
                                 <td>{#{{}}#}</td>
                                 <td><a href=\"{{ path('etape_4_coupe') }}\">Modifier la coupe</a></td>
                             </tr>
                        </table>
                </div>
            </div>
            <h2 style=\"text-align:center\"> Vos mesures </h2>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <tr>
                            <th colspan=\"3\">Poids et Taille</th
                        </tr>

                        <tr style=\"border:1px solid #ccc;\">
                            <th>Poids</th>
                            <th>Taille</th>
                            <th>Modifier</th>
                        </tr>
                        <tr>
                            <td>{{poids}} kg</td>
                            <td>{{taille}} cm</td>
                            <td><a href=\"{{ path('etape_5_poidstaille') }}\">Modifier</a></td>
                        </tr>
                    </table>
                </div>
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <tr>
                            <th colspan=\"3\">Haut du corps</th>
                        </tr>

                        <tr style=\"border:1px solid #ccc;\">
                            <th>Tour de cou</th>
                            <th>Tour de poitrine</th>
                            <th>Tour de taille</th>
                            <th>Tour de bassin</th>
                            <th>Modifier</th>
                        </tr>
                        <tr>
                            <td>{{tour_cou}} cm</td>
                            <td>{{tour_poitrine}} cm</td>
                            <td>{{tour_taille}} cm</td>
                            <td>{{tour_bassin}} cm</td>
                            <td><a href=\"{{ path('etape_5_tronc') }}\">Modifier</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <tr>
                            <th colspan=\"7\">Longueur de bras</th>
                        <tr style=\"border:1px solid #ccc;\">
                            <th>Bras gauche</th>
                            <th>Bras droit</th>
                            <th>Poignet gauche</th>
                            <th>Poignet droit</th>
                            <th>Modifier</th>
                        </tr>
                         <tr>
                             <td>{{manche_gauche}} cm</td>
                             <td>{{manche_droite}} cm</td>
                             <td>{{poignet_gauche}} cm</td>
                             <td>{{poignet_droit}} cm</td>
                             <td><a href=\"{{ path('etape_5_bras') }}\">Modifier</a></td>
                         </tr>
                    </table>
                </div>
                <div class=\"col-xs-12 col-md-6 col-lg-6\">
                    <table class=\"table\" style=\"border:1px solid #ccc;\">
                        <tr>
                            <th colspan=\"7\">Longueur de bras</th>
                        <tr style=\"border:1px solid #ccc;\">
                            <th>Carrure</th>
                            <th>Epaule_droite</th>
                            <th>Epaule_gauche</th>
                            <th>Dos</th>
                            <th>Modifier</th>
                        </tr>
                         <tr>
                             <td>{{carrure}} cm</td>
                             <td>{{epaule_droite}} cm</td>
                             <td>{{epaule_gauche}} cm</td>
                             <td>{{dos}} cm</td>
                             <td><a href=\"{{ path('etape_5_carrure') }}\">Modifier</a></td>
                         </tr>
                    </table>
                </div>
            </div>
{#            <form method=\"post\">
                <div class=\"form-group\">
                    <label>Nommez votre configuration</label>
                    <input type=\"text\" name=\"titre_custom\" value=\"{{ titre_custom }}\" class=\"form-control\" placeholder=\"Merci de renseigner un nom à votre configuration\">
                </div>       
            <button type=\"submit\">Valider votre configuration</button><br><br><br>
            </form>#}
           <a href=\"{{path('custom_validate')}}\">Allez vers le panier</a>
        </div>                                 

    {% endblock %}
", "custom/customrecap.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\customrecap.html.twig");
    }
}
