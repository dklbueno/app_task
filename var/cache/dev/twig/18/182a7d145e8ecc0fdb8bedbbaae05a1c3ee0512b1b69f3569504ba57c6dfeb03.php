<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e708e5b62abb5fb357f0fccd70a957b45583406bcab86c6b4aa64e59f70288d6 extends Twig_Template
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
        $__internal_33f6a8ba20cacc183aca729ffbc4abfbda484b412ce31b98bae3d4438bd7cbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f6a8ba20cacc183aca729ffbc4abfbda484b412ce31b98bae3d4438bd7cbd5->enter($__internal_33f6a8ba20cacc183aca729ffbc4abfbda484b412ce31b98bae3d4438bd7cbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_068666ccdd8c2425d31a5db30580d9c08014d15e18c3c53e671923832623562e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068666ccdd8c2425d31a5db30580d9c08014d15e18c3c53e671923832623562e->enter($__internal_068666ccdd8c2425d31a5db30580d9c08014d15e18c3c53e671923832623562e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_33f6a8ba20cacc183aca729ffbc4abfbda484b412ce31b98bae3d4438bd7cbd5->leave($__internal_33f6a8ba20cacc183aca729ffbc4abfbda484b412ce31b98bae3d4438bd7cbd5_prof);

        
        $__internal_068666ccdd8c2425d31a5db30580d9c08014d15e18c3c53e671923832623562e->leave($__internal_068666ccdd8c2425d31a5db30580d9c08014d15e18c3c53e671923832623562e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
