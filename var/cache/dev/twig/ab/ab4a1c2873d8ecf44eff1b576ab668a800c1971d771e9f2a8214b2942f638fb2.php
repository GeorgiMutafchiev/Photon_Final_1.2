<?php

/* base2.html.twig */
class __TwigTemplate_a92e47fd7149e3e9e8c222df36bd620eef67fd693ed233d0bedb630007d9b2f3 extends Twig_Template
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
        $__internal_9ad8414ba346a01dcb402765ce22f3e4e4155e2f1783c0dfbee5f7055379261c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad8414ba346a01dcb402765ce22f3e4e4155e2f1783c0dfbee5f7055379261c->enter($__internal_9ad8414ba346a01dcb402765ce22f3e4e4155e2f1783c0dfbee5f7055379261c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        // line 23
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body class=\"onepage\" id=\"";
        // line 26
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
<div class=\"content-wrapper\">
";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 83
        echo "

    ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "

";
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 111
        echo "</div>
";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "
</body>
</html>
";
        
        $__internal_9ad8414ba346a01dcb402765ce22f3e4e4155e2f1783c0dfbee5f7055379261c->leave($__internal_9ad8414ba346a01dcb402765ce22f3e4e4155e2f1783c0dfbee5f7055379261c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b60a661ce583f0fc535af64612b91732f9762c8a55cbd492bf71492e5ef24db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b60a661ce583f0fc535af64612b91732f9762c8a55cbd492bf71492e5ef24db->enter($__internal_7b60a661ce583f0fc535af64612b91732f9762c8a55cbd492bf71492e5ef24db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "&copy;Photon";
        
        $__internal_7b60a661ce583f0fc535af64612b91732f9762c8a55cbd492bf71492e5ef24db->leave($__internal_7b60a661ce583f0fc535af64612b91732f9762c8a55cbd492bf71492e5ef24db_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cd9397e923d8f83860a926b8eca62e447a2908f5fd7b859e1cd7a95464f529a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd9397e923d8f83860a926b8eca62e447a2908f5fd7b859e1cd7a95464f529a->enter($__internal_9cd9397e923d8f83860a926b8eca62e447a2908f5fd7b859e1cd7a95464f529a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-select-1.12.2/dist/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_9cd9397e923d8f83860a926b8eca62e447a2908f5fd7b859e1cd7a95464f529a->leave($__internal_9cd9397e923d8f83860a926b8eca62e447a2908f5fd7b859e1cd7a95464f529a_prof);

    }

    // line 26
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_15fd502ef39f49e0dd9e4fadf5d2466113a6610ebcf6be142561497aecbc3b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fd502ef39f49e0dd9e4fadf5d2466113a6610ebcf6be142561497aecbc3b72->enter($__internal_15fd502ef39f49e0dd9e4fadf5d2466113a6610ebcf6be142561497aecbc3b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_15fd502ef39f49e0dd9e4fadf5d2466113a6610ebcf6be142561497aecbc3b72->leave($__internal_15fd502ef39f49e0dd9e4fadf5d2466113a6610ebcf6be142561497aecbc3b72_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_b68fa2b12306f9bfb30acc8a3e8ce7a9b0637775db8e411a3773fc464688136e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68fa2b12306f9bfb30acc8a3e8ce7a9b0637775db8e411a3773fc464688136e->enter($__internal_b68fa2b12306f9bfb30acc8a3e8ce7a9b0637775db8e411a3773fc464688136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "    <header>
        <div style=\"background-color: #2f2f2f;\" class=\"navbar navbar-default default classic full\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <div class=\"navbar-brand\"><a href=\"";
        // line 33
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
        // line 46
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 47
            echo "                            ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 48
                echo "                                <li><a href=\"#\">ADMIN PANEL<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 50
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
                echo "\">Users</a></li>
                                        <li><a href=\"";
                // line 51
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_articles");
                echo "\">Posts</a></li>
                                        <li><a href=\"";
                // line 52
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories");
                echo "\">Categories</a></li>
                                    </ul>
                                </li>
                            ";
            }
            // line 56
            echo "                            <li><a href=\"#\">ACCOUNT<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">My profile</a></li>
                                    <li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_articles");
            echo "\">All posts</a></li>
                                    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">Write a post</a></li>
                                    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_edit");
            echo "\">Settings</a></li>
                                    <li><a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></li>
                                </ul>
                            </li>
                        ";
        } else {
            // line 66
            echo "                            <li>
                                <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 72
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Home</a> </li>
                        <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("explore_posts");
        echo "\">Explore</a> </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container -->
        </div>
        <!--/.navbar -->
    </header>
";
        
        $__internal_b68fa2b12306f9bfb30acc8a3e8ce7a9b0637775db8e411a3773fc464688136e->leave($__internal_b68fa2b12306f9bfb30acc8a3e8ce7a9b0637775db8e411a3773fc464688136e_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba11f97533b015be88d1f34ea1cce5178bc9aca85baf46b5275a1a1d15c92d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba11f97533b015be88d1f34ea1cce5178bc9aca85baf46b5275a1a1d15c92d9f->enter($__internal_ba11f97533b015be88d1f34ea1cce5178bc9aca85baf46b5275a1a1d15c92d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "    <div class=\"container body-container\">
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                <br><br><br><br><br><br>
                ";
        // line 90
        $this->displayBlock('main', $context, $blocks);
        // line 91
        echo "                <br>
            </div>
        </div>
    </div>
    ";
        
        $__internal_ba11f97533b015be88d1f34ea1cce5178bc9aca85baf46b5275a1a1d15c92d9f->leave($__internal_ba11f97533b015be88d1f34ea1cce5178bc9aca85baf46b5275a1a1d15c92d9f_prof);

    }

    // line 90
    public function block_main($context, array $blocks = array())
    {
        $__internal_ad196c141e3197fa301d70a628c3dcdb77a3fff69a970f6f6f33ab21959dd925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad196c141e3197fa301d70a628c3dcdb77a3fff69a970f6f6f33ab21959dd925->enter($__internal_ad196c141e3197fa301d70a628c3dcdb77a3fff69a970f6f6f33ab21959dd925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ad196c141e3197fa301d70a628c3dcdb77a3fff69a970f6f6f33ab21959dd925->leave($__internal_ad196c141e3197fa301d70a628c3dcdb77a3fff69a970f6f6f33ab21959dd925_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        $__internal_12e23e4308c52b7c1bb1fda83ab2e9ed7e6584c6918f6e6f3a6c1216531b716d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e23e4308c52b7c1bb1fda83ab2e9ed7e6584c6918f6e6f3a6c1216531b716d->enter($__internal_12e23e4308c52b7c1bb1fda83ab2e9ed7e6584c6918f6e6f3a6c1216531b716d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 99
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
        
        $__internal_12e23e4308c52b7c1bb1fda83ab2e9ed7e6584c6918f6e6f3a6c1216531b716d->leave($__internal_12e23e4308c52b7c1bb1fda83ab2e9ed7e6584c6918f6e6f3a6c1216531b716d_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c7d6c5e22671961ef0fb77cbceaaac4045544c672fab80cf7e7678a3454a991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7d6c5e22671961ef0fb77cbceaaac4045544c672fab80cf7e7678a3454a991->enter($__internal_0c7d6c5e22671961ef0fb77cbceaaac4045544c672fab80cf7e7678a3454a991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-select-1.12.2/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-select-1.12.2/js/i18n/defaults-bg_BG.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0c7d6c5e22671961ef0fb77cbceaaac4045544c672fab80cf7e7678a3454a991->leave($__internal_0c7d6c5e22671961ef0fb77cbceaaac4045544c672fab80cf7e7678a3454a991_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 126,  386 => 125,  382 => 124,  378 => 123,  374 => 122,  370 => 121,  366 => 120,  362 => 119,  358 => 118,  354 => 117,  350 => 116,  346 => 115,  342 => 114,  337 => 113,  331 => 112,  313 => 99,  307 => 98,  296 => 90,  285 => 91,  283 => 90,  277 => 86,  271 => 85,  254 => 73,  249 => 72,  241 => 67,  238 => 66,  231 => 62,  227 => 61,  223 => 60,  219 => 59,  215 => 58,  211 => 56,  204 => 52,  200 => 51,  196 => 50,  192 => 48,  189 => 47,  187 => 46,  167 => 33,  161 => 29,  155 => 28,  144 => 26,  135 => 21,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 128,  72 => 112,  69 => 111,  67 => 98,  63 => 96,  61 => 85,  57 => 83,  55 => 28,  50 => 26,  43 => 23,  41 => 12,  37 => 11,  30 => 6,);
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap-select-1.12.2/dist/css/bootstrap-select.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body class=\"onepage\" id=\"{% block body_id %}{% endblock %}\">
<div class=\"content-wrapper\">
{% block header %}
    <header>
        <div style=\"background-color: #2f2f2f;\" class=\"navbar navbar-default default classic full\" role=\"navigation\">
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
                        <li><a href=\"{{ path('blog_index') }}\">Home</a> </li>
                        <li><a href=\"{{ path('explore_posts') }}\">Explore</a> </li>
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
                <br><br><br><br><br><br>
                {% block main %}{% endblock %}
                <br>
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
    <script type=\"text/javascript\" src=\"{{ asset('bootstrap-select-1.12.2/js/bootstrap-select.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bootstrap-select-1.12.2/js/i18n/defaults-bg_BG.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
