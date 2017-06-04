<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_309ed9f73a54be844ad5f3ce6310ff98a2534af6b8335a63673ef16df53a332e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6213f2a7027fe4d38b00894862c64d7ef2b215ffb57761355c4595b29af9d8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6213f2a7027fe4d38b00894862c64d7ef2b215ffb57761355c4595b29af9d8ad->enter($__internal_6213f2a7027fe4d38b00894862c64d7ef2b215ffb57761355c4595b29af9d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_888a393593713670a63d4726da9f944aeb57896f8c4780041ced3e3b939e2e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888a393593713670a63d4726da9f944aeb57896f8c4780041ced3e3b939e2e6e->enter($__internal_888a393593713670a63d4726da9f944aeb57896f8c4780041ced3e3b939e2e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6213f2a7027fe4d38b00894862c64d7ef2b215ffb57761355c4595b29af9d8ad->leave($__internal_6213f2a7027fe4d38b00894862c64d7ef2b215ffb57761355c4595b29af9d8ad_prof);

        
        $__internal_888a393593713670a63d4726da9f944aeb57896f8c4780041ced3e3b939e2e6e->leave($__internal_888a393593713670a63d4726da9f944aeb57896f8c4780041ced3e3b939e2e6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d23be10cd7f9d28c693d10d5bffe0734f23bfe35403c7bd35740ec4e92e828e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23be10cd7f9d28c693d10d5bffe0734f23bfe35403c7bd35740ec4e92e828e4->enter($__internal_d23be10cd7f9d28c693d10d5bffe0734f23bfe35403c7bd35740ec4e92e828e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f98c7d72ca3ce4e88b6edc762a862d859edab3ad9607c40082c45002d17a3b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98c7d72ca3ce4e88b6edc762a862d859edab3ad9607c40082c45002d17a3b42->enter($__internal_f98c7d72ca3ce4e88b6edc762a862d859edab3ad9607c40082c45002d17a3b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f98c7d72ca3ce4e88b6edc762a862d859edab3ad9607c40082c45002d17a3b42->leave($__internal_f98c7d72ca3ce4e88b6edc762a862d859edab3ad9607c40082c45002d17a3b42_prof);

        
        $__internal_d23be10cd7f9d28c693d10d5bffe0734f23bfe35403c7bd35740ec4e92e828e4->leave($__internal_d23be10cd7f9d28c693d10d5bffe0734f23bfe35403c7bd35740ec4e92e828e4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe892f9708ce7e508a157fbef0e38fce4a0a9225fd5dc65a8a192837597587b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe892f9708ce7e508a157fbef0e38fce4a0a9225fd5dc65a8a192837597587b6->enter($__internal_fe892f9708ce7e508a157fbef0e38fce4a0a9225fd5dc65a8a192837597587b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4042b673e777e5daeaa7cb5e985336dddc3b8cb0d22d040cdf525f1dd3a164e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4042b673e777e5daeaa7cb5e985336dddc3b8cb0d22d040cdf525f1dd3a164e8->enter($__internal_4042b673e777e5daeaa7cb5e985336dddc3b8cb0d22d040cdf525f1dd3a164e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4042b673e777e5daeaa7cb5e985336dddc3b8cb0d22d040cdf525f1dd3a164e8->leave($__internal_4042b673e777e5daeaa7cb5e985336dddc3b8cb0d22d040cdf525f1dd3a164e8_prof);

        
        $__internal_fe892f9708ce7e508a157fbef0e38fce4a0a9225fd5dc65a8a192837597587b6->leave($__internal_fe892f9708ce7e508a157fbef0e38fce4a0a9225fd5dc65a8a192837597587b6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d95817b03ea4ed2ab6905d9c39bdbe3b9bdf61e883dd0a6623799386531bd189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95817b03ea4ed2ab6905d9c39bdbe3b9bdf61e883dd0a6623799386531bd189->enter($__internal_d95817b03ea4ed2ab6905d9c39bdbe3b9bdf61e883dd0a6623799386531bd189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3a36e82d9c99011182bf338afa0f19111cac2be797b8c37e2a5b140a17c3871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a36e82d9c99011182bf338afa0f19111cac2be797b8c37e2a5b140a17c3871->enter($__internal_b3a36e82d9c99011182bf338afa0f19111cac2be797b8c37e2a5b140a17c3871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b3a36e82d9c99011182bf338afa0f19111cac2be797b8c37e2a5b140a17c3871->leave($__internal_b3a36e82d9c99011182bf338afa0f19111cac2be797b8c37e2a5b140a17c3871_prof);

        
        $__internal_d95817b03ea4ed2ab6905d9c39bdbe3b9bdf61e883dd0a6623799386531bd189->leave($__internal_d95817b03ea4ed2ab6905d9c39bdbe3b9bdf61e883dd0a6623799386531bd189_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
