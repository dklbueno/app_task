<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fa350a414a63fea1b1d2f07e02747c185e8cbcde2ed4ed9107b480d7bddda8bf extends Twig_Template
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
        $__internal_e20c3900e6d2b353cd5be22327a051c11c309b29ebe36304aad8d664d06c5c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20c3900e6d2b353cd5be22327a051c11c309b29ebe36304aad8d664d06c5c90->enter($__internal_e20c3900e6d2b353cd5be22327a051c11c309b29ebe36304aad8d664d06c5c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f5cb512c0adb458e7dae274f84dbea8f3d5d448d0ba23d2e8f5034314d8bfca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cb512c0adb458e7dae274f84dbea8f3d5d448d0ba23d2e8f5034314d8bfca0->enter($__internal_f5cb512c0adb458e7dae274f84dbea8f3d5d448d0ba23d2e8f5034314d8bfca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e20c3900e6d2b353cd5be22327a051c11c309b29ebe36304aad8d664d06c5c90->leave($__internal_e20c3900e6d2b353cd5be22327a051c11c309b29ebe36304aad8d664d06c5c90_prof);

        
        $__internal_f5cb512c0adb458e7dae274f84dbea8f3d5d448d0ba23d2e8f5034314d8bfca0->leave($__internal_f5cb512c0adb458e7dae274f84dbea8f3d5d448d0ba23d2e8f5034314d8bfca0_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
