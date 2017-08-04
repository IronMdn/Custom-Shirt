<?php

/* produit/list.html.twig */
class __TwigTemplate_4617e4b810efb793b131a9625ea979cd9a6d0d14a7adcc78ccc0c33b50bf3b3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d2c78383cb66d735e5833ebaaa9668447d01ba2617521904e2eea9c88d35b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2c78383cb66d735e5833ebaaa9668447d01ba2617521904e2eea9c88d35b45->enter($__internal_2d2c78383cb66d735e5833ebaaa9668447d01ba2617521904e2eea9c88d35b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/list.html.twig"));

        $__internal_7f77b1e57c8dc4cb87af421219afb57907476da3c26c6164c4abfaf306ce5dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f77b1e57c8dc4cb87af421219afb57907476da3c26c6164c4abfaf306ce5dd4->enter($__internal_7f77b1e57c8dc4cb87af421219afb57907476da3c26c6164c4abfaf306ce5dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/list.html.twig"));

        // line 1
        $context["produitId"] = 0;
        // line 2
        $context["nbRows"] = twig_round((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) / 3), 0, "ceil");
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbRows"]) ? $context["nbRows"] : $this->getContext($context, "nbRows"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "    <hr>
    <div class=\"row\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 9
                echo "            ";
                if ($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array", true, true)) {
                    // line 10
                    echo "                <div class=\"col-sm-4 chemise\">
                    <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "photo", array())), "html", null, true);
                    echo "\" alt=\"chemise\"></a>
                    <hr>
                    <div class=\"desc\">
                        <p class=\"title\"><a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
                    echo "</a></p>
                        <p class=\"price\">";
                    // line 15
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "prix", array()) . " €"), "html", null, true);
                    echo "</p>
                    </div>
                    <hr>
                    <p>";
                    // line 18
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "tissu", array()), "descr", array()), 0, 111), "html", null, true);
                    echo "...</p>
                </div>
            ";
                }
                // line 21
                echo "            ";
                $context["produitId"] = ((isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")) + 1);
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2d2c78383cb66d735e5833ebaaa9668447d01ba2617521904e2eea9c88d35b45->leave($__internal_2d2c78383cb66d735e5833ebaaa9668447d01ba2617521904e2eea9c88d35b45_prof);

        
        $__internal_7f77b1e57c8dc4cb87af421219afb57907476da3c26c6164c4abfaf306ce5dd4->leave($__internal_7f77b1e57c8dc4cb87af421219afb57907476da3c26c6164c4abfaf306ce5dd4_prof);

    }

    public function getTemplateName()
    {
        return "produit/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  79 => 22,  76 => 21,  70 => 18,  64 => 15,  58 => 14,  50 => 11,  47 => 10,  44 => 9,  40 => 8,  36 => 6,  32 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set produitId = 0 %}
{% set nbRows = (produits|length/3)|round(0, 'ceil') %}

{% for i in 0..nbRows %}
{#{{ dump(produits) }}#}
    <hr>
    <div class=\"row\">
        {% for j in 0..2 %}
            {% if produits[produitId] is defined %}
                <div class=\"col-sm-4 chemise\">
                    <a href=\"{{ path('show_product', {\"id\":  produits[produitId].id}) }}\"><img src=\"{{ 'http://localhost/custom_shirt-2/web/img/' ~ produits[produitId].photo }}\" alt=\"chemise\"></a>
                    <hr>
                    <div class=\"desc\">
                        <p class=\"title\"><a href=\"{{ path('show_product', {\"id\":  produits[produitId].id}) }}\">{{ produits[produitId].tissu.nom }}</a></p>
                        <p class=\"price\">{{ produits[produitId].prix ~ ' €'}}</p>
                    </div>
                    <hr>
                    <p>{{ produits[produitId].tissu.descr|slice(0, 111) }}...</p>
                </div>
            {% endif %}
            {% set produitId = produitId + 1 %}
        {% endfor %}
    </div>
{% endfor %}
", "produit/list.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\templates\\produit\\list.html.twig");
    }
}
