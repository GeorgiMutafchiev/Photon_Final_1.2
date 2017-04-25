<?php

/* base.html.twig */
class __TwigTemplate_ac8988cd8abbb88db34d700656cd86ae40b2e0fa99522c6d73ab8a9352685876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b171eb88777fc51bf6e443c0eaddef775486110316a3523912b3c1fb73eb98bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b171eb88777fc51bf6e443c0eaddef775486110316a3523912b3c1fb73eb98bd->enter($__internal_b171eb88777fc51bf6e443c0eaddef775486110316a3523912b3c1fb73eb98bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body class=\"onepage\" id=\"";
        // line 25
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
<div class=\"content-wrapper\">
";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "

    ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "

";
        // line 102
        $this->displayBlock('footer', $context, $blocks);
        // line 115
        echo "</div>
";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
        echo "
</body>
</html>
";
        
        $__internal_b171eb88777fc51bf6e443c0eaddef775486110316a3523912b3c1fb73eb98bd->leave($__internal_b171eb88777fc51bf6e443c0eaddef775486110316a3523912b3c1fb73eb98bd_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_9827dafbf69e63ff0c94a97ed064689d61a996b2f7db50139e4ae5102f7c4a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9827dafbf69e63ff0c94a97ed064689d61a996b2f7db50139e4ae5102f7c4a8b->enter($__internal_9827dafbf69e63ff0c94a97ed064689d61a996b2f7db50139e4ae5102f7c4a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "&copy;Photon";
        
        $__internal_9827dafbf69e63ff0c94a97ed064689d61a996b2f7db50139e4ae5102f7c4a8b->leave($__internal_9827dafbf69e63ff0c94a97ed064689d61a996b2f7db50139e4ae5102f7c4a8b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_489b72c29bc8d85bc16bec960b6568c3d8bbc7bd3f6b0dfe6f994d69f3ad876a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489b72c29bc8d85bc16bec960b6568c3d8bbc7bd3f6b0dfe6f994d69f3ad876a->enter($__internal_489b72c29bc8d85bc16bec960b6568c3d8bbc7bd3f6b0dfe6f994d69f3ad876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/css/settings.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/css/layers.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/css/navigation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/color/forest.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("type/icons.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_489b72c29bc8d85bc16bec960b6568c3d8bbc7bd3f6b0dfe6f994d69f3ad876a->leave($__internal_489b72c29bc8d85bc16bec960b6568c3d8bbc7bd3f6b0dfe6f994d69f3ad876a_prof);

    }

    // line 25
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a63caa867761e72a624157b861763ab1b9bfae97f3bce65d3c7080e3555207e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63caa867761e72a624157b861763ab1b9bfae97f3bce65d3c7080e3555207e9->enter($__internal_a63caa867761e72a624157b861763ab1b9bfae97f3bce65d3c7080e3555207e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_a63caa867761e72a624157b861763ab1b9bfae97f3bce65d3c7080e3555207e9->leave($__internal_a63caa867761e72a624157b861763ab1b9bfae97f3bce65d3c7080e3555207e9_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_e0428f81b2676b932f7f3bcbd1672e72e6a6b15f6519d76334cc2efdeefc0270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0428f81b2676b932f7f3bcbd1672e72e6a6b15f6519d76334cc2efdeefc0270->enter($__internal_e0428f81b2676b932f7f3bcbd1672e72e6a6b15f6519d76334cc2efdeefc0270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "    <header>
        <div class=\"navbar navbar-default default classic full\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <div class=\"navbar-brand\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" class=\"logo-dark\" alt=\"\" /><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-light.png"), "html", null, true);
        echo "\" class=\"logo-light\" alt=\"\" /></a></div>
                    <div class=\"nav-bars-wrapper\">
                        <div class=\"nav-bars-inner\">
                            <div class=\"nav-bars\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span></span></div>
                        </div>
                        <!-- /.nav-bars-inner -->
                    </div>
                    <!-- /.nav-bars-wrapper -->
                </div>
                <!-- /.nav-header -->

                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 45
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 46
            echo "                            ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 47
                echo "                                <li><a href=\"#\">ADMIN PANEL<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 49
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
                echo "\">Users</a></li>
                                        <li><a href=\"";
                // line 50
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_articles");
                echo "\">Posts</a></li>
                                        <li><a href=\"";
                // line 51
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories");
                echo "\">Categories</a></li>
                                    </ul>
                                </li>
                            ";
            }
            // line 55
            echo "                            <li><a href=\"#\">ACCOUNT<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">My profile</a></li>
                                    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_articles");
            echo "\">All posts</a></li>
                                    <li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">Write a post</a></li>
                                    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_edit");
            echo "\">Settings</a></li>
                                    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></li>
                                </ul>
                            </li>

                        ";
        } else {
            // line 66
            echo "
                            <li>
                                <a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 73
        echo "                        <li><a href=\"#home\">Home</a> </li>
                        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("explore_posts");
        echo "\">Explore</a> </li>
                        <li><a href=\"#services\">Idea</a> </li>
                        <li><a href=\"#portfolio\">Gallery</a> </li>
                        <li><a href=\"#gallery\">Users</a> </li>
                        <li><a href=\"#about\">About</a> </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container -->
        </div>
        <!--/.navbar -->
    </header>
";
        
        $__internal_e0428f81b2676b932f7f3bcbd1672e72e6a6b15f6519d76334cc2efdeefc0270->leave($__internal_e0428f81b2676b932f7f3bcbd1672e72e6a6b15f6519d76334cc2efdeefc0270_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_af9735cdd85307ffbe1e150121b2d8b600ab0a584d7841222e67c3a545105f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9735cdd85307ffbe1e150121b2d8b600ab0a584d7841222e67c3a545105f15->enter($__internal_af9735cdd85307ffbe1e150121b2d8b600ab0a584d7841222e67c3a545105f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "    <div class=\"container body-container\">
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 95
        $this->displayBlock('main', $context, $blocks);
        // line 96
        echo "            </div>
        </div>
    </div>
    ";
        
        $__internal_af9735cdd85307ffbe1e150121b2d8b600ab0a584d7841222e67c3a545105f15->leave($__internal_af9735cdd85307ffbe1e150121b2d8b600ab0a584d7841222e67c3a545105f15_prof);

    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        $__internal_3be85cc0b052779acfcd4d734a63b7908eca5267b142754ac1a550a26329e116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be85cc0b052779acfcd4d734a63b7908eca5267b142754ac1a550a26329e116->enter($__internal_3be85cc0b052779acfcd4d734a63b7908eca5267b142754ac1a550a26329e116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_3be85cc0b052779acfcd4d734a63b7908eca5267b142754ac1a550a26329e116->leave($__internal_3be85cc0b052779acfcd4d734a63b7908eca5267b142754ac1a550a26329e116_prof);

    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        $__internal_beaece9c6716a516275dcab10c41b603d6ac40aa33f07831716e81687b8a21b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beaece9c6716a516275dcab10c41b603d6ac40aa33f07831716e81687b8a21b2->enter($__internal_beaece9c6716a516275dcab10c41b603d6ac40aa33f07831716e81687b8a21b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 103
        echo "    <footer class=\"inverse-wrapper\">

        <div class=\"sub-footer\">
            <div class=\"container inner\">
                <p class=\"text-center\">© 2017 Photon. All rights reserved. Made by <a href=\"https://www.facebook.com/profile.php?id=100001566423057\">GIM</a></p>
            </div>
            <!-- .container -->
        </div>
        <!-- .sub-footer -->

    </footer>
";
        
        $__internal_beaece9c6716a516275dcab10c41b603d6ac40aa33f07831716e81687b8a21b2->leave($__internal_beaece9c6716a516275dcab10c41b603d6ac40aa33f07831716e81687b8a21b2_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_524d0156fc87db78aeb697a8eefd778bc52a0eb3bc3f22df1eb542a5562b59f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524d0156fc87db78aeb697a8eefd778bc52a0eb3bc3f22df1eb542a5562b59f9->enter($__internal_524d0156fc87db78aeb697a8eefd778bc52a0eb3bc3f22df1eb542a5562b59f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_524d0156fc87db78aeb697a8eefd778bc52a0eb3bc3f22df1eb542a5562b59f9->leave($__internal_524d0156fc87db78aeb697a8eefd778bc52a0eb3bc3f22df1eb542a5562b59f9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 128,  377 => 127,  373 => 126,  369 => 125,  365 => 124,  361 => 123,  357 => 122,  353 => 121,  349 => 120,  345 => 119,  341 => 118,  336 => 117,  330 => 116,  312 => 103,  306 => 102,  295 => 95,  285 => 96,  283 => 95,  278 => 92,  272 => 91,  250 => 74,  247 => 73,  239 => 68,  235 => 66,  227 => 61,  223 => 60,  219 => 59,  215 => 58,  211 => 57,  207 => 55,  200 => 51,  196 => 50,  192 => 49,  188 => 47,  185 => 46,  183 => 45,  163 => 32,  157 => 28,  151 => 27,  140 => 25,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 130,  72 => 116,  69 => 115,  67 => 102,  63 => 100,  61 => 91,  57 => 89,  55 => 27,  50 => 25,  43 => 22,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}&copy;Photon{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/plugins.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('revolution/css/settings.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('revolution/css/layers.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('revolution/css/navigation.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/color/forest.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('type/icons.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body class=\"onepage\" id=\"{% block body_id %}{% endblock %}\">
<div class=\"content-wrapper\">
{% block header %}
    <header>
        <div class=\"navbar navbar-default default classic full\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <div class=\"navbar-brand\"><a href=\"{{ path('blog_index') }}\"><img src=\"{{ asset('images/logo.png') }}\" class=\"logo-dark\" alt=\"\" /><img src=\"{{ asset('images/logo-light.png') }}\" class=\"logo-light\" alt=\"\" /></a></div>
                    <div class=\"nav-bars-wrapper\">
                        <div class=\"nav-bars-inner\">
                            <div class=\"nav-bars\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span></span></div>
                        </div>
                        <!-- /.nav-bars-inner -->
                    </div>
                    <!-- /.nav-bars-wrapper -->
                </div>
                <!-- /.nav-header -->

                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        {% if app.user %}
                            {% if app.user.isAdmin() %}
                                <li><a href=\"#\">ADMIN PANEL<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('admin_users') }}\">Users</a></li>
                                        <li><a href=\"{{ path('admin_articles') }}\">Posts</a></li>
                                        <li><a href=\"{{ path('admin_categories') }}\">Categories</a></li>
                                    </ul>
                                </li>
                            {% endif %}
                            <li><a href=\"#\">ACCOUNT<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('user_profile') }}\">My profile</a></li>
                                    <li><a href=\"{{ path('list_articles') }}\">All posts</a></li>
                                    <li><a href=\"{{ path('article_create') }}\">Write a post</a></li>
                                    <li><a href=\"{{ path('profile_edit') }}\">Settings</a></li>
                                    <li><a href=\"{{ path('security_logout') }}\">Logout</a></li>
                                </ul>
                            </li>

                        {% else %}

                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                        <li><a href=\"#home\">Home</a> </li>
                        <li><a href=\"{{ path('explore_posts') }}\">Explore</a> </li>
                        <li><a href=\"#services\">Idea</a> </li>
                        <li><a href=\"#portfolio\">Gallery</a> </li>
                        <li><a href=\"#gallery\">Users</a> </li>
                        <li><a href=\"#about\">About</a> </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container -->
        </div>
        <!--/.navbar -->
    </header>
{% endblock %}


    {% block body %}
    <div class=\"container body-container\">
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    </div>
    {% endblock %}


{% block footer %}
    <footer class=\"inverse-wrapper\">

        <div class=\"sub-footer\">
            <div class=\"container inner\">
                <p class=\"text-center\">© 2017 Photon. All rights reserved. Made by <a href=\"https://www.facebook.com/profile.php?id=100001566423057\">GIM</a></p>
            </div>
            <!-- .container -->
        </div>
        <!-- .sub-footer -->

    </footer>
{% endblock %}
</div>
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/scripts.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
