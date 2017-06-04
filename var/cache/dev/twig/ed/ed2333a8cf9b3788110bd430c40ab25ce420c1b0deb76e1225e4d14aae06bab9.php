<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e9fca39d9ae6906118c5e801c5aa148b48afa8ebc43ed14e22a6113099849f6b extends Twig_Template
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
        $__internal_e0341eb8d511ac9a09ab72f6ea0590b4ee5a5bf99b78f88af38258f8e7e12bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0341eb8d511ac9a09ab72f6ea0590b4ee5a5bf99b78f88af38258f8e7e12bf2->enter($__internal_e0341eb8d511ac9a09ab72f6ea0590b4ee5a5bf99b78f88af38258f8e7e12bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_beabe40431e60ea28dcf180c3116a87757b732d674851e284344c3f97a4d7766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beabe40431e60ea28dcf180c3116a87757b732d674851e284344c3f97a4d7766->enter($__internal_beabe40431e60ea28dcf180c3116a87757b732d674851e284344c3f97a4d7766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e0341eb8d511ac9a09ab72f6ea0590b4ee5a5bf99b78f88af38258f8e7e12bf2->leave($__internal_e0341eb8d511ac9a09ab72f6ea0590b4ee5a5bf99b78f88af38258f8e7e12bf2_prof);

        
        $__internal_beabe40431e60ea28dcf180c3116a87757b732d674851e284344c3f97a4d7766->leave($__internal_beabe40431e60ea28dcf180c3116a87757b732d674851e284344c3f97a4d7766_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
