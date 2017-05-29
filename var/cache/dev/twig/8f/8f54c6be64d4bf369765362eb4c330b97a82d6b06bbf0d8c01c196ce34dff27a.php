<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_58daef00d87189930c3b6d9ef67c8aa16f08c3e461bb2deecde1029604827e23 extends Twig_Template
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
        $__internal_86b980815592fe9c800d86b2dd587629096cbbb8f3d71761698fa10aaf9fd001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b980815592fe9c800d86b2dd587629096cbbb8f3d71761698fa10aaf9fd001->enter($__internal_86b980815592fe9c800d86b2dd587629096cbbb8f3d71761698fa10aaf9fd001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5760c91fa54bf4305428f462bff362c97a9e401736e38e109bbc11dcd157810b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5760c91fa54bf4305428f462bff362c97a9e401736e38e109bbc11dcd157810b->enter($__internal_5760c91fa54bf4305428f462bff362c97a9e401736e38e109bbc11dcd157810b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_86b980815592fe9c800d86b2dd587629096cbbb8f3d71761698fa10aaf9fd001->leave($__internal_86b980815592fe9c800d86b2dd587629096cbbb8f3d71761698fa10aaf9fd001_prof);

        
        $__internal_5760c91fa54bf4305428f462bff362c97a9e401736e38e109bbc11dcd157810b->leave($__internal_5760c91fa54bf4305428f462bff362c97a9e401736e38e109bbc11dcd157810b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
