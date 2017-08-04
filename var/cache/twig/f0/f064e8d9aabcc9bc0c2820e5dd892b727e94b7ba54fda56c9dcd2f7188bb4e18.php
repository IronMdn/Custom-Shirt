<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ed2292e9b4965359c2e4537a4922a317fe5a3865ce85bebd1823b2a572fec345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_40ce5b30cd9c2356d8eac4864bcdecd395e3658067effda6dcf821b70d86197f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ce5b30cd9c2356d8eac4864bcdecd395e3658067effda6dcf821b70d86197f->enter($__internal_40ce5b30cd9c2356d8eac4864bcdecd395e3658067effda6dcf821b70d86197f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0a835e9d3d9af625020c7a0a2635eb1e7da631612167cd955da00fb45d9722c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a835e9d3d9af625020c7a0a2635eb1e7da631612167cd955da00fb45d9722c2->enter($__internal_0a835e9d3d9af625020c7a0a2635eb1e7da631612167cd955da00fb45d9722c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40ce5b30cd9c2356d8eac4864bcdecd395e3658067effda6dcf821b70d86197f->leave($__internal_40ce5b30cd9c2356d8eac4864bcdecd395e3658067effda6dcf821b70d86197f_prof);

        
        $__internal_0a835e9d3d9af625020c7a0a2635eb1e7da631612167cd955da00fb45d9722c2->leave($__internal_0a835e9d3d9af625020c7a0a2635eb1e7da631612167cd955da00fb45d9722c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63e9fea6256fc491db88c7c49739a2da6213e11936cdfeffbc32633c3ffb5a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e9fea6256fc491db88c7c49739a2da6213e11936cdfeffbc32633c3ffb5a3a->enter($__internal_63e9fea6256fc491db88c7c49739a2da6213e11936cdfeffbc32633c3ffb5a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1708e6aba0d98c546702c08439d0d01fea068b589ef18d9118101cb437abacf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1708e6aba0d98c546702c08439d0d01fea068b589ef18d9118101cb437abacf1->enter($__internal_1708e6aba0d98c546702c08439d0d01fea068b589ef18d9118101cb437abacf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1708e6aba0d98c546702c08439d0d01fea068b589ef18d9118101cb437abacf1->leave($__internal_1708e6aba0d98c546702c08439d0d01fea068b589ef18d9118101cb437abacf1_prof);

        
        $__internal_63e9fea6256fc491db88c7c49739a2da6213e11936cdfeffbc32633c3ffb5a3a->leave($__internal_63e9fea6256fc491db88c7c49739a2da6213e11936cdfeffbc32633c3ffb5a3a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22ea0b2052bf71e3a6f14ebb06fa44af35e8b12b8146591fb807e4ce4d0414f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ea0b2052bf71e3a6f14ebb06fa44af35e8b12b8146591fb807e4ce4d0414f5->enter($__internal_22ea0b2052bf71e3a6f14ebb06fa44af35e8b12b8146591fb807e4ce4d0414f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_668b7c02b4f042db87096afbcd52b2997bb5193234264d1fab437a562c0594ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668b7c02b4f042db87096afbcd52b2997bb5193234264d1fab437a562c0594ba->enter($__internal_668b7c02b4f042db87096afbcd52b2997bb5193234264d1fab437a562c0594ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_668b7c02b4f042db87096afbcd52b2997bb5193234264d1fab437a562c0594ba->leave($__internal_668b7c02b4f042db87096afbcd52b2997bb5193234264d1fab437a562c0594ba_prof);

        
        $__internal_22ea0b2052bf71e3a6f14ebb06fa44af35e8b12b8146591fb807e4ce4d0414f5->leave($__internal_22ea0b2052bf71e3a6f14ebb06fa44af35e8b12b8146591fb807e4ce4d0414f5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce251423d2eaca37bb84154a0e80f562a7af0f911b0641ec970e3c8a720edcc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce251423d2eaca37bb84154a0e80f562a7af0f911b0641ec970e3c8a720edcc7->enter($__internal_ce251423d2eaca37bb84154a0e80f562a7af0f911b0641ec970e3c8a720edcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce1c81814088651fe42651ad2c1e2232d144ec4a7189e976353605048320a34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1c81814088651fe42651ad2c1e2232d144ec4a7189e976353605048320a34a->enter($__internal_ce1c81814088651fe42651ad2c1e2232d144ec4a7189e976353605048320a34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ce1c81814088651fe42651ad2c1e2232d144ec4a7189e976353605048320a34a->leave($__internal_ce1c81814088651fe42651ad2c1e2232d144ec4a7189e976353605048320a34a_prof);

        
        $__internal_ce251423d2eaca37bb84154a0e80f562a7af0f911b0641ec970e3c8a720edcc7->leave($__internal_ce251423d2eaca37bb84154a0e80f562a7af0f911b0641ec970e3c8a720edcc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
