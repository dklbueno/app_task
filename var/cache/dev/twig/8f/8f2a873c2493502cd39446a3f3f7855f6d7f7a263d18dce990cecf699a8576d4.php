<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5a74f2a4e025121feea0a86b321f250b255e599f1333abf504369f9414f1e089 extends Twig_Template
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
        $__internal_cbebcac85edd8873cfc88e940b43ca5fcc685fe01a4d008810d20900fb13ce4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbebcac85edd8873cfc88e940b43ca5fcc685fe01a4d008810d20900fb13ce4d->enter($__internal_cbebcac85edd8873cfc88e940b43ca5fcc685fe01a4d008810d20900fb13ce4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_678f614aa7fab8d8779db87e529a31c178f8c6323890a5638b1799b6c174ad9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678f614aa7fab8d8779db87e529a31c178f8c6323890a5638b1799b6c174ad9b->enter($__internal_678f614aa7fab8d8779db87e529a31c178f8c6323890a5638b1799b6c174ad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cbebcac85edd8873cfc88e940b43ca5fcc685fe01a4d008810d20900fb13ce4d->leave($__internal_cbebcac85edd8873cfc88e940b43ca5fcc685fe01a4d008810d20900fb13ce4d_prof);

        
        $__internal_678f614aa7fab8d8779db87e529a31c178f8c6323890a5638b1799b6c174ad9b->leave($__internal_678f614aa7fab8d8779db87e529a31c178f8c6323890a5638b1799b6c174ad9b_prof);

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
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
