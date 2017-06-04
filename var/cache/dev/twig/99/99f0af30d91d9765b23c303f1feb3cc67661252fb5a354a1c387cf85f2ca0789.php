<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_280c2a019dbe6dfdba4bf1b0ad0951e9780ad79330b93eca60d18a56d188ecc3 extends Twig_Template
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
        $__internal_0003b71257a1e078e1521e66c77ce76bff5b6f4fcd1b7060a078e514521fabae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0003b71257a1e078e1521e66c77ce76bff5b6f4fcd1b7060a078e514521fabae->enter($__internal_0003b71257a1e078e1521e66c77ce76bff5b6f4fcd1b7060a078e514521fabae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b278f3049b8d7ec1277bb198e1d7861b4932d338d8461e169c6c6d23cdb57a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b278f3049b8d7ec1277bb198e1d7861b4932d338d8461e169c6c6d23cdb57a97->enter($__internal_b278f3049b8d7ec1277bb198e1d7861b4932d338d8461e169c6c6d23cdb57a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_0003b71257a1e078e1521e66c77ce76bff5b6f4fcd1b7060a078e514521fabae->leave($__internal_0003b71257a1e078e1521e66c77ce76bff5b6f4fcd1b7060a078e514521fabae_prof);

        
        $__internal_b278f3049b8d7ec1277bb198e1d7861b4932d338d8461e169c6c6d23cdb57a97->leave($__internal_b278f3049b8d7ec1277bb198e1d7861b4932d338d8461e169c6c6d23cdb57a97_prof);

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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
