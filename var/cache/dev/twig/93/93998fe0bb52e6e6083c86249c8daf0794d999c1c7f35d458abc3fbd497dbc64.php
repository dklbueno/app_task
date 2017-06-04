<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e104d2dd4ae8e9f11c467a989438ea382a64dd33de457ead8a14ebda4ed5c972 extends Twig_Template
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
        $__internal_72a06b63cd3069a34ad2068c50cc06afd600d84ea7bb87905e694f899cc6717a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a06b63cd3069a34ad2068c50cc06afd600d84ea7bb87905e694f899cc6717a->enter($__internal_72a06b63cd3069a34ad2068c50cc06afd600d84ea7bb87905e694f899cc6717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fe687ca4475183a32822d32815ab693d68b29ba452562f392c390ecf1db96044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe687ca4475183a32822d32815ab693d68b29ba452562f392c390ecf1db96044->enter($__internal_fe687ca4475183a32822d32815ab693d68b29ba452562f392c390ecf1db96044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_72a06b63cd3069a34ad2068c50cc06afd600d84ea7bb87905e694f899cc6717a->leave($__internal_72a06b63cd3069a34ad2068c50cc06afd600d84ea7bb87905e694f899cc6717a_prof);

        
        $__internal_fe687ca4475183a32822d32815ab693d68b29ba452562f392c390ecf1db96044->leave($__internal_fe687ca4475183a32822d32815ab693d68b29ba452562f392c390ecf1db96044_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
