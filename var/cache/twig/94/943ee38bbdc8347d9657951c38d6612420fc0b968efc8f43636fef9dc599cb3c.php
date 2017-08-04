<?php

/* admin/produit/edit.html.twig */
class __TwigTemplate_81718501a2aa0f2cc4f3c9ef65d98e23a2c29090e17a5a582050cd3df6dc0505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/produit/edit.html.twig", 1);
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
        $__internal_8da0d58a7698f41f0f39125cfcd0a12640449679b0c327d6cf667f11d52efac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da0d58a7698f41f0f39125cfcd0a12640449679b0c327d6cf667f11d52efac9->enter($__internal_8da0d58a7698f41f0f39125cfcd0a12640449679b0c327d6cf667f11d52efac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/produit/edit.html.twig"));

        $__internal_8063f5843816ce66bea56ea86bdd1cdaa31be8fa9d51e86f49c0a5e84a885fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8063f5843816ce66bea56ea86bdd1cdaa31be8fa9d51e86f49c0a5e84a885fff->enter($__internal_8063f5843816ce66bea56ea86bdd1cdaa31be8fa9d51e86f49c0a5e84a885fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/produit/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da0d58a7698f41f0f39125cfcd0a12640449679b0c327d6cf667f11d52efac9->leave($__internal_8da0d58a7698f41f0f39125cfcd0a12640449679b0c327d6cf667f11d52efac9_prof);

        
        $__internal_8063f5843816ce66bea56ea86bdd1cdaa31be8fa9d51e86f49c0a5e84a885fff->leave($__internal_8063f5843816ce66bea56ea86bdd1cdaa31be8fa9d51e86f49c0a5e84a885fff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c2c53c1bebb3b853c3fd614cadf8c5d8deebf3c845ba678122028dff7695e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2c53c1bebb3b853c3fd614cadf8c5d8deebf3c845ba678122028dff7695e01->enter($__internal_9c2c53c1bebb3b853c3fd614cadf8c5d8deebf3c845ba678122028dff7695e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00997f584c7a3bab8d338a981c4daffba3bb2c2b64e0945df0a529340ab2909c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00997f584c7a3bab8d338a981c4daffba3bb2c2b64e0945df0a529340ab2909c->enter($__internal_00997f584c7a3bab8d338a981c4daffba3bb2c2b64e0945df0a529340ab2909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin produit";
        
        $__internal_00997f584c7a3bab8d338a981c4daffba3bb2c2b64e0945df0a529340ab2909c->leave($__internal_00997f584c7a3bab8d338a981c4daffba3bb2c2b64e0945df0a529340ab2909c_prof);

        
        $__internal_9c2c53c1bebb3b853c3fd614cadf8c5d8deebf3c845ba678122028dff7695e01->leave($__internal_9c2c53c1bebb3b853c3fd614cadf8c5d8deebf3c845ba678122028dff7695e01_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a5e39132d170029425ab459fd9766ccfd3755fd29091f27cfcc023b4ca6b158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5e39132d170029425ab459fd9766ccfd3755fd29091f27cfcc023b4ca6b158->enter($__internal_9a5e39132d170029425ab459fd9766ccfd3755fd29091f27cfcc023b4ca6b158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7284a7400ba0756994843c565c52e0abb43381af4a6c13b6468f926ca12c83c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7284a7400ba0756994843c565c52e0abb43381af4a6c13b6468f926ca12c83c1->enter($__internal_7284a7400ba0756994843c565c52e0abb43381af4a6c13b6468f926ca12c83c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            <h1>
                ";
        // line 9
        if (twig_test_empty($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))) {
            // line 10
            echo "                    Ajouter un nouveau
                ";
        } else {
            // line 12
            echo "                    Modifier un
                ";
        }
        // line 14
        echo "                produit
            </h1>
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <label>Type</label>
                    <select name=\"type\" class=\"form-control\">
                        <option value=\"\">Coisissez un type</option>
                        ";
        // line 22
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), $context["i"], array(), "array"), "id", array()), "html", null, true);
            echo "\"
                                    ";
            // line 24
            if (($this->getAttribute($this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), $context["i"], array(), "array"), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "type", array()), "id", array()))) {
                echo "selected";
            }
            echo ">
                                ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), $context["i"], array(), "array"), "type", array()), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label>Tissu</label>
                    <select name=\"tissu\" class=\"form-control\">
                        <option value=\"\">Choisissez un tissu</option>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tissus"]) ? $context["tissus"] : $this->getContext($context, "tissus")));
        foreach ($context['_seq'] as $context["_key"] => $context["tissu"]) {
            // line 35
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "id", array()), "html", null, true);
            echo "\"
                                    ";
            // line 36
            if (($this->getAttribute($context["tissu"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tissu", array()), "id", array()))) {
                echo "selected";
            }
            echo ">
                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "nom", array()), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tissu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label>Titre</label>
                    <input name=\"titre\" type=\"text\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "titre", array()), "html", null, true);
        echo "\"></input>
                </div>
                <div class=\"form-group\">
                    <label>Description</label>
                    <textarea name=\"description\" type=\"text\" class=\"form-control\" rows=\"6\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"form-group\">
                    <label>Photo</label>
                    <input type=\"file\" id=\"photo\" name=\"photo\">
                    <i>Vous pouvez uploader une photo</i>
                    ";
        // line 57
        echo "                    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))) {
            // line 58
            echo "                        <img class=\"current_image\" src=\"http://localhost/custom_shirt-2/web/img/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"photo_actuelle\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo", array()), "html", null, true);
            echo "\">
                    ";
        }
        // line 61
        echo "                </div>
                <div class=\"form-group\">
                    <label>Sexe</label>
                    <select name=\"sexe\" class=\"form-control\">
                        <option value=\"\">Sexe</option>
                        <option value=\"m\" ";
        // line 66
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "sexe", array()) == "m")) {
            echo "selected";
        }
        echo ">Homme</option>
                        <option value=\"f\" ";
        // line 67
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "sexe", array()) == "f")) {
            echo "selected";
        }
        echo ">Femme</option>
                        <option value=\"mixte\" ";
        // line 68
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "sexe", array()) == "mixte")) {
            echo "selected";
        }
        echo ">Mixte</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label>Prix</label>
                    <input name=\"prix\" type=\"text\" class=\"form-control\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo "\"></input>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">
                    Enregistrer
                </button>
                <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_produits");
        echo "\" class=\"btn btn-default\">
                    Annuler
                </a>
            </form>
        </div>
    </div>
";
        
        $__internal_7284a7400ba0756994843c565c52e0abb43381af4a6c13b6468f926ca12c83c1->leave($__internal_7284a7400ba0756994843c565c52e0abb43381af4a6c13b6468f926ca12c83c1_prof);

        
        $__internal_9a5e39132d170029425ab459fd9766ccfd3755fd29091f27cfcc023b4ca6b158->leave($__internal_9a5e39132d170029425ab459fd9766ccfd3755fd29091f27cfcc023b4ca6b158_prof);

    }

    public function getTemplateName()
    {
        return "admin/produit/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 78,  213 => 73,  203 => 68,  197 => 67,  191 => 66,  184 => 61,  179 => 59,  174 => 58,  171 => 57,  162 => 48,  155 => 44,  149 => 40,  140 => 37,  134 => 36,  129 => 35,  125 => 34,  117 => 28,  108 => 25,  102 => 24,  97 => 23,  92 => 22,  83 => 14,  79 => 12,  75 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Admin produit' %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h1>
                {% if produit.id is empty %}
                    Ajouter un nouveau
                {% else %}
                    Modifier un
                {% endif %}
                produit
            </h1>
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <label>Type</label>
                    <select name=\"type\" class=\"form-control\">
                        <option value=\"\">Coisissez un type</option>
                        {#pour ne pas afficher des doublons on boucle que 3 fois(pour les doublons voir la BD table 'type')#}
                        {% for i in 0..2 %}
                            <option value=\"{{ types[i].id }}\"
                                    {% if types[i].id == produit.type.id %}selected{% endif %}>
                                {{ types[i].type }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"form-group\">
                    <label>Tissu</label>
                    <select name=\"tissu\" class=\"form-control\">
                        <option value=\"\">Choisissez un tissu</option>
                        {% for tissu in tissus %}
                            <option value=\"{{ tissu.id }}\"
                                    {% if tissu.id == produit.tissu.id %}selected{% endif %}>
                                {{ tissu.nom }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"form-group\">
                    <label>Titre</label>
                    <input name=\"titre\" type=\"text\" class=\"form-control\" value=\"{{ produit.titre }}\"></input>
                </div>
                <div class=\"form-group\">
                    <label>Description</label>
                    <textarea name=\"description\" type=\"text\" class=\"form-control\" rows=\"6\">{{ produit.description }}</textarea>
                </div>
                <div class=\"form-group\">
                    <label>Photo</label>
                    <input type=\"file\" id=\"photo\" name=\"photo\">
                    <i>Vous pouvez uploader une photo</i>
                    {#si id de produit est définie ça veut dire qu'on modifie le produit est on affiche son image (qui
                    est da la BD), sinon (création d'un nouveaux produit) on affiche pas l'image(car le produit existe pas
                    da la BD)#}
                    {% if produit.id is not empty %}
                        <img class=\"current_image\" src=\"http://localhost/custom_shirt-2/web/img/{{ produit.photo }}\">
                        <input type=\"hidden\" name=\"photo_actuelle\" value=\"{{ produit.photo }}\">
                    {% endif %}
                </div>
                <div class=\"form-group\">
                    <label>Sexe</label>
                    <select name=\"sexe\" class=\"form-control\">
                        <option value=\"\">Sexe</option>
                        <option value=\"m\" {% if produit.sexe == \"m\" %}selected{% endif %}>Homme</option>
                        <option value=\"f\" {% if produit.sexe == \"f\" %}selected{% endif %}>Femme</option>
                        <option value=\"mixte\" {% if produit.sexe == \"mixte\" %}selected{% endif %}>Mixte</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label>Prix</label>
                    <input name=\"prix\" type=\"text\" class=\"form-control\" value=\"{{ produit.prix }}\"></input>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">
                    Enregistrer
                </button>
                <a href=\"{{ path('admin_produits') }}\" class=\"btn btn-default\">
                    Annuler
                </a>
            </form>
        </div>
    </div>
{% endblock %}

", "admin/produit/edit.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\admin\\produit\\edit.html.twig");
    }
}
