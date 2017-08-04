<?php

/* admin/produit/stock.html.twig */
class __TwigTemplate_1e09172ac4d42fc4df7f1b635eab4b64d4c8757ee6d63d72cb832f7c5412a53a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/produit/stock.html.twig", 1);
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
        $__internal_404e3c81d09daa69ef9625e14a61ea26e02c7ea589c811e53a07702b96021c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404e3c81d09daa69ef9625e14a61ea26e02c7ea589c811e53a07702b96021c74->enter($__internal_404e3c81d09daa69ef9625e14a61ea26e02c7ea589c811e53a07702b96021c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/produit/stock.html.twig"));

        $__internal_5cb782c7dec4af20a973ac7fb4078dda8d0fd27424be6dee53187ea67abd524e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb782c7dec4af20a973ac7fb4078dda8d0fd27424be6dee53187ea67abd524e->enter($__internal_5cb782c7dec4af20a973ac7fb4078dda8d0fd27424be6dee53187ea67abd524e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/produit/stock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_404e3c81d09daa69ef9625e14a61ea26e02c7ea589c811e53a07702b96021c74->leave($__internal_404e3c81d09daa69ef9625e14a61ea26e02c7ea589c811e53a07702b96021c74_prof);

        
        $__internal_5cb782c7dec4af20a973ac7fb4078dda8d0fd27424be6dee53187ea67abd524e->leave($__internal_5cb782c7dec4af20a973ac7fb4078dda8d0fd27424be6dee53187ea67abd524e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d758f8e07c460524d521e9632896b913f44cd2e0e6107f29e40906f346b2a1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d758f8e07c460524d521e9632896b913f44cd2e0e6107f29e40906f346b2a1d7->enter($__internal_d758f8e07c460524d521e9632896b913f44cd2e0e6107f29e40906f346b2a1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61b95baf5d70609c58b04c22f87ab92a950016558ead29ccf28b286e3ac03889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b95baf5d70609c58b04c22f87ab92a950016558ead29ccf28b286e3ac03889->enter($__internal_61b95baf5d70609c58b04c22f87ab92a950016558ead29ccf28b286e3ac03889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin produit";
        
        $__internal_61b95baf5d70609c58b04c22f87ab92a950016558ead29ccf28b286e3ac03889->leave($__internal_61b95baf5d70609c58b04c22f87ab92a950016558ead29ccf28b286e3ac03889_prof);

        
        $__internal_d758f8e07c460524d521e9632896b913f44cd2e0e6107f29e40906f346b2a1d7->leave($__internal_d758f8e07c460524d521e9632896b913f44cd2e0e6107f29e40906f346b2a1d7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff2ef266f19419492ac41da6ef0d37f3ea330507f457f9ec288023ec77a12122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2ef266f19419492ac41da6ef0d37f3ea330507f457f9ec288023ec77a12122->enter($__internal_ff2ef266f19419492ac41da6ef0d37f3ea330507f457f9ec288023ec77a12122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3c862f437c32b34ddad870c7794cc64b66239f67f5fb824058d92856fcd1af81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c862f437c32b34ddad870c7794cc64b66239f67f5fb824058d92856fcd1af81->enter($__internal_3c862f437c32b34ddad870c7794cc64b66239f67f5fb824058d92856fcd1af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Gestion de Stock</h1>
    <div class=\"row\">
        <div class=\"col-md-2\">
            <form method=\"POST\" action=\"\">
                <div class=\"form-group\">
                    <label>XS</label>
                    <input name=\"taille_id-XS\" type=\"hidden\" class=\"form-control\" value=\"1\"></input>
                    <input name=\"stock-XS\" type=\"text\" class=\"form-control\" value=\"";
        // line 11
        if ( !twig_test_empty((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 0, array(), "array"), "stock", array()), "html", null, true);
        }
        echo "\"></input>
                </div>
                <div class=\"form-group\">
                    <label>S</label>
                    <input name=\"taille_id-S\" type=\"hidden\" class=\"form-control\" value=\"2\"></input>
                    <input name=\"stock-S\" type=\"text\" class=\"form-control\" value=\"";
        // line 16
        if ( !twig_test_empty((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 1, array(), "array"), "stock", array()), "html", null, true);
        }
        echo "\"></input>
                </div>
                <div class=\"form-group\">
                    <label>M</label>
                    <input name=\"taille_id-M\" type=\"hidden\" class=\"form-control\" value=\"3\"></input>
                    <input name=\"stock-M\" type=\"text\" class=\"form-control\" value=\"";
        // line 21
        if ( !twig_test_empty((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 2, array(), "array"), "stock", array()), "html", null, true);
        }
        echo "\"></input>
                </div>
                <div class=\"form-group\">
                    <label>L</label>
                    <input name=\"taille_id-L\" type=\"hidden\" class=\"form-control\" value=\"4\"></input>
                    <input name=\"stock-L\" type=\"text\" class=\"form-control\" value=\"";
        // line 26
        if ( !twig_test_empty((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 3, array(), "array"), "stock", array()), "html", null, true);
        }
        echo "\"></input>
                </div>
                <div class=\"form-group\">
                    <label>XL</label>
                    <input name=\"taille_id-XL\" type=\"hidden\" class=\"form-control\" value=\"5\"></input>
                    <input name=\"stock-XL\" type=\"text\" class=\"form-control\" value=\"";
        // line 31
        if ( !twig_test_empty((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 4, array(), "array"), "stock", array()), "html", null, true);
        }
        echo "\"></input>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-default\" type=\"submit\">Submit</button>
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_produits");
        echo "\" class=\"btn btn-default\">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_3c862f437c32b34ddad870c7794cc64b66239f67f5fb824058d92856fcd1af81->leave($__internal_3c862f437c32b34ddad870c7794cc64b66239f67f5fb824058d92856fcd1af81_prof);

        
        $__internal_ff2ef266f19419492ac41da6ef0d37f3ea330507f457f9ec288023ec77a12122->leave($__internal_ff2ef266f19419492ac41da6ef0d37f3ea330507f457f9ec288023ec77a12122_prof);

    }

    public function getTemplateName()
    {
        return "admin/produit/stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  117 => 31,  107 => 26,  97 => 21,  87 => 16,  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    <h1>Gestion de Stock</h1>
    <div class=\"row\">
        <div class=\"col-md-2\">
            <form method=\"POST\" action=\"\">
                <div class=\"form-group\">
                    <label>XS</label>
                    <input name=\"taille_id-XS\" type=\"hidden\" class=\"form-control\" value=\"1\"></input>
                    <input name=\"stock-XS\" type=\"text\" class=\"form-control\" value=\"{% if produits is not empty %}{{ produits[0].stock }}{% endif %}\"></input>
                </div>
                <div class=\"form-group\">
                    <label>S</label>
                    <input name=\"taille_id-S\" type=\"hidden\" class=\"form-control\" value=\"2\"></input>
                    <input name=\"stock-S\" type=\"text\" class=\"form-control\" value=\"{% if produits is not empty %}{{ produits[1].stock }}{% endif %}\"></input>
                </div>
                <div class=\"form-group\">
                    <label>M</label>
                    <input name=\"taille_id-M\" type=\"hidden\" class=\"form-control\" value=\"3\"></input>
                    <input name=\"stock-M\" type=\"text\" class=\"form-control\" value=\"{% if produits is not empty %}{{ produits[2].stock }}{% endif %}\"></input>
                </div>
                <div class=\"form-group\">
                    <label>L</label>
                    <input name=\"taille_id-L\" type=\"hidden\" class=\"form-control\" value=\"4\"></input>
                    <input name=\"stock-L\" type=\"text\" class=\"form-control\" value=\"{% if produits is not empty %}{{ produits[3].stock }}{% endif %}\"></input>
                </div>
                <div class=\"form-group\">
                    <label>XL</label>
                    <input name=\"taille_id-XL\" type=\"hidden\" class=\"form-control\" value=\"5\"></input>
                    <input name=\"stock-XL\" type=\"text\" class=\"form-control\" value=\"{% if produits is not empty %}{{ produits[4].stock }}{% endif %}\"></input>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-default\" type=\"submit\">Submit</button>
                    <a href=\"{{ path('admin_produits') }}\" class=\"btn btn-default\">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "admin/produit/stock.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\admin\\produit\\stock.html.twig");
    }
}
