<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5504f678c1d93d16a5bd2af5524ccedb21d0e51904743e940e71780c439d6830 extends Twig_Template
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
        $__internal_d16890bb0dd12f55726a3c10c5c1e3c7591ab23bea8bfc020fa2ddb19c0067f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16890bb0dd12f55726a3c10c5c1e3c7591ab23bea8bfc020fa2ddb19c0067f9->enter($__internal_d16890bb0dd12f55726a3c10c5c1e3c7591ab23bea8bfc020fa2ddb19c0067f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_273f89630cd39b024647e1a7f7dfd0e6785683b3415261e3aa9c940862733967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273f89630cd39b024647e1a7f7dfd0e6785683b3415261e3aa9c940862733967->enter($__internal_273f89630cd39b024647e1a7f7dfd0e6785683b3415261e3aa9c940862733967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d16890bb0dd12f55726a3c10c5c1e3c7591ab23bea8bfc020fa2ddb19c0067f9->leave($__internal_d16890bb0dd12f55726a3c10c5c1e3c7591ab23bea8bfc020fa2ddb19c0067f9_prof);

        
        $__internal_273f89630cd39b024647e1a7f7dfd0e6785683b3415261e3aa9c940862733967->leave($__internal_273f89630cd39b024647e1a7f7dfd0e6785683b3415261e3aa9c940862733967_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
