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
        $__internal_c9026839440d7a667f574be59b6b78d08b85b006ffcb2356599a6d912081df67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9026839440d7a667f574be59b6b78d08b85b006ffcb2356599a6d912081df67->enter($__internal_c9026839440d7a667f574be59b6b78d08b85b006ffcb2356599a6d912081df67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_81b7ad02d2ac4e4bf538e51e81858ea37035d7eb2a5a175a2c07a3b2bb2b1f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b7ad02d2ac4e4bf538e51e81858ea37035d7eb2a5a175a2c07a3b2bb2b1f8a->enter($__internal_81b7ad02d2ac4e4bf538e51e81858ea37035d7eb2a5a175a2c07a3b2bb2b1f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9026839440d7a667f574be59b6b78d08b85b006ffcb2356599a6d912081df67->leave($__internal_c9026839440d7a667f574be59b6b78d08b85b006ffcb2356599a6d912081df67_prof);

        
        $__internal_81b7ad02d2ac4e4bf538e51e81858ea37035d7eb2a5a175a2c07a3b2bb2b1f8a->leave($__internal_81b7ad02d2ac4e4bf538e51e81858ea37035d7eb2a5a175a2c07a3b2bb2b1f8a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_02e1a15e082efd1c0b87822623af78173420e1d532011833958fbd5ba605d0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e1a15e082efd1c0b87822623af78173420e1d532011833958fbd5ba605d0ae->enter($__internal_02e1a15e082efd1c0b87822623af78173420e1d532011833958fbd5ba605d0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5cfe265f8e21e2611f659847208bca11507eaf17ec1ae35b474b32fcabf22b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfe265f8e21e2611f659847208bca11507eaf17ec1ae35b474b32fcabf22b7d->enter($__internal_5cfe265f8e21e2611f659847208bca11507eaf17ec1ae35b474b32fcabf22b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5cfe265f8e21e2611f659847208bca11507eaf17ec1ae35b474b32fcabf22b7d->leave($__internal_5cfe265f8e21e2611f659847208bca11507eaf17ec1ae35b474b32fcabf22b7d_prof);

        
        $__internal_02e1a15e082efd1c0b87822623af78173420e1d532011833958fbd5ba605d0ae->leave($__internal_02e1a15e082efd1c0b87822623af78173420e1d532011833958fbd5ba605d0ae_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b3da9ee2c836e132844ccb607b3677c6bd9b2d5402e65dca0a3050065212149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3da9ee2c836e132844ccb607b3677c6bd9b2d5402e65dca0a3050065212149->enter($__internal_8b3da9ee2c836e132844ccb607b3677c6bd9b2d5402e65dca0a3050065212149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d93a4752e0d106920774be402bb3e7f8f6a6c75f6f5d6521d0543f42675e5fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93a4752e0d106920774be402bb3e7f8f6a6c75f6f5d6521d0543f42675e5fdc->enter($__internal_d93a4752e0d106920774be402bb3e7f8f6a6c75f6f5d6521d0543f42675e5fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d93a4752e0d106920774be402bb3e7f8f6a6c75f6f5d6521d0543f42675e5fdc->leave($__internal_d93a4752e0d106920774be402bb3e7f8f6a6c75f6f5d6521d0543f42675e5fdc_prof);

        
        $__internal_8b3da9ee2c836e132844ccb607b3677c6bd9b2d5402e65dca0a3050065212149->leave($__internal_8b3da9ee2c836e132844ccb607b3677c6bd9b2d5402e65dca0a3050065212149_prof);

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
