<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_43f24c4d80acfd0e26a6b3f38f0f27ff0be73e1ec045708fe781311b96cf4efc extends Twig_Template
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
        $__internal_aa6dcb72835395af17bc6e943c02e48b87ef9b1200b5d513f1e48961b72512ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6dcb72835395af17bc6e943c02e48b87ef9b1200b5d513f1e48961b72512ef->enter($__internal_aa6dcb72835395af17bc6e943c02e48b87ef9b1200b5d513f1e48961b72512ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_1d8bfa0fb7eedc2408ab8671cc196208e9fb95b3ef82e8007d1154b3f90abf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8bfa0fb7eedc2408ab8671cc196208e9fb95b3ef82e8007d1154b3f90abf2a->enter($__internal_1d8bfa0fb7eedc2408ab8671cc196208e9fb95b3ef82e8007d1154b3f90abf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aa6dcb72835395af17bc6e943c02e48b87ef9b1200b5d513f1e48961b72512ef->leave($__internal_aa6dcb72835395af17bc6e943c02e48b87ef9b1200b5d513f1e48961b72512ef_prof);

        
        $__internal_1d8bfa0fb7eedc2408ab8671cc196208e9fb95b3ef82e8007d1154b3f90abf2a->leave($__internal_1d8bfa0fb7eedc2408ab8671cc196208e9fb95b3ef82e8007d1154b3f90abf2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
