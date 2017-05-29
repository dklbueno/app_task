<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4eebabe20ab791f39e384853fdb6efb1efc71b9ea8fdc54aa7be628725a0808f extends Twig_Template
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
        $__internal_2e862a6608be1ea540ebee8e629b2c79dddd5454383433a5eaa3a7514ba3ac4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e862a6608be1ea540ebee8e629b2c79dddd5454383433a5eaa3a7514ba3ac4b->enter($__internal_2e862a6608be1ea540ebee8e629b2c79dddd5454383433a5eaa3a7514ba3ac4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b04f46c40b15e3ac618af3d53d93acb72cb1f85bfc3e94f1d525ea0d04e7d8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04f46c40b15e3ac618af3d53d93acb72cb1f85bfc3e94f1d525ea0d04e7d8af->enter($__internal_b04f46c40b15e3ac618af3d53d93acb72cb1f85bfc3e94f1d525ea0d04e7d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2e862a6608be1ea540ebee8e629b2c79dddd5454383433a5eaa3a7514ba3ac4b->leave($__internal_2e862a6608be1ea540ebee8e629b2c79dddd5454383433a5eaa3a7514ba3ac4b_prof);

        
        $__internal_b04f46c40b15e3ac618af3d53d93acb72cb1f85bfc3e94f1d525ea0d04e7d8af->leave($__internal_b04f46c40b15e3ac618af3d53d93acb72cb1f85bfc3e94f1d525ea0d04e7d8af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
