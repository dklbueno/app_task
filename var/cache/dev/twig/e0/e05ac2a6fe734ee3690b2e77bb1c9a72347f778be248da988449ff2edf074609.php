<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_a09df59b526f58bcf8a8ddfb6b69a97a6e8f9c91ffced91a49ed4f8e2d17d12f extends Twig_Template
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
        $__internal_4518ff4c8ff1adcde7ea395446c63426d57781111c2fa488a24590bc86a7f6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4518ff4c8ff1adcde7ea395446c63426d57781111c2fa488a24590bc86a7f6ad->enter($__internal_4518ff4c8ff1adcde7ea395446c63426d57781111c2fa488a24590bc86a7f6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_61e3a8d5940ce3b253eef04b9c77f33dc14e54178232475f0c955ee05d598abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e3a8d5940ce3b253eef04b9c77f33dc14e54178232475f0c955ee05d598abd->enter($__internal_61e3a8d5940ce3b253eef04b9c77f33dc14e54178232475f0c955ee05d598abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4518ff4c8ff1adcde7ea395446c63426d57781111c2fa488a24590bc86a7f6ad->leave($__internal_4518ff4c8ff1adcde7ea395446c63426d57781111c2fa488a24590bc86a7f6ad_prof);

        
        $__internal_61e3a8d5940ce3b253eef04b9c77f33dc14e54178232475f0c955ee05d598abd->leave($__internal_61e3a8d5940ce3b253eef04b9c77f33dc14e54178232475f0c955ee05d598abd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33f1ab2cb0e5f28c346861814ee20da975acc98f4578b99e980c280c20e618b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f1ab2cb0e5f28c346861814ee20da975acc98f4578b99e980c280c20e618b6->enter($__internal_33f1ab2cb0e5f28c346861814ee20da975acc98f4578b99e980c280c20e618b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e9e5d950404487eb3d4ca156d5ef1182cf57901e08021c54e8c7c10a20e42a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e5d950404487eb3d4ca156d5ef1182cf57901e08021c54e8c7c10a20e42a5c->enter($__internal_e9e5d950404487eb3d4ca156d5ef1182cf57901e08021c54e8c7c10a20e42a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e9e5d950404487eb3d4ca156d5ef1182cf57901e08021c54e8c7c10a20e42a5c->leave($__internal_e9e5d950404487eb3d4ca156d5ef1182cf57901e08021c54e8c7c10a20e42a5c_prof);

        
        $__internal_33f1ab2cb0e5f28c346861814ee20da975acc98f4578b99e980c280c20e618b6->leave($__internal_33f1ab2cb0e5f28c346861814ee20da975acc98f4578b99e980c280c20e618b6_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
