<?php

/* user/profile.html.twig */
class __TwigTemplate_9d448fc6ef227798868eab920656a7033cc96600176574176a5f10fbfba515f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fac32e1812c59d788c4887142fd463527587526adf2484bb64d2d1cef91c1d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac32e1812c59d788c4887142fd463527587526adf2484bb64d2d1cef91c1d10->enter($__internal_fac32e1812c59d788c4887142fd463527587526adf2484bb64d2d1cef91c1d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        // line 1
        $this->displayBlock('body_id', $context, $blocks);
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"style/images/favicon.png\">
    <title>Juno 12</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style/type/icons.css\">
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
        <div class=\"logo\"><a href=\"index.html\"><img src=\"#\" srcset=\"style/images/logo.png 1x, style/images/logo@2x.png 2x\" alt=\"\" /></a></div>
    </div>

    <main class=\"container\">
        <div class=\"text-inner center\">
            <h1>Welcome in PHOTON. Tell us more about you.</h1>
        </div>

        <!-- /.text-inner -->
        <form action=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"POST\">
            <input type=\"text\" value=\"\" name=\"user[facebook]\" class=\"email\" placeholder=\"Facebook account\" required=\"\">
            <input type=\"text\" value=\"\" name=\"user[twitter]\" class=\"email\" placeholder=\"Twitter account\" required=\"\">
            <input type=\"text\" value=\"\" name=\"user[instagram]\" class=\"email\" placeholder=\"Instagram account\" required=\"\">
            <textarea value=\"\" name=\"description\" class=\"email\" placeholder=\"Tell us about you\" required=\"\"></textarea>
            <input type=\"submit\" class=\"btn text-center\" value=\"Submit\">
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        </form>
        <!-- /.text -->
    </main>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->
<footer>
    <div class=\"container inner\">
        <!-- /.newsletter-wrapper -->
        <div class=\"divide10\"></div>
        <p>© 2016 Juno. All rights reserved. Theme by <a href=\"http://elemisfreebies.com\" class=\"line\">elemis</a></p>
        <ul class=\"social\">
            <li> <a href=\"#\"><i class=\"ion-social-facebook\"></i></a> </li>
            <li> <a href=\"#\"><i class=\"ion-social-twitter\"></i></a> </li>
            <li> <a href=\"#\"><i class=\"ion-social-instagram\"></i></a> </li>
            <li> <a href=\"#\"><i class=\"ion-social-vimeo\"></i></a> </li>
            <li> <a href=\"#\"><i class=\"ion-social-whatsapp\"></i></a> </li>
        </ul>
    </div>
    <!-- /.container -->
</footer>
<!-- /footer -->
<script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["ass"]) ? $context["ass"] : $this->getContext($context, "ass")), "html", null, true);
        echo "style/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"style/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"style/js/plugins.js\"></script>
<script type=\"text/javascript\" src=\"style/js/scripts.js\"></script>
<script>
    \$.backstretch([
        \"style/images/art/slider-bg1.jpg\"
        , \"style/images/art/slider-bg2.jpg\"
        , \"style/images/art/slider-bg3.jpg\"
        , \"style/images/art/slider-bg4.jpg\"
    ], {duration: 3000, fade: 750});
</script>
</body>
</html>
";
        
        $__internal_fac32e1812c59d788c4887142fd463527587526adf2484bb64d2d1cef91c1d10->leave($__internal_fac32e1812c59d788c4887142fd463527587526adf2484bb64d2d1cef91c1d10_prof);

    }

    // line 1
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7affb60706d1476985d15237782edc6c831071a025453a199a93d36def58bbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7affb60706d1476985d15237782edc6c831071a025453a199a93d36def58bbac->enter($__internal_7affb60706d1476985d15237782edc6c831071a025453a199a93d36def58bbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_7affb60706d1476985d15237782edc6c831071a025453a199a93d36def58bbac->leave($__internal_7affb60706d1476985d15237782edc6c831071a025453a199a93d36def58bbac_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 1,  91 => 63,  59 => 34,  25 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body_id 'profile' %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"style/images/favicon.png\">
    <title>Juno 12</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style/type/icons.css\">
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
        <div class=\"logo\"><a href=\"index.html\"><img src=\"#\" srcset=\"style/images/logo.png 1x, style/images/logo@2x.png 2x\" alt=\"\" /></a></div>
    </div>

    <main class=\"container\">
        <div class=\"text-inner center\">
            <h1>Welcome in PHOTON. Tell us more about you.</h1>
        </div>

        <!-- /.text-inner -->
        <form action=\"{{ path('user_register') }}\" method=\"POST\">
            <input type=\"text\" value=\"\" name=\"user[facebook]\" class=\"email\" placeholder=\"Facebook account\" required=\"\">
            <input type=\"text\" value=\"\" name=\"user[twitter]\" class=\"email\" placeholder=\"Twitter account\" required=\"\">
            <input type=\"text\" value=\"\" name=\"user[instagram]\" class=\"email\" placeholder=\"Instagram account\" required=\"\">
            <textarea value=\"\" name=\"description\" class=\"email\" placeholder=\"Tell us about you\" required=\"\"></textarea>
            <input type=\"submit\" class=\"btn text-center\" value=\"Submit\">
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        </form>
        <!-- /.text -->
    </main>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->
<footer>
    <div class=\"container inner\">
        <!-- /.newsletter-wrapper -->
        <div class=\"divide10\"></div>
        <p>© 2016 Juno. All rights reserved. Theme by <a href=\"http://elemisfreebies.com\" class=\"line\">elemis</a></p>
        <ul class=\"social\">
            <li> <a href=\"#\"><i class=\"ion-social-facebook\"></i></a> </li>
            <li> <a href=\"#\"><i class=\"ion-social-twitter\"></i></a> </li>
            <li> <a href=\"#\"><i class=\"ion-social-instagram\"></i></a> </li>
            <li> <a href=\"#\"><i class=\"ion-social-vimeo\"></i></a> </li>
            <li> <a href=\"#\"><i class=\"ion-social-whatsapp\"></i></a> </li>
        </ul>
    </div>
    <!-- /.container -->
</footer>
<!-- /footer -->
<script type=\"text/javascript\" src=\"{{ ass }}style/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"style/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"style/js/plugins.js\"></script>
<script type=\"text/javascript\" src=\"style/js/scripts.js\"></script>
<script>
    \$.backstretch([
        \"style/images/art/slider-bg1.jpg\"
        , \"style/images/art/slider-bg2.jpg\"
        , \"style/images/art/slider-bg3.jpg\"
        , \"style/images/art/slider-bg4.jpg\"
    ], {duration: 3000, fade: 750});
</script>
</body>
</html>
";
    }
}
