<?php

/* produits.html.twig */
class __TwigTemplate_375021a46d5e4bf08c660abc682bb92832f844b9a6bc81334f73df2b68c13f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "produits.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_300f93b0ee3d9399c07e981d38fd330dee23af7d488f46e8c491b970d4a039df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300f93b0ee3d9399c07e981d38fd330dee23af7d488f46e8c491b970d4a039df->enter($__internal_300f93b0ee3d9399c07e981d38fd330dee23af7d488f46e8c491b970d4a039df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits.html.twig"));

        $__internal_853c4516dfdadde5d20598803e1afca818ec5b9f4d67586cdc28b972566c7a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853c4516dfdadde5d20598803e1afca818ec5b9f4d67586cdc28b972566c7a2b->enter($__internal_853c4516dfdadde5d20598803e1afca818ec5b9f4d67586cdc28b972566c7a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300f93b0ee3d9399c07e981d38fd330dee23af7d488f46e8c491b970d4a039df->leave($__internal_300f93b0ee3d9399c07e981d38fd330dee23af7d488f46e8c491b970d4a039df_prof);

        
        $__internal_853c4516dfdadde5d20598803e1afca818ec5b9f4d67586cdc28b972566c7a2b->leave($__internal_853c4516dfdadde5d20598803e1afca818ec5b9f4d67586cdc28b972566c7a2b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_55c0f57c9c723cb8789ef54d099b2dca71797775fbdf5f285102bfc4dd8d9a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c0f57c9c723cb8789ef54d099b2dca71797775fbdf5f285102bfc4dd8d9a3e->enter($__internal_55c0f57c9c723cb8789ef54d099b2dca71797775fbdf5f285102bfc4dd8d9a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_221db9ea456e4427b6f9e3a5417c46bc8bf68cbdea84471cfadc3fe2e066d0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221db9ea456e4427b6f9e3a5417c46bc8bf68cbdea84471cfadc3fe2e066d0ef->enter($__internal_221db9ea456e4427b6f9e3a5417c46bc8bf68cbdea84471cfadc3fe2e066d0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    ";
        // line 7
        echo "    ";
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "admin", array())) {
            // line 10
            echo "        <h1>Hello Admin ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "userName", array()), "html", null, true);
            echo "</h1>
    ";
        } elseif ($this->getAttribute(        // line 11
(isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 12
            echo "        <h1>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "userName", array()), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 14
            echo "        ";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2\">
                <form action=\"\">

                    <div class=\"form-group\">
                        <label for=\"type\">Type</label>
                        <select name=\"type\" id=\"type\" class=\"form-control request\">
                            <option value=\"\">Coisissez un type</option>
                            <option value=\"cintre\">Cintré</option>
                            <option value=\"m_longue\">Manche longue</option>
                            <option value=\"m_courte\">Manche courte</option>
                        </select>
                    </div>


                    <div class=\"form-group\">
                        <label for=\"tissu\">Tissu</label>
                        <select name=\"tissu\" id=\"tissu\" class=\"form-control request\">
                            <option value=\"\">Coisissez un tissu</option>
                            <option value=\"POPELINE CARREAUX VERT\">POPELINE CARREAUX VERT</option>
                            <option value=\"POPELINE RAYÉ BLEU\">POPELINE RAYÉ BLEU</option>
                            <option value=\"POPELINE CARREAUX BLEU\">POPELINE CARREAUX BLEU</option>
                            <option value=\"POPELINE CARREAUX BLEU ET MARRON\">POPELINE CARREAUX BLEU ET MARRON</option>
                            <option value=\"POPELINE RAYÉ ROSE\">POPELINE RAYÉ ROSE</option>
                            <option value=\"POPELINE UNI NOIR\">POPELINE UNI NOIR</option>
                            <option value=\"TWILL CARREAUX BLEU\">TWILL CARREAUX BLEU</option>
                            <option value=\"PIN-POINT UNI BLANC\">PIN-POINT UNI BLANC</option>
                            <option value=\"CHAMBRAY UNI BLEU\">CHAMBRAY UNI BLEU</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"taille\">Taille</label>
                        <select name=\"taille\" id=\"taille\" class=\"form-control request\">
                            <option value=\"\">Coisissez une taille</option>
                            <option value=\"XS\">XS</option>
                            <option value=\"S\">S</option>
                            <option value=\"M\">M</option>
                            <option value=\"L\">L</option>
                            <option value=\"XL\">XL</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sexe\">Public</label>
                        <select name=\"sexe\" id=\"sexe\" class=\"form-control request\">
                            <option value=\"\">Coisissez votre sexe</option>
                            <option value=\"m\">Homme</option>
                            <option value=\"f\">Femme</option>
                            <option value=\"mixte\">Mixte</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"prix\">Prix</label>
                        <select name=\"prix\" id=\"prix\" class=\"form-control request\">
                            <option value=\"\">Coisissez un prix</option>
                            <option value=\"50\">0€ - 50€</option>
                            <option value=\"100\">50€ - 100€</option>
                            <option value=\"150\">100€ - 150€</option>
                            <option value=\"200\">150€ - 200€</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class=\"col-sm-9 col-sm-offset-1 container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <select name=\"range\" id=\"range\" class=\"form-control request\">
                                    <option value=\"\">Trier par</option>
                                    <option value=\"price_up\">Prix croissant</option>
                                    <option value=\"price_down\">Prix décroissant</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-sm-offset-6\">
                            <div class=\"form-group\">
                                <select name=\"nombre\" id=\"nombre\" class=\"form-control request\">
                                    <option value=\"\">Résultats par page</option>
                                    <option value=\"10\">10</option>
                                    <option value=\"30\">30</option>
                                    <option value=\"50\">50</option>
                                    <option value=\"200\">200</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-12 display\">
                        ";
        // line 111
        $this->loadTemplate("produit/list.html.twig", "produits.html.twig", 111)->display($context);
        // line 112
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_221db9ea456e4427b6f9e3a5417c46bc8bf68cbdea84471cfadc3fe2e066d0ef->leave($__internal_221db9ea456e4427b6f9e3a5417c46bc8bf68cbdea84471cfadc3fe2e066d0ef_prof);

        
        $__internal_55c0f57c9c723cb8789ef54d099b2dca71797775fbdf5f285102bfc4dd8d9a3e->leave($__internal_55c0f57c9c723cb8789ef54d099b2dca71797775fbdf5f285102bfc4dd8d9a3e_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59ed384d6e6f8ff47d7b7f798d3c133d1741a91da44e1d4a9b02ad4487ac7290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ed384d6e6f8ff47d7b7f798d3c133d1741a91da44e1d4a9b02ad4487ac7290->enter($__internal_59ed384d6e6f8ff47d7b7f798d3c133d1741a91da44e1d4a9b02ad4487ac7290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_55a461f216aa2d9a3a6ae08fa3e0831ab50b23854c19df31ac2b73ed8305232b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a461f216aa2d9a3a6ae08fa3e0831ab50b23854c19df31ac2b73ed8305232b->enter($__internal_55a461f216aa2d9a3a6ae08fa3e0831ab50b23854c19df31ac2b73ed8305232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var ajaxApiUrl = \"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_api");
        echo "\";
    </script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/scriptBoutique.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_55a461f216aa2d9a3a6ae08fa3e0831ab50b23854c19df31ac2b73ed8305232b->leave($__internal_55a461f216aa2d9a3a6ae08fa3e0831ab50b23854c19df31ac2b73ed8305232b_prof);

        
        $__internal_59ed384d6e6f8ff47d7b7f798d3c133d1741a91da44e1d4a9b02ad4487ac7290->leave($__internal_59ed384d6e6f8ff47d7b7f798d3c133d1741a91da44e1d4a9b02ad4487ac7290_prof);

    }

    public function getTemplateName()
    {
        return "produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 124,  208 => 122,  202 => 120,  193 => 119,  178 => 112,  176 => 111,  79 => 16,  76 => 15,  74 => 14,  68 => 12,  66 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block content %}


    {#<h1>Accueil</h1>#}
    {# {% include 'custom/tissu.html.twig' %} #}

    {% if user_manager.admin %}
        <h1>Hello Admin {{ user_manager.userName }}</h1>
    {% elseif user_manager.user %}
        <h1>Hello {{ user_manager.userName }}</h1>
    {% else %}
        {#<h1>Hello visiteur</h1>#}
    {% endif %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2\">
                <form action=\"\">

                    <div class=\"form-group\">
                        <label for=\"type\">Type</label>
                        <select name=\"type\" id=\"type\" class=\"form-control request\">
                            <option value=\"\">Coisissez un type</option>
                            <option value=\"cintre\">Cintré</option>
                            <option value=\"m_longue\">Manche longue</option>
                            <option value=\"m_courte\">Manche courte</option>
                        </select>
                    </div>


                    <div class=\"form-group\">
                        <label for=\"tissu\">Tissu</label>
                        <select name=\"tissu\" id=\"tissu\" class=\"form-control request\">
                            <option value=\"\">Coisissez un tissu</option>
                            <option value=\"POPELINE CARREAUX VERT\">POPELINE CARREAUX VERT</option>
                            <option value=\"POPELINE RAYÉ BLEU\">POPELINE RAYÉ BLEU</option>
                            <option value=\"POPELINE CARREAUX BLEU\">POPELINE CARREAUX BLEU</option>
                            <option value=\"POPELINE CARREAUX BLEU ET MARRON\">POPELINE CARREAUX BLEU ET MARRON</option>
                            <option value=\"POPELINE RAYÉ ROSE\">POPELINE RAYÉ ROSE</option>
                            <option value=\"POPELINE UNI NOIR\">POPELINE UNI NOIR</option>
                            <option value=\"TWILL CARREAUX BLEU\">TWILL CARREAUX BLEU</option>
                            <option value=\"PIN-POINT UNI BLANC\">PIN-POINT UNI BLANC</option>
                            <option value=\"CHAMBRAY UNI BLEU\">CHAMBRAY UNI BLEU</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"taille\">Taille</label>
                        <select name=\"taille\" id=\"taille\" class=\"form-control request\">
                            <option value=\"\">Coisissez une taille</option>
                            <option value=\"XS\">XS</option>
                            <option value=\"S\">S</option>
                            <option value=\"M\">M</option>
                            <option value=\"L\">L</option>
                            <option value=\"XL\">XL</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sexe\">Public</label>
                        <select name=\"sexe\" id=\"sexe\" class=\"form-control request\">
                            <option value=\"\">Coisissez votre sexe</option>
                            <option value=\"m\">Homme</option>
                            <option value=\"f\">Femme</option>
                            <option value=\"mixte\">Mixte</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"prix\">Prix</label>
                        <select name=\"prix\" id=\"prix\" class=\"form-control request\">
                            <option value=\"\">Coisissez un prix</option>
                            <option value=\"50\">0€ - 50€</option>
                            <option value=\"100\">50€ - 100€</option>
                            <option value=\"150\">100€ - 150€</option>
                            <option value=\"200\">150€ - 200€</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class=\"col-sm-9 col-sm-offset-1 container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <select name=\"range\" id=\"range\" class=\"form-control request\">
                                    <option value=\"\">Trier par</option>
                                    <option value=\"price_up\">Prix croissant</option>
                                    <option value=\"price_down\">Prix décroissant</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-sm-offset-6\">
                            <div class=\"form-group\">
                                <select name=\"nombre\" id=\"nombre\" class=\"form-control request\">
                                    <option value=\"\">Résultats par page</option>
                                    <option value=\"10\">10</option>
                                    <option value=\"30\">30</option>
                                    <option value=\"50\">50</option>
                                    <option value=\"200\">200</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-12 display\">
                        {% include 'produit/list.html.twig' %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        var ajaxApiUrl = \"{{ path('ajax_api') }}\";
    </script>
    <script src=\"{{ asset('script/scriptBoutique.js') }}\"></script>
{% endblock %}", "produits.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\templates\\produits.html.twig");
    }
}
