<?php

/* chamado/new.html.twig */
class __TwigTemplate_0d20280193c06cdba4e84f0e3ed491f46e56e12716e728446e6f32cdba77c128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chamado/new.html.twig", 1);
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
        $__internal_ea884e259f27d13aa2b7430bd05f5e199177322f9ee8ef1e7aa0922d236a7977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea884e259f27d13aa2b7430bd05f5e199177322f9ee8ef1e7aa0922d236a7977->enter($__internal_ea884e259f27d13aa2b7430bd05f5e199177322f9ee8ef1e7aa0922d236a7977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/new.html.twig"));

        $__internal_79473550a1bcffd5ee0707113cc0b77821aefe4b38b494b6c869cf51f8189f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79473550a1bcffd5ee0707113cc0b77821aefe4b38b494b6c869cf51f8189f25->enter($__internal_79473550a1bcffd5ee0707113cc0b77821aefe4b38b494b6c869cf51f8189f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea884e259f27d13aa2b7430bd05f5e199177322f9ee8ef1e7aa0922d236a7977->leave($__internal_ea884e259f27d13aa2b7430bd05f5e199177322f9ee8ef1e7aa0922d236a7977_prof);

        
        $__internal_79473550a1bcffd5ee0707113cc0b77821aefe4b38b494b6c869cf51f8189f25->leave($__internal_79473550a1bcffd5ee0707113cc0b77821aefe4b38b494b6c869cf51f8189f25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_600e51c8cf16803662c47dc7c347728b80d5f3cb2de5967dafb667254812ce8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600e51c8cf16803662c47dc7c347728b80d5f3cb2de5967dafb667254812ce8c->enter($__internal_600e51c8cf16803662c47dc7c347728b80d5f3cb2de5967dafb667254812ce8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a83a96cb02ee3e6db46e1378100fedd1d45635a836d0d6d727cc0b676eb4b83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83a96cb02ee3e6db46e1378100fedd1d45635a836d0d6d727cc0b676eb4b83e->enter($__internal_a83a96cb02ee3e6db46e1378100fedd1d45635a836d0d6d727cc0b676eb4b83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a83a96cb02ee3e6db46e1378100fedd1d45635a836d0d6d727cc0b676eb4b83e->leave($__internal_a83a96cb02ee3e6db46e1378100fedd1d45635a836d0d6d727cc0b676eb4b83e_prof);

        
        $__internal_600e51c8cf16803662c47dc7c347728b80d5f3cb2de5967dafb667254812ce8c->leave($__internal_600e51c8cf16803662c47dc7c347728b80d5f3cb2de5967dafb667254812ce8c_prof);

    }

    public function getTemplateName()
    {
        return "chamado/new.html.twig";
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
", "chamado/new.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\chamado\\new.html.twig");
    }
}
