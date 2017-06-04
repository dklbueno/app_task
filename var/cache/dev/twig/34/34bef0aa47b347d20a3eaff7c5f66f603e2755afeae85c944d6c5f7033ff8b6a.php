<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a8e11cea634967162173ef28bd395f7a8f55441ab9f3f4f2da659ceb639ab68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf8f6526fee5dfbb644f8b1e5d3d3545d1be8809c3ea01f7435107d3d66eeddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8f6526fee5dfbb644f8b1e5d3d3545d1be8809c3ea01f7435107d3d66eeddd->enter($__internal_bf8f6526fee5dfbb644f8b1e5d3d3545d1be8809c3ea01f7435107d3d66eeddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a8a092883049cf96c35e63d05c1db7576706f725f6e2d8a5de3bc4c65356338f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a092883049cf96c35e63d05c1db7576706f725f6e2d8a5de3bc4c65356338f->enter($__internal_a8a092883049cf96c35e63d05c1db7576706f725f6e2d8a5de3bc4c65356338f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bf8f6526fee5dfbb644f8b1e5d3d3545d1be8809c3ea01f7435107d3d66eeddd->leave($__internal_bf8f6526fee5dfbb644f8b1e5d3d3545d1be8809c3ea01f7435107d3d66eeddd_prof);

        
        $__internal_a8a092883049cf96c35e63d05c1db7576706f725f6e2d8a5de3bc4c65356338f->leave($__internal_a8a092883049cf96c35e63d05c1db7576706f725f6e2d8a5de3bc4c65356338f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
