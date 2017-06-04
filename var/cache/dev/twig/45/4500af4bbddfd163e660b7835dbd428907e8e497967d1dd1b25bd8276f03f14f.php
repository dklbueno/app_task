<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_21130e03218e152164fbf1b3615561de46bf607c7516d2a8c2514ae15f2d17c0 extends Twig_Template
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
        $__internal_a35df8f06a5ac3e610bce2d1f43d49760ca89d71f5e5fb8376493cfe181bb8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35df8f06a5ac3e610bce2d1f43d49760ca89d71f5e5fb8376493cfe181bb8e5->enter($__internal_a35df8f06a5ac3e610bce2d1f43d49760ca89d71f5e5fb8376493cfe181bb8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_61ee1bc386ec432c862c742a9e47eec2cb46fc4e7b10d669e2c96091f9c33e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ee1bc386ec432c862c742a9e47eec2cb46fc4e7b10d669e2c96091f9c33e22->enter($__internal_61ee1bc386ec432c862c742a9e47eec2cb46fc4e7b10d669e2c96091f9c33e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a35df8f06a5ac3e610bce2d1f43d49760ca89d71f5e5fb8376493cfe181bb8e5->leave($__internal_a35df8f06a5ac3e610bce2d1f43d49760ca89d71f5e5fb8376493cfe181bb8e5_prof);

        
        $__internal_61ee1bc386ec432c862c742a9e47eec2cb46fc4e7b10d669e2c96091f9c33e22->leave($__internal_61ee1bc386ec432c862c742a9e47eec2cb46fc4e7b10d669e2c96091f9c33e22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
