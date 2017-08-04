<?php

/* layout.html.twig */
class __TwigTemplate_d9b133d0da3c5281aa9b15f099f1d005044641e254cb78200e7935883aafb609 extends Twig_Template
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
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "admin", array())) {
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
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
            // line 104
            echo "
                                <li>

                                    <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("user" => $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "userName", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
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
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 138
    public function block_content($context, array $blocks = array())
    {
    }

    // line 175
    public function block_javascripts($context, array $blocks = array())
    {
        // line 176
        echo "         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        ";
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
        return array (  284 => 176,  281 => 175,  276 => 138,  269 => 32,  265 => 31,  259 => 27,  256 => 26,  250 => 4,  243 => 182,  240 => 175,  237 => 139,  234 => 138,  228 => 137,  219 => 134,  214 => 133,  211 => 132,  208 => 131,  205 => 130,  200 => 129,  195 => 128,  187 => 121,  181 => 118,  175 => 115,  172 => 114,  166 => 111,  157 => 107,  152 => 104,  150 => 103,  146 => 101,  143 => 100,  140 => 99,  132 => 93,  126 => 90,  120 => 87,  117 => 86,  115 => 85,  113 => 84,  103 => 76,  91 => 66,  81 => 59,  77 => 58,  73 => 57,  54 => 40,  52 => 39,  46 => 35,  44 => 26,  40 => 24,  37 => 22,  32 => 18,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\wamp64\\www\\cust\\custom_shirt-2\\templates\\layout.html.twig");
    }
}
