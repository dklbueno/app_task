<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_306917864f217d92b81582c27336e8bf484146716cd97142132554f209a548d8 extends Twig_Template
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
        $__internal_0635e97ae0da67c444337392559bc9a4d2129c71d459965522c8f2d676a8fde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0635e97ae0da67c444337392559bc9a4d2129c71d459965522c8f2d676a8fde5->enter($__internal_0635e97ae0da67c444337392559bc9a4d2129c71d459965522c8f2d676a8fde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4a3d8ccef175e85fd9e0f420ffef3560cb8e294b0a42b981d927bda1ec56e065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3d8ccef175e85fd9e0f420ffef3560cb8e294b0a42b981d927bda1ec56e065->enter($__internal_4a3d8ccef175e85fd9e0f420ffef3560cb8e294b0a42b981d927bda1ec56e065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0635e97ae0da67c444337392559bc9a4d2129c71d459965522c8f2d676a8fde5->leave($__internal_0635e97ae0da67c444337392559bc9a4d2129c71d459965522c8f2d676a8fde5_prof);

        
        $__internal_4a3d8ccef175e85fd9e0f420ffef3560cb8e294b0a42b981d927bda1ec56e065->leave($__internal_4a3d8ccef175e85fd9e0f420ffef3560cb8e294b0a42b981d927bda1ec56e065_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
