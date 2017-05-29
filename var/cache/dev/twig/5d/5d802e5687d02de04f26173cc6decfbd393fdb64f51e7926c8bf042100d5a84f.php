<?php

/* :chamado:edit.html.twig */
class __TwigTemplate_fb9b3b2301e1a25b87f2e126e2b9d3a489e3703cd7a0262f8d2fb37e984350f7 extends Twig_Template
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
        $__internal_dcdca11e307372fd52118ac62999af373cb5593ad2e4abf50258adb593a32da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcdca11e307372fd52118ac62999af373cb5593ad2e4abf50258adb593a32da7->enter($__internal_dcdca11e307372fd52118ac62999af373cb5593ad2e4abf50258adb593a32da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:edit.html.twig"));

        $__internal_ad4afc8478328201f31d9c2678e2554daad4b64f9bed810acd68dae098f52331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4afc8478328201f31d9c2678e2554daad4b64f9bed810acd68dae098f52331->enter($__internal_ad4afc8478328201f31d9c2678e2554daad4b64f9bed810acd68dae098f52331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcdca11e307372fd52118ac62999af373cb5593ad2e4abf50258adb593a32da7->leave($__internal_dcdca11e307372fd52118ac62999af373cb5593ad2e4abf50258adb593a32da7_prof);

        
        $__internal_ad4afc8478328201f31d9c2678e2554daad4b64f9bed810acd68dae098f52331->leave($__internal_ad4afc8478328201f31d9c2678e2554daad4b64f9bed810acd68dae098f52331_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cc8c030c2b373f82fe71701c0427b325d588fcac925061837ebe1c745126ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc8c030c2b373f82fe71701c0427b325d588fcac925061837ebe1c745126ccb->enter($__internal_4cc8c030c2b373f82fe71701c0427b325d588fcac925061837ebe1c745126ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e338225aba99076d10cd68ebfa5f8cce092d8cfe767d5515d4609637016e7bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e338225aba99076d10cd68ebfa5f8cce092d8cfe767d5515d4609637016e7bb6->enter($__internal_e338225aba99076d10cd68ebfa5f8cce092d8cfe767d5515d4609637016e7bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e338225aba99076d10cd68ebfa5f8cce092d8cfe767d5515d4609637016e7bb6->leave($__internal_e338225aba99076d10cd68ebfa5f8cce092d8cfe767d5515d4609637016e7bb6_prof);

        
        $__internal_4cc8c030c2b373f82fe71701c0427b325d588fcac925061837ebe1c745126ccb->leave($__internal_4cc8c030c2b373f82fe71701c0427b325d588fcac925061837ebe1c745126ccb_prof);

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
", ":chamado:edit.html.twig", "/var/www/html/app_task/app/Resources/views/chamado/edit.html.twig");
    }
}
