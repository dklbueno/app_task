<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_afa79b5f75561cf124ab7b383531b5ef265a7176a9f3eb22b1c464ec2445a2af extends Twig_Template
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
        $__internal_a1df084c8ddf0dde8920fe56ba03dd57d16d7268afc28c98697e40340d63f1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1df084c8ddf0dde8920fe56ba03dd57d16d7268afc28c98697e40340d63f1c8->enter($__internal_a1df084c8ddf0dde8920fe56ba03dd57d16d7268afc28c98697e40340d63f1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d05f65e6d0049175df4c849ef92db2573832bbb29d95e5b8d2c5bc902dbc8296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05f65e6d0049175df4c849ef92db2573832bbb29d95e5b8d2c5bc902dbc8296->enter($__internal_d05f65e6d0049175df4c849ef92db2573832bbb29d95e5b8d2c5bc902dbc8296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a1df084c8ddf0dde8920fe56ba03dd57d16d7268afc28c98697e40340d63f1c8->leave($__internal_a1df084c8ddf0dde8920fe56ba03dd57d16d7268afc28c98697e40340d63f1c8_prof);

        
        $__internal_d05f65e6d0049175df4c849ef92db2573832bbb29d95e5b8d2c5bc902dbc8296->leave($__internal_d05f65e6d0049175df4c849ef92db2573832bbb29d95e5b8d2c5bc902dbc8296_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
