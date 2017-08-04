<?php

/* paiement/charge.html.twig */
class __TwigTemplate_9e67abaf522f87818e1b5b0d7520ac22c970db1b3d4dda2388541cf52f3db153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "paiement/charge.html.twig", 1);
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
        $__internal_455b7eb5b44a98267507306b430fd3a1a6871348ba8ee0e109b73b5785f519f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455b7eb5b44a98267507306b430fd3a1a6871348ba8ee0e109b73b5785f519f1->enter($__internal_455b7eb5b44a98267507306b430fd3a1a6871348ba8ee0e109b73b5785f519f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paiement/charge.html.twig"));

        $__internal_5eaf80f56ff2992e669285dfff021814d67fac870d2b445b55c39b37edb29583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eaf80f56ff2992e669285dfff021814d67fac870d2b445b55c39b37edb29583->enter($__internal_5eaf80f56ff2992e669285dfff021814d67fac870d2b445b55c39b37edb29583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paiement/charge.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455b7eb5b44a98267507306b430fd3a1a6871348ba8ee0e109b73b5785f519f1->leave($__internal_455b7eb5b44a98267507306b430fd3a1a6871348ba8ee0e109b73b5785f519f1_prof);

        
        $__internal_5eaf80f56ff2992e669285dfff021814d67fac870d2b445b55c39b37edb29583->leave($__internal_5eaf80f56ff2992e669285dfff021814d67fac870d2b445b55c39b37edb29583_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5034f6186e384591c606ef4e9a748aa8b8ce97a91407d3d3f38e07d853d1f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5034f6186e384591c606ef4e9a748aa8b8ce97a91407d3d3f38e07d853d1f39->enter($__internal_f5034f6186e384591c606ef4e9a748aa8b8ce97a91407d3d3f38e07d853d1f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65a6b04a01b22fa383117ba85ca1471032a17004d516788a344cd52b196739b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a6b04a01b22fa383117ba85ca1471032a17004d516788a344cd52b196739b6->enter($__internal_65a6b04a01b22fa383117ba85ca1471032a17004d516788a344cd52b196739b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement";
        
        $__internal_65a6b04a01b22fa383117ba85ca1471032a17004d516788a344cd52b196739b6->leave($__internal_65a6b04a01b22fa383117ba85ca1471032a17004d516788a344cd52b196739b6_prof);

        
        $__internal_f5034f6186e384591c606ef4e9a748aa8b8ce97a91407d3d3f38e07d853d1f39->leave($__internal_f5034f6186e384591c606ef4e9a748aa8b8ce97a91407d3d3f38e07d853d1f39_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ea8d2c119bda000601c782af4b654c0d9cdca52654c4a09017955268ce321a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea8d2c119bda000601c782af4b654c0d9cdca52654c4a09017955268ce321a2->enter($__internal_2ea8d2c119bda000601c782af4b654c0d9cdca52654c4a09017955268ce321a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c3e774a615337a08bfa6d598b0b2971db1c55677de8f2e25e0b8a03b63688fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e774a615337a08bfa6d598b0b2971db1c55677de8f2e25e0b8a03b63688fe8->enter($__internal_c3e774a615337a08bfa6d598b0b2971db1c55677de8f2e25e0b8a03b63688fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Paiement accepté !</h1>
    
    <div class='container'>
        Félicitations ! Vous recevrez votre commande sous 3 semaines.<br>
        Toute l'équipe de Custom-shirt.com vous remercie pour votre confiance.<br><hr><br>
        
        Vous pouvez suivre vos commandes depuis votre <a href='";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "' >page profil</a>.<br>
        Pour toute question, n'hésitez pas à <a href='";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "'>nous contacter !</a> 
        
    </div>
    
";
        
        $__internal_c3e774a615337a08bfa6d598b0b2971db1c55677de8f2e25e0b8a03b63688fe8->leave($__internal_c3e774a615337a08bfa6d598b0b2971db1c55677de8f2e25e0b8a03b63688fe8_prof);

        
        $__internal_2ea8d2c119bda000601c782af4b654c0d9cdca52654c4a09017955268ce321a2->leave($__internal_2ea8d2c119bda000601c782af4b654c0d9cdca52654c4a09017955268ce321a2_prof);

    }

    public function getTemplateName()
    {
        return "paiement/charge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <h1>Paiement accepté !</h1>
    
    <div class='container'>
        Félicitations ! Vous recevrez votre commande sous 3 semaines.<br>
        Toute l'équipe de Custom-shirt.com vous remercie pour votre confiance.<br><hr><br>
        
        Vous pouvez suivre vos commandes depuis votre <a href='{{ path('profile') }}' >page profil</a>.<br>
        Pour toute question, n'hésitez pas à <a href='{{ path('contact') }}'>nous contacter !</a> 
        
    </div>
    
{% endblock %}", "paiement/charge.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\paiement\\charge.html.twig");
    }
}
