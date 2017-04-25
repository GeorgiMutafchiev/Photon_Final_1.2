<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c332cc970cd1959bfd4ac347c6bd2b2c3509cb494bb9a84214543326d408b9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82ff1af4ea75979ee4c029b5c15fe6f9e39cab6765a423410d16c0cfcff3ccaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ff1af4ea75979ee4c029b5c15fe6f9e39cab6765a423410d16c0cfcff3ccaf->enter($__internal_82ff1af4ea75979ee4c029b5c15fe6f9e39cab6765a423410d16c0cfcff3ccaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ff1af4ea75979ee4c029b5c15fe6f9e39cab6765a423410d16c0cfcff3ccaf->leave($__internal_82ff1af4ea75979ee4c029b5c15fe6f9e39cab6765a423410d16c0cfcff3ccaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80e68bdac803258201af1f0adad12468d068f3a99cdca7608bdd6c946d51801e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e68bdac803258201af1f0adad12468d068f3a99cdca7608bdd6c946d51801e->enter($__internal_80e68bdac803258201af1f0adad12468d068f3a99cdca7608bdd6c946d51801e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80e68bdac803258201af1f0adad12468d068f3a99cdca7608bdd6c946d51801e->leave($__internal_80e68bdac803258201af1f0adad12468d068f3a99cdca7608bdd6c946d51801e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02e040258420e82c0546cddfef3647349a8e464e4a59671f86c333a1b3e37cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e040258420e82c0546cddfef3647349a8e464e4a59671f86c333a1b3e37cf4->enter($__internal_02e040258420e82c0546cddfef3647349a8e464e4a59671f86c333a1b3e37cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02e040258420e82c0546cddfef3647349a8e464e4a59671f86c333a1b3e37cf4->leave($__internal_02e040258420e82c0546cddfef3647349a8e464e4a59671f86c333a1b3e37cf4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbfb40d1d19d4462c07b52ec5fc21df8fb4ed5288b22435c0e42622c877b56d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfb40d1d19d4462c07b52ec5fc21df8fb4ed5288b22435c0e42622c877b56d1->enter($__internal_dbfb40d1d19d4462c07b52ec5fc21df8fb4ed5288b22435c0e42622c877b56d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dbfb40d1d19d4462c07b52ec5fc21df8fb4ed5288b22435c0e42622c877b56d1->leave($__internal_dbfb40d1d19d4462c07b52ec5fc21df8fb4ed5288b22435c0e42622c877b56d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
