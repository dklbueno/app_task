<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f3d29b33c8ff319bef1eee97c4e4704e5088b08e3fe66698719e7606274d43d1 extends Twig_Template
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
        $__internal_740b240f63e221202a5ab8759b2fd1d508a3c325169ed7b12df4c77a58531fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740b240f63e221202a5ab8759b2fd1d508a3c325169ed7b12df4c77a58531fef->enter($__internal_740b240f63e221202a5ab8759b2fd1d508a3c325169ed7b12df4c77a58531fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_7d64f8e17f0ff7f5adeaa5d877ba0455696e140d85f1a6c814e9f25a5d6b1f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d64f8e17f0ff7f5adeaa5d877ba0455696e140d85f1a6c814e9f25a5d6b1f9c->enter($__internal_7d64f8e17f0ff7f5adeaa5d877ba0455696e140d85f1a6c814e9f25a5d6b1f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_740b240f63e221202a5ab8759b2fd1d508a3c325169ed7b12df4c77a58531fef->leave($__internal_740b240f63e221202a5ab8759b2fd1d508a3c325169ed7b12df4c77a58531fef_prof);

        
        $__internal_7d64f8e17f0ff7f5adeaa5d877ba0455696e140d85f1a6c814e9f25a5d6b1f9c->leave($__internal_7d64f8e17f0ff7f5adeaa5d877ba0455696e140d85f1a6c814e9f25a5d6b1f9c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
