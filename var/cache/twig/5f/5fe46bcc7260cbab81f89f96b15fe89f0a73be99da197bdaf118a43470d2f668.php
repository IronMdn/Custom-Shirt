<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_28ec28ebb080407ffd993f1916e6bc65e86143716bf2651d8628baf2399d8341 extends Twig_Template
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
        $__internal_077f0fbe3225457008cbd918dc6f65aef20a9bea644579c22600cb4eccefec98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077f0fbe3225457008cbd918dc6f65aef20a9bea644579c22600cb4eccefec98->enter($__internal_077f0fbe3225457008cbd918dc6f65aef20a9bea644579c22600cb4eccefec98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1d2e806da3311253112e6ba35705bac819d7f16eb2f3170e343a8c8b34d5d2c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2e806da3311253112e6ba35705bac819d7f16eb2f3170e343a8c8b34d5d2c7->enter($__internal_1d2e806da3311253112e6ba35705bac819d7f16eb2f3170e343a8c8b34d5d2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_077f0fbe3225457008cbd918dc6f65aef20a9bea644579c22600cb4eccefec98->leave($__internal_077f0fbe3225457008cbd918dc6f65aef20a9bea644579c22600cb4eccefec98_prof);

        
        $__internal_1d2e806da3311253112e6ba35705bac819d7f16eb2f3170e343a8c8b34d5d2c7->leave($__internal_1d2e806da3311253112e6ba35705bac819d7f16eb2f3170e343a8c8b34d5d2c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ee3141e47a07d31ec25a6326a6970b10a192c8c054318979e57994467628a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee3141e47a07d31ec25a6326a6970b10a192c8c054318979e57994467628a12->enter($__internal_5ee3141e47a07d31ec25a6326a6970b10a192c8c054318979e57994467628a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6db2d65c4dc827405c05e172baafd15d8e2f3d2f2f79db1b06f3f3dc501bfc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db2d65c4dc827405c05e172baafd15d8e2f3d2f2f79db1b06f3f3dc501bfc7b->enter($__internal_6db2d65c4dc827405c05e172baafd15d8e2f3d2f2f79db1b06f3f3dc501bfc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6db2d65c4dc827405c05e172baafd15d8e2f3d2f2f79db1b06f3f3dc501bfc7b->leave($__internal_6db2d65c4dc827405c05e172baafd15d8e2f3d2f2f79db1b06f3f3dc501bfc7b_prof);

        
        $__internal_5ee3141e47a07d31ec25a6326a6970b10a192c8c054318979e57994467628a12->leave($__internal_5ee3141e47a07d31ec25a6326a6970b10a192c8c054318979e57994467628a12_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
