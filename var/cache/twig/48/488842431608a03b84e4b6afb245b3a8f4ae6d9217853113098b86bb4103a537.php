<?php

/* custom/coupe.html.twig */
class __TwigTemplate_42caf88a9f966b10d51c68d88c42e9cee18b473a72301e04dc14ebeb746ea2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/coupe.html.twig", 1);
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
        $__internal_cec22fdf3a34fb890ef4c53fabdf158c2da7c1df3a3fb7d9f1548c0e71a87896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec22fdf3a34fb890ef4c53fabdf158c2da7c1df3a3fb7d9f1548c0e71a87896->enter($__internal_cec22fdf3a34fb890ef4c53fabdf158c2da7c1df3a3fb7d9f1548c0e71a87896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/coupe.html.twig"));

        $__internal_60815bbd84dcc93d24b35e917113a4556365dde3169b3ee165bf38e8fc89d502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60815bbd84dcc93d24b35e917113a4556365dde3169b3ee165bf38e8fc89d502->enter($__internal_60815bbd84dcc93d24b35e917113a4556365dde3169b3ee165bf38e8fc89d502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/coupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec22fdf3a34fb890ef4c53fabdf158c2da7c1df3a3fb7d9f1548c0e71a87896->leave($__internal_cec22fdf3a34fb890ef4c53fabdf158c2da7c1df3a3fb7d9f1548c0e71a87896_prof);

        
        $__internal_60815bbd84dcc93d24b35e917113a4556365dde3169b3ee165bf38e8fc89d502->leave($__internal_60815bbd84dcc93d24b35e917113a4556365dde3169b3ee165bf38e8fc89d502_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c71f57b2063ae571c058bdf0b92f2365f79a8817ec1efa203d03564d8cb45e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71f57b2063ae571c058bdf0b92f2365f79a8817ec1efa203d03564d8cb45e32->enter($__internal_c71f57b2063ae571c058bdf0b92f2365f79a8817ec1efa203d03564d8cb45e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_887a856667a4600986c6ac2798a190ebf35ac9a7c73331a1222397fd51769d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887a856667a4600986c6ac2798a190ebf35ac9a7c73331a1222397fd51769d63->enter($__internal_887a856667a4600986c6ac2798a190ebf35ac9a7c73331a1222397fd51769d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_887a856667a4600986c6ac2798a190ebf35ac9a7c73331a1222397fd51769d63->leave($__internal_887a856667a4600986c6ac2798a190ebf35ac9a7c73331a1222397fd51769d63_prof);

        
        $__internal_c71f57b2063ae571c058bdf0b92f2365f79a8817ec1efa203d03564d8cb45e32->leave($__internal_c71f57b2063ae571c058bdf0b92f2365f79a8817ec1efa203d03564d8cb45e32_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c1e2be5399d47896e9ad9e4006764cbf3803e0feab2f65d166e3556417b6a936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e2be5399d47896e9ad9e4006764cbf3803e0feab2f65d166e3556417b6a936->enter($__internal_c1e2be5399d47896e9ad9e4006764cbf3803e0feab2f65d166e3556417b6a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9c4db69c5f47234b319efd7cc1f8e43efeb8c673259dd11cc5a222eac5a7510e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4db69c5f47234b319efd7cc1f8e43efeb8c673259dd11cc5a222eac5a7510e->enter($__internal_9c4db69c5f47234b319efd7cc1f8e43efeb8c673259dd11cc5a222eac5a7510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "        <h1>Etape suivante ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:30%;\">30%</div>
        </div>
        <h2 class=\"sous_titre\"> Choix de votre coupe </h2>
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
                                </tr>
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coupes"]) ? $context["coupes"] : $this->getContext($context, "coupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupe"]) {
            // line 23
            echo "                                    <tr>
                                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupe"], "titre_coupe", array()), "html", null, true);
            echo " </td>
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupe"], "description_coupe", array()), "html", null, true);
            echo " </td>
                                        <td><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupe"], "photo_coupe", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupe"], "id_coupe", array()), "html", null, true);
            echo "\"/> </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </table>
                            <button type=\"submit\" class=\"btn btn-primary\" > Validation du formulaire </button>
                            <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
                        </div>
                    </form>
                </div>
            </div>
    ";
        
        $__internal_9c4db69c5f47234b319efd7cc1f8e43efeb8c673259dd11cc5a222eac5a7510e->leave($__internal_9c4db69c5f47234b319efd7cc1f8e43efeb8c673259dd11cc5a222eac5a7510e_prof);

        
        $__internal_c1e2be5399d47896e9ad9e4006764cbf3803e0feab2f65d166e3556417b6a936->leave($__internal_c1e2be5399d47896e9ad9e4006764cbf3803e0feab2f65d166e3556417b6a936_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7fee845faf803bf02c22b8b915bcb521e9c41e69cdff670a4160c13e0e694a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fee845faf803bf02c22b8b915bcb521e9c41e69cdff670a4160c13e0e694a9->enter($__internal_d7fee845faf803bf02c22b8b915bcb521e9c41e69cdff670a4160c13e0e694a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_05e8a783451b4e6d0f3569b82cb4da152103726c1196b5f6001d7ac09eb99209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e8a783451b4e6d0f3569b82cb4da152103726c1196b5f6001d7ac09eb99209->enter($__internal_05e8a783451b4e6d0f3569b82cb4da152103726c1196b5f6001d7ac09eb99209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/choixcustom.js"), "html", null, true);
        echo "\"></script>
          ";
        
        $__internal_05e8a783451b4e6d0f3569b82cb4da152103726c1196b5f6001d7ac09eb99209->leave($__internal_05e8a783451b4e6d0f3569b82cb4da152103726c1196b5f6001d7ac09eb99209_prof);

        
        $__internal_d7fee845faf803bf02c22b8b915bcb521e9c41e69cdff670a4160c13e0e694a9->leave($__internal_d7fee845faf803bf02c22b8b915bcb521e9c41e69cdff670a4160c13e0e694a9_prof);

    }

    public function getTemplateName()
    {
        return "custom/coupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 40,  139 => 39,  130 => 38,  113 => 29,  102 => 26,  98 => 25,  94 => 24,  91 => 23,  87 => 22,  69 => 6,  60 => 5,  42 => 2,  11 => 1,);
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
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:30%;\">30%</div>
        </div>
        <h2 class=\"sous_titre\"> Choix de votre coupe </h2>
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
                                </tr>
                                {% for coupe in coupes %}
                                    <tr>
                                        <td>{{ coupe.titre_coupe }} </td>
                                        <td>{{ coupe.description_coupe }} </td>
                                        <td><img src=\"{{ coupe.photo_coupe }}\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"{{ coupe.id_coupe }}\"/> </td>
                                    </tr>
                                {% endfor %}
                            </table>
                            <button type=\"submit\" class=\"btn btn-primary\" > Validation du formulaire </button>
                            <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
                        </div>
                    </form>
                </div>
            </div>
    {% endblock %}

        {% block javascripts %}
        {{ parent() }}
     <script src=\"{{ asset('script/choixcustom.js')}}\"></script>
          {% endblock %}", "custom/coupe.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\coupe.html.twig");
    }
}
