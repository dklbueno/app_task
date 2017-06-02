<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ca1be08c489e6508bffaff6a08baec5a56e3f6945f2b2708f2f54ef7313b4f4e extends Twig_Template
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
        $__internal_0275d85315cafc2e2519217ea4dd6ab3a80a058ea0aa65c3f67241e1209130ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0275d85315cafc2e2519217ea4dd6ab3a80a058ea0aa65c3f67241e1209130ad->enter($__internal_0275d85315cafc2e2519217ea4dd6ab3a80a058ea0aa65c3f67241e1209130ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0966eac6c0d6006f1fc7e1e72fad9932981a1b65a557f0e00c434fde439cd729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0966eac6c0d6006f1fc7e1e72fad9932981a1b65a557f0e00c434fde439cd729->enter($__internal_0966eac6c0d6006f1fc7e1e72fad9932981a1b65a557f0e00c434fde439cd729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_0275d85315cafc2e2519217ea4dd6ab3a80a058ea0aa65c3f67241e1209130ad->leave($__internal_0275d85315cafc2e2519217ea4dd6ab3a80a058ea0aa65c3f67241e1209130ad_prof);

        
        $__internal_0966eac6c0d6006f1fc7e1e72fad9932981a1b65a557f0e00c434fde439cd729->leave($__internal_0966eac6c0d6006f1fc7e1e72fad9932981a1b65a557f0e00c434fde439cd729_prof);

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
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
