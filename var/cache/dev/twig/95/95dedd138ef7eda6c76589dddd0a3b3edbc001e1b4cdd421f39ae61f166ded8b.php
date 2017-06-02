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
        $__internal_7806d232e5c38be00627e9836e15221bd233a7834ec35e943ec9c91fdff47aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7806d232e5c38be00627e9836e15221bd233a7834ec35e943ec9c91fdff47aae->enter($__internal_7806d232e5c38be00627e9836e15221bd233a7834ec35e943ec9c91fdff47aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_6d305a0a527d446ce3d1e7beb0034d6e2f968c09e22f2267e3a7cabe1396d9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d305a0a527d446ce3d1e7beb0034d6e2f968c09e22f2267e3a7cabe1396d9b2->enter($__internal_6d305a0a527d446ce3d1e7beb0034d6e2f968c09e22f2267e3a7cabe1396d9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7806d232e5c38be00627e9836e15221bd233a7834ec35e943ec9c91fdff47aae->leave($__internal_7806d232e5c38be00627e9836e15221bd233a7834ec35e943ec9c91fdff47aae_prof);

        
        $__internal_6d305a0a527d446ce3d1e7beb0034d6e2f968c09e22f2267e3a7cabe1396d9b2->leave($__internal_6d305a0a527d446ce3d1e7beb0034d6e2f968c09e22f2267e3a7cabe1396d9b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad9bb5d323ab80ab0bce24c8314b94c17355a8c0e069fc461159064af64f5834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9bb5d323ab80ab0bce24c8314b94c17355a8c0e069fc461159064af64f5834->enter($__internal_ad9bb5d323ab80ab0bce24c8314b94c17355a8c0e069fc461159064af64f5834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c9387ad1d8379b138c501be8149ebdd8b132fdcf2a5605188eec9f8e0417a404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9387ad1d8379b138c501be8149ebdd8b132fdcf2a5605188eec9f8e0417a404->enter($__internal_c9387ad1d8379b138c501be8149ebdd8b132fdcf2a5605188eec9f8e0417a404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c9387ad1d8379b138c501be8149ebdd8b132fdcf2a5605188eec9f8e0417a404->leave($__internal_c9387ad1d8379b138c501be8149ebdd8b132fdcf2a5605188eec9f8e0417a404_prof);

        
        $__internal_ad9bb5d323ab80ab0bce24c8314b94c17355a8c0e069fc461159064af64f5834->leave($__internal_ad9bb5d323ab80ab0bce24c8314b94c17355a8c0e069fc461159064af64f5834_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eccfb2f61695089d5520f8df8a09b540ad82574c26a98a6eb8c48e51e7c1eb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccfb2f61695089d5520f8df8a09b540ad82574c26a98a6eb8c48e51e7c1eb77->enter($__internal_eccfb2f61695089d5520f8df8a09b540ad82574c26a98a6eb8c48e51e7c1eb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7fc0ba87e41acd0eecbf737c531e8be2addf85ae89f5ad0b6db7463eb265ec6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc0ba87e41acd0eecbf737c531e8be2addf85ae89f5ad0b6db7463eb265ec6e->enter($__internal_7fc0ba87e41acd0eecbf737c531e8be2addf85ae89f5ad0b6db7463eb265ec6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7fc0ba87e41acd0eecbf737c531e8be2addf85ae89f5ad0b6db7463eb265ec6e->leave($__internal_7fc0ba87e41acd0eecbf737c531e8be2addf85ae89f5ad0b6db7463eb265ec6e_prof);

        
        $__internal_eccfb2f61695089d5520f8df8a09b540ad82574c26a98a6eb8c48e51e7c1eb77->leave($__internal_eccfb2f61695089d5520f8df8a09b540ad82574c26a98a6eb8c48e51e7c1eb77_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51b1b1f806acba1a79b554cb7b55c99d44172e2c4c4f97d954fe71740b9515c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b1b1f806acba1a79b554cb7b55c99d44172e2c4c4f97d954fe71740b9515c3->enter($__internal_51b1b1f806acba1a79b554cb7b55c99d44172e2c4c4f97d954fe71740b9515c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e75491c442762c4007a7fecccf7cb1b58a7903060bd5d0d6414b39091acefb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75491c442762c4007a7fecccf7cb1b58a7903060bd5d0d6414b39091acefb1f->enter($__internal_e75491c442762c4007a7fecccf7cb1b58a7903060bd5d0d6414b39091acefb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e75491c442762c4007a7fecccf7cb1b58a7903060bd5d0d6414b39091acefb1f->leave($__internal_e75491c442762c4007a7fecccf7cb1b58a7903060bd5d0d6414b39091acefb1f_prof);

        
        $__internal_51b1b1f806acba1a79b554cb7b55c99d44172e2c4c4f97d954fe71740b9515c3->leave($__internal_51b1b1f806acba1a79b554cb7b55c99d44172e2c4c4f97d954fe71740b9515c3_prof);

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
