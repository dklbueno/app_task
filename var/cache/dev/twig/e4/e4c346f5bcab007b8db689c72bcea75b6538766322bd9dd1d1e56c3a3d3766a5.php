<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_06035790a98a9bbd821836bf1c336d5f136eaab25c825043ff32eaaf20e4c407 extends Twig_Template
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
        $__internal_eb42c12d07932e93a570b36d821bad0259071ac65ddc6db92f89be16c2b464aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb42c12d07932e93a570b36d821bad0259071ac65ddc6db92f89be16c2b464aa->enter($__internal_eb42c12d07932e93a570b36d821bad0259071ac65ddc6db92f89be16c2b464aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7d6f17f82113d1e015eeb0c487dea44fd12daf67f31a4051aa62d8ca97763848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6f17f82113d1e015eeb0c487dea44fd12daf67f31a4051aa62d8ca97763848->enter($__internal_7d6f17f82113d1e015eeb0c487dea44fd12daf67f31a4051aa62d8ca97763848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_eb42c12d07932e93a570b36d821bad0259071ac65ddc6db92f89be16c2b464aa->leave($__internal_eb42c12d07932e93a570b36d821bad0259071ac65ddc6db92f89be16c2b464aa_prof);

        
        $__internal_7d6f17f82113d1e015eeb0c487dea44fd12daf67f31a4051aa62d8ca97763848->leave($__internal_7d6f17f82113d1e015eeb0c487dea44fd12daf67f31a4051aa62d8ca97763848_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
