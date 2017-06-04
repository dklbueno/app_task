<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_de0ac629ee2d781b1fb1375d0042e10394dd0c253c15e235c69e0fa9e5754663 extends Twig_Template
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
        $__internal_10ee61ed33f2b7f24eddd314079c098cc7d27ae964d72e366b0acd86088cf19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ee61ed33f2b7f24eddd314079c098cc7d27ae964d72e366b0acd86088cf19f->enter($__internal_10ee61ed33f2b7f24eddd314079c098cc7d27ae964d72e366b0acd86088cf19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_66e58f9da23e1183074ad2cfa244f7fc82444bc46286535a61a73753b1100b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e58f9da23e1183074ad2cfa244f7fc82444bc46286535a61a73753b1100b84->enter($__internal_66e58f9da23e1183074ad2cfa244f7fc82444bc46286535a61a73753b1100b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_10ee61ed33f2b7f24eddd314079c098cc7d27ae964d72e366b0acd86088cf19f->leave($__internal_10ee61ed33f2b7f24eddd314079c098cc7d27ae964d72e366b0acd86088cf19f_prof);

        
        $__internal_66e58f9da23e1183074ad2cfa244f7fc82444bc46286535a61a73753b1100b84->leave($__internal_66e58f9da23e1183074ad2cfa244f7fc82444bc46286535a61a73753b1100b84_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
