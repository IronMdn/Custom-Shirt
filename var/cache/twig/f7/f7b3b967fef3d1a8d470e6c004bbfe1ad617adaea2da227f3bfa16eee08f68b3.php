<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2e9c4b66ca726d3407ee7193ce08b7273863f91957ea82a3b3c2aa9256dce200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c4935904f82854d7796656a87105cbcc48582b151011269a8ef2c98dcb52a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4935904f82854d7796656a87105cbcc48582b151011269a8ef2c98dcb52a6f->enter($__internal_5c4935904f82854d7796656a87105cbcc48582b151011269a8ef2c98dcb52a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5ec466c7c075f1eee8d61b04b51200df896c87e3fc91dd06706d2b1ec7be2094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec466c7c075f1eee8d61b04b51200df896c87e3fc91dd06706d2b1ec7be2094->enter($__internal_5ec466c7c075f1eee8d61b04b51200df896c87e3fc91dd06706d2b1ec7be2094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c4935904f82854d7796656a87105cbcc48582b151011269a8ef2c98dcb52a6f->leave($__internal_5c4935904f82854d7796656a87105cbcc48582b151011269a8ef2c98dcb52a6f_prof);

        
        $__internal_5ec466c7c075f1eee8d61b04b51200df896c87e3fc91dd06706d2b1ec7be2094->leave($__internal_5ec466c7c075f1eee8d61b04b51200df896c87e3fc91dd06706d2b1ec7be2094_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fff0c4dbd2fba7f48105fdbacb1040d5beb3016577a2a00432f9f633006b4d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff0c4dbd2fba7f48105fdbacb1040d5beb3016577a2a00432f9f633006b4d8e->enter($__internal_fff0c4dbd2fba7f48105fdbacb1040d5beb3016577a2a00432f9f633006b4d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_100b8c5fb457941da7e18965419be1b1c6cbb1829e199327025a84c9c9444f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100b8c5fb457941da7e18965419be1b1c6cbb1829e199327025a84c9c9444f78->enter($__internal_100b8c5fb457941da7e18965419be1b1c6cbb1829e199327025a84c9c9444f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_100b8c5fb457941da7e18965419be1b1c6cbb1829e199327025a84c9c9444f78->leave($__internal_100b8c5fb457941da7e18965419be1b1c6cbb1829e199327025a84c9c9444f78_prof);

        
        $__internal_fff0c4dbd2fba7f48105fdbacb1040d5beb3016577a2a00432f9f633006b4d8e->leave($__internal_fff0c4dbd2fba7f48105fdbacb1040d5beb3016577a2a00432f9f633006b4d8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
