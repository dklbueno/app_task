<?php

/* :sac:edit.html.twig */
class __TwigTemplate_06c4d8420196dca74926dba2038af704c16282c8d2c63a4ebb5b071157c0b43b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sac:edit.html.twig", 1);
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
        $__internal_163549439ea64216ce597e7127e21be2fb2ce73ab3918b8886cd1fdec2f39e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163549439ea64216ce597e7127e21be2fb2ce73ab3918b8886cd1fdec2f39e5f->enter($__internal_163549439ea64216ce597e7127e21be2fb2ce73ab3918b8886cd1fdec2f39e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:edit.html.twig"));

        $__internal_7d76d8244765aa3668a355576efd2d6b255a47ebd4c061670450e69a87c1308f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d76d8244765aa3668a355576efd2d6b255a47ebd4c061670450e69a87c1308f->enter($__internal_7d76d8244765aa3668a355576efd2d6b255a47ebd4c061670450e69a87c1308f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163549439ea64216ce597e7127e21be2fb2ce73ab3918b8886cd1fdec2f39e5f->leave($__internal_163549439ea64216ce597e7127e21be2fb2ce73ab3918b8886cd1fdec2f39e5f_prof);

        
        $__internal_7d76d8244765aa3668a355576efd2d6b255a47ebd4c061670450e69a87c1308f->leave($__internal_7d76d8244765aa3668a355576efd2d6b255a47ebd4c061670450e69a87c1308f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_887db29a7864ee87f9fa2aaa030b0bf642ed73ccfacc2a3865c7c1c05cc7cf4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887db29a7864ee87f9fa2aaa030b0bf642ed73ccfacc2a3865c7c1c05cc7cf4f->enter($__internal_887db29a7864ee87f9fa2aaa030b0bf642ed73ccfacc2a3865c7c1c05cc7cf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d8d7c882d59792ba7b43114d8e3dbae699b39a07aaafb215ba08accc6733301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8d7c882d59792ba7b43114d8e3dbae699b39a07aaafb215ba08accc6733301->enter($__internal_3d8d7c882d59792ba7b43114d8e3dbae699b39a07aaafb215ba08accc6733301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
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
        
        $__internal_3d8d7c882d59792ba7b43114d8e3dbae699b39a07aaafb215ba08accc6733301->leave($__internal_3d8d7c882d59792ba7b43114d8e3dbae699b39a07aaafb215ba08accc6733301_prof);

        
        $__internal_887db29a7864ee87f9fa2aaa030b0bf642ed73ccfacc2a3865c7c1c05cc7cf4f->leave($__internal_887db29a7864ee87f9fa2aaa030b0bf642ed73ccfacc2a3865c7c1c05cc7cf4f_prof);

    }

    public function getTemplateName()
    {
        return ":sac:edit.html.twig";
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
    <h1>Cliente edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":sac:edit.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/sac/edit.html.twig");
    }
}
