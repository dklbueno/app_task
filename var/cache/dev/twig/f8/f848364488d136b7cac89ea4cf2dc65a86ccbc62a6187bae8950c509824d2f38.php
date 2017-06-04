<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b6a63c3f41e248d25342158a3b4a734dffd295c4f70d47c7056b9b041cf3cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa548418c2ecca9920b2f45daa2c5fa71741c0d7417ea99f0b0f4b69a8242853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa548418c2ecca9920b2f45daa2c5fa71741c0d7417ea99f0b0f4b69a8242853->enter($__internal_fa548418c2ecca9920b2f45daa2c5fa71741c0d7417ea99f0b0f4b69a8242853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_306fe17160ea765f8d221e3a5a8b9fbab7863e6e75e3397278bc6c02ca6e0c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306fe17160ea765f8d221e3a5a8b9fbab7863e6e75e3397278bc6c02ca6e0c34->enter($__internal_306fe17160ea765f8d221e3a5a8b9fbab7863e6e75e3397278bc6c02ca6e0c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa548418c2ecca9920b2f45daa2c5fa71741c0d7417ea99f0b0f4b69a8242853->leave($__internal_fa548418c2ecca9920b2f45daa2c5fa71741c0d7417ea99f0b0f4b69a8242853_prof);

        
        $__internal_306fe17160ea765f8d221e3a5a8b9fbab7863e6e75e3397278bc6c02ca6e0c34->leave($__internal_306fe17160ea765f8d221e3a5a8b9fbab7863e6e75e3397278bc6c02ca6e0c34_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f941f05017002f52e6d4c55f88354777ab2b1dd40785ef9e36690c522946a150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f941f05017002f52e6d4c55f88354777ab2b1dd40785ef9e36690c522946a150->enter($__internal_f941f05017002f52e6d4c55f88354777ab2b1dd40785ef9e36690c522946a150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8bb06b19a10185b084ca4fd8095c5ed5f7d64d4f5b1100ea2c891d2cf575a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bb06b19a10185b084ca4fd8095c5ed5f7d64d4f5b1100ea2c891d2cf575a35->enter($__internal_f8bb06b19a10185b084ca4fd8095c5ed5f7d64d4f5b1100ea2c891d2cf575a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f8bb06b19a10185b084ca4fd8095c5ed5f7d64d4f5b1100ea2c891d2cf575a35->leave($__internal_f8bb06b19a10185b084ca4fd8095c5ed5f7d64d4f5b1100ea2c891d2cf575a35_prof);

        
        $__internal_f941f05017002f52e6d4c55f88354777ab2b1dd40785ef9e36690c522946a150->leave($__internal_f941f05017002f52e6d4c55f88354777ab2b1dd40785ef9e36690c522946a150_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
