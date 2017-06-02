<?php

/* :chamado:new.html.twig */
class __TwigTemplate_ed98db527fa5a7f3a58e007945aabf8e4e7a27629dd065b8e0e897f52dd3cd74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chamado:new.html.twig", 1);
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
        $__internal_3e608a04e4c32d0902c61ba9bb2ead30e145b2a9c498d2bff4062e199cee142f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e608a04e4c32d0902c61ba9bb2ead30e145b2a9c498d2bff4062e199cee142f->enter($__internal_3e608a04e4c32d0902c61ba9bb2ead30e145b2a9c498d2bff4062e199cee142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:new.html.twig"));

        $__internal_38f242b8f860f86a9eb014ef1d0b1dea2f622d4b0c181fbf856579cbb194f396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f242b8f860f86a9eb014ef1d0b1dea2f622d4b0c181fbf856579cbb194f396->enter($__internal_38f242b8f860f86a9eb014ef1d0b1dea2f622d4b0c181fbf856579cbb194f396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e608a04e4c32d0902c61ba9bb2ead30e145b2a9c498d2bff4062e199cee142f->leave($__internal_3e608a04e4c32d0902c61ba9bb2ead30e145b2a9c498d2bff4062e199cee142f_prof);

        
        $__internal_38f242b8f860f86a9eb014ef1d0b1dea2f622d4b0c181fbf856579cbb194f396->leave($__internal_38f242b8f860f86a9eb014ef1d0b1dea2f622d4b0c181fbf856579cbb194f396_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c48af6b0dd90ceb3e4c35f059f69480ff701fc785d9ce1770d8a2533e0d66c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48af6b0dd90ceb3e4c35f059f69480ff701fc785d9ce1770d8a2533e0d66c54->enter($__internal_c48af6b0dd90ceb3e4c35f059f69480ff701fc785d9ce1770d8a2533e0d66c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_845be76206a4ccb7079439099b75a18a7479fb0a673b410e90a65593586783a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845be76206a4ccb7079439099b75a18a7479fb0a673b410e90a65593586783a3->enter($__internal_845be76206a4ccb7079439099b75a18a7479fb0a673b410e90a65593586783a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chamado creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_845be76206a4ccb7079439099b75a18a7479fb0a673b410e90a65593586783a3->leave($__internal_845be76206a4ccb7079439099b75a18a7479fb0a673b410e90a65593586783a3_prof);

        
        $__internal_c48af6b0dd90ceb3e4c35f059f69480ff701fc785d9ce1770d8a2533e0d66c54->leave($__internal_c48af6b0dd90ceb3e4c35f059f69480ff701fc785d9ce1770d8a2533e0d66c54_prof);

    }

    public function getTemplateName()
    {
        return ":chamado:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chamado creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('chamado_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":chamado:new.html.twig", "/var/www/html/app_task/app/Resources/views/chamado/new.html.twig");
    }
}
