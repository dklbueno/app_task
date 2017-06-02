<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ef822694c601549b639f8d145ff5ba8b7cdf52e74c6206bbb9f08495c2dbf46e extends Twig_Template
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
        $__internal_7ffe3b09f005e45ec2b2bdcc554fe37f6f5110fc8a90df627f4b7f8fb1cbf8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffe3b09f005e45ec2b2bdcc554fe37f6f5110fc8a90df627f4b7f8fb1cbf8a4->enter($__internal_7ffe3b09f005e45ec2b2bdcc554fe37f6f5110fc8a90df627f4b7f8fb1cbf8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fdfcd34452ea15fd964335cce4c349c38a93b4c114a5cdc9e773c13dc21bc289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfcd34452ea15fd964335cce4c349c38a93b4c114a5cdc9e773c13dc21bc289->enter($__internal_fdfcd34452ea15fd964335cce4c349c38a93b4c114a5cdc9e773c13dc21bc289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7ffe3b09f005e45ec2b2bdcc554fe37f6f5110fc8a90df627f4b7f8fb1cbf8a4->leave($__internal_7ffe3b09f005e45ec2b2bdcc554fe37f6f5110fc8a90df627f4b7f8fb1cbf8a4_prof);

        
        $__internal_fdfcd34452ea15fd964335cce4c349c38a93b4c114a5cdc9e773c13dc21bc289->leave($__internal_fdfcd34452ea15fd964335cce4c349c38a93b4c114a5cdc9e773c13dc21bc289_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
