<?php

/* produits.html.twig */
class __TwigTemplate_910806d7231752a0563a95a792d3d35b7367419d50e764f8d80d39de4a8abf85 extends Twig_Template
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
        $__internal_5efc619f42aa8512a4b3d39654169d7ace7d004798fdc1517ca24e48248036d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efc619f42aa8512a4b3d39654169d7ace7d004798fdc1517ca24e48248036d4->enter($__internal_5efc619f42aa8512a4b3d39654169d7ace7d004798fdc1517ca24e48248036d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits.html.twig"));

        $__internal_d6b801f0de3db871f8d302640511980e0f8a722deae4476ba1ae9e09fb038303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b801f0de3db871f8d302640511980e0f8a722deae4476ba1ae9e09fb038303->enter($__internal_d6b801f0de3db871f8d302640511980e0f8a722deae4476ba1ae9e09fb038303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5efc619f42aa8512a4b3d39654169d7ace7d004798fdc1517ca24e48248036d4->leave($__internal_5efc619f42aa8512a4b3d39654169d7ace7d004798fdc1517ca24e48248036d4_prof);

        
        $__internal_d6b801f0de3db871f8d302640511980e0f8a722deae4476ba1ae9e09fb038303->leave($__internal_d6b801f0de3db871f8d302640511980e0f8a722deae4476ba1ae9e09fb038303_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4a668b5dda5ff1317d1a0be06aae678cc94fc932e9e98310a5e167d7d4ed2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a668b5dda5ff1317d1a0be06aae678cc94fc932e9e98310a5e167d7d4ed2fa->enter($__internal_a4a668b5dda5ff1317d1a0be06aae678cc94fc932e9e98310a5e167d7d4ed2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bfcee834bf8bb739f391153854547c215a59d463fda229f8f9f84f6f585d2945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcee834bf8bb739f391153854547c215a59d463fda229f8f9f84f6f585d2945->enter($__internal_bfcee834bf8bb739f391153854547c215a59d463fda229f8f9f84f6f585d2945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <h1>Accueil</h1>
    ";
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
            echo "        <h1>Hello visiteur</h1>
    ";
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
        
        $__internal_bfcee834bf8bb739f391153854547c215a59d463fda229f8f9f84f6f585d2945->leave($__internal_bfcee834bf8bb739f391153854547c215a59d463fda229f8f9f84f6f585d2945_prof);

        
        $__internal_a4a668b5dda5ff1317d1a0be06aae678cc94fc932e9e98310a5e167d7d4ed2fa->leave($__internal_a4a668b5dda5ff1317d1a0be06aae678cc94fc932e9e98310a5e167d7d4ed2fa_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9db01be3bb8463ea851462f651d8e233b55a8d9a8c4f26c6384dd46fb41f617b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db01be3bb8463ea851462f651d8e233b55a8d9a8c4f26c6384dd46fb41f617b->enter($__internal_9db01be3bb8463ea851462f651d8e233b55a8d9a8c4f26c6384dd46fb41f617b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_867e2b12468644cd7ec76b17d646b848720431f7c1abca3318819ebb48570fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867e2b12468644cd7ec76b17d646b848720431f7c1abca3318819ebb48570fd2->enter($__internal_867e2b12468644cd7ec76b17d646b848720431f7c1abca3318819ebb48570fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_867e2b12468644cd7ec76b17d646b848720431f7c1abca3318819ebb48570fd2->leave($__internal_867e2b12468644cd7ec76b17d646b848720431f7c1abca3318819ebb48570fd2_prof);

        
        $__internal_9db01be3bb8463ea851462f651d8e233b55a8d9a8c4f26c6384dd46fb41f617b->leave($__internal_9db01be3bb8463ea851462f651d8e233b55a8d9a8c4f26c6384dd46fb41f617b_prof);

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
        return array (  211 => 124,  206 => 122,  200 => 120,  191 => 119,  176 => 112,  174 => 111,  77 => 16,  73 => 14,  67 => 12,  65 => 11,  60 => 10,  58 => 9,  55 => 8,  50 => 4,  41 => 3,  11 => 1,);
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


    <h1>Accueil</h1>
    {# {% include 'custom/tissu.html.twig' %} #}

    {% if user_manager.admin %}
        <h1>Hello Admin {{ user_manager.userName }}</h1>
    {% elseif user_manager.user %}
        <h1>Hello {{ user_manager.userName }}</h1>
    {% else %}
        <h1>Hello visiteur</h1>
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
{% endblock %}", "produits.html.twig", "C:\\wamp64\\www\\cust\\custom_shirt-2\\templates\\produits.html.twig");
    }
}
