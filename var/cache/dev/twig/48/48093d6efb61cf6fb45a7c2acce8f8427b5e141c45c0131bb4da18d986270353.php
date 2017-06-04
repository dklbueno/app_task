<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6b16a74fee0753422c89e8ee9625121112eb61698e0ad9b135610cdf2e20a4f3 extends Twig_Template
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
        $__internal_f94b36f7d6dc9a33af53758b15f2a7c974903fae909baee9b1597453d781abc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94b36f7d6dc9a33af53758b15f2a7c974903fae909baee9b1597453d781abc5->enter($__internal_f94b36f7d6dc9a33af53758b15f2a7c974903fae909baee9b1597453d781abc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_787afdbc3b2403f55b9a970a38bf57c2e2fa576c9b2e0fc5c56364e1c7a5bfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787afdbc3b2403f55b9a970a38bf57c2e2fa576c9b2e0fc5c56364e1c7a5bfd3->enter($__internal_787afdbc3b2403f55b9a970a38bf57c2e2fa576c9b2e0fc5c56364e1c7a5bfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f94b36f7d6dc9a33af53758b15f2a7c974903fae909baee9b1597453d781abc5->leave($__internal_f94b36f7d6dc9a33af53758b15f2a7c974903fae909baee9b1597453d781abc5_prof);

        
        $__internal_787afdbc3b2403f55b9a970a38bf57c2e2fa576c9b2e0fc5c56364e1c7a5bfd3->leave($__internal_787afdbc3b2403f55b9a970a38bf57c2e2fa576c9b2e0fc5c56364e1c7a5bfd3_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
