<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a01c0292c384849e50a1880e3a75196dbba94ecd190f7b593dd18136ed3fb111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83415c852232d9dff906b594a88a73a04f42d0e707ec6808c6169346ac0ed16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83415c852232d9dff906b594a88a73a04f42d0e707ec6808c6169346ac0ed16a->enter($__internal_83415c852232d9dff906b594a88a73a04f42d0e707ec6808c6169346ac0ed16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3e79060b3e3fe3f37911caada726489cd906f506aa930a0fc3ceb32f2ba4e952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e79060b3e3fe3f37911caada726489cd906f506aa930a0fc3ceb32f2ba4e952->enter($__internal_3e79060b3e3fe3f37911caada726489cd906f506aa930a0fc3ceb32f2ba4e952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83415c852232d9dff906b594a88a73a04f42d0e707ec6808c6169346ac0ed16a->leave($__internal_83415c852232d9dff906b594a88a73a04f42d0e707ec6808c6169346ac0ed16a_prof);

        
        $__internal_3e79060b3e3fe3f37911caada726489cd906f506aa930a0fc3ceb32f2ba4e952->leave($__internal_3e79060b3e3fe3f37911caada726489cd906f506aa930a0fc3ceb32f2ba4e952_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6bcd8366795208c79ce2d31a5452f8c9c94615e0b0ba50d748a07755e4b4e9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcd8366795208c79ce2d31a5452f8c9c94615e0b0ba50d748a07755e4b4e9af->enter($__internal_6bcd8366795208c79ce2d31a5452f8c9c94615e0b0ba50d748a07755e4b4e9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0f1f9f3b48bacde9d3e8ff358671bc992e7f9b63f9ef5610b6018ba97c96ccd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1f9f3b48bacde9d3e8ff358671bc992e7f9b63f9ef5610b6018ba97c96ccd4->enter($__internal_0f1f9f3b48bacde9d3e8ff358671bc992e7f9b63f9ef5610b6018ba97c96ccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0f1f9f3b48bacde9d3e8ff358671bc992e7f9b63f9ef5610b6018ba97c96ccd4->leave($__internal_0f1f9f3b48bacde9d3e8ff358671bc992e7f9b63f9ef5610b6018ba97c96ccd4_prof);

        
        $__internal_6bcd8366795208c79ce2d31a5452f8c9c94615e0b0ba50d748a07755e4b4e9af->leave($__internal_6bcd8366795208c79ce2d31a5452f8c9c94615e0b0ba50d748a07755e4b4e9af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
