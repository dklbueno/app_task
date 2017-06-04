<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_988d050ed54c7ca625a3c36aaef8df1f6e2794bc2db6a7aca25dcc981fd6d310 extends Twig_Template
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
        $__internal_25b9b2439d4c9724ede2f856df66108437fdc28c79881c80d796aec083731200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b9b2439d4c9724ede2f856df66108437fdc28c79881c80d796aec083731200->enter($__internal_25b9b2439d4c9724ede2f856df66108437fdc28c79881c80d796aec083731200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1242a48fc1c04fdaf8c4c302da9e93a0978129da514c6994cd0c70ef5db4fd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1242a48fc1c04fdaf8c4c302da9e93a0978129da514c6994cd0c70ef5db4fd0a->enter($__internal_1242a48fc1c04fdaf8c4c302da9e93a0978129da514c6994cd0c70ef5db4fd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_25b9b2439d4c9724ede2f856df66108437fdc28c79881c80d796aec083731200->leave($__internal_25b9b2439d4c9724ede2f856df66108437fdc28c79881c80d796aec083731200_prof);

        
        $__internal_1242a48fc1c04fdaf8c4c302da9e93a0978129da514c6994cd0c70ef5db4fd0a->leave($__internal_1242a48fc1c04fdaf8c4c302da9e93a0978129da514c6994cd0c70ef5db4fd0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
