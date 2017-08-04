<?php

/* user/profile.html.twig */
class __TwigTemplate_ae20614032052c9979acdd991c6c2aa738fc31173ccdf075f57002b6cf2cae6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'commandes' => array($this, 'block_commandes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d0788a56dd01468df05728392500e282d903e4b11f1e0e154b55cf534122ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0788a56dd01468df05728392500e282d903e4b11f1e0e154b55cf534122ff1->enter($__internal_2d0788a56dd01468df05728392500e282d903e4b11f1e0e154b55cf534122ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_27df4cbf3296522b55b90a20db669bf4aaae553b1198d391aa83158994070c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27df4cbf3296522b55b90a20db669bf4aaae553b1198d391aa83158994070c4b->enter($__internal_27df4cbf3296522b55b90a20db669bf4aaae553b1198d391aa83158994070c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d0788a56dd01468df05728392500e282d903e4b11f1e0e154b55cf534122ff1->leave($__internal_2d0788a56dd01468df05728392500e282d903e4b11f1e0e154b55cf534122ff1_prof);

        
        $__internal_27df4cbf3296522b55b90a20db669bf4aaae553b1198d391aa83158994070c4b->leave($__internal_27df4cbf3296522b55b90a20db669bf4aaae553b1198d391aa83158994070c4b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74f5293a51e829eb5bcb85ef929d613c3669965cadd22f867c646506c8d5aef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f5293a51e829eb5bcb85ef929d613c3669965cadd22f867c646506c8d5aef7->enter($__internal_74f5293a51e829eb5bcb85ef929d613c3669965cadd22f867c646506c8d5aef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71a622cae8ceb22d0c919f4c7d2e997ee23adf555bdb671874da935f2f94e877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a622cae8ceb22d0c919f4c7d2e997ee23adf555bdb671874da935f2f94e877->enter($__internal_71a622cae8ceb22d0c919f4c7d2e997ee23adf555bdb671874da935f2f94e877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon compte";
        
        $__internal_71a622cae8ceb22d0c919f4c7d2e997ee23adf555bdb671874da935f2f94e877->leave($__internal_71a622cae8ceb22d0c919f4c7d2e997ee23adf555bdb671874da935f2f94e877_prof);

        
        $__internal_74f5293a51e829eb5bcb85ef929d613c3669965cadd22f867c646506c8d5aef7->leave($__internal_74f5293a51e829eb5bcb85ef929d613c3669965cadd22f867c646506c8d5aef7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3168112cc822ff4c04c28c01db3e32ee4f8650088110ff50359d13c19ef17d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3168112cc822ff4c04c28c01db3e32ee4f8650088110ff50359d13c19ef17d4->enter($__internal_e3168112cc822ff4c04c28c01db3e32ee4f8650088110ff50359d13c19ef17d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_61cc46f280339076c21b0af7262a9f3c9b23870c583d0cea699f0732c9309561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61cc46f280339076c21b0af7262a9f3c9b23870c583d0cea699f0732c9309561->enter($__internal_61cc46f280339076c21b0af7262a9f3c9b23870c583d0cea699f0732c9309561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->displayBlock('commandes', $context, $blocks);
        
        $__internal_61cc46f280339076c21b0af7262a9f3c9b23870c583d0cea699f0732c9309561->leave($__internal_61cc46f280339076c21b0af7262a9f3c9b23870c583d0cea699f0732c9309561_prof);

        
        $__internal_e3168112cc822ff4c04c28c01db3e32ee4f8650088110ff50359d13c19ef17d4->leave($__internal_e3168112cc822ff4c04c28c01db3e32ee4f8650088110ff50359d13c19ef17d4_prof);

    }

    public function block_commandes($context, array $blocks = array())
    {
        $__internal_059e4abb6b8da5845ab1a307310c50aa411dff4d24ab21b2474057ba450665a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059e4abb6b8da5845ab1a307310c50aa411dff4d24ab21b2474057ba450665a1->enter($__internal_059e4abb6b8da5845ab1a307310c50aa411dff4d24ab21b2474057ba450665a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "commandes"));

        $__internal_6d593f9e60cf8a1c3a6a57ef86a35592e4fc370ef8b7b6a46b0d535533719cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d593f9e60cf8a1c3a6a57ef86a35592e4fc370ef8b7b6a46b0d535533719cd0->enter($__internal_6d593f9e60cf8a1c3a6a57ef86a35592e4fc370ef8b7b6a46b0d535533719cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "commandes"));

        // line 7
        echo "        <div class=\"container\">

            <h1>Mon compte</h1>
            <h2>Mes informations</h2>
            <table class=\"table\">

                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Complément d'adresse</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                    <th>Sexe</th>
                    ";
        // line 24
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "admin", array())) {
            // line 25
            echo "                        <th>Statut</th>
                    ";
        }
        // line 27
        echo "                    <th width=\"200px\">Actions</th>
                </tr>
                <tr>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tel", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "complement_adresse", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "code_postal", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexe", array()), "html", null, true);
        echo "</td>
                    <td><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_edit");
        echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Modifier mes infos</a></td>
                    ";
        // line 41
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "admin", array())) {
            // line 42
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "statut", array()), "html", null, true);
            echo "</td>
                    ";
        }
        // line 44
        echo "                    <td>
                        ";
        // line 47
        echo "                    </td>
                </tr>
                
            </table>
            
            <br>        
            <h2>Mes commandes</h2>
            <table class=\"table\">
                <caption>Commandes</caption>
                <tr>
                    <th>Id</th>
                    <th>Prix livraison</th>
                    <th>Total</th>
                    <th>Date commande</th>
                    <th>Etat</th>
                    <th width=\"200px\">Action</th>
                </tr>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 65
            echo "                    <tr class=\"info\"><th colspan=\"6\">Commande n°";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_commande", array()), "html", null, true);
            echo "</th></tr>
                    <tr>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_commande", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prix_livraison", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "total", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date_commande", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etat", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 73
            if (($this->getAttribute($context["commande"], "etat", array()) != "livré")) {
                // line 74
                echo "                                <a href =\"";
                echo "https://www.laposte.fr/particulier/outils/suivre-vos-envois\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span> Suivre ma commande</a>
                            ";
            }
            // line 76
            echo "                            ";
            if (((($this->getAttribute($context["commande"], "etat", array()) == "en préparation") || ($this->getAttribute($context["commande"], "etat", array()) == "expédié")) || ($this->getAttribute($context["commande"], "etat", array()) == "en livraison"))) {
                // line 77
                echo "                                <a href =\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_commande", array("id" => $this->getAttribute($context["commande"], "id_commande", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\" ></span> Annuler ma commande</a>
                            ";
            } elseif (($this->getAttribute(            // line 78
$context["commande"], "etat", array()) == "livré")) {
                // line 79
                echo "                                <a href =\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("return_commande", array("id" => $this->getAttribute($context["commande"], "id_commande", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-remove-sign\"></span> Retourner ma commande</a>
                            ";
            }
            // line 81
            echo "                        </td>
                    </tr>
                    <tr><th colspan=\"6\">Détail commande n°";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_commande", array()), "html", null, true);
            echo "</th></tr>
                    <tr>
                        <th colspan=\"4\">Titre</th>
                        <th colspan=\"1\">Quantité</th>
                        <th colspan=\"1\">Prix</th>
                    </tr>
                    
                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["commande"], "details", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["detailCommande"]) {
                // line 91
                echo "                        
                        ";
                // line 93
                echo "                        <tr>
                            ";
                // line 94
                if ((null === $this->getAttribute($this->getAttribute($context["detailCommande"], "custom", array()), "id_custom", array()))) {
                    // line 95
                    echo "                                <td colspan=\"4\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detailCommande"], "produit", array()), "titre", array()), "html", null, true);
                    echo "</td>
                            ";
                } else {
                    // line 96
                    echo "  
                                <td colspan=\"4\">";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detailCommande"], "custom", array()), "titre_custom", array()), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 99
                echo "                            <td colspan=\"1\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["detailCommande"], "quantite", array()), "html", null, true);
                echo "</td>
                            <td colspan=\"1\">";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["detailCommande"], "prix", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detailCommande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            </table>
                </div>
            </div>
        </div>
    ";
        
        $__internal_6d593f9e60cf8a1c3a6a57ef86a35592e4fc370ef8b7b6a46b0d535533719cd0->leave($__internal_6d593f9e60cf8a1c3a6a57ef86a35592e4fc370ef8b7b6a46b0d535533719cd0_prof);

        
        $__internal_059e4abb6b8da5845ab1a307310c50aa411dff4d24ab21b2474057ba450665a1->leave($__internal_059e4abb6b8da5845ab1a307310c50aa411dff4d24ab21b2474057ba450665a1_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 104,  300 => 103,  291 => 100,  286 => 99,  281 => 97,  278 => 96,  272 => 95,  270 => 94,  267 => 93,  264 => 91,  260 => 90,  250 => 83,  246 => 81,  240 => 79,  238 => 78,  233 => 77,  230 => 76,  225 => 74,  223 => 73,  218 => 71,  214 => 70,  210 => 69,  206 => 68,  202 => 67,  196 => 65,  192 => 64,  173 => 47,  170 => 44,  164 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  113 => 27,  109 => 25,  107 => 24,  88 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title 'Mon compte' %}

{% block content %}
    {% block commandes %}
        <div class=\"container\">

            <h1>Mon compte</h1>
            <h2>Mes informations</h2>
            <table class=\"table\">

                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Complément d'adresse</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                    <th>Sexe</th>
                    {% if user_manager.admin %}
                        <th>Statut</th>
                    {% endif %}
                    <th width=\"200px\">Actions</th>
                </tr>
                <tr>
                    <td>{{ user.nom }}</td>
                    <td>{{ user.prenom }}</td>
                    <td>{{ user.date_naissance|date('d/m/Y') }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.tel }}</td>
                    <td>{{ user.adresse }}</td>
                    <td>{{ user.complement_adresse }}</td>
                    <td>{{ user.code_postal }}</td>
                    <td>{{ user.ville }}</td>
                    <td>{{ user.sexe }}</td>
                    <td><a href=\"{{ path('profile_edit') }}\"><span class=\"glyphicon glyphicon-pencil\"></span> Modifier mes infos</a></td>
                    {% if user_manager.admin %}
                        <td>{{ user.statut }}</td>
                    {% endif %}
                    <td>
                        {#<a href =\"{{ path('edit_user', {id: user.id_user}) }}\" class=\"btn btn-primary\">Modifier mes informations de profil</a>
                        <a href =\"{{ path('delete_user', {id: user.id_user}) }}\" class=\"btn btn-danger\">Supprimer mon profil</a>#}
                    </td>
                </tr>
                
            </table>
            
            <br>        
            <h2>Mes commandes</h2>
            <table class=\"table\">
                <caption>Commandes</caption>
                <tr>
                    <th>Id</th>
                    <th>Prix livraison</th>
                    <th>Total</th>
                    <th>Date commande</th>
                    <th>Etat</th>
                    <th width=\"200px\">Action</th>
                </tr>
                {% for commande in commandes %}
                    <tr class=\"info\"><th colspan=\"6\">Commande n°{{ commande.id_commande }}</th></tr>
                    <tr>
                        <td>{{ commande.id_commande }}</td>
                        <td>{{ commande.prix_livraison }}</td>
                        <td>{{ commande.total }}</td>
                        <td>{{ commande.date_commande|date('d/m/Y') }}</td>
                        <td>{{ commande.etat }}</td>
                        <td>
                            {% if commande.etat != 'livré' %}
                                <a href =\"{#{{ path('suivi_commande', {id: commande.id_commande}) }}#}https://www.laposte.fr/particulier/outils/suivre-vos-envois\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span> Suivre ma commande</a>
                            {% endif %}
                            {% if commande.etat == 'en préparation' or commande.etat == 'expédié' or commande.etat == 'en livraison' %}
                                <a href =\"{{ path('delete_commande', {id: commande.id_commande}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\" ></span> Annuler ma commande</a>
                            {% elseif commande.etat == 'livré' %}
                                <a href =\"{{ path('return_commande', {id: commande.id_commande}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-remove-sign\"></span> Retourner ma commande</a>
                            {% endif %}
                        </td>
                    </tr>
                    <tr><th colspan=\"6\">Détail commande n°{{ commande.id_commande }}</th></tr>
                    <tr>
                        <th colspan=\"4\">Titre</th>
                        <th colspan=\"1\">Quantité</th>
                        <th colspan=\"1\">Prix</th>
                    </tr>
                    
                    {% for detailCommande in commande.details %}
                        
                        {#<pre>{{ dump(detailCommande.custom) }}</pre>#}
                        <tr>
                            {% if detailCommande.custom.id_custom is null %}
                                <td colspan=\"4\">{{ detailCommande.produit.titre }}</td>
                            {% else %}  
                                <td colspan=\"4\">{{ detailCommande.custom.titre_custom }}</td>
                            {% endif %}
                            <td colspan=\"1\">{{ detailCommande.quantite }}</td>
                            <td colspan=\"1\">{{ detailCommande.prix }}</td>
                        </tr>
                    {% endfor %}
                {% endfor %}
            </table>
                </div>
            </div>
        </div>
    {% endblock %}
{% endblock %}
", "user/profile.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\user\\profile.html.twig");
    }
}
