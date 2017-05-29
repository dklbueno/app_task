<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dd4e4940dbc2867ebc586c262126a0b3d9bfc6b5802db10addcb565330438ef1 extends Twig_Template
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
        $__internal_febc93cb251a37d479aeefb57f6d479e5b46a8528abb4793b2ea44aaa8c5329d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febc93cb251a37d479aeefb57f6d479e5b46a8528abb4793b2ea44aaa8c5329d->enter($__internal_febc93cb251a37d479aeefb57f6d479e5b46a8528abb4793b2ea44aaa8c5329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_58cb7776a7094a69f0722d587ac6b231bf487b3638cca10b386e95d0ddee3911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cb7776a7094a69f0722d587ac6b231bf487b3638cca10b386e95d0ddee3911->enter($__internal_58cb7776a7094a69f0722d587ac6b231bf487b3638cca10b386e95d0ddee3911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_febc93cb251a37d479aeefb57f6d479e5b46a8528abb4793b2ea44aaa8c5329d->leave($__internal_febc93cb251a37d479aeefb57f6d479e5b46a8528abb4793b2ea44aaa8c5329d_prof);

        
        $__internal_58cb7776a7094a69f0722d587ac6b231bf487b3638cca10b386e95d0ddee3911->leave($__internal_58cb7776a7094a69f0722d587ac6b231bf487b3638cca10b386e95d0ddee3911_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
