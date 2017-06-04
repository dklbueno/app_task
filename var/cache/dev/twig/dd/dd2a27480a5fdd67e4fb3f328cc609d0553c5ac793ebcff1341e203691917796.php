<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7ef2a8b892d394ac69d8f571d56e9deb96f566bc66cb2ebcd940218780d05985 extends Twig_Template
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
        $__internal_f590c13139727483ad4b75e1797f40309616275334d6ce92771d5f2a780969f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f590c13139727483ad4b75e1797f40309616275334d6ce92771d5f2a780969f6->enter($__internal_f590c13139727483ad4b75e1797f40309616275334d6ce92771d5f2a780969f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f7fa1842d5241610fa361ad115ca7235bf3c07b19261c07b0f8592782063afe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fa1842d5241610fa361ad115ca7235bf3c07b19261c07b0f8592782063afe9->enter($__internal_f7fa1842d5241610fa361ad115ca7235bf3c07b19261c07b0f8592782063afe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f590c13139727483ad4b75e1797f40309616275334d6ce92771d5f2a780969f6->leave($__internal_f590c13139727483ad4b75e1797f40309616275334d6ce92771d5f2a780969f6_prof);

        
        $__internal_f7fa1842d5241610fa361ad115ca7235bf3c07b19261c07b0f8592782063afe9->leave($__internal_f7fa1842d5241610fa361ad115ca7235bf3c07b19261c07b0f8592782063afe9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
