<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5facfbd9c7bb31279ea530e7efa0e7819a9ab4f35d64e88116eed782b242457b extends Twig_Template
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
        $__internal_e18510a7c256ce91d2e9130a0ad9b78e2a1f6f58f348a1cab897390b7c557e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18510a7c256ce91d2e9130a0ad9b78e2a1f6f58f348a1cab897390b7c557e12->enter($__internal_e18510a7c256ce91d2e9130a0ad9b78e2a1f6f58f348a1cab897390b7c557e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_86ef17066eaeac85931652014305343215911750e29b47624637b87a5aa6c4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ef17066eaeac85931652014305343215911750e29b47624637b87a5aa6c4bd->enter($__internal_86ef17066eaeac85931652014305343215911750e29b47624637b87a5aa6c4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e18510a7c256ce91d2e9130a0ad9b78e2a1f6f58f348a1cab897390b7c557e12->leave($__internal_e18510a7c256ce91d2e9130a0ad9b78e2a1f6f58f348a1cab897390b7c557e12_prof);

        
        $__internal_86ef17066eaeac85931652014305343215911750e29b47624637b87a5aa6c4bd->leave($__internal_86ef17066eaeac85931652014305343215911750e29b47624637b87a5aa6c4bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
