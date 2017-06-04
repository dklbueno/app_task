<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_633ae4e7490fda8c4d4c9487fb79a7ceea632539909953379e96a897a1cf5f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_0f6ffe102ca15f9d62fab097cda010a47ff635eb04bb4e99c398cb9c93176ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6ffe102ca15f9d62fab097cda010a47ff635eb04bb4e99c398cb9c93176ce4->enter($__internal_0f6ffe102ca15f9d62fab097cda010a47ff635eb04bb4e99c398cb9c93176ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8e9b3317efd2b66d5cae324a7405680361302a81128cdf80306506a0055dfb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9b3317efd2b66d5cae324a7405680361302a81128cdf80306506a0055dfb64->enter($__internal_8e9b3317efd2b66d5cae324a7405680361302a81128cdf80306506a0055dfb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6ffe102ca15f9d62fab097cda010a47ff635eb04bb4e99c398cb9c93176ce4->leave($__internal_0f6ffe102ca15f9d62fab097cda010a47ff635eb04bb4e99c398cb9c93176ce4_prof);

        
        $__internal_8e9b3317efd2b66d5cae324a7405680361302a81128cdf80306506a0055dfb64->leave($__internal_8e9b3317efd2b66d5cae324a7405680361302a81128cdf80306506a0055dfb64_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28b0d1aa45b12b5a0798d36e1a0cf90b382ce164f3ffd53909defa4523509a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b0d1aa45b12b5a0798d36e1a0cf90b382ce164f3ffd53909defa4523509a2a->enter($__internal_28b0d1aa45b12b5a0798d36e1a0cf90b382ce164f3ffd53909defa4523509a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f7f1375c23df3ded6a45cd90a04e6422265a112db3eb62b6813026afd0339a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7f1375c23df3ded6a45cd90a04e6422265a112db3eb62b6813026afd0339a4->enter($__internal_8f7f1375c23df3ded6a45cd90a04e6422265a112db3eb62b6813026afd0339a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8f7f1375c23df3ded6a45cd90a04e6422265a112db3eb62b6813026afd0339a4->leave($__internal_8f7f1375c23df3ded6a45cd90a04e6422265a112db3eb62b6813026afd0339a4_prof);

        
        $__internal_28b0d1aa45b12b5a0798d36e1a0cf90b382ce164f3ffd53909defa4523509a2a->leave($__internal_28b0d1aa45b12b5a0798d36e1a0cf90b382ce164f3ffd53909defa4523509a2a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
