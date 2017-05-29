<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_14fef99b05489671b9c90c6038a8cd7f3363056d29905736dffce222ed688c18 extends Twig_Template
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
        $__internal_7803e0015e6e7f9c3c4b26abd2ac4335f6e9dbf77878e00e8e65d09101f7bc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7803e0015e6e7f9c3c4b26abd2ac4335f6e9dbf77878e00e8e65d09101f7bc33->enter($__internal_7803e0015e6e7f9c3c4b26abd2ac4335f6e9dbf77878e00e8e65d09101f7bc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c18079278145a08f8d2ecb310315cae080804e651d899fea518241a09ebbe4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18079278145a08f8d2ecb310315cae080804e651d899fea518241a09ebbe4f7->enter($__internal_c18079278145a08f8d2ecb310315cae080804e651d899fea518241a09ebbe4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7803e0015e6e7f9c3c4b26abd2ac4335f6e9dbf77878e00e8e65d09101f7bc33->leave($__internal_7803e0015e6e7f9c3c4b26abd2ac4335f6e9dbf77878e00e8e65d09101f7bc33_prof);

        
        $__internal_c18079278145a08f8d2ecb310315cae080804e651d899fea518241a09ebbe4f7->leave($__internal_c18079278145a08f8d2ecb310315cae080804e651d899fea518241a09ebbe4f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
