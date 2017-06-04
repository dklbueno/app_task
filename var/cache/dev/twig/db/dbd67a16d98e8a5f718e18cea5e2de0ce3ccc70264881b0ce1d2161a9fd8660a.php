<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fa9a5a7911d0e30afb486466dd12564a1c4f5ac593e3f46edf2d4c83e8ea0661 extends Twig_Template
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
        $__internal_f884b289a2ec38e1c26db313aab34da621aa16b68c2e4c960d7ac94a9514d215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f884b289a2ec38e1c26db313aab34da621aa16b68c2e4c960d7ac94a9514d215->enter($__internal_f884b289a2ec38e1c26db313aab34da621aa16b68c2e4c960d7ac94a9514d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5e898cd84b94865cff57d7264d020436903e958ac8e213a7528be91b6181bdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e898cd84b94865cff57d7264d020436903e958ac8e213a7528be91b6181bdfd->enter($__internal_5e898cd84b94865cff57d7264d020436903e958ac8e213a7528be91b6181bdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f884b289a2ec38e1c26db313aab34da621aa16b68c2e4c960d7ac94a9514d215->leave($__internal_f884b289a2ec38e1c26db313aab34da621aa16b68c2e4c960d7ac94a9514d215_prof);

        
        $__internal_5e898cd84b94865cff57d7264d020436903e958ac8e213a7528be91b6181bdfd->leave($__internal_5e898cd84b94865cff57d7264d020436903e958ac8e213a7528be91b6181bdfd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
