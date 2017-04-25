<?php

/* admin/articles/listarticles.html.twig */
class __TwigTemplate_9ce409629a604e2e63823b112968643b12c506ebcdbaa03d0b5e77b8b2b299e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "admin/articles/listarticles.html.twig", 1);
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
        $__internal_04892b8ac70ae4899ecad340dfb25d94c1a7298c4022d998b8e8255e9ca81fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04892b8ac70ae4899ecad340dfb25d94c1a7298c4022d998b8e8255e9ca81fea->enter($__internal_04892b8ac70ae4899ecad340dfb25d94c1a7298c4022d998b8e8255e9ca81fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/articles/listarticles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04892b8ac70ae4899ecad340dfb25d94c1a7298c4022d998b8e8255e9ca81fea->leave($__internal_04892b8ac70ae4899ecad340dfb25d94c1a7298c4022d998b8e8255e9ca81fea_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_88ce6d8cabdac24a346e2a401b22a457fc23387af3f11a4dc927111f4b0ae69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ce6d8cabdac24a346e2a401b22a457fc23387af3f11a4dc927111f4b0ae69e->enter($__internal_88ce6d8cabdac24a346e2a401b22a457fc23387af3f11a4dc927111f4b0ae69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <h1>List of all articles:</h1>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Summary</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 22
            echo "                    <tr>
                        <td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
            echo "\" width=\"200px\"></td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
            echo "
                        </td>

                        <td><a style=\"color: white; background-color: cornflowerblue; padding: 5px;\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                        </td>
                        <td><a style=\"color: white; background-color: lightcoral; padding: 5px;\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">DELETE</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
            </table>
        </div>
        <!-- /.light-wrapper -->
    </div>

";
        
        $__internal_88ce6d8cabdac24a346e2a401b22a457fc23387af3f11a4dc927111f4b0ae69e->leave($__internal_88ce6d8cabdac24a346e2a401b22a457fc23387af3f11a4dc927111f4b0ae69e_prof);

    }

    public function getTemplateName()
    {
        return "admin/articles/listarticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  89 => 31,  84 => 29,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block main %}
    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <h1>List of all articles:</h1>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Summary</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                {% for article in articles %}
                    <tr>
                        <td><img src=\"{{ asset('uploads/photos/' ~ article.photo) }}\" width=\"200px\"></td>
                        <td>{{ article.title }}</td>
                        <td>{{ article.author }}</td>
                        <td>{{ article.summary }}
                        </td>

                        <td><a style=\"color: white; background-color: cornflowerblue; padding: 5px;\" href=\"{{ path('article_edit', {'id': article.id}) }}\">EDIT</a>
                        </td>
                        <td><a style=\"color: white; background-color: lightcoral; padding: 5px;\" href=\"{{ path('article_delete', {'id': article.id}) }}\">DELETE</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <!-- /.light-wrapper -->
    </div>

{% endblock %}";
    }
}
