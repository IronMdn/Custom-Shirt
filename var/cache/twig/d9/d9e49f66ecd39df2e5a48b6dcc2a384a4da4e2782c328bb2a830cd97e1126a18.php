<?php

/* custom/tissu.html.twig */
class __TwigTemplate_1b0ad8d6cfd6ca759d37c0b4b081e825e67d5b836d03a6014d202e3a2cc0dc24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/tissu.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_685012c34fcfeb859a08545435a5ae70ba5857ca05d35f456e04df0930bc7bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685012c34fcfeb859a08545435a5ae70ba5857ca05d35f456e04df0930bc7bbd->enter($__internal_685012c34fcfeb859a08545435a5ae70ba5857ca05d35f456e04df0930bc7bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/tissu.html.twig"));

        $__internal_0efb1542c3f8c8f50f63b93b27c4d700fbd969480e9ed2b01759f011357ea383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efb1542c3f8c8f50f63b93b27c4d700fbd969480e9ed2b01759f011357ea383->enter($__internal_0efb1542c3f8c8f50f63b93b27c4d700fbd969480e9ed2b01759f011357ea383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/tissu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685012c34fcfeb859a08545435a5ae70ba5857ca05d35f456e04df0930bc7bbd->leave($__internal_685012c34fcfeb859a08545435a5ae70ba5857ca05d35f456e04df0930bc7bbd_prof);

        
        $__internal_0efb1542c3f8c8f50f63b93b27c4d700fbd969480e9ed2b01759f011357ea383->leave($__internal_0efb1542c3f8c8f50f63b93b27c4d700fbd969480e9ed2b01759f011357ea383_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5311f591950e10124bb9920e8915efad93840442710c4b69a21ce9364e8751a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5311f591950e10124bb9920e8915efad93840442710c4b69a21ce9364e8751a3->enter($__internal_5311f591950e10124bb9920e8915efad93840442710c4b69a21ce9364e8751a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddd1f4292fa3c82462fc8acf6934c074d92f0b28e24c7d4179277a3fb94cca75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd1f4292fa3c82462fc8acf6934c074d92f0b28e24c7d4179277a3fb94cca75->enter($__internal_ddd1f4292fa3c82462fc8acf6934c074d92f0b28e24c7d4179277a3fb94cca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_ddd1f4292fa3c82462fc8acf6934c074d92f0b28e24c7d4179277a3fb94cca75->leave($__internal_ddd1f4292fa3c82462fc8acf6934c074d92f0b28e24c7d4179277a3fb94cca75_prof);

        
        $__internal_5311f591950e10124bb9920e8915efad93840442710c4b69a21ce9364e8751a3->leave($__internal_5311f591950e10124bb9920e8915efad93840442710c4b69a21ce9364e8751a3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a012d04bf5201a42aea72a5c88c9d1e28fec3a4fece889d61f10fbd69ccfdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a012d04bf5201a42aea72a5c88c9d1e28fec3a4fece889d61f10fbd69ccfdaa->enter($__internal_6a012d04bf5201a42aea72a5c88c9d1e28fec3a4fece889d61f10fbd69ccfdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_19cf3f742507bfc556a617116e4a758c213c17daa2ceb0742dbe63a63d466262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19cf3f742507bfc556a617116e4a758c213c17daa2ceb0742dbe63a63d466262->enter($__internal_19cf3f742507bfc556a617116e4a758c213c17daa2ceb0742dbe63a63d466262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "        <h1>On démarre ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width: 2em;\">0%</div>
        </div>
        <h2 class=\"sous_titre\"> Choix de votre tissu </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 col-lg-12\">
                    <form name=\"choix_tissu\" method=\"post\">
                        <div class=\"form-group\">
                            <table class=\"table\">
                                <tr>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Prix</th>
                                </tr>
                                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tissus"]) ? $context["tissus"] : $this->getContext($context, "tissus")));
        foreach ($context['_seq'] as $context["_key"] => $context["tissu"]) {
            // line 24
            echo "                                    <tr>
                                        <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "nom", array()), "html", null, true);
            echo " </td>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "descr", array()), "html", null, true);
            echo " </td>
                                        <td><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "photo", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "id", array()), "html", null, true);
            echo "\"/> </td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "prix", array()), "html", null, true);
            echo " € </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tissu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                            </table>
                            <button type=\"submit\" class=\"btn btn-primary\">Etape suivante</button>
                            <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    ";
        
        $__internal_19cf3f742507bfc556a617116e4a758c213c17daa2ceb0742dbe63a63d466262->leave($__internal_19cf3f742507bfc556a617116e4a758c213c17daa2ceb0742dbe63a63d466262_prof);

        
        $__internal_6a012d04bf5201a42aea72a5c88c9d1e28fec3a4fece889d61f10fbd69ccfdaa->leave($__internal_6a012d04bf5201a42aea72a5c88c9d1e28fec3a4fece889d61f10fbd69ccfdaa_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d11f38fcb5ae85a407871cb63d42ee64d5f62dd6a6a106a9eac269d86ef014d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11f38fcb5ae85a407871cb63d42ee64d5f62dd6a6a106a9eac269d86ef014d4->enter($__internal_d11f38fcb5ae85a407871cb63d42ee64d5f62dd6a6a106a9eac269d86ef014d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1877b7c18564cb680619fc1150c205de8070c77342b770c53f94e6bcff2e4679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1877b7c18564cb680619fc1150c205de8070c77342b770c53f94e6bcff2e4679->enter($__internal_1877b7c18564cb680619fc1150c205de8070c77342b770c53f94e6bcff2e4679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/choixcustom.js"), "html", null, true);
        echo "\"></script>
          ";
        
        $__internal_1877b7c18564cb680619fc1150c205de8070c77342b770c53f94e6bcff2e4679->leave($__internal_1877b7c18564cb680619fc1150c205de8070c77342b770c53f94e6bcff2e4679_prof);

        
        $__internal_d11f38fcb5ae85a407871cb63d42ee64d5f62dd6a6a106a9eac269d86ef014d4->leave($__internal_d11f38fcb5ae85a407871cb63d42ee64d5f62dd6a6a106a9eac269d86ef014d4_prof);

    }

    public function getTemplateName()
    {
        return "custom/tissu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 43,  146 => 42,  137 => 41,  118 => 31,  109 => 28,  103 => 27,  99 => 26,  95 => 25,  92 => 24,  88 => 23,  69 => 6,  60 => 5,  42 => 2,  11 => 1,);
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
{% block title 'Customisation' %}


    {% block content %}
        <h1>On démarre ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width: 2em;\">0%</div>
        </div>
        <h2 class=\"sous_titre\"> Choix de votre tissu </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 col-lg-12\">
                    <form name=\"choix_tissu\" method=\"post\">
                        <div class=\"form-group\">
                            <table class=\"table\">
                                <tr>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Prix</th>
                                </tr>
                                {% for tissu in tissus %}
                                    <tr>
                                        <td> {{ tissu.nom }} </td>
                                        <td>{{ tissu.descr }} </td>
                                        <td><img src=\"{{ tissu.photo }}\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"{{ tissu.id }}\"/> </td>
                                        <td>{{ tissu.prix }} € </td>
                                    </tr>
                                {% endfor %}
                            </table>
                            <button type=\"submit\" class=\"btn btn-primary\">Etape suivante</button>
                            <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    {% endblock %}
        {% block javascripts %}
        {{ parent() }}
     <script src=\"{{ asset('script/choixcustom.js')}}\"></script>
          {% endblock %}
 
", "custom/tissu.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\templates\\custom\\tissu.html.twig");
    }
}
