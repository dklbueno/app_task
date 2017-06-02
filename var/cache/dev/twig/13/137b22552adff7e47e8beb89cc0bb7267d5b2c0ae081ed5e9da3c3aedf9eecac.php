<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_eb7faf2dd892a1d2902ae2d68d14f71699bac0bbc4bef106f35ed0a399813f4d extends Twig_Template
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
        $__internal_b6418f8a0a39f30f891ee885d10c408fa9eae5f7c0f03a9741e41a9a1325d1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6418f8a0a39f30f891ee885d10c408fa9eae5f7c0f03a9741e41a9a1325d1ed->enter($__internal_b6418f8a0a39f30f891ee885d10c408fa9eae5f7c0f03a9741e41a9a1325d1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_959c9d90b56f8752a1d62bdb51a670b2a719b0715a7a328280ef9d97ad8d37dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959c9d90b56f8752a1d62bdb51a670b2a719b0715a7a328280ef9d97ad8d37dc->enter($__internal_959c9d90b56f8752a1d62bdb51a670b2a719b0715a7a328280ef9d97ad8d37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b6418f8a0a39f30f891ee885d10c408fa9eae5f7c0f03a9741e41a9a1325d1ed->leave($__internal_b6418f8a0a39f30f891ee885d10c408fa9eae5f7c0f03a9741e41a9a1325d1ed_prof);

        
        $__internal_959c9d90b56f8752a1d62bdb51a670b2a719b0715a7a328280ef9d97ad8d37dc->leave($__internal_959c9d90b56f8752a1d62bdb51a670b2a719b0715a7a328280ef9d97ad8d37dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
