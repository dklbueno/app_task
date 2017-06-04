<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8c99fd7bb1e919777dbef6d0cdd93febb11743d46598c71032595c865b78ce98 extends Twig_Template
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
        $__internal_f1eed03b3a31bcd2e319c1d61bb447b65bfd8309f142a3c37f397ab7ac89f554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1eed03b3a31bcd2e319c1d61bb447b65bfd8309f142a3c37f397ab7ac89f554->enter($__internal_f1eed03b3a31bcd2e319c1d61bb447b65bfd8309f142a3c37f397ab7ac89f554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d62866da1bf9401337cbe3d735601548543900999dc54557524b9b06cecbd7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62866da1bf9401337cbe3d735601548543900999dc54557524b9b06cecbd7c8->enter($__internal_d62866da1bf9401337cbe3d735601548543900999dc54557524b9b06cecbd7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1eed03b3a31bcd2e319c1d61bb447b65bfd8309f142a3c37f397ab7ac89f554->leave($__internal_f1eed03b3a31bcd2e319c1d61bb447b65bfd8309f142a3c37f397ab7ac89f554_prof);

        
        $__internal_d62866da1bf9401337cbe3d735601548543900999dc54557524b9b06cecbd7c8->leave($__internal_d62866da1bf9401337cbe3d735601548543900999dc54557524b9b06cecbd7c8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d82d5dc599cba8f4ec743e4f6acd7941203fdc23b278d798687f07fd754a326f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82d5dc599cba8f4ec743e4f6acd7941203fdc23b278d798687f07fd754a326f->enter($__internal_d82d5dc599cba8f4ec743e4f6acd7941203fdc23b278d798687f07fd754a326f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f0b3652d5c193f073a750f3c747fb5304a89cbc6ffa73e1b5e984b3355480e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b3652d5c193f073a750f3c747fb5304a89cbc6ffa73e1b5e984b3355480e3b->enter($__internal_f0b3652d5c193f073a750f3c747fb5304a89cbc6ffa73e1b5e984b3355480e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f0b3652d5c193f073a750f3c747fb5304a89cbc6ffa73e1b5e984b3355480e3b->leave($__internal_f0b3652d5c193f073a750f3c747fb5304a89cbc6ffa73e1b5e984b3355480e3b_prof);

        
        $__internal_d82d5dc599cba8f4ec743e4f6acd7941203fdc23b278d798687f07fd754a326f->leave($__internal_d82d5dc599cba8f4ec743e4f6acd7941203fdc23b278d798687f07fd754a326f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83f0a300e631115c7532f247e4a35cc623b812cdda72a60744f36df7a38b60e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f0a300e631115c7532f247e4a35cc623b812cdda72a60744f36df7a38b60e1->enter($__internal_83f0a300e631115c7532f247e4a35cc623b812cdda72a60744f36df7a38b60e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72b0fa03bb226de508fc960da29309f74944dd1f48090e99f2346e405f60ebfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b0fa03bb226de508fc960da29309f74944dd1f48090e99f2346e405f60ebfd->enter($__internal_72b0fa03bb226de508fc960da29309f74944dd1f48090e99f2346e405f60ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_72b0fa03bb226de508fc960da29309f74944dd1f48090e99f2346e405f60ebfd->leave($__internal_72b0fa03bb226de508fc960da29309f74944dd1f48090e99f2346e405f60ebfd_prof);

        
        $__internal_83f0a300e631115c7532f247e4a35cc623b812cdda72a60744f36df7a38b60e1->leave($__internal_83f0a300e631115c7532f247e4a35cc623b812cdda72a60744f36df7a38b60e1_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
