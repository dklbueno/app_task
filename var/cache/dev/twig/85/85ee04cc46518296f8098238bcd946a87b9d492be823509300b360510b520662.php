<?php

/* :chamado:edit.html.twig */
class __TwigTemplate_729ddf7516a124f19af5af6d6da41cfe0471f5ec41916b212a4304670fd815bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chamado:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f196b2dbf50bfacb7d2c49672e50b41e64283afeda072088ac182d74a4f284d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f196b2dbf50bfacb7d2c49672e50b41e64283afeda072088ac182d74a4f284d3->enter($__internal_f196b2dbf50bfacb7d2c49672e50b41e64283afeda072088ac182d74a4f284d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:edit.html.twig"));

        $__internal_395e1b51eb1bee7ac3526749a30038b245bfc4a239d6f159ded392a4a6dd5ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395e1b51eb1bee7ac3526749a30038b245bfc4a239d6f159ded392a4a6dd5ec0->enter($__internal_395e1b51eb1bee7ac3526749a30038b245bfc4a239d6f159ded392a4a6dd5ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f196b2dbf50bfacb7d2c49672e50b41e64283afeda072088ac182d74a4f284d3->leave($__internal_f196b2dbf50bfacb7d2c49672e50b41e64283afeda072088ac182d74a4f284d3_prof);

        
        $__internal_395e1b51eb1bee7ac3526749a30038b245bfc4a239d6f159ded392a4a6dd5ec0->leave($__internal_395e1b51eb1bee7ac3526749a30038b245bfc4a239d6f159ded392a4a6dd5ec0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35ef2e95aa425e7e9753e7eef7d9e943aeb376c64a369752ca5ece66022faeac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ef2e95aa425e7e9753e7eef7d9e943aeb376c64a369752ca5ece66022faeac->enter($__internal_35ef2e95aa425e7e9753e7eef7d9e943aeb376c64a369752ca5ece66022faeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8989f42bc772b627cf28445349c082e9ff855aefebea6bd6cb9e8a736ed1c152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8989f42bc772b627cf28445349c082e9ff855aefebea6bd6cb9e8a736ed1c152->enter($__internal_8989f42bc772b627cf28445349c082e9ff855aefebea6bd6cb9e8a736ed1c152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chamado edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8989f42bc772b627cf28445349c082e9ff855aefebea6bd6cb9e8a736ed1c152->leave($__internal_8989f42bc772b627cf28445349c082e9ff855aefebea6bd6cb9e8a736ed1c152_prof);

        
        $__internal_35ef2e95aa425e7e9753e7eef7d9e943aeb376c64a369752ca5ece66022faeac->leave($__internal_35ef2e95aa425e7e9753e7eef7d9e943aeb376c64a369752ca5ece66022faeac_prof);

    }

    public function getTemplateName()
    {
        return ":chamado:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Chamado edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('chamado_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":chamado:edit.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/chamado/edit.html.twig");
    }
}
