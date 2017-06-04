<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_83e0b083bc9dc2714646a8e249bae4989954b2f7c6085ca03a7064f32bc790bc extends Twig_Template
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
        $__internal_e3724c3cb46ff4162d9d14c2ac96f81cac3a1ed4610fb5a8c69d56c011935372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3724c3cb46ff4162d9d14c2ac96f81cac3a1ed4610fb5a8c69d56c011935372->enter($__internal_e3724c3cb46ff4162d9d14c2ac96f81cac3a1ed4610fb5a8c69d56c011935372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_8ab2d0aa4a9360a267bc886d67dcedd974577a4e69310e66d8c9e5bac1b03a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab2d0aa4a9360a267bc886d67dcedd974577a4e69310e66d8c9e5bac1b03a23->enter($__internal_8ab2d0aa4a9360a267bc886d67dcedd974577a4e69310e66d8c9e5bac1b03a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e3724c3cb46ff4162d9d14c2ac96f81cac3a1ed4610fb5a8c69d56c011935372->leave($__internal_e3724c3cb46ff4162d9d14c2ac96f81cac3a1ed4610fb5a8c69d56c011935372_prof);

        
        $__internal_8ab2d0aa4a9360a267bc886d67dcedd974577a4e69310e66d8c9e5bac1b03a23->leave($__internal_8ab2d0aa4a9360a267bc886d67dcedd974577a4e69310e66d8c9e5bac1b03a23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
