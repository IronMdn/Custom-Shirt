<?php

/* annexes/page_contact.html.twig */
class __TwigTemplate_6f8806ba7a6f9606d8d7b84b336810ea89b7c93b5cb09721a7a039f713f9d26f extends Twig_Template
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
        $__internal_2ba1c043d31213053e614935afa0fd762ee51f53961f22c5ce5eff31fb5aa630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba1c043d31213053e614935afa0fd762ee51f53961f22c5ce5eff31fb5aa630->enter($__internal_2ba1c043d31213053e614935afa0fd762ee51f53961f22c5ce5eff31fb5aa630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annexes/page_contact.html.twig"));

        $__internal_ae331526110cc1eaa807f73fae3f8e3e7515d8079da4f0c19f4aab484cb98a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae331526110cc1eaa807f73fae3f8e3e7515d8079da4f0c19f4aab484cb98a4e->enter($__internal_ae331526110cc1eaa807f73fae3f8e3e7515d8079da4f0c19f4aab484cb98a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annexes/page_contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ba1c043d31213053e614935afa0fd762ee51f53961f22c5ce5eff31fb5aa630->leave($__internal_2ba1c043d31213053e614935afa0fd762ee51f53961f22c5ce5eff31fb5aa630_prof);

        
        $__internal_ae331526110cc1eaa807f73fae3f8e3e7515d8079da4f0c19f4aab484cb98a4e->leave($__internal_ae331526110cc1eaa807f73fae3f8e3e7515d8079da4f0c19f4aab484cb98a4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e50bca0be3293407fa0a7f90f09485b56ea9ef3b117dc1cd9066f6d7bd49de62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50bca0be3293407fa0a7f90f09485b56ea9ef3b117dc1cd9066f6d7bd49de62->enter($__internal_e50bca0be3293407fa0a7f90f09485b56ea9ef3b117dc1cd9066f6d7bd49de62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7c90f4d74cfb3f3117e7a876a3a45d2323a850115b673af578b78c7535ee28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c90f4d74cfb3f3117e7a876a3a45d2323a850115b673af578b78c7535ee28f->enter($__internal_b7c90f4d74cfb3f3117e7a876a3a45d2323a850115b673af578b78c7535ee28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_b7c90f4d74cfb3f3117e7a876a3a45d2323a850115b673af578b78c7535ee28f->leave($__internal_b7c90f4d74cfb3f3117e7a876a3a45d2323a850115b673af578b78c7535ee28f_prof);

        
        $__internal_e50bca0be3293407fa0a7f90f09485b56ea9ef3b117dc1cd9066f6d7bd49de62->leave($__internal_e50bca0be3293407fa0a7f90f09485b56ea9ef3b117dc1cd9066f6d7bd49de62_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8aa2d099436e3482b6f6b2188376a411f12df5fc9fa4a7fd59c6264cfaa5a551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa2d099436e3482b6f6b2188376a411f12df5fc9fa4a7fd59c6264cfaa5a551->enter($__internal_8aa2d099436e3482b6f6b2188376a411f12df5fc9fa4a7fd59c6264cfaa5a551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_30a786a549515a5ce07cef0319d152390321517703dc0b49b3d3a1cbc8802d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a786a549515a5ce07cef0319d152390321517703dc0b49b3d3a1cbc8802d54->enter($__internal_30a786a549515a5ce07cef0319d152390321517703dc0b49b3d3a1cbc8802d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_30a786a549515a5ce07cef0319d152390321517703dc0b49b3d3a1cbc8802d54->leave($__internal_30a786a549515a5ce07cef0319d152390321517703dc0b49b3d3a1cbc8802d54_prof);

        
        $__internal_8aa2d099436e3482b6f6b2188376a411f12df5fc9fa4a7fd59c6264cfaa5a551->leave($__internal_8aa2d099436e3482b6f6b2188376a411f12df5fc9fa4a7fd59c6264cfaa5a551_prof);

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
{% endblock %}", "annexes/page_contact.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\annexes\\page_contact.html.twig");
    }
}
