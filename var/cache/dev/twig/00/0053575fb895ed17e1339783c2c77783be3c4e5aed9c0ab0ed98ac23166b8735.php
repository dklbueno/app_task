<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a2e9419153f1f9fe824b372cd4251ead3492271e52d690d444e6a47e4c622a52 extends Twig_Template
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
        $__internal_993d66cdc9168c6714bf137d2633c4493fa58a351772042a8cc6b598e3ea0d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993d66cdc9168c6714bf137d2633c4493fa58a351772042a8cc6b598e3ea0d57->enter($__internal_993d66cdc9168c6714bf137d2633c4493fa58a351772042a8cc6b598e3ea0d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3e834021a240b5a1c541184189a76d6bd068a3d0174ed44f3886767ccbe4fa61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e834021a240b5a1c541184189a76d6bd068a3d0174ed44f3886767ccbe4fa61->enter($__internal_3e834021a240b5a1c541184189a76d6bd068a3d0174ed44f3886767ccbe4fa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_993d66cdc9168c6714bf137d2633c4493fa58a351772042a8cc6b598e3ea0d57->leave($__internal_993d66cdc9168c6714bf137d2633c4493fa58a351772042a8cc6b598e3ea0d57_prof);

        
        $__internal_3e834021a240b5a1c541184189a76d6bd068a3d0174ed44f3886767ccbe4fa61->leave($__internal_3e834021a240b5a1c541184189a76d6bd068a3d0174ed44f3886767ccbe4fa61_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
