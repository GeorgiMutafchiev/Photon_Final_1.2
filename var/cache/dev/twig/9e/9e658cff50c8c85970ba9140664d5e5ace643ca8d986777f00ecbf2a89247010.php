<?php

/* base3.html.twig */
class __TwigTemplate_b8d71abbe5c4ae0d953912a28a4bf7e57dd645529c1e044ca6f26bcc9b420a62 extends Twig_Template
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
        $__internal_c11be450b42a095852a69b34c02437374d09147ae4ae36796a95512422c22661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11be450b42a095852a69b34c02437374d09147ae4ae36796a95512422c22661->enter($__internal_c11be450b42a095852a69b34c02437374d09147ae4ae36796a95512422c22661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base3.html.twig"));

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
        // line 82
        echo "

    ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "

    ";
        // line 97
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "</div>
";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
        echo "
</body>
</html>
";
        
        $__internal_c11be450b42a095852a69b34c02437374d09147ae4ae36796a95512422c22661->leave($__internal_c11be450b42a095852a69b34c02437374d09147ae4ae36796a95512422c22661_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6af5b0288b07b2a5952562df29e64d27154e8a406a7c65840f1fb2c77b3df2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6af5b0288b07b2a5952562df29e64d27154e8a406a7c65840f1fb2c77b3df2b->enter($__internal_b6af5b0288b07b2a5952562df29e64d27154e8a406a7c65840f1fb2c77b3df2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "&copy;Photon";
        
        $__internal_b6af5b0288b07b2a5952562df29e64d27154e8a406a7c65840f1fb2c77b3df2b->leave($__internal_b6af5b0288b07b2a5952562df29e64d27154e8a406a7c65840f1fb2c77b3df2b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acd9c22c71bc5c93b6091820cb6dc73d96bf73b19bc8fd4afef1fb9a08ad6e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd9c22c71bc5c93b6091820cb6dc73d96bf73b19bc8fd4afef1fb9a08ad6e0b->enter($__internal_acd9c22c71bc5c93b6091820cb6dc73d96bf73b19bc8fd4afef1fb9a08ad6e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_acd9c22c71bc5c93b6091820cb6dc73d96bf73b19bc8fd4afef1fb9a08ad6e0b->leave($__internal_acd9c22c71bc5c93b6091820cb6dc73d96bf73b19bc8fd4afef1fb9a08ad6e0b_prof);

    }

    // line 25
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d7fb32ff6cddaf6444c6f565c3c6091b734a80756dca7275708688558886a930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fb32ff6cddaf6444c6f565c3c6091b734a80756dca7275708688558886a930->enter($__internal_d7fb32ff6cddaf6444c6f565c3c6091b734a80756dca7275708688558886a930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_d7fb32ff6cddaf6444c6f565c3c6091b734a80756dca7275708688558886a930->leave($__internal_d7fb32ff6cddaf6444c6f565c3c6091b734a80756dca7275708688558886a930_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_c458632e82eb403facae7059768f8b4d7fa148e40fb388668891cb9862cae0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c458632e82eb403facae7059768f8b4d7fa148e40fb388668891cb9862cae0b5->enter($__internal_c458632e82eb403facae7059768f8b4d7fa148e40fb388668891cb9862cae0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "        <header>
            <div style=\"background-color: #2f2f2f;\" class=\"navbar navbar-default default classic full\" role=\"navigation\">
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
            echo "                                ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 47
                echo "                                    <li><a href=\"#\">ADMIN PANEL<span class=\"caret\"></span></a>
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
            echo "                                <li><a href=\"#\">ACCOUNT<span class=\"caret\"></span></a>
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
            // line 65
            echo "                                <li>
                                    <a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                        LOGIN
                                    </a>
                                </li>
                            ";
        }
        // line 71
        echo "                            <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Home</a> </li>
                            <li><a href=\"";
        // line 72
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
        
        $__internal_c458632e82eb403facae7059768f8b4d7fa148e40fb388668891cb9862cae0b5->leave($__internal_c458632e82eb403facae7059768f8b4d7fa148e40fb388668891cb9862cae0b5_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f6b50dfddc75944537f001efb85252251a9853aa7e76f2224f286e33f4b64f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6b50dfddc75944537f001efb85252251a9853aa7e76f2224f286e33f4b64f1->enter($__internal_9f6b50dfddc75944537f001efb85252251a9853aa7e76f2224f286e33f4b64f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "        <div class=\"container body-container\">
            <div class=\"row\">
                <div id=\"main\" class=\"col-sm-9\">
                    <br>
                    ";
        // line 89
        $this->displayBlock('main', $context, $blocks);
        // line 90
        echo "                    <br>
                </div>
            </div>
        </div>
    ";
        
        $__internal_9f6b50dfddc75944537f001efb85252251a9853aa7e76f2224f286e33f4b64f1->leave($__internal_9f6b50dfddc75944537f001efb85252251a9853aa7e76f2224f286e33f4b64f1_prof);

    }

    // line 89
    public function block_main($context, array $blocks = array())
    {
        $__internal_777e00721b01e45ed1bfea1cb3554d3952f8860733b9e4ca68ce82338e20f532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777e00721b01e45ed1bfea1cb3554d3952f8860733b9e4ca68ce82338e20f532->enter($__internal_777e00721b01e45ed1bfea1cb3554d3952f8860733b9e4ca68ce82338e20f532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_777e00721b01e45ed1bfea1cb3554d3952f8860733b9e4ca68ce82338e20f532->leave($__internal_777e00721b01e45ed1bfea1cb3554d3952f8860733b9e4ca68ce82338e20f532_prof);

    }

    // line 97
    public function block_footer($context, array $blocks = array())
    {
        $__internal_91158adc62679ada62a32fa75a10d00a5d49923d9ef1c4f6da2d38f929f6bc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91158adc62679ada62a32fa75a10d00a5d49923d9ef1c4f6da2d38f929f6bc2c->enter($__internal_91158adc62679ada62a32fa75a10d00a5d49923d9ef1c4f6da2d38f929f6bc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 98
        echo "        <footer class=\"inverse-wrapper\">

            <div class=\"sub-footer\">
                <div class=\"container inner\">
                    <p class=\"text-center\">© 2017 Photon. All rights reserved. Made by <a href=\"https://www.facebook.com/profile.php?id=100001566423057\">GIM</a></p>
                </div>
                <!-- .container -->
            </div>
            <!-- .sub-footer -->

        </footer>
    ";
        
        $__internal_91158adc62679ada62a32fa75a10d00a5d49923d9ef1c4f6da2d38f929f6bc2c->leave($__internal_91158adc62679ada62a32fa75a10d00a5d49923d9ef1c4f6da2d38f929f6bc2c_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99cecf00cbae42340a6434352e10dda6f23fd3184b78aead2ed2cc623cc11452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cecf00cbae42340a6434352e10dda6f23fd3184b78aead2ed2cc623cc11452->enter($__internal_99cecf00cbae42340a6434352e10dda6f23fd3184b78aead2ed2cc623cc11452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_99cecf00cbae42340a6434352e10dda6f23fd3184b78aead2ed2cc623cc11452->leave($__internal_99cecf00cbae42340a6434352e10dda6f23fd3184b78aead2ed2cc623cc11452_prof);

    }

    public function getTemplateName()
    {
        return "base3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 123,  374 => 122,  370 => 121,  366 => 120,  362 => 119,  358 => 118,  354 => 117,  350 => 116,  346 => 115,  342 => 114,  338 => 113,  333 => 112,  327 => 111,  309 => 98,  303 => 97,  292 => 89,  281 => 90,  279 => 89,  273 => 85,  267 => 84,  250 => 72,  245 => 71,  237 => 66,  234 => 65,  227 => 61,  223 => 60,  219 => 59,  215 => 58,  211 => 57,  207 => 55,  200 => 51,  196 => 50,  192 => 49,  188 => 47,  185 => 46,  183 => 45,  163 => 32,  157 => 28,  151 => 27,  140 => 25,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 125,  72 => 111,  69 => 110,  67 => 97,  63 => 95,  61 => 84,  57 => 82,  55 => 27,  50 => 25,  43 => 22,  41 => 12,  37 => 11,  30 => 6,);
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
                    <br>
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
{% endblock %}

</body>
</html>
";
    }
}
