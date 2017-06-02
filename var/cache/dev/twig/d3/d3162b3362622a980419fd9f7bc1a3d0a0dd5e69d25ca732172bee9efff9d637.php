<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e8342f19383116d0d7ca10c2166d5af9406f63ea1559de88c694a717424b88be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_11caf9ffeed57226b435fc2b0780197c4bb2e93bcefb48deda71875025f80f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11caf9ffeed57226b435fc2b0780197c4bb2e93bcefb48deda71875025f80f5c->enter($__internal_11caf9ffeed57226b435fc2b0780197c4bb2e93bcefb48deda71875025f80f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2b1fd82b8d18432d76ece60d511a7cf249fa03e1296fecdaac8361355d186b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1fd82b8d18432d76ece60d511a7cf249fa03e1296fecdaac8361355d186b45->enter($__internal_2b1fd82b8d18432d76ece60d511a7cf249fa03e1296fecdaac8361355d186b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11caf9ffeed57226b435fc2b0780197c4bb2e93bcefb48deda71875025f80f5c->leave($__internal_11caf9ffeed57226b435fc2b0780197c4bb2e93bcefb48deda71875025f80f5c_prof);

        
        $__internal_2b1fd82b8d18432d76ece60d511a7cf249fa03e1296fecdaac8361355d186b45->leave($__internal_2b1fd82b8d18432d76ece60d511a7cf249fa03e1296fecdaac8361355d186b45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12414bd9b058c27fc7d5f763e66d3c28674d280458808f55296e97bfe4eb179f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12414bd9b058c27fc7d5f763e66d3c28674d280458808f55296e97bfe4eb179f->enter($__internal_12414bd9b058c27fc7d5f763e66d3c28674d280458808f55296e97bfe4eb179f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fda4434dc870c07d2a16dee38dce03ac9aba68fadf693d83452bd05ece59abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fda4434dc870c07d2a16dee38dce03ac9aba68fadf693d83452bd05ece59abf->enter($__internal_5fda4434dc870c07d2a16dee38dce03ac9aba68fadf693d83452bd05ece59abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5fda4434dc870c07d2a16dee38dce03ac9aba68fadf693d83452bd05ece59abf->leave($__internal_5fda4434dc870c07d2a16dee38dce03ac9aba68fadf693d83452bd05ece59abf_prof);

        
        $__internal_12414bd9b058c27fc7d5f763e66d3c28674d280458808f55296e97bfe4eb179f->leave($__internal_12414bd9b058c27fc7d5f763e66d3c28674d280458808f55296e97bfe4eb179f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a16bd83232f695070f112a96791b98d014aa2287eb1d132c33148b3edd9da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a16bd83232f695070f112a96791b98d014aa2287eb1d132c33148b3edd9da2->enter($__internal_c4a16bd83232f695070f112a96791b98d014aa2287eb1d132c33148b3edd9da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f4b370da9d1e8d46580397649b0e168bcc055fdb3fa28162d035d16a50ca8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4b370da9d1e8d46580397649b0e168bcc055fdb3fa28162d035d16a50ca8cd->enter($__internal_2f4b370da9d1e8d46580397649b0e168bcc055fdb3fa28162d035d16a50ca8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f4b370da9d1e8d46580397649b0e168bcc055fdb3fa28162d035d16a50ca8cd->leave($__internal_2f4b370da9d1e8d46580397649b0e168bcc055fdb3fa28162d035d16a50ca8cd_prof);

        
        $__internal_c4a16bd83232f695070f112a96791b98d014aa2287eb1d132c33148b3edd9da2->leave($__internal_c4a16bd83232f695070f112a96791b98d014aa2287eb1d132c33148b3edd9da2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
