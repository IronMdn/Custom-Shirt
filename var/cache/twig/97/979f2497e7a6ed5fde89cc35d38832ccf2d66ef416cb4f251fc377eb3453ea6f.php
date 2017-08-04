<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6d9cfdda2d9c7e872bb6f42d92600b38dff21ad9feed02d8c637ea35e8f10052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c48896308571e79b8291e4a93a2532f804f531922d8be345d86d4ebe907ca27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c48896308571e79b8291e4a93a2532f804f531922d8be345d86d4ebe907ca27->enter($__internal_9c48896308571e79b8291e4a93a2532f804f531922d8be345d86d4ebe907ca27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d932d4e84ce33bb524b3c6f91a75069a9b207f011d01c20b1f6b3c72b95826dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d932d4e84ce33bb524b3c6f91a75069a9b207f011d01c20b1f6b3c72b95826dd->enter($__internal_d932d4e84ce33bb524b3c6f91a75069a9b207f011d01c20b1f6b3c72b95826dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c48896308571e79b8291e4a93a2532f804f531922d8be345d86d4ebe907ca27->leave($__internal_9c48896308571e79b8291e4a93a2532f804f531922d8be345d86d4ebe907ca27_prof);

        
        $__internal_d932d4e84ce33bb524b3c6f91a75069a9b207f011d01c20b1f6b3c72b95826dd->leave($__internal_d932d4e84ce33bb524b3c6f91a75069a9b207f011d01c20b1f6b3c72b95826dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8322b1c46e4f596b7ff134b6377766425c1cbebaf371d4439477c31ab798cd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8322b1c46e4f596b7ff134b6377766425c1cbebaf371d4439477c31ab798cd9e->enter($__internal_8322b1c46e4f596b7ff134b6377766425c1cbebaf371d4439477c31ab798cd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4bad088fe021f2a36c9e0eaf55a2ed67ca8900fb58aeb5074bf01442ba709390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bad088fe021f2a36c9e0eaf55a2ed67ca8900fb58aeb5074bf01442ba709390->enter($__internal_4bad088fe021f2a36c9e0eaf55a2ed67ca8900fb58aeb5074bf01442ba709390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4bad088fe021f2a36c9e0eaf55a2ed67ca8900fb58aeb5074bf01442ba709390->leave($__internal_4bad088fe021f2a36c9e0eaf55a2ed67ca8900fb58aeb5074bf01442ba709390_prof);

        
        $__internal_8322b1c46e4f596b7ff134b6377766425c1cbebaf371d4439477c31ab798cd9e->leave($__internal_8322b1c46e4f596b7ff134b6377766425c1cbebaf371d4439477c31ab798cd9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a20cf908b0f9e950640c2085820cee97eeddeeb06d722da85ced8371f0009496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20cf908b0f9e950640c2085820cee97eeddeeb06d722da85ced8371f0009496->enter($__internal_a20cf908b0f9e950640c2085820cee97eeddeeb06d722da85ced8371f0009496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30a4538e19b6cc2622443f9d519094656dad0ecd0d79e14274b0e1b90daafd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a4538e19b6cc2622443f9d519094656dad0ecd0d79e14274b0e1b90daafd98->enter($__internal_30a4538e19b6cc2622443f9d519094656dad0ecd0d79e14274b0e1b90daafd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30a4538e19b6cc2622443f9d519094656dad0ecd0d79e14274b0e1b90daafd98->leave($__internal_30a4538e19b6cc2622443f9d519094656dad0ecd0d79e14274b0e1b90daafd98_prof);

        
        $__internal_a20cf908b0f9e950640c2085820cee97eeddeeb06d722da85ced8371f0009496->leave($__internal_a20cf908b0f9e950640c2085820cee97eeddeeb06d722da85ced8371f0009496_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb65ccce91b30a11328a5b6ab132654bf51dfc99a1ab22a06b89c9a5247b24d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb65ccce91b30a11328a5b6ab132654bf51dfc99a1ab22a06b89c9a5247b24d2->enter($__internal_bb65ccce91b30a11328a5b6ab132654bf51dfc99a1ab22a06b89c9a5247b24d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9fe6638374edda974397e2a381fd62c88372b63d715fd0d57c22b0475b4c867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fe6638374edda974397e2a381fd62c88372b63d715fd0d57c22b0475b4c867->enter($__internal_c9fe6638374edda974397e2a381fd62c88372b63d715fd0d57c22b0475b4c867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9fe6638374edda974397e2a381fd62c88372b63d715fd0d57c22b0475b4c867->leave($__internal_c9fe6638374edda974397e2a381fd62c88372b63d715fd0d57c22b0475b4c867_prof);

        
        $__internal_bb65ccce91b30a11328a5b6ab132654bf51dfc99a1ab22a06b89c9a5247b24d2->leave($__internal_bb65ccce91b30a11328a5b6ab132654bf51dfc99a1ab22a06b89c9a5247b24d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\cust\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
