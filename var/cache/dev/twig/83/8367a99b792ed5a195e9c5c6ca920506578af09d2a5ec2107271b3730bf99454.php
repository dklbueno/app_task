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
        $__internal_1f51c13b1edcc42dac45e0915f1eb6bcb27c35b083ba103c5186146e98d1f267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f51c13b1edcc42dac45e0915f1eb6bcb27c35b083ba103c5186146e98d1f267->enter($__internal_1f51c13b1edcc42dac45e0915f1eb6bcb27c35b083ba103c5186146e98d1f267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5b9f2b074eb6a18ec3dbb52d0085beda95bd2880403451137eb9557c5979b4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9f2b074eb6a18ec3dbb52d0085beda95bd2880403451137eb9557c5979b4fd->enter($__internal_5b9f2b074eb6a18ec3dbb52d0085beda95bd2880403451137eb9557c5979b4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f51c13b1edcc42dac45e0915f1eb6bcb27c35b083ba103c5186146e98d1f267->leave($__internal_1f51c13b1edcc42dac45e0915f1eb6bcb27c35b083ba103c5186146e98d1f267_prof);

        
        $__internal_5b9f2b074eb6a18ec3dbb52d0085beda95bd2880403451137eb9557c5979b4fd->leave($__internal_5b9f2b074eb6a18ec3dbb52d0085beda95bd2880403451137eb9557c5979b4fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bae96c343a12ff783e5d0f0d3ca42e592549e69c27dcfeb2c7b47be8002b7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bae96c343a12ff783e5d0f0d3ca42e592549e69c27dcfeb2c7b47be8002b7f1->enter($__internal_4bae96c343a12ff783e5d0f0d3ca42e592549e69c27dcfeb2c7b47be8002b7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9379b3152ac34b88a21b2400125c359d5424650fb9d9f756b8aa42600bfd02af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9379b3152ac34b88a21b2400125c359d5424650fb9d9f756b8aa42600bfd02af->enter($__internal_9379b3152ac34b88a21b2400125c359d5424650fb9d9f756b8aa42600bfd02af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9379b3152ac34b88a21b2400125c359d5424650fb9d9f756b8aa42600bfd02af->leave($__internal_9379b3152ac34b88a21b2400125c359d5424650fb9d9f756b8aa42600bfd02af_prof);

        
        $__internal_4bae96c343a12ff783e5d0f0d3ca42e592549e69c27dcfeb2c7b47be8002b7f1->leave($__internal_4bae96c343a12ff783e5d0f0d3ca42e592549e69c27dcfeb2c7b47be8002b7f1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac26beb64072a1c8ebbac265eb28665c02fb643d2a5d5b312bf730dbad817603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac26beb64072a1c8ebbac265eb28665c02fb643d2a5d5b312bf730dbad817603->enter($__internal_ac26beb64072a1c8ebbac265eb28665c02fb643d2a5d5b312bf730dbad817603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b95a682c5bc459afdb65c6678c6bd42c21318783ec2554c412f90c25370367e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95a682c5bc459afdb65c6678c6bd42c21318783ec2554c412f90c25370367e0->enter($__internal_b95a682c5bc459afdb65c6678c6bd42c21318783ec2554c412f90c25370367e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b95a682c5bc459afdb65c6678c6bd42c21318783ec2554c412f90c25370367e0->leave($__internal_b95a682c5bc459afdb65c6678c6bd42c21318783ec2554c412f90c25370367e0_prof);

        
        $__internal_ac26beb64072a1c8ebbac265eb28665c02fb643d2a5d5b312bf730dbad817603->leave($__internal_ac26beb64072a1c8ebbac265eb28665c02fb643d2a5d5b312bf730dbad817603_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_764cd4f1ce1f43e7e831df060c7f117336268b9b4625b01a786190c817c2140c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764cd4f1ce1f43e7e831df060c7f117336268b9b4625b01a786190c817c2140c->enter($__internal_764cd4f1ce1f43e7e831df060c7f117336268b9b4625b01a786190c817c2140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8587b22ca207f9d48a6cfed73217a0327cc4daa37209ed1ffad1930ca7bd73d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8587b22ca207f9d48a6cfed73217a0327cc4daa37209ed1ffad1930ca7bd73d3->enter($__internal_8587b22ca207f9d48a6cfed73217a0327cc4daa37209ed1ffad1930ca7bd73d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_8587b22ca207f9d48a6cfed73217a0327cc4daa37209ed1ffad1930ca7bd73d3->leave($__internal_8587b22ca207f9d48a6cfed73217a0327cc4daa37209ed1ffad1930ca7bd73d3_prof);

        
        $__internal_764cd4f1ce1f43e7e831df060c7f117336268b9b4625b01a786190c817c2140c->leave($__internal_764cd4f1ce1f43e7e831df060c7f117336268b9b4625b01a786190c817c2140c_prof);

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
