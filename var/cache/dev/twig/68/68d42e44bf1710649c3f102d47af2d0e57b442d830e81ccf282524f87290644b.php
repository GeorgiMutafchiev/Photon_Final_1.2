<?php

/* user/settings.html.twig */
class __TwigTemplate_bcf49121a25bb418296c724d362edf905a6e9953e2feb34e2ce2a8f5b5310a54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "user/settings.html.twig", 1);
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
        $__internal_efca4c7f40429fa1eb31a8fecc911edccd05e28e586d70bd3bfa7d81744fd697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efca4c7f40429fa1eb31a8fecc911edccd05e28e586d70bd3bfa7d81744fd697->enter($__internal_efca4c7f40429fa1eb31a8fecc911edccd05e28e586d70bd3bfa7d81744fd697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/settings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efca4c7f40429fa1eb31a8fecc911edccd05e28e586d70bd3bfa7d81744fd697->leave($__internal_efca4c7f40429fa1eb31a8fecc911edccd05e28e586d70bd3bfa7d81744fd697_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_27d078f6bbdba3f7894146505eb749d1d87bb3d9da02315f3faa5598cae38250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d078f6bbdba3f7894146505eb749d1d87bb3d9da02315f3faa5598cae38250->enter($__internal_27d078f6bbdba3f7894146505eb749d1d87bb3d9da02315f3faa5598cae38250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_edit");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                <fieldset>
                    <legend>Account settings</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fullName\">Change Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fullName\" placeholder=\"Full Name\"
                                   name=\"user[fullName]\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"user[password]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"user[photo]\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"user[status]\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <img width=\"400px\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()))), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">First Type
                           </label>
                        <div class=\"col-sm-4 \">
                            <input type=\"radio\" name=\"user[profiletype]\" value=\"first\" checked=\"checked\" />
                            <img width=\"300px\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/profile1.JPG"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Second Type
                        </label>
                        <div class=\"col-sm-4 \">
                            <input type=\"radio\" name=\"user[profiletype]\" value=\"second\" />
                            <img width=\"300px\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/profile2.JPG"), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fb\">Change Facebook</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fb\" placeholder=\"Facebook\"
                                   name=\"user[facebook]\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tw\">Change Twitter</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_tw\" placeholder=\"Twitter\"
                                   name=\"user[twitter]\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_ins\">Change Instagram</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_ins\" placeholder=\"Instagram\"
                                   name=\"user[instagram]\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "instagram", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Change Description</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"user[description]\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "description", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_articles");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <br>
            <fieldset>
                <legend>Add pages:</legend>
            <div class=\"form-group\">
                <div class=\"col-sm-4 col-sm-offset-4\">
                    <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_create");
        echo "\"><button class=\"btn btn-success\">Create new page</button></a>
                </div>
            </div>
            <br>
            </fieldset>
        </div>
    </div>
";
        
        $__internal_27d078f6bbdba3f7894146505eb749d1d87bb3d9da02315f3faa5598cae38250->leave($__internal_27d078f6bbdba3f7894146505eb749d1d87bb3d9da02315f3faa5598cae38250_prof);

    }

    public function getTemplateName()
    {
        return "user/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 108,  180 => 97,  173 => 93,  166 => 89,  155 => 81,  144 => 73,  133 => 65,  122 => 57,  111 => 49,  100 => 41,  88 => 32,  77 => 24,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('profile_edit') }}\" method=\"POST\" enctype=\"multipart/form-data\">
                <fieldset>
                    <legend>Account settings</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fullName\">Change Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fullName\" placeholder=\"Full Name\"
                                   name=\"user[fullName]\" value=\"{{ user.fullName }}\">
                            <input type=\"hidden\" name=\"user[password]\" value=\"{{ user.password }}\">
                            <input type=\"hidden\" name=\"user[photo]\" value=\"{{ user.photo }}\">
                            <input type=\"hidden\" name=\"user[status]\" value=\"{{ user.status }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <img width=\"400px\" src=\"{{ asset('uploads/photos/' ~ user.photo) }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"{{ user.email }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">First Type
                           </label>
                        <div class=\"col-sm-4 \">
                            <input type=\"radio\" name=\"user[profiletype]\" value=\"first\" checked=\"checked\" />
                            <img width=\"300px\" src=\"{{ asset('images/art/profile1.JPG') }}\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Second Type
                        </label>
                        <div class=\"col-sm-4 \">
                            <input type=\"radio\" name=\"user[profiletype]\" value=\"second\" />
                            <img width=\"300px\" src=\"{{ asset('images/art/profile2.JPG') }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fb\">Change Facebook</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fb\" placeholder=\"Facebook\"
                                   name=\"user[facebook]\" value=\"{{ user.facebook }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tw\">Change Twitter</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_tw\" placeholder=\"Twitter\"
                                   name=\"user[twitter]\" value=\"{{ user.twitter }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_ins\">Change Instagram</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_ins\" placeholder=\"Instagram\"
                                   name=\"user[instagram]\" value=\"{{ user.instagram }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"{{ user.email }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Change Description</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"user[description]\">{{ user.description }}</textarea>
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('list_articles') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <br>
            <fieldset>
                <legend>Add pages:</legend>
            <div class=\"form-group\">
                <div class=\"col-sm-4 col-sm-offset-4\">
                    <a href=\"{{ path('page_create') }}\"><button class=\"btn btn-success\">Create new page</button></a>
                </div>
            </div>
            <br>
            </fieldset>
        </div>
    </div>
{% endblock %}

";
    }
}
