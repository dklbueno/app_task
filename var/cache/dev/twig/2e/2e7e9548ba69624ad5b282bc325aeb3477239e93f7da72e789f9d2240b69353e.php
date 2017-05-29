<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_08c3b270579401c05a51138513a06940460a109376da1bfd5bd283d951aff0b0 extends Twig_Template
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
        $__internal_40f750ecfec5bd42d664755e9973ee12dac2097d762b134cba7cbde481fb1168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f750ecfec5bd42d664755e9973ee12dac2097d762b134cba7cbde481fb1168->enter($__internal_40f750ecfec5bd42d664755e9973ee12dac2097d762b134cba7cbde481fb1168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_706e0099ff2243e17af3e1547d190d72f6e39ccc2862a8329ad33258ce2acadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706e0099ff2243e17af3e1547d190d72f6e39ccc2862a8329ad33258ce2acadd->enter($__internal_706e0099ff2243e17af3e1547d190d72f6e39ccc2862a8329ad33258ce2acadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_40f750ecfec5bd42d664755e9973ee12dac2097d762b134cba7cbde481fb1168->leave($__internal_40f750ecfec5bd42d664755e9973ee12dac2097d762b134cba7cbde481fb1168_prof);

        
        $__internal_706e0099ff2243e17af3e1547d190d72f6e39ccc2862a8329ad33258ce2acadd->leave($__internal_706e0099ff2243e17af3e1547d190d72f6e39ccc2862a8329ad33258ce2acadd_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
