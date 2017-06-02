<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e87ee8e6a3b6a54dbc2ce2a002e16d1ebc743da80efb2ab59c27995c442ab998 extends Twig_Template
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
        $__internal_cbedb70c8e4c0e18475454d60668189b43bc3f0586ff728eac544cd8e0054e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbedb70c8e4c0e18475454d60668189b43bc3f0586ff728eac544cd8e0054e92->enter($__internal_cbedb70c8e4c0e18475454d60668189b43bc3f0586ff728eac544cd8e0054e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_752c2075324861c34902a99255198be80e225493bde92577baed3e3a982bc2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752c2075324861c34902a99255198be80e225493bde92577baed3e3a982bc2d1->enter($__internal_752c2075324861c34902a99255198be80e225493bde92577baed3e3a982bc2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_cbedb70c8e4c0e18475454d60668189b43bc3f0586ff728eac544cd8e0054e92->leave($__internal_cbedb70c8e4c0e18475454d60668189b43bc3f0586ff728eac544cd8e0054e92_prof);

        
        $__internal_752c2075324861c34902a99255198be80e225493bde92577baed3e3a982bc2d1->leave($__internal_752c2075324861c34902a99255198be80e225493bde92577baed3e3a982bc2d1_prof);

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
", "@Framework/FormTable/form_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
