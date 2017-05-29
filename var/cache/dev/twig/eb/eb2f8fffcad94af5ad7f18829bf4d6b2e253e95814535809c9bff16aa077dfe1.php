<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6c7c721369983eb4da3c22dce99c3bb06b6bad20ec450e720e17ebab1facce64 extends Twig_Template
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
        $__internal_487709c349f213f28ca3807dd054f7e3875c92104cd67ba2a7dc7cb22aee3d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487709c349f213f28ca3807dd054f7e3875c92104cd67ba2a7dc7cb22aee3d18->enter($__internal_487709c349f213f28ca3807dd054f7e3875c92104cd67ba2a7dc7cb22aee3d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3e6f95cb6fe5d715088a5ad3b9d76b2bdf154f6aba0e9bfa5e71c55edff329cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6f95cb6fe5d715088a5ad3b9d76b2bdf154f6aba0e9bfa5e71c55edff329cb->enter($__internal_3e6f95cb6fe5d715088a5ad3b9d76b2bdf154f6aba0e9bfa5e71c55edff329cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_487709c349f213f28ca3807dd054f7e3875c92104cd67ba2a7dc7cb22aee3d18->leave($__internal_487709c349f213f28ca3807dd054f7e3875c92104cd67ba2a7dc7cb22aee3d18_prof);

        
        $__internal_3e6f95cb6fe5d715088a5ad3b9d76b2bdf154f6aba0e9bfa5e71c55edff329cb->leave($__internal_3e6f95cb6fe5d715088a5ad3b9d76b2bdf154f6aba0e9bfa5e71c55edff329cb_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
