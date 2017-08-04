<?php

/* basket/basketPayment.html.twig */
class __TwigTemplate_525b7db49a2c7079db4703789f7131454ebde8a217c9c19e2d7466b825ff7b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "basket/basketPayment.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6051fbfcdbb2941e2b48a97a671321fc802230d08b033823b8f4268d67c0d30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6051fbfcdbb2941e2b48a97a671321fc802230d08b033823b8f4268d67c0d30b->enter($__internal_6051fbfcdbb2941e2b48a97a671321fc802230d08b033823b8f4268d67c0d30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/basketPayment.html.twig"));

        $__internal_dbf5b5c6cb94a13c15d4e93ca60146be5afa6779feaa54f494e3ae72cfb3e38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf5b5c6cb94a13c15d4e93ca60146be5afa6779feaa54f494e3ae72cfb3e38e->enter($__internal_dbf5b5c6cb94a13c15d4e93ca60146be5afa6779feaa54f494e3ae72cfb3e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/basketPayment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6051fbfcdbb2941e2b48a97a671321fc802230d08b033823b8f4268d67c0d30b->leave($__internal_6051fbfcdbb2941e2b48a97a671321fc802230d08b033823b8f4268d67c0d30b_prof);

        
        $__internal_dbf5b5c6cb94a13c15d4e93ca60146be5afa6779feaa54f494e3ae72cfb3e38e->leave($__internal_dbf5b5c6cb94a13c15d4e93ca60146be5afa6779feaa54f494e3ae72cfb3e38e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6443ddfc840373b73c7f7058cd302388a1a9597e1ae2619f2817670d252895d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6443ddfc840373b73c7f7058cd302388a1a9597e1ae2619f2817670d252895d7->enter($__internal_6443ddfc840373b73c7f7058cd302388a1a9597e1ae2619f2817670d252895d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d6dea0c4650a18d268a1b71e8e9d3b35d10364d1dfe7033f9898402df79ea16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6dea0c4650a18d268a1b71e8e9d3b35d10364d1dfe7033f9898402df79ea16->enter($__internal_7d6dea0c4650a18d268a1b71e8e9d3b35d10364d1dfe7033f9898402df79ea16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement";
        
        $__internal_7d6dea0c4650a18d268a1b71e8e9d3b35d10364d1dfe7033f9898402df79ea16->leave($__internal_7d6dea0c4650a18d268a1b71e8e9d3b35d10364d1dfe7033f9898402df79ea16_prof);

        
        $__internal_6443ddfc840373b73c7f7058cd302388a1a9597e1ae2619f2817670d252895d7->leave($__internal_6443ddfc840373b73c7f7058cd302388a1a9597e1ae2619f2817670d252895d7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_911439806b54ba8d4c5e56dc5111758c493233ecd7ddef0fbba952363dd18d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911439806b54ba8d4c5e56dc5111758c493233ecd7ddef0fbba952363dd18d15->enter($__internal_911439806b54ba8d4c5e56dc5111758c493233ecd7ddef0fbba952363dd18d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_849d1c97e418dd961ee7cbf2ac9682372bbdc1ebb744aab128d6d8816068c2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849d1c97e418dd961ee7cbf2ac9682372bbdc1ebb744aab128d6d8816068c2d8->enter($__internal_849d1c97e418dd961ee7cbf2ac9682372bbdc1ebb744aab128d6d8816068c2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_charge");
        echo "\" method=\"POST\">
        <script
            src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
            data-key=\"pk_test_6pRNASCoBOKtIshFeQd4XMUh\"
            data-amount=\"";
        // line 10
        echo twig_escape_filter($this->env, ((isset($context["basketTotalAmount"]) ? $context["basketTotalAmount"] : $this->getContext($context, "basketTotalAmount")) * 100), "html", null, true);
        echo "\"
            data-name=\"Custom-shirt.com\"
            data-description=\"Chemise sur-mesure\"
            data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
            data-locale=\"auto\"
            data-currency='EUR'
            data-label='Payer ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["basketTotalAmount"]) ? $context["basketTotalAmount"] : $this->getContext($context, "basketTotalAmount")), "html", null, true);
        echo " € '
            data-zip-code=\"true\">
        </script>
    </form>
";
        
        $__internal_849d1c97e418dd961ee7cbf2ac9682372bbdc1ebb744aab128d6d8816068c2d8->leave($__internal_849d1c97e418dd961ee7cbf2ac9682372bbdc1ebb744aab128d6d8816068c2d8_prof);

        
        $__internal_911439806b54ba8d4c5e56dc5111758c493233ecd7ddef0fbba952363dd18d15->leave($__internal_911439806b54ba8d4c5e56dc5111758c493233ecd7ddef0fbba952363dd18d15_prof);

    }

    public function getTemplateName()
    {
        return "basket/basketPayment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  76 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Paiement' %}
    
{% block content %}
    <form action=\"{{ path('basket_charge') }}\" method=\"POST\">
        <script
            src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
            data-key=\"pk_test_6pRNASCoBOKtIshFeQd4XMUh\"
            data-amount=\"{{ basketTotalAmount * 100 }}\"
            data-name=\"Custom-shirt.com\"
            data-description=\"Chemise sur-mesure\"
            data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
            data-locale=\"auto\"
            data-currency='EUR'
            data-label='Payer {{ basketTotalAmount }} € '
            data-zip-code=\"true\">
        </script>
    </form>
{% endblock %}


", "basket/basketPayment.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\basket\\basketPayment.html.twig");
    }
}
