<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_09f5f5127174c4c63f5e552ad842715484fddfd34b258317c8940d6aa1f98268 extends Twig_Template
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
        $__internal_05dba0edb0324853d28867866f30f136903a437931342baca3ec1173624a16be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05dba0edb0324853d28867866f30f136903a437931342baca3ec1173624a16be->enter($__internal_05dba0edb0324853d28867866f30f136903a437931342baca3ec1173624a16be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b891292860231e0df7235b2f6f22c48d4c7e753b41160b9d22504e3073fb23dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b891292860231e0df7235b2f6f22c48d4c7e753b41160b9d22504e3073fb23dc->enter($__internal_b891292860231e0df7235b2f6f22c48d4c7e753b41160b9d22504e3073fb23dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_05dba0edb0324853d28867866f30f136903a437931342baca3ec1173624a16be->leave($__internal_05dba0edb0324853d28867866f30f136903a437931342baca3ec1173624a16be_prof);

        
        $__internal_b891292860231e0df7235b2f6f22c48d4c7e753b41160b9d22504e3073fb23dc->leave($__internal_b891292860231e0df7235b2f6f22c48d4c7e753b41160b9d22504e3073fb23dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
