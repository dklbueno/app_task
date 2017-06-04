<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1316384d72965bac0160ffda05d879832a8e0dd3b4c29603da9fb620279b41f1 extends Twig_Template
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
        $__internal_152064e6a70136e9e0d5bf85f4eb8da59404467f8bff40c0d189891798ff3237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152064e6a70136e9e0d5bf85f4eb8da59404467f8bff40c0d189891798ff3237->enter($__internal_152064e6a70136e9e0d5bf85f4eb8da59404467f8bff40c0d189891798ff3237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_be089113b2b74897c79e351e40d7f36f1999d25d692fa3ab7d87d2ea0a2d297f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be089113b2b74897c79e351e40d7f36f1999d25d692fa3ab7d87d2ea0a2d297f->enter($__internal_be089113b2b74897c79e351e40d7f36f1999d25d692fa3ab7d87d2ea0a2d297f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_152064e6a70136e9e0d5bf85f4eb8da59404467f8bff40c0d189891798ff3237->leave($__internal_152064e6a70136e9e0d5bf85f4eb8da59404467f8bff40c0d189891798ff3237_prof);

        
        $__internal_be089113b2b74897c79e351e40d7f36f1999d25d692fa3ab7d87d2ea0a2d297f->leave($__internal_be089113b2b74897c79e351e40d7f36f1999d25d692fa3ab7d87d2ea0a2d297f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
