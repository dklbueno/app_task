<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d8c627f6ded7e9175322c2c8af44b40e57b4c83f5c969f77f892d85f8ad56a9f extends Twig_Template
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
        $__internal_d8d7ba20bc902d22fa354a37bf8a15699c70be7c685b7ad271ea784e180560fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d7ba20bc902d22fa354a37bf8a15699c70be7c685b7ad271ea784e180560fa->enter($__internal_d8d7ba20bc902d22fa354a37bf8a15699c70be7c685b7ad271ea784e180560fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_190e666345d74c3a456398cb9f2c60fc3f27a7f0d1d32c498777bc4fb44190f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190e666345d74c3a456398cb9f2c60fc3f27a7f0d1d32c498777bc4fb44190f0->enter($__internal_190e666345d74c3a456398cb9f2c60fc3f27a7f0d1d32c498777bc4fb44190f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d8d7ba20bc902d22fa354a37bf8a15699c70be7c685b7ad271ea784e180560fa->leave($__internal_d8d7ba20bc902d22fa354a37bf8a15699c70be7c685b7ad271ea784e180560fa_prof);

        
        $__internal_190e666345d74c3a456398cb9f2c60fc3f27a7f0d1d32c498777bc4fb44190f0->leave($__internal_190e666345d74c3a456398cb9f2c60fc3f27a7f0d1d32c498777bc4fb44190f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
