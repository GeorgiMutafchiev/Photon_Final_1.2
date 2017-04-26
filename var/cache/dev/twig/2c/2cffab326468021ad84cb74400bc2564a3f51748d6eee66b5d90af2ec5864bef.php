<?php

/* user/profile2.html.twig */
class __TwigTemplate_72cf8591ed59a2825d687676c8a9d54f10845afebc5ce4aa287b55e0dc9f3da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base3.html.twig", "user/profile2.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96db728e78e8547b48b2c2957841893a2d911e0602a95cf7ffef544f8ecc2a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96db728e78e8547b48b2c2957841893a2d911e0602a95cf7ffef544f8ecc2a1d->enter($__internal_96db728e78e8547b48b2c2957841893a2d911e0602a95cf7ffef544f8ecc2a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96db728e78e8547b48b2c2957841893a2d911e0602a95cf7ffef544f8ecc2a1d->leave($__internal_96db728e78e8547b48b2c2957841893a2d911e0602a95cf7ffef544f8ecc2a1d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c249d0bb6f79232dd9aecd0ff61bdbbb5ace37672766ecbe3b37de752a20bf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c249d0bb6f79232dd9aecd0ff61bdbbb5ace37672766ecbe3b37de752a20bf9a->enter($__internal_c249d0bb6f79232dd9aecd0ff61bdbbb5ace37672766ecbe3b37de752a20bf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"content-wrapper\" >

        <div class=\"light-wrapper\" >
            <div class=\"container inner\">
                <div class=\"blog row\">
                    <div class=\"col-sm-8\">
                        <div class=\"blog-content classic-view\">
                            <div class=\"blog-posts\">
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "                                <div class=\"post\">
                                    <div class=\"box\">
                                        <div class=\"post-content\">
                                            <h2 class=\"post-title text-center\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h2>
                                            <div class=\"meta text-center\"><span class=\"date\">Added on: ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "d-m-Y"), "html", null, true);
            echo "</span></div>
                                            <figure class=\"overlay\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\" /></a></figure>
                                            <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
            echo "</p>
                                            <div class=\"text-center\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"more\">Read More</a></div>
                                        </div>
                                        <!-- /.post-content -->

                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.post -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </div>
                            <!-- /.blog-posts -->

                        </div>
                        <!-- /.classic-view -->

                        <div class=\"grid-view\">
                            <div class=\"row blog-posts blog-content\">
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 38
            echo "                                    ";
            if (($this->getAttribute($context["loop"], "index", array()) > 2)) {
                // line 39
                echo "                                <div class=\"post col-sm-12 col-md-6\">
                                    <div class=\"box\">
                                        <h3 class=\"post-title text-center\"><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a></h3>
                                        <div class=\"meta text-center\"><span class=\"date\">Added on: ";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "d-m-Y"), "html", null, true);
                echo "</span></div>
                                        <figure class=\"overlay\"><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"> <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
                echo "\" alt=\"\" /></a></figure>
                                        <div class=\"post-content\">
                                            <p>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
                echo "</p>
                                            <div class=\"text-center\"><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"more\">Read More</a></div>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                ";
            }
            // line 53
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                <!-- /.post -->
                                <hr />
                                <!-- /.post -->

                            </div>
                            <!-- /.blog-posts -->

                        </div>
                        <!-- /.grid-view -->
                        <!-- /.pagination -->
                        <div class=\"clearfix\"></div>
                    </div>
                    <!-- /.blog-content -->

                    <aside class=\"col-sm-4 sidebar\">
                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">About Me</h5>
                            <figure> <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()))), "html", null, true);
        echo "\" class=\"img-auto\" alt=\"\" /> </figure>
                            <div class=\"divide10\"></div>
                            <p>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "</p>
                            <ul class=\"social\">
                                ";
        // line 75
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook", array()) != "no")) {
            // line 76
            echo "                                <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook", array()), "html", null, true);
            echo "\"><i class=\"ion-social-facebook\"></i></a> </li>
                                ";
        }
        // line 78
        echo "                                ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()) != "no")) {
            // line 79
            echo "                                <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()), "html", null, true);
            echo "\"><i class=\"ion-social-twitter\"></i></a> </li>
                                ";
        }
        // line 81
        echo "                                ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "instagram", array()) != "no")) {
            // line 82
            echo "                                <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "instagram", array()), "html", null, true);
            echo "\"><i class=\"ion-social-instagram\"></i></a> </li>
                                ";
        }
        // line 84
        echo "                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- /.widget -->

                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">Older Posts</h5>
                            <ul class=\"post-list\">
                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0, 5));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 93
            echo "                                ";
            if (($this->getAttribute($context["loop"], "index", array()) > 2)) {
                // line 94
                echo "                                <li>
                                    <figure class=\"overlay small\"> <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
                echo "\" alt=\"\" /> </a> </figure>
                                    <div class=\"post-content\">
                                        <h6 class=\"post-title\"> <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a> </h6>
                                        <div class=\"meta\"><span class=\"date\">Added on: ";
                // line 98
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "d-m-Y"), "html", null, true);
                echo "</span></div>
                                    </div>
                                </li>
                                ";
            }
            // line 102
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                            </ul>
                            <!-- /.post-list -->
                        </div>
                        <!-- /.widget -->

                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">Pages</h5>
                            <ul class=\"list circled\">
                                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 112
            echo "                                    <li style=\"font-size: 20px;\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_view", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "src" => $this->getAttribute($context["page"], "src", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                            </ul>
                        </div>
                        <!-- /.widget -->
                        <!-- /.widget -->
                    </aside>
                    <!-- /column .sidebar -->

                </div>
                <!-- /.blog -->
            </div>
            <!-- /.container -->

        </div>
        <!-- /.light-wrapper -->
    </div>
    <!-- /.content-wrapper -->

";
        
        $__internal_c249d0bb6f79232dd9aecd0ff61bdbbb5ace37672766ecbe3b37de752a20bf9a->leave($__internal_c249d0bb6f79232dd9aecd0ff61bdbbb5ace37672766ecbe3b37de752a20bf9a_prof);

    }

    public function getTemplateName()
    {
        return "user/profile2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 114,  309 => 112,  305 => 111,  295 => 103,  281 => 102,  274 => 98,  268 => 97,  261 => 95,  258 => 94,  255 => 93,  238 => 92,  228 => 84,  222 => 82,  219 => 81,  213 => 79,  210 => 78,  204 => 76,  202 => 75,  197 => 73,  192 => 71,  173 => 54,  159 => 53,  149 => 46,  145 => 45,  138 => 43,  134 => 42,  128 => 41,  124 => 39,  121 => 38,  104 => 37,  94 => 29,  79 => 20,  75 => 19,  69 => 18,  65 => 17,  59 => 16,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base3.html.twig' %}

{% block main %}
    <div class=\"content-wrapper\" >

        <div class=\"light-wrapper\" >
            <div class=\"container inner\">
                <div class=\"blog row\">
                    <div class=\"col-sm-8\">
                        <div class=\"blog-content classic-view\">
                            <div class=\"blog-posts\">
                            {% for article in articles|slice(0,2) %}
                                <div class=\"post\">
                                    <div class=\"box\">
                                        <div class=\"post-content\">
                                            <h2 class=\"post-title text-center\"><a href=\"{{ path('article_view', {'id': article.id}) }}\">{{ article.title }}</a></h2>
                                            <div class=\"meta text-center\"><span class=\"date\">Added on: {{ article.dateAdded|date('d-m-Y') }}</span></div>
                                            <figure class=\"overlay\"><a href=\"{{ path('article_view', {'id': article.id}) }}\"><img src=\"{{ asset('uploads/photos/' ~ article.photo) }}\" alt=\"\" /></a></figure>
                                            <p>{{ article.summary }}</p>
                                            <div class=\"text-center\"><a href=\"{{ path('article_view', {'id': article.id}) }}\" class=\"more\">Read More</a></div>
                                        </div>
                                        <!-- /.post-content -->

                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.post -->
                            {% endfor %}
                            </div>
                            <!-- /.blog-posts -->

                        </div>
                        <!-- /.classic-view -->

                        <div class=\"grid-view\">
                            <div class=\"row blog-posts blog-content\">
                                {% for article in articles %}
                                    {% if(loop.index > 2) %}
                                <div class=\"post col-sm-12 col-md-6\">
                                    <div class=\"box\">
                                        <h3 class=\"post-title text-center\"><a href=\"{{ path('article_view', {'id': article.id}) }}\">{{ article.title }}</a></h3>
                                        <div class=\"meta text-center\"><span class=\"date\">Added on: {{ article.dateAdded|date('d-m-Y') }}</span></div>
                                        <figure class=\"overlay\"><a href=\"{{ path('article_view', {'id': article.id}) }}\"> <img src=\"{{ asset('uploads/photos/' ~ article.photo) }}\" alt=\"\" /></a></figure>
                                        <div class=\"post-content\">
                                            <p>{{ article.summary }}</p>
                                            <div class=\"text-center\"><a href=\"{{ path('article_view', {'id': article.id}) }}\" class=\"more\">Read More</a></div>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                {% endif %}
                                {% endfor %}
                                <!-- /.post -->
                                <hr />
                                <!-- /.post -->

                            </div>
                            <!-- /.blog-posts -->

                        </div>
                        <!-- /.grid-view -->
                        <!-- /.pagination -->
                        <div class=\"clearfix\"></div>
                    </div>
                    <!-- /.blog-content -->

                    <aside class=\"col-sm-4 sidebar\">
                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">About Me</h5>
                            <figure> <img src=\"{{ asset('uploads/photos/' ~ user.photo) }}\" class=\"img-auto\" alt=\"\" /> </figure>
                            <div class=\"divide10\"></div>
                            <p>{{ user.fullName }}</p>
                            <ul class=\"social\">
                                {% if(user.facebook != \"no\") %}
                                <li> <a target=\"_blank\" href=\"{{ user.facebook }}\"><i class=\"ion-social-facebook\"></i></a> </li>
                                {% endif %}
                                {% if(user.twitter != \"no\") %}
                                <li> <a target=\"_blank\" href=\"{{ user.twitter }}\"><i class=\"ion-social-twitter\"></i></a> </li>
                                {% endif %}
                                {% if(user.instagram != \"no\") %}
                                <li> <a target=\"_blank\" href=\"{{ user.instagram }}\"><i class=\"ion-social-instagram\"></i></a> </li>
                                {% endif %}
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- /.widget -->

                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">Older Posts</h5>
                            <ul class=\"post-list\">
                                {% for article in articles|slice(0,5) %}
                                {% if(loop.index > 2) %}
                                <li>
                                    <figure class=\"overlay small\"> <a href=\"{{ path('article_view', {'id': article.id}) }}\"><img src=\"{{ asset('uploads/photos/' ~ article.photo) }}\" alt=\"\" /> </a> </figure>
                                    <div class=\"post-content\">
                                        <h6 class=\"post-title\"> <a href=\"{{ path('article_view', {'id': article.id}) }}\">{{ article.title }}</a> </h6>
                                        <div class=\"meta\"><span class=\"date\">Added on: {{ article.dateAdded|date('d-m-Y') }}</span></div>
                                    </div>
                                </li>
                                {% endif %}
                                {% endfor %}
                            </ul>
                            <!-- /.post-list -->
                        </div>
                        <!-- /.widget -->

                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">Pages</h5>
                            <ul class=\"list circled\">
                                {% for page in pages %}
                                    <li style=\"font-size: 20px;\"><a href=\"{{ path('page_view', {id: user.id, src: page.src}) }}\">{{ page.name }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>
                        <!-- /.widget -->
                        <!-- /.widget -->
                    </aside>
                    <!-- /column .sidebar -->

                </div>
                <!-- /.blog -->
            </div>
            <!-- /.container -->

        </div>
        <!-- /.light-wrapper -->
    </div>
    <!-- /.content-wrapper -->

{% endblock %}

";
    }
}
