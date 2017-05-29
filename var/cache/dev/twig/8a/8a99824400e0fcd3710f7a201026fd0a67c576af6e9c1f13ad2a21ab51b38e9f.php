<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7471e37d02ee6b5f639d5867bba54d49391dc2e4eceb2ebc8e348479b00b0a5a extends Twig_Template
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
        $__internal_39773ab5281b8056c28d114d64e736caa00f83cc07246ff4c52587a74f9eb65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39773ab5281b8056c28d114d64e736caa00f83cc07246ff4c52587a74f9eb65b->enter($__internal_39773ab5281b8056c28d114d64e736caa00f83cc07246ff4c52587a74f9eb65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f92bd455c1c9e2b950b3019234c8a8dc0054f0a254ff51fa293d420738b6d715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92bd455c1c9e2b950b3019234c8a8dc0054f0a254ff51fa293d420738b6d715->enter($__internal_f92bd455c1c9e2b950b3019234c8a8dc0054f0a254ff51fa293d420738b6d715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_39773ab5281b8056c28d114d64e736caa00f83cc07246ff4c52587a74f9eb65b->leave($__internal_39773ab5281b8056c28d114d64e736caa00f83cc07246ff4c52587a74f9eb65b_prof);

        
        $__internal_f92bd455c1c9e2b950b3019234c8a8dc0054f0a254ff51fa293d420738b6d715->leave($__internal_f92bd455c1c9e2b950b3019234c8a8dc0054f0a254ff51fa293d420738b6d715_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
