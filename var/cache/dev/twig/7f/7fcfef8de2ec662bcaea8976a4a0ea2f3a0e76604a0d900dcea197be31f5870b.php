<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7384a033171078ba07c52536561ef4f9db63dee564e18adc4b355bd0227362cb extends Twig_Template
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
        $__internal_0a85d2c6b0d620dcb901a63f56aedfe8071f84b057965f131438dc436bd488e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a85d2c6b0d620dcb901a63f56aedfe8071f84b057965f131438dc436bd488e3->enter($__internal_0a85d2c6b0d620dcb901a63f56aedfe8071f84b057965f131438dc436bd488e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7ae25c937780fac80fece35510c806def0cda26e5ac9d8575c54f20bd39ba494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae25c937780fac80fece35510c806def0cda26e5ac9d8575c54f20bd39ba494->enter($__internal_7ae25c937780fac80fece35510c806def0cda26e5ac9d8575c54f20bd39ba494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0a85d2c6b0d620dcb901a63f56aedfe8071f84b057965f131438dc436bd488e3->leave($__internal_0a85d2c6b0d620dcb901a63f56aedfe8071f84b057965f131438dc436bd488e3_prof);

        
        $__internal_7ae25c937780fac80fece35510c806def0cda26e5ac9d8575c54f20bd39ba494->leave($__internal_7ae25c937780fac80fece35510c806def0cda26e5ac9d8575c54f20bd39ba494_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
