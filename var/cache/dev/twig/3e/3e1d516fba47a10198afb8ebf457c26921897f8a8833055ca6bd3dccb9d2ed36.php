<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_d25884f464960addbe9d091eb25498ee0a6da20f5f8186f4e1b1d959fa780564 extends Twig_Template
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
        $__internal_5aead6b7bf3e7474167aa2afe56e5ddaad007856af02c8cfb1add3df04066c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aead6b7bf3e7474167aa2afe56e5ddaad007856af02c8cfb1add3df04066c18->enter($__internal_5aead6b7bf3e7474167aa2afe56e5ddaad007856af02c8cfb1add3df04066c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_137284c321db4475ae6cf0a89fd3901acaeb5683e44811945f2d12b3e10906fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137284c321db4475ae6cf0a89fd3901acaeb5683e44811945f2d12b3e10906fa->enter($__internal_137284c321db4475ae6cf0a89fd3901acaeb5683e44811945f2d12b3e10906fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_5aead6b7bf3e7474167aa2afe56e5ddaad007856af02c8cfb1add3df04066c18->leave($__internal_5aead6b7bf3e7474167aa2afe56e5ddaad007856af02c8cfb1add3df04066c18_prof);

        
        $__internal_137284c321db4475ae6cf0a89fd3901acaeb5683e44811945f2d12b3e10906fa->leave($__internal_137284c321db4475ae6cf0a89fd3901acaeb5683e44811945f2d12b3e10906fa_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "@KnpPaginator/Pagination/sortable_link.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sortable_link.html.twig");
    }
}
