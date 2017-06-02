<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_58daef00d87189930c3b6d9ef67c8aa16f08c3e461bb2deecde1029604827e23 extends Twig_Template
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
        $__internal_303e4252408dec9ec073725fe269cef9553c0742c7faa97eb13a6a93d4c41768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303e4252408dec9ec073725fe269cef9553c0742c7faa97eb13a6a93d4c41768->enter($__internal_303e4252408dec9ec073725fe269cef9553c0742c7faa97eb13a6a93d4c41768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_fe3cca25e44ca96eb4a966915bd1e9d7ee88334238985fb9be0f2bbfb45d6ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3cca25e44ca96eb4a966915bd1e9d7ee88334238985fb9be0f2bbfb45d6ce5->enter($__internal_fe3cca25e44ca96eb4a966915bd1e9d7ee88334238985fb9be0f2bbfb45d6ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_303e4252408dec9ec073725fe269cef9553c0742c7faa97eb13a6a93d4c41768->leave($__internal_303e4252408dec9ec073725fe269cef9553c0742c7faa97eb13a6a93d4c41768_prof);

        
        $__internal_fe3cca25e44ca96eb4a966915bd1e9d7ee88334238985fb9be0f2bbfb45d6ce5->leave($__internal_fe3cca25e44ca96eb4a966915bd1e9d7ee88334238985fb9be0f2bbfb45d6ce5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
