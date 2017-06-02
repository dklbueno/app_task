<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e9a32bfa07040e22edc1698d76442f3ab394195f9acc78f645933a4f96b7a1c8 extends Twig_Template
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
        $__internal_9090fec51df75d86f4a7f97b1dd2c4aa3cf3801155e1467d0fcc2a61062ad208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9090fec51df75d86f4a7f97b1dd2c4aa3cf3801155e1467d0fcc2a61062ad208->enter($__internal_9090fec51df75d86f4a7f97b1dd2c4aa3cf3801155e1467d0fcc2a61062ad208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_7789b6630355acab18a7c185154b0639f7cf69537c8b1a4dbbcc6daf12108098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7789b6630355acab18a7c185154b0639f7cf69537c8b1a4dbbcc6daf12108098->enter($__internal_7789b6630355acab18a7c185154b0639f7cf69537c8b1a4dbbcc6daf12108098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9090fec51df75d86f4a7f97b1dd2c4aa3cf3801155e1467d0fcc2a61062ad208->leave($__internal_9090fec51df75d86f4a7f97b1dd2c4aa3cf3801155e1467d0fcc2a61062ad208_prof);

        
        $__internal_7789b6630355acab18a7c185154b0639f7cf69537c8b1a4dbbcc6daf12108098->leave($__internal_7789b6630355acab18a7c185154b0639f7cf69537c8b1a4dbbcc6daf12108098_prof);

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
", "TwigBundle:Exception:error.json.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
