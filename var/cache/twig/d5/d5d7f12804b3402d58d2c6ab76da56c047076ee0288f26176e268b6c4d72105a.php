<?php

/* produit/produit.html.twig */
class __TwigTemplate_bc9102f20c6110aac6c54041bf239475e1ba513d0bb5528418f6aaf654a1b8c9 extends Twig_Template
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
        $__internal_a383406a49a99cef7a982b88d8c68543170bf1b5e9234f15e69624d7a29f3d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a383406a49a99cef7a982b88d8c68543170bf1b5e9234f15e69624d7a29f3d56->enter($__internal_a383406a49a99cef7a982b88d8c68543170bf1b5e9234f15e69624d7a29f3d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_b788b9fb992c2cbc8fe6136c1c521854fe12ea7ddec16f496d6a7802f8c31786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b788b9fb992c2cbc8fe6136c1c521854fe12ea7ddec16f496d6a7802f8c31786->enter($__internal_b788b9fb992c2cbc8fe6136c1c521854fe12ea7ddec16f496d6a7802f8c31786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a383406a49a99cef7a982b88d8c68543170bf1b5e9234f15e69624d7a29f3d56->leave($__internal_a383406a49a99cef7a982b88d8c68543170bf1b5e9234f15e69624d7a29f3d56_prof);

        
        $__internal_b788b9fb992c2cbc8fe6136c1c521854fe12ea7ddec16f496d6a7802f8c31786->leave($__internal_b788b9fb992c2cbc8fe6136c1c521854fe12ea7ddec16f496d6a7802f8c31786_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d8ef41a344342fbec3e34d79c7eae387b2f52e2f57029fb416451f4aa6a02f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8ef41a344342fbec3e34d79c7eae387b2f52e2f57029fb416451f4aa6a02f6->enter($__internal_7d8ef41a344342fbec3e34d79c7eae387b2f52e2f57029fb416451f4aa6a02f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3b560541e3ed674a0739d5eed70705dcc5e000d70298bbf1ab2cd3e9085e02e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b560541e3ed674a0739d5eed70705dcc5e000d70298bbf1ab2cd3e9085e02e0->enter($__internal_3b560541e3ed674a0739d5eed70705dcc5e000d70298bbf1ab2cd3e9085e02e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "description", array()), "html", null, true);
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
        
        $__internal_3b560541e3ed674a0739d5eed70705dcc5e000d70298bbf1ab2cd3e9085e02e0->leave($__internal_3b560541e3ed674a0739d5eed70705dcc5e000d70298bbf1ab2cd3e9085e02e0_prof);

        
        $__internal_7d8ef41a344342fbec3e34d79c7eae387b2f52e2f57029fb416451f4aa6a02f6->leave($__internal_7d8ef41a344342fbec3e34d79c7eae387b2f52e2f57029fb416451f4aa6a02f6_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35564dac09aab52bccfc46185ed0a73a2be96aa398230a19bc0fcdba1bed3f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35564dac09aab52bccfc46185ed0a73a2be96aa398230a19bc0fcdba1bed3f5d->enter($__internal_35564dac09aab52bccfc46185ed0a73a2be96aa398230a19bc0fcdba1bed3f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a3c273456dcc27f314f859b02a555f6c53f1c296deee03184b7a83520891480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3c273456dcc27f314f859b02a555f6c53f1c296deee03184b7a83520891480->enter($__internal_0a3c273456dcc27f314f859b02a555f6c53f1c296deee03184b7a83520891480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0a3c273456dcc27f314f859b02a555f6c53f1c296deee03184b7a83520891480->leave($__internal_0a3c273456dcc27f314f859b02a555f6c53f1c296deee03184b7a83520891480_prof);

        
        $__internal_35564dac09aab52bccfc46185ed0a73a2be96aa398230a19bc0fcdba1bed3f5d->leave($__internal_35564dac09aab52bccfc46185ed0a73a2be96aa398230a19bc0fcdba1bed3f5d_prof);

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
                                <p>{{ produits.description }}</p>
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
{% endblock %}", "produit/produit.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\produit\\produit.html.twig");
    }
}
