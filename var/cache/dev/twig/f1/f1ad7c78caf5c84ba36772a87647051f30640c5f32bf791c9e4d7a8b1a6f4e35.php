<?php

/* user/profile1.html.twig */
class __TwigTemplate_47482feb93010c531eb266dc2d5dabb76e4db5dc7ed1c201e9b76194e225e3df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "user/profile1.html.twig", 1);
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
        $__internal_269ac21824d624e9486fd61b7dec43a8e06d78ab587375142f4557a2793f416f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269ac21824d624e9486fd61b7dec43a8e06d78ab587375142f4557a2793f416f->enter($__internal_269ac21824d624e9486fd61b7dec43a8e06d78ab587375142f4557a2793f416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_269ac21824d624e9486fd61b7dec43a8e06d78ab587375142f4557a2793f416f->leave($__internal_269ac21824d624e9486fd61b7dec43a8e06d78ab587375142f4557a2793f416f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_07c183221d687d70b3a8e1d000073f3d4a9084730ef1dfbbdbea4aaee7d33d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c183221d687d70b3a8e1d000073f3d4a9084730ef1dfbbdbea4aaee7d33d3a->enter($__internal_07c183221d687d70b3a8e1d000073f3d4a9084730ef1dfbbdbea4aaee7d33d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"blog row\">
                    <div class=\"col-sm-8 blog-content grid-view\">
                        <div class=\"blog-content\">
                            <div class=\"row blog-posts\">
                                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "                                <div class=\"post col-sm-12 col-md-6\">
                                    <div class=\"box\">
                                        <h3 class=\"post-title text-center\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h3>
                                        <div class=\"meta text-center\"><span class=\"date\">Added on: ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "d-m-Y"), "html", null, true);
            echo "</span></div>
                                        <figure class=\"overlay\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\" /></a></figure>
                                        <div class=\"post-content\">
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
        // line 28
        echo "                                <hr />

                            </div>
                            <!-- /.blog-posts -->

                        </div>
                        <!-- /.blog-content -->

                    </div>
                    <!-- /.blog-content -->

                    <aside class=\"col-sm-4 sidebar\">
                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">About Me</h5>
                            <figure> <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()))), "html", null, true);
        echo "\" class=\"img-auto\" alt=\"\" /> </figure>
                            <div class=\"divide10\"></div>
                            <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "description", array()), "html", null, true);
        echo "</p>
                            <ul class=\"social\">
                                ";
        // line 46
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook", array()) != "no")) {
            // line 47
            echo "                                    <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook", array()), "html", null, true);
            echo "\"><i class=\"ion-social-facebook\"></i></a> </li>
                                ";
        }
        // line 49
        echo "                                ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()) != "no")) {
            // line 50
            echo "                                    <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()), "html", null, true);
            echo "\"><i class=\"ion-social-twitter\"></i></a> </li>
                                ";
        }
        // line 52
        echo "                                ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "instagram", array()) != "no")) {
            // line 53
            echo "                                    <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "instagram", array()), "html", null, true);
            echo "\"><i class=\"ion-social-instagram\"></i></a> </li>
                                ";
        }
        // line 55
        echo "                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- /.widget -->

                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">Older Posts</h5>
                            <ul class=\"post-list\">
                                ";
        // line 63
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
            // line 64
            echo "                                    ";
            if (($this->getAttribute($context["loop"], "index", array()) > 2)) {
                // line 65
                echo "                                        <li>
                                            <figure class=\"overlay small\"> <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
                echo "\" alt=\"\" /> </a> </figure>
                                            <div class=\"post-content\">
                                                <h6 class=\"post-title\"> <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a> </h6>
                                                <div class=\"meta\"><span class=\"date\">Added on: ";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "d-m-Y"), "html", null, true);
                echo "</span></div>
                                            </div>
                                        </li>
                                    ";
            }
            // line 73
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
        // line 74
        echo "                            </ul>
                            <!-- /.post-list -->
                        </div>
                        <!-- /.widget -->

                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">Categories</h5>
                            <ul class=\"list circled\">
                                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 83
            echo "                                    <li style=\"font-size: 20px;\"><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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

";
        
        $__internal_07c183221d687d70b3a8e1d000073f3d4a9084730ef1dfbbdbea4aaee7d33d3a->leave($__internal_07c183221d687d70b3a8e1d000073f3d4a9084730ef1dfbbdbea4aaee7d33d3a_prof);

    }

    public function getTemplateName()
    {
        return "user/profile1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 85,  226 => 83,  222 => 82,  212 => 74,  198 => 73,  191 => 69,  185 => 68,  178 => 66,  175 => 65,  172 => 64,  155 => 63,  145 => 55,  139 => 53,  136 => 52,  130 => 50,  127 => 49,  121 => 47,  119 => 46,  114 => 44,  109 => 42,  93 => 28,  79 => 20,  75 => 19,  68 => 17,  64 => 16,  58 => 15,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block main %}
    <div class=\"content-wrapper\">

        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"blog row\">
                    <div class=\"col-sm-8 blog-content grid-view\">
                        <div class=\"blog-content\">
                            <div class=\"row blog-posts\">
                                {% for article in articles %}
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
                                <!-- /.post -->
                                {% endfor %}
                                <hr />

                            </div>
                            <!-- /.blog-posts -->

                        </div>
                        <!-- /.blog-content -->

                    </div>
                    <!-- /.blog-content -->

                    <aside class=\"col-sm-4 sidebar\">
                        <div class=\"sidebox widget\">
                            <h5 class=\"widget-title\">About Me</h5>
                            <figure> <img src=\"{{ asset('uploads/photos/' ~ user.photo) }}\" class=\"img-auto\" alt=\"\" /> </figure>
                            <div class=\"divide10\"></div>
                            <p>{{ user.description }}</p>
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
                            <h5 class=\"widget-title\">Categories</h5>
                            <ul class=\"list circled\">
                                {% for category in categories %}
                                    <li style=\"font-size: 20px;\"><a href=\"#\">{{ category.name }}</a></li>
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

{% endblock %}

";
    }
}
