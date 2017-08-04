<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3673f67ebac4b49d0b52399a09d215640b3061627dcd153ac641c8e96d382797 extends Twig_Template
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
        $__internal_10319b511f9b205e6a53504fc5d1172b3e42c5ed4134b1cfab240f4025f00c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10319b511f9b205e6a53504fc5d1172b3e42c5ed4134b1cfab240f4025f00c97->enter($__internal_10319b511f9b205e6a53504fc5d1172b3e42c5ed4134b1cfab240f4025f00c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f93ed09048fa21eaf272cf7d59b2d561ed488ba3f2d88334498c413d8b12467b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93ed09048fa21eaf272cf7d59b2d561ed488ba3f2d88334498c413d8b12467b->enter($__internal_f93ed09048fa21eaf272cf7d59b2d561ed488ba3f2d88334498c413d8b12467b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10319b511f9b205e6a53504fc5d1172b3e42c5ed4134b1cfab240f4025f00c97->leave($__internal_10319b511f9b205e6a53504fc5d1172b3e42c5ed4134b1cfab240f4025f00c97_prof);

        
        $__internal_f93ed09048fa21eaf272cf7d59b2d561ed488ba3f2d88334498c413d8b12467b->leave($__internal_f93ed09048fa21eaf272cf7d59b2d561ed488ba3f2d88334498c413d8b12467b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51670d8b74ce2f41516ced5d6e31c6ce3f7fcd4b8ad65d61cf1c15aab93f2066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51670d8b74ce2f41516ced5d6e31c6ce3f7fcd4b8ad65d61cf1c15aab93f2066->enter($__internal_51670d8b74ce2f41516ced5d6e31c6ce3f7fcd4b8ad65d61cf1c15aab93f2066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_19a954b211c4d6770f86cf03232b4e1f92dd96ac407c1d2d5abd255565b0b4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a954b211c4d6770f86cf03232b4e1f92dd96ac407c1d2d5abd255565b0b4ef->enter($__internal_19a954b211c4d6770f86cf03232b4e1f92dd96ac407c1d2d5abd255565b0b4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19a954b211c4d6770f86cf03232b4e1f92dd96ac407c1d2d5abd255565b0b4ef->leave($__internal_19a954b211c4d6770f86cf03232b4e1f92dd96ac407c1d2d5abd255565b0b4ef_prof);

        
        $__internal_51670d8b74ce2f41516ced5d6e31c6ce3f7fcd4b8ad65d61cf1c15aab93f2066->leave($__internal_51670d8b74ce2f41516ced5d6e31c6ce3f7fcd4b8ad65d61cf1c15aab93f2066_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f442c0c62004c5a9b70f7f8ce0965160e9cb66a6b0dd93295a359ea195b08c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f442c0c62004c5a9b70f7f8ce0965160e9cb66a6b0dd93295a359ea195b08c9->enter($__internal_0f442c0c62004c5a9b70f7f8ce0965160e9cb66a6b0dd93295a359ea195b08c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d74d6f69b7c274fb0b236c7fceaff50e692d2368e1f08a2cc3936339d0c2937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d74d6f69b7c274fb0b236c7fceaff50e692d2368e1f08a2cc3936339d0c2937->enter($__internal_0d74d6f69b7c274fb0b236c7fceaff50e692d2368e1f08a2cc3936339d0c2937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d74d6f69b7c274fb0b236c7fceaff50e692d2368e1f08a2cc3936339d0c2937->leave($__internal_0d74d6f69b7c274fb0b236c7fceaff50e692d2368e1f08a2cc3936339d0c2937_prof);

        
        $__internal_0f442c0c62004c5a9b70f7f8ce0965160e9cb66a6b0dd93295a359ea195b08c9->leave($__internal_0f442c0c62004c5a9b70f7f8ce0965160e9cb66a6b0dd93295a359ea195b08c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a2330776ef624b43b3d0440eaeedbc02767997b7c5914083419e920a2e078b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2330776ef624b43b3d0440eaeedbc02767997b7c5914083419e920a2e078b6->enter($__internal_2a2330776ef624b43b3d0440eaeedbc02767997b7c5914083419e920a2e078b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dca9781510592ae173c838995e06410deeff6cf3558b2fe42cbfe9fcd16ed96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca9781510592ae173c838995e06410deeff6cf3558b2fe42cbfe9fcd16ed96c->enter($__internal_dca9781510592ae173c838995e06410deeff6cf3558b2fe42cbfe9fcd16ed96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dca9781510592ae173c838995e06410deeff6cf3558b2fe42cbfe9fcd16ed96c->leave($__internal_dca9781510592ae173c838995e06410deeff6cf3558b2fe42cbfe9fcd16ed96c_prof);

        
        $__internal_2a2330776ef624b43b3d0440eaeedbc02767997b7c5914083419e920a2e078b6->leave($__internal_2a2330776ef624b43b3d0440eaeedbc02767997b7c5914083419e920a2e078b6_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
