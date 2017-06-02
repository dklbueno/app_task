<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5466a7a40460cbf353429f55ab9a0da749235f99ed936724e900243f822280c2 extends Twig_Template
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
        $__internal_8341171da0dd9c5bdb0241e0b50633f46555d84d6fe8d9c36d33abe86ffc1f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8341171da0dd9c5bdb0241e0b50633f46555d84d6fe8d9c36d33abe86ffc1f04->enter($__internal_8341171da0dd9c5bdb0241e0b50633f46555d84d6fe8d9c36d33abe86ffc1f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_77fe586c7d6e2f8748439e5c43826b7ab53248f5f8e46b5e095cbeda71f94583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fe586c7d6e2f8748439e5c43826b7ab53248f5f8e46b5e095cbeda71f94583->enter($__internal_77fe586c7d6e2f8748439e5c43826b7ab53248f5f8e46b5e095cbeda71f94583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8341171da0dd9c5bdb0241e0b50633f46555d84d6fe8d9c36d33abe86ffc1f04->leave($__internal_8341171da0dd9c5bdb0241e0b50633f46555d84d6fe8d9c36d33abe86ffc1f04_prof);

        
        $__internal_77fe586c7d6e2f8748439e5c43826b7ab53248f5f8e46b5e095cbeda71f94583->leave($__internal_77fe586c7d6e2f8748439e5c43826b7ab53248f5f8e46b5e095cbeda71f94583_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
