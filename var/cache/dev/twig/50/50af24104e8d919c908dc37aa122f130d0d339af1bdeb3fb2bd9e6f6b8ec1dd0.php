<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_df8500247570a7431178b56546820d17766937e9dcce8767ad8eb1878241456d extends Twig_Template
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
        $__internal_1c1ed0bbf31502265dff52709da1e38f7fb60b195d46187f6f0ec15b7cb1eb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1ed0bbf31502265dff52709da1e38f7fb60b195d46187f6f0ec15b7cb1eb33->enter($__internal_1c1ed0bbf31502265dff52709da1e38f7fb60b195d46187f6f0ec15b7cb1eb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d37ff4def83068b8a2e0d4be731c3854aa954724bc6f600d6796d4de859a822e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37ff4def83068b8a2e0d4be731c3854aa954724bc6f600d6796d4de859a822e->enter($__internal_d37ff4def83068b8a2e0d4be731c3854aa954724bc6f600d6796d4de859a822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1c1ed0bbf31502265dff52709da1e38f7fb60b195d46187f6f0ec15b7cb1eb33->leave($__internal_1c1ed0bbf31502265dff52709da1e38f7fb60b195d46187f6f0ec15b7cb1eb33_prof);

        
        $__internal_d37ff4def83068b8a2e0d4be731c3854aa954724bc6f600d6796d4de859a822e->leave($__internal_d37ff4def83068b8a2e0d4be731c3854aa954724bc6f600d6796d4de859a822e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
