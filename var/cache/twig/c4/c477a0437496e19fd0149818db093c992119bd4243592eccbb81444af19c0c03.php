<?php

/* layout.html.twig */
class __TwigTemplate_95ce9e7878650a221848e99132bafebf12776b66072dc6ff19f698aad60cb469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_331b9ee26f508cd1717ecdc3241b85cc15c57f0a71958dafc548c9cdd15bc124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331b9ee26f508cd1717ecdc3241b85cc15c57f0a71958dafc548c9cdd15bc124->enter($__internal_331b9ee26f508cd1717ecdc3241b85cc15c57f0a71958dafc548c9cdd15bc124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_c9c7a58ac16059efb34e41979641d5b5e2cd96d68f8e93825e24f9c9cab11dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c7a58ac16059efb34e41979641d5b5e2cd96d68f8e93825e24f9c9cab11dcd->enter($__internal_c9c7a58ac16059efb34e41979641d5b5e2cd96d68f8e93825e24f9c9cab11dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - Custom Shirt</title>
        ";
        // line 18
        echo "
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-compatible\" content=\"IE-edge\">
        ";
        // line 22
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 24
        echo "

        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
    </head>
    <body>

        ";
        // line 39
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "admin", array())) {
            // line 40
            echo "
            <nav class=\"navbar navbar-inverse\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <span class=\"navbar-brand\" href=\"#\">Menu admin</span>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_produits");
            echo "\">Gestion produits</a></li>
                            <li><a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_panel");
            echo "\">Gestion utilisateurs</a></li>
                            <li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commandes");
            echo "\">Gestion commandes</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        ";
        }
        // line 66
        echo "            <nav class=\"navbar navbar-default\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" class=\"navbar-brand\" href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Custom Shirt</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                        <ul class=\"nav navbar-nav\">
                            ";
        // line 84
        echo "                            ";
        // line 85
        echo "                        ";
        // line 86
        echo "                            <li>
                                <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etape_1_tissu");
        echo "\"><span class=\"glyphicon glyphicon-scissors\"></span> Chemise à customiser</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\"><span class=\"glyphicon glyphicon-sunglasses\"></span> Chemise prêt à porter</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contactez-nous</a>
                            </li>
                        </ul>

                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
        // line 99
        echo "                            <li>
                                <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket_consult");
        echo "\"><span class=\"glyphicon glyphicon-shopping-cart fa-2x\"></span></a> ";
        // line 101
        echo "                            </li>

                            ";
        // line 103
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 104
            echo "
                                <li>

                                    <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("user" => $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "userName", array()), "html", null, true);
            echo "</a>

                                </li>
                                <li>
                                    <a href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Se déconnecter</a>
                                </li>
                            ";
        } else {
            // line 114
            echo "                                <li>
                                    <a href=\"";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Créer un compte</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</a>
                                </li>
                            ";
        }
        // line 121
        echo "                        </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.navbar-collapse -->
                 </nav>

        <div class=\"container\">
            ";
        // line 128
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 129
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 130
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 131
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 132
                    echo "                    ";
                }
                // line 133
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 134
                echo $context["flash"];
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 139
        echo "    </div>
";
        // line 175
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 182
        echo "
</body>
</html>
";
        
        $__internal_331b9ee26f508cd1717ecdc3241b85cc15c57f0a71958dafc548c9cdd15bc124->leave($__internal_331b9ee26f508cd1717ecdc3241b85cc15c57f0a71958dafc548c9cdd15bc124_prof);

        
        $__internal_c9c7a58ac16059efb34e41979641d5b5e2cd96d68f8e93825e24f9c9cab11dcd->leave($__internal_c9c7a58ac16059efb34e41979641d5b5e2cd96d68f8e93825e24f9c9cab11dcd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea2a3ede8fbe9238aa0b7914d6ba498e5d825b79e58144480b526b53d26388bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2a3ede8fbe9238aa0b7914d6ba498e5d825b79e58144480b526b53d26388bb->enter($__internal_ea2a3ede8fbe9238aa0b7914d6ba498e5d825b79e58144480b526b53d26388bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42a4a5ad31f9872885fdeb88893ebe4dcd29fdbf411d7dc1e8a52ce5aa45ac74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a4a5ad31f9872885fdeb88893ebe4dcd29fdbf411d7dc1e8a52ce5aa45ac74->enter($__internal_42a4a5ad31f9872885fdeb88893ebe4dcd29fdbf411d7dc1e8a52ce5aa45ac74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_42a4a5ad31f9872885fdeb88893ebe4dcd29fdbf411d7dc1e8a52ce5aa45ac74->leave($__internal_42a4a5ad31f9872885fdeb88893ebe4dcd29fdbf411d7dc1e8a52ce5aa45ac74_prof);

        
        $__internal_ea2a3ede8fbe9238aa0b7914d6ba498e5d825b79e58144480b526b53d26388bb->leave($__internal_ea2a3ede8fbe9238aa0b7914d6ba498e5d825b79e58144480b526b53d26388bb_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_125a2403f7d9a544322f7c0f2eba663de80623727c7cd63d7220f696aee9e782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125a2403f7d9a544322f7c0f2eba663de80623727c7cd63d7220f696aee9e782->enter($__internal_125a2403f7d9a544322f7c0f2eba663de80623727c7cd63d7220f696aee9e782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b883070b1c83ee7057060b34c12650d1d6665de4961fa9ca7480187be513e1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b883070b1c83ee7057060b34c12650d1d6665de4961fa9ca7480187be513e1a1->enter($__internal_b883070b1c83ee7057060b34c12650d1d6665de4961fa9ca7480187be513e1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
            <!-- Css créé nous mêmes -->
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            
        ";
        
        $__internal_b883070b1c83ee7057060b34c12650d1d6665de4961fa9ca7480187be513e1a1->leave($__internal_b883070b1c83ee7057060b34c12650d1d6665de4961fa9ca7480187be513e1a1_prof);

        
        $__internal_125a2403f7d9a544322f7c0f2eba663de80623727c7cd63d7220f696aee9e782->leave($__internal_125a2403f7d9a544322f7c0f2eba663de80623727c7cd63d7220f696aee9e782_prof);

    }

    // line 138
    public function block_content($context, array $blocks = array())
    {
        $__internal_c6e258e688720b2789c96b926b61ae0aade3cbdd3ffb0b6019ea87c3ccba9b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e258e688720b2789c96b926b61ae0aade3cbdd3ffb0b6019ea87c3ccba9b37->enter($__internal_c6e258e688720b2789c96b926b61ae0aade3cbdd3ffb0b6019ea87c3ccba9b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c229c891731a484066be91b98599d28c4588c6baf2cc009da03800fa3e963920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c229c891731a484066be91b98599d28c4588c6baf2cc009da03800fa3e963920->enter($__internal_c229c891731a484066be91b98599d28c4588c6baf2cc009da03800fa3e963920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c229c891731a484066be91b98599d28c4588c6baf2cc009da03800fa3e963920->leave($__internal_c229c891731a484066be91b98599d28c4588c6baf2cc009da03800fa3e963920_prof);

        
        $__internal_c6e258e688720b2789c96b926b61ae0aade3cbdd3ffb0b6019ea87c3ccba9b37->leave($__internal_c6e258e688720b2789c96b926b61ae0aade3cbdd3ffb0b6019ea87c3ccba9b37_prof);

    }

    // line 175
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f692316b1bbaf9eed390049ce1e654e545419e8f5258c2eb812f3d0ac233e6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f692316b1bbaf9eed390049ce1e654e545419e8f5258c2eb812f3d0ac233e6d7->enter($__internal_f692316b1bbaf9eed390049ce1e654e545419e8f5258c2eb812f3d0ac233e6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6065ffa9dac1131e3545d5f38fc1598512d77fcd0c6216dd5fee20e18175e69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6065ffa9dac1131e3545d5f38fc1598512d77fcd0c6216dd5fee20e18175e69f->enter($__internal_6065ffa9dac1131e3545d5f38fc1598512d77fcd0c6216dd5fee20e18175e69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 176
        echo "         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_6065ffa9dac1131e3545d5f38fc1598512d77fcd0c6216dd5fee20e18175e69f->leave($__internal_6065ffa9dac1131e3545d5f38fc1598512d77fcd0c6216dd5fee20e18175e69f_prof);

        
        $__internal_f692316b1bbaf9eed390049ce1e654e545419e8f5258c2eb812f3d0ac233e6d7->leave($__internal_f692316b1bbaf9eed390049ce1e654e545419e8f5258c2eb812f3d0ac233e6d7_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 176,  329 => 175,  312 => 138,  299 => 32,  295 => 31,  289 => 27,  280 => 26,  262 => 4,  249 => 182,  246 => 175,  243 => 139,  240 => 138,  234 => 137,  225 => 134,  220 => 133,  217 => 132,  214 => 131,  211 => 130,  206 => 129,  201 => 128,  193 => 121,  187 => 118,  181 => 115,  178 => 114,  172 => 111,  163 => 107,  158 => 104,  156 => 103,  152 => 101,  149 => 100,  146 => 99,  138 => 93,  132 => 90,  126 => 87,  123 => 86,  121 => 85,  119 => 84,  109 => 76,  97 => 66,  87 => 59,  83 => 58,  79 => 57,  60 => 40,  58 => 39,  52 => 35,  50 => 26,  46 => 24,  43 => 22,  38 => 18,  34 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %} - Custom Shirt</title>
        {#
        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        #}

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-compatible\" content=\"IE-edge\">
        {# Les balises méta \"http-equiv\" qui envoie des informations supplémentaires via le protocole HTTP #}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {# Afin de forcer le bon niveau de zoom aux navigateurs mobiles, mais aussi pour leur imposer une largeur de viewport qui n'est pas égale à 980px (ou autres valeurs selon le navigateur), il vous sera nécessaire d'inclure une balise <meta> \"viewport\" au sein du <head> de votre document HTML #}


        {% block stylesheets %}
            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
            <!-- Css créé nous mêmes -->
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"{{ asset('css/profile.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
            
        {% endblock %}

    </head>
    <body>

        {% if user_manager.admin %}

            <nav class=\"navbar navbar-inverse\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <span class=\"navbar-brand\" href=\"#\">Menu admin</span>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"{{ path('admin_produits') }}\">Gestion produits</a></li>
                            <li><a href=\"{{ path('admin_panel') }}\">Gestion utilisateurs</a></li>
                            <li><a href=\"{{ path('admin_commandes') }}\">Gestion commandes</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        {% endif %}
            <nav class=\"navbar navbar-default\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" class=\"navbar-brand\" href=\"{{path('homepage')}}\">Custom Shirt</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                        <ul class=\"nav navbar-nav\">
                            {#<li>#}
                            {#<a href=\"{{ path('presentation') }}\">Qui sommes-nous ?</a>#}
                        {#</li>#}
                            <li>
                                <a href=\"{{ path('etape_1_tissu') }}\"><span class=\"glyphicon glyphicon-scissors\"></span> Chemise à customiser</a>
                            </li>
                            <li>
                                <a href=\"{{ path('produits') }}\"><span class=\"glyphicon glyphicon-sunglasses\"></span> Chemise prêt à porter</a>
                            </li>
                            <li>
                                <a href=\"{{ path('contact') }}\">Contactez-nous</a>
                            </li>
                        </ul>

                        <ul class=\"nav navbar-nav navbar-right\">
                            {# voir l'ajout de la globale user_manager dans twig dans src/app.php #}
                            <li>
                                <a href=\"{{ path('basket_consult') }}\"><span class=\"glyphicon glyphicon-shopping-cart fa-2x\"></span></a> {# Icone Panier #}
                            </li>

                            {% if user_manager.user %}

                                <li>

                                    <a href=\"{{ path('profile', {user:user_manager.user}) }}\"><span class=\"glyphicon glyphicon-user\"></span> {{ user_manager.userName }}</a>

                                </li>
                                <li>
                                    <a href=\"{{ path('logout') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Se déconnecter</a>
                                </li>
                            {% else %}
                                <li>
                                    <a href=\"{{ path('register') }}\"><span class=\"glyphicon glyphicon-pencil\"></span> Créer un compte</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</a>
                                </li>
                            {% endif %}
                        </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.navbar-collapse -->
                 </nav>

        <div class=\"container\">
            {# bloc d'affichage des messages flash #}
            {% for type, flashes in app.session.flashbag.all %}
                {% for flash in flashes %}
                    {% if type == 'error' %}
                        {% set type = 'danger' %}
                    {% endif %}
                    <div class=\"alert alert-{{ type }}\">
                        {{ flash|raw }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% block content %}{% endblock %}
    </div>
{#       
        <footer class=\"footer\">
            <nav class=\"navbar navbar-default navbar-fixed-bottom\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <ul class=\"nav navbar-nav navbar-left\">
                                <li><a href=\"{{path('homepage')}}\">Accueil</a></li>
                                <li><a href=\"{{ path('etape_1_tissu') }}\">Chemises sur mesure</a></li>
                                    <li><a href=\"{{ path('produit') }}\">Pret à porter</a></li>
                            </ul>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <ul class='nav navbar-nav'>
                                <li><a href=\"{{ path('a_propos') }}\">A Propos</a></li>
                                <li><a href=\"{{ path('cgv') }}\">Conditions générales de vente</a></li>
                                <li><a href=\"{{ path('contact') }}\">Contactez-nous</a></li>
                            </ul>
                        </div>
                        <div class=\"col-xs-12 col-md-4 col-lg-4\">
                            <ul class='nav navbar-nav'>
                                <li><a href=\"https://www.facebook.com/\" target=\"_blank\" title='Facebook'><i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"https://twitter.com/\" target=\"_blank\" title='twitter'><i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"https://www.instagram.com/\" target=\"_blank\" title='Instagram'><i class=\"fa fa-instagram fa-2x\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"https://fr.pinterest.com/\" target=\"_blank\" title='Pinterest'><i class=\"fa fa-pinterest fa-2x\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"col-xs-12 col-md-12 col-lg-12\">
                            <p style='text-align:center'>Tous droits réservés &#169 CUSTOM-SHIRT SAS</p>
                        </div>
                    </div>
                </div>
            </nav>
        </footer>
        {# Import js boostrap et jQuery #}
        {% block javascripts %}
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        {% endblock %}

</body>
</html>
", "layout.html.twig", "C:\\wamp64\\www\\cust\\custom_shirt-2\\templates\\layout.html.twig");
    }
}
