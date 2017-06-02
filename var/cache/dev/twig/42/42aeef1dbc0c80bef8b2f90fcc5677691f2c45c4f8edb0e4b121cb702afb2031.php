<?php

/* AtividadeBundle:Default:index.html.twig */
class __TwigTemplate_85e89455ad936ba2b4d3123885042691cfdb45ef54809d6fb89f62871a0c929d extends Twig_Template
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
        $__internal_f48b956ee805a6aa260e21e437451b8f25e0af49c6b38091724cc5f57dedc918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48b956ee805a6aa260e21e437451b8f25e0af49c6b38091724cc5f57dedc918->enter($__internal_f48b956ee805a6aa260e21e437451b8f25e0af49c6b38091724cc5f57dedc918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeBundle:Default:index.html.twig"));

        $__internal_262f616230d09cccd712c00466b9bed4255384ecfd62261c351be174103674d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262f616230d09cccd712c00466b9bed4255384ecfd62261c351be174103674d9->enter($__internal_262f616230d09cccd712c00466b9bed4255384ecfd62261c351be174103674d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f48b956ee805a6aa260e21e437451b8f25e0af49c6b38091724cc5f57dedc918->leave($__internal_f48b956ee805a6aa260e21e437451b8f25e0af49c6b38091724cc5f57dedc918_prof);

        
        $__internal_262f616230d09cccd712c00466b9bed4255384ecfd62261c351be174103674d9->leave($__internal_262f616230d09cccd712c00466b9bed4255384ecfd62261c351be174103674d9_prof);

    }

    public function getTemplateName()
    {
        return "AtividadeBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AtividadeBundle:Default:index.html.twig", "/var/www/html/app_task/src/Duo/AtividadeBundle/Resources/views/Default/index.html.twig");
    }
}
