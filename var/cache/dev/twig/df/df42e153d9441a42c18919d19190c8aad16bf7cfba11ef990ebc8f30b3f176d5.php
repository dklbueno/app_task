<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b30adbfd66ef16292e25487c2903355d40fd0641ffc1ae580436b352aec87a28 extends Twig_Template
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
        $__internal_befd497ed40c98ac92ca12b862f7b8e100045593f429660c0b55c880d357beea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befd497ed40c98ac92ca12b862f7b8e100045593f429660c0b55c880d357beea->enter($__internal_befd497ed40c98ac92ca12b862f7b8e100045593f429660c0b55c880d357beea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7d09cec12ca142e42c539017fbcb6128edd1e3c1af091971e429c8f46c09b29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d09cec12ca142e42c539017fbcb6128edd1e3c1af091971e429c8f46c09b29a->enter($__internal_7d09cec12ca142e42c539017fbcb6128edd1e3c1af091971e429c8f46c09b29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_befd497ed40c98ac92ca12b862f7b8e100045593f429660c0b55c880d357beea->leave($__internal_befd497ed40c98ac92ca12b862f7b8e100045593f429660c0b55c880d357beea_prof);

        
        $__internal_7d09cec12ca142e42c539017fbcb6128edd1e3c1af091971e429c8f46c09b29a->leave($__internal_7d09cec12ca142e42c539017fbcb6128edd1e3c1af091971e429c8f46c09b29a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
