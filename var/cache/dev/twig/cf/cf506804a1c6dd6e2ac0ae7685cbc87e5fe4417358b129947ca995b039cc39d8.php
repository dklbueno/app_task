<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cdaa4075c14671cb3707f4eb34940881eaaf2acd6a39fe22e5fcce5c93208d85 extends Twig_Template
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
        $__internal_525e4e288f315b3dab71002a2850f2e72a147126164bbe75426f55dd4884ccb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525e4e288f315b3dab71002a2850f2e72a147126164bbe75426f55dd4884ccb8->enter($__internal_525e4e288f315b3dab71002a2850f2e72a147126164bbe75426f55dd4884ccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e5366f6a305988eaea86db8864d1c95bcd99cdb6d24a605d29d5e8ba9bb8033d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5366f6a305988eaea86db8864d1c95bcd99cdb6d24a605d29d5e8ba9bb8033d->enter($__internal_e5366f6a305988eaea86db8864d1c95bcd99cdb6d24a605d29d5e8ba9bb8033d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_525e4e288f315b3dab71002a2850f2e72a147126164bbe75426f55dd4884ccb8->leave($__internal_525e4e288f315b3dab71002a2850f2e72a147126164bbe75426f55dd4884ccb8_prof);

        
        $__internal_e5366f6a305988eaea86db8864d1c95bcd99cdb6d24a605d29d5e8ba9bb8033d->leave($__internal_e5366f6a305988eaea86db8864d1c95bcd99cdb6d24a605d29d5e8ba9bb8033d_prof);

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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
