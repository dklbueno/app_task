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
        $__internal_34695b3850e0429f5db5f02d0bfc6bee008b4f681020c702ba64052e7d81053d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34695b3850e0429f5db5f02d0bfc6bee008b4f681020c702ba64052e7d81053d->enter($__internal_34695b3850e0429f5db5f02d0bfc6bee008b4f681020c702ba64052e7d81053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_9ae9a03d1db0db961cd18d507733381f0d61d758374f9605e95ed6fa1f1800ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae9a03d1db0db961cd18d507733381f0d61d758374f9605e95ed6fa1f1800ad->enter($__internal_9ae9a03d1db0db961cd18d507733381f0d61d758374f9605e95ed6fa1f1800ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_34695b3850e0429f5db5f02d0bfc6bee008b4f681020c702ba64052e7d81053d->leave($__internal_34695b3850e0429f5db5f02d0bfc6bee008b4f681020c702ba64052e7d81053d_prof);

        
        $__internal_9ae9a03d1db0db961cd18d507733381f0d61d758374f9605e95ed6fa1f1800ad->leave($__internal_9ae9a03d1db0db961cd18d507733381f0d61d758374f9605e95ed6fa1f1800ad_prof);

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
