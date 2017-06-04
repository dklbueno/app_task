<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4d2a027061ea4c2067a3bf3c734b60f493aa75c54190e9a7adcd49fe53d979eb extends Twig_Template
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
        $__internal_e3b5530423e040f585cca46dc2c039419a1b508dc20012d5d7839635ef55ac8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b5530423e040f585cca46dc2c039419a1b508dc20012d5d7839635ef55ac8a->enter($__internal_e3b5530423e040f585cca46dc2c039419a1b508dc20012d5d7839635ef55ac8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2767042779b9e59c5a31b8ebb7e6ae2a627544fd51a0c09238a80598025881bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2767042779b9e59c5a31b8ebb7e6ae2a627544fd51a0c09238a80598025881bc->enter($__internal_2767042779b9e59c5a31b8ebb7e6ae2a627544fd51a0c09238a80598025881bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b5530423e040f585cca46dc2c039419a1b508dc20012d5d7839635ef55ac8a->leave($__internal_e3b5530423e040f585cca46dc2c039419a1b508dc20012d5d7839635ef55ac8a_prof);

        
        $__internal_2767042779b9e59c5a31b8ebb7e6ae2a627544fd51a0c09238a80598025881bc->leave($__internal_2767042779b9e59c5a31b8ebb7e6ae2a627544fd51a0c09238a80598025881bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36c2abfb8d7ee8fc15f761f72316bf37bf60cb9f56279df88874e781f907395d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c2abfb8d7ee8fc15f761f72316bf37bf60cb9f56279df88874e781f907395d->enter($__internal_36c2abfb8d7ee8fc15f761f72316bf37bf60cb9f56279df88874e781f907395d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bfea07b53b2bd0e703910bfbf33404346c6d70c975c504a6e5c2e2400ee8b8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfea07b53b2bd0e703910bfbf33404346c6d70c975c504a6e5c2e2400ee8b8cf->enter($__internal_bfea07b53b2bd0e703910bfbf33404346c6d70c975c504a6e5c2e2400ee8b8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bfea07b53b2bd0e703910bfbf33404346c6d70c975c504a6e5c2e2400ee8b8cf->leave($__internal_bfea07b53b2bd0e703910bfbf33404346c6d70c975c504a6e5c2e2400ee8b8cf_prof);

        
        $__internal_36c2abfb8d7ee8fc15f761f72316bf37bf60cb9f56279df88874e781f907395d->leave($__internal_36c2abfb8d7ee8fc15f761f72316bf37bf60cb9f56279df88874e781f907395d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf63243129e26b3107b96cc75204e060606b43b01ad0f02dd656ac21754424dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf63243129e26b3107b96cc75204e060606b43b01ad0f02dd656ac21754424dd->enter($__internal_bf63243129e26b3107b96cc75204e060606b43b01ad0f02dd656ac21754424dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb12614c272bba9a2b90411c1871d5dd98c346e96bfba3d6afb6f138635dfdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb12614c272bba9a2b90411c1871d5dd98c346e96bfba3d6afb6f138635dfdd2->enter($__internal_eb12614c272bba9a2b90411c1871d5dd98c346e96bfba3d6afb6f138635dfdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb12614c272bba9a2b90411c1871d5dd98c346e96bfba3d6afb6f138635dfdd2->leave($__internal_eb12614c272bba9a2b90411c1871d5dd98c346e96bfba3d6afb6f138635dfdd2_prof);

        
        $__internal_bf63243129e26b3107b96cc75204e060606b43b01ad0f02dd656ac21754424dd->leave($__internal_bf63243129e26b3107b96cc75204e060606b43b01ad0f02dd656ac21754424dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05ee06b55005c733a6a723e9c00de91cb73cfa47c907c6f3ab3ef2d3824fa5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ee06b55005c733a6a723e9c00de91cb73cfa47c907c6f3ab3ef2d3824fa5d5->enter($__internal_05ee06b55005c733a6a723e9c00de91cb73cfa47c907c6f3ab3ef2d3824fa5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_227d820dacc13a6b1067422ee52e235fd38bcb88308f13e75351d7952c859421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227d820dacc13a6b1067422ee52e235fd38bcb88308f13e75351d7952c859421->enter($__internal_227d820dacc13a6b1067422ee52e235fd38bcb88308f13e75351d7952c859421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_227d820dacc13a6b1067422ee52e235fd38bcb88308f13e75351d7952c859421->leave($__internal_227d820dacc13a6b1067422ee52e235fd38bcb88308f13e75351d7952c859421_prof);

        
        $__internal_05ee06b55005c733a6a723e9c00de91cb73cfa47c907c6f3ab3ef2d3824fa5d5->leave($__internal_05ee06b55005c733a6a723e9c00de91cb73cfa47c907c6f3ab3ef2d3824fa5d5_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
