<?php

/* annexes/page_contact.html.twig */
class __TwigTemplate_6b6125ccfb1f3b46ab07125cf89f0b9d346032c96098ed9c103632b0ad384888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "annexes/page_contact.html.twig", 1);
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
        $__internal_8036e615e765eba6f4d89c71efa53cb72367263f8e1d91001781f6e4839bca39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8036e615e765eba6f4d89c71efa53cb72367263f8e1d91001781f6e4839bca39->enter($__internal_8036e615e765eba6f4d89c71efa53cb72367263f8e1d91001781f6e4839bca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annexes/page_contact.html.twig"));

        $__internal_635a3df2c48033328afa7c55861a2ea8d24e0fde723b660d2ee5b6a4ed4cf80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635a3df2c48033328afa7c55861a2ea8d24e0fde723b660d2ee5b6a4ed4cf80c->enter($__internal_635a3df2c48033328afa7c55861a2ea8d24e0fde723b660d2ee5b6a4ed4cf80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annexes/page_contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8036e615e765eba6f4d89c71efa53cb72367263f8e1d91001781f6e4839bca39->leave($__internal_8036e615e765eba6f4d89c71efa53cb72367263f8e1d91001781f6e4839bca39_prof);

        
        $__internal_635a3df2c48033328afa7c55861a2ea8d24e0fde723b660d2ee5b6a4ed4cf80c->leave($__internal_635a3df2c48033328afa7c55861a2ea8d24e0fde723b660d2ee5b6a4ed4cf80c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02ecc921d535f1b0d945ab7789f894ba2b2c46ff23ca2c7306ec1cc0a82a20ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ecc921d535f1b0d945ab7789f894ba2b2c46ff23ca2c7306ec1cc0a82a20ad->enter($__internal_02ecc921d535f1b0d945ab7789f894ba2b2c46ff23ca2c7306ec1cc0a82a20ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_905545f80d93fd2a4d7a682cee4c707dd267b7d42fc32f6eb71594e55dcbdcad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905545f80d93fd2a4d7a682cee4c707dd267b7d42fc32f6eb71594e55dcbdcad->enter($__internal_905545f80d93fd2a4d7a682cee4c707dd267b7d42fc32f6eb71594e55dcbdcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_905545f80d93fd2a4d7a682cee4c707dd267b7d42fc32f6eb71594e55dcbdcad->leave($__internal_905545f80d93fd2a4d7a682cee4c707dd267b7d42fc32f6eb71594e55dcbdcad_prof);

        
        $__internal_02ecc921d535f1b0d945ab7789f894ba2b2c46ff23ca2c7306ec1cc0a82a20ad->leave($__internal_02ecc921d535f1b0d945ab7789f894ba2b2c46ff23ca2c7306ec1cc0a82a20ad_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5eb9bde83361f2fbc54c921db8c67e85dc55998683a87fd63574033b1571f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5eb9bde83361f2fbc54c921db8c67e85dc55998683a87fd63574033b1571f8f->enter($__internal_b5eb9bde83361f2fbc54c921db8c67e85dc55998683a87fd63574033b1571f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_faca05bdcec52dbc653d0acacea9ff7a9c83b3b98458f6733bf093de2b99255f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faca05bdcec52dbc653d0acacea9ff7a9c83b3b98458f6733bf093de2b99255f->enter($__internal_faca05bdcec52dbc653d0acacea9ff7a9c83b3b98458f6733bf093de2b99255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Contactez-nous !</h1>
    <form>
        <h2>Pour nous écrire :</h2>
        <div class=\"form-group\">
            <label>Sujet</label>
            <select name='sujet' id='sujet' class='form-control'>
                <option value=''>Choisir un sujet</option>
                <option value='sav'>Service après-vente</option>
                <option value='livraison'>Livraison</option>
                <option value='autres'>Autres</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label>Message</label>
            <textarea name='message' id='message' class='form-control' rows='10'>Votre message...
            </textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">
            Envoyer
        </button>
    </form>
    
    <h2>Nous trouver : <h2>
    <h3>Nos coordonnées :</h3>
    <adress>
        <ul class=\"list-group\">
            <li class='list-group-item'>
                Custom-shirt
            </li>
            <li class='list-group-item'>
                Les Grands Voisins
            </li>
            <li class='list-group-item'>
                82 Avenue Denfert-Rochereau
            </li>
            <li class='list-group-item'>
                75014 Paris
            </li>
            <li class='list-group-item'>
                France
            </li>
            <li class='list-group-item'>
                Téléphone : 06 12 12 12 12
            </li>
            <li class='list-group-item'>
                Email : <a href='mailto:contact@custom-shirt.com'>contact@custom-shirt.com</a>
            </li>
        </ul>
    </adress>
    <div class='container'>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1276819303503!2d2.3321566156735867!3d48.836703179285415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1500905799553\" width=\"100%\" height=\"\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    </div>
";
        
        $__internal_faca05bdcec52dbc653d0acacea9ff7a9c83b3b98458f6733bf093de2b99255f->leave($__internal_faca05bdcec52dbc653d0acacea9ff7a9c83b3b98458f6733bf093de2b99255f_prof);

        
        $__internal_b5eb9bde83361f2fbc54c921db8c67e85dc55998683a87fd63574033b1571f8f->leave($__internal_b5eb9bde83361f2fbc54c921db8c67e85dc55998683a87fd63574033b1571f8f_prof);

    }

    public function getTemplateName()
    {
        return "annexes/page_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Contact' %}

{% block content %}
    <h1>Contactez-nous !</h1>
    <form>
        <h2>Pour nous écrire :</h2>
        <div class=\"form-group\">
            <label>Sujet</label>
            <select name='sujet' id='sujet' class='form-control'>
                <option value=''>Choisir un sujet</option>
                <option value='sav'>Service après-vente</option>
                <option value='livraison'>Livraison</option>
                <option value='autres'>Autres</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label>Message</label>
            <textarea name='message' id='message' class='form-control' rows='10'>Votre message...
            </textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">
            Envoyer
        </button>
    </form>
    
    <h2>Nous trouver : <h2>
    <h3>Nos coordonnées :</h3>
    <adress>
        <ul class=\"list-group\">
            <li class='list-group-item'>
                Custom-shirt
            </li>
            <li class='list-group-item'>
                Les Grands Voisins
            </li>
            <li class='list-group-item'>
                82 Avenue Denfert-Rochereau
            </li>
            <li class='list-group-item'>
                75014 Paris
            </li>
            <li class='list-group-item'>
                France
            </li>
            <li class='list-group-item'>
                Téléphone : 06 12 12 12 12
            </li>
            <li class='list-group-item'>
                Email : <a href='mailto:contact@custom-shirt.com'>contact@custom-shirt.com</a>
            </li>
        </ul>
    </adress>
    <div class='container'>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1276819303503!2d2.3321566156735867!3d48.836703179285415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1500905799553\" width=\"100%\" height=\"\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    </div>
{% endblock %}", "annexes/page_contact.html.twig", "C:\\wamp64\\www\\custom_shirt-2\\templates\\annexes\\page_contact.html.twig");
    }
}
