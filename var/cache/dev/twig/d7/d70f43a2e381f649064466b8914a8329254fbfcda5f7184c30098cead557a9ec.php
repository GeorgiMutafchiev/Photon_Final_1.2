<?php

/* admin/user_edit.html.twig */
class __TwigTemplate_7fdce39dc1a8dea880f08efcee54fc233e2de4d3a59abb2408153ac90246d169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "admin/user_edit.html.twig", 1);
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
        $__internal_ef5f294da00f3e0cf50dd21283d95c8425b8b1d753d540cb66b06d4ef714ddaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5f294da00f3e0cf50dd21283d95c8425b8b1d753d540cb66b06d4ef714ddaa->enter($__internal_ef5f294da00f3e0cf50dd21283d95c8425b8b1d753d540cb66b06d4ef714ddaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef5f294da00f3e0cf50dd21283d95c8425b8b1d753d540cb66b06d4ef714ddaa->leave($__internal_ef5f294da00f3e0cf50dd21283d95c8425b8b1d753d540cb66b06d4ef714ddaa_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c2ee0cbf3fea4b6b9093fabb71a9aefb13c222acf3f95276adbd866e2cf01585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ee0cbf3fea4b6b9093fabb71a9aefb13c222acf3f95276adbd866e2cf01585->enter($__internal_c2ee0cbf3fea4b6b9093fabb71a9aefb13c222acf3f95276adbd866e2cf01585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                <fieldset>
                    <legend>User Edit:</legend>

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
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <img width=\"400px\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()))), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"";
        // line 31
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
        // line 40
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/profile2.JPG"), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fb\">Change Facebook</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fb\" placeholder=\"Facebook\"
                                   name=\"user[facebook]\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tw\">Change Twitter</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_tw\" placeholder=\"Twitter\"
                                   name=\"user[twitter]\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_ins\">Change Instagram</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_ins\" placeholder=\"Instagram\"
                                   name=\"user[instagram]\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "instagram", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Change Description</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"user[description]\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "description", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_category\">PROFILE STATUS</label>
                        <div class=\"col-sm-6\">
                            <select class=\"selectpicker\" name=\"user[status]\" id=\"user_status\" data-live-search=\"true\">
                                    <option value=\"ok\"><a style=\"color: white; background-color: limegreen; padding: 5px;\">WORKING</a></option>
                                    <option value=\"ban\"><a style=\"color: white; background-color: orangered; padding: 5px;\">BANNED</a></option>
                            </select>
                        </div>
                    </div>

                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_c2ee0cbf3fea4b6b9093fabb71a9aefb13c222acf3f95276adbd866e2cf01585->leave($__internal_c2ee0cbf3fea4b6b9093fabb71a9aefb13c222acf3f95276adbd866e2cf01585_prof);

    }

    public function getTemplateName()
    {
        return "admin/user_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 106,  179 => 102,  162 => 88,  151 => 80,  140 => 72,  129 => 64,  118 => 56,  107 => 48,  96 => 40,  84 => 31,  73 => 23,  63 => 16,  59 => 15,  55 => 14,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base2.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('admin_user_edit', {'id': user.id}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
                <fieldset>
                    <legend>User Edit:</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fullName\">Change Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fullName\" placeholder=\"Full Name\"
                                   name=\"user[fullName]\" value=\"{{ user.fullName }}\">
                            <input type=\"hidden\" name=\"user[password]\" value=\"{{ user.password }}\">
                            <input type=\"hidden\" name=\"user[photo]\" value=\"{{ user.photo }}\">
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

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_category\">PROFILE STATUS</label>
                        <div class=\"col-sm-6\">
                            <select class=\"selectpicker\" name=\"user[status]\" id=\"user_status\" data-live-search=\"true\">
                                    <option value=\"ok\"><a style=\"color: white; background-color: limegreen; padding: 5px;\">WORKING</a></option>
                                    <option value=\"ban\"><a style=\"color: white; background-color: orangered; padding: 5px;\">BANNED</a></option>
                            </select>
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('admin_users') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}

";
    }
}
