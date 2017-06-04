<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_75dcd771ed4d5cbec268cd515ac7729f6db4f0685cec62eeb03ac6d632577cfb extends Twig_Template
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
        $__internal_952d0105e37ef849e5c36ff78a42d8d1ab822632b859afff4a05af8e854d8fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952d0105e37ef849e5c36ff78a42d8d1ab822632b859afff4a05af8e854d8fe1->enter($__internal_952d0105e37ef849e5c36ff78a42d8d1ab822632b859afff4a05af8e854d8fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ece88452bea9f20d06bb9f294e6dce57a60d8495d644805fe95dd8a1d66c86be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece88452bea9f20d06bb9f294e6dce57a60d8495d644805fe95dd8a1d66c86be->enter($__internal_ece88452bea9f20d06bb9f294e6dce57a60d8495d644805fe95dd8a1d66c86be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_952d0105e37ef849e5c36ff78a42d8d1ab822632b859afff4a05af8e854d8fe1->leave($__internal_952d0105e37ef849e5c36ff78a42d8d1ab822632b859afff4a05af8e854d8fe1_prof);

        
        $__internal_ece88452bea9f20d06bb9f294e6dce57a60d8495d644805fe95dd8a1d66c86be->leave($__internal_ece88452bea9f20d06bb9f294e6dce57a60d8495d644805fe95dd8a1d66c86be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
