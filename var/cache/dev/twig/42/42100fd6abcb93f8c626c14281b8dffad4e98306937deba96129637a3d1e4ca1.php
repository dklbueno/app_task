<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_015e324ed069fb5188ae977b36b129b9c3f4c3d67958885d32b5d4985fa5022e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f5f40cea53972b9e7b8209ea265c0c94ae4c41dcc976c386b6b9bfa8fd15170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5f40cea53972b9e7b8209ea265c0c94ae4c41dcc976c386b6b9bfa8fd15170->enter($__internal_6f5f40cea53972b9e7b8209ea265c0c94ae4c41dcc976c386b6b9bfa8fd15170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_98a599a258efc670c97647a0a1d2cba640a948202d469a77b100e8aec1512cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a599a258efc670c97647a0a1d2cba640a948202d469a77b100e8aec1512cae->enter($__internal_98a599a258efc670c97647a0a1d2cba640a948202d469a77b100e8aec1512cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5f40cea53972b9e7b8209ea265c0c94ae4c41dcc976c386b6b9bfa8fd15170->leave($__internal_6f5f40cea53972b9e7b8209ea265c0c94ae4c41dcc976c386b6b9bfa8fd15170_prof);

        
        $__internal_98a599a258efc670c97647a0a1d2cba640a948202d469a77b100e8aec1512cae->leave($__internal_98a599a258efc670c97647a0a1d2cba640a948202d469a77b100e8aec1512cae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40f379763ba57f87ea1caa38acfe84e6981c93bd59d704d37d7f11cefe4ef9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f379763ba57f87ea1caa38acfe84e6981c93bd59d704d37d7f11cefe4ef9cd->enter($__internal_40f379763ba57f87ea1caa38acfe84e6981c93bd59d704d37d7f11cefe4ef9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d4404cb3da366c52a32e35de096155dfbebc04a9d80684cd1291951a25c68705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4404cb3da366c52a32e35de096155dfbebc04a9d80684cd1291951a25c68705->enter($__internal_d4404cb3da366c52a32e35de096155dfbebc04a9d80684cd1291951a25c68705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d4404cb3da366c52a32e35de096155dfbebc04a9d80684cd1291951a25c68705->leave($__internal_d4404cb3da366c52a32e35de096155dfbebc04a9d80684cd1291951a25c68705_prof);

        
        $__internal_40f379763ba57f87ea1caa38acfe84e6981c93bd59d704d37d7f11cefe4ef9cd->leave($__internal_40f379763ba57f87ea1caa38acfe84e6981c93bd59d704d37d7f11cefe4ef9cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_499e1bdc68764622f96a4ad87075fee3a55242c00dbc4937cecbddea8a314223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499e1bdc68764622f96a4ad87075fee3a55242c00dbc4937cecbddea8a314223->enter($__internal_499e1bdc68764622f96a4ad87075fee3a55242c00dbc4937cecbddea8a314223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d9248da54493ead724c45c8bfa779c7296cbc3cefdf7ef19eb45343333d7d754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9248da54493ead724c45c8bfa779c7296cbc3cefdf7ef19eb45343333d7d754->enter($__internal_d9248da54493ead724c45c8bfa779c7296cbc3cefdf7ef19eb45343333d7d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9248da54493ead724c45c8bfa779c7296cbc3cefdf7ef19eb45343333d7d754->leave($__internal_d9248da54493ead724c45c8bfa779c7296cbc3cefdf7ef19eb45343333d7d754_prof);

        
        $__internal_499e1bdc68764622f96a4ad87075fee3a55242c00dbc4937cecbddea8a314223->leave($__internal_499e1bdc68764622f96a4ad87075fee3a55242c00dbc4937cecbddea8a314223_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_306ebc66e0886a85ea7a7a1907698b795d3f133613e09471eaed6d29f9c43d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306ebc66e0886a85ea7a7a1907698b795d3f133613e09471eaed6d29f9c43d90->enter($__internal_306ebc66e0886a85ea7a7a1907698b795d3f133613e09471eaed6d29f9c43d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63f2f5363f552f56cd6c0c2557c2ec16cf19bee1e44c0f6dc974d296ebef08d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f2f5363f552f56cd6c0c2557c2ec16cf19bee1e44c0f6dc974d296ebef08d4->enter($__internal_63f2f5363f552f56cd6c0c2557c2ec16cf19bee1e44c0f6dc974d296ebef08d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63f2f5363f552f56cd6c0c2557c2ec16cf19bee1e44c0f6dc974d296ebef08d4->leave($__internal_63f2f5363f552f56cd6c0c2557c2ec16cf19bee1e44c0f6dc974d296ebef08d4_prof);

        
        $__internal_306ebc66e0886a85ea7a7a1907698b795d3f133613e09471eaed6d29f9c43d90->leave($__internal_306ebc66e0886a85ea7a7a1907698b795d3f133613e09471eaed6d29f9c43d90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
