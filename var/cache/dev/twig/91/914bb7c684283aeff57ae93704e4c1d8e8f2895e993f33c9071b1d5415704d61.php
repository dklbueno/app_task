<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9e61da081f8b9b3dbd3980a3990101229162a915d7850aa6eda90f66581a6ebb extends Twig_Template
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
        $__internal_1e651057be609f0de8a0478b9696a22ce84c50ce329fd00e7496af3e7dbc3bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e651057be609f0de8a0478b9696a22ce84c50ce329fd00e7496af3e7dbc3bde->enter($__internal_1e651057be609f0de8a0478b9696a22ce84c50ce329fd00e7496af3e7dbc3bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4619c45ac1c9d44ee7d5267430ffa4d6d8afa7f1411e03b8a38f60401b274cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4619c45ac1c9d44ee7d5267430ffa4d6d8afa7f1411e03b8a38f60401b274cde->enter($__internal_4619c45ac1c9d44ee7d5267430ffa4d6d8afa7f1411e03b8a38f60401b274cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1e651057be609f0de8a0478b9696a22ce84c50ce329fd00e7496af3e7dbc3bde->leave($__internal_1e651057be609f0de8a0478b9696a22ce84c50ce329fd00e7496af3e7dbc3bde_prof);

        
        $__internal_4619c45ac1c9d44ee7d5267430ffa4d6d8afa7f1411e03b8a38f60401b274cde->leave($__internal_4619c45ac1c9d44ee7d5267430ffa4d6d8afa7f1411e03b8a38f60401b274cde_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
