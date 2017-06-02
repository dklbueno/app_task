<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7b1e3add7d76d980dfa377d99602d6d301f9843701dfe8bf83a1e2b7ac3a3bc5 extends Twig_Template
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
        $__internal_fcb51745562601e98302f58676572cca9a4cbe2c18ed386dd2d71479c7265ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb51745562601e98302f58676572cca9a4cbe2c18ed386dd2d71479c7265ac4->enter($__internal_fcb51745562601e98302f58676572cca9a4cbe2c18ed386dd2d71479c7265ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e0916d0fe41760849f830875f5653bc2cea5125d8e88b5f382496099a56a5280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0916d0fe41760849f830875f5653bc2cea5125d8e88b5f382496099a56a5280->enter($__internal_e0916d0fe41760849f830875f5653bc2cea5125d8e88b5f382496099a56a5280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fcb51745562601e98302f58676572cca9a4cbe2c18ed386dd2d71479c7265ac4->leave($__internal_fcb51745562601e98302f58676572cca9a4cbe2c18ed386dd2d71479c7265ac4_prof);

        
        $__internal_e0916d0fe41760849f830875f5653bc2cea5125d8e88b5f382496099a56a5280->leave($__internal_e0916d0fe41760849f830875f5653bc2cea5125d8e88b5f382496099a56a5280_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
