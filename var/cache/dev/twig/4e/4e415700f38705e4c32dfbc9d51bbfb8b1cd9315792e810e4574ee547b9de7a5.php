<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7cbac0cf171270f9f5bf8356f1c4f857ecb0cfcacae1dc61ec7b70e469509963 extends Twig_Template
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
        $__internal_c718453a9c03de41d1cd73e69105a6243f5c6cb3ad5e674a8eb386c06f7f2f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c718453a9c03de41d1cd73e69105a6243f5c6cb3ad5e674a8eb386c06f7f2f76->enter($__internal_c718453a9c03de41d1cd73e69105a6243f5c6cb3ad5e674a8eb386c06f7f2f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_31b37ab690b9d03acc65502723dc2a998f67ddbbb7376eabab18ca566eb1e259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b37ab690b9d03acc65502723dc2a998f67ddbbb7376eabab18ca566eb1e259->enter($__internal_31b37ab690b9d03acc65502723dc2a998f67ddbbb7376eabab18ca566eb1e259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c718453a9c03de41d1cd73e69105a6243f5c6cb3ad5e674a8eb386c06f7f2f76->leave($__internal_c718453a9c03de41d1cd73e69105a6243f5c6cb3ad5e674a8eb386c06f7f2f76_prof);

        
        $__internal_31b37ab690b9d03acc65502723dc2a998f67ddbbb7376eabab18ca566eb1e259->leave($__internal_31b37ab690b9d03acc65502723dc2a998f67ddbbb7376eabab18ca566eb1e259_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
