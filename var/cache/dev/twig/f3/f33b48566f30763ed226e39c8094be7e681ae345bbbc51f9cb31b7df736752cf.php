<?php

/* form/fields.html.twig */
class __TwigTemplate_3ba0a53d332c88c1b07b9f04da5107a19c7a96f8d93ed00c854c28ec36436268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1894d2094cdbade9b17f64aed445198b7b27bc85ada6328b118cee73d8f67e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1894d2094cdbade9b17f64aed445198b7b27bc85ada6328b118cee73d8f67e34->enter($__internal_1894d2094cdbade9b17f64aed445198b7b27bc85ada6328b118cee73d8f67e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_1894d2094cdbade9b17f64aed445198b7b27bc85ada6328b118cee73d8f67e34->leave($__internal_1894d2094cdbade9b17f64aed445198b7b27bc85ada6328b118cee73d8f67e34_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_354949a32cc08392c81c1aa48442014dbe54e5a390a03a44f4290106d4324e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354949a32cc08392c81c1aa48442014dbe54e5a390a03a44f4290106d4324e51->enter($__internal_354949a32cc08392c81c1aa48442014dbe54e5a390a03a44f4290106d4324e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_354949a32cc08392c81c1aa48442014dbe54e5a390a03a44f4290106d4324e51->leave($__internal_354949a32cc08392c81c1aa48442014dbe54e5a390a03a44f4290106d4324e51_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
