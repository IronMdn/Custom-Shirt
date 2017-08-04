<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0034cedc0ca711ec29c7b502edd5c37c49c723048039e7ed2c5c6638c5beeefc extends Twig_Template
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
        $__internal_1a55f11c8ced9e54acc42de3d0398e93382399dcd511b56d8e5c1fc8572a7442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a55f11c8ced9e54acc42de3d0398e93382399dcd511b56d8e5c1fc8572a7442->enter($__internal_1a55f11c8ced9e54acc42de3d0398e93382399dcd511b56d8e5c1fc8572a7442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_911a25f30c823f8881cf7c9e3fc02f6bedf6c9516b33766cebd73d7168a872c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911a25f30c823f8881cf7c9e3fc02f6bedf6c9516b33766cebd73d7168a872c7->enter($__internal_911a25f30c823f8881cf7c9e3fc02f6bedf6c9516b33766cebd73d7168a872c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a55f11c8ced9e54acc42de3d0398e93382399dcd511b56d8e5c1fc8572a7442->leave($__internal_1a55f11c8ced9e54acc42de3d0398e93382399dcd511b56d8e5c1fc8572a7442_prof);

        
        $__internal_911a25f30c823f8881cf7c9e3fc02f6bedf6c9516b33766cebd73d7168a872c7->leave($__internal_911a25f30c823f8881cf7c9e3fc02f6bedf6c9516b33766cebd73d7168a872c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bbb4a29ad1cab6082f605a55d140b7f958a42aadb75772301b1ef30dd68f397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbb4a29ad1cab6082f605a55d140b7f958a42aadb75772301b1ef30dd68f397->enter($__internal_3bbb4a29ad1cab6082f605a55d140b7f958a42aadb75772301b1ef30dd68f397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c6ccf3718f8a184e2c4b27a64d2e9a94a48ea491674cfb482715c998dd08406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6ccf3718f8a184e2c4b27a64d2e9a94a48ea491674cfb482715c998dd08406->enter($__internal_3c6ccf3718f8a184e2c4b27a64d2e9a94a48ea491674cfb482715c998dd08406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3c6ccf3718f8a184e2c4b27a64d2e9a94a48ea491674cfb482715c998dd08406->leave($__internal_3c6ccf3718f8a184e2c4b27a64d2e9a94a48ea491674cfb482715c998dd08406_prof);

        
        $__internal_3bbb4a29ad1cab6082f605a55d140b7f958a42aadb75772301b1ef30dd68f397->leave($__internal_3bbb4a29ad1cab6082f605a55d140b7f958a42aadb75772301b1ef30dd68f397_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be1da9a5a1d8dfa097caadadcfdc597f59d736ecde6e0c6f16f597edc24798cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1da9a5a1d8dfa097caadadcfdc597f59d736ecde6e0c6f16f597edc24798cb->enter($__internal_be1da9a5a1d8dfa097caadadcfdc597f59d736ecde6e0c6f16f597edc24798cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8356fc08e5209464f6dd57a76a417328ff4d5e47bcc8fed2a0abe70a592da27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8356fc08e5209464f6dd57a76a417328ff4d5e47bcc8fed2a0abe70a592da27f->enter($__internal_8356fc08e5209464f6dd57a76a417328ff4d5e47bcc8fed2a0abe70a592da27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8356fc08e5209464f6dd57a76a417328ff4d5e47bcc8fed2a0abe70a592da27f->leave($__internal_8356fc08e5209464f6dd57a76a417328ff4d5e47bcc8fed2a0abe70a592da27f_prof);

        
        $__internal_be1da9a5a1d8dfa097caadadcfdc597f59d736ecde6e0c6f16f597edc24798cb->leave($__internal_be1da9a5a1d8dfa097caadadcfdc597f59d736ecde6e0c6f16f597edc24798cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35871261e56f6cdc09e5804a2ebf19de7026b988786f1ad5bdc77c8ca38692db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35871261e56f6cdc09e5804a2ebf19de7026b988786f1ad5bdc77c8ca38692db->enter($__internal_35871261e56f6cdc09e5804a2ebf19de7026b988786f1ad5bdc77c8ca38692db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_34fe04ea5de9281253e17d5929b9e061bc8288c3fa5e98ff292e25e4b74235ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fe04ea5de9281253e17d5929b9e061bc8288c3fa5e98ff292e25e4b74235ac->enter($__internal_34fe04ea5de9281253e17d5929b9e061bc8288c3fa5e98ff292e25e4b74235ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_34fe04ea5de9281253e17d5929b9e061bc8288c3fa5e98ff292e25e4b74235ac->leave($__internal_34fe04ea5de9281253e17d5929b9e061bc8288c3fa5e98ff292e25e4b74235ac_prof);

        
        $__internal_35871261e56f6cdc09e5804a2ebf19de7026b988786f1ad5bdc77c8ca38692db->leave($__internal_35871261e56f6cdc09e5804a2ebf19de7026b988786f1ad5bdc77c8ca38692db_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
