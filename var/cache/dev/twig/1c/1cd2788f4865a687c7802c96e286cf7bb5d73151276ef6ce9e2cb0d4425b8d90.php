<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a8d3cf52cce4df4d9abde191b78c5d0d9516535d42a3d2c288f4fde04255e59b extends Twig_Template
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
        $__internal_eab047fbff9e9ed831479ee0876b3ab27d8023b30c1cbfcd2e428392511482e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab047fbff9e9ed831479ee0876b3ab27d8023b30c1cbfcd2e428392511482e4->enter($__internal_eab047fbff9e9ed831479ee0876b3ab27d8023b30c1cbfcd2e428392511482e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_35e6e3eb5782c82d211516a57d5c09489b486363a4a7d1ab4467da3918cc058b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e6e3eb5782c82d211516a57d5c09489b486363a4a7d1ab4467da3918cc058b->enter($__internal_35e6e3eb5782c82d211516a57d5c09489b486363a4a7d1ab4467da3918cc058b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_eab047fbff9e9ed831479ee0876b3ab27d8023b30c1cbfcd2e428392511482e4->leave($__internal_eab047fbff9e9ed831479ee0876b3ab27d8023b30c1cbfcd2e428392511482e4_prof);

        
        $__internal_35e6e3eb5782c82d211516a57d5c09489b486363a4a7d1ab4467da3918cc058b->leave($__internal_35e6e3eb5782c82d211516a57d5c09489b486363a4a7d1ab4467da3918cc058b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
