<?php

/* custom/col.html.twig */
class __TwigTemplate_d30dd4feed202d79b8df6cafda4c4c3b97a498732a4f2ffc4d59337f8fcea191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/col.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0caafa98ef55a66e75ff5ac0d4c04e53995e99b87f1202dc7da0ef468164b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0caafa98ef55a66e75ff5ac0d4c04e53995e99b87f1202dc7da0ef468164b20->enter($__internal_b0caafa98ef55a66e75ff5ac0d4c04e53995e99b87f1202dc7da0ef468164b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/col.html.twig"));

        $__internal_60a7ca9f030739c76db247037e7c207264e86d33a8b2863cc9cbc9bbe15d0f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a7ca9f030739c76db247037e7c207264e86d33a8b2863cc9cbc9bbe15d0f77->enter($__internal_60a7ca9f030739c76db247037e7c207264e86d33a8b2863cc9cbc9bbe15d0f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/col.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0caafa98ef55a66e75ff5ac0d4c04e53995e99b87f1202dc7da0ef468164b20->leave($__internal_b0caafa98ef55a66e75ff5ac0d4c04e53995e99b87f1202dc7da0ef468164b20_prof);

        
        $__internal_60a7ca9f030739c76db247037e7c207264e86d33a8b2863cc9cbc9bbe15d0f77->leave($__internal_60a7ca9f030739c76db247037e7c207264e86d33a8b2863cc9cbc9bbe15d0f77_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f7c6b431ae3088ff569c2e852bdabac252eb7f1d951592e8ffce95f15eaa949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7c6b431ae3088ff569c2e852bdabac252eb7f1d951592e8ffce95f15eaa949->enter($__internal_0f7c6b431ae3088ff569c2e852bdabac252eb7f1d951592e8ffce95f15eaa949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_494215d6ce36913e3c9ea83a70bc9b0eed9b12b1deb70a9c0acc122f6dee3a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494215d6ce36913e3c9ea83a70bc9b0eed9b12b1deb70a9c0acc122f6dee3a5b->enter($__internal_494215d6ce36913e3c9ea83a70bc9b0eed9b12b1deb70a9c0acc122f6dee3a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_494215d6ce36913e3c9ea83a70bc9b0eed9b12b1deb70a9c0acc122f6dee3a5b->leave($__internal_494215d6ce36913e3c9ea83a70bc9b0eed9b12b1deb70a9c0acc122f6dee3a5b_prof);

        
        $__internal_0f7c6b431ae3088ff569c2e852bdabac252eb7f1d951592e8ffce95f15eaa949->leave($__internal_0f7c6b431ae3088ff569c2e852bdabac252eb7f1d951592e8ffce95f15eaa949_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_915c63582b1b54a4a01d1d190915038f75f615adcc0fec70dc21e3eefe41864d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915c63582b1b54a4a01d1d190915038f75f615adcc0fec70dc21e3eefe41864d->enter($__internal_915c63582b1b54a4a01d1d190915038f75f615adcc0fec70dc21e3eefe41864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4ceda2f4558b2cabf4f3dfa5202392d94d9db946f7647e62f78ad5cbabd3b625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ceda2f4558b2cabf4f3dfa5202392d94d9db946f7647e62f78ad5cbabd3b625->enter($__internal_4ceda2f4558b2cabf4f3dfa5202392d94d9db946f7647e62f78ad5cbabd3b625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "        <h1>Etape suivante ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:30%;\">30%</div>
        </div>
        <div class=\"row\">
        <h2 class=\"sous_titre\"> Choix de votre col </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 col-lg-12\">
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <table class=\"table\">
                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Prix</th>
                                </tr>
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols")));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 25
            echo "                                    <tr>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "titre_col", array()), "html", null, true);
            echo " </td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "description_col", array()), "html", null, true);
            echo " </td>
                                        <td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "photo_col", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "id_col", array()), "html", null, true);
            echo "\"/> </td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "prix_col", array()), "html", null, true);
            echo " € </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </table>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante  </button>
                        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4 col-lg-4\">

                    ";
        // line 43
        echo "

                </div>
            </div>
        </div>
    ";
        
        $__internal_4ceda2f4558b2cabf4f3dfa5202392d94d9db946f7647e62f78ad5cbabd3b625->leave($__internal_4ceda2f4558b2cabf4f3dfa5202392d94d9db946f7647e62f78ad5cbabd3b625_prof);

        
        $__internal_915c63582b1b54a4a01d1d190915038f75f615adcc0fec70dc21e3eefe41864d->leave($__internal_915c63582b1b54a4a01d1d190915038f75f615adcc0fec70dc21e3eefe41864d_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c0ac9987579a66fd6c566f1af68b0c52c1b831f064ed5c01cc8400a23f87eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0ac9987579a66fd6c566f1af68b0c52c1b831f064ed5c01cc8400a23f87eba->enter($__internal_0c0ac9987579a66fd6c566f1af68b0c52c1b831f064ed5c01cc8400a23f87eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_144aa5a86adf0b7c9b456a8d2dde958bc7e2d82568ec56553af757f43098dcea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144aa5a86adf0b7c9b456a8d2dde958bc7e2d82568ec56553af757f43098dcea->enter($__internal_144aa5a86adf0b7c9b456a8d2dde958bc7e2d82568ec56553af757f43098dcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/choixcustom.js"), "html", null, true);
        echo "\"></script>
          ";
        
        $__internal_144aa5a86adf0b7c9b456a8d2dde958bc7e2d82568ec56553af757f43098dcea->leave($__internal_144aa5a86adf0b7c9b456a8d2dde958bc7e2d82568ec56553af757f43098dcea_prof);

        
        $__internal_0c0ac9987579a66fd6c566f1af68b0c52c1b831f064ed5c01cc8400a23f87eba->leave($__internal_0c0ac9987579a66fd6c566f1af68b0c52c1b831f064ed5c01cc8400a23f87eba_prof);

    }

    public function getTemplateName()
    {
        return "custom/col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 52,  155 => 51,  146 => 50,  131 => 43,  119 => 32,  110 => 29,  104 => 28,  100 => 27,  96 => 26,  93 => 25,  89 => 24,  69 => 6,  60 => 5,  42 => 2,  11 => 1,);
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
{% block title 'Customisation' %}


    {% block content %}
        <h1>Etape suivante ! </h1>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:30%;\">30%</div>
        </div>
        <div class=\"row\">
        <h2 class=\"sous_titre\"> Choix de votre col </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 col-lg-12\">
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <table class=\"table\">
                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Prix</th>
                                </tr>
                                {% for col in cols %}
                                    <tr>
                                        <td>{{ col.titre_col }} </td>
                                        <td>{{ col.description_col }} </td>
                                        <td><img src=\"{{ col.photo_col }}\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"{{ col.id_col }}\"/> </td>
                                        <td>{{ col.prix_col }} € </td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante  </button>
                        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4 col-lg-4\">

                    {#rajouter les liens de la config et des mesures prises au fur et à mesure#}


                </div>
            </div>
        </div>
    {% endblock %}

        {% block javascripts %}
        {{ parent() }}
     <script src=\"{{ asset('script/choixcustom.js')}}\"></script>
          {% endblock %}

", "custom/col.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\custom\\col.html.twig");
    }
}
