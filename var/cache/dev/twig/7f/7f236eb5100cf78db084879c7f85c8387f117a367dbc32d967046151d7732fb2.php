<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_3b782833039c8075eea58823df5d62c66bc71fb3d863664778133898d9f297d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_584fcd64742ba0a76a032f89cab05cbbca60936aa4363fb075f589af837db76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584fcd64742ba0a76a032f89cab05cbbca60936aa4363fb075f589af837db76b->enter($__internal_584fcd64742ba0a76a032f89cab05cbbca60936aa4363fb075f589af837db76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_58409eb57ef23af6def8474d45923f344dd2576968c2fd5ceccb6120794f8023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58409eb57ef23af6def8474d45923f344dd2576968c2fd5ceccb6120794f8023->enter($__internal_58409eb57ef23af6def8474d45923f344dd2576968c2fd5ceccb6120794f8023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_584fcd64742ba0a76a032f89cab05cbbca60936aa4363fb075f589af837db76b->leave($__internal_584fcd64742ba0a76a032f89cab05cbbca60936aa4363fb075f589af837db76b_prof);

        
        $__internal_58409eb57ef23af6def8474d45923f344dd2576968c2fd5ceccb6120794f8023->leave($__internal_58409eb57ef23af6def8474d45923f344dd2576968c2fd5ceccb6120794f8023_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}