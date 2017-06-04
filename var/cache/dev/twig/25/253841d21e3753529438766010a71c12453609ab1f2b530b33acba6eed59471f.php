<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1aeb5ec0d3425eeb12aff92aca1bd756fd5f8644029cc6dd4614741c5175c34b extends Twig_Template
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
        $__internal_d1bff1db3c99f961ef46b9265a2779891bf0cb221c60aed0861d2a0a6eaa5314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bff1db3c99f961ef46b9265a2779891bf0cb221c60aed0861d2a0a6eaa5314->enter($__internal_d1bff1db3c99f961ef46b9265a2779891bf0cb221c60aed0861d2a0a6eaa5314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9aed83d0a6cee0bed2dee57d72e140c633268108cff9eb108742ea532fb8ba3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aed83d0a6cee0bed2dee57d72e140c633268108cff9eb108742ea532fb8ba3f->enter($__internal_9aed83d0a6cee0bed2dee57d72e140c633268108cff9eb108742ea532fb8ba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1bff1db3c99f961ef46b9265a2779891bf0cb221c60aed0861d2a0a6eaa5314->leave($__internal_d1bff1db3c99f961ef46b9265a2779891bf0cb221c60aed0861d2a0a6eaa5314_prof);

        
        $__internal_9aed83d0a6cee0bed2dee57d72e140c633268108cff9eb108742ea532fb8ba3f->leave($__internal_9aed83d0a6cee0bed2dee57d72e140c633268108cff9eb108742ea532fb8ba3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_170831e7a72e1675bd718f0b1f6389a86ab28520f7ec46f0bbfcf35987e6315d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170831e7a72e1675bd718f0b1f6389a86ab28520f7ec46f0bbfcf35987e6315d->enter($__internal_170831e7a72e1675bd718f0b1f6389a86ab28520f7ec46f0bbfcf35987e6315d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_464331af9906e5a2a14340dc4ca220e4c7f6ca3e023d34e70d0c7af01e179a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464331af9906e5a2a14340dc4ca220e4c7f6ca3e023d34e70d0c7af01e179a5a->enter($__internal_464331af9906e5a2a14340dc4ca220e4c7f6ca3e023d34e70d0c7af01e179a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_464331af9906e5a2a14340dc4ca220e4c7f6ca3e023d34e70d0c7af01e179a5a->leave($__internal_464331af9906e5a2a14340dc4ca220e4c7f6ca3e023d34e70d0c7af01e179a5a_prof);

        
        $__internal_170831e7a72e1675bd718f0b1f6389a86ab28520f7ec46f0bbfcf35987e6315d->leave($__internal_170831e7a72e1675bd718f0b1f6389a86ab28520f7ec46f0bbfcf35987e6315d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8bbbdc56be73e5c347821719d854b2e99c4aea6b9df654321609fbd82d4d121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bbbdc56be73e5c347821719d854b2e99c4aea6b9df654321609fbd82d4d121->enter($__internal_f8bbbdc56be73e5c347821719d854b2e99c4aea6b9df654321609fbd82d4d121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef580afb06f6620e8896cfc07065090593f2966783d1e37e36bc75f24973ac07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef580afb06f6620e8896cfc07065090593f2966783d1e37e36bc75f24973ac07->enter($__internal_ef580afb06f6620e8896cfc07065090593f2966783d1e37e36bc75f24973ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ef580afb06f6620e8896cfc07065090593f2966783d1e37e36bc75f24973ac07->leave($__internal_ef580afb06f6620e8896cfc07065090593f2966783d1e37e36bc75f24973ac07_prof);

        
        $__internal_f8bbbdc56be73e5c347821719d854b2e99c4aea6b9df654321609fbd82d4d121->leave($__internal_f8bbbdc56be73e5c347821719d854b2e99c4aea6b9df654321609fbd82d4d121_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf3aa4fbf5953dbb3ea45a3cfe00fc0bcfacac4f641b46e2cd32f4a4beacaa88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3aa4fbf5953dbb3ea45a3cfe00fc0bcfacac4f641b46e2cd32f4a4beacaa88->enter($__internal_cf3aa4fbf5953dbb3ea45a3cfe00fc0bcfacac4f641b46e2cd32f4a4beacaa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_480e74d09a0509e388b19381671e7b5149f56317d98f8e5a98fe9d1ec260ae17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480e74d09a0509e388b19381671e7b5149f56317d98f8e5a98fe9d1ec260ae17->enter($__internal_480e74d09a0509e388b19381671e7b5149f56317d98f8e5a98fe9d1ec260ae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_480e74d09a0509e388b19381671e7b5149f56317d98f8e5a98fe9d1ec260ae17->leave($__internal_480e74d09a0509e388b19381671e7b5149f56317d98f8e5a98fe9d1ec260ae17_prof);

        
        $__internal_cf3aa4fbf5953dbb3ea45a3cfe00fc0bcfacac4f641b46e2cd32f4a4beacaa88->leave($__internal_cf3aa4fbf5953dbb3ea45a3cfe00fc0bcfacac4f641b46e2cd32f4a4beacaa88_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
