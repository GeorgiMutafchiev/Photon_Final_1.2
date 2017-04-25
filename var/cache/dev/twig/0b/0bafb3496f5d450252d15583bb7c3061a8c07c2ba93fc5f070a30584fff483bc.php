<?php

/* article/list.html.twig */
class __TwigTemplate_3d26feb7efc700411957aa8f934e9340c4c823159054451b868c97728979b600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "article/list.html.twig", 1);
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
        $__internal_21b71f8e78e91a0782a3e7d63e39e1907ad447b2923390e5b79bf012bddb012d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b71f8e78e91a0782a3e7d63e39e1907ad447b2923390e5b79bf012bddb012d->enter($__internal_21b71f8e78e91a0782a3e7d63e39e1907ad447b2923390e5b79bf012bddb012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21b71f8e78e91a0782a3e7d63e39e1907ad447b2923390e5b79bf012bddb012d->leave($__internal_21b71f8e78e91a0782a3e7d63e39e1907ad447b2923390e5b79bf012bddb012d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_38a4fcd76837cd172c0d0004410aae4c12177e657963db9b4e8e94cca4e334ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a4fcd76837cd172c0d0004410aae4c12177e657963db9b4e8e94cca4e334ce->enter($__internal_38a4fcd76837cd172c0d0004410aae4c12177e657963db9b4e8e94cca4e334ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"blog row\">
                    <div class=\"col-sm-12 blog-content grid-view\">
                        <div class=\"blog-content\">
                            <div class=\"row blog-posts\">

                                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "
                                <div class=\"post col-sm-12 col-md-6\">
                                    <div class=\"box\">
                                        <h3 class=\"post-title text-center\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3>
                                        <div class=\"meta text-center\"><span class=\"date\">Added on: ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "d-m-Y"), "html", null, true);
            echo "</span></div>
                                        <figure class=\"overlay\"><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\" /></figure>
                                        <div class=\"post-content\">
                                            <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
            echo "</p>
                                            <div class=\"text-center\"><a style=\"color: white; background-color: cornflowerblue; padding: 5px;\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">EDIT</a> | <a style=\"color: white; background-color: lightcoral; padding: 5px;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">DELETE</a></div>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                            </div>
                            <!-- /.blog-posts -->

                        </div>
                        <!-- /.blog-content -->

                    </div>
                    <!-- /.blog-content -->

                </div>
                <!-- /.blog -->
            </div>
            <!-- /.container -->

        </div>
        <!-- /.light-wrapper -->
    </div>
";
        
        $__internal_38a4fcd76837cd172c0d0004410aae4c12177e657963db9b4e8e94cca4e334ce->leave($__internal_38a4fcd76837cd172c0d0004410aae4c12177e657963db9b4e8e94cca4e334ce_prof);

    }

    public function getTemplateName()
    {
        return "article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  77 => 22,  73 => 21,  68 => 19,  64 => 18,  60 => 17,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block main %}
    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"blog row\">
                    <div class=\"col-sm-12 blog-content grid-view\">
                        <div class=\"blog-content\">
                            <div class=\"row blog-posts\">

                                {% for article in articles %}

                                <div class=\"post col-sm-12 col-md-6\">
                                    <div class=\"box\">
                                        <h3 class=\"post-title text-center\">{{ article.title }}</h3>
                                        <div class=\"meta text-center\"><span class=\"date\">Added on: {{ article.dateAdded|date('d-m-Y') }}</span></div>
                                        <figure class=\"overlay\"><img src=\"{{ asset('uploads/photos/' ~ article.photo) }}\" alt=\"\" /></figure>
                                        <div class=\"post-content\">
                                            <p>{{ article.summary }}</p>
                                            <div class=\"text-center\"><a style=\"color: white; background-color: cornflowerblue; padding: 5px;\" href=\"{{ path('article_edit', {'id': article.id}) }}\">EDIT</a> | <a style=\"color: white; background-color: lightcoral; padding: 5px;\" href=\"{{ path('article_delete', {'id': article.id}) }}\">DELETE</a></div>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                {% endfor %}

                            </div>
                            <!-- /.blog-posts -->

                        </div>
                        <!-- /.blog-content -->

                    </div>
                    <!-- /.blog-content -->

                </div>
                <!-- /.blog -->
            </div>
            <!-- /.container -->

        </div>
        <!-- /.light-wrapper -->
    </div>
{% endblock %}

";
    }
}
