<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_28c8eec5fb64c84d98d6a75f029ecf205e839af750ab4254b1a1b2877844cf61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a6d458595781ed89e8eccf690bf938068d0fca75e2c5ae343680d0df42d5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a6d458595781ed89e8eccf690bf938068d0fca75e2c5ae343680d0df42d5de->enter($__internal_09a6d458595781ed89e8eccf690bf938068d0fca75e2c5ae343680d0df42d5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f665c545da37e1f5fa5ee6f171de021a3aafc5d446e201e5b32f407ed34c2908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f665c545da37e1f5fa5ee6f171de021a3aafc5d446e201e5b32f407ed34c2908->enter($__internal_f665c545da37e1f5fa5ee6f171de021a3aafc5d446e201e5b32f407ed34c2908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a6d458595781ed89e8eccf690bf938068d0fca75e2c5ae343680d0df42d5de->leave($__internal_09a6d458595781ed89e8eccf690bf938068d0fca75e2c5ae343680d0df42d5de_prof);

        
        $__internal_f665c545da37e1f5fa5ee6f171de021a3aafc5d446e201e5b32f407ed34c2908->leave($__internal_f665c545da37e1f5fa5ee6f171de021a3aafc5d446e201e5b32f407ed34c2908_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_708641949e177b12b45fce6d5161155ea04b2730cbf2a52230926a2320a90b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708641949e177b12b45fce6d5161155ea04b2730cbf2a52230926a2320a90b71->enter($__internal_708641949e177b12b45fce6d5161155ea04b2730cbf2a52230926a2320a90b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_469d964b8ef7d18cdabeb83aec2a86fe41b2e2bb28fb94d7c8fd1ebbf06b98fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469d964b8ef7d18cdabeb83aec2a86fe41b2e2bb28fb94d7c8fd1ebbf06b98fe->enter($__internal_469d964b8ef7d18cdabeb83aec2a86fe41b2e2bb28fb94d7c8fd1ebbf06b98fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_469d964b8ef7d18cdabeb83aec2a86fe41b2e2bb28fb94d7c8fd1ebbf06b98fe->leave($__internal_469d964b8ef7d18cdabeb83aec2a86fe41b2e2bb28fb94d7c8fd1ebbf06b98fe_prof);

        
        $__internal_708641949e177b12b45fce6d5161155ea04b2730cbf2a52230926a2320a90b71->leave($__internal_708641949e177b12b45fce6d5161155ea04b2730cbf2a52230926a2320a90b71_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b57cd25c3f7efe352f4bb0fad15e7cc9b64b3875d5589b1ac07bdb64c495a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b57cd25c3f7efe352f4bb0fad15e7cc9b64b3875d5589b1ac07bdb64c495a7e->enter($__internal_8b57cd25c3f7efe352f4bb0fad15e7cc9b64b3875d5589b1ac07bdb64c495a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b43d546d1d91af1a9dc18b5b8d1f6020c1ea2ca51c1d9faf1e0e83443af8ce24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43d546d1d91af1a9dc18b5b8d1f6020c1ea2ca51c1d9faf1e0e83443af8ce24->enter($__internal_b43d546d1d91af1a9dc18b5b8d1f6020c1ea2ca51c1d9faf1e0e83443af8ce24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b43d546d1d91af1a9dc18b5b8d1f6020c1ea2ca51c1d9faf1e0e83443af8ce24->leave($__internal_b43d546d1d91af1a9dc18b5b8d1f6020c1ea2ca51c1d9faf1e0e83443af8ce24_prof);

        
        $__internal_8b57cd25c3f7efe352f4bb0fad15e7cc9b64b3875d5589b1ac07bdb64c495a7e->leave($__internal_8b57cd25c3f7efe352f4bb0fad15e7cc9b64b3875d5589b1ac07bdb64c495a7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
