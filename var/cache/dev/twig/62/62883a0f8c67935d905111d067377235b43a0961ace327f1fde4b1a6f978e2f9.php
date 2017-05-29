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
        $__internal_97e301cf505e60a91458ee4cbe22a5a12ac7a0bd9347f30175c5bfd3902f76c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e301cf505e60a91458ee4cbe22a5a12ac7a0bd9347f30175c5bfd3902f76c6->enter($__internal_97e301cf505e60a91458ee4cbe22a5a12ac7a0bd9347f30175c5bfd3902f76c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e1c2bb25d8c6ddc90284085c42be06b3ac18c696e1f67d7b333a0a4ac2abaaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c2bb25d8c6ddc90284085c42be06b3ac18c696e1f67d7b333a0a4ac2abaaf5->enter($__internal_e1c2bb25d8c6ddc90284085c42be06b3ac18c696e1f67d7b333a0a4ac2abaaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_97e301cf505e60a91458ee4cbe22a5a12ac7a0bd9347f30175c5bfd3902f76c6->leave($__internal_97e301cf505e60a91458ee4cbe22a5a12ac7a0bd9347f30175c5bfd3902f76c6_prof);

        
        $__internal_e1c2bb25d8c6ddc90284085c42be06b3ac18c696e1f67d7b333a0a4ac2abaaf5->leave($__internal_e1c2bb25d8c6ddc90284085c42be06b3ac18c696e1f67d7b333a0a4ac2abaaf5_prof);

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
