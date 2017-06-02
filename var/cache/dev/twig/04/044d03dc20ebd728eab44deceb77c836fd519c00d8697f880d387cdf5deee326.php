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
        $__internal_165cbba4250628fc3ef41dfe909aa281873e7170d471ad73c15fa16b35c5809f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165cbba4250628fc3ef41dfe909aa281873e7170d471ad73c15fa16b35c5809f->enter($__internal_165cbba4250628fc3ef41dfe909aa281873e7170d471ad73c15fa16b35c5809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_399214522a735010162da9de29cb4b1880571053ed24eae961cbcaec64c0c8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399214522a735010162da9de29cb4b1880571053ed24eae961cbcaec64c0c8a0->enter($__internal_399214522a735010162da9de29cb4b1880571053ed24eae961cbcaec64c0c8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_165cbba4250628fc3ef41dfe909aa281873e7170d471ad73c15fa16b35c5809f->leave($__internal_165cbba4250628fc3ef41dfe909aa281873e7170d471ad73c15fa16b35c5809f_prof);

        
        $__internal_399214522a735010162da9de29cb4b1880571053ed24eae961cbcaec64c0c8a0->leave($__internal_399214522a735010162da9de29cb4b1880571053ed24eae961cbcaec64c0c8a0_prof);

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
