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
        $__internal_4c8fe0dac08af0dd16713ebc3d68d7a3c31440f41bcfcd410d35e9c2cb798e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8fe0dac08af0dd16713ebc3d68d7a3c31440f41bcfcd410d35e9c2cb798e71->enter($__internal_4c8fe0dac08af0dd16713ebc3d68d7a3c31440f41bcfcd410d35e9c2cb798e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b8c2b15f1f25788730475a55504b7c8f9270f255bcb812d75df04a99cb98f3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c2b15f1f25788730475a55504b7c8f9270f255bcb812d75df04a99cb98f3b4->enter($__internal_b8c2b15f1f25788730475a55504b7c8f9270f255bcb812d75df04a99cb98f3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4c8fe0dac08af0dd16713ebc3d68d7a3c31440f41bcfcd410d35e9c2cb798e71->leave($__internal_4c8fe0dac08af0dd16713ebc3d68d7a3c31440f41bcfcd410d35e9c2cb798e71_prof);

        
        $__internal_b8c2b15f1f25788730475a55504b7c8f9270f255bcb812d75df04a99cb98f3b4->leave($__internal_b8c2b15f1f25788730475a55504b7c8f9270f255bcb812d75df04a99cb98f3b4_prof);

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
