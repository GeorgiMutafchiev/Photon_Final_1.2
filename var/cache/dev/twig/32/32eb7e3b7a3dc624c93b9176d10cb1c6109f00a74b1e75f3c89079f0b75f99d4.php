<?php

/* user/newprofile.html.twig */
class __TwigTemplate_5e06a7f4f0174ccf626d1a2989ee6e7e83e04e60140252b9d2b84effa973aa38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a9d8ff864e5f3a21c46d4549c1973ed32f1c7062961ed6d2cb789f1fc250f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9d8ff864e5f3a21c46d4549c1973ed32f1c7062961ed6d2cb789f1fc250f9f->enter($__internal_3a9d8ff864e5f3a21c46d4549c1973ed32f1c7062961ed6d2cb789f1fc250f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/newprofile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("type/icons.css"), "html", null, true);
        echo "\">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CCardo:400,400i,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"pageloader text-center\">
<div class=\"content-wrapper\">
    <div class=\"container inner\">
        <div class=\"logo\"><a href=\"index.html\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-light.png"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
    </div>

    <main class=\"container\">
        <div class=\"text-inner center\">
            <h1>Welcome in PHOTON. Tell us more about you.</h1>
        </div>

        <!-- /.text-inner -->
        <form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newuser_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
            <input type=\"hidden\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "\" name=\"user[fullName]\" class=\"email\">
            <input type=\"hidden\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" name=\"user[email]\" class=\"email\">
            <input type=\"hidden\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "\" name=\"user[password]\" class=\"email\">
            <input type=\"hidden\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()), "html", null, true);
        echo "\" name=\"user[photo]\" class=\"email\">
            <input type=\"hidden\" value=\"ok\" name=\"user[status]\" class=\"email\">
            <input type=\"text\" value=\"\" name=\"user[facebook]\" class=\"email\" placeholder=\"Facebook account\" required=\"\">
            <input type=\"text\" value=\"\" name=\"user[twitter]\" class=\"email\" placeholder=\"Twitter account\" required=\"\">
            <input type=\"text\" value=\"\" name=\"user[instagram]\" class=\"email\" placeholder=\"Instagram account\" required=\"\">
            <textarea cols=\"5\" name=\"user[description]\" placeholder=\"Tell us about you\" required=\"\"></textarea>
            <div class=\"row\">
                <div class=\"text-inner center\">
                    <h1>Select profile type.</h1>
                </div>
            <label>
                <input type=\"radio\" name=\"user[profiletype]\" value=\"first\" />
                <img width=\"300px\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/profile1.JPG"), "html", null, true);
        echo "\">
            </label>
            <label>
                <input type=\"radio\" name=\"user[profiletype]\" value=\"second\" />
                <img width=\"300px\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/profile2.JPG"), "html", null, true);
        echo "\">
            </label>
            </div><br>
            <input type=\"submit\" class=\"btn text-center\" value=\"Submit\">
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        </form>
            <!-- /.newsletter-wrapper -->
            <div class=\"divide10\"></div>
            <p>© 2017 PHOTON. All rights reserved.</p>
            <ul class=\"social\">
                <li> <a href=\"#\"><i class=\"ion-social-facebook\"></i></a> </li>
                <li> <a href=\"#\"><i class=\"ion-social-twitter\"></i></a> </li>
                <li> <a href=\"#\"><i class=\"ion-social-instagram\"></i></a> </li>
                <li> <a href=\"#\"><i class=\"ion-social-vimeo\"></i></a> </li>
                <li> <a href=\"#\"><i class=\"ion-social-whatsapp\"></i></a> </li>
            </ul>
        <!-- /.text -->
    </main>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->


    <!-- /.container -->

<!-- /footer -->
<script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/profile_plugins.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
<script>
    \$.backstretch([
        \"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/slider-bg1.jpg"), "html", null, true);
        echo "\"
        , \"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/slider-bg2.jpg"), "html", null, true);
        echo "\"
        , \"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/slider-bg5.jpg"), "html", null, true);
        echo "\"
        , \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/slider-bg6.jpg"), "html", null, true);
        echo "\"
        , \"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/slider-bg7.jpg"), "html", null, true);
        echo "\"
    ], {duration: 3000, fade: 750});
</script>
</body>
</html>
";
        
        $__internal_3a9d8ff864e5f3a21c46d4549c1973ed32f1c7062961ed6d2cb789f1fc250f9f->leave($__internal_3a9d8ff864e5f3a21c46d4549c1973ed32f1c7062961ed6d2cb789f1fc250f9f_prof);

    }

    public function getTemplateName()
    {
        return "user/newprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 89,  171 => 88,  167 => 87,  163 => 86,  159 => 85,  153 => 82,  149 => 81,  145 => 80,  141 => 79,  112 => 53,  105 => 49,  90 => 37,  86 => 36,  82 => 35,  78 => 34,  74 => 33,  62 => 24,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.png') }}\">
    <title>{{ user.fullName }}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/profile.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('type/icons.css') }}\">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CCardo:400,400i,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"pageloader text-center\">
<div class=\"content-wrapper\">
    <div class=\"container inner\">
        <div class=\"logo\"><a href=\"index.html\"><img src=\"{{ asset('images/logo-light.png') }}\" alt=\"\" /></a></div>
    </div>

    <main class=\"container\">
        <div class=\"text-inner center\">
            <h1>Welcome in PHOTON. Tell us more about you.</h1>
        </div>

        <!-- /.text-inner -->
        <form action=\"{{ path('newuser_edit', {id: user.id}) }}\" method=\"POST\">
            <input type=\"hidden\" value=\"{{ user.fullName }}\" name=\"user[fullName]\" class=\"email\">
            <input type=\"hidden\" value=\"{{ user.email }}\" name=\"user[email]\" class=\"email\">
            <input type=\"hidden\" value=\"{{ user.password }}\" name=\"user[password]\" class=\"email\">
            <input type=\"hidden\" value=\"{{ user.photo }}\" name=\"user[photo]\" class=\"email\">
            <input type=\"hidden\" value=\"ok\" name=\"user[status]\" class=\"email\">
            <input type=\"text\" value=\"\" name=\"user[facebook]\" class=\"email\" placeholder=\"Facebook account\" required=\"\">
            <input type=\"text\" value=\"\" name=\"user[twitter]\" class=\"email\" placeholder=\"Twitter account\" required=\"\">
            <input type=\"text\" value=\"\" name=\"user[instagram]\" class=\"email\" placeholder=\"Instagram account\" required=\"\">
            <textarea cols=\"5\" name=\"user[description]\" placeholder=\"Tell us about you\" required=\"\"></textarea>
            <div class=\"row\">
                <div class=\"text-inner center\">
                    <h1>Select profile type.</h1>
                </div>
            <label>
                <input type=\"radio\" name=\"user[profiletype]\" value=\"first\" />
                <img width=\"300px\" src=\"{{ asset('images/art/profile1.JPG') }}\">
            </label>
            <label>
                <input type=\"radio\" name=\"user[profiletype]\" value=\"second\" />
                <img width=\"300px\" src=\"{{ asset('images/art/profile2.JPG') }}\">
            </label>
            </div><br>
            <input type=\"submit\" class=\"btn text-center\" value=\"Submit\">
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        </form>
            <!-- /.newsletter-wrapper -->
            <div class=\"divide10\"></div>
            <p>© 2017 PHOTON. All rights reserved.</p>
            <ul class=\"social\">
                <li> <a href=\"#\"><i class=\"ion-social-facebook\"></i></a> </li>
                <li> <a href=\"#\"><i class=\"ion-social-twitter\"></i></a> </li>
                <li> <a href=\"#\"><i class=\"ion-social-instagram\"></i></a> </li>
                <li> <a href=\"#\"><i class=\"ion-social-vimeo\"></i></a> </li>
                <li> <a href=\"#\"><i class=\"ion-social-whatsapp\"></i></a> </li>
            </ul>
        <!-- /.text -->
    </main>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->


    <!-- /.container -->

<!-- /footer -->
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/profile_plugins.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/scripts.js') }}\"></script>
<script>
    \$.backstretch([
        \"{{ asset('images/art/slider-bg1.jpg') }}\"
        , \"{{ asset('images/art/slider-bg2.jpg') }}\"
        , \"{{ asset('images/art/slider-bg5.jpg') }}\"
        , \"{{ asset('images/art/slider-bg6.jpg') }}\"
        , \"{{ asset('images/art/slider-bg7.jpg') }}\"
    ], {duration: 3000, fade: 750});
</script>
</body>
</html>
";
    }
}
