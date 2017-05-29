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
        $__internal_0f21c4b3add7de12adfe47c67e4d703a1c27b6c312ab168c162dd1254473fea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f21c4b3add7de12adfe47c67e4d703a1c27b6c312ab168c162dd1254473fea2->enter($__internal_0f21c4b3add7de12adfe47c67e4d703a1c27b6c312ab168c162dd1254473fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bcdb3586204d0b7a7796e11a969bbb2114cfe8f87252290af4951418904c700c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdb3586204d0b7a7796e11a969bbb2114cfe8f87252290af4951418904c700c->enter($__internal_bcdb3586204d0b7a7796e11a969bbb2114cfe8f87252290af4951418904c700c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_0f21c4b3add7de12adfe47c67e4d703a1c27b6c312ab168c162dd1254473fea2->leave($__internal_0f21c4b3add7de12adfe47c67e4d703a1c27b6c312ab168c162dd1254473fea2_prof);

        
        $__internal_bcdb3586204d0b7a7796e11a969bbb2114cfe8f87252290af4951418904c700c->leave($__internal_bcdb3586204d0b7a7796e11a969bbb2114cfe8f87252290af4951418904c700c_prof);

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
