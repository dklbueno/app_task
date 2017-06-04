<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5d3d1dca0432d0bf3bffd06c4577064d76e4d4976a8902b9dfffd55548cd95dc extends Twig_Template
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
        $__internal_4981dc0bfb1bb7640b17c49569eda216878b2816c8c5724a20b9033afdb93e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4981dc0bfb1bb7640b17c49569eda216878b2816c8c5724a20b9033afdb93e0c->enter($__internal_4981dc0bfb1bb7640b17c49569eda216878b2816c8c5724a20b9033afdb93e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_78bd8f0d7c16d400d05b6082b5f8efd76cf53b683c1a2f42c044c9c1170ebe08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bd8f0d7c16d400d05b6082b5f8efd76cf53b683c1a2f42c044c9c1170ebe08->enter($__internal_78bd8f0d7c16d400d05b6082b5f8efd76cf53b683c1a2f42c044c9c1170ebe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4981dc0bfb1bb7640b17c49569eda216878b2816c8c5724a20b9033afdb93e0c->leave($__internal_4981dc0bfb1bb7640b17c49569eda216878b2816c8c5724a20b9033afdb93e0c_prof);

        
        $__internal_78bd8f0d7c16d400d05b6082b5f8efd76cf53b683c1a2f42c044c9c1170ebe08->leave($__internal_78bd8f0d7c16d400d05b6082b5f8efd76cf53b683c1a2f42c044c9c1170ebe08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
