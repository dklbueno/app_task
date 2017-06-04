<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0d4b10e141ec33d6894f1c3143beb170f163b625f01d4e649a4b01b8a1afacdd extends Twig_Template
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
        $__internal_57580d0f3739993046aea5354eb5d0c97a636dd836aa7ea077c45f9ac37dc7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57580d0f3739993046aea5354eb5d0c97a636dd836aa7ea077c45f9ac37dc7fa->enter($__internal_57580d0f3739993046aea5354eb5d0c97a636dd836aa7ea077c45f9ac37dc7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_a3a9fcd4b2617a4c461eaa9ee12e648f4641475537367044805083d54c30d77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a9fcd4b2617a4c461eaa9ee12e648f4641475537367044805083d54c30d77b->enter($__internal_a3a9fcd4b2617a4c461eaa9ee12e648f4641475537367044805083d54c30d77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_57580d0f3739993046aea5354eb5d0c97a636dd836aa7ea077c45f9ac37dc7fa->leave($__internal_57580d0f3739993046aea5354eb5d0c97a636dd836aa7ea077c45f9ac37dc7fa_prof);

        
        $__internal_a3a9fcd4b2617a4c461eaa9ee12e648f4641475537367044805083d54c30d77b->leave($__internal_a3a9fcd4b2617a4c461eaa9ee12e648f4641475537367044805083d54c30d77b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
