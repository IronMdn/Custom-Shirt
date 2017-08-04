<?php

/* produit/produit.html.twig */
class __TwigTemplate_ac9e7c6ffac8a66429257b2becece58d99b22356b5be4f48ba4ea8983e79b123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "produit/produit.html.twig", 1);
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
        $__internal_dc87b4855e06a5a9d5ce556a57136e292ffcf7dfd31061aceaddb5480b7c3a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc87b4855e06a5a9d5ce556a57136e292ffcf7dfd31061aceaddb5480b7c3a04->enter($__internal_dc87b4855e06a5a9d5ce556a57136e292ffcf7dfd31061aceaddb5480b7c3a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_9e108d76f7ba305c5abc7a221f2b11d7bf2b1a0cbb6cfe4ada9295075db86169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e108d76f7ba305c5abc7a221f2b11d7bf2b1a0cbb6cfe4ada9295075db86169->enter($__internal_9e108d76f7ba305c5abc7a221f2b11d7bf2b1a0cbb6cfe4ada9295075db86169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc87b4855e06a5a9d5ce556a57136e292ffcf7dfd31061aceaddb5480b7c3a04->leave($__internal_dc87b4855e06a5a9d5ce556a57136e292ffcf7dfd31061aceaddb5480b7c3a04_prof);

        
        $__internal_9e108d76f7ba305c5abc7a221f2b11d7bf2b1a0cbb6cfe4ada9295075db86169->leave($__internal_9e108d76f7ba305c5abc7a221f2b11d7bf2b1a0cbb6cfe4ada9295075db86169_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d24ae406915fa7fc076c34b5f35435ee4099977828ea935587d6d5cd4bc8d89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24ae406915fa7fc076c34b5f35435ee4099977828ea935587d6d5cd4bc8d89e->enter($__internal_d24ae406915fa7fc076c34b5f35435ee4099977828ea935587d6d5cd4bc8d89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f2ff7d79bdcacff7f905721f4e5acb9b850dd7421f377f0f918e2cc6f0487d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ff7d79bdcacff7f905721f4e5acb9b850dd7421f377f0f918e2cc6f0487d30->enter($__internal_f2ff7d79bdcacff7f905721f4e5acb9b850dd7421f377f0f918e2cc6f0487d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-6\">
                <img class=\"img_template\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\">
            </div>
            <div class=\"col-sm-6\">
                <div class=\"row\">
                    <div class=\"col-sm-12 description-title\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 nom title\">
                                <h2 id=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "tissu", array()), "nom", array()), "html", null, true);
        echo "</h2>
                                <h4>";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "prix", array()) . "€"), "html", null, true);
        echo " </h4>
                            </div>
                        </div>
                        <div class=\"row product_info_cool info\">
                            <div class=\"col-sm-12\">
                                <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "tissu", array()), "descr", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"col-sm-12 info\">
                            <h4 class=\"product_info_title\">DESCRIPTION DU TISSU <span class=\"more\"></span></h4>
                            <p class=\"info\"><img src=\"http://www.cottonsociety.com/themes/WebCottonSociety/img/icon-composition.svg\" alt=\"Icon composition tissu\" width=\"16\" height=\"16\"> Composition: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "tissu", array()), "composition", array()), "html", null, true);
        echo "</p>
                            <p class=\"info\"><img src=\"http://www.cottonsociety.com/themes/WebCottonSociety/img/icon-grammage.svg\" alt=\"Icon grammage tissu\" width=\"16\" height=\"16\"> Grammage: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "tissu", array()), "grammage", array()), "html", null, true);
        echo "</p>
                            <p class=\"info\"><img src=\"http://www.cottonsociety.com/themes/WebCottonSociety/img/icon-titrage.svg\" alt=\"Icon tirage tissu\" width=\"16\" height=\"16\"> Titrage: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "tissu", array()), "tirage", array()), "html", null, true);
        echo "</p>
                            <p class=\"info\"><img src=\"http://www.cottonsociety.com/themes/WebCottonSociety/img/icon-fil.svg\" alt=\"Icon fil tissu\" width=\"16\" height=\"16\"> Fil: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "tissu", array()), "fil", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 button\">
                            <button class=\"btn btn-default ajout_panier\">Ajouter au panier</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_f2ff7d79bdcacff7f905721f4e5acb9b850dd7421f377f0f918e2cc6f0487d30->leave($__internal_f2ff7d79bdcacff7f905721f4e5acb9b850dd7421f377f0f918e2cc6f0487d30_prof);

        
        $__internal_d24ae406915fa7fc076c34b5f35435ee4099977828ea935587d6d5cd4bc8d89e->leave($__internal_d24ae406915fa7fc076c34b5f35435ee4099977828ea935587d6d5cd4bc8d89e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cdb9902b4ddf514abfd47ce7fae0ea9eea53971b9b3841956b30300ea32f7f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb9902b4ddf514abfd47ce7fae0ea9eea53971b9b3841956b30300ea32f7f10->enter($__internal_cdb9902b4ddf514abfd47ce7fae0ea9eea53971b9b3841956b30300ea32f7f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc8cc0948f52195323c72475d533dd42998b779ced55652bf5878c42678c6559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8cc0948f52195323c72475d533dd42998b779ced55652bf5878c42678c6559->enter($__internal_dc8cc0948f52195323c72475d533dd42998b779ced55652bf5878c42678c6559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var ajaxApiUrlPanier = \"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_api_panier");
        echo "\";
    </script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/scriptProduit.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dc8cc0948f52195323c72475d533dd42998b779ced55652bf5878c42678c6559->leave($__internal_dc8cc0948f52195323c72475d533dd42998b779ced55652bf5878c42678c6559_prof);

        
        $__internal_cdb9902b4ddf514abfd47ce7fae0ea9eea53971b9b3841956b30300ea32f7f10->leave($__internal_cdb9902b4ddf514abfd47ce7fae0ea9eea53971b9b3841956b30300ea32f7f10_prof);

    }

    public function getTemplateName()
    {
        return "produit/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  142 => 50,  136 => 48,  127 => 47,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  82 => 22,  74 => 17,  68 => 16,  58 => 9,  52 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {#{{ dump(produits) }}#}
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-6\">
                <img class=\"img_template\" src=\"{{ 'http://localhost/custom_shirt-2/web/img/' ~ produits.photo }}\" alt=\"chemise\">
            </div>
            <div class=\"col-sm-6\">
                <div class=\"row\">
                    <div class=\"col-sm-12 description-title\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 nom title\">
                                <h2 id=\"{{ produits.id }}\">{{ produits.tissu.nom }}</h2>
                                <h4>{{ produits.prix ~ '€'}} </h4>
                            </div>
                        </div>
                        <div class=\"row product_info_cool info\">
                            <div class=\"col-sm-12\">
                                <p>{{ produits.tissu.descr }}</p>
                            </div>
                        </div>
                        <div class=\"col-sm-12 info\">
                            <h4 class=\"product_info_title\">DESCRIPTION DU TISSU <span class=\"more\"></span></h4>
                            <p class=\"info\"><img src=\"http://www.cottonsociety.com/themes/WebCottonSociety/img/icon-composition.svg\" alt=\"Icon composition tissu\" width=\"16\" height=\"16\"> Composition: {{ produits.tissu.composition }}</p>
                            <p class=\"info\"><img src=\"http://www.cottonsociety.com/themes/WebCottonSociety/img/icon-grammage.svg\" alt=\"Icon grammage tissu\" width=\"16\" height=\"16\"> Grammage: {{ produits.tissu.grammage }}</p>
                            <p class=\"info\"><img src=\"http://www.cottonsociety.com/themes/WebCottonSociety/img/icon-titrage.svg\" alt=\"Icon tirage tissu\" width=\"16\" height=\"16\"> Titrage: {{ produits.tissu.tirage }}</p>
                            <p class=\"info\"><img src=\"http://www.cottonsociety.com/themes/WebCottonSociety/img/icon-fil.svg\" alt=\"Icon fil tissu\" width=\"16\" height=\"16\"> Fil: {{ produits.tissu.fil }}</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 button\">
                            <button class=\"btn btn-default ajout_panier\">Ajouter au panier</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}


{% block javascripts %}
    {{ parent() }}
    <script>
        var ajaxApiUrlPanier = \"{{ path('ajax_api_panier') }}\";
    </script>
    <script src=\"{{ asset('script/scriptProduit.js') }}\"></script>
{% endblock %}", "produit/produit.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\templates\\produit\\produit.html.twig");
    }
}
