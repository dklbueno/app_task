<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_71abc6e57f11d4599b44320720eb09762b4855e7408cfa81b66850e9f11be516 extends Twig_Template
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
        $__internal_ed802fa83f0b71c852846ff3cd4adadf30a68d8e756487da88ca5bf169c8fd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed802fa83f0b71c852846ff3cd4adadf30a68d8e756487da88ca5bf169c8fd27->enter($__internal_ed802fa83f0b71c852846ff3cd4adadf30a68d8e756487da88ca5bf169c8fd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_39b3c6654320029f3beed8b26c71a3872972ce9515a7fabb8eeb6187284dde16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b3c6654320029f3beed8b26c71a3872972ce9515a7fabb8eeb6187284dde16->enter($__internal_39b3c6654320029f3beed8b26c71a3872972ce9515a7fabb8eeb6187284dde16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ed802fa83f0b71c852846ff3cd4adadf30a68d8e756487da88ca5bf169c8fd27->leave($__internal_ed802fa83f0b71c852846ff3cd4adadf30a68d8e756487da88ca5bf169c8fd27_prof);

        
        $__internal_39b3c6654320029f3beed8b26c71a3872972ce9515a7fabb8eeb6187284dde16->leave($__internal_39b3c6654320029f3beed8b26c71a3872972ce9515a7fabb8eeb6187284dde16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
