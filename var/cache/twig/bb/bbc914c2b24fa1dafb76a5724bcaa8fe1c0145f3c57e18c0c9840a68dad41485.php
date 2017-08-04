<?php

/* custom/bouton.html.twig */
class __TwigTemplate_f2115c1f332aa915b4c2fa8addc0fbcc34d13ae04ab2a23e0b4dcc2c7371153a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/bouton.html.twig", 1);
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
        $__internal_a6b407a6a7fe4fc364129c485cc37a41f6d740dd7ca258d13bbbe2682b380e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b407a6a7fe4fc364129c485cc37a41f6d740dd7ca258d13bbbe2682b380e75->enter($__internal_a6b407a6a7fe4fc364129c485cc37a41f6d740dd7ca258d13bbbe2682b380e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/bouton.html.twig"));

        $__internal_1842d75c23f69080bd97e204c517d39b28825d93598d5fa8a6952061040b7013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1842d75c23f69080bd97e204c517d39b28825d93598d5fa8a6952061040b7013->enter($__internal_1842d75c23f69080bd97e204c517d39b28825d93598d5fa8a6952061040b7013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/bouton.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b407a6a7fe4fc364129c485cc37a41f6d740dd7ca258d13bbbe2682b380e75->leave($__internal_a6b407a6a7fe4fc364129c485cc37a41f6d740dd7ca258d13bbbe2682b380e75_prof);

        
        $__internal_1842d75c23f69080bd97e204c517d39b28825d93598d5fa8a6952061040b7013->leave($__internal_1842d75c23f69080bd97e204c517d39b28825d93598d5fa8a6952061040b7013_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_949fbf9fab1ec8af7f3fa3597910be11cac882867102edb9b6996bd5aa49d1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949fbf9fab1ec8af7f3fa3597910be11cac882867102edb9b6996bd5aa49d1d6->enter($__internal_949fbf9fab1ec8af7f3fa3597910be11cac882867102edb9b6996bd5aa49d1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6724f2977e915d0d8f802559a151838ecff50d13c012814df6737e7ce6f4e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6724f2977e915d0d8f802559a151838ecff50d13c012814df6737e7ce6f4e87->enter($__internal_c6724f2977e915d0d8f802559a151838ecff50d13c012814df6737e7ce6f4e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_c6724f2977e915d0d8f802559a151838ecff50d13c012814df6737e7ce6f4e87->leave($__internal_c6724f2977e915d0d8f802559a151838ecff50d13c012814df6737e7ce6f4e87_prof);

        
        $__internal_949fbf9fab1ec8af7f3fa3597910be11cac882867102edb9b6996bd5aa49d1d6->leave($__internal_949fbf9fab1ec8af7f3fa3597910be11cac882867102edb9b6996bd5aa49d1d6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef8f47e7bca14da3715a1699ff98accd60432349ebf8cc1071bb79876f414f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8f47e7bca14da3715a1699ff98accd60432349ebf8cc1071bb79876f414f07->enter($__internal_ef8f47e7bca14da3715a1699ff98accd60432349ebf8cc1071bb79876f414f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b748d318b6705e574db51e4de0881e77f453d25c8520a197771328cf55efe203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b748d318b6705e574db51e4de0881e77f453d25c8520a197771328cf55efe203->enter($__internal_b748d318b6705e574db51e4de0881e77f453d25c8520a197771328cf55efe203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "        <h1>Etape suivante ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:20%;\">20%</div>
        </div>
        <h2 class=\"sous_titre\"> Choix de vos boutons </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 col-lg-12\">
                    <form name=\"choix_tissu\" method=\"post\">
                        <div class=\"form-group\">
                            <table class=\"table\">
                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Prix</th>
                                </tr>
                                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boutons"]) ? $context["boutons"] : $this->getContext($context, "boutons")));
        foreach ($context['_seq'] as $context["_key"] => $context["bouton"]) {
            // line 24
            echo "                                    <tr>
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "titre_bouton", array()), "html", null, true);
            echo " </td>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "description_bouton", array()), "html", null, true);
            echo " </td>
                                        <td><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "photo_bouton", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "id_bouton", array()), "html", null, true);
            echo "\"/> </td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "prix_bouton", array()), "html", null, true);
            echo " € </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bouton'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                            </table>
                            <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante </button>
                            <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4 col-lg-4\">

                    ";
        // line 42
        echo "

                </div>
            </div>
        </div>

    ";
        
        $__internal_b748d318b6705e574db51e4de0881e77f453d25c8520a197771328cf55efe203->leave($__internal_b748d318b6705e574db51e4de0881e77f453d25c8520a197771328cf55efe203_prof);

        
        $__internal_ef8f47e7bca14da3715a1699ff98accd60432349ebf8cc1071bb79876f414f07->leave($__internal_ef8f47e7bca14da3715a1699ff98accd60432349ebf8cc1071bb79876f414f07_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7ac23959f4dc13179bffad1afe5512382cc92dd5a9bbcc9e2b04f19ec6703cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ac23959f4dc13179bffad1afe5512382cc92dd5a9bbcc9e2b04f19ec6703cc->enter($__internal_d7ac23959f4dc13179bffad1afe5512382cc92dd5a9bbcc9e2b04f19ec6703cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cb72499615bf0370edec6df43ae6f03c3427d5e3d200190580d81855a8b7d6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb72499615bf0370edec6df43ae6f03c3427d5e3d200190580d81855a8b7d6a5->enter($__internal_cb72499615bf0370edec6df43ae6f03c3427d5e3d200190580d81855a8b7d6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/choixcustom.js"), "html", null, true);
        echo "\"></script>
          ";
        
        $__internal_cb72499615bf0370edec6df43ae6f03c3427d5e3d200190580d81855a8b7d6a5->leave($__internal_cb72499615bf0370edec6df43ae6f03c3427d5e3d200190580d81855a8b7d6a5_prof);

        
        $__internal_d7ac23959f4dc13179bffad1afe5512382cc92dd5a9bbcc9e2b04f19ec6703cc->leave($__internal_d7ac23959f4dc13179bffad1afe5512382cc92dd5a9bbcc9e2b04f19ec6703cc_prof);

    }

    public function getTemplateName()
    {
        return "custom/bouton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 52,  155 => 51,  146 => 50,  130 => 42,  118 => 31,  109 => 28,  103 => 27,  99 => 26,  95 => 25,  92 => 24,  88 => 23,  69 => 6,  60 => 5,  42 => 2,  11 => 1,);
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
        <h1>Etape suivante ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:20%;\">20%</div>
        </div>
        <h2 class=\"sous_titre\"> Choix de vos boutons </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 col-lg-12\">
                    <form name=\"choix_tissu\" method=\"post\">
                        <div class=\"form-group\">
                            <table class=\"table\">
                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Prix</th>
                                </tr>
                                {% for bouton in boutons %}
                                    <tr>
                                        <td>{{ bouton.titre_bouton }} </td>
                                        <td>{{ bouton.description_bouton }} </td>
                                        <td><img src=\"{{ bouton.photo_bouton }}\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"{{ bouton.id_bouton }}\"/> </td>
                                        <td>{{ bouton.prix_bouton }} € </td>
                                    </tr>
                                {% endfor %}
                            </table>
                            <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante </button>
                            <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4 col-lg-4\">

                    {#rajouter les liens de la config et des mesures prises au fur et à mesure#}


                </div>
            </div>
        </div>

    {% endblock %}

        {% block javascripts %}
        {{ parent() }}
     <script src=\"{{ asset('script/choixcustom.js')}}\"></script>
          {% endblock %}

", "custom/bouton.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\bouton.html.twig");
    }
}
