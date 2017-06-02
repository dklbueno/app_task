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
        $__internal_89ab60faa91e2459eb84ddc7a2c142359e6f53c35bf0b880528e089ecabbefb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ab60faa91e2459eb84ddc7a2c142359e6f53c35bf0b880528e089ecabbefb7->enter($__internal_89ab60faa91e2459eb84ddc7a2c142359e6f53c35bf0b880528e089ecabbefb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_db558db0db658a9c028a5b7bc279bcee131f8256715b9098076011f7ae11e76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db558db0db658a9c028a5b7bc279bcee131f8256715b9098076011f7ae11e76e->enter($__internal_db558db0db658a9c028a5b7bc279bcee131f8256715b9098076011f7ae11e76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_89ab60faa91e2459eb84ddc7a2c142359e6f53c35bf0b880528e089ecabbefb7->leave($__internal_89ab60faa91e2459eb84ddc7a2c142359e6f53c35bf0b880528e089ecabbefb7_prof);

        
        $__internal_db558db0db658a9c028a5b7bc279bcee131f8256715b9098076011f7ae11e76e->leave($__internal_db558db0db658a9c028a5b7bc279bcee131f8256715b9098076011f7ae11e76e_prof);

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
