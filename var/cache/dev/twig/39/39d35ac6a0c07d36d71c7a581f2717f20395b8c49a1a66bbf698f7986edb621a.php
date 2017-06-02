<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_70b5815c89b3779217b1b98b5f5c9f265b3abe0bbdd23228d28a990f526821c6 extends Twig_Template
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
        $__internal_e337efee4746ee36c4840d0ddfbb8191882efd800b35c5c069dfed36632f7f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e337efee4746ee36c4840d0ddfbb8191882efd800b35c5c069dfed36632f7f9c->enter($__internal_e337efee4746ee36c4840d0ddfbb8191882efd800b35c5c069dfed36632f7f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a34703dc1422953f79a222353b4d59b29a4ab8b5df53c3abf409fe88db4a2803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34703dc1422953f79a222353b4d59b29a4ab8b5df53c3abf409fe88db4a2803->enter($__internal_a34703dc1422953f79a222353b4d59b29a4ab8b5df53c3abf409fe88db4a2803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e337efee4746ee36c4840d0ddfbb8191882efd800b35c5c069dfed36632f7f9c->leave($__internal_e337efee4746ee36c4840d0ddfbb8191882efd800b35c5c069dfed36632f7f9c_prof);

        
        $__internal_a34703dc1422953f79a222353b4d59b29a4ab8b5df53c3abf409fe88db4a2803->leave($__internal_a34703dc1422953f79a222353b4d59b29a4ab8b5df53c3abf409fe88db4a2803_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
