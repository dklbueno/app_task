<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_755735d6c4628662133edbd1ccd7d296a50b4937ca2336ae3628a02469b4ac9f extends Twig_Template
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
        $__internal_9876de06db2aa6da7857a79b561b2383c0f8de6e42650a6771207f539fee1312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9876de06db2aa6da7857a79b561b2383c0f8de6e42650a6771207f539fee1312->enter($__internal_9876de06db2aa6da7857a79b561b2383c0f8de6e42650a6771207f539fee1312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e2816032ec5096a4ceec0a1a99c70617900aa244d0c9ad87526d22f0467ecbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2816032ec5096a4ceec0a1a99c70617900aa244d0c9ad87526d22f0467ecbab->enter($__internal_e2816032ec5096a4ceec0a1a99c70617900aa244d0c9ad87526d22f0467ecbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9876de06db2aa6da7857a79b561b2383c0f8de6e42650a6771207f539fee1312->leave($__internal_9876de06db2aa6da7857a79b561b2383c0f8de6e42650a6771207f539fee1312_prof);

        
        $__internal_e2816032ec5096a4ceec0a1a99c70617900aa244d0c9ad87526d22f0467ecbab->leave($__internal_e2816032ec5096a4ceec0a1a99c70617900aa244d0c9ad87526d22f0467ecbab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
