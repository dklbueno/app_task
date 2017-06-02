<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_90c700021bcc79af178a5b81879a7b96faeb4a1f67a05428cdde6a5a28c85249 extends Twig_Template
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
        $__internal_d5785d8a36e324ad7ffef2b9b1261a1c85976dc040d70de2a7ccab9809eef8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5785d8a36e324ad7ffef2b9b1261a1c85976dc040d70de2a7ccab9809eef8a9->enter($__internal_d5785d8a36e324ad7ffef2b9b1261a1c85976dc040d70de2a7ccab9809eef8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_79ebdbd6fccb800e7f61bdbf9bfd7d1a36c3cc05e3ed6ad4329168fd7693caf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ebdbd6fccb800e7f61bdbf9bfd7d1a36c3cc05e3ed6ad4329168fd7693caf1->enter($__internal_79ebdbd6fccb800e7f61bdbf9bfd7d1a36c3cc05e3ed6ad4329168fd7693caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d5785d8a36e324ad7ffef2b9b1261a1c85976dc040d70de2a7ccab9809eef8a9->leave($__internal_d5785d8a36e324ad7ffef2b9b1261a1c85976dc040d70de2a7ccab9809eef8a9_prof);

        
        $__internal_79ebdbd6fccb800e7f61bdbf9bfd7d1a36c3cc05e3ed6ad4329168fd7693caf1->leave($__internal_79ebdbd6fccb800e7f61bdbf9bfd7d1a36c3cc05e3ed6ad4329168fd7693caf1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f63e1e1f9c7d929955c8e9a47308af917d7a69f6551eaba30306772cbd9c5375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63e1e1f9c7d929955c8e9a47308af917d7a69f6551eaba30306772cbd9c5375->enter($__internal_f63e1e1f9c7d929955c8e9a47308af917d7a69f6551eaba30306772cbd9c5375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64c79d881a3231fc967800bbb1169e17fc7e2347acd55347f0facd9a1e08995d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c79d881a3231fc967800bbb1169e17fc7e2347acd55347f0facd9a1e08995d->enter($__internal_64c79d881a3231fc967800bbb1169e17fc7e2347acd55347f0facd9a1e08995d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64c79d881a3231fc967800bbb1169e17fc7e2347acd55347f0facd9a1e08995d->leave($__internal_64c79d881a3231fc967800bbb1169e17fc7e2347acd55347f0facd9a1e08995d_prof);

        
        $__internal_f63e1e1f9c7d929955c8e9a47308af917d7a69f6551eaba30306772cbd9c5375->leave($__internal_f63e1e1f9c7d929955c8e9a47308af917d7a69f6551eaba30306772cbd9c5375_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
