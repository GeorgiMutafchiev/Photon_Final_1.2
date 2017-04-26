<?php

/* article/article.html.twig */
class __TwigTemplate_b2222bd83f7d48bcafc13fda429181cbb004a19a627589f4bee64a86e14eef08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base3.html.twig", "article/article.html.twig", 1);
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
        $__internal_6d9e88790bf11a4ee97e69cdde13bed60c08be5e0f83f530089e014d3df405f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9e88790bf11a4ee97e69cdde13bed60c08be5e0f83f530089e014d3df405f9->enter($__internal_6d9e88790bf11a4ee97e69cdde13bed60c08be5e0f83f530089e014d3df405f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9e88790bf11a4ee97e69cdde13bed60c08be5e0f83f530089e014d3df405f9->leave($__internal_6d9e88790bf11a4ee97e69cdde13bed60c08be5e0f83f530089e014d3df405f9_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_89616679289374309b3432591a24f6b82caf08bfd1939cc10e6b1aaea4fb01f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89616679289374309b3432591a24f6b82caf08bfd1939cc10e6b1aaea4fb01f4->enter($__internal_89616679289374309b3432591a24f6b82caf08bfd1939cc10e6b1aaea4fb01f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"light-wrapper\">
        <div class=\"container inner\">
            <div class=\"blog row\">
                <div class=\"col-sm-12\">
                    <div class=\"blog-content classic-view single\">
                        <div class=\"blog-posts\">
                            <div class=\"post\">
                                <div class=\"box\">
                                    <div class=\"post-content\">
                                        <h1 class=\"post-title text-center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h1>
                                        <div class=\"meta text-center\"><span class=\"date\">Added on: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateAdded", array()), "d-m-Y"), "html", null, true);
        echo "</span></div>
                                        <figure><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "photo", array()))), "html", null, true);
        echo "\" alt=\"\" /></figure>
                                        <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</p>
                                        <div class=\"divide10\"></div>
                                        <div class=\"divide10\"></div><div class=\"share share-wrapper text-center\"> <a href=\"#\" class=\"btn btn-share share-facebook\">Like</a> <a href=\"#\" class=\"btn btn-share share-twitter\">Tweet</a> <a href=\"#\" class=\"btn btn-share share-pinterest\">Pin It</a> </div>
                                        <!-- /.share-wrapper -->

                                        <hr />

                                        <div class=\"post-nav-wrapper\">
                                            <div class=\"post-nav prev\">
                                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allarticles"]) ? $context["allarticles"] : $this->getContext($context, "allarticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 27
            echo "                                                ";
            if ((($this->getAttribute($context["art"], "id", array()) + 1) == $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))) {
                // line 28
                echo "                                                <div class=\"meta\"><i class=\"ion-android-arrow-back\"></i> Previous Article</div>
                                                <h3 class=\"post-title\"><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["art"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "title", array()), "html", null, true);
                echo "</a></h3>
                                                ";
            }
            // line 30
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                                            </div>
                                            <div class=\"post-nav next\">
                                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allarticles"]) ? $context["allarticles"] : $this->getContext($context, "allarticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 34
            echo "                                                ";
            if ((($this->getAttribute($context["art"], "id", array()) - 1) == $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))) {
                // line 35
                echo "                                                <div class=\"meta\">Next Article <i class=\"ion-android-arrow-forward\"></i></div>
                                                <h3 class=\"post-title\"><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["art"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "title", array()), "html", null, true);
                echo "</a></h3>
                                                ";
            }
            // line 37
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                            </div>
                                        </div>
                                        <!-- /.post-nav -->

                                        <hr />
                                        <div class=\"about-author text-left\">
                                            <div class=\"author-image\"><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_see", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()))), "html", null, true);
        echo "\"><img alt=\"\" width=\"200px\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "photo", array()))), "html", null, true);
        echo "\" /></a></div>
                                            <h4>About the Author</h4>
                                            <p><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_see", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "fullName", array()), "html", null, true);
        echo "</a></p>
                                            <ul class=\"social\">
                                                ";
        // line 48
        if (($this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "facebook", array()) != "no")) {
            // line 49
            echo "                                                    <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "facebook", array()), "html", null, true);
            echo "\"><i class=\"ion-social-facebook\"></i></a> </li>
                                                ";
        }
        // line 51
        echo "                                                ";
        if (($this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "twitter", array()) != "no")) {
            // line 52
            echo "                                                    <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "twitter", array()), "html", null, true);
            echo "\"><i class=\"ion-social-twitter\"></i></a> </li>
                                                ";
        }
        // line 54
        echo "                                                ";
        if (($this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "instagram", array()) != "no")) {
            // line 55
            echo "                                                    <li> <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "instagram", array()), "html", null, true);
            echo "\"><i class=\"ion-social-instagram\"></i></a> </li>
                                                ";
        }
        // line 57
        echo "                                            </ul>
                                            <div class=\"clearfix\"></div>
                                        </div>
                                        <!-- .about-author -->

                                        <hr />
                                        <div id=\"comments\" class=\"text-left\">
                                            <h4>Comments on \"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "\"</h4>
                                            <ol id=\"singlecomments\" class=\"commentlist\">
                                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 67
            echo "                                                <li>
                                                    <div class=\"message\">
                                                        <div class=\"user\"><img alt=\"\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/u4.jpg"), "html", null, true);
            echo "\" class=\"avatar\" /></div>
                                                        <div class=\"message-inner\">
                                                            <div class=\"info\">
                                                                <h5><a href=\"#\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "sender", array()), "html", null, true);
            echo "</a></h5>
                                                                <div class=\"meta\"> <span class=\"date\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "email", array()), "html", null, true);
            echo "</span></div>
                                                            </div>
                                                            <h4>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "department", array()), "html", null, true);
            echo "</h4>
                                                            <p>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "message", array()), "html", null, true);
            echo "</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                            </ol>
                                        </div>
                                        <!-- /#comments -->

                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.post -->

                            <div class=\"comment-form-wrapper text-left\">
                                <h4>Would you like to share your thoughts?</h4>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form class=\"form-horizontal\" action=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                                    <fieldset>
                                    <div class=\"name-field\">
                                        <input type=\"text\" name=\"message[sender]\" class=\"form-control\" placeholder=\"Name*\" title=\"Name*\" >
                                    </div>
                                    <div class=\"email-field\">
                                        <input type=\"text\" name=\"message[email]\" placeholder=\"Email*\" title=\"Email*\" >
                                    </div>
                                    <div class=\"website-field\">
                                        <input type=\"text\" name=\"message[department]\" placeholder=\"Subject*\" >
                                    </div>
                                    <div class=\"message-field\">
                                        <textarea name=\"message[message]\" id=\"textarea\" rows=\"5\" cols=\"30\" placeholder=\"Enter your comment here...\"></textarea>
                                    </div>
                                    ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                                    <input type=\"submit\" value=\"Submit\" name=\"submit\" class=\"btn btn-submit\" >
                                    </fieldset>
                                </form>
                            </div>
                            <!-- /.comment-form-wrapper -->
                        </div>
                        <!-- /.blog-posts -->

                    </div>
                    <!-- /.classic-view -->

                </div>
                <!-- /.blog-content -->
            </div>
            <!-- /.blog -->
        </div>
        <!-- /.container -->

    </div>
";
        
        $__internal_89616679289374309b3432591a24f6b82caf08bfd1939cc10e6b1aaea4fb01f4->leave($__internal_89616679289374309b3432591a24f6b82caf08bfd1939cc10e6b1aaea4fb01f4_prof);

    }

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 109,  242 => 95,  226 => 81,  215 => 76,  211 => 75,  206 => 73,  202 => 72,  196 => 69,  192 => 67,  188 => 66,  183 => 64,  174 => 57,  168 => 55,  165 => 54,  159 => 52,  156 => 51,  150 => 49,  148 => 48,  141 => 46,  134 => 44,  126 => 38,  120 => 37,  113 => 36,  110 => 35,  107 => 34,  103 => 33,  99 => 31,  93 => 30,  86 => 29,  83 => 28,  80 => 27,  76 => 26,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base3.html.twig' %}

{% block main %}

    <div class=\"light-wrapper\">
        <div class=\"container inner\">
            <div class=\"blog row\">
                <div class=\"col-sm-12\">
                    <div class=\"blog-content classic-view single\">
                        <div class=\"blog-posts\">
                            <div class=\"post\">
                                <div class=\"box\">
                                    <div class=\"post-content\">
                                        <h1 class=\"post-title text-center\">{{ article.title }}</h1>
                                        <div class=\"meta text-center\"><span class=\"date\">Added on: {{ article.dateAdded|date('d-m-Y') }}</span></div>
                                        <figure><img src=\"{{ asset('uploads/photos/' ~ article.photo) }}\" alt=\"\" /></figure>
                                        <p>{{ article.content }}</p>
                                        <div class=\"divide10\"></div>
                                        <div class=\"divide10\"></div><div class=\"share share-wrapper text-center\"> <a href=\"#\" class=\"btn btn-share share-facebook\">Like</a> <a href=\"#\" class=\"btn btn-share share-twitter\">Tweet</a> <a href=\"#\" class=\"btn btn-share share-pinterest\">Pin It</a> </div>
                                        <!-- /.share-wrapper -->

                                        <hr />

                                        <div class=\"post-nav-wrapper\">
                                            <div class=\"post-nav prev\">
                                                {% for art in allarticles %}
                                                {% if((art.id + 1) == article.id) %}
                                                <div class=\"meta\"><i class=\"ion-android-arrow-back\"></i> Previous Article</div>
                                                <h3 class=\"post-title\"><a href=\"{{ path('article_view', {'id': art.id}) }}\">{{ art.title }}</a></h3>
                                                {% endif %} {% endfor %}
                                            </div>
                                            <div class=\"post-nav next\">
                                                {% for art in allarticles %}
                                                {% if((art.id - 1) == article.id) %}
                                                <div class=\"meta\">Next Article <i class=\"ion-android-arrow-forward\"></i></div>
                                                <h3 class=\"post-title\"><a href=\"{{ path('article_view', {'id': art.id}) }}\">{{ art.title }}</a></h3>
                                                {% endif %} {% endfor %}
                                            </div>
                                        </div>
                                        <!-- /.post-nav -->

                                        <hr />
                                        <div class=\"about-author text-left\">
                                            <div class=\"author-image\"><a href=\"{{ path('profile_see', {id: author.id}) }}\"><img alt=\"\" width=\"200px\" src=\"{{ asset('uploads/photos/' ~ author.photo) }}\" /></a></div>
                                            <h4>About the Author</h4>
                                            <p><a href=\"{{ path('profile_see', {id: author.id}) }}\">{{ author.fullName }}</a></p>
                                            <ul class=\"social\">
                                                {% if(author.facebook != \"no\") %}
                                                    <li> <a target=\"_blank\" href=\"{{ author.facebook }}\"><i class=\"ion-social-facebook\"></i></a> </li>
                                                {% endif %}
                                                {% if(author.twitter != \"no\") %}
                                                    <li> <a target=\"_blank\" href=\"{{ author.twitter }}\"><i class=\"ion-social-twitter\"></i></a> </li>
                                                {% endif %}
                                                {% if(author.instagram != \"no\") %}
                                                    <li> <a target=\"_blank\" href=\"{{ author.instagram }}\"><i class=\"ion-social-instagram\"></i></a> </li>
                                                {% endif %}
                                            </ul>
                                            <div class=\"clearfix\"></div>
                                        </div>
                                        <!-- .about-author -->

                                        <hr />
                                        <div id=\"comments\" class=\"text-left\">
                                            <h4>Comments on \"{{ article.title }}\"</h4>
                                            <ol id=\"singlecomments\" class=\"commentlist\">
                                                {% for comment in comments %}
                                                <li>
                                                    <div class=\"message\">
                                                        <div class=\"user\"><img alt=\"\" src=\"{{ asset('images/art/u4.jpg') }}\" class=\"avatar\" /></div>
                                                        <div class=\"message-inner\">
                                                            <div class=\"info\">
                                                                <h5><a href=\"#\">{{ comment.sender }}</a></h5>
                                                                <div class=\"meta\"> <span class=\"date\">{{ comment.email }}</span></div>
                                                            </div>
                                                            <h4>{{ comment.department }}</h4>
                                                            <p>{{ comment.message }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                {% endfor %}
                                            </ol>
                                        </div>
                                        <!-- /#comments -->

                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.post -->

                            <div class=\"comment-form-wrapper text-left\">
                                <h4>Would you like to share your thoughts?</h4>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form class=\"form-horizontal\" action=\"{{ path('article_view', {id: article.id}) }}\" method=\"post\">
                                    <fieldset>
                                    <div class=\"name-field\">
                                        <input type=\"text\" name=\"message[sender]\" class=\"form-control\" placeholder=\"Name*\" title=\"Name*\" >
                                    </div>
                                    <div class=\"email-field\">
                                        <input type=\"text\" name=\"message[email]\" placeholder=\"Email*\" title=\"Email*\" >
                                    </div>
                                    <div class=\"website-field\">
                                        <input type=\"text\" name=\"message[department]\" placeholder=\"Subject*\" >
                                    </div>
                                    <div class=\"message-field\">
                                        <textarea name=\"message[message]\" id=\"textarea\" rows=\"5\" cols=\"30\" placeholder=\"Enter your comment here...\"></textarea>
                                    </div>
                                    {{ form_row(form._token) }}
                                    <input type=\"submit\" value=\"Submit\" name=\"submit\" class=\"btn btn-submit\" >
                                    </fieldset>
                                </form>
                            </div>
                            <!-- /.comment-form-wrapper -->
                        </div>
                        <!-- /.blog-posts -->

                    </div>
                    <!-- /.classic-view -->

                </div>
                <!-- /.blog-content -->
            </div>
            <!-- /.blog -->
        </div>
        <!-- /.container -->

    </div>
{% endblock %}

";
    }
}
