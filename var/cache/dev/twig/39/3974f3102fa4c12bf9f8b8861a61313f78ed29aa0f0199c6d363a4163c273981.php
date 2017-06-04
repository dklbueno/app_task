<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7736303ed8fe2db3d8c47a6ec0345149a3f3e87c4e4c77a6fbbb4e45a763ff3d extends Twig_Template
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
        $__internal_6738999b4bd8cbbc528d3fe1bb54f404001cdc2b99dbdf3c5d420e8417ed88d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6738999b4bd8cbbc528d3fe1bb54f404001cdc2b99dbdf3c5d420e8417ed88d9->enter($__internal_6738999b4bd8cbbc528d3fe1bb54f404001cdc2b99dbdf3c5d420e8417ed88d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4ce74eaaca8de4cb599551aacff9ae9ad0c4eda27f49ff4d4224865fc2822c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce74eaaca8de4cb599551aacff9ae9ad0c4eda27f49ff4d4224865fc2822c26->enter($__internal_4ce74eaaca8de4cb599551aacff9ae9ad0c4eda27f49ff4d4224865fc2822c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6738999b4bd8cbbc528d3fe1bb54f404001cdc2b99dbdf3c5d420e8417ed88d9->leave($__internal_6738999b4bd8cbbc528d3fe1bb54f404001cdc2b99dbdf3c5d420e8417ed88d9_prof);

        
        $__internal_4ce74eaaca8de4cb599551aacff9ae9ad0c4eda27f49ff4d4224865fc2822c26->leave($__internal_4ce74eaaca8de4cb599551aacff9ae9ad0c4eda27f49ff4d4224865fc2822c26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
