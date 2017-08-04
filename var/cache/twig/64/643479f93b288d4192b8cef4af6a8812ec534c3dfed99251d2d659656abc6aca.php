<?php

/* produits.html.twig */
class __TwigTemplate_4503f242619c9c543d77f2fa23bce22ded2841f8d19fd78bd0785bc49f66d0be extends Twig_Template
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
        $__internal_19dfb1cd86b081eb292153cd07f5d799f4db9dcdea741ce8ed365e542fc20bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19dfb1cd86b081eb292153cd07f5d799f4db9dcdea741ce8ed365e542fc20bb6->enter($__internal_19dfb1cd86b081eb292153cd07f5d799f4db9dcdea741ce8ed365e542fc20bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits.html.twig"));

        $__internal_496d90051e9cdee3dcab389ff3c4260e6c3b8f3f65554311b5fcae1ff501f8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496d90051e9cdee3dcab389ff3c4260e6c3b8f3f65554311b5fcae1ff501f8b1->enter($__internal_496d90051e9cdee3dcab389ff3c4260e6c3b8f3f65554311b5fcae1ff501f8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19dfb1cd86b081eb292153cd07f5d799f4db9dcdea741ce8ed365e542fc20bb6->leave($__internal_19dfb1cd86b081eb292153cd07f5d799f4db9dcdea741ce8ed365e542fc20bb6_prof);

        
        $__internal_496d90051e9cdee3dcab389ff3c4260e6c3b8f3f65554311b5fcae1ff501f8b1->leave($__internal_496d90051e9cdee3dcab389ff3c4260e6c3b8f3f65554311b5fcae1ff501f8b1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_61e40936b95d32271049aad464c194b916f9273b8d764a9dedd18ec8961d26f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e40936b95d32271049aad464c194b916f9273b8d764a9dedd18ec8961d26f8->enter($__internal_61e40936b95d32271049aad464c194b916f9273b8d764a9dedd18ec8961d26f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b4770eb8fff3807c1dad2e52d2e6bb7f336b2a1232b4e67eba275703ac3e3957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4770eb8fff3807c1dad2e52d2e6bb7f336b2a1232b4e67eba275703ac3e3957->enter($__internal_b4770eb8fff3807c1dad2e52d2e6bb7f336b2a1232b4e67eba275703ac3e3957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b4770eb8fff3807c1dad2e52d2e6bb7f336b2a1232b4e67eba275703ac3e3957->leave($__internal_b4770eb8fff3807c1dad2e52d2e6bb7f336b2a1232b4e67eba275703ac3e3957_prof);

        
        $__internal_61e40936b95d32271049aad464c194b916f9273b8d764a9dedd18ec8961d26f8->leave($__internal_61e40936b95d32271049aad464c194b916f9273b8d764a9dedd18ec8961d26f8_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58e0c3b34683933a259cb8d9c1c1c9f6f666a18821fb099eee0e79ef77c3c306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e0c3b34683933a259cb8d9c1c1c9f6f666a18821fb099eee0e79ef77c3c306->enter($__internal_58e0c3b34683933a259cb8d9c1c1c9f6f666a18821fb099eee0e79ef77c3c306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c64a1c0398ecf96f1f04974bb8e7d46a84d8b85f624460c7d4b05e905116c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c64a1c0398ecf96f1f04974bb8e7d46a84d8b85f624460c7d4b05e905116c76->enter($__internal_3c64a1c0398ecf96f1f04974bb8e7d46a84d8b85f624460c7d4b05e905116c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3c64a1c0398ecf96f1f04974bb8e7d46a84d8b85f624460c7d4b05e905116c76->leave($__internal_3c64a1c0398ecf96f1f04974bb8e7d46a84d8b85f624460c7d4b05e905116c76_prof);

        
        $__internal_58e0c3b34683933a259cb8d9c1c1c9f6f666a18821fb099eee0e79ef77c3c306->leave($__internal_58e0c3b34683933a259cb8d9c1c1c9f6f666a18821fb099eee0e79ef77c3c306_prof);

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
{% endblock %}", "produits.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\produits.html.twig");
    }
}
