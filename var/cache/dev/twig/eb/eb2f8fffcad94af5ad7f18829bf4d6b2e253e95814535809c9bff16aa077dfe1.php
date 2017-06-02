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
        $__internal_77fbc9229ea3577e1e29cc085e0fb1d05049b4f8fca029f548397ddeae8ea8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fbc9229ea3577e1e29cc085e0fb1d05049b4f8fca029f548397ddeae8ea8de->enter($__internal_77fbc9229ea3577e1e29cc085e0fb1d05049b4f8fca029f548397ddeae8ea8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c78a23aef61459347de15dfc7ed4df4e630e4b3d17926b3631eedbe489e35b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78a23aef61459347de15dfc7ed4df4e630e4b3d17926b3631eedbe489e35b07->enter($__internal_c78a23aef61459347de15dfc7ed4df4e630e4b3d17926b3631eedbe489e35b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_77fbc9229ea3577e1e29cc085e0fb1d05049b4f8fca029f548397ddeae8ea8de->leave($__internal_77fbc9229ea3577e1e29cc085e0fb1d05049b4f8fca029f548397ddeae8ea8de_prof);

        
        $__internal_c78a23aef61459347de15dfc7ed4df4e630e4b3d17926b3631eedbe489e35b07->leave($__internal_c78a23aef61459347de15dfc7ed4df4e630e4b3d17926b3631eedbe489e35b07_prof);

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
