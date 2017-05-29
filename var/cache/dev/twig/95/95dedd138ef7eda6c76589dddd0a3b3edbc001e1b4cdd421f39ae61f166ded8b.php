<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a6968c39a986e8be7905860db5bfd84b79e3654be41ba57f35b6f061f1a1b221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a0575d58231de5d19d12b8e57fc7b45ab917a70129dff43802bea27bddc007d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0575d58231de5d19d12b8e57fc7b45ab917a70129dff43802bea27bddc007d0->enter($__internal_a0575d58231de5d19d12b8e57fc7b45ab917a70129dff43802bea27bddc007d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_646cbff36ddeebf4bb9b2b08d51096c144162cc11d2f7c0369ac9339e8cb0b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646cbff36ddeebf4bb9b2b08d51096c144162cc11d2f7c0369ac9339e8cb0b29->enter($__internal_646cbff36ddeebf4bb9b2b08d51096c144162cc11d2f7c0369ac9339e8cb0b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0575d58231de5d19d12b8e57fc7b45ab917a70129dff43802bea27bddc007d0->leave($__internal_a0575d58231de5d19d12b8e57fc7b45ab917a70129dff43802bea27bddc007d0_prof);

        
        $__internal_646cbff36ddeebf4bb9b2b08d51096c144162cc11d2f7c0369ac9339e8cb0b29->leave($__internal_646cbff36ddeebf4bb9b2b08d51096c144162cc11d2f7c0369ac9339e8cb0b29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91deba370be47a79dfc19ae3c2744a0e4765960164db04b44b326cfe8a7ad849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91deba370be47a79dfc19ae3c2744a0e4765960164db04b44b326cfe8a7ad849->enter($__internal_91deba370be47a79dfc19ae3c2744a0e4765960164db04b44b326cfe8a7ad849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e3c3d815a191d3bf94b19457249a206c6962a51e86701772254877a7d58efdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3c3d815a191d3bf94b19457249a206c6962a51e86701772254877a7d58efdd->enter($__internal_5e3c3d815a191d3bf94b19457249a206c6962a51e86701772254877a7d58efdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5e3c3d815a191d3bf94b19457249a206c6962a51e86701772254877a7d58efdd->leave($__internal_5e3c3d815a191d3bf94b19457249a206c6962a51e86701772254877a7d58efdd_prof);

        
        $__internal_91deba370be47a79dfc19ae3c2744a0e4765960164db04b44b326cfe8a7ad849->leave($__internal_91deba370be47a79dfc19ae3c2744a0e4765960164db04b44b326cfe8a7ad849_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9337b304a2045dd576871a18d98d12ce79c60e5db1b77bb41ffd72aebf981b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9337b304a2045dd576871a18d98d12ce79c60e5db1b77bb41ffd72aebf981b73->enter($__internal_9337b304a2045dd576871a18d98d12ce79c60e5db1b77bb41ffd72aebf981b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_273703ad0dc56959edfebc8414fec4d4c814afe7d765b3ecbbebe0a6a00e04f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273703ad0dc56959edfebc8414fec4d4c814afe7d765b3ecbbebe0a6a00e04f9->enter($__internal_273703ad0dc56959edfebc8414fec4d4c814afe7d765b3ecbbebe0a6a00e04f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_273703ad0dc56959edfebc8414fec4d4c814afe7d765b3ecbbebe0a6a00e04f9->leave($__internal_273703ad0dc56959edfebc8414fec4d4c814afe7d765b3ecbbebe0a6a00e04f9_prof);

        
        $__internal_9337b304a2045dd576871a18d98d12ce79c60e5db1b77bb41ffd72aebf981b73->leave($__internal_9337b304a2045dd576871a18d98d12ce79c60e5db1b77bb41ffd72aebf981b73_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a626be23cf21f51ef2fccbe7797d4fe08fc2aafadbd08b0f10a51222d772779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a626be23cf21f51ef2fccbe7797d4fe08fc2aafadbd08b0f10a51222d772779->enter($__internal_7a626be23cf21f51ef2fccbe7797d4fe08fc2aafadbd08b0f10a51222d772779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9a9b5bf1e4abba7c83a29f192018b12e73354959cd01431ca56987fe74f05ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9b5bf1e4abba7c83a29f192018b12e73354959cd01431ca56987fe74f05ec2->enter($__internal_9a9b5bf1e4abba7c83a29f192018b12e73354959cd01431ca56987fe74f05ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9a9b5bf1e4abba7c83a29f192018b12e73354959cd01431ca56987fe74f05ec2->leave($__internal_9a9b5bf1e4abba7c83a29f192018b12e73354959cd01431ca56987fe74f05ec2_prof);

        
        $__internal_7a626be23cf21f51ef2fccbe7797d4fe08fc2aafadbd08b0f10a51222d772779->leave($__internal_7a626be23cf21f51ef2fccbe7797d4fe08fc2aafadbd08b0f10a51222d772779_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
