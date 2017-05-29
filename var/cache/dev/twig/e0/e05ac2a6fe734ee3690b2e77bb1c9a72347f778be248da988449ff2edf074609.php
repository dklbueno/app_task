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
        $__internal_557a4eafe20183871611644c0f8cebad59985e57ccc13a33dea79e5f221951d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557a4eafe20183871611644c0f8cebad59985e57ccc13a33dea79e5f221951d3->enter($__internal_557a4eafe20183871611644c0f8cebad59985e57ccc13a33dea79e5f221951d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_bb86aa7501beee28682999080934662ca7ded884dc34ee07c7027cde08a394b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb86aa7501beee28682999080934662ca7ded884dc34ee07c7027cde08a394b9->enter($__internal_bb86aa7501beee28682999080934662ca7ded884dc34ee07c7027cde08a394b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_557a4eafe20183871611644c0f8cebad59985e57ccc13a33dea79e5f221951d3->leave($__internal_557a4eafe20183871611644c0f8cebad59985e57ccc13a33dea79e5f221951d3_prof);

        
        $__internal_bb86aa7501beee28682999080934662ca7ded884dc34ee07c7027cde08a394b9->leave($__internal_bb86aa7501beee28682999080934662ca7ded884dc34ee07c7027cde08a394b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11ddcc00727d6411387f8127724219d0ae6059c118ca114cddf23586a7cf3024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ddcc00727d6411387f8127724219d0ae6059c118ca114cddf23586a7cf3024->enter($__internal_11ddcc00727d6411387f8127724219d0ae6059c118ca114cddf23586a7cf3024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ac8acb57b76c1ef5ae4d7a3966d3fe9bd6e33a5b168d79da77cdfc22dc4bb520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8acb57b76c1ef5ae4d7a3966d3fe9bd6e33a5b168d79da77cdfc22dc4bb520->enter($__internal_ac8acb57b76c1ef5ae4d7a3966d3fe9bd6e33a5b168d79da77cdfc22dc4bb520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ac8acb57b76c1ef5ae4d7a3966d3fe9bd6e33a5b168d79da77cdfc22dc4bb520->leave($__internal_ac8acb57b76c1ef5ae4d7a3966d3fe9bd6e33a5b168d79da77cdfc22dc4bb520_prof);

        
        $__internal_11ddcc00727d6411387f8127724219d0ae6059c118ca114cddf23586a7cf3024->leave($__internal_11ddcc00727d6411387f8127724219d0ae6059c118ca114cddf23586a7cf3024_prof);

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
