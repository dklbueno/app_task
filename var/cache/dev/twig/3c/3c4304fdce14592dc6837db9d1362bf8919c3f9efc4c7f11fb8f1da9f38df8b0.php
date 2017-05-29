<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_49e5b7132954c6d427dc2ab4d614ab50849b583a17f3735565ed981d8294e79d extends Twig_Template
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
        $__internal_1149e4f783a2b0b8fb313c0c125aa938c41b35749b279ba4b8ddf3822740879d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1149e4f783a2b0b8fb313c0c125aa938c41b35749b279ba4b8ddf3822740879d->enter($__internal_1149e4f783a2b0b8fb313c0c125aa938c41b35749b279ba4b8ddf3822740879d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_137c47cbc4c23ff019deb27d4195e2600b24cedbc41c806acb8c4430792f671f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137c47cbc4c23ff019deb27d4195e2600b24cedbc41c806acb8c4430792f671f->enter($__internal_137c47cbc4c23ff019deb27d4195e2600b24cedbc41c806acb8c4430792f671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1149e4f783a2b0b8fb313c0c125aa938c41b35749b279ba4b8ddf3822740879d->leave($__internal_1149e4f783a2b0b8fb313c0c125aa938c41b35749b279ba4b8ddf3822740879d_prof);

        
        $__internal_137c47cbc4c23ff019deb27d4195e2600b24cedbc41c806acb8c4430792f671f->leave($__internal_137c47cbc4c23ff019deb27d4195e2600b24cedbc41c806acb8c4430792f671f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
