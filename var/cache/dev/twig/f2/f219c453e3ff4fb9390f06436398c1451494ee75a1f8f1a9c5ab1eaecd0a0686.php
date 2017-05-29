<?php

/* AtividadesBundle:Default:index.html.twig */
class __TwigTemplate_e73b3767c468db3ef8218d9ae8cbd1df253b79d53f357472c0c9a30d77c20938 extends Twig_Template
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
        $__internal_9e74574865fa690ce16015b40e5682d433a8138dfd98bcfeaa1688142c2ad775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e74574865fa690ce16015b40e5682d433a8138dfd98bcfeaa1688142c2ad775->enter($__internal_9e74574865fa690ce16015b40e5682d433a8138dfd98bcfeaa1688142c2ad775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadesBundle:Default:index.html.twig"));

        $__internal_ac7b01ac4eaa8898273179a0e22e4539c0a12e27b6c4e73b11dcc3baac00b404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7b01ac4eaa8898273179a0e22e4539c0a12e27b6c4e73b11dcc3baac00b404->enter($__internal_ac7b01ac4eaa8898273179a0e22e4539c0a12e27b6c4e73b11dcc3baac00b404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9e74574865fa690ce16015b40e5682d433a8138dfd98bcfeaa1688142c2ad775->leave($__internal_9e74574865fa690ce16015b40e5682d433a8138dfd98bcfeaa1688142c2ad775_prof);

        
        $__internal_ac7b01ac4eaa8898273179a0e22e4539c0a12e27b6c4e73b11dcc3baac00b404->leave($__internal_ac7b01ac4eaa8898273179a0e22e4539c0a12e27b6c4e73b11dcc3baac00b404_prof);

    }

    public function getTemplateName()
    {
        return "AtividadesBundle:Default:index.html.twig";
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
", "AtividadesBundle:Default:index.html.twig", "/var/www/html/app_task/src/Duo/AtividadesBundle/Resources/views/Default/index.html.twig");
    }
}
