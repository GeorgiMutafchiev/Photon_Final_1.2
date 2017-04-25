<?php

/* admin/user_delete.html.twig */
class __TwigTemplate_9d73447c1dbf6d719b1d6d0f2b6ea703af5e2a944c00ee66487fff7e4a7b6869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "admin/user_delete.html.twig", 1);
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
        $__internal_f858a62fb8af7144061251bcefd0993866c4acbeb57504206d626b4cce863e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f858a62fb8af7144061251bcefd0993866c4acbeb57504206d626b4cce863e1e->enter($__internal_f858a62fb8af7144061251bcefd0993866c4acbeb57504206d626b4cce863e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user_delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f858a62fb8af7144061251bcefd0993866c4acbeb57504206d626b4cce863e1e->leave($__internal_f858a62fb8af7144061251bcefd0993866c4acbeb57504206d626b4cce863e1e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d93196c8dd586d2e17a0e8ff4a7faca9ffd925ca1174cd0ec43fd16535c6f2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93196c8dd586d2e17a0e8ff4a7faca9ffd925ca1174cd0ec43fd16535c6f2db->enter($__internal_d93196c8dd586d2e17a0e8ff4a7faca9ffd925ca1174cd0ec43fd16535c6f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>User Delete:</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fullName\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fullName\" placeholder=\"Full Name\"
                                   name=\"user[fullName]\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "\" disabled=\"disabled\">
                            <input type=\"hidden\" name=\"user[password]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "\" disabled=\"disabled\">
                            <input type=\"hidden\" name=\"user[photo]\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()), "html", null, true);
        echo "\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <img width=\"400px\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()))), "html", null, true);
        echo "\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">First Type
                        </label>
                        <div class=\"col-sm-4 \">
                            <input type=\"radio\" name=\"user[profiletype]\" value=\"first\" checked=\"checked\" disabled=\"disabled\" />
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
                            <input type=\"radio\" name=\"user[profiletype]\" value=\"second\" disabled=\"disabled\" />
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
        echo "\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tw\">Change Twitter</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_tw\" placeholder=\"Twitter\"
                                   name=\"user[twitter]\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()), "html", null, true);
        echo "\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_ins\">Change Instagram</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_ins\" placeholder=\"Instagram\"
                                   name=\"user[instagram]\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "instagram", array()), "html", null, true);
        echo "\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Change Description</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"user[description]\" disabled=\"disabled\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "description", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_category\">PROFILE STATUS</label>
                        <div class=\"col-sm-6\">
                            <select class=\"selectpicker\" name=\"user[status]\" id=\"user_status\" data-live-search=\"true\" disabled=\"disabled\">
                                <option value=\"ok\"><a style=\"color: white; background-color: limegreen; padding: 5px;\" disabled=\"disabled\">WORKING</a></option>
                                <option value=\"ban\"><a style=\"color: white; background-color: orangered; padding: 5px;\" disabled=\"disabled\">BANNED</a></option>
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
                            <button type=\"submit\" class=\"btn btn-success\">DELETE</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_d93196c8dd586d2e17a0e8ff4a7faca9ffd925ca1174cd0ec43fd16535c6f2db->leave($__internal_d93196c8dd586d2e17a0e8ff4a7faca9ffd925ca1174cd0ec43fd16535c6f2db_prof);

    }

    public function getTemplateName()
    {
        return "admin/user_delete.html.twig";
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
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('admin_user_delete', {id: user.id}) }}\" method=\"POST\">
                <fieldset>
                    <legend>User Delete:</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fullName\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fullName\" placeholder=\"Full Name\"
                                   name=\"user[fullName]\" value=\"{{ user.fullName }}\" disabled=\"disabled\">
                            <input type=\"hidden\" name=\"user[password]\" value=\"{{ user.password }}\" disabled=\"disabled\">
                            <input type=\"hidden\" name=\"user[photo]\" value=\"{{ user.photo }}\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <img width=\"400px\" src=\"{{ asset('uploads/photos/' ~ user.photo) }}\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"{{ user.email }}\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">First Type
                        </label>
                        <div class=\"col-sm-4 \">
                            <input type=\"radio\" name=\"user[profiletype]\" value=\"first\" checked=\"checked\" disabled=\"disabled\" />
                            <img width=\"300px\" src=\"{{ asset('images/art/profile1.JPG') }}\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Second Type
                        </label>
                        <div class=\"col-sm-4 \">
                            <input type=\"radio\" name=\"user[profiletype]\" value=\"second\" disabled=\"disabled\" />
                            <img width=\"300px\" src=\"{{ asset('images/art/profile2.JPG') }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_fb\">Change Facebook</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_fb\" placeholder=\"Facebook\"
                                   name=\"user[facebook]\" value=\"{{ user.facebook }}\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tw\">Change Twitter</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_tw\" placeholder=\"Twitter\"
                                   name=\"user[twitter]\" value=\"{{ user.twitter }}\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_ins\">Change Instagram</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_ins\" placeholder=\"Instagram\"
                                   name=\"user[instagram]\" value=\"{{ user.instagram }}\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_email\">Change Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_email\" placeholder=\"Email\"
                                   name=\"user[email]\" value=\"{{ user.email }}\" disabled=\"disabled\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Change Description</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"user[description]\" disabled=\"disabled\">{{ user.description }}</textarea>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_category\">PROFILE STATUS</label>
                        <div class=\"col-sm-6\">
                            <select class=\"selectpicker\" name=\"user[status]\" id=\"user_status\" data-live-search=\"true\" disabled=\"disabled\">
                                <option value=\"ok\"><a style=\"color: white; background-color: limegreen; padding: 5px;\" disabled=\"disabled\">WORKING</a></option>
                                <option value=\"ban\"><a style=\"color: white; background-color: orangered; padding: 5px;\" disabled=\"disabled\">BANNED</a></option>
                            </select>
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('admin_users') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">DELETE</button>
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
