<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7b69b88dafeab6298a5ad3b74bf38a5b2a8963f91688b742c82ef3b45edb22b5 extends Twig_Template
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
        $__internal_52c7eee74fc6ee14fe5cf7ab797c2c9344cc54f0a1dee540c383239030f697cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c7eee74fc6ee14fe5cf7ab797c2c9344cc54f0a1dee540c383239030f697cc->enter($__internal_52c7eee74fc6ee14fe5cf7ab797c2c9344cc54f0a1dee540c383239030f697cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_cd66ca5e3f8f1be0a95b26721db0c58a17a5d078f38ae0f9e1ccfa50fcf67fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd66ca5e3f8f1be0a95b26721db0c58a17a5d078f38ae0f9e1ccfa50fcf67fe2->enter($__internal_cd66ca5e3f8f1be0a95b26721db0c58a17a5d078f38ae0f9e1ccfa50fcf67fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_52c7eee74fc6ee14fe5cf7ab797c2c9344cc54f0a1dee540c383239030f697cc->leave($__internal_52c7eee74fc6ee14fe5cf7ab797c2c9344cc54f0a1dee540c383239030f697cc_prof);

        
        $__internal_cd66ca5e3f8f1be0a95b26721db0c58a17a5d078f38ae0f9e1ccfa50fcf67fe2->leave($__internal_cd66ca5e3f8f1be0a95b26721db0c58a17a5d078f38ae0f9e1ccfa50fcf67fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}