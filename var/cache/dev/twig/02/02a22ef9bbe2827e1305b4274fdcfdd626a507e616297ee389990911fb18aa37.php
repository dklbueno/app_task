<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_eddc462f47e613643f810623e45bc0d9557e783863687ecdcd6a1aa685fa8af4 extends Twig_Template
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
        $__internal_85cc4fba86a5f05bd38f0e5d982cf35fc4c19b7c91ee285f8886d7b17b2f41c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cc4fba86a5f05bd38f0e5d982cf35fc4c19b7c91ee285f8886d7b17b2f41c0->enter($__internal_85cc4fba86a5f05bd38f0e5d982cf35fc4c19b7c91ee285f8886d7b17b2f41c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_70654be59afffae5a31461f892d5865e026c69a1c131f04ca34d86be32c521a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70654be59afffae5a31461f892d5865e026c69a1c131f04ca34d86be32c521a4->enter($__internal_70654be59afffae5a31461f892d5865e026c69a1c131f04ca34d86be32c521a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_85cc4fba86a5f05bd38f0e5d982cf35fc4c19b7c91ee285f8886d7b17b2f41c0->leave($__internal_85cc4fba86a5f05bd38f0e5d982cf35fc4c19b7c91ee285f8886d7b17b2f41c0_prof);

        
        $__internal_70654be59afffae5a31461f892d5865e026c69a1c131f04ca34d86be32c521a4->leave($__internal_70654be59afffae5a31461f892d5865e026c69a1c131f04ca34d86be32c521a4_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
