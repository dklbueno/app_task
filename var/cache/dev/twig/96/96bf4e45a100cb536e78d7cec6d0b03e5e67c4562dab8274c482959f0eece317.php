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
        $__internal_8c4c41b415ac4553d2cf6da824d9a7c38011c51b7b961585d44dc3cac2a66e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4c41b415ac4553d2cf6da824d9a7c38011c51b7b961585d44dc3cac2a66e9a->enter($__internal_8c4c41b415ac4553d2cf6da824d9a7c38011c51b7b961585d44dc3cac2a66e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_379b464c07a0cf8677dde9c36922c254dce156bff269e3189bcaf5ec32961076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379b464c07a0cf8677dde9c36922c254dce156bff269e3189bcaf5ec32961076->enter($__internal_379b464c07a0cf8677dde9c36922c254dce156bff269e3189bcaf5ec32961076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8c4c41b415ac4553d2cf6da824d9a7c38011c51b7b961585d44dc3cac2a66e9a->leave($__internal_8c4c41b415ac4553d2cf6da824d9a7c38011c51b7b961585d44dc3cac2a66e9a_prof);

        
        $__internal_379b464c07a0cf8677dde9c36922c254dce156bff269e3189bcaf5ec32961076->leave($__internal_379b464c07a0cf8677dde9c36922c254dce156bff269e3189bcaf5ec32961076_prof);

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
