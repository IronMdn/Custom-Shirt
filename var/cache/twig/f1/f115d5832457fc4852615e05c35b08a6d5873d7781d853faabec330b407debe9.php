<?php

/* index.html.twig */
class __TwigTemplate_1408ed395331a0674de3a8a89ab2c36c6c0252ab82f7f928323b091de09b5ae5 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
       <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 5, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img class=\"img_template\" src=\"";
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 5, array(), "array"), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\"></a>
                    <p><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 5, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 5, array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    <p>";
        // line 63
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 5, array(), "array"), "prix", array()) . " €"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 12, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img class=\"img_template\" src=\"";
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 12, array(), "array"), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\"></a>
                    <p><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 12, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 5, array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    <p>";
        // line 68
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 12, array(), "array"), "prix", array()) . " €"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 9, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img class=\"img_template\" src=\"";
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 9, array(), "array"), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\"></a>
                    <p><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 9, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 5, array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    <p>";
        // line 73
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 9, array(), "array"), "prix", array()) . " €"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 20, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img class=\"img_template\" src=\"";
        echo twig_escape_filter($this->env, ("http://localhost/custom_shirt-2/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 20, array(), "array"), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\"></a>
                    <p><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 20, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 5, array(), "array"), "tissu", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    <p>";
        // line 78
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), 20, array(), "array"), "prix", array()) . " €"), "html", null, true);
        echo "</p>
                </div>

            </div>
        </div>

";
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
        return array (  177 => 78,  171 => 77,  165 => 76,  159 => 73,  153 => 72,  147 => 71,  141 => 68,  135 => 67,  129 => 66,  123 => 63,  117 => 62,  111 => 61,  84 => 37,  74 => 30,  64 => 23,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\wamp64\\www\\cust\\custom_shirt-2\\templates\\index.html.twig");
    }
}
