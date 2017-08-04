<?php

/* admin/produit/list.html.twig */
class __TwigTemplate_ef0e092be68fefcc555f0540672bc7acfb2b4e21262b24c9d4f6a1448173242f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/produit/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_605f33040e09e865425108dcef5f5663bf0c9abe98b2508022b2692ded01a939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605f33040e09e865425108dcef5f5663bf0c9abe98b2508022b2692ded01a939->enter($__internal_605f33040e09e865425108dcef5f5663bf0c9abe98b2508022b2692ded01a939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/produit/list.html.twig"));

        $__internal_11c4a3c01dc014384f31f25df2f8732bcbc9b6ee1caac06dcce9211ab43307f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c4a3c01dc014384f31f25df2f8732bcbc9b6ee1caac06dcce9211ab43307f7->enter($__internal_11c4a3c01dc014384f31f25df2f8732bcbc9b6ee1caac06dcce9211ab43307f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/produit/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605f33040e09e865425108dcef5f5663bf0c9abe98b2508022b2692ded01a939->leave($__internal_605f33040e09e865425108dcef5f5663bf0c9abe98b2508022b2692ded01a939_prof);

        
        $__internal_11c4a3c01dc014384f31f25df2f8732bcbc9b6ee1caac06dcce9211ab43307f7->leave($__internal_11c4a3c01dc014384f31f25df2f8732bcbc9b6ee1caac06dcce9211ab43307f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e8e26e572e1d8e180b61623f188609333f2480cb90e78c8a7911333ff6ef138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8e26e572e1d8e180b61623f188609333f2480cb90e78c8a7911333ff6ef138->enter($__internal_8e8e26e572e1d8e180b61623f188609333f2480cb90e78c8a7911333ff6ef138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84a334ea2299f6aefcf283cabc9bd886a9afdb6336bbb8a659e8f543448e10ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a334ea2299f6aefcf283cabc9bd886a9afdb6336bbb8a659e8f543448e10ba->enter($__internal_84a334ea2299f6aefcf283cabc9bd886a9afdb6336bbb8a659e8f543448e10ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin produits";
        
        $__internal_84a334ea2299f6aefcf283cabc9bd886a9afdb6336bbb8a659e8f543448e10ba->leave($__internal_84a334ea2299f6aefcf283cabc9bd886a9afdb6336bbb8a659e8f543448e10ba_prof);

        
        $__internal_8e8e26e572e1d8e180b61623f188609333f2480cb90e78c8a7911333ff6ef138->leave($__internal_8e8e26e572e1d8e180b61623f188609333f2480cb90e78c8a7911333ff6ef138_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_699650e7305eea7c10622b6840ecf0dbc3dccf6d0a8bdb6b3cae58701d756858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699650e7305eea7c10622b6840ecf0dbc3dccf6d0a8bdb6b3cae58701d756858->enter($__internal_699650e7305eea7c10622b6840ecf0dbc3dccf6d0a8bdb6b3cae58701d756858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8a034f209bc9eae58da4a34d55c3d980fa6e323620401009f875556273e99961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a034f209bc9eae58da4a34d55c3d980fa6e323620401009f875556273e99961->enter($__internal_8a034f209bc9eae58da4a34d55c3d980fa6e323620401009f875556273e99961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"row\">
\t\t<div class=\"col-sm-12\">

\t\t\t<h1>Gestion Produits</h1>

\t\t    <p><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_produit_edit");
        echo "\">Ajouter un produit</a></p>

\t\t    <table class=\"table\">
\t\t        <tr>
\t\t            <th>Id</th>
\t\t            <th>Type</th>
\t\t            <th>Tissu</th>
\t\t            <th>Titre</th>
\t\t            <th>Description</th>
\t\t            <th>Photo</th>
\t\t            <th>Sexe</th>
\t\t            <th>Prix</th>
\t\t            <th width=\"200px\"></th>
\t\t        </tr>
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 27
            echo "\t\t            <tr>
\t\t                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "</td>
\t\t                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "type", array()), "html", null, true);
            echo "</td>
\t\t                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "tissu", array()), "html", null, true);
            echo "</td>
\t\t                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</td>
\t\t                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "</td>

\t\t                <td><img class=\"image_list_produit\" src=\"http://localhost/custom_shirt-2/web/img/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "photo", array()), "html", null, true);
            echo "\"></td>

\t\t                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "sexe", array()), "html", null, true);
            echo "</td>
\t\t                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</td>
\t\t                <td>
\t\t                    <a
\t\t                        href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_produit_edit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
\t\t                        class=\"btn btn-primary\">
\t\t                        Modifier
\t\t                    </a>
\t\t                    <a
\t\t                        href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_produit_delete", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
\t\t                        class=\"btn btn-danger\">
\t\t                        Supprimer
\t\t                    </a>
\t\t                    <a
\t\t                        href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_stock", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"
\t\t                        class=\"btn btn-default\">
\t\t                        Voir stock
\t\t                    </a>
\t\t                </td>
\t\t            </tr>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t    </table>
\t\t";
        
        $__internal_8a034f209bc9eae58da4a34d55c3d980fa6e323620401009f875556273e99961->leave($__internal_8a034f209bc9eae58da4a34d55c3d980fa6e323620401009f875556273e99961_prof);

        
        $__internal_699650e7305eea7c10622b6840ecf0dbc3dccf6d0a8bdb6b3cae58701d756858->leave($__internal_699650e7305eea7c10622b6840ecf0dbc3dccf6d0a8bdb6b3cae58701d756858_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1d5b6cb9288e9b7408d4567c22b8ec433dcad2a06d3b7e99816cc14ee9ba4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d5b6cb9288e9b7408d4567c22b8ec433dcad2a06d3b7e99816cc14ee9ba4fb->enter($__internal_b1d5b6cb9288e9b7408d4567c22b8ec433dcad2a06d3b7e99816cc14ee9ba4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_80faed2db62435d19194de8448563c9953308bb17837f4e7481cc1a1f4a3ee1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80faed2db62435d19194de8448563c9953308bb17837f4e7481cc1a1f4a3ee1b->enter($__internal_80faed2db62435d19194de8448563c9953308bb17837f4e7481cc1a1f4a3ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var ajaxApiUrlAdmin = \"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_api_produit_admin");
        echo "\";
    </script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_80faed2db62435d19194de8448563c9953308bb17837f4e7481cc1a1f4a3ee1b->leave($__internal_80faed2db62435d19194de8448563c9953308bb17837f4e7481cc1a1f4a3ee1b_prof);

        
        $__internal_b1d5b6cb9288e9b7408d4567c22b8ec433dcad2a06d3b7e99816cc14ee9ba4fb->leave($__internal_b1d5b6cb9288e9b7408d4567c22b8ec433dcad2a06d3b7e99816cc14ee9ba4fb_prof);

    }

    public function getTemplateName()
    {
        return "admin/produit/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 65,  192 => 63,  186 => 61,  177 => 60,  166 => 57,  153 => 50,  145 => 45,  137 => 40,  131 => 37,  127 => 36,  122 => 34,  117 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  98 => 27,  94 => 26,  77 => 12,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title 'Admin produits' %}

{% block content %}

<div class=\"row\">
\t\t<div class=\"col-sm-12\">

\t\t\t<h1>Gestion Produits</h1>

\t\t    <p><a href=\"{{ path('admin_produit_edit') }}\">Ajouter un produit</a></p>

\t\t    <table class=\"table\">
\t\t        <tr>
\t\t            <th>Id</th>
\t\t            <th>Type</th>
\t\t            <th>Tissu</th>
\t\t            <th>Titre</th>
\t\t            <th>Description</th>
\t\t            <th>Photo</th>
\t\t            <th>Sexe</th>
\t\t            <th>Prix</th>
\t\t            <th width=\"200px\"></th>
\t\t        </tr>
\t\t\t\t{% for produit in produits %}
\t\t            <tr>
\t\t                <td>{{ produit.id }}</td>
\t\t                <td>{{ produit.type }}</td>
\t\t                <td>{{ produit.tissu }}</td>
\t\t                <td>{{ produit.titre }}</td>
\t\t                <td>{{ produit.description }}</td>

\t\t                <td><img class=\"image_list_produit\" src=\"http://localhost/custom_shirt-2/web/img/{{ produit.photo }}\"></td>

\t\t                <td>{{ produit.sexe }}</td>
\t\t                <td>{{ produit.prix }}</td>
\t\t                <td>
\t\t                    <a
\t\t                        href=\"{{ path('admin_produit_edit', {id: produit.id}) }}\"
\t\t                        class=\"btn btn-primary\">
\t\t                        Modifier
\t\t                    </a>
\t\t                    <a
\t\t                        href=\"{{ path('admin_produit_delete', {id: produit.id}) }}\"
\t\t                        class=\"btn btn-danger\">
\t\t                        Supprimer
\t\t                    </a>
\t\t                    <a
\t\t                        href=\"{{ path('admin_stock', {id: produit.id}) }}\"
\t\t                        class=\"btn btn-default\">
\t\t                        Voir stock
\t\t                    </a>
\t\t                </td>
\t\t            </tr>
\t\t        {% endfor %}
\t\t    </table>
\t\t{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        var ajaxApiUrlAdmin = \"{{ path('ajax_api_produit_admin') }}\";
    </script>
    <script src=\"{{ asset('script/script.js') }}\"></script>
{% endblock %}", "admin/produit/list.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\admin\\produit\\list.html.twig");
    }
}
