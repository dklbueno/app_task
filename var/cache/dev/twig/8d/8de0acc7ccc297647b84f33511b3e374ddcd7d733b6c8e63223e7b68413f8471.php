<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_951a5c825788be56c71b08c742ec1275a5d802233e5d63642cada1870cd57390 extends Twig_Template
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
        $__internal_88b26db9938abe2bb997842261b4ae3c37094771260d0789e5d4b2979606cf12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b26db9938abe2bb997842261b4ae3c37094771260d0789e5d4b2979606cf12->enter($__internal_88b26db9938abe2bb997842261b4ae3c37094771260d0789e5d4b2979606cf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_93001a0025310124679e5d4e6675a1f96b5701aec9ef2018cfd060db7e8084ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93001a0025310124679e5d4e6675a1f96b5701aec9ef2018cfd060db7e8084ca->enter($__internal_93001a0025310124679e5d4e6675a1f96b5701aec9ef2018cfd060db7e8084ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_88b26db9938abe2bb997842261b4ae3c37094771260d0789e5d4b2979606cf12->leave($__internal_88b26db9938abe2bb997842261b4ae3c37094771260d0789e5d4b2979606cf12_prof);

        
        $__internal_93001a0025310124679e5d4e6675a1f96b5701aec9ef2018cfd060db7e8084ca->leave($__internal_93001a0025310124679e5d4e6675a1f96b5701aec9ef2018cfd060db7e8084ca_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
