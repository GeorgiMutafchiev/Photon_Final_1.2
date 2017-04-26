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
        $__internal_27eba650d2cd0de8b0c24b04ac17e83b050bbc65027293d2a6ad146a52dc6ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27eba650d2cd0de8b0c24b04ac17e83b050bbc65027293d2a6ad146a52dc6ee6->enter($__internal_27eba650d2cd0de8b0c24b04ac17e83b050bbc65027293d2a6ad146a52dc6ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base3.html.twig"));

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
        
        $__internal_27eba650d2cd0de8b0c24b04ac17e83b050bbc65027293d2a6ad146a52dc6ee6->leave($__internal_27eba650d2cd0de8b0c24b04ac17e83b050bbc65027293d2a6ad146a52dc6ee6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_6563f117543e70f75241f0114f769d2ab4938ee0584c618b4bb6d9920976fdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6563f117543e70f75241f0114f769d2ab4938ee0584c618b4bb6d9920976fdb0->enter($__internal_6563f117543e70f75241f0114f769d2ab4938ee0584c618b4bb6d9920976fdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "&copy;Photon";
        
        $__internal_6563f117543e70f75241f0114f769d2ab4938ee0584c618b4bb6d9920976fdb0->leave($__internal_6563f117543e70f75241f0114f769d2ab4938ee0584c618b4bb6d9920976fdb0_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ffdc9bd5e53687be0c6e91eac8d78be7495643543175bc9eb98b518650e5ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffdc9bd5e53687be0c6e91eac8d78be7495643543175bc9eb98b518650e5ae0->enter($__internal_1ffdc9bd5e53687be0c6e91eac8d78be7495643543175bc9eb98b518650e5ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1ffdc9bd5e53687be0c6e91eac8d78be7495643543175bc9eb98b518650e5ae0->leave($__internal_1ffdc9bd5e53687be0c6e91eac8d78be7495643543175bc9eb98b518650e5ae0_prof);

    }

    // line 26
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_38a884042f90c0c4c2ea25b75629c182f4369f0f43d9c060f8344217f1030394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a884042f90c0c4c2ea25b75629c182f4369f0f43d9c060f8344217f1030394->enter($__internal_38a884042f90c0c4c2ea25b75629c182f4369f0f43d9c060f8344217f1030394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_38a884042f90c0c4c2ea25b75629c182f4369f0f43d9c060f8344217f1030394->leave($__internal_38a884042f90c0c4c2ea25b75629c182f4369f0f43d9c060f8344217f1030394_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_172ddb2475e4ebd0dc48b3b368802b9ebe98c8a3fbc97a7f96af5a466c814252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172ddb2475e4ebd0dc48b3b368802b9ebe98c8a3fbc97a7f96af5a466c814252->enter($__internal_172ddb2475e4ebd0dc48b3b368802b9ebe98c8a3fbc97a7f96af5a466c814252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "        <header>
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
            echo "                                ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 48
                echo "                                    <li><a href=\"#\">ADMIN PANEL<span class=\"caret\"></span></a>
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
            echo "                                <li><a href=\"#\">ACCOUNT<span class=\"caret\"></span></a>
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
            echo "                                <li>
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
        echo "                            <li><a href=\"";
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
        
        $__internal_172ddb2475e4ebd0dc48b3b368802b9ebe98c8a3fbc97a7f96af5a466c814252->leave($__internal_172ddb2475e4ebd0dc48b3b368802b9ebe98c8a3fbc97a7f96af5a466c814252_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbbe6dec13a2baee860b28ce1da83ef424adbc5ca209c1a40a06578ca330ced1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbe6dec13a2baee860b28ce1da83ef424adbc5ca209c1a40a06578ca330ced1->enter($__internal_cbbe6dec13a2baee860b28ce1da83ef424adbc5ca209c1a40a06578ca330ced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "        <div class=\"container body-container\">
            <div class=\"row\">
                <div id=\"main\" class=\"col-sm-9\">
                    <br>
                    ";
        // line 90
        $this->displayBlock('main', $context, $blocks);
        // line 91
        echo "                    <br>
                </div>
            </div>
        </div>
    ";
        
        $__internal_cbbe6dec13a2baee860b28ce1da83ef424adbc5ca209c1a40a06578ca330ced1->leave($__internal_cbbe6dec13a2baee860b28ce1da83ef424adbc5ca209c1a40a06578ca330ced1_prof);

    }

    // line 90
    public function block_main($context, array $blocks = array())
    {
        $__internal_38f771fb6de1442c52d76a7e086a880acfce1da4af82e17e782ec59407ac54d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f771fb6de1442c52d76a7e086a880acfce1da4af82e17e782ec59407ac54d3->enter($__internal_38f771fb6de1442c52d76a7e086a880acfce1da4af82e17e782ec59407ac54d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_38f771fb6de1442c52d76a7e086a880acfce1da4af82e17e782ec59407ac54d3->leave($__internal_38f771fb6de1442c52d76a7e086a880acfce1da4af82e17e782ec59407ac54d3_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0436cb1a78bad6fff3bfd9dc88dd6cf45e8951e6073c08b1cbd17eee06546e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0436cb1a78bad6fff3bfd9dc88dd6cf45e8951e6073c08b1cbd17eee06546e55->enter($__internal_0436cb1a78bad6fff3bfd9dc88dd6cf45e8951e6073c08b1cbd17eee06546e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 99
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
        
        $__internal_0436cb1a78bad6fff3bfd9dc88dd6cf45e8951e6073c08b1cbd17eee06546e55->leave($__internal_0436cb1a78bad6fff3bfd9dc88dd6cf45e8951e6073c08b1cbd17eee06546e55_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0216cf6b2742d87c36ae9cd4aaeefc03fe30cd96ebdabb73fbe9f12c17ca5e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0216cf6b2742d87c36ae9cd4aaeefc03fe30cd96ebdabb73fbe9f12c17ca5e94->enter($__internal_0216cf6b2742d87c36ae9cd4aaeefc03fe30cd96ebdabb73fbe9f12c17ca5e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0216cf6b2742d87c36ae9cd4aaeefc03fe30cd96ebdabb73fbe9f12c17ca5e94->leave($__internal_0216cf6b2742d87c36ae9cd4aaeefc03fe30cd96ebdabb73fbe9f12c17ca5e94_prof);

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
    <script type=\"text/javascript\" src=\"{{ asset('bootstrap-select-1.12.2/js/bootstrap-select.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bootstrap-select-1.12.2/js/i18n/defaults-bg_BG.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
