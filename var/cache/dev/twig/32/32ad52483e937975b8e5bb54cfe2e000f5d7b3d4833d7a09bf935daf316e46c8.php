<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_84b106f657a3098fb46d20a8c59c453221cf0c558f1df66ddaa1f9a32fd88eb9 extends Twig_Template
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
        $__internal_7ec69739badce17383168ea10e04d65390ff9b1bf7953b00963c0776215ca279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec69739badce17383168ea10e04d65390ff9b1bf7953b00963c0776215ca279->enter($__internal_7ec69739badce17383168ea10e04d65390ff9b1bf7953b00963c0776215ca279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3bd3b7d7f3bb84f1e4816df96c75363a4c7e394368da290cf44144f8d8da1d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd3b7d7f3bb84f1e4816df96c75363a4c7e394368da290cf44144f8d8da1d6e->enter($__internal_3bd3b7d7f3bb84f1e4816df96c75363a4c7e394368da290cf44144f8d8da1d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7ec69739badce17383168ea10e04d65390ff9b1bf7953b00963c0776215ca279->leave($__internal_7ec69739badce17383168ea10e04d65390ff9b1bf7953b00963c0776215ca279_prof);

        
        $__internal_3bd3b7d7f3bb84f1e4816df96c75363a4c7e394368da290cf44144f8d8da1d6e->leave($__internal_3bd3b7d7f3bb84f1e4816df96c75363a4c7e394368da290cf44144f8d8da1d6e_prof);

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
", "@Framework/Form/radio_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
