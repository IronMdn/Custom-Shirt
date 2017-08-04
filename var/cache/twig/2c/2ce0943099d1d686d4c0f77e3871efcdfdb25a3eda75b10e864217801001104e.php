<?php

/* admin/commande/detail.html.twig */
class __TwigTemplate_37757c6200ddb9812483aa3e5d182be2a47efeac0788785576a1fa9a287fd1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/commande/detail.html.twig", 1);
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
        $__internal_1ecc9fb92dee8a21908c259e5f77bee1259f294be2bb60353f26238226937889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecc9fb92dee8a21908c259e5f77bee1259f294be2bb60353f26238226937889->enter($__internal_1ecc9fb92dee8a21908c259e5f77bee1259f294be2bb60353f26238226937889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/commande/detail.html.twig"));

        $__internal_11844822a87586cfae0beb451ed7b80f3874b4548c95400f09b29be118300f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11844822a87586cfae0beb451ed7b80f3874b4548c95400f09b29be118300f24->enter($__internal_11844822a87586cfae0beb451ed7b80f3874b4548c95400f09b29be118300f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/commande/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ecc9fb92dee8a21908c259e5f77bee1259f294be2bb60353f26238226937889->leave($__internal_1ecc9fb92dee8a21908c259e5f77bee1259f294be2bb60353f26238226937889_prof);

        
        $__internal_11844822a87586cfae0beb451ed7b80f3874b4548c95400f09b29be118300f24->leave($__internal_11844822a87586cfae0beb451ed7b80f3874b4548c95400f09b29be118300f24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0f5616f22a8269f4bc848722474d818851ab91275c364aa360b6ffa3ea5baeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f5616f22a8269f4bc848722474d818851ab91275c364aa360b6ffa3ea5baeb->enter($__internal_a0f5616f22a8269f4bc848722474d818851ab91275c364aa360b6ffa3ea5baeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a5482f837373a23c1c2d8be4a88b0af8210bc63ee8e0f22d2a807bc12578f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5482f837373a23c1c2d8be4a88b0af8210bc63ee8e0f22d2a807bc12578f2a->enter($__internal_2a5482f837373a23c1c2d8be4a88b0af8210bc63ee8e0f22d2a807bc12578f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détails commande";
        
        $__internal_2a5482f837373a23c1c2d8be4a88b0af8210bc63ee8e0f22d2a807bc12578f2a->leave($__internal_2a5482f837373a23c1c2d8be4a88b0af8210bc63ee8e0f22d2a807bc12578f2a_prof);

        
        $__internal_a0f5616f22a8269f4bc848722474d818851ab91275c364aa360b6ffa3ea5baeb->leave($__internal_a0f5616f22a8269f4bc848722474d818851ab91275c364aa360b6ffa3ea5baeb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ad168672171696f22a305ab97048c848bdd83966c4e3640dbf566c4ef04aecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad168672171696f22a305ab97048c848bdd83966c4e3640dbf566c4ef04aecd->enter($__internal_2ad168672171696f22a305ab97048c848bdd83966c4e3640dbf566c4ef04aecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b4e7c6728aea45561828954733ed9a73e090ec30366f7dd9762a53b074e7e3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e7c6728aea45561828954733ed9a73e090ec30366f7dd9762a53b074e7e3da->enter($__internal_b4e7c6728aea45561828954733ed9a73e090ec30366f7dd9762a53b074e7e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Détails</h1>
    <br>
    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commandes");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-menu-left\"></span> Retourner sur la page 'Gestion commandes'</a>
    <br>
    <br>
    <table class=\"table\">
        <caption>Commande n°";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id_commande", array()), "html", null, true);
        echo "</caption>
        <tr>
            <th>Id</th>
            <th>Prix livraison</th>
            <th>Total</th>
            <th>Date commande</th>
            <th>Etat</th>
        </tr>
        <tr>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id_commande", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "prix_livraison", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "total", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date_commande", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "etat", array()), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <br>    
    <hr>
    <br>
    <table class=\"table\">
        <caption>Détail de la commande n°";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id_commande", array()), "html", null, true);
        echo "</caption>
        <tr>
            <th colspan=\"4\">Titre</th>
            <th colspan=\"1\">Quantité</th>
            <th colspan=\"1\">Prix</th>
        </tr>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detail_commandes"]) ? $context["detail_commandes"] : $this->getContext($context, "detail_commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["detail_commande"]) {
            echo "  
            <tr>
                <td colspan=\"4\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail_commande"], "titre", array()), "html", null, true);
            echo "</td>
                <td colspan=\"1\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail_commande"], "quantite", array()), "html", null, true);
            echo "</td>
                <td colspan=\"1\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail_commande"], "prix", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail_commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </table>
";
        
        $__internal_b4e7c6728aea45561828954733ed9a73e090ec30366f7dd9762a53b074e7e3da->leave($__internal_b4e7c6728aea45561828954733ed9a73e090ec30366f7dd9762a53b074e7e3da_prof);

        
        $__internal_2ad168672171696f22a305ab97048c848bdd83966c4e3640dbf566c4ef04aecd->leave($__internal_2ad168672171696f22a305ab97048c848bdd83966c4e3640dbf566c4ef04aecd_prof);

    }

    public function getTemplateName()
    {
        return "admin/commande/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  141 => 42,  137 => 41,  133 => 40,  126 => 38,  117 => 32,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  79 => 12,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Détails commande' %}

{% block content %}
    <h1>Détails</h1>
    <br>
    <a href=\"{{ path('admin_commandes') }}\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-menu-left\"></span> Retourner sur la page 'Gestion commandes'</a>
    <br>
    <br>
    <table class=\"table\">
        <caption>Commande n°{{ commande.id_commande }}</caption>
        <tr>
            <th>Id</th>
            <th>Prix livraison</th>
            <th>Total</th>
            <th>Date commande</th>
            <th>Etat</th>
        </tr>
        <tr>
            <td>{{ commande.id_commande }}</td>
            <td>{{ commande.prix_livraison }}</td>
            <td>{{ commande.total }}</td>
            <td>{{ commande.date_commande|date('d/m/Y') }}</td>
            <td>{{ commande.etat }}</td>
        </tr>
    </table>
    <br>    
    <hr>
    <br>
    <table class=\"table\">
        <caption>Détail de la commande n°{{ commande.id_commande }}</caption>
        <tr>
            <th colspan=\"4\">Titre</th>
            <th colspan=\"1\">Quantité</th>
            <th colspan=\"1\">Prix</th>
        </tr>
        {% for detail_commande in detail_commandes %}  
            <tr>
                <td colspan=\"4\">{{ detail_commande.titre }}</td>
                <td colspan=\"1\">{{ detail_commande.quantite }}</td>
                <td colspan=\"1\">{{ detail_commande.prix }}</td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}", "admin/commande/detail.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\admin\\commande\\detail.html.twig");
    }
}
