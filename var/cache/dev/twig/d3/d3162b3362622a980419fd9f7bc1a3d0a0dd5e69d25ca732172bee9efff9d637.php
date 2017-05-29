<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e8342f19383116d0d7ca10c2166d5af9406f63ea1559de88c694a717424b88be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7965284414be19d9401e3c40eda69644eea5045a1823ecec213a4a8db1ac5458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7965284414be19d9401e3c40eda69644eea5045a1823ecec213a4a8db1ac5458->enter($__internal_7965284414be19d9401e3c40eda69644eea5045a1823ecec213a4a8db1ac5458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_71ae0a71a02bf2235e0e67bd6ad1b36c86dc637fa4e91b127850871778d0d1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ae0a71a02bf2235e0e67bd6ad1b36c86dc637fa4e91b127850871778d0d1c3->enter($__internal_71ae0a71a02bf2235e0e67bd6ad1b36c86dc637fa4e91b127850871778d0d1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7965284414be19d9401e3c40eda69644eea5045a1823ecec213a4a8db1ac5458->leave($__internal_7965284414be19d9401e3c40eda69644eea5045a1823ecec213a4a8db1ac5458_prof);

        
        $__internal_71ae0a71a02bf2235e0e67bd6ad1b36c86dc637fa4e91b127850871778d0d1c3->leave($__internal_71ae0a71a02bf2235e0e67bd6ad1b36c86dc637fa4e91b127850871778d0d1c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e549bcd037cf496fe67fb0e9f25b2bd2869df6207eca5d3ba435ecda3eb590c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e549bcd037cf496fe67fb0e9f25b2bd2869df6207eca5d3ba435ecda3eb590c2->enter($__internal_e549bcd037cf496fe67fb0e9f25b2bd2869df6207eca5d3ba435ecda3eb590c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c225075d81e785c6dfe5c475cac399589ea78e0817a175fbe009eca2ba357b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c225075d81e785c6dfe5c475cac399589ea78e0817a175fbe009eca2ba357b8a->enter($__internal_c225075d81e785c6dfe5c475cac399589ea78e0817a175fbe009eca2ba357b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c225075d81e785c6dfe5c475cac399589ea78e0817a175fbe009eca2ba357b8a->leave($__internal_c225075d81e785c6dfe5c475cac399589ea78e0817a175fbe009eca2ba357b8a_prof);

        
        $__internal_e549bcd037cf496fe67fb0e9f25b2bd2869df6207eca5d3ba435ecda3eb590c2->leave($__internal_e549bcd037cf496fe67fb0e9f25b2bd2869df6207eca5d3ba435ecda3eb590c2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4673083e7228fa06548eced279196bcd20b72d19e656e13b0eb0697831d0ef01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4673083e7228fa06548eced279196bcd20b72d19e656e13b0eb0697831d0ef01->enter($__internal_4673083e7228fa06548eced279196bcd20b72d19e656e13b0eb0697831d0ef01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f61f5a4ced1a066eae1e214448e024fe6ac8075772e8623bc6c79d29e29aefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f61f5a4ced1a066eae1e214448e024fe6ac8075772e8623bc6c79d29e29aefd->enter($__internal_2f61f5a4ced1a066eae1e214448e024fe6ac8075772e8623bc6c79d29e29aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2f61f5a4ced1a066eae1e214448e024fe6ac8075772e8623bc6c79d29e29aefd->leave($__internal_2f61f5a4ced1a066eae1e214448e024fe6ac8075772e8623bc6c79d29e29aefd_prof);

        
        $__internal_4673083e7228fa06548eced279196bcd20b72d19e656e13b0eb0697831d0ef01->leave($__internal_4673083e7228fa06548eced279196bcd20b72d19e656e13b0eb0697831d0ef01_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
