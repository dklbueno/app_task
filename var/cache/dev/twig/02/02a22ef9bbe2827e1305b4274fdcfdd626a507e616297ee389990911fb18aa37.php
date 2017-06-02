<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_eddc462f47e613643f810623e45bc0d9557e783863687ecdcd6a1aa685fa8af4 extends Twig_Template
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
        $__internal_d87a624ebcc1d86950227d160c65e206206a15973de8879d4eb437c97a6cca39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87a624ebcc1d86950227d160c65e206206a15973de8879d4eb437c97a6cca39->enter($__internal_d87a624ebcc1d86950227d160c65e206206a15973de8879d4eb437c97a6cca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f9f0d2342a87a8864969325f277288b3ebc7486cc4e2cc4a35b1eed72b1e709d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f0d2342a87a8864969325f277288b3ebc7486cc4e2cc4a35b1eed72b1e709d->enter($__internal_f9f0d2342a87a8864969325f277288b3ebc7486cc4e2cc4a35b1eed72b1e709d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d87a624ebcc1d86950227d160c65e206206a15973de8879d4eb437c97a6cca39->leave($__internal_d87a624ebcc1d86950227d160c65e206206a15973de8879d4eb437c97a6cca39_prof);

        
        $__internal_f9f0d2342a87a8864969325f277288b3ebc7486cc4e2cc4a35b1eed72b1e709d->leave($__internal_f9f0d2342a87a8864969325f277288b3ebc7486cc4e2cc4a35b1eed72b1e709d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
