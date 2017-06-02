<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5f68c8233ea99ef41bc4e5d77d3fe0d2856e4f69f084d436353c3d486da1b34c extends Twig_Template
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
        $__internal_7b19807397f15d2bda773125275dbba1791a57b2a95974030ea619364c812afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b19807397f15d2bda773125275dbba1791a57b2a95974030ea619364c812afd->enter($__internal_7b19807397f15d2bda773125275dbba1791a57b2a95974030ea619364c812afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6a5de8a47ea5e3423a312779e1503b8dd5381e9064457cb2dd8bc35693de94d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5de8a47ea5e3423a312779e1503b8dd5381e9064457cb2dd8bc35693de94d1->enter($__internal_6a5de8a47ea5e3423a312779e1503b8dd5381e9064457cb2dd8bc35693de94d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_7b19807397f15d2bda773125275dbba1791a57b2a95974030ea619364c812afd->leave($__internal_7b19807397f15d2bda773125275dbba1791a57b2a95974030ea619364c812afd_prof);

        
        $__internal_6a5de8a47ea5e3423a312779e1503b8dd5381e9064457cb2dd8bc35693de94d1->leave($__internal_6a5de8a47ea5e3423a312779e1503b8dd5381e9064457cb2dd8bc35693de94d1_prof);

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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
