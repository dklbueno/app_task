<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_525e2725c2b10048421deaaf5069d251e70b819ad66a1e0c8f5db602a258dd7f extends Twig_Template
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
        $__internal_aaf0e14538df92abd69e8e8625c8548eac1bfb468e1bb2d581ddbf79e1389509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf0e14538df92abd69e8e8625c8548eac1bfb468e1bb2d581ddbf79e1389509->enter($__internal_aaf0e14538df92abd69e8e8625c8548eac1bfb468e1bb2d581ddbf79e1389509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_c5dea477da1f0194203b2cfe18758dbe568e37d2bab2606e6b77b70375c5815e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5dea477da1f0194203b2cfe18758dbe568e37d2bab2606e6b77b70375c5815e->enter($__internal_c5dea477da1f0194203b2cfe18758dbe568e37d2bab2606e6b77b70375c5815e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_aaf0e14538df92abd69e8e8625c8548eac1bfb468e1bb2d581ddbf79e1389509->leave($__internal_aaf0e14538df92abd69e8e8625c8548eac1bfb468e1bb2d581ddbf79e1389509_prof);

        
        $__internal_c5dea477da1f0194203b2cfe18758dbe568e37d2bab2606e6b77b70375c5815e->leave($__internal_c5dea477da1f0194203b2cfe18758dbe568e37d2bab2606e6b77b70375c5815e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
