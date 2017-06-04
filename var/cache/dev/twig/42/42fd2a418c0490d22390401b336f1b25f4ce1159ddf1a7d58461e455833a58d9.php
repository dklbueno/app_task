<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_46dc680bfd8286d6a75187db353fbd9b49037721139442da769bed09197d09df extends Twig_Template
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
        $__internal_ea042d0dd84ebe22903e05330f6bbaa12f144f3896baea2a17cd2ff228581294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea042d0dd84ebe22903e05330f6bbaa12f144f3896baea2a17cd2ff228581294->enter($__internal_ea042d0dd84ebe22903e05330f6bbaa12f144f3896baea2a17cd2ff228581294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ade48f05bcb19e6e5ee5f01d21d3ee86dd2c96462051ebccbff075425e16f77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade48f05bcb19e6e5ee5f01d21d3ee86dd2c96462051ebccbff075425e16f77d->enter($__internal_ade48f05bcb19e6e5ee5f01d21d3ee86dd2c96462051ebccbff075425e16f77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ea042d0dd84ebe22903e05330f6bbaa12f144f3896baea2a17cd2ff228581294->leave($__internal_ea042d0dd84ebe22903e05330f6bbaa12f144f3896baea2a17cd2ff228581294_prof);

        
        $__internal_ade48f05bcb19e6e5ee5f01d21d3ee86dd2c96462051ebccbff075425e16f77d->leave($__internal_ade48f05bcb19e6e5ee5f01d21d3ee86dd2c96462051ebccbff075425e16f77d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
