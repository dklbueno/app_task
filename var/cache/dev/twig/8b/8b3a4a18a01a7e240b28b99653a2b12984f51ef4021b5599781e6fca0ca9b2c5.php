<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc65741c9391b50833c3e4a76b2f0d71b6164837036a2349527863b7ea53940b extends Twig_Template
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
        $__internal_52fddbe8a8e0be67ff13c9519bc753f0ef2b00539dae072635a5e4203f8fd1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fddbe8a8e0be67ff13c9519bc753f0ef2b00539dae072635a5e4203f8fd1ee->enter($__internal_52fddbe8a8e0be67ff13c9519bc753f0ef2b00539dae072635a5e4203f8fd1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2b7807eb8baeefe00930ee57c01838299025ca9bdcc0e3dcd7e705d5c06b0160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7807eb8baeefe00930ee57c01838299025ca9bdcc0e3dcd7e705d5c06b0160->enter($__internal_2b7807eb8baeefe00930ee57c01838299025ca9bdcc0e3dcd7e705d5c06b0160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_52fddbe8a8e0be67ff13c9519bc753f0ef2b00539dae072635a5e4203f8fd1ee->leave($__internal_52fddbe8a8e0be67ff13c9519bc753f0ef2b00539dae072635a5e4203f8fd1ee_prof);

        
        $__internal_2b7807eb8baeefe00930ee57c01838299025ca9bdcc0e3dcd7e705d5c06b0160->leave($__internal_2b7807eb8baeefe00930ee57c01838299025ca9bdcc0e3dcd7e705d5c06b0160_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
