<?php

/* article/explore.html.twig */
class __TwigTemplate_52853bbb13b882d77e9c678ad45af33477e9fc332f6f4f79380428f74903d3ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "article/explore.html.twig", 1);
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
        $__internal_894f12b7170870e495adbb88b7db2b39c0818aada52c9d1bc211f3d042b09c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894f12b7170870e495adbb88b7db2b39c0818aada52c9d1bc211f3d042b09c94->enter($__internal_894f12b7170870e495adbb88b7db2b39c0818aada52c9d1bc211f3d042b09c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/explore.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_894f12b7170870e495adbb88b7db2b39c0818aada52c9d1bc211f3d042b09c94->leave($__internal_894f12b7170870e495adbb88b7db2b39c0818aada52c9d1bc211f3d042b09c94_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a3bb57503c2ac06460140ff3e411d656f8e8f961d663c72fd354ad0a8a0ea93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bb57503c2ac06460140ff3e411d656f8e8f961d663c72fd354ad0a8a0ea93a->enter($__internal_a3bb57503c2ac06460140ff3e411d656f8e8f961d663c72fd354ad0a8a0ea93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <div class=\"container\">
                <section id=\"home\">
                    <div class=\"dark-wrapper\">
                        <div class=\"container inner\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">
                                    <h2 class=\"section-title text-center\">Explore PHOTON's Posts</h2>
                                    <p class=\"lead text-center\">Thanks for taking some time to visit PHOTON member's posts. Here you will be able to find their latest and favorite works.</p>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                            <div class=\"divide20\"></div>
                            <div id=\"js-lightbox-filter\" class=\"cbp-filter-container text-center\">
                                <div data-filter=\"*\" class=\"cbp-filter-item-active cbp-filter-item\">All</div>
                                <div data-filter=\".1\" class=\"cbp-filter-item\">Nature</div>
                                <div data-filter=\".2\" class=\"cbp-filter-item\">Portrait</div>
                                <div data-filter=\".3\" class=\"cbp-filter-item\">Outdoor</div>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"divide25\"></div>
                            <div id=\"js-grid-lightbox\" class=\"cbp cbp-l-grid-inline light-gallery\">
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "                                    <div class=\"cbp-item ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category", array()), "html", null, true);
            echo " conceptual food-drink\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"cbp-caption\" >
                                            <div class=\"cbp-caption-defaultWrap\"> <img width=\"200px\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\"> </div>
                                            <div class=\"cbp-caption-activeWrap\">
                                                <div class=\"cbp-l-caption-alignCenter\">
                                                    <div class=\"cbp-l-caption-body\">
                                                        <div class=\"cbp-l-caption-title\">
                                                            <h5>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id=\"caption";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" class=\"hidden\">
                                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4></a>
                                                <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</p>
                                            </div>
                                        </a> </div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.dark-wrapper -->
                </section>
            </div>
            <!-- /.container -->

        </div>
        <!-- /.light-wrapper -->
    </div>
";
        
        $__internal_a3bb57503c2ac06460140ff3e411d656f8e8f961d663c72fd354ad0a8a0ea93a->leave($__internal_a3bb57503c2ac06460140ff3e411d656f8e8f961d663c72fd354ad0a8a0ea93a_prof);

    }

    public function getTemplateName()
    {
        return "article/explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 48,  104 => 43,  98 => 42,  94 => 41,  86 => 36,  78 => 31,  71 => 30,  67 => 29,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block main %}
    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <div class=\"container\">
                <section id=\"home\">
                    <div class=\"dark-wrapper\">
                        <div class=\"container inner\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-md-offset-2\">
                                    <h2 class=\"section-title text-center\">Explore PHOTON's Posts</h2>
                                    <p class=\"lead text-center\">Thanks for taking some time to visit PHOTON member's posts. Here you will be able to find their latest and favorite works.</p>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                            <div class=\"divide20\"></div>
                            <div id=\"js-lightbox-filter\" class=\"cbp-filter-container text-center\">
                                <div data-filter=\"*\" class=\"cbp-filter-item-active cbp-filter-item\">All</div>
                                <div data-filter=\".1\" class=\"cbp-filter-item\">Nature</div>
                                <div data-filter=\".2\" class=\"cbp-filter-item\">Portrait</div>
                                <div data-filter=\".3\" class=\"cbp-filter-item\">Outdoor</div>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"divide25\"></div>
                            <div id=\"js-grid-lightbox\" class=\"cbp cbp-l-grid-inline light-gallery\">
                                {% for article in articles%}
                                    <div class=\"cbp-item {{ article.category}} conceptual food-drink\"> <a href=\"{{ path('article_view', {'id': article.id}) }}\" class=\"cbp-caption\" >
                                            <div class=\"cbp-caption-defaultWrap\"> <img width=\"200px\" src=\"{{ asset('uploads/photos/' ~ article.photo) }}\" alt=\"\"> </div>
                                            <div class=\"cbp-caption-activeWrap\">
                                                <div class=\"cbp-l-caption-alignCenter\">
                                                    <div class=\"cbp-l-caption-body\">
                                                        <div class=\"cbp-l-caption-title\">
                                                            <h5>{{ article.title }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id=\"caption{{ article.id }}\" class=\"hidden\">
                                                <a href=\"{{ path('article_view', {'id': article.id}) }}\"><h4>{{ article.title }}</h4></a>
                                                <p>{{ article.author }}</p>
                                            </div>
                                        </a> </div>

                                {% endfor %}
                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.dark-wrapper -->
                </section>
            </div>
            <!-- /.container -->

        </div>
        <!-- /.light-wrapper -->
    </div>
{% endblock %}

";
    }
}
