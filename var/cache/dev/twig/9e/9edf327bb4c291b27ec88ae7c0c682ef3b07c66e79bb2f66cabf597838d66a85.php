<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e9fdfa5909d8efb888cfd26a7df343c3a2cfa022463403151b45852baa2e3cac extends Twig_Template
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
        $__internal_17d920bf4b38290389c9d4333f5a4c4b0704fbd494d63a57d1f148e14741b5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d920bf4b38290389c9d4333f5a4c4b0704fbd494d63a57d1f148e14741b5fa->enter($__internal_17d920bf4b38290389c9d4333f5a4c4b0704fbd494d63a57d1f148e14741b5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_051d73b798506c377737048351ae84a09db190331948d154671fd6148481f145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051d73b798506c377737048351ae84a09db190331948d154671fd6148481f145->enter($__internal_051d73b798506c377737048351ae84a09db190331948d154671fd6148481f145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_17d920bf4b38290389c9d4333f5a4c4b0704fbd494d63a57d1f148e14741b5fa->leave($__internal_17d920bf4b38290389c9d4333f5a4c4b0704fbd494d63a57d1f148e14741b5fa_prof);

        
        $__internal_051d73b798506c377737048351ae84a09db190331948d154671fd6148481f145->leave($__internal_051d73b798506c377737048351ae84a09db190331948d154671fd6148481f145_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
