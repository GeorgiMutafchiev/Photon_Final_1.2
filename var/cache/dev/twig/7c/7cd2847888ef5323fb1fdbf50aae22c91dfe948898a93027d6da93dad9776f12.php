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
        $__internal_20e215741a226949922ff5d16c1655d740a40a4dc6f27e8134485d91e8429f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e215741a226949922ff5d16c1655d740a40a4dc6f27e8134485d91e8429f14->enter($__internal_20e215741a226949922ff5d16c1655d740a40a4dc6f27e8134485d91e8429f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 90
        echo "

    ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "

";
        // line 103
        $this->displayBlock('footer', $context, $blocks);
        // line 116
        echo "</div>
";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "
</body>
</html>
";
        
        $__internal_20e215741a226949922ff5d16c1655d740a40a4dc6f27e8134485d91e8429f14->leave($__internal_20e215741a226949922ff5d16c1655d740a40a4dc6f27e8134485d91e8429f14_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac67654ca74f060c8a8f5cb28652700f7280258da9fddf5c744ee1f0ac0c6ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac67654ca74f060c8a8f5cb28652700f7280258da9fddf5c744ee1f0ac0c6ca5->enter($__internal_ac67654ca74f060c8a8f5cb28652700f7280258da9fddf5c744ee1f0ac0c6ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "&copy;Photon";
        
        $__internal_ac67654ca74f060c8a8f5cb28652700f7280258da9fddf5c744ee1f0ac0c6ca5->leave($__internal_ac67654ca74f060c8a8f5cb28652700f7280258da9fddf5c744ee1f0ac0c6ca5_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f5a34a74c6410032852cc377f9ba49934646c055137811299249bc568682da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5a34a74c6410032852cc377f9ba49934646c055137811299249bc568682da9->enter($__internal_7f5a34a74c6410032852cc377f9ba49934646c055137811299249bc568682da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7f5a34a74c6410032852cc377f9ba49934646c055137811299249bc568682da9->leave($__internal_7f5a34a74c6410032852cc377f9ba49934646c055137811299249bc568682da9_prof);

    }

    // line 26
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6b784e1a6334ae3f5f3a4ab94c839e75d26059f293398b35e9f4ef4b9c2635f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b784e1a6334ae3f5f3a4ab94c839e75d26059f293398b35e9f4ef4b9c2635f6->enter($__internal_6b784e1a6334ae3f5f3a4ab94c839e75d26059f293398b35e9f4ef4b9c2635f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6b784e1a6334ae3f5f3a4ab94c839e75d26059f293398b35e9f4ef4b9c2635f6->leave($__internal_6b784e1a6334ae3f5f3a4ab94c839e75d26059f293398b35e9f4ef4b9c2635f6_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_a588d44a00a4ccc2fc1ea252a9044bb40242e24dc2c1b64783f8a14e092cf8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a588d44a00a4ccc2fc1ea252a9044bb40242e24dc2c1b64783f8a14e092cf8c3->enter($__internal_a588d44a00a4ccc2fc1ea252a9044bb40242e24dc2c1b64783f8a14e092cf8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "    <header>
        <div class=\"navbar navbar-default default classic full\" role=\"navigation\">
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
            // line 67
            echo "
                            <li>
                                <a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 74
        echo "                        <li><a href=\"#home\">Home</a> </li>
                        <li><a href=\"";
        // line 75
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
        
        $__internal_a588d44a00a4ccc2fc1ea252a9044bb40242e24dc2c1b64783f8a14e092cf8c3->leave($__internal_a588d44a00a4ccc2fc1ea252a9044bb40242e24dc2c1b64783f8a14e092cf8c3_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_abcb753ea6741adf1b2c5f5fcb01b289faef4b50d1da3c2abb1fc6364b4ca915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcb753ea6741adf1b2c5f5fcb01b289faef4b50d1da3c2abb1fc6364b4ca915->enter($__internal_abcb753ea6741adf1b2c5f5fcb01b289faef4b50d1da3c2abb1fc6364b4ca915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "    <div class=\"container body-container\">
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "            </div>
        </div>
    </div>
    ";
        
        $__internal_abcb753ea6741adf1b2c5f5fcb01b289faef4b50d1da3c2abb1fc6364b4ca915->leave($__internal_abcb753ea6741adf1b2c5f5fcb01b289faef4b50d1da3c2abb1fc6364b4ca915_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_b98d39ca43321e9d5741da88dc2281c185f943e7b8e0183ff4d580ce1f19daad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98d39ca43321e9d5741da88dc2281c185f943e7b8e0183ff4d580ce1f19daad->enter($__internal_b98d39ca43321e9d5741da88dc2281c185f943e7b8e0183ff4d580ce1f19daad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b98d39ca43321e9d5741da88dc2281c185f943e7b8e0183ff4d580ce1f19daad->leave($__internal_b98d39ca43321e9d5741da88dc2281c185f943e7b8e0183ff4d580ce1f19daad_prof);

    }

    // line 103
    public function block_footer($context, array $blocks = array())
    {
        $__internal_61f668838212ce64347f867d13d74ee41c16277ba14a5ecea2276418bfe4afa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f668838212ce64347f867d13d74ee41c16277ba14a5ecea2276418bfe4afa8->enter($__internal_61f668838212ce64347f867d13d74ee41c16277ba14a5ecea2276418bfe4afa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 104
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
        
        $__internal_61f668838212ce64347f867d13d74ee41c16277ba14a5ecea2276418bfe4afa8->leave($__internal_61f668838212ce64347f867d13d74ee41c16277ba14a5ecea2276418bfe4afa8_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b700a52914c7c8ec66589d583c5d4d6b9f6493a39aa6dadc409e079d462c2378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b700a52914c7c8ec66589d583c5d4d6b9f6493a39aa6dadc409e079d462c2378->enter($__internal_b700a52914c7c8ec66589d583c5d4d6b9f6493a39aa6dadc409e079d462c2378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-select-1.12.2/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-select-1.12.2/js/i18n/defaults-bg_BG.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b700a52914c7c8ec66589d583c5d4d6b9f6493a39aa6dadc409e079d462c2378->leave($__internal_b700a52914c7c8ec66589d583c5d4d6b9f6493a39aa6dadc409e079d462c2378_prof);

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
        return array (  393 => 131,  389 => 130,  385 => 129,  381 => 128,  377 => 127,  373 => 126,  369 => 125,  365 => 124,  361 => 123,  357 => 122,  353 => 121,  349 => 120,  345 => 119,  340 => 118,  334 => 117,  316 => 104,  310 => 103,  299 => 96,  289 => 97,  287 => 96,  282 => 93,  276 => 92,  254 => 75,  251 => 74,  243 => 69,  239 => 67,  231 => 62,  227 => 61,  223 => 60,  219 => 59,  215 => 58,  211 => 56,  204 => 52,  200 => 51,  196 => 50,  192 => 48,  189 => 47,  187 => 46,  167 => 33,  161 => 29,  155 => 28,  144 => 26,  135 => 21,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 133,  72 => 117,  69 => 116,  67 => 103,  63 => 101,  61 => 92,  57 => 90,  55 => 28,  50 => 26,  43 => 23,  41 => 12,  37 => 11,  30 => 6,);
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
    <script type=\"text/javascript\" src=\"{{ asset('bootstrap-select-1.12.2/js/bootstrap-select.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bootstrap-select-1.12.2/js/i18n/defaults-bg_BG.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
