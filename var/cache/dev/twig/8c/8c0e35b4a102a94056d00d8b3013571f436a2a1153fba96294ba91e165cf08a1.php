<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_52eddd5cfc01fb2a26efc9a65333fccdfa8991d6c219cbe67bafa9b491bf5a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_23080106fc3df1c045978c387650d9ea9052c34617dfb0aa6976e72383af0572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23080106fc3df1c045978c387650d9ea9052c34617dfb0aa6976e72383af0572->enter($__internal_23080106fc3df1c045978c387650d9ea9052c34617dfb0aa6976e72383af0572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1cff7f887670627489bdadfd2e91ad66ff1ed6fd81e342acba40cffec3767d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cff7f887670627489bdadfd2e91ad66ff1ed6fd81e342acba40cffec3767d44->enter($__internal_1cff7f887670627489bdadfd2e91ad66ff1ed6fd81e342acba40cffec3767d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23080106fc3df1c045978c387650d9ea9052c34617dfb0aa6976e72383af0572->leave($__internal_23080106fc3df1c045978c387650d9ea9052c34617dfb0aa6976e72383af0572_prof);

        
        $__internal_1cff7f887670627489bdadfd2e91ad66ff1ed6fd81e342acba40cffec3767d44->leave($__internal_1cff7f887670627489bdadfd2e91ad66ff1ed6fd81e342acba40cffec3767d44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f08b8c5d89a5efadbd3d8ede8fd70bc60f99087f54fd67a7c186f9f2d4e293f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f08b8c5d89a5efadbd3d8ede8fd70bc60f99087f54fd67a7c186f9f2d4e293f->enter($__internal_3f08b8c5d89a5efadbd3d8ede8fd70bc60f99087f54fd67a7c186f9f2d4e293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd622d88eb45c271e149956b98d91c13ddd1e8f10b6f364e789041f167cd9e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd622d88eb45c271e149956b98d91c13ddd1e8f10b6f364e789041f167cd9e28->enter($__internal_cd622d88eb45c271e149956b98d91c13ddd1e8f10b6f364e789041f167cd9e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cd622d88eb45c271e149956b98d91c13ddd1e8f10b6f364e789041f167cd9e28->leave($__internal_cd622d88eb45c271e149956b98d91c13ddd1e8f10b6f364e789041f167cd9e28_prof);

        
        $__internal_3f08b8c5d89a5efadbd3d8ede8fd70bc60f99087f54fd67a7c186f9f2d4e293f->leave($__internal_3f08b8c5d89a5efadbd3d8ede8fd70bc60f99087f54fd67a7c186f9f2d4e293f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eff0975e765cc14c999ead90eed5b600810a6eb8db1430f68de47561e54a887f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff0975e765cc14c999ead90eed5b600810a6eb8db1430f68de47561e54a887f->enter($__internal_eff0975e765cc14c999ead90eed5b600810a6eb8db1430f68de47561e54a887f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0f5b6d886e4dd45d1217e2dc8e49bda71bf4cbe6f752d53dc792d9d4ad8c5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f5b6d886e4dd45d1217e2dc8e49bda71bf4cbe6f752d53dc792d9d4ad8c5df->enter($__internal_b0f5b6d886e4dd45d1217e2dc8e49bda71bf4cbe6f752d53dc792d9d4ad8c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b0f5b6d886e4dd45d1217e2dc8e49bda71bf4cbe6f752d53dc792d9d4ad8c5df->leave($__internal_b0f5b6d886e4dd45d1217e2dc8e49bda71bf4cbe6f752d53dc792d9d4ad8c5df_prof);

        
        $__internal_eff0975e765cc14c999ead90eed5b600810a6eb8db1430f68de47561e54a887f->leave($__internal_eff0975e765cc14c999ead90eed5b600810a6eb8db1430f68de47561e54a887f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7365a8b194c56f7e792f628ce662cc3a581b0d4afa7a089ee83e774f4c09dd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7365a8b194c56f7e792f628ce662cc3a581b0d4afa7a089ee83e774f4c09dd7d->enter($__internal_7365a8b194c56f7e792f628ce662cc3a581b0d4afa7a089ee83e774f4c09dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9ca8f0b7250b1f2c4b426eb5398edf2bd300166eb59c8e75608071cff60f0d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca8f0b7250b1f2c4b426eb5398edf2bd300166eb59c8e75608071cff60f0d11->enter($__internal_9ca8f0b7250b1f2c4b426eb5398edf2bd300166eb59c8e75608071cff60f0d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9ca8f0b7250b1f2c4b426eb5398edf2bd300166eb59c8e75608071cff60f0d11->leave($__internal_9ca8f0b7250b1f2c4b426eb5398edf2bd300166eb59c8e75608071cff60f0d11_prof);

        
        $__internal_7365a8b194c56f7e792f628ce662cc3a581b0d4afa7a089ee83e774f4c09dd7d->leave($__internal_7365a8b194c56f7e792f628ce662cc3a581b0d4afa7a089ee83e774f4c09dd7d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
