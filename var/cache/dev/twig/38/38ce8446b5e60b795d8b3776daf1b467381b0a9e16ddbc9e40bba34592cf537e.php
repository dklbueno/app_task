<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_026fcbc1990acaf2f69e6571d91009c8ed5f56e8703977e0568d3ba2943e89ee extends Twig_Template
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
        $__internal_4e16e777d01697f7de939b3bd6ad4ae9fb13c5de84a6f48f80531d937740e950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e16e777d01697f7de939b3bd6ad4ae9fb13c5de84a6f48f80531d937740e950->enter($__internal_4e16e777d01697f7de939b3bd6ad4ae9fb13c5de84a6f48f80531d937740e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6180cf0edbdf3c47536d321cb11e69adcfbedee95be14ff82492ed891974145e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6180cf0edbdf3c47536d321cb11e69adcfbedee95be14ff82492ed891974145e->enter($__internal_6180cf0edbdf3c47536d321cb11e69adcfbedee95be14ff82492ed891974145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4e16e777d01697f7de939b3bd6ad4ae9fb13c5de84a6f48f80531d937740e950->leave($__internal_4e16e777d01697f7de939b3bd6ad4ae9fb13c5de84a6f48f80531d937740e950_prof);

        
        $__internal_6180cf0edbdf3c47536d321cb11e69adcfbedee95be14ff82492ed891974145e->leave($__internal_6180cf0edbdf3c47536d321cb11e69adcfbedee95be14ff82492ed891974145e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
