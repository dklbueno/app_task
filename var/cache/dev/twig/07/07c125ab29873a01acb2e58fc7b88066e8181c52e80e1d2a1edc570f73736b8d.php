<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8a8217f0b1f85d83d4ed14757da5602703d2005fc0b4f41c9352bb66bd79355d extends Twig_Template
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
        $__internal_00a0848a13e90114a218366cbd8887624e42ba28ec1989c93d4630504dd0121c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a0848a13e90114a218366cbd8887624e42ba28ec1989c93d4630504dd0121c->enter($__internal_00a0848a13e90114a218366cbd8887624e42ba28ec1989c93d4630504dd0121c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_965088a794bdbdbf0755484533b8518c31111f458499782f5174ccbf26bb2c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965088a794bdbdbf0755484533b8518c31111f458499782f5174ccbf26bb2c4d->enter($__internal_965088a794bdbdbf0755484533b8518c31111f458499782f5174ccbf26bb2c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_00a0848a13e90114a218366cbd8887624e42ba28ec1989c93d4630504dd0121c->leave($__internal_00a0848a13e90114a218366cbd8887624e42ba28ec1989c93d4630504dd0121c_prof);

        
        $__internal_965088a794bdbdbf0755484533b8518c31111f458499782f5174ccbf26bb2c4d->leave($__internal_965088a794bdbdbf0755484533b8518c31111f458499782f5174ccbf26bb2c4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
