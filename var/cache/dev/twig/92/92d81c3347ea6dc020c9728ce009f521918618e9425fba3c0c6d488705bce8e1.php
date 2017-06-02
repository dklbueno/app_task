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
        $__internal_07e57510a062c24f839cec9847a8bcccf16a5749853c5ef81ffb8d3a4e46c005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e57510a062c24f839cec9847a8bcccf16a5749853c5ef81ffb8d3a4e46c005->enter($__internal_07e57510a062c24f839cec9847a8bcccf16a5749853c5ef81ffb8d3a4e46c005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5e88d42540a7dc8a9955dee32bc49b1be880bcd2a7613c5f7bdae6e048269c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e88d42540a7dc8a9955dee32bc49b1be880bcd2a7613c5f7bdae6e048269c33->enter($__internal_5e88d42540a7dc8a9955dee32bc49b1be880bcd2a7613c5f7bdae6e048269c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e57510a062c24f839cec9847a8bcccf16a5749853c5ef81ffb8d3a4e46c005->leave($__internal_07e57510a062c24f839cec9847a8bcccf16a5749853c5ef81ffb8d3a4e46c005_prof);

        
        $__internal_5e88d42540a7dc8a9955dee32bc49b1be880bcd2a7613c5f7bdae6e048269c33->leave($__internal_5e88d42540a7dc8a9955dee32bc49b1be880bcd2a7613c5f7bdae6e048269c33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_888df6e974f66fc0138ebad9f908bb616da84bb86e5b4b6284f18614b4748e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888df6e974f66fc0138ebad9f908bb616da84bb86e5b4b6284f18614b4748e04->enter($__internal_888df6e974f66fc0138ebad9f908bb616da84bb86e5b4b6284f18614b4748e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e3489f5c5a8bf3d2a7b241794c7beebd8a87d84fe7ee34780d5b47249ac8929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3489f5c5a8bf3d2a7b241794c7beebd8a87d84fe7ee34780d5b47249ac8929->enter($__internal_2e3489f5c5a8bf3d2a7b241794c7beebd8a87d84fe7ee34780d5b47249ac8929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2e3489f5c5a8bf3d2a7b241794c7beebd8a87d84fe7ee34780d5b47249ac8929->leave($__internal_2e3489f5c5a8bf3d2a7b241794c7beebd8a87d84fe7ee34780d5b47249ac8929_prof);

        
        $__internal_888df6e974f66fc0138ebad9f908bb616da84bb86e5b4b6284f18614b4748e04->leave($__internal_888df6e974f66fc0138ebad9f908bb616da84bb86e5b4b6284f18614b4748e04_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_35febbb070a8c64918368bc563995ea38ea2a7a726d8de4c0a0192dbbcbe9ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35febbb070a8c64918368bc563995ea38ea2a7a726d8de4c0a0192dbbcbe9ef1->enter($__internal_35febbb070a8c64918368bc563995ea38ea2a7a726d8de4c0a0192dbbcbe9ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_917b0bb40bc91dcfcf0d81d2436aec50ef52fbb53b15af03e100e60f641aa05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917b0bb40bc91dcfcf0d81d2436aec50ef52fbb53b15af03e100e60f641aa05d->enter($__internal_917b0bb40bc91dcfcf0d81d2436aec50ef52fbb53b15af03e100e60f641aa05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_917b0bb40bc91dcfcf0d81d2436aec50ef52fbb53b15af03e100e60f641aa05d->leave($__internal_917b0bb40bc91dcfcf0d81d2436aec50ef52fbb53b15af03e100e60f641aa05d_prof);

        
        $__internal_35febbb070a8c64918368bc563995ea38ea2a7a726d8de4c0a0192dbbcbe9ef1->leave($__internal_35febbb070a8c64918368bc563995ea38ea2a7a726d8de4c0a0192dbbcbe9ef1_prof);

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
