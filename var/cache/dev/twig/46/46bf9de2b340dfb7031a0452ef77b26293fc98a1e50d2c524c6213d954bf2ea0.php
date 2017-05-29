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
        $__internal_7cb6de72b8cc7f414eb89e8832188094167e01ade4b195f56afc1ec989700045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb6de72b8cc7f414eb89e8832188094167e01ade4b195f56afc1ec989700045->enter($__internal_7cb6de72b8cc7f414eb89e8832188094167e01ade4b195f56afc1ec989700045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3c037230aaaa392bff63f87798f42be1e5001186ec69416292262c8f5c2a1dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c037230aaaa392bff63f87798f42be1e5001186ec69416292262c8f5c2a1dbe->enter($__internal_3c037230aaaa392bff63f87798f42be1e5001186ec69416292262c8f5c2a1dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7cb6de72b8cc7f414eb89e8832188094167e01ade4b195f56afc1ec989700045->leave($__internal_7cb6de72b8cc7f414eb89e8832188094167e01ade4b195f56afc1ec989700045_prof);

        
        $__internal_3c037230aaaa392bff63f87798f42be1e5001186ec69416292262c8f5c2a1dbe->leave($__internal_3c037230aaaa392bff63f87798f42be1e5001186ec69416292262c8f5c2a1dbe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7d07bf24b05f563f6be90449e34ec8970610c865923ab1327dcea4e8a65742e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d07bf24b05f563f6be90449e34ec8970610c865923ab1327dcea4e8a65742e->enter($__internal_b7d07bf24b05f563f6be90449e34ec8970610c865923ab1327dcea4e8a65742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e71585351b622e1d41e1a48eb0e3185afc0f52b961177e6c64f01f1505bbedfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71585351b622e1d41e1a48eb0e3185afc0f52b961177e6c64f01f1505bbedfa->enter($__internal_e71585351b622e1d41e1a48eb0e3185afc0f52b961177e6c64f01f1505bbedfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e71585351b622e1d41e1a48eb0e3185afc0f52b961177e6c64f01f1505bbedfa->leave($__internal_e71585351b622e1d41e1a48eb0e3185afc0f52b961177e6c64f01f1505bbedfa_prof);

        
        $__internal_b7d07bf24b05f563f6be90449e34ec8970610c865923ab1327dcea4e8a65742e->leave($__internal_b7d07bf24b05f563f6be90449e34ec8970610c865923ab1327dcea4e8a65742e_prof);

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
