<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_358d03888cc323a16563d217e803faac0cb508e61c12215d5f9f5dc762a89c52 extends Twig_Template
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
        $__internal_73a5333cff400a4c070e9c9989d2442d85e5680b40cfd78e01259a23a25713ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a5333cff400a4c070e9c9989d2442d85e5680b40cfd78e01259a23a25713ed->enter($__internal_73a5333cff400a4c070e9c9989d2442d85e5680b40cfd78e01259a23a25713ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_158c10d8fa7bd6c1c3f7a15c80595fefe4509322e8876c698ba1dee2898e3369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158c10d8fa7bd6c1c3f7a15c80595fefe4509322e8876c698ba1dee2898e3369->enter($__internal_158c10d8fa7bd6c1c3f7a15c80595fefe4509322e8876c698ba1dee2898e3369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_73a5333cff400a4c070e9c9989d2442d85e5680b40cfd78e01259a23a25713ed->leave($__internal_73a5333cff400a4c070e9c9989d2442d85e5680b40cfd78e01259a23a25713ed_prof);

        
        $__internal_158c10d8fa7bd6c1c3f7a15c80595fefe4509322e8876c698ba1dee2898e3369->leave($__internal_158c10d8fa7bd6c1c3f7a15c80595fefe4509322e8876c698ba1dee2898e3369_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
