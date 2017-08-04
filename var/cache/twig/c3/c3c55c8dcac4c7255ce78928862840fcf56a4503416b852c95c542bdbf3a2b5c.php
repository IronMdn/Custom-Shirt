<?php

/* admin/commande/list.html.twig */
class __TwigTemplate_4ed7759161727f7eae9b2655c536536cb2d8a11c5b72765b63038a510988ac6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/commande/list.html.twig", 1);
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
        $__internal_933f12c2718643fe1e99f3d0c440aa76e4c596cf41957a397c85335e283fcf7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933f12c2718643fe1e99f3d0c440aa76e4c596cf41957a397c85335e283fcf7d->enter($__internal_933f12c2718643fe1e99f3d0c440aa76e4c596cf41957a397c85335e283fcf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/commande/list.html.twig"));

        $__internal_950f9c36f6c8ba9b67e2e0cbf81899eb64c968869ba683dc16b42dd045f742b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950f9c36f6c8ba9b67e2e0cbf81899eb64c968869ba683dc16b42dd045f742b0->enter($__internal_950f9c36f6c8ba9b67e2e0cbf81899eb64c968869ba683dc16b42dd045f742b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/commande/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933f12c2718643fe1e99f3d0c440aa76e4c596cf41957a397c85335e283fcf7d->leave($__internal_933f12c2718643fe1e99f3d0c440aa76e4c596cf41957a397c85335e283fcf7d_prof);

        
        $__internal_950f9c36f6c8ba9b67e2e0cbf81899eb64c968869ba683dc16b42dd045f742b0->leave($__internal_950f9c36f6c8ba9b67e2e0cbf81899eb64c968869ba683dc16b42dd045f742b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8538eb051c470776de28fb7c4baf100a81319349c0386005d655a1ec6a9a975a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8538eb051c470776de28fb7c4baf100a81319349c0386005d655a1ec6a9a975a->enter($__internal_8538eb051c470776de28fb7c4baf100a81319349c0386005d655a1ec6a9a975a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d298540865f6ffd251ea203b0872d65c690f569e00164739d8dbeac86aaa7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d298540865f6ffd251ea203b0872d65c690f569e00164739d8dbeac86aaa7ac->enter($__internal_0d298540865f6ffd251ea203b0872d65c690f569e00164739d8dbeac86aaa7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion commandes";
        
        $__internal_0d298540865f6ffd251ea203b0872d65c690f569e00164739d8dbeac86aaa7ac->leave($__internal_0d298540865f6ffd251ea203b0872d65c690f569e00164739d8dbeac86aaa7ac_prof);

        
        $__internal_8538eb051c470776de28fb7c4baf100a81319349c0386005d655a1ec6a9a975a->leave($__internal_8538eb051c470776de28fb7c4baf100a81319349c0386005d655a1ec6a9a975a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_60c5c4702d61929ddf4b4aa4794ea087b11260a0a58ae1b0c4b0a78ca6b999fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c5c4702d61929ddf4b4aa4794ea087b11260a0a58ae1b0c4b0a78ca6b999fd->enter($__internal_60c5c4702d61929ddf4b4aa4794ea087b11260a0a58ae1b0c4b0a78ca6b999fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2aa6699682b0192675908103158532a151f920c313c45497f7d5ada7b42edda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa6699682b0192675908103158532a151f920c313c45497f7d5ada7b42edda9->enter($__internal_2aa6699682b0192675908103158532a151f920c313c45497f7d5ada7b42edda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Gestion des commandes</h1>
    <table class=\"table\">
        <tr>
            <th>Id</th>
            <th>Prix livraison</th>
            <th>Total</th>
            <th>Date commande</th>
            <th>Etat</th>
            <th width=\"200px\">Actions</th>
        </tr>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_commande", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prix_livraison", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "total", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date_commande", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    <form method=\"post\">
                        <select name=\"etat\" class=\"form-control\">
                            <option value=\"en préparation\" ";
            // line 25
            if (($this->getAttribute($context["commande"], "etat", array()) == "en préparation")) {
                echo "selected";
            }
            echo ">En préparation</option>
                            <option value=\"expédié\" ";
            // line 26
            if (($this->getAttribute($context["commande"], "etat", array()) == "expédié")) {
                echo "selected";
            }
            echo ">Expédié</option>
                            <option value=\"en livraison\" ";
            // line 27
            if (($this->getAttribute($context["commande"], "etat", array()) == "en livraison")) {
                echo "selected";
            }
            echo ">En livraison</option>
                            <option value=\"livré\" ";
            // line 28
            if (($this->getAttribute($context["commande"], "etat", array()) == "livré")) {
                echo "selected";
            }
            echo ">Livré</option>
                            <option value=\"retour\" ";
            // line 29
            if (($this->getAttribute($context["commande"], "etat", array()) == "retour")) {
                echo "selected";
            }
            echo ">Retour</option>
                        </select>
                        <br>
                        <input type=\"hidden\" name=\"id_commande\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_commande", array()), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            Enregistrer
                        </button>
                    </form>
                </td>
                <td>
                    ";
            // line 40
            echo "                    <a href =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_detail_commande", array("id_commande" => $this->getAttribute($context["commande"], "id_commande", array()))), "html", null, true);
            echo " \" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span> Afficher les détails de la commande</a>
                    <br>
                    <br>
                    <a href =\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_commande", array("id" => $this->getAttribute($context["commande"], "id_commande", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\" ></span> Supprimer la commande</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </table>

    <table class=\"table\">

    </table>
";
        
        $__internal_2aa6699682b0192675908103158532a151f920c313c45497f7d5ada7b42edda9->leave($__internal_2aa6699682b0192675908103158532a151f920c313c45497f7d5ada7b42edda9_prof);

        
        $__internal_60c5c4702d61929ddf4b4aa4794ea087b11260a0a58ae1b0c4b0a78ca6b999fd->leave($__internal_60c5c4702d61929ddf4b4aa4794ea087b11260a0a58ae1b0c4b0a78ca6b999fd_prof);

    }

    public function getTemplateName()
    {
        return "admin/commande/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 47,  155 => 43,  148 => 40,  138 => 32,  130 => 29,  124 => 28,  118 => 27,  112 => 26,  106 => 25,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  84 => 17,  80 => 16,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Gestion commandes' %}
    
{% block content %}
    <h1>Gestion des commandes</h1>
    <table class=\"table\">
        <tr>
            <th>Id</th>
            <th>Prix livraison</th>
            <th>Total</th>
            <th>Date commande</th>
            <th>Etat</th>
            <th width=\"200px\">Actions</th>
        </tr>
        {% for commande in commandes %}
            <tr>
                <td>{{ commande.id_commande }}</td>
                <td>{{ commande.prix_livraison }}</td>
                <td>{{ commande.total }}</td>
                <td>{{ commande.date_commande|date('d/m/Y') }}</td>
                <td>
                    <form method=\"post\">
                        <select name=\"etat\" class=\"form-control\">
                            <option value=\"en préparation\" {% if commande.etat == 'en préparation' %}selected{% endif %}>En préparation</option>
                            <option value=\"expédié\" {% if commande.etat == 'expédié' %}selected{% endif %}>Expédié</option>
                            <option value=\"en livraison\" {% if commande.etat == 'en livraison' %}selected{% endif %}>En livraison</option>
                            <option value=\"livré\" {% if commande.etat == 'livré' %}selected{% endif %}>Livré</option>
                            <option value=\"retour\" {% if commande.etat == 'retour' %}selected{% endif %}>Retour</option>
                        </select>
                        <br>
                        <input type=\"hidden\" name=\"id_commande\" value=\"{{ commande.id_commande }}\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            Enregistrer
                        </button>
                    </form>
                </td>
                <td>
                    {#<a href =\"{{ path('admin_edit_commande', {id: commande.id_commande}) }}\" class=\"btn btn-primary\">Enregistrer</a>#}
                    <a href =\"{{ path('admin_detail_commande', {id_commande:commande.id_commande}) }} \" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span> Afficher les détails de la commande</a>
                    <br>
                    <br>
                    <a href =\"{{ path('admin_delete_commande', {id: commande.id_commande}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\" ></span> Supprimer la commande</a>
                </td>
            </tr>
        {% endfor %}
    </table>

    <table class=\"table\">

    </table>
{% endblock %}", "admin/commande/list.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\admin\\commande\\list.html.twig");
    }
}
