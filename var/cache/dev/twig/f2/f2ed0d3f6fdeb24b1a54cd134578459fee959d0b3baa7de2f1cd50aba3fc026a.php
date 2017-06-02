<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e5b92d580261b41ec7ed4328af25b1cc7bd3a0117b0988fe11d643b32c8d06ff extends Twig_Template
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
        $__internal_f61c0ad06f53513aaee5138d3723ff9c2bf8027ea2fdf403546268a7cc70c3f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61c0ad06f53513aaee5138d3723ff9c2bf8027ea2fdf403546268a7cc70c3f1->enter($__internal_f61c0ad06f53513aaee5138d3723ff9c2bf8027ea2fdf403546268a7cc70c3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_772a959b4bd3ee07be2296f2e33bc5b65e5a37cd19135f02e00d990dc03f8881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772a959b4bd3ee07be2296f2e33bc5b65e5a37cd19135f02e00d990dc03f8881->enter($__internal_772a959b4bd3ee07be2296f2e33bc5b65e5a37cd19135f02e00d990dc03f8881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f61c0ad06f53513aaee5138d3723ff9c2bf8027ea2fdf403546268a7cc70c3f1->leave($__internal_f61c0ad06f53513aaee5138d3723ff9c2bf8027ea2fdf403546268a7cc70c3f1_prof);

        
        $__internal_772a959b4bd3ee07be2296f2e33bc5b65e5a37cd19135f02e00d990dc03f8881->leave($__internal_772a959b4bd3ee07be2296f2e33bc5b65e5a37cd19135f02e00d990dc03f8881_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
