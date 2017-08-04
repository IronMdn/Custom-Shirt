<?php

/* custom/tissu.html.twig */
class __TwigTemplate_bfc49a2dac4fd6ad1284045c38747246332aba66559a8462305a511ea7c282b5 extends Twig_Template
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
        $__internal_314d0dfc8e8799aedbd7c4ac59bf99c7e57987a4fa6726e6b669f07a0411dba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314d0dfc8e8799aedbd7c4ac59bf99c7e57987a4fa6726e6b669f07a0411dba8->enter($__internal_314d0dfc8e8799aedbd7c4ac59bf99c7e57987a4fa6726e6b669f07a0411dba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/tissu.html.twig"));

        $__internal_c955a2f9b23d9597541983ba82fa8d4964ebca42a454bea81cc527b96b011317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c955a2f9b23d9597541983ba82fa8d4964ebca42a454bea81cc527b96b011317->enter($__internal_c955a2f9b23d9597541983ba82fa8d4964ebca42a454bea81cc527b96b011317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/tissu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314d0dfc8e8799aedbd7c4ac59bf99c7e57987a4fa6726e6b669f07a0411dba8->leave($__internal_314d0dfc8e8799aedbd7c4ac59bf99c7e57987a4fa6726e6b669f07a0411dba8_prof);

        
        $__internal_c955a2f9b23d9597541983ba82fa8d4964ebca42a454bea81cc527b96b011317->leave($__internal_c955a2f9b23d9597541983ba82fa8d4964ebca42a454bea81cc527b96b011317_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_45d5f171871e98320b2dc6de1403bb33072af33f940a5b07fb398764c1c7d4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d5f171871e98320b2dc6de1403bb33072af33f940a5b07fb398764c1c7d4b5->enter($__internal_45d5f171871e98320b2dc6de1403bb33072af33f940a5b07fb398764c1c7d4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da23884af3da875fbdf8ee94859c398b01d944063130e3d108d05def8473ab12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da23884af3da875fbdf8ee94859c398b01d944063130e3d108d05def8473ab12->enter($__internal_da23884af3da875fbdf8ee94859c398b01d944063130e3d108d05def8473ab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_da23884af3da875fbdf8ee94859c398b01d944063130e3d108d05def8473ab12->leave($__internal_da23884af3da875fbdf8ee94859c398b01d944063130e3d108d05def8473ab12_prof);

        
        $__internal_45d5f171871e98320b2dc6de1403bb33072af33f940a5b07fb398764c1c7d4b5->leave($__internal_45d5f171871e98320b2dc6de1403bb33072af33f940a5b07fb398764c1c7d4b5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_03d1bfaaa83828278524cc1447e8c8d6389331b08cfbe5737bd26fd6405155b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d1bfaaa83828278524cc1447e8c8d6389331b08cfbe5737bd26fd6405155b7->enter($__internal_03d1bfaaa83828278524cc1447e8c8d6389331b08cfbe5737bd26fd6405155b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f1934c67cb576c4e43367651d4f7c0cec0a321dc22de617cdbcb91ae7d7f02b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1934c67cb576c4e43367651d4f7c0cec0a321dc22de617cdbcb91ae7d7f02b4->enter($__internal_f1934c67cb576c4e43367651d4f7c0cec0a321dc22de617cdbcb91ae7d7f02b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f1934c67cb576c4e43367651d4f7c0cec0a321dc22de617cdbcb91ae7d7f02b4->leave($__internal_f1934c67cb576c4e43367651d4f7c0cec0a321dc22de617cdbcb91ae7d7f02b4_prof);

        
        $__internal_03d1bfaaa83828278524cc1447e8c8d6389331b08cfbe5737bd26fd6405155b7->leave($__internal_03d1bfaaa83828278524cc1447e8c8d6389331b08cfbe5737bd26fd6405155b7_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d33d5e0ec1cddf40166d5b61b895b22ea377f5f707905df168edd171b6c8ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d33d5e0ec1cddf40166d5b61b895b22ea377f5f707905df168edd171b6c8ef0->enter($__internal_9d33d5e0ec1cddf40166d5b61b895b22ea377f5f707905df168edd171b6c8ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a185da0af4a6d9f794a0e0cf07055fcf3dcaad441d4b1d8cdc7c4c46d8308fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a185da0af4a6d9f794a0e0cf07055fcf3dcaad441d4b1d8cdc7c4c46d8308fbc->enter($__internal_a185da0af4a6d9f794a0e0cf07055fcf3dcaad441d4b1d8cdc7c4c46d8308fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/choixcustom.js"), "html", null, true);
        echo "\"></script>
          ";
        
        $__internal_a185da0af4a6d9f794a0e0cf07055fcf3dcaad441d4b1d8cdc7c4c46d8308fbc->leave($__internal_a185da0af4a6d9f794a0e0cf07055fcf3dcaad441d4b1d8cdc7c4c46d8308fbc_prof);

        
        $__internal_9d33d5e0ec1cddf40166d5b61b895b22ea377f5f707905df168edd171b6c8ef0->leave($__internal_9d33d5e0ec1cddf40166d5b61b895b22ea377f5f707905df168edd171b6c8ef0_prof);

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
 
", "custom/tissu.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\tissu.html.twig");
    }
}
