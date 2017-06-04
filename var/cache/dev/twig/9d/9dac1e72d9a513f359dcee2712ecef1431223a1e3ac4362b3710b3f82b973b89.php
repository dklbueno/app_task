<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_2138c9e9e8d3c3d27fb61877978fc35ce34be0ca0231824bdde441eafa8c006c extends Twig_Template
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
        $__internal_5ebef6cd212568d4334edbc643d37f40b008e5927c4df42ae5672be0da42ce7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebef6cd212568d4334edbc643d37f40b008e5927c4df42ae5672be0da42ce7a->enter($__internal_5ebef6cd212568d4334edbc643d37f40b008e5927c4df42ae5672be0da42ce7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_65f6bf7f0dcc5434e87c625a768c0b2dc3b984f6fdb494fd05f5f9593377ef71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f6bf7f0dcc5434e87c625a768c0b2dc3b984f6fdb494fd05f5f9593377ef71->enter($__internal_65f6bf7f0dcc5434e87c625a768c0b2dc3b984f6fdb494fd05f5f9593377ef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

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
        
        $__internal_5ebef6cd212568d4334edbc643d37f40b008e5927c4df42ae5672be0da42ce7a->leave($__internal_5ebef6cd212568d4334edbc643d37f40b008e5927c4df42ae5672be0da42ce7a_prof);

        
        $__internal_65f6bf7f0dcc5434e87c625a768c0b2dc3b984f6fdb494fd05f5f9593377ef71->leave($__internal_65f6bf7f0dcc5434e87c625a768c0b2dc3b984f6fdb494fd05f5f9593377ef71_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
