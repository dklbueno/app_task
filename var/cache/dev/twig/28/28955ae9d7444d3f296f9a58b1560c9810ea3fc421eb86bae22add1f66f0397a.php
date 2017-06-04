<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bd641a313bc5e4ce43d890f843ba2965620f28bde1ab94a91f770065635d38f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8414f29011e33ed440579fc5863799e053debdd50ac017aec17ca5de13e1d1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8414f29011e33ed440579fc5863799e053debdd50ac017aec17ca5de13e1d1a7->enter($__internal_8414f29011e33ed440579fc5863799e053debdd50ac017aec17ca5de13e1d1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_68faf791bacad89b614b8a1f9ab551e970d09332f0bac491d8b661ecc7427f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68faf791bacad89b614b8a1f9ab551e970d09332f0bac491d8b661ecc7427f8a->enter($__internal_68faf791bacad89b614b8a1f9ab551e970d09332f0bac491d8b661ecc7427f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8414f29011e33ed440579fc5863799e053debdd50ac017aec17ca5de13e1d1a7->leave($__internal_8414f29011e33ed440579fc5863799e053debdd50ac017aec17ca5de13e1d1a7_prof);

        
        $__internal_68faf791bacad89b614b8a1f9ab551e970d09332f0bac491d8b661ecc7427f8a->leave($__internal_68faf791bacad89b614b8a1f9ab551e970d09332f0bac491d8b661ecc7427f8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9da303edbba98a6ec9f6606bb9c0cfe299c11929ac8d36aba0aaf5ff48115e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da303edbba98a6ec9f6606bb9c0cfe299c11929ac8d36aba0aaf5ff48115e79->enter($__internal_9da303edbba98a6ec9f6606bb9c0cfe299c11929ac8d36aba0aaf5ff48115e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f39d7b2b28bc78e1c513436886aab5deedb1f694bb475b6ce0cc0137deafe16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39d7b2b28bc78e1c513436886aab5deedb1f694bb475b6ce0cc0137deafe16d->enter($__internal_f39d7b2b28bc78e1c513436886aab5deedb1f694bb475b6ce0cc0137deafe16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f39d7b2b28bc78e1c513436886aab5deedb1f694bb475b6ce0cc0137deafe16d->leave($__internal_f39d7b2b28bc78e1c513436886aab5deedb1f694bb475b6ce0cc0137deafe16d_prof);

        
        $__internal_9da303edbba98a6ec9f6606bb9c0cfe299c11929ac8d36aba0aaf5ff48115e79->leave($__internal_9da303edbba98a6ec9f6606bb9c0cfe299c11929ac8d36aba0aaf5ff48115e79_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78ef595ca2a0acb164d0e02ad817621d1527b83771c31e73b78b36ebb1550543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ef595ca2a0acb164d0e02ad817621d1527b83771c31e73b78b36ebb1550543->enter($__internal_78ef595ca2a0acb164d0e02ad817621d1527b83771c31e73b78b36ebb1550543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9b70089943b8beccaa296a424495d3aa0347bfd7c014543fb697cb6d5e2ce55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b70089943b8beccaa296a424495d3aa0347bfd7c014543fb697cb6d5e2ce55->enter($__internal_a9b70089943b8beccaa296a424495d3aa0347bfd7c014543fb697cb6d5e2ce55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a9b70089943b8beccaa296a424495d3aa0347bfd7c014543fb697cb6d5e2ce55->leave($__internal_a9b70089943b8beccaa296a424495d3aa0347bfd7c014543fb697cb6d5e2ce55_prof);

        
        $__internal_78ef595ca2a0acb164d0e02ad817621d1527b83771c31e73b78b36ebb1550543->leave($__internal_78ef595ca2a0acb164d0e02ad817621d1527b83771c31e73b78b36ebb1550543_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
