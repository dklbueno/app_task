<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1493829c672ab4896866b28f97631711ecebd70b2afa8a844f5b9efc805cbe3e extends Twig_Template
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
        $__internal_1989af6a8fa5d17e24037516f8eb49ca54a0191a73dc78c575d62a14d22be313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1989af6a8fa5d17e24037516f8eb49ca54a0191a73dc78c575d62a14d22be313->enter($__internal_1989af6a8fa5d17e24037516f8eb49ca54a0191a73dc78c575d62a14d22be313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6e9a328d9666f8f294e6f0e8387364928ac0a8d9b16cfb5d675ee2d8c271cc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9a328d9666f8f294e6f0e8387364928ac0a8d9b16cfb5d675ee2d8c271cc3b->enter($__internal_6e9a328d9666f8f294e6f0e8387364928ac0a8d9b16cfb5d675ee2d8c271cc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1989af6a8fa5d17e24037516f8eb49ca54a0191a73dc78c575d62a14d22be313->leave($__internal_1989af6a8fa5d17e24037516f8eb49ca54a0191a73dc78c575d62a14d22be313_prof);

        
        $__internal_6e9a328d9666f8f294e6f0e8387364928ac0a8d9b16cfb5d675ee2d8c271cc3b->leave($__internal_6e9a328d9666f8f294e6f0e8387364928ac0a8d9b16cfb5d675ee2d8c271cc3b_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
