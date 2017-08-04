<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_455e925894dc4da25175295df4c8b0ad64f2ec1616a55fa7f662414ea5553c54 extends Twig_Template
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
        $__internal_fa69030646d69cfec314e1dcce878e7cbaa357cde75adc3b6b76307e6c7585f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa69030646d69cfec314e1dcce878e7cbaa357cde75adc3b6b76307e6c7585f3->enter($__internal_fa69030646d69cfec314e1dcce878e7cbaa357cde75adc3b6b76307e6c7585f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f96d688c6de947200609ef33be117f06c20c3d423f2d0a3ddc604d9bd465b27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96d688c6de947200609ef33be117f06c20c3d423f2d0a3ddc604d9bd465b27c->enter($__internal_f96d688c6de947200609ef33be117f06c20c3d423f2d0a3ddc604d9bd465b27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa69030646d69cfec314e1dcce878e7cbaa357cde75adc3b6b76307e6c7585f3->leave($__internal_fa69030646d69cfec314e1dcce878e7cbaa357cde75adc3b6b76307e6c7585f3_prof);

        
        $__internal_f96d688c6de947200609ef33be117f06c20c3d423f2d0a3ddc604d9bd465b27c->leave($__internal_f96d688c6de947200609ef33be117f06c20c3d423f2d0a3ddc604d9bd465b27c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_733500a43360092014ca886e91b6c2dcbe57a48757ef010d70b3106c66bbfbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733500a43360092014ca886e91b6c2dcbe57a48757ef010d70b3106c66bbfbdd->enter($__internal_733500a43360092014ca886e91b6c2dcbe57a48757ef010d70b3106c66bbfbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a6125216adb659edcf92c6d7c1276d29cf7296eb4cf2bbe38acc459e007b1500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6125216adb659edcf92c6d7c1276d29cf7296eb4cf2bbe38acc459e007b1500->enter($__internal_a6125216adb659edcf92c6d7c1276d29cf7296eb4cf2bbe38acc459e007b1500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6125216adb659edcf92c6d7c1276d29cf7296eb4cf2bbe38acc459e007b1500->leave($__internal_a6125216adb659edcf92c6d7c1276d29cf7296eb4cf2bbe38acc459e007b1500_prof);

        
        $__internal_733500a43360092014ca886e91b6c2dcbe57a48757ef010d70b3106c66bbfbdd->leave($__internal_733500a43360092014ca886e91b6c2dcbe57a48757ef010d70b3106c66bbfbdd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29927ef6e794455fa0aba1c543f67bcaa32bda6660bc0c9bf34d14c969f9ce41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29927ef6e794455fa0aba1c543f67bcaa32bda6660bc0c9bf34d14c969f9ce41->enter($__internal_29927ef6e794455fa0aba1c543f67bcaa32bda6660bc0c9bf34d14c969f9ce41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_35b1cca622187e29eb0c09da8c37656be55af9349baa11ae377632da5b44ac28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b1cca622187e29eb0c09da8c37656be55af9349baa11ae377632da5b44ac28->enter($__internal_35b1cca622187e29eb0c09da8c37656be55af9349baa11ae377632da5b44ac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35b1cca622187e29eb0c09da8c37656be55af9349baa11ae377632da5b44ac28->leave($__internal_35b1cca622187e29eb0c09da8c37656be55af9349baa11ae377632da5b44ac28_prof);

        
        $__internal_29927ef6e794455fa0aba1c543f67bcaa32bda6660bc0c9bf34d14c969f9ce41->leave($__internal_29927ef6e794455fa0aba1c543f67bcaa32bda6660bc0c9bf34d14c969f9ce41_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ceb7d217f422240a4265937577a41bdcda7c0d3addd2468b26c1c94c85bdf71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ceb7d217f422240a4265937577a41bdcda7c0d3addd2468b26c1c94c85bdf71->enter($__internal_7ceb7d217f422240a4265937577a41bdcda7c0d3addd2468b26c1c94c85bdf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa3d60e91fea733e541ec28be2b02fa9173a8ef20cd51d11391b716d472d92a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3d60e91fea733e541ec28be2b02fa9173a8ef20cd51d11391b716d472d92a5->enter($__internal_aa3d60e91fea733e541ec28be2b02fa9173a8ef20cd51d11391b716d472d92a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa3d60e91fea733e541ec28be2b02fa9173a8ef20cd51d11391b716d472d92a5->leave($__internal_aa3d60e91fea733e541ec28be2b02fa9173a8ef20cd51d11391b716d472d92a5_prof);

        
        $__internal_7ceb7d217f422240a4265937577a41bdcda7c0d3addd2468b26c1c94c85bdf71->leave($__internal_7ceb7d217f422240a4265937577a41bdcda7c0d3addd2468b26c1c94c85bdf71_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
