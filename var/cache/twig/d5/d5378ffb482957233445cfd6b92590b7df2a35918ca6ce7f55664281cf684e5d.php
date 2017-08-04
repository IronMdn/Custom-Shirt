<?php

/* index.html.twig */
class __TwigTemplate_e0f8629fde5a475b4370088f1b0ad405849cb95aeddb17f3e91172a21bc7b681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2da76259dfb3d7c85c76ce5e64a5873ef85f0291894910c9d5f598cb8a0ce1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da76259dfb3d7c85c76ce5e64a5873ef85f0291894910c9d5f598cb8a0ce1fe->enter($__internal_2da76259dfb3d7c85c76ce5e64a5873ef85f0291894910c9d5f598cb8a0ce1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_3cc648d6ac22d39f525c4aaf981af00fa4b6a785f8d45a730d705309f078032b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc648d6ac22d39f525c4aaf981af00fa4b6a785f8d45a730d705309f078032b->enter($__internal_3cc648d6ac22d39f525c4aaf981af00fa4b6a785f8d45a730d705309f078032b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2da76259dfb3d7c85c76ce5e64a5873ef85f0291894910c9d5f598cb8a0ce1fe->leave($__internal_2da76259dfb3d7c85c76ce5e64a5873ef85f0291894910c9d5f598cb8a0ce1fe_prof);

        
        $__internal_3cc648d6ac22d39f525c4aaf981af00fa4b6a785f8d45a730d705309f078032b->leave($__internal_3cc648d6ac22d39f525c4aaf981af00fa4b6a785f8d45a730d705309f078032b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99dfae964d28a62fb428330136565b43fc4c4cb7c018a8acdc1270a8c81418db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dfae964d28a62fb428330136565b43fc4c4cb7c018a8acdc1270a8c81418db->enter($__internal_99dfae964d28a62fb428330136565b43fc4c4cb7c018a8acdc1270a8c81418db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_40672a5e67fd5e349b95062355ba6175d526d9dae39f210f11706deefd66bf4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40672a5e67fd5e349b95062355ba6175d526d9dae39f210f11706deefd66bf4c->enter($__internal_40672a5e67fd5e349b95062355ba6175d526d9dae39f210f11706deefd66bf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
       <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        
        $__internal_40672a5e67fd5e349b95062355ba6175d526d9dae39f210f11706deefd66bf4c->leave($__internal_40672a5e67fd5e349b95062355ba6175d526d9dae39f210f11706deefd66bf4c_prof);

        
        $__internal_99dfae964d28a62fb428330136565b43fc4c4cb7c018a8acdc1270a8c81418db->leave($__internal_99dfae964d28a62fb428330136565b43fc4c4cb7c018a8acdc1270a8c81418db_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_fac1182a5eda18d3a97e3f6d74f8a3cb83a174eb84093818303bf18b1122b68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac1182a5eda18d3a97e3f6d74f8a3cb83a174eb84093818303bf18b1122b68b->enter($__internal_fac1182a5eda18d3a97e3f6d74f8a3cb83a174eb84093818303bf18b1122b68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e20437e0b15a48e1f5d2d5a75a62964346a5e4903995627423d375a485482da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20437e0b15a48e1f5d2d5a75a62964346a5e4903995627423d375a485482da6->enter($__internal_e20437e0b15a48e1f5d2d5a75a62964346a5e4903995627423d375a485482da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
<div class=\"row\">
    <div class=\"col-sm-12 chemise-index\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <img src=\"http://localhost/custom_shirt-2/web/img/carousel1.jpg\" alt=\"chemise\">
                    <div class=\"carousel-caption\">
                        <h3> Créez votre chemise sur mesure en un rien de temps ! </h3>
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_1_tissu");
        echo "\" > Commmandez </a>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"http://localhost/custom_shirt-2/web/img/carousel2.jpg\" alt=\"chemise\">
                    <div class=\"carousel-caption\">
                        <h3> Des chemises en prêt-à-porter sans prises de mesures ! </h3>
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\" > Commmandez </a>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"http://localhost/custom_shirt-2/web/img/carousel3.jpg\" alt=\"chemise\">
                    <div class=\"carousel-caption\">
                        <h3> De très belles chemises pas cher ! </h3>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\" > Commmandez </a>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</div>


        <div class=\"row collection\">
            <div class=\"col-sm-12 chemise-index\">
                <h3>NOS COLLECTIONS</h3>

                <div class=\"col-sm-3\">
                    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 5, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img class=\"img_template\" src=\"";
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 5, array(), "array"), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\"></a>
                    <p><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 5, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 5, array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    <p>";
        // line 63
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 5, array(), "array"), "prix", array()) . " €"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 12, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img class=\"img_template\" src=\"";
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 12, array(), "array"), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\"></a>
                    <p><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 12, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 5, array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    <p>";
        // line 68
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 12, array(), "array"), "prix", array()) . " €"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 9, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img class=\"img_template\" src=\"";
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 9, array(), "array"), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\"></a>
                    <p><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 9, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 5, array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    <p>";
        // line 73
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 9, array(), "array"), "prix", array()) . " €"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 20, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img class=\"img_template\" src=\"";
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 20, array(), "array"), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\"></a>
                    <p><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 20, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 5, array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    <p>";
        // line 78
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), 20, array(), "array"), "prix", array()) . " €"), "html", null, true);
        echo "</p>
                </div>

            </div>
        </div>

";
        
        $__internal_e20437e0b15a48e1f5d2d5a75a62964346a5e4903995627423d375a485482da6->leave($__internal_e20437e0b15a48e1f5d2d5a75a62964346a5e4903995627423d375a485482da6_prof);

        
        $__internal_fac1182a5eda18d3a97e3f6d74f8a3cb83a174eb84093818303bf18b1122b68b->leave($__internal_fac1182a5eda18d3a97e3f6d74f8a3cb83a174eb84093818303bf18b1122b68b_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 78,  201 => 77,  195 => 76,  189 => 73,  183 => 72,  177 => 71,  171 => 68,  165 => 67,  159 => 66,  153 => 63,  147 => 62,  141 => 61,  114 => 37,  104 => 30,  94 => 23,  76 => 7,  67 => 6,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{% block stylesheets %}
       {{ parent() }}
       <link href=\"{{ asset('css/profile.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
  {% endblock %}
{% block content %}

<div class=\"row\">
    <div class=\"col-sm-12 chemise-index\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <img src=\"http://localhost/custom_shirt-2/web/img/carousel1.jpg\" alt=\"chemise\">
                    <div class=\"carousel-caption\">
                        <h3> Créez votre chemise sur mesure en un rien de temps ! </h3>
                        <a href=\"{{path ('etape_1_tissu') }}\" > Commmandez </a>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"http://localhost/custom_shirt-2/web/img/carousel2.jpg\" alt=\"chemise\">
                    <div class=\"carousel-caption\">
                        <h3> Des chemises en prêt-à-porter sans prises de mesures ! </h3>
                        <a href=\"{{path ('produits') }}\" > Commmandez </a>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"http://localhost/custom_shirt-2/web/img/carousel3.jpg\" alt=\"chemise\">
                    <div class=\"carousel-caption\">
                        <h3> De très belles chemises pas cher ! </h3>
                        <a href=\"{{path ('produits') }}\" > Commmandez </a>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</div>


        <div class=\"row collection\">
            <div class=\"col-sm-12 chemise-index\">
                <h3>NOS COLLECTIONS</h3>

                <div class=\"col-sm-3\">
                    <a href=\"{{ path('show_product', {\"id\":  produits[5].id}) }}\"><img class=\"img_template\" src=\"{{ 'http://localhost/custom_shirt-2/web/img/' ~ produits[5].photo }}\" alt=\"chemise\"></a>
                    <p><a href=\"{{ path('show_product', {\"id\":  produits[5].id}) }}\">{{ produits[5].tissu.nom }}</a></p>
                    <p>{{ produits[5].prix ~ ' €' }}</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"{{ path('show_product', {\"id\":  produits[12].id}) }}\"><img class=\"img_template\" src=\"{{ 'http://localhost/custom_shirt-2/web/img/' ~ produits[12].photo }}\" alt=\"chemise\"></a>
                    <p><a href=\"{{ path('show_product', {\"id\":  produits[12].id}) }}\">{{ produits[5].tissu.nom }}</a></p>
                    <p>{{ produits[12].prix ~ ' €' }}</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"{{ path('show_product', {\"id\":  produits[9].id}) }}\"><img class=\"img_template\" src=\"{{ 'http://localhost/custom_shirt-2/web/img/' ~ produits[9].photo }}\" alt=\"chemise\"></a>
                    <p><a href=\"{{ path('show_product', {\"id\":  produits[9].id}) }}\">{{ produits[5].tissu.nom }}</a></p>
                    <p>{{ produits[9].prix ~ ' €' }}</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"{{ path('show_product', {\"id\":  produits[20].id}) }}\"><img class=\"img_template\" src=\"{{ 'http://localhost/custom_shirt-2/web/img/' ~ produits[20].photo }}\" alt=\"chemise\"></a>
                    <p><a href=\"{{ path('show_product', {\"id\":  produits[20].id}) }}\">{{ produits[5].tissu.nom }}</a></p>
                    <p>{{ produits[20].prix ~ ' €' }}</p>
                </div>

            </div>
        </div>

{% endblock %}
", "index.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\templates\\index.html.twig");
    }
}
