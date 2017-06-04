<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2692341584ee29b84f02564b613821eaa53f674346c2fcaff7c274fc1884fd51 extends Twig_Template
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
        $__internal_5c16e9f419dfcb31588b97fef74152d93165446030aa19c74854db11a5d97474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c16e9f419dfcb31588b97fef74152d93165446030aa19c74854db11a5d97474->enter($__internal_5c16e9f419dfcb31588b97fef74152d93165446030aa19c74854db11a5d97474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_165ebbe1acd7018e62012ad62a9979accfe3ffb7b237f5c8cf85328bddce333b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165ebbe1acd7018e62012ad62a9979accfe3ffb7b237f5c8cf85328bddce333b->enter($__internal_165ebbe1acd7018e62012ad62a9979accfe3ffb7b237f5c8cf85328bddce333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5c16e9f419dfcb31588b97fef74152d93165446030aa19c74854db11a5d97474->leave($__internal_5c16e9f419dfcb31588b97fef74152d93165446030aa19c74854db11a5d97474_prof);

        
        $__internal_165ebbe1acd7018e62012ad62a9979accfe3ffb7b237f5c8cf85328bddce333b->leave($__internal_165ebbe1acd7018e62012ad62a9979accfe3ffb7b237f5c8cf85328bddce333b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
