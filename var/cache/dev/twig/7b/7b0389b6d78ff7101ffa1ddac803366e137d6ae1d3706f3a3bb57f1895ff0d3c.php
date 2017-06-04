<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_61ac4db23fe3036b22fb0ce25c52b81e7c104a0f20995195c388d35fbea7362f extends Twig_Template
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
        $__internal_6f841263bfc999d89a6dbbf716e3dee255de4d86e94b796fcf22152b0ba96c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f841263bfc999d89a6dbbf716e3dee255de4d86e94b796fcf22152b0ba96c35->enter($__internal_6f841263bfc999d89a6dbbf716e3dee255de4d86e94b796fcf22152b0ba96c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2f59b023bc0305198133827202f3e97d733c5ceb056ab3f6365d48e32eebd5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f59b023bc0305198133827202f3e97d733c5ceb056ab3f6365d48e32eebd5fd->enter($__internal_2f59b023bc0305198133827202f3e97d733c5ceb056ab3f6365d48e32eebd5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f841263bfc999d89a6dbbf716e3dee255de4d86e94b796fcf22152b0ba96c35->leave($__internal_6f841263bfc999d89a6dbbf716e3dee255de4d86e94b796fcf22152b0ba96c35_prof);

        
        $__internal_2f59b023bc0305198133827202f3e97d733c5ceb056ab3f6365d48e32eebd5fd->leave($__internal_2f59b023bc0305198133827202f3e97d733c5ceb056ab3f6365d48e32eebd5fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25d8aa36df63ad3704c4e24aeb58a8ef494612b24376fb61da7dc5411b4809ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d8aa36df63ad3704c4e24aeb58a8ef494612b24376fb61da7dc5411b4809ab->enter($__internal_25d8aa36df63ad3704c4e24aeb58a8ef494612b24376fb61da7dc5411b4809ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_854763d31eed467c5ae49654409ec32c355ea564fe7b45e6326f5c5d9a3de0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854763d31eed467c5ae49654409ec32c355ea564fe7b45e6326f5c5d9a3de0aa->enter($__internal_854763d31eed467c5ae49654409ec32c355ea564fe7b45e6326f5c5d9a3de0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_854763d31eed467c5ae49654409ec32c355ea564fe7b45e6326f5c5d9a3de0aa->leave($__internal_854763d31eed467c5ae49654409ec32c355ea564fe7b45e6326f5c5d9a3de0aa_prof);

        
        $__internal_25d8aa36df63ad3704c4e24aeb58a8ef494612b24376fb61da7dc5411b4809ab->leave($__internal_25d8aa36df63ad3704c4e24aeb58a8ef494612b24376fb61da7dc5411b4809ab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f04282013cff635c0c70dc5f2fa6870616b08bf36f0c648c056a1c918e3fd0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04282013cff635c0c70dc5f2fa6870616b08bf36f0c648c056a1c918e3fd0fa->enter($__internal_f04282013cff635c0c70dc5f2fa6870616b08bf36f0c648c056a1c918e3fd0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a647bd2caab184e46bc92835cac958941caabd24e46e7d75f460b6b7cb6d941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a647bd2caab184e46bc92835cac958941caabd24e46e7d75f460b6b7cb6d941->enter($__internal_6a647bd2caab184e46bc92835cac958941caabd24e46e7d75f460b6b7cb6d941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a647bd2caab184e46bc92835cac958941caabd24e46e7d75f460b6b7cb6d941->leave($__internal_6a647bd2caab184e46bc92835cac958941caabd24e46e7d75f460b6b7cb6d941_prof);

        
        $__internal_f04282013cff635c0c70dc5f2fa6870616b08bf36f0c648c056a1c918e3fd0fa->leave($__internal_f04282013cff635c0c70dc5f2fa6870616b08bf36f0c648c056a1c918e3fd0fa_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
