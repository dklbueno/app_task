<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_39b7e31912ed08132474c23dcf23ae3ba9e05edddb876740582b994bbbe4e2d9 extends Twig_Template
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
        $__internal_bd58bc73f1afeed397ac8ce6ff77efd026103f1e0e2c342f2dfc06cbad0689ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd58bc73f1afeed397ac8ce6ff77efd026103f1e0e2c342f2dfc06cbad0689ea->enter($__internal_bd58bc73f1afeed397ac8ce6ff77efd026103f1e0e2c342f2dfc06cbad0689ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_fb8b85a9fa056b902d1d9e2b7a7f706b29fc29ccbcc7863d2d96803b1936e808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8b85a9fa056b902d1d9e2b7a7f706b29fc29ccbcc7863d2d96803b1936e808->enter($__internal_fb8b85a9fa056b902d1d9e2b7a7f706b29fc29ccbcc7863d2d96803b1936e808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bd58bc73f1afeed397ac8ce6ff77efd026103f1e0e2c342f2dfc06cbad0689ea->leave($__internal_bd58bc73f1afeed397ac8ce6ff77efd026103f1e0e2c342f2dfc06cbad0689ea_prof);

        
        $__internal_fb8b85a9fa056b902d1d9e2b7a7f706b29fc29ccbcc7863d2d96803b1936e808->leave($__internal_fb8b85a9fa056b902d1d9e2b7a7f706b29fc29ccbcc7863d2d96803b1936e808_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
