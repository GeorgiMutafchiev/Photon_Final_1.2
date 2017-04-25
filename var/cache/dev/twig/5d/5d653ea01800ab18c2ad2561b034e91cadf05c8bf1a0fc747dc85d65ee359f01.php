<?php

/* security/login.html.twig */
class __TwigTemplate_49d2f64046c201ffbf55aeadbecaaefc722f7f1fec08054b12c0e53ede8fb940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b3e5ed523b9f2fa2dbe3a1c55ac53016fc8667e544674f45d6e969f441b71c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3e5ed523b9f2fa2dbe3a1c55ac53016fc8667e544674f45d6e969f441b71c2->enter($__internal_7b3e5ed523b9f2fa2dbe3a1c55ac53016fc8667e544674f45d6e969f441b71c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3e5ed523b9f2fa2dbe3a1c55ac53016fc8667e544674f45d6e969f441b71c2->leave($__internal_7b3e5ed523b9f2fa2dbe3a1c55ac53016fc8667e544674f45d6e969f441b71c2_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a573d3013518f0725609e1ff0a1a310b9b1a52fe922f220d39d81c2b119d6724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a573d3013518f0725609e1ff0a1a310b9b1a52fe922f220d39d81c2b119d6724->enter($__internal_a573d3013518f0725609e1ff0a1a310b9b1a52fe922f220d39d81c2b119d6724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_a573d3013518f0725609e1ff0a1a310b9b1a52fe922f220d39d81c2b119d6724->leave($__internal_a573d3013518f0725609e1ff0a1a310b9b1a52fe922f220d39d81c2b119d6724_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_37adca065a9e6d826d92a8c51c3eaccddf43a308d608f46e0f5daa1d1ff297af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37adca065a9e6d826d92a8c51c3eaccddf43a308d608f46e0f5daa1d1ff297af->enter($__internal_37adca065a9e6d826d92a8c51c3eaccddf43a308d608f46e0f5daa1d1ff297af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>PHOTON&copy; 2017 LOGIN</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"email\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"_username\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"password\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\">
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
            <h6 style=\"text-align: center;\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\">Don't have an account?</a> | <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Return to home page</a> </h6>
        </div>
    </div>
";
        
        $__internal_37adca065a9e6d826d92a8c51c3eaccddf43a308d608f46e0f5daa1d1ff297af->leave($__internal_37adca065a9e6d826d92a8c51c3eaccddf43a308d608f46e0f5daa1d1ff297af_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  82 => 27,  76 => 24,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block body_id 'login' %}

{% block main %}

    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('security_login') }}\" method=\"post\">
                <fieldset>
                    <legend>PHOTON&copy; 2017 LOGIN</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"email\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"_username\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"password\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\">
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('blog_index') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
            <h6 style=\"text-align: center;\"><a href=\"{{ path('user_register') }}\">Don't have an account?</a> | <a href=\"{{ path('blog_index') }}\">Return to home page</a> </h6>
        </div>
    </div>
{% endblock %}
";
    }
}
