<?php

/* admin/categories/listcategories.html.twig */
class __TwigTemplate_72c7391275ddeefd3241ab3e29e0b5b8d4d741e8c427c7f2a4ca14f885de67a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "admin/categories/listcategories.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ce0f3e476cc480b5e06aac7c297fe1c621a5b067563544d664a608561e83fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce0f3e476cc480b5e06aac7c297fe1c621a5b067563544d664a608561e83fa3->enter($__internal_8ce0f3e476cc480b5e06aac7c297fe1c621a5b067563544d664a608561e83fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/categories/listcategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce0f3e476cc480b5e06aac7c297fe1c621a5b067563544d664a608561e83fa3->leave($__internal_8ce0f3e476cc480b5e06aac7c297fe1c621a5b067563544d664a608561e83fa3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_70549e9509f3463ea2892b9d7044851af844e74acad19038fa895af87ad77aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70549e9509f3463ea2892b9d7044851af844e74acad19038fa895af87ad77aeb->enter($__internal_70549e9509f3463ea2892b9d7044851af844e74acad19038fa895af87ad77aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <h1>List of all categories:</h1>
            <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                    <tr>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                        <td><a style=\"color: white; background-color: cornflowerblue; padding: 5px;\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                        </td>
                        <td><a style=\"color: white; background-color: lightcoral; padding: 5px;\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">DELETE</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </tbody>
            </table>
            </div>
        </div>
        <!-- /.light-wrapper -->
    </div>

";
        
        $__internal_70549e9509f3463ea2892b9d7044851af844e74acad19038fa895af87ad77aeb->leave($__internal_70549e9509f3463ea2892b9d7044851af844e74acad19038fa895af87ad77aeb_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories/listcategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  77 => 25,  72 => 23,  68 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block main %}
    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <h1>List of all categories:</h1>
            <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                {% for category in categories %}
                    <tr>
                        <td>{{ category.id }}</td>
                        <td>{{ category.name }}</td>
                        <td><a style=\"color: white; background-color: cornflowerblue; padding: 5px;\" href=\"{{ path('article_edit', {'id': category.id}) }}\">EDIT</a>
                        </td>
                        <td><a style=\"color: white; background-color: lightcoral; padding: 5px;\" href=\"{{ path('article_delete', {'id': category.id}) }}\">DELETE</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.light-wrapper -->
    </div>

{% endblock %}";
    }
}
