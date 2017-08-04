<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1df4f1027f45bf2ae07ef93b2d219687af7e10c808b732a7a8f6712b9959aa7b extends Twig_Template
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
        $__internal_c777cb285ce6f1781f3b970b16d0f1feef4724fbba65cb87aca1c6600cdc483b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c777cb285ce6f1781f3b970b16d0f1feef4724fbba65cb87aca1c6600cdc483b->enter($__internal_c777cb285ce6f1781f3b970b16d0f1feef4724fbba65cb87aca1c6600cdc483b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5f75ae4c81ef3754cabaf1ad2e59bd3073a37f7d52d19c1b9a007ab18e4edd60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f75ae4c81ef3754cabaf1ad2e59bd3073a37f7d52d19c1b9a007ab18e4edd60->enter($__internal_5f75ae4c81ef3754cabaf1ad2e59bd3073a37f7d52d19c1b9a007ab18e4edd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c777cb285ce6f1781f3b970b16d0f1feef4724fbba65cb87aca1c6600cdc483b->leave($__internal_c777cb285ce6f1781f3b970b16d0f1feef4724fbba65cb87aca1c6600cdc483b_prof);

        
        $__internal_5f75ae4c81ef3754cabaf1ad2e59bd3073a37f7d52d19c1b9a007ab18e4edd60->leave($__internal_5f75ae4c81ef3754cabaf1ad2e59bd3073a37f7d52d19c1b9a007ab18e4edd60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57b20ab038c6a14b3aa5dc5b5ba013db0d6a0871194ad85c0aef52f73c04c9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b20ab038c6a14b3aa5dc5b5ba013db0d6a0871194ad85c0aef52f73c04c9fe->enter($__internal_57b20ab038c6a14b3aa5dc5b5ba013db0d6a0871194ad85c0aef52f73c04c9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f0a5d97b5afaee72e67e0d593ed096d70a7e6c06dabd2ffd450fe69fedc69f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a5d97b5afaee72e67e0d593ed096d70a7e6c06dabd2ffd450fe69fedc69f00->enter($__internal_f0a5d97b5afaee72e67e0d593ed096d70a7e6c06dabd2ffd450fe69fedc69f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f0a5d97b5afaee72e67e0d593ed096d70a7e6c06dabd2ffd450fe69fedc69f00->leave($__internal_f0a5d97b5afaee72e67e0d593ed096d70a7e6c06dabd2ffd450fe69fedc69f00_prof);

        
        $__internal_57b20ab038c6a14b3aa5dc5b5ba013db0d6a0871194ad85c0aef52f73c04c9fe->leave($__internal_57b20ab038c6a14b3aa5dc5b5ba013db0d6a0871194ad85c0aef52f73c04c9fe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_222947e5ce976567906f1cdf049c4454fbb7b32d7f0b3a660927e51d0411012b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222947e5ce976567906f1cdf049c4454fbb7b32d7f0b3a660927e51d0411012b->enter($__internal_222947e5ce976567906f1cdf049c4454fbb7b32d7f0b3a660927e51d0411012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3230b5686c1eeafca823be092fd9f9720f9d16a74376face02a3650794072087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3230b5686c1eeafca823be092fd9f9720f9d16a74376face02a3650794072087->enter($__internal_3230b5686c1eeafca823be092fd9f9720f9d16a74376face02a3650794072087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3230b5686c1eeafca823be092fd9f9720f9d16a74376face02a3650794072087->leave($__internal_3230b5686c1eeafca823be092fd9f9720f9d16a74376face02a3650794072087_prof);

        
        $__internal_222947e5ce976567906f1cdf049c4454fbb7b32d7f0b3a660927e51d0411012b->leave($__internal_222947e5ce976567906f1cdf049c4454fbb7b32d7f0b3a660927e51d0411012b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccab1960ecb797d86e41a0636ed3922df4ce866f8d0858efde95bb07ff348a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccab1960ecb797d86e41a0636ed3922df4ce866f8d0858efde95bb07ff348a04->enter($__internal_ccab1960ecb797d86e41a0636ed3922df4ce866f8d0858efde95bb07ff348a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ca29c76e1cfca05aceb093fdf3c12952b08f6c9d1bbf824e35fac979354263d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca29c76e1cfca05aceb093fdf3c12952b08f6c9d1bbf824e35fac979354263d->enter($__internal_3ca29c76e1cfca05aceb093fdf3c12952b08f6c9d1bbf824e35fac979354263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3ca29c76e1cfca05aceb093fdf3c12952b08f6c9d1bbf824e35fac979354263d->leave($__internal_3ca29c76e1cfca05aceb093fdf3c12952b08f6c9d1bbf824e35fac979354263d_prof);

        
        $__internal_ccab1960ecb797d86e41a0636ed3922df4ce866f8d0858efde95bb07ff348a04->leave($__internal_ccab1960ecb797d86e41a0636ed3922df4ce866f8d0858efde95bb07ff348a04_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\cust\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
