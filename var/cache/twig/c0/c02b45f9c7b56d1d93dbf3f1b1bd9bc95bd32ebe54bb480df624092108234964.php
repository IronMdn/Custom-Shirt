<?php

/* index.html.twig */
class __TwigTemplate_16005088c02decbfe7c13f76ce43c4a04cb188b2be4e3517ca7c48c2d1359680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

 <h1>Accueil</h1>
    ";
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "admin", array())) {
            // line 10
            echo "        <h1>Hello Admin ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "userName", array()), "html", null, true);
            echo "</h1>
    ";
        } elseif ($this->getAttribute(        // line 11
(isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
            // line 12
            echo "        <h1>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "userName", array()), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 14
            echo "    <h1>Hello visiteur</h1>
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
        $this->loadTemplate("produit/produit_list.html.twig", "index.html.twig", 111)->display($context);
        // line 112
        echo "                </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 124,  176 => 122,  170 => 120,  167 => 119,  158 => 112,  156 => 111,  59 => 16,  55 => 14,  49 => 12,  47 => 11,  42 => 10,  40 => 9,  37 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\index.html.twig");
    }
}
