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
        $__internal_d3e38fd51459d0edd5f69f6e3c848d3848d8c13b221d7d1196cd7c7280b0790c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e38fd51459d0edd5f69f6e3c848d3848d8c13b221d7d1196cd7c7280b0790c->enter($__internal_d3e38fd51459d0edd5f69f6e3c848d3848d8c13b221d7d1196cd7c7280b0790c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_628d8dbfeed0cbfd92b3093484e325bd93914456aa889c83375dccca2c662789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628d8dbfeed0cbfd92b3093484e325bd93914456aa889c83375dccca2c662789->enter($__internal_628d8dbfeed0cbfd92b3093484e325bd93914456aa889c83375dccca2c662789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d3e38fd51459d0edd5f69f6e3c848d3848d8c13b221d7d1196cd7c7280b0790c->leave($__internal_d3e38fd51459d0edd5f69f6e3c848d3848d8c13b221d7d1196cd7c7280b0790c_prof);

        
        $__internal_628d8dbfeed0cbfd92b3093484e325bd93914456aa889c83375dccca2c662789->leave($__internal_628d8dbfeed0cbfd92b3093484e325bd93914456aa889c83375dccca2c662789_prof);

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
