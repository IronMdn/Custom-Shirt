<?php

/* produit/produit.html.twig */
class __TwigTemplate_f2bb75967d6c3541b1c6546802b9b236cd684288b8df41803fe963f25ad9144b extends Twig_Template
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
        $__internal_00fa4cf1e5e5f01085e91dea5c206cb77cd6aaf8cc8e02ca21c068341cb3eeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fa4cf1e5e5f01085e91dea5c206cb77cd6aaf8cc8e02ca21c068341cb3eeb9->enter($__internal_00fa4cf1e5e5f01085e91dea5c206cb77cd6aaf8cc8e02ca21c068341cb3eeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_634e40bef843056b9c49504ae5653ba136f7d3593f7f51762ae6e0431b631248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634e40bef843056b9c49504ae5653ba136f7d3593f7f51762ae6e0431b631248->enter($__internal_634e40bef843056b9c49504ae5653ba136f7d3593f7f51762ae6e0431b631248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00fa4cf1e5e5f01085e91dea5c206cb77cd6aaf8cc8e02ca21c068341cb3eeb9->leave($__internal_00fa4cf1e5e5f01085e91dea5c206cb77cd6aaf8cc8e02ca21c068341cb3eeb9_prof);

        
        $__internal_634e40bef843056b9c49504ae5653ba136f7d3593f7f51762ae6e0431b631248->leave($__internal_634e40bef843056b9c49504ae5653ba136f7d3593f7f51762ae6e0431b631248_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a78ba90d1bffdee0e898ac829595bd78efc1db92578e51086ddef007a9078ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78ba90d1bffdee0e898ac829595bd78efc1db92578e51086ddef007a9078ab7->enter($__internal_a78ba90d1bffdee0e898ac829595bd78efc1db92578e51086ddef007a9078ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_df689fa5a3ae1beb5fa87712e6044dd4f3a8464fc03b3173ec66a1dcf126393d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df689fa5a3ae1beb5fa87712e6044dd4f3a8464fc03b3173ec66a1dcf126393d->enter($__internal_df689fa5a3ae1beb5fa87712e6044dd4f3a8464fc03b3173ec66a1dcf126393d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_df689fa5a3ae1beb5fa87712e6044dd4f3a8464fc03b3173ec66a1dcf126393d->leave($__internal_df689fa5a3ae1beb5fa87712e6044dd4f3a8464fc03b3173ec66a1dcf126393d_prof);

        
        $__internal_a78ba90d1bffdee0e898ac829595bd78efc1db92578e51086ddef007a9078ab7->leave($__internal_a78ba90d1bffdee0e898ac829595bd78efc1db92578e51086ddef007a9078ab7_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_341a747c9afe00e411196f097e6a0c91dcefe57de0145baac7bfcbc0397b5f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341a747c9afe00e411196f097e6a0c91dcefe57de0145baac7bfcbc0397b5f46->enter($__internal_341a747c9afe00e411196f097e6a0c91dcefe57de0145baac7bfcbc0397b5f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dcc1ac2508739ae7be1d56adc56fb496bd028a0c941fc93748ebca680603dad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc1ac2508739ae7be1d56adc56fb496bd028a0c941fc93748ebca680603dad4->enter($__internal_dcc1ac2508739ae7be1d56adc56fb496bd028a0c941fc93748ebca680603dad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dcc1ac2508739ae7be1d56adc56fb496bd028a0c941fc93748ebca680603dad4->leave($__internal_dcc1ac2508739ae7be1d56adc56fb496bd028a0c941fc93748ebca680603dad4_prof);

        
        $__internal_341a747c9afe00e411196f097e6a0c91dcefe57de0145baac7bfcbc0397b5f46->leave($__internal_341a747c9afe00e411196f097e6a0c91dcefe57de0145baac7bfcbc0397b5f46_prof);

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
{% endblock %}", "produit/produit.html.twig", "C:\\wamp64\\www\\cust\\custom_shirt-2\\templates\\produit\\produit.html.twig");
    }
}
