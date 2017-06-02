<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_14fef99b05489671b9c90c6038a8cd7f3363056d29905736dffce222ed688c18 extends Twig_Template
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
        $__internal_b4a35e1a6ba3571113af6b9e01273dbb1b8d1108bc3ca202940d70e515ecbed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a35e1a6ba3571113af6b9e01273dbb1b8d1108bc3ca202940d70e515ecbed9->enter($__internal_b4a35e1a6ba3571113af6b9e01273dbb1b8d1108bc3ca202940d70e515ecbed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9eca1954b49c283208cbc93008d4599ef482dc025a06febcfb6c8b7ab5739e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eca1954b49c283208cbc93008d4599ef482dc025a06febcfb6c8b7ab5739e7c->enter($__internal_9eca1954b49c283208cbc93008d4599ef482dc025a06febcfb6c8b7ab5739e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b4a35e1a6ba3571113af6b9e01273dbb1b8d1108bc3ca202940d70e515ecbed9->leave($__internal_b4a35e1a6ba3571113af6b9e01273dbb1b8d1108bc3ca202940d70e515ecbed9_prof);

        
        $__internal_9eca1954b49c283208cbc93008d4599ef482dc025a06febcfb6c8b7ab5739e7c->leave($__internal_9eca1954b49c283208cbc93008d4599ef482dc025a06febcfb6c8b7ab5739e7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
