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
        $__internal_9f88f0c72570f870d77a378cfdf9d29ce9da8b1a273d4ccdc17ffae351425758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f88f0c72570f870d77a378cfdf9d29ce9da8b1a273d4ccdc17ffae351425758->enter($__internal_9f88f0c72570f870d77a378cfdf9d29ce9da8b1a273d4ccdc17ffae351425758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_176bb88952f6909252be589c68f48be837e84a993e3815bc7fcd1ebe9783aa07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176bb88952f6909252be589c68f48be837e84a993e3815bc7fcd1ebe9783aa07->enter($__internal_176bb88952f6909252be589c68f48be837e84a993e3815bc7fcd1ebe9783aa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9f88f0c72570f870d77a378cfdf9d29ce9da8b1a273d4ccdc17ffae351425758->leave($__internal_9f88f0c72570f870d77a378cfdf9d29ce9da8b1a273d4ccdc17ffae351425758_prof);

        
        $__internal_176bb88952f6909252be589c68f48be837e84a993e3815bc7fcd1ebe9783aa07->leave($__internal_176bb88952f6909252be589c68f48be837e84a993e3815bc7fcd1ebe9783aa07_prof);

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
