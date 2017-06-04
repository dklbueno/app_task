<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_2ac26c3e21626eff0a8a11eb48577338d3c1e706afaeaaa78b6da2a24a99e712 extends Twig_Template
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
        $__internal_0268a4c84e6c9e6153b24b105233900c02488d3309c5a92363ba3e4ca00a57fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0268a4c84e6c9e6153b24b105233900c02488d3309c5a92363ba3e4ca00a57fc->enter($__internal_0268a4c84e6c9e6153b24b105233900c02488d3309c5a92363ba3e4ca00a57fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_84e821ed98543cdbbe3091dece957334b43c0f795cb18d13cbb07ec28ce598b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e821ed98543cdbbe3091dece957334b43c0f795cb18d13cbb07ec28ce598b2->enter($__internal_84e821ed98543cdbbe3091dece957334b43c0f795cb18d13cbb07ec28ce598b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0268a4c84e6c9e6153b24b105233900c02488d3309c5a92363ba3e4ca00a57fc->leave($__internal_0268a4c84e6c9e6153b24b105233900c02488d3309c5a92363ba3e4ca00a57fc_prof);

        
        $__internal_84e821ed98543cdbbe3091dece957334b43c0f795cb18d13cbb07ec28ce598b2->leave($__internal_84e821ed98543cdbbe3091dece957334b43c0f795cb18d13cbb07ec28ce598b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
