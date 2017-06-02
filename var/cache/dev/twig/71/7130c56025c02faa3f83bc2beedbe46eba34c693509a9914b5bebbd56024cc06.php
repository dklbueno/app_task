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
        $__internal_3c7a0e0b9e0670a96e7601a18528675caca20e0c062f81a3d122f697bdce9783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7a0e0b9e0670a96e7601a18528675caca20e0c062f81a3d122f697bdce9783->enter($__internal_3c7a0e0b9e0670a96e7601a18528675caca20e0c062f81a3d122f697bdce9783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f31742a5dfb5b678455ff43bedaa601aab780de5530f2fd8ff044081ea6e67bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31742a5dfb5b678455ff43bedaa601aab780de5530f2fd8ff044081ea6e67bb->enter($__internal_f31742a5dfb5b678455ff43bedaa601aab780de5530f2fd8ff044081ea6e67bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3c7a0e0b9e0670a96e7601a18528675caca20e0c062f81a3d122f697bdce9783->leave($__internal_3c7a0e0b9e0670a96e7601a18528675caca20e0c062f81a3d122f697bdce9783_prof);

        
        $__internal_f31742a5dfb5b678455ff43bedaa601aab780de5530f2fd8ff044081ea6e67bb->leave($__internal_f31742a5dfb5b678455ff43bedaa601aab780de5530f2fd8ff044081ea6e67bb_prof);

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
