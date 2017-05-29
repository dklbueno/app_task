<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bae8fe075be49c771a3efb4689c64f2f11f9af5a2f431f20db88e700e86e43e5 extends Twig_Template
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
        $__internal_e946d77c314f45c3cb26367464a392efe1cda2caee12238b1f826c4700636157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e946d77c314f45c3cb26367464a392efe1cda2caee12238b1f826c4700636157->enter($__internal_e946d77c314f45c3cb26367464a392efe1cda2caee12238b1f826c4700636157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6b18375333ae6078b51df0c2f7025464bdaff5725db492b446b6d8f974a88df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b18375333ae6078b51df0c2f7025464bdaff5725db492b446b6d8f974a88df5->enter($__internal_6b18375333ae6078b51df0c2f7025464bdaff5725db492b446b6d8f974a88df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e946d77c314f45c3cb26367464a392efe1cda2caee12238b1f826c4700636157->leave($__internal_e946d77c314f45c3cb26367464a392efe1cda2caee12238b1f826c4700636157_prof);

        
        $__internal_6b18375333ae6078b51df0c2f7025464bdaff5725db492b446b6d8f974a88df5->leave($__internal_6b18375333ae6078b51df0c2f7025464bdaff5725db492b446b6d8f974a88df5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
