<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_18f56d0ab0820308255190a038963998c716a17b85db0b6c10096cb3563642f1 extends Twig_Template
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
        $__internal_8913f33de10d9fd31fcdbc3563ac5e8cf459200c533c35acd78d95bae8992b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8913f33de10d9fd31fcdbc3563ac5e8cf459200c533c35acd78d95bae8992b09->enter($__internal_8913f33de10d9fd31fcdbc3563ac5e8cf459200c533c35acd78d95bae8992b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b9575619367f22014f5da32e323eb9754f76a6277055459f4d3837bc8084fdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9575619367f22014f5da32e323eb9754f76a6277055459f4d3837bc8084fdd7->enter($__internal_b9575619367f22014f5da32e323eb9754f76a6277055459f4d3837bc8084fdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8913f33de10d9fd31fcdbc3563ac5e8cf459200c533c35acd78d95bae8992b09->leave($__internal_8913f33de10d9fd31fcdbc3563ac5e8cf459200c533c35acd78d95bae8992b09_prof);

        
        $__internal_b9575619367f22014f5da32e323eb9754f76a6277055459f4d3837bc8084fdd7->leave($__internal_b9575619367f22014f5da32e323eb9754f76a6277055459f4d3837bc8084fdd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
