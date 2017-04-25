<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e8837e065d9eca12dd3e370ddabb7ffd0c2ca0785f14dfe96c989858281d25a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37a6f7a7df3b0919ef51ccf9c5c328af30ea27eae84d6226e4f237ccd51c23a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a6f7a7df3b0919ef51ccf9c5c328af30ea27eae84d6226e4f237ccd51c23a3->enter($__internal_37a6f7a7df3b0919ef51ccf9c5c328af30ea27eae84d6226e4f237ccd51c23a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37a6f7a7df3b0919ef51ccf9c5c328af30ea27eae84d6226e4f237ccd51c23a3->leave($__internal_37a6f7a7df3b0919ef51ccf9c5c328af30ea27eae84d6226e4f237ccd51c23a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1e11bdf25c8b577d9d0d4329ee7cf0639502a4bc3ede9522045212c88271f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e11bdf25c8b577d9d0d4329ee7cf0639502a4bc3ede9522045212c88271f14->enter($__internal_f1e11bdf25c8b577d9d0d4329ee7cf0639502a4bc3ede9522045212c88271f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f1e11bdf25c8b577d9d0d4329ee7cf0639502a4bc3ede9522045212c88271f14->leave($__internal_f1e11bdf25c8b577d9d0d4329ee7cf0639502a4bc3ede9522045212c88271f14_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3de2bdc04bc6ae949cf6ebf15915112af0987c3a6e748ec34ad6a14e42c3218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3de2bdc04bc6ae949cf6ebf15915112af0987c3a6e748ec34ad6a14e42c3218->enter($__internal_f3de2bdc04bc6ae949cf6ebf15915112af0987c3a6e748ec34ad6a14e42c3218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3de2bdc04bc6ae949cf6ebf15915112af0987c3a6e748ec34ad6a14e42c3218->leave($__internal_f3de2bdc04bc6ae949cf6ebf15915112af0987c3a6e748ec34ad6a14e42c3218_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32f0922180b57b57bd91cab970a947c50c2d489e4f9c4e688fcb71d85b78d8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f0922180b57b57bd91cab970a947c50c2d489e4f9c4e688fcb71d85b78d8cd->enter($__internal_32f0922180b57b57bd91cab970a947c50c2d489e4f9c4e688fcb71d85b78d8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_32f0922180b57b57bd91cab970a947c50c2d489e4f9c4e688fcb71d85b78d8cd->leave($__internal_32f0922180b57b57bd91cab970a947c50c2d489e4f9c4e688fcb71d85b78d8cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
