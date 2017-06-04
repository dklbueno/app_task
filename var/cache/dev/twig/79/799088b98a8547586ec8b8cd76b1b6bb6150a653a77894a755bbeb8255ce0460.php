<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7acc607868beeed453f7a26f3e3b2a450ac89489c3cd298b09db35eadd62f799 extends Twig_Template
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
        $__internal_d7a714026fa4183d752d0eee761885da7609c642515ca6a00390e7881d5ce311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a714026fa4183d752d0eee761885da7609c642515ca6a00390e7881d5ce311->enter($__internal_d7a714026fa4183d752d0eee761885da7609c642515ca6a00390e7881d5ce311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bce0451ddb28e0d85e7777b205b833e0d680c885d1e6fcbacace1aeb9af7827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce0451ddb28e0d85e7777b205b833e0d680c885d1e6fcbacace1aeb9af7827b->enter($__internal_bce0451ddb28e0d85e7777b205b833e0d680c885d1e6fcbacace1aeb9af7827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d7a714026fa4183d752d0eee761885da7609c642515ca6a00390e7881d5ce311->leave($__internal_d7a714026fa4183d752d0eee761885da7609c642515ca6a00390e7881d5ce311_prof);

        
        $__internal_bce0451ddb28e0d85e7777b205b833e0d680c885d1e6fcbacace1aeb9af7827b->leave($__internal_bce0451ddb28e0d85e7777b205b833e0d680c885d1e6fcbacace1aeb9af7827b_prof);

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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
