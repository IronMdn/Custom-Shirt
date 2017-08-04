<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_57e9f0c0c5e3a484670245e191da81093d746d32955a5b792b871a0c66b8640e extends Twig_Template
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
        $__internal_7065426c1e355230e5b0fb4529a1d70cbf321053d1e35d1f5cd816549cb8414e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7065426c1e355230e5b0fb4529a1d70cbf321053d1e35d1f5cd816549cb8414e->enter($__internal_7065426c1e355230e5b0fb4529a1d70cbf321053d1e35d1f5cd816549cb8414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5574f96e672ab72eb6e256142e6aed999e5f215d6baf952b7aac76de8439f9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5574f96e672ab72eb6e256142e6aed999e5f215d6baf952b7aac76de8439f9e9->enter($__internal_5574f96e672ab72eb6e256142e6aed999e5f215d6baf952b7aac76de8439f9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7065426c1e355230e5b0fb4529a1d70cbf321053d1e35d1f5cd816549cb8414e->leave($__internal_7065426c1e355230e5b0fb4529a1d70cbf321053d1e35d1f5cd816549cb8414e_prof);

        
        $__internal_5574f96e672ab72eb6e256142e6aed999e5f215d6baf952b7aac76de8439f9e9->leave($__internal_5574f96e672ab72eb6e256142e6aed999e5f215d6baf952b7aac76de8439f9e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b16eb1087f621614ab43a6b4b41620856262adfa3398f8c27ea2d77243a9283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b16eb1087f621614ab43a6b4b41620856262adfa3398f8c27ea2d77243a9283->enter($__internal_8b16eb1087f621614ab43a6b4b41620856262adfa3398f8c27ea2d77243a9283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d22a6d678f4b5fa0025d3d22b838c4a2141f4e2a3cd9b3b5149fef5e24b27b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22a6d678f4b5fa0025d3d22b838c4a2141f4e2a3cd9b3b5149fef5e24b27b6f->enter($__internal_d22a6d678f4b5fa0025d3d22b838c4a2141f4e2a3cd9b3b5149fef5e24b27b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d22a6d678f4b5fa0025d3d22b838c4a2141f4e2a3cd9b3b5149fef5e24b27b6f->leave($__internal_d22a6d678f4b5fa0025d3d22b838c4a2141f4e2a3cd9b3b5149fef5e24b27b6f_prof);

        
        $__internal_8b16eb1087f621614ab43a6b4b41620856262adfa3398f8c27ea2d77243a9283->leave($__internal_8b16eb1087f621614ab43a6b4b41620856262adfa3398f8c27ea2d77243a9283_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\cust\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
