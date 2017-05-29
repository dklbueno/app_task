<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c22d7b88ad298518bc5d0eeb94032dc7147c2788bafd22a6afb930719441fb6 extends Twig_Template
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
        $__internal_2439c7cb0db98d6616562477e3fb7fe8c4d77a4b4310208932b87c6d7727f6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2439c7cb0db98d6616562477e3fb7fe8c4d77a4b4310208932b87c6d7727f6cf->enter($__internal_2439c7cb0db98d6616562477e3fb7fe8c4d77a4b4310208932b87c6d7727f6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_15aefc42b0ff823fb32c358dab4faf97fc80ca34f6e731537cd947ff22e7d387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15aefc42b0ff823fb32c358dab4faf97fc80ca34f6e731537cd947ff22e7d387->enter($__internal_15aefc42b0ff823fb32c358dab4faf97fc80ca34f6e731537cd947ff22e7d387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2439c7cb0db98d6616562477e3fb7fe8c4d77a4b4310208932b87c6d7727f6cf->leave($__internal_2439c7cb0db98d6616562477e3fb7fe8c4d77a4b4310208932b87c6d7727f6cf_prof);

        
        $__internal_15aefc42b0ff823fb32c358dab4faf97fc80ca34f6e731537cd947ff22e7d387->leave($__internal_15aefc42b0ff823fb32c358dab4faf97fc80ca34f6e731537cd947ff22e7d387_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
