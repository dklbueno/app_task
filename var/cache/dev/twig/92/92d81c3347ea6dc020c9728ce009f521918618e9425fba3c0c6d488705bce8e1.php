<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_ca35e6e5547619dddd06053dcc8b10acec2bc98082e58b00248be69d48f4e381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d0aec6450735b96add50e045681887c5d6d3d7be31a43f8fd7dc445f4803a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0aec6450735b96add50e045681887c5d6d3d7be31a43f8fd7dc445f4803a97->enter($__internal_4d0aec6450735b96add50e045681887c5d6d3d7be31a43f8fd7dc445f4803a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_529263ef5f76d33a181edaecb4df5544b9ae9aeaa29b0f94b7f829375d93683c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529263ef5f76d33a181edaecb4df5544b9ae9aeaa29b0f94b7f829375d93683c->enter($__internal_529263ef5f76d33a181edaecb4df5544b9ae9aeaa29b0f94b7f829375d93683c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d0aec6450735b96add50e045681887c5d6d3d7be31a43f8fd7dc445f4803a97->leave($__internal_4d0aec6450735b96add50e045681887c5d6d3d7be31a43f8fd7dc445f4803a97_prof);

        
        $__internal_529263ef5f76d33a181edaecb4df5544b9ae9aeaa29b0f94b7f829375d93683c->leave($__internal_529263ef5f76d33a181edaecb4df5544b9ae9aeaa29b0f94b7f829375d93683c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e117972a9cf5f709c15bc548c0a3d2ee47661a4a11e37dd5ae5b0548649056d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e117972a9cf5f709c15bc548c0a3d2ee47661a4a11e37dd5ae5b0548649056d->enter($__internal_4e117972a9cf5f709c15bc548c0a3d2ee47661a4a11e37dd5ae5b0548649056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd7fd870394ea80519ce3317530f73c55765a306a6454a620dae1e5a8a551117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7fd870394ea80519ce3317530f73c55765a306a6454a620dae1e5a8a551117->enter($__internal_bd7fd870394ea80519ce3317530f73c55765a306a6454a620dae1e5a8a551117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bd7fd870394ea80519ce3317530f73c55765a306a6454a620dae1e5a8a551117->leave($__internal_bd7fd870394ea80519ce3317530f73c55765a306a6454a620dae1e5a8a551117_prof);

        
        $__internal_4e117972a9cf5f709c15bc548c0a3d2ee47661a4a11e37dd5ae5b0548649056d->leave($__internal_4e117972a9cf5f709c15bc548c0a3d2ee47661a4a11e37dd5ae5b0548649056d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fe7f5ea448be6d14b7f66dadb1a941d77bd7f411dd5290e2b4eff5e2158d16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe7f5ea448be6d14b7f66dadb1a941d77bd7f411dd5290e2b4eff5e2158d16f->enter($__internal_3fe7f5ea448be6d14b7f66dadb1a941d77bd7f411dd5290e2b4eff5e2158d16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e00b61b527f082146acc0dd4dc169f52e99be6338439da8e0095d8b0bf60833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e00b61b527f082146acc0dd4dc169f52e99be6338439da8e0095d8b0bf60833->enter($__internal_9e00b61b527f082146acc0dd4dc169f52e99be6338439da8e0095d8b0bf60833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_9e00b61b527f082146acc0dd4dc169f52e99be6338439da8e0095d8b0bf60833->leave($__internal_9e00b61b527f082146acc0dd4dc169f52e99be6338439da8e0095d8b0bf60833_prof);

        
        $__internal_3fe7f5ea448be6d14b7f66dadb1a941d77bd7f411dd5290e2b4eff5e2158d16f->leave($__internal_3fe7f5ea448be6d14b7f66dadb1a941d77bd7f411dd5290e2b4eff5e2158d16f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
