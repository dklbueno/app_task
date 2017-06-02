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
        $__internal_ee9f30b0e6694042c9bfe540c81e1b7563db0d416ddb627b41e5d49a041a68b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9f30b0e6694042c9bfe540c81e1b7563db0d416ddb627b41e5d49a041a68b4->enter($__internal_ee9f30b0e6694042c9bfe540c81e1b7563db0d416ddb627b41e5d49a041a68b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_262bac57943ecb06d31bf9195b0d14a59ef19646d63105e18fd3d771276212d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262bac57943ecb06d31bf9195b0d14a59ef19646d63105e18fd3d771276212d1->enter($__internal_262bac57943ecb06d31bf9195b0d14a59ef19646d63105e18fd3d771276212d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ee9f30b0e6694042c9bfe540c81e1b7563db0d416ddb627b41e5d49a041a68b4->leave($__internal_ee9f30b0e6694042c9bfe540c81e1b7563db0d416ddb627b41e5d49a041a68b4_prof);

        
        $__internal_262bac57943ecb06d31bf9195b0d14a59ef19646d63105e18fd3d771276212d1->leave($__internal_262bac57943ecb06d31bf9195b0d14a59ef19646d63105e18fd3d771276212d1_prof);

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
