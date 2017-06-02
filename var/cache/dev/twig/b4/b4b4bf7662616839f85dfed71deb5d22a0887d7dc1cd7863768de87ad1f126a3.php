<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1ffe3acf774ffe33d042093be3c39b0f3f1469a460e2f08d46cf4b8867a2d2c8 extends Twig_Template
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
        $__internal_b52f6e2885f833c49df671aa12b92a11164f20dd000b9da7aea6dcae1ee80b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52f6e2885f833c49df671aa12b92a11164f20dd000b9da7aea6dcae1ee80b02->enter($__internal_b52f6e2885f833c49df671aa12b92a11164f20dd000b9da7aea6dcae1ee80b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_31e0ff3c253e834982c12ee2992e4c163fde076dcbb4c2e71681031778098389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e0ff3c253e834982c12ee2992e4c163fde076dcbb4c2e71681031778098389->enter($__internal_31e0ff3c253e834982c12ee2992e4c163fde076dcbb4c2e71681031778098389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b52f6e2885f833c49df671aa12b92a11164f20dd000b9da7aea6dcae1ee80b02->leave($__internal_b52f6e2885f833c49df671aa12b92a11164f20dd000b9da7aea6dcae1ee80b02_prof);

        
        $__internal_31e0ff3c253e834982c12ee2992e4c163fde076dcbb4c2e71681031778098389->leave($__internal_31e0ff3c253e834982c12ee2992e4c163fde076dcbb4c2e71681031778098389_prof);

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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
