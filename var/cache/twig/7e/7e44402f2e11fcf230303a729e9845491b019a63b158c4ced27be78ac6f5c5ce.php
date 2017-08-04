<?php

/* basket/index.html.twig */
class __TwigTemplate_481a70737238df92f4de494667b28ac422250d7418cddd437d314ffbbd9e80eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "basket/index.html.twig", 1);
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
        $__internal_9be3bf40a654a0e9972b3acfaf014d524abecaea2e8e13a005bef5f25a3a3a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be3bf40a654a0e9972b3acfaf014d524abecaea2e8e13a005bef5f25a3a3a4e->enter($__internal_9be3bf40a654a0e9972b3acfaf014d524abecaea2e8e13a005bef5f25a3a3a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_5cad5cc0a6ce5a4c8e4ca25f81ec9012aed4000a045bc3c6ab57f48a4e3afd1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cad5cc0a6ce5a4c8e4ca25f81ec9012aed4000a045bc3c6ab57f48a4e3afd1b->enter($__internal_5cad5cc0a6ce5a4c8e4ca25f81ec9012aed4000a045bc3c6ab57f48a4e3afd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be3bf40a654a0e9972b3acfaf014d524abecaea2e8e13a005bef5f25a3a3a4e->leave($__internal_9be3bf40a654a0e9972b3acfaf014d524abecaea2e8e13a005bef5f25a3a3a4e_prof);

        
        $__internal_5cad5cc0a6ce5a4c8e4ca25f81ec9012aed4000a045bc3c6ab57f48a4e3afd1b->leave($__internal_5cad5cc0a6ce5a4c8e4ca25f81ec9012aed4000a045bc3c6ab57f48a4e3afd1b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6990de0a1662b01c903ef6246def37552b5f4caf131e78352e3f95b43a666e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6990de0a1662b01c903ef6246def37552b5f4caf131e78352e3f95b43a666e1->enter($__internal_f6990de0a1662b01c903ef6246def37552b5f4caf131e78352e3f95b43a666e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f099eabc511a43e5480900a431757d86bf0d41acfc91144c63bcb70ce8a50bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f099eabc511a43e5480900a431757d86bf0d41acfc91144c63bcb70ce8a50bb1->enter($__internal_f099eabc511a43e5480900a431757d86bf0d41acfc91144c63bcb70ce8a50bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        if ( !twig_test_empty((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")))) {
            echo " ";
            // line 6
            echo "    
        <!-- CSS pour tableau ci-dessous -->
        <style>      
                table, td, th
                {
                    border:solid 1px black;
                    text-align:center;
                }
                
                th
                {
                    background: grey;
                    padding : 5px;
                }
                
                td
                {
                    background: #BBDEFB; /* bleu clair */
                    padding : 5px;
                }
                
                tfoot tr td
                {
                    background: #E0E0E0;
                }
                
                #panier>tr>th /* Casser l'héritage du css de boostrap */
                {
                    border-top:solid 1px black;
                }
                
                .vigilance:hover
                {
                    color:red;
                }
                                     
        </style>

        <h2>Voici votre panier :</h2><br><br>
        
        <form method=\"post\" action=";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_pay");
            echo " > ";
            // line 47
            echo "

            <table class='table' id='panier'>
                <tr>
                    <th>Titre</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th colspan=\"2\">Modifier la quantité</th>
                    <th>Retirer le produit du panier</th>
                    <th>Prix par type de produit</th>
                 </tr>
                 
                <div class='container'>

                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["productOrConfig"]) {
                echo " ";
                // line 62
                echo "
                        ";
                // line 64
                echo "
                        ";
                // line 65
                if ($this->getAttribute($context["productOrConfig"], "titre_custom", array(), "any", true, true)) {
                    echo " ";
                    // line 66
                    echo "
                            <tr class=\"customOrProduct\">
                                <td><strong>";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productOrConfig"], "titre_custom", array()), "html", null, true);
                    echo "</strong></td>
                                <td class='prix'>";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productOrConfig"], "prix", array()), "html", null, true);
                    echo " €</td>
                                <td class='quantite'>";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productOrConfig"], "quantite", array()), "html", null, true);
                    echo "</td>  
                                <td><a href=";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_increment", array("idProduitEnSession" => $this->getAttribute($context["loop"], "index0", array()))), "html", null, true);
                    echo "><strong> + </strong></a></td> ";
                    // line 72
                    echo "                                <td><a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_decrement", array("idProduitEnSession" => $this->getAttribute($context["loop"], "index0", array()))), "html", null, true);
                    echo "><strong> - </strong></a></td>
                                <td><u><a class='vigilance' href=";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_delete", array("idProduitEnSession" => $this->getAttribute($context["loop"], "index0", array()))), "html", null, true);
                    echo "> Retirer le produit </a></u></td>
                                <td>";
                    // line 74
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["productOrConfig"], "prix", array()) * $this->getAttribute($context["productOrConfig"], "quantite", array())), "html", null, true);
                    echo " €</td>
                            </tr> 

                        ";
                } else {
                    // line 77
                    echo " ";
                    // line 78
                    echo "
                            <tr class=\"customOrProduct\">
                                <td><strong> ";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productOrConfig"], "titre", array()), "html", null, true);
                    echo " </strong></td>
                                <td class='prix'>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productOrConfig"], "prix", array()), "html", null, true);
                    echo " €</td>
                                <td class='quantite'>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productOrConfig"], "quantite", array()), "html", null, true);
                    echo "</td>
                                <td><a href=";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_increment", array("idProduitEnSession" => $this->getAttribute($context["loop"], "index0", array()))), "html", null, true);
                    echo "><strong> + </strong></a></td> ";
                    // line 84
                    echo "                                <td><a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_decrement", array("idProduitEnSession" => $this->getAttribute($context["loop"], "index0", array()))), "html", null, true);
                    echo "><strong> - </strong></a></td>
                                <td><u><a class='vigilance' href=";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_delete", array("idProduitEnSession" => $this->getAttribute($context["loop"], "index0", array()))), "html", null, true);
                    echo "> Retirer le produit </a></u></td>
                                <td>";
                    // line 86
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["productOrConfig"], "prix", array()) * $this->getAttribute($context["productOrConfig"], "quantite", array())), "html", null, true);
                    echo " €</td>
                            </tr>

                        ";
                }
                // line 90
                echo "
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productOrConfig'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                </div>

                <tfoot>
                    <tr>
                        <td><u><strong>Prix total du panier : </strong></u></td>
                        <td class='montantPanier'></td>
                    </tr>
                </tfoot>

            </table>
            
            <hr>
        
            <input class='montantPanierPourPost' type='hidden' name='montantTotalPanier'> ";
            // line 107
            echo "            
            <button type =\"submit\" class=btn-primary\">Passer au paiement</button> ";
            // line 109
            echo "            
        </form>
 
    ";
        } else {
            // line 112
            echo " ";
            // line 113
            echo "        
        <h2>Votre panier est vide !</h2><br><br>
        
    ";
        }
        // line 117
        echo "
";
        
        $__internal_f099eabc511a43e5480900a431757d86bf0d41acfc91144c63bcb70ce8a50bb1->leave($__internal_f099eabc511a43e5480900a431757d86bf0d41acfc91144c63bcb70ce8a50bb1_prof);

        
        $__internal_f6990de0a1662b01c903ef6246def37552b5f4caf131e78352e3f95b43a666e1->leave($__internal_f6990de0a1662b01c903ef6246def37552b5f4caf131e78352e3f95b43a666e1_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e168aa043657f730de89e1c16123020d4fe7a5e28186c2770f3f926371cab964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e168aa043657f730de89e1c16123020d4fe7a5e28186c2770f3f926371cab964->enter($__internal_e168aa043657f730de89e1c16123020d4fe7a5e28186c2770f3f926371cab964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2705e433db6e8300061adbaba8147dc5e0b56cbf3ae58185a688661ebd2b910a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2705e433db6e8300061adbaba8147dc5e0b56cbf3ae58185a688661ebd2b910a->enter($__internal_2705e433db6e8300061adbaba8147dc5e0b56cbf3ae58185a688661ebd2b910a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "    
    ";
        // line 123
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/scriptBasket.js"), "html", null, true);
        echo "\"></script>
    
";
        
        $__internal_2705e433db6e8300061adbaba8147dc5e0b56cbf3ae58185a688661ebd2b910a->leave($__internal_2705e433db6e8300061adbaba8147dc5e0b56cbf3ae58185a688661ebd2b910a_prof);

        
        $__internal_e168aa043657f730de89e1c16123020d4fe7a5e28186c2770f3f926371cab964->leave($__internal_e168aa043657f730de89e1c16123020d4fe7a5e28186c2770f3f926371cab964_prof);

    }

    public function getTemplateName()
    {
        return "basket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 125,  287 => 123,  284 => 122,  275 => 121,  264 => 117,  258 => 113,  256 => 112,  250 => 109,  247 => 107,  231 => 92,  216 => 90,  209 => 86,  205 => 85,  200 => 84,  197 => 83,  193 => 82,  189 => 81,  185 => 80,  181 => 78,  179 => 77,  172 => 74,  168 => 73,  163 => 72,  160 => 71,  156 => 70,  152 => 69,  148 => 68,  144 => 66,  141 => 65,  138 => 64,  135 => 62,  117 => 61,  101 => 47,  98 => 46,  56 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

    {% if basket is not empty %} {# Si panier passé en paramètre n'est pas null #}
    
        <!-- CSS pour tableau ci-dessous -->
        <style>      
                table, td, th
                {
                    border:solid 1px black;
                    text-align:center;
                }
                
                th
                {
                    background: grey;
                    padding : 5px;
                }
                
                td
                {
                    background: #BBDEFB; /* bleu clair */
                    padding : 5px;
                }
                
                tfoot tr td
                {
                    background: #E0E0E0;
                }
                
                #panier>tr>th /* Casser l'héritage du css de boostrap */
                {
                    border-top:solid 1px black;
                }
                
                .vigilance:hover
                {
                    color:red;
                }
                                     
        </style>

        <h2>Voici votre panier :</h2><br><br>
        
        <form method=\"post\" action={{ path('basket_pay') }} > {#'http://localhost/custom_shirt-2/web/index_dev.php/basket/pay'#}


            <table class='table' id='panier'>
                <tr>
                    <th>Titre</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th colspan=\"2\">Modifier la quantité</th>
                    <th>Retirer le produit du panier</th>
                    <th>Prix par type de produit</th>
                 </tr>
                 
                <div class='container'>

                    {% for productOrConfig in basket %} {# On boucle sur le tableau 'basket' qui contient des produits et des configs #}

                        {# Le if else va p'etre etre retiré (si mêmes champs pour config et produit) #}

                        {% if productOrConfig.titre_custom is defined %} {# Si on est dans le cas d'une config => cad une chemise en demi-mesure #}

                            <tr class=\"customOrProduct\">
                                <td><strong>{{ productOrConfig.titre_custom }}</strong></td>
                                <td class='prix'>{{ productOrConfig.prix }} €</td>
                                <td class='quantite'>{{ productOrConfig.quantite }}</td>  
                                <td><a href={{ path('basket_increment', {idProduitEnSession: loop.index0}) }}><strong> + </strong></a></td> {# loop.index0 permet de commencer à numéroter à 0 et non 1 #}
                                <td><a href={{ path('basket_decrement', {idProduitEnSession: loop.index0}) }}><strong> - </strong></a></td>
                                <td><u><a class='vigilance' href={{ path('basket_delete', {idProduitEnSession: loop.index0}) }}> Retirer le produit </a></u></td>
                                <td>{{ productOrConfig.prix * productOrConfig.quantite }} €</td>
                            </tr> 

                        {% else %} {# Si on est dans le cas d'un produit => prêt à porter #}

                            <tr class=\"customOrProduct\">
                                <td><strong> {{ productOrConfig.titre }} </strong></td>
                                <td class='prix'>{{ productOrConfig.prix }} €</td>
                                <td class='quantite'>{{ productOrConfig.quantite }}</td>
                                <td><a href={{ path('basket_increment', {idProduitEnSession: loop.index0}) }}><strong> + </strong></a></td> {# loop.index0 permet de commencer à numéroter à 0 et non 1 #}
                                <td><a href={{ path('basket_decrement', {idProduitEnSession: loop.index0}) }}><strong> - </strong></a></td>
                                <td><u><a class='vigilance' href={{ path('basket_delete', {idProduitEnSession: loop.index0}) }}> Retirer le produit </a></u></td>
                                <td>{{ productOrConfig.prix * productOrConfig.quantite }} €</td>
                            </tr>

                        {% endif %}

                    {% endfor %}

                </div>

                <tfoot>
                    <tr>
                        <td><u><strong>Prix total du panier : </strong></u></td>
                        <td class='montantPanier'></td>
                    </tr>
                </tfoot>

            </table>
            
            <hr>
        
            <input class='montantPanierPourPost' type='hidden' name='montantTotalPanier'> {# Cette ligne sert pour passer le montant total du panier dans \$_POST, la value du champ est géré par le javascript #}
            
            <button type =\"submit\" class=btn-primary\">Passer au paiement</button> {# Lien vers le paiement #}
            
        </form>
 
    {% else %} {# Si panier vide #}
        
        <h2>Votre panier est vide !</h2><br><br>
        
    {% endif %}

{% endblock %}


{% block javascripts %}
    
    {{ parent() }}
    
    <script src=\"{{ asset('script/scriptBasket.js') }}\"></script>
    
{% endblock %}", "basket/index.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\basket\\index.html.twig");
    }
}
