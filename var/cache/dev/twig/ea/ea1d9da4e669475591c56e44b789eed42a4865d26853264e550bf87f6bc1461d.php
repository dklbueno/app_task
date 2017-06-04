<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_51d8986fc01b88bd7f4c34bfb41025539babd592194a672ea02055af3d56dd65 extends Twig_Template
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
        $__internal_1d9e2f68d4c3a37a1673028aa299bdcadbcac64f2040cac4589ee6c469889927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9e2f68d4c3a37a1673028aa299bdcadbcac64f2040cac4589ee6c469889927->enter($__internal_1d9e2f68d4c3a37a1673028aa299bdcadbcac64f2040cac4589ee6c469889927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d9ae5240080b8c2c31ec968e387a7d1f99367cd5a9c8da5737e9b59ce4e7d3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ae5240080b8c2c31ec968e387a7d1f99367cd5a9c8da5737e9b59ce4e7d3a6->enter($__internal_d9ae5240080b8c2c31ec968e387a7d1f99367cd5a9c8da5737e9b59ce4e7d3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1d9e2f68d4c3a37a1673028aa299bdcadbcac64f2040cac4589ee6c469889927->leave($__internal_1d9e2f68d4c3a37a1673028aa299bdcadbcac64f2040cac4589ee6c469889927_prof);

        
        $__internal_d9ae5240080b8c2c31ec968e387a7d1f99367cd5a9c8da5737e9b59ce4e7d3a6->leave($__internal_d9ae5240080b8c2c31ec968e387a7d1f99367cd5a9c8da5737e9b59ce4e7d3a6_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
