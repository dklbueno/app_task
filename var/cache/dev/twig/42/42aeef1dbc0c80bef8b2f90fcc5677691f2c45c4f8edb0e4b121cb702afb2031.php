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
        $__internal_13e5fe7dae2a6ba8be505ced04e8e472bc5c5e8edd9eefe5caad96e44c6e33aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e5fe7dae2a6ba8be505ced04e8e472bc5c5e8edd9eefe5caad96e44c6e33aa->enter($__internal_13e5fe7dae2a6ba8be505ced04e8e472bc5c5e8edd9eefe5caad96e44c6e33aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeBundle:Default:index.html.twig"));

        $__internal_f03fa180bd5bb256fc35f109df49b74a6ffbd112806a599fab0c164234ec17ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03fa180bd5bb256fc35f109df49b74a6ffbd112806a599fab0c164234ec17ba->enter($__internal_f03fa180bd5bb256fc35f109df49b74a6ffbd112806a599fab0c164234ec17ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_13e5fe7dae2a6ba8be505ced04e8e472bc5c5e8edd9eefe5caad96e44c6e33aa->leave($__internal_13e5fe7dae2a6ba8be505ced04e8e472bc5c5e8edd9eefe5caad96e44c6e33aa_prof);

        
        $__internal_f03fa180bd5bb256fc35f109df49b74a6ffbd112806a599fab0c164234ec17ba->leave($__internal_f03fa180bd5bb256fc35f109df49b74a6ffbd112806a599fab0c164234ec17ba_prof);

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
