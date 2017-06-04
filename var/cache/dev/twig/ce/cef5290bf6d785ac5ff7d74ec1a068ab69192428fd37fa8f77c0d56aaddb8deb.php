<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d31da0703e0a7c0baf8bfc27e9cfd0f2ee983e9bc3cdbabf8fa64de91e02571d extends Twig_Template
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
        $__internal_6aeb837dc85b6451cc74a27b83f0bdb102d7e08d02265f500e295104ce7c1d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aeb837dc85b6451cc74a27b83f0bdb102d7e08d02265f500e295104ce7c1d04->enter($__internal_6aeb837dc85b6451cc74a27b83f0bdb102d7e08d02265f500e295104ce7c1d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_76ab5c7a3b9e156a16d7c33410be0897605efa3af284a92f82a349e231e3819f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ab5c7a3b9e156a16d7c33410be0897605efa3af284a92f82a349e231e3819f->enter($__internal_76ab5c7a3b9e156a16d7c33410be0897605efa3af284a92f82a349e231e3819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6aeb837dc85b6451cc74a27b83f0bdb102d7e08d02265f500e295104ce7c1d04->leave($__internal_6aeb837dc85b6451cc74a27b83f0bdb102d7e08d02265f500e295104ce7c1d04_prof);

        
        $__internal_76ab5c7a3b9e156a16d7c33410be0897605efa3af284a92f82a349e231e3819f->leave($__internal_76ab5c7a3b9e156a16d7c33410be0897605efa3af284a92f82a349e231e3819f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
