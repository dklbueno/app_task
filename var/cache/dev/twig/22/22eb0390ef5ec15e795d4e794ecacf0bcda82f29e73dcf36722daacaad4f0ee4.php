<?php

/* sac/edit.html.twig */
class __TwigTemplate_cd1da0eb0ac94f272dacd9a009d3160d4c2ca20b6ed2e99df9b9f013955c258f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sac/edit.html.twig", 1);
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
        $__internal_ecce833a1197d2fb516485b16fba56138bf77014f026ce443939c629d5552f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecce833a1197d2fb516485b16fba56138bf77014f026ce443939c629d5552f08->enter($__internal_ecce833a1197d2fb516485b16fba56138bf77014f026ce443939c629d5552f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sac/edit.html.twig"));

        $__internal_df849aa4df8b5f997d36468520b9689bfe59a4074cbd717731dde4bec1b81dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df849aa4df8b5f997d36468520b9689bfe59a4074cbd717731dde4bec1b81dc3->enter($__internal_df849aa4df8b5f997d36468520b9689bfe59a4074cbd717731dde4bec1b81dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sac/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecce833a1197d2fb516485b16fba56138bf77014f026ce443939c629d5552f08->leave($__internal_ecce833a1197d2fb516485b16fba56138bf77014f026ce443939c629d5552f08_prof);

        
        $__internal_df849aa4df8b5f997d36468520b9689bfe59a4074cbd717731dde4bec1b81dc3->leave($__internal_df849aa4df8b5f997d36468520b9689bfe59a4074cbd717731dde4bec1b81dc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_126d02f87e705b435caf5ee4daa8c3de96f338eeb78806d6a2e3f04372a21163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126d02f87e705b435caf5ee4daa8c3de96f338eeb78806d6a2e3f04372a21163->enter($__internal_126d02f87e705b435caf5ee4daa8c3de96f338eeb78806d6a2e3f04372a21163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7dd5507e7f2dd97f4e8f4963be4ea82e9cbb3a37e1b88f76b6cfc00633d6bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7dd5507e7f2dd97f4e8f4963be4ea82e9cbb3a37e1b88f76b6cfc00633d6bbb->enter($__internal_c7dd5507e7f2dd97f4e8f4963be4ea82e9cbb3a37e1b88f76b6cfc00633d6bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c7dd5507e7f2dd97f4e8f4963be4ea82e9cbb3a37e1b88f76b6cfc00633d6bbb->leave($__internal_c7dd5507e7f2dd97f4e8f4963be4ea82e9cbb3a37e1b88f76b6cfc00633d6bbb_prof);

        
        $__internal_126d02f87e705b435caf5ee4daa8c3de96f338eeb78806d6a2e3f04372a21163->leave($__internal_126d02f87e705b435caf5ee4daa8c3de96f338eeb78806d6a2e3f04372a21163_prof);

    }

    public function getTemplateName()
    {
        return "sac/edit.html.twig";
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
", "sac/edit.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\sac\\edit.html.twig");
    }
}
