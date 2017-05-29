<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e9a32bfa07040e22edc1698d76442f3ab394195f9acc78f645933a4f96b7a1c8 extends Twig_Template
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
        $__internal_57c8f496b19093570965aa84505300d909c28a137095da1b393d211e35933eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c8f496b19093570965aa84505300d909c28a137095da1b393d211e35933eb9->enter($__internal_57c8f496b19093570965aa84505300d909c28a137095da1b393d211e35933eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d1260bb77456f40ab9d714c3e45a679522e229aa94206bd7e80142dbbaf35864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1260bb77456f40ab9d714c3e45a679522e229aa94206bd7e80142dbbaf35864->enter($__internal_d1260bb77456f40ab9d714c3e45a679522e229aa94206bd7e80142dbbaf35864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_57c8f496b19093570965aa84505300d909c28a137095da1b393d211e35933eb9->leave($__internal_57c8f496b19093570965aa84505300d909c28a137095da1b393d211e35933eb9_prof);

        
        $__internal_d1260bb77456f40ab9d714c3e45a679522e229aa94206bd7e80142dbbaf35864->leave($__internal_d1260bb77456f40ab9d714c3e45a679522e229aa94206bd7e80142dbbaf35864_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
