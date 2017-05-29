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
        $__internal_3ee0b3b9c5ce22d9b774aad120277f9c7d60f7cbca6ee497fb37d11bb45a1b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee0b3b9c5ce22d9b774aad120277f9c7d60f7cbca6ee497fb37d11bb45a1b7a->enter($__internal_3ee0b3b9c5ce22d9b774aad120277f9c7d60f7cbca6ee497fb37d11bb45a1b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8965d938e19c9af12a021a32b161841e6d466a6fbcd8297cd9a8ff7f1382ca4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8965d938e19c9af12a021a32b161841e6d466a6fbcd8297cd9a8ff7f1382ca4c->enter($__internal_8965d938e19c9af12a021a32b161841e6d466a6fbcd8297cd9a8ff7f1382ca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3ee0b3b9c5ce22d9b774aad120277f9c7d60f7cbca6ee497fb37d11bb45a1b7a->leave($__internal_3ee0b3b9c5ce22d9b774aad120277f9c7d60f7cbca6ee497fb37d11bb45a1b7a_prof);

        
        $__internal_8965d938e19c9af12a021a32b161841e6d466a6fbcd8297cd9a8ff7f1382ca4c->leave($__internal_8965d938e19c9af12a021a32b161841e6d466a6fbcd8297cd9a8ff7f1382ca4c_prof);

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
