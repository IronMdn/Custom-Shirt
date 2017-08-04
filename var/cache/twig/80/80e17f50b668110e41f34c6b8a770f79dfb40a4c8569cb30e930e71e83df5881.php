<?php

/* index.html.twig */
class __TwigTemplate_017e139540340ce7bcc9149a55648bf5bbe16e874828228a98c362ce1a34204b extends Twig_Template
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
        $__internal_dde6c04c97e3c39cb3cefd5ac17e19afe9bb7749f7c23d29b94710c91dd92e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde6c04c97e3c39cb3cefd5ac17e19afe9bb7749f7c23d29b94710c91dd92e04->enter($__internal_dde6c04c97e3c39cb3cefd5ac17e19afe9bb7749f7c23d29b94710c91dd92e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_2d330d260f7bb0088de9b07a1bebf282c98632a57b264e3b91ae2198f9e5bcf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d330d260f7bb0088de9b07a1bebf282c98632a57b264e3b91ae2198f9e5bcf4->enter($__internal_2d330d260f7bb0088de9b07a1bebf282c98632a57b264e3b91ae2198f9e5bcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde6c04c97e3c39cb3cefd5ac17e19afe9bb7749f7c23d29b94710c91dd92e04->leave($__internal_dde6c04c97e3c39cb3cefd5ac17e19afe9bb7749f7c23d29b94710c91dd92e04_prof);

        
        $__internal_2d330d260f7bb0088de9b07a1bebf282c98632a57b264e3b91ae2198f9e5bcf4->leave($__internal_2d330d260f7bb0088de9b07a1bebf282c98632a57b264e3b91ae2198f9e5bcf4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1db2a7968b03fa0e55eb5569c23d63d51983a9504cebeb00e173d743622e76c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db2a7968b03fa0e55eb5569c23d63d51983a9504cebeb00e173d743622e76c7->enter($__internal_1db2a7968b03fa0e55eb5569c23d63d51983a9504cebeb00e173d743622e76c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f2e8ca822043427395e8b54b5ac2e206d4fa85bebda53eb57c36c5e65f7a2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2e8ca822043427395e8b54b5ac2e206d4fa85bebda53eb57c36c5e65f7a2ef->enter($__internal_0f2e8ca822043427395e8b54b5ac2e206d4fa85bebda53eb57c36c5e65f7a2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
       <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        
        $__internal_0f2e8ca822043427395e8b54b5ac2e206d4fa85bebda53eb57c36c5e65f7a2ef->leave($__internal_0f2e8ca822043427395e8b54b5ac2e206d4fa85bebda53eb57c36c5e65f7a2ef_prof);

        
        $__internal_1db2a7968b03fa0e55eb5569c23d63d51983a9504cebeb00e173d743622e76c7->leave($__internal_1db2a7968b03fa0e55eb5569c23d63d51983a9504cebeb00e173d743622e76c7_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d0492dfecc3d99935b9e86e20ef936d322224fb48a04211c7a9156289fcca27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0492dfecc3d99935b9e86e20ef936d322224fb48a04211c7a9156289fcca27->enter($__internal_4d0492dfecc3d99935b9e86e20ef936d322224fb48a04211c7a9156289fcca27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_13e7c71555886513586da94cb41db04d33746617fb656dfd330b538e91702df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e7c71555886513586da94cb41db04d33746617fb656dfd330b538e91702df3->enter($__internal_13e7c71555886513586da94cb41db04d33746617fb656dfd330b538e91702df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_13e7c71555886513586da94cb41db04d33746617fb656dfd330b538e91702df3->leave($__internal_13e7c71555886513586da94cb41db04d33746617fb656dfd330b538e91702df3_prof);

        
        $__internal_4d0492dfecc3d99935b9e86e20ef936d322224fb48a04211c7a9156289fcca27->leave($__internal_4d0492dfecc3d99935b9e86e20ef936d322224fb48a04211c7a9156289fcca27_prof);

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
", "index.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\index.html.twig");
    }
}
