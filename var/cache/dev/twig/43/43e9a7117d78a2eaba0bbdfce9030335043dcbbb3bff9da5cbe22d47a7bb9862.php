<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2ae6f66c2a0a22fb1595f5a8a287ed08d5075fb603d231a62511de7f98223f75 extends Twig_Template
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
        $__internal_466794d68f8ac6e5543f7ee604b8365e5ce985174082767db7e992e33ffcc9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466794d68f8ac6e5543f7ee604b8365e5ce985174082767db7e992e33ffcc9f2->enter($__internal_466794d68f8ac6e5543f7ee604b8365e5ce985174082767db7e992e33ffcc9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6d3c1a083ffc725284ca47cbdc68963bcc9fc271d3ec6b900b64cc8fe0ef039a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3c1a083ffc725284ca47cbdc68963bcc9fc271d3ec6b900b64cc8fe0ef039a->enter($__internal_6d3c1a083ffc725284ca47cbdc68963bcc9fc271d3ec6b900b64cc8fe0ef039a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_466794d68f8ac6e5543f7ee604b8365e5ce985174082767db7e992e33ffcc9f2->leave($__internal_466794d68f8ac6e5543f7ee604b8365e5ce985174082767db7e992e33ffcc9f2_prof);

        
        $__internal_6d3c1a083ffc725284ca47cbdc68963bcc9fc271d3ec6b900b64cc8fe0ef039a->leave($__internal_6d3c1a083ffc725284ca47cbdc68963bcc9fc271d3ec6b900b64cc8fe0ef039a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
