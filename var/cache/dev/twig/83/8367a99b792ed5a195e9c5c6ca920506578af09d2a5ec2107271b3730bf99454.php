<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5cc666a2500c0e1d1bcff7b351dfecdaaa0a78446c74cadabc062e9185a2dc2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_b7ad41ff7f1adada2ccf7af1504c0c59626ce5477f6bdd4201027b6d40d7d77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ad41ff7f1adada2ccf7af1504c0c59626ce5477f6bdd4201027b6d40d7d77d->enter($__internal_b7ad41ff7f1adada2ccf7af1504c0c59626ce5477f6bdd4201027b6d40d7d77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d4c1cf893ee7fe42263cd3b439afa9d198a5a340f9915348c458086760bacff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c1cf893ee7fe42263cd3b439afa9d198a5a340f9915348c458086760bacff3->enter($__internal_d4c1cf893ee7fe42263cd3b439afa9d198a5a340f9915348c458086760bacff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ad41ff7f1adada2ccf7af1504c0c59626ce5477f6bdd4201027b6d40d7d77d->leave($__internal_b7ad41ff7f1adada2ccf7af1504c0c59626ce5477f6bdd4201027b6d40d7d77d_prof);

        
        $__internal_d4c1cf893ee7fe42263cd3b439afa9d198a5a340f9915348c458086760bacff3->leave($__internal_d4c1cf893ee7fe42263cd3b439afa9d198a5a340f9915348c458086760bacff3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f623540316a159496e27ff960aeba436ae7fd2c59643656a8d52aab8cfe17f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f623540316a159496e27ff960aeba436ae7fd2c59643656a8d52aab8cfe17f5a->enter($__internal_f623540316a159496e27ff960aeba436ae7fd2c59643656a8d52aab8cfe17f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a985ae35d1267ded986a3f338c20eea50ca5e4732e7a5781ab68541892163ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a985ae35d1267ded986a3f338c20eea50ca5e4732e7a5781ab68541892163ca6->enter($__internal_a985ae35d1267ded986a3f338c20eea50ca5e4732e7a5781ab68541892163ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a985ae35d1267ded986a3f338c20eea50ca5e4732e7a5781ab68541892163ca6->leave($__internal_a985ae35d1267ded986a3f338c20eea50ca5e4732e7a5781ab68541892163ca6_prof);

        
        $__internal_f623540316a159496e27ff960aeba436ae7fd2c59643656a8d52aab8cfe17f5a->leave($__internal_f623540316a159496e27ff960aeba436ae7fd2c59643656a8d52aab8cfe17f5a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b06be194ddb948f2ed9b1b678d115f2bdf1aa2a32cb5388b5d251bf98183421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b06be194ddb948f2ed9b1b678d115f2bdf1aa2a32cb5388b5d251bf98183421->enter($__internal_3b06be194ddb948f2ed9b1b678d115f2bdf1aa2a32cb5388b5d251bf98183421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87a65e0127429a930e4e34a35dcdaa813cb5c7223584444c4379db2be699e994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a65e0127429a930e4e34a35dcdaa813cb5c7223584444c4379db2be699e994->enter($__internal_87a65e0127429a930e4e34a35dcdaa813cb5c7223584444c4379db2be699e994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87a65e0127429a930e4e34a35dcdaa813cb5c7223584444c4379db2be699e994->leave($__internal_87a65e0127429a930e4e34a35dcdaa813cb5c7223584444c4379db2be699e994_prof);

        
        $__internal_3b06be194ddb948f2ed9b1b678d115f2bdf1aa2a32cb5388b5d251bf98183421->leave($__internal_3b06be194ddb948f2ed9b1b678d115f2bdf1aa2a32cb5388b5d251bf98183421_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_949132451a7b6c167a7dfa3e4ef112b54c43e45367bf3e994b0d1753df9c4501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949132451a7b6c167a7dfa3e4ef112b54c43e45367bf3e994b0d1753df9c4501->enter($__internal_949132451a7b6c167a7dfa3e4ef112b54c43e45367bf3e994b0d1753df9c4501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8e5ffdfa307a1f222a24fa2e1154b3aa740b80c330af5de9f4a357c5289220e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e5ffdfa307a1f222a24fa2e1154b3aa740b80c330af5de9f4a357c5289220e->enter($__internal_b8e5ffdfa307a1f222a24fa2e1154b3aa740b80c330af5de9f4a357c5289220e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b8e5ffdfa307a1f222a24fa2e1154b3aa740b80c330af5de9f4a357c5289220e->leave($__internal_b8e5ffdfa307a1f222a24fa2e1154b3aa740b80c330af5de9f4a357c5289220e_prof);

        
        $__internal_949132451a7b6c167a7dfa3e4ef112b54c43e45367bf3e994b0d1753df9c4501->leave($__internal_949132451a7b6c167a7dfa3e4ef112b54c43e45367bf3e994b0d1753df9c4501_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
