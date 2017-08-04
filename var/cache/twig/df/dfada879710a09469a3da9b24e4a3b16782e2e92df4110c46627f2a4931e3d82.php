<?php

/* admin/user/panel.html.twig */
class __TwigTemplate_a9934d1d7e461a7091ee2e22597ac41e361a92d2c0f5f579a8a2750a1ad1889b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/user/panel.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_105198b7bc1a6c1bb2d35458ca49a2cf6713a2885f504c2b0d82920c19f401a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105198b7bc1a6c1bb2d35458ca49a2cf6713a2885f504c2b0d82920c19f401a9->enter($__internal_105198b7bc1a6c1bb2d35458ca49a2cf6713a2885f504c2b0d82920c19f401a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/panel.html.twig"));

        $__internal_05cb6fd85c23718c8e6ceab19e8fd773bf3d42c5ff550b7948b3e2c4e796a430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cb6fd85c23718c8e6ceab19e8fd773bf3d42c5ff550b7948b3e2c4e796a430->enter($__internal_05cb6fd85c23718c8e6ceab19e8fd773bf3d42c5ff550b7948b3e2c4e796a430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/panel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_105198b7bc1a6c1bb2d35458ca49a2cf6713a2885f504c2b0d82920c19f401a9->leave($__internal_105198b7bc1a6c1bb2d35458ca49a2cf6713a2885f504c2b0d82920c19f401a9_prof);

        
        $__internal_05cb6fd85c23718c8e6ceab19e8fd773bf3d42c5ff550b7948b3e2c4e796a430->leave($__internal_05cb6fd85c23718c8e6ceab19e8fd773bf3d42c5ff550b7948b3e2c4e796a430_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55a73bc45994b4158c8e5f6110a54c5e30a4f9afb42c29c7b234f4ffeef9ce35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a73bc45994b4158c8e5f6110a54c5e30a4f9afb42c29c7b234f4ffeef9ce35->enter($__internal_55a73bc45994b4158c8e5f6110a54c5e30a4f9afb42c29c7b234f4ffeef9ce35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_309cf139bac276e9b6b25056f39f14ad0f428cbeb2c6daf0897703f75c4239af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309cf139bac276e9b6b25056f39f14ad0f428cbeb2c6daf0897703f75c4239af->enter($__internal_309cf139bac276e9b6b25056f39f14ad0f428cbeb2c6daf0897703f75c4239af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - gestion des clients";
        
        $__internal_309cf139bac276e9b6b25056f39f14ad0f428cbeb2c6daf0897703f75c4239af->leave($__internal_309cf139bac276e9b6b25056f39f14ad0f428cbeb2c6daf0897703f75c4239af_prof);

        
        $__internal_55a73bc45994b4158c8e5f6110a54c5e30a4f9afb42c29c7b234f4ffeef9ce35->leave($__internal_55a73bc45994b4158c8e5f6110a54c5e30a4f9afb42c29c7b234f4ffeef9ce35_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29497c1ba1b20d1b4b8e34bc0ecb5e2fc881e3171a00846c4428aec8b6cf899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29497c1ba1b20d1b4b8e34bc0ecb5e2fc881e3171a00846c4428aec8b6cf899b->enter($__internal_29497c1ba1b20d1b4b8e34bc0ecb5e2fc881e3171a00846c4428aec8b6cf899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0b9824dad10f53de79a727e1c85b765d531f75dec7c8e93dad71fd62b432c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b9824dad10f53de79a727e1c85b765d531f75dec7c8e93dad71fd62b432c3c->enter($__internal_e0b9824dad10f53de79a727e1c85b765d531f75dec7c8e93dad71fd62b432c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
       <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        
        $__internal_e0b9824dad10f53de79a727e1c85b765d531f75dec7c8e93dad71fd62b432c3c->leave($__internal_e0b9824dad10f53de79a727e1c85b765d531f75dec7c8e93dad71fd62b432c3c_prof);

        
        $__internal_29497c1ba1b20d1b4b8e34bc0ecb5e2fc881e3171a00846c4428aec8b6cf899b->leave($__internal_29497c1ba1b20d1b4b8e34bc0ecb5e2fc881e3171a00846c4428aec8b6cf899b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_163c8069d7fcc97a3e82e265ee666ba6cdc20f5e8a7cdc366efc801453bb1ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163c8069d7fcc97a3e82e265ee666ba6cdc20f5e8a7cdc366efc801453bb1ae0->enter($__internal_163c8069d7fcc97a3e82e265ee666ba6cdc20f5e8a7cdc366efc801453bb1ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6364fafcbc799501b38f0564f81eee6349b3a01962f102df285de2e7a204afe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6364fafcbc799501b38f0564f81eee6349b3a01962f102df285de2e7a204afe7->enter($__internal_6364fafcbc799501b38f0564f81eee6349b3a01962f102df285de2e7a204afe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "


    <div class=\"container\">

    <h1>Panel de contrôle administrateur</h1>
    <h2>Profils clients</h2>


    <table class=\"table\">
        <tr>
            <th>MODIFICATION</th>
            <th>SUPPRESSION</th>
            <th>id_user</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Email</th>
            <th width=\"800px\">--Adresse--</th>
            <th>Complément d'adresse</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th>Tel</th>
            <th>Sexe</th>
";
        // line 39
        echo "
        </tr>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "            <tr>
                <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cc", array("id_user" => $this->getAttribute($context["user"], "id_user", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span>Editer</a></th></td>
                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_panel2", array("id_user" => $this->getAttribute($context["user"], "id_user", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span>Ôter</a></th></td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id_user", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "date_naissance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "complement_adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "code_postal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sexe", array()), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
    </table>






";
        
        $__internal_6364fafcbc799501b38f0564f81eee6349b3a01962f102df285de2e7a204afe7->leave($__internal_6364fafcbc799501b38f0564f81eee6349b3a01962f102df285de2e7a204afe7_prof);

        
        $__internal_163c8069d7fcc97a3e82e265ee666ba6cdc20f5e8a7cdc366efc801453bb1ae0->leave($__internal_163c8069d7fcc97a3e82e265ee666ba6cdc20f5e8a7cdc366efc801453bb1ae0_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  180 => 55,  176 => 54,  172 => 53,  168 => 52,  164 => 51,  160 => 50,  156 => 49,  152 => 48,  148 => 47,  144 => 46,  140 => 45,  136 => 44,  132 => 43,  129 => 42,  125 => 41,  121 => 39,  95 => 12,  86 => 11,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title 'Admin - gestion des clients' %}
    
{% block stylesheets %}
       {{ parent() }}
       <link href=\"{{ asset('css/profile.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
  {% endblock %}
    
    
{% block content %}



    <div class=\"container\">

    <h1>Panel de contrôle administrateur</h1>
    <h2>Profils clients</h2>


    <table class=\"table\">
        <tr>
            <th>MODIFICATION</th>
            <th>SUPPRESSION</th>
            <th>id_user</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Email</th>
            <th width=\"800px\">--Adresse--</th>
            <th>Complément d'adresse</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th>Tel</th>
            <th>Sexe</th>
{#            {% if user_manager.admin %}
                <th>Statut</th>
            {% endif %}#}

        </tr>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('admin_cc',{id_user:user.id_user}) }}\"><span class=\"glyphicon glyphicon-pencil\"></span>Editer</a></th></td>
                <td><a href=\"{{ path('admin_panel2',{id_user:user.id_user}) }}\"><span class=\"glyphicon glyphicon-remove\"></span>Ôter</a></th></td>
                <td>{{ user.id_user}}</td>
                <td>{{ user.nom}}</td>
                <td>{{ user.prenom}}</td>
                <td>{{ user.date_naissance|date('d/m/Y')}}</td>
                <td>{{ user.email}}</td>
                <td>{{ user.adresse}}</td>
                <td>{{ user.complement_adresse}}</td>
                <td>{{ user.code_postal}}</td>
                <td>{{ user.ville}}</td>
                <td>{{ user.tel}}</td>
                <td>{{ user.sexe}}</td>

            </tr>
        {% endfor %}

    </table>






{% endblock %}", "admin/user/panel.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\admin\\user\\panel.html.twig");
    }
}
