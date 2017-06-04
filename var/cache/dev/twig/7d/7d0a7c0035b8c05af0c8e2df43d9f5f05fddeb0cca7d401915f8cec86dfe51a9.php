<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_c736894dd6bad458af407bf28b751fce8a5e4f2f9e23ea7ce6e0a610a9251315 extends Twig_Template
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
        $__internal_efc86793d57aff0856c43ed2f64a722cd516ae35eb48d4fcb17dc9224946ac52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc86793d57aff0856c43ed2f64a722cd516ae35eb48d4fcb17dc9224946ac52->enter($__internal_efc86793d57aff0856c43ed2f64a722cd516ae35eb48d4fcb17dc9224946ac52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0d8b092f4a5055133f5d67c1be6a85618ed74652de39a0b597aafe54941adf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8b092f4a5055133f5d67c1be6a85618ed74652de39a0b597aafe54941adf4d->enter($__internal_0d8b092f4a5055133f5d67c1be6a85618ed74652de39a0b597aafe54941adf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_efc86793d57aff0856c43ed2f64a722cd516ae35eb48d4fcb17dc9224946ac52->leave($__internal_efc86793d57aff0856c43ed2f64a722cd516ae35eb48d4fcb17dc9224946ac52_prof);

        
        $__internal_0d8b092f4a5055133f5d67c1be6a85618ed74652de39a0b597aafe54941adf4d->leave($__internal_0d8b092f4a5055133f5d67c1be6a85618ed74652de39a0b597aafe54941adf4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
