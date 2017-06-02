<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_96b827f6945afc7616468042123663b1ecae262f6b5abca0413222c4fe3e0afd extends Twig_Template
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
        $__internal_ee8952b76e683ba5e84183be3cc3deedb250717a12f895bb9236bb9d5a99e90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8952b76e683ba5e84183be3cc3deedb250717a12f895bb9236bb9d5a99e90c->enter($__internal_ee8952b76e683ba5e84183be3cc3deedb250717a12f895bb9236bb9d5a99e90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6920103a9502e9ff93eb938c03b167f347b3a93c7df1f66a048b27b18d8d8af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6920103a9502e9ff93eb938c03b167f347b3a93c7df1f66a048b27b18d8d8af8->enter($__internal_6920103a9502e9ff93eb938c03b167f347b3a93c7df1f66a048b27b18d8d8af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ee8952b76e683ba5e84183be3cc3deedb250717a12f895bb9236bb9d5a99e90c->leave($__internal_ee8952b76e683ba5e84183be3cc3deedb250717a12f895bb9236bb9d5a99e90c_prof);

        
        $__internal_6920103a9502e9ff93eb938c03b167f347b3a93c7df1f66a048b27b18d8d8af8->leave($__internal_6920103a9502e9ff93eb938c03b167f347b3a93c7df1f66a048b27b18d8d8af8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
