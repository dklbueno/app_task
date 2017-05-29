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
        $__internal_ef40895203199ebd98d442e6a966a87d86d4dcb52422f5f8f929e7892d7bf5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef40895203199ebd98d442e6a966a87d86d4dcb52422f5f8f929e7892d7bf5d0->enter($__internal_ef40895203199ebd98d442e6a966a87d86d4dcb52422f5f8f929e7892d7bf5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_92497903440fc18461a39d7aac5f9029dcf179bc43ba2b80a1bdd3c5b009a95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92497903440fc18461a39d7aac5f9029dcf179bc43ba2b80a1bdd3c5b009a95f->enter($__internal_92497903440fc18461a39d7aac5f9029dcf179bc43ba2b80a1bdd3c5b009a95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ef40895203199ebd98d442e6a966a87d86d4dcb52422f5f8f929e7892d7bf5d0->leave($__internal_ef40895203199ebd98d442e6a966a87d86d4dcb52422f5f8f929e7892d7bf5d0_prof);

        
        $__internal_92497903440fc18461a39d7aac5f9029dcf179bc43ba2b80a1bdd3c5b009a95f->leave($__internal_92497903440fc18461a39d7aac5f9029dcf179bc43ba2b80a1bdd3c5b009a95f_prof);

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
