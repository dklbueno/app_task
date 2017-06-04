<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7692c73421665bb4b258391721842a003300148ed7f89838da35623469c4651a extends Twig_Template
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
        $__internal_727c9a0663ae58bf915fbb13cc5b52303f359b4e0b43ef9d9800abf415832a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727c9a0663ae58bf915fbb13cc5b52303f359b4e0b43ef9d9800abf415832a07->enter($__internal_727c9a0663ae58bf915fbb13cc5b52303f359b4e0b43ef9d9800abf415832a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_22e3b5c677e563478fc75df04b673416b6dcc203b3d5729146487e2164dac1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e3b5c677e563478fc75df04b673416b6dcc203b3d5729146487e2164dac1c2->enter($__internal_22e3b5c677e563478fc75df04b673416b6dcc203b3d5729146487e2164dac1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_727c9a0663ae58bf915fbb13cc5b52303f359b4e0b43ef9d9800abf415832a07->leave($__internal_727c9a0663ae58bf915fbb13cc5b52303f359b4e0b43ef9d9800abf415832a07_prof);

        
        $__internal_22e3b5c677e563478fc75df04b673416b6dcc203b3d5729146487e2164dac1c2->leave($__internal_22e3b5c677e563478fc75df04b673416b6dcc203b3d5729146487e2164dac1c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
