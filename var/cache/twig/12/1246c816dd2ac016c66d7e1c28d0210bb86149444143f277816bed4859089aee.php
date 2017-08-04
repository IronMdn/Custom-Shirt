<?php

/* layout.html.twig */
class __TwigTemplate_3ff5b1d6341345f3e3e8708d1295bda9f0bcb9bdabda51925630d5fd71132a25 extends Twig_Template
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
        // line 19
        echo "        
         <meta charset=\"utf-8\">
        
        <meta http-equiv=\"X-UA-compatible\" content=\"IE-edge\">
        ";
        // line 24
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 26
        echo "        

        ";
        // line 28
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
                    <a class=\"navbar-brand\">Menu admin</a>
                    <ul class=\"nav navbar-nav\">
                        <li>

                            ";
            // line 48
            echo "                        </li>
                        <li>
                            ";
            // line 51
            echo "
                        </li>
                        <li>
                            <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commandes");
            echo "\">Gestion commandes</a>
                        </li>
                    </ul>
                </div>
            </nav>
                        
        ";
        }
        // line 61
        echo "        
            <nav class=\"navbar navbar-default\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Custom Shirt</a>
                    ";
        // line 67
        echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 69
        echo "                        ";
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
            // line 70
            echo "                            <li>

                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("user" => $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "userName", array()), "html", null, true);
            echo "</a>

                            </li>
                            <li>
                                <a href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Se déconnecter</a>
                            </li>
                        ";
        } else {
            // line 79
            echo "                            <li>
                                <a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Créer un compte</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</a>
                            </li>
                        ";
        }
        // line 86
        echo "                    </ul>
                </div>
            </nav>
                
        <div class=\"container\">
            ";
        // line 92
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 93
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 94
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 95
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 96
                    echo "                    ";
                }
                // line 97
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 98
                echo $context["flash"];
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "        </div>
        

             ";
        // line 107
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
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

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            
            <!-- Css créé nous mêmes -->
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        // line 108
        echo "             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
            
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
        return array (  232 => 112,  226 => 108,  223 => 107,  218 => 102,  212 => 33,  206 => 29,  203 => 28,  197 => 4,  190 => 115,  187 => 107,  182 => 103,  179 => 102,  173 => 101,  164 => 98,  159 => 97,  156 => 96,  153 => 95,  150 => 94,  145 => 93,  140 => 92,  133 => 86,  127 => 83,  121 => 80,  118 => 79,  112 => 76,  103 => 72,  99 => 70,  96 => 69,  93 => 67,  89 => 64,  84 => 61,  74 => 54,  69 => 51,  65 => 48,  56 => 40,  54 => 39,  48 => 35,  46 => 28,  42 => 26,  39 => 24,  33 => 19,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\custom_shirt-2\\templates\\layout.html.twig");
    }
}
