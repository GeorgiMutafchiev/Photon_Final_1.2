<?php

/* admin/listusers.html.twig */
class __TwigTemplate_d3bb87a294b19c60ecab6f8058d694ef05714d7cfd4c6e717f4b26b6f62dd98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "admin/listusers.html.twig", 1);
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
        $__internal_4e8417f3a253dab714397d548d3efcbe5c96690a3b4fc42705061b554de3acf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8417f3a253dab714397d548d3efcbe5c96690a3b4fc42705061b554de3acf8->enter($__internal_4e8417f3a253dab714397d548d3efcbe5c96690a3b4fc42705061b554de3acf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listusers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e8417f3a253dab714397d548d3efcbe5c96690a3b4fc42705061b554de3acf8->leave($__internal_4e8417f3a253dab714397d548d3efcbe5c96690a3b4fc42705061b554de3acf8_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_85aa480c4be5cb96728dc92edd679021a7ae2e847dfb25e2d4f22f6e950dbfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85aa480c4be5cb96728dc92edd679021a7ae2e847dfb25e2d4f22f6e950dbfcd->enter($__internal_85aa480c4be5cb96728dc92edd679021a7ae2e847dfb25e2d4f22f6e950dbfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <h1>List of all users:</h1>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Profile Picture</th>
                    <th>Full Name</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <!-- <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "                <tr>
                    <td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["user"], "photo", array()))), "html", null, true);
            echo "\" width=\"200px\"></td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            if (($this->getAttribute($context["user"], "status", array()) == "ok")) {
                // line 26
                echo "                            <a style=\"color: white; background-color: limegreen; padding: 5px;\">OK</a>
                        ";
            }
            // line 28
            echo "                        ";
            if (($this->getAttribute($context["user"], "status", array()) == "ban")) {
                // line 29
                echo "                            <a style=\"color: white; background-color: orangered; padding: 5px;\">BAN</a>
                        ";
            }
            // line 31
            echo "                    </td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>

                    <td><a style=\"color: white; background-color: cornflowerblue; padding: 5px;\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                    </td>
                    <!-- <td><a style=\"color: white; background-color: lightcoral; padding: 5px;\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">DELETE</a></td> -->
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
            </table>
        </div>
        <!-- /.light-wrapper -->
    </div>

";
        
        $__internal_85aa480c4be5cb96728dc92edd679021a7ae2e847dfb25e2d4f22f6e950dbfcd->leave($__internal_85aa480c4be5cb96728dc92edd679021a7ae2e847dfb25e2d4f22f6e950dbfcd_prof);

    }

    public function getTemplateName()
    {
        return "admin/listusers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  100 => 36,  95 => 34,  90 => 32,  87 => 31,  83 => 29,  80 => 28,  76 => 26,  74 => 25,  70 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block main %}
    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <h1>List of all users:</h1>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Profile Picture</th>
                    <th>Full Name</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <!-- <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                {% for user in users %}
                <tr>
                    <td><img src=\"{{ asset('uploads/photos/' ~ user.photo) }}\" width=\"200px\"></td>
                    <td>{{ user.fullName }}</td>
                    <td>{% if (user.status == \"ok\") %}
                            <a style=\"color: white; background-color: limegreen; padding: 5px;\">OK</a>
                        {% endif %}
                        {% if (user.status == \"ban\") %}
                            <a style=\"color: white; background-color: orangered; padding: 5px;\">BAN</a>
                        {% endif %}
                    </td>
                    <td>{{ user.email }}</td>

                    <td><a style=\"color: white; background-color: cornflowerblue; padding: 5px;\" href=\"{{ path('admin_user_edit', {'id': user.id}) }}\">EDIT</a>
                    </td>
                    <!-- <td><a style=\"color: white; background-color: lightcoral; padding: 5px;\" href=\"{{ path('admin_user_delete', {'id': user.id}) }}\">DELETE</a></td> -->
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
