<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9bb3105b25e2b9bb1d0670a2803e474322380c7aaf04cca40a7c7c98ff67a2a5 extends Twig_Template
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
        $__internal_083d4b93356d1ad8bee3dd1f4dde6945345f90163e39fcb0da83b373b8906c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083d4b93356d1ad8bee3dd1f4dde6945345f90163e39fcb0da83b373b8906c05->enter($__internal_083d4b93356d1ad8bee3dd1f4dde6945345f90163e39fcb0da83b373b8906c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_19a16c095d28cf64c731aa2ac846a5080b18edd204be2b419308880b557d5599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a16c095d28cf64c731aa2ac846a5080b18edd204be2b419308880b557d5599->enter($__internal_19a16c095d28cf64c731aa2ac846a5080b18edd204be2b419308880b557d5599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_083d4b93356d1ad8bee3dd1f4dde6945345f90163e39fcb0da83b373b8906c05->leave($__internal_083d4b93356d1ad8bee3dd1f4dde6945345f90163e39fcb0da83b373b8906c05_prof);

        
        $__internal_19a16c095d28cf64c731aa2ac846a5080b18edd204be2b419308880b557d5599->leave($__internal_19a16c095d28cf64c731aa2ac846a5080b18edd204be2b419308880b557d5599_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
