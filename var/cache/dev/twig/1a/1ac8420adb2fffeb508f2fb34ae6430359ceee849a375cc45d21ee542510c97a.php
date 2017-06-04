<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2a56f46e941e97b77c695809c470307630c2a46a9c84a1fa53cd364cfd9dd3b0 extends Twig_Template
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
        $__internal_a35fff39fc6251431ac8354aaeba5dbc7d7c26d5d4e12c10d93b0da20cfb985a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35fff39fc6251431ac8354aaeba5dbc7d7c26d5d4e12c10d93b0da20cfb985a->enter($__internal_a35fff39fc6251431ac8354aaeba5dbc7d7c26d5d4e12c10d93b0da20cfb985a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_31dbf4117ee40af8750aef3ae418a9cddd63e237b6572244ba096d09011bd361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dbf4117ee40af8750aef3ae418a9cddd63e237b6572244ba096d09011bd361->enter($__internal_31dbf4117ee40af8750aef3ae418a9cddd63e237b6572244ba096d09011bd361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a35fff39fc6251431ac8354aaeba5dbc7d7c26d5d4e12c10d93b0da20cfb985a->leave($__internal_a35fff39fc6251431ac8354aaeba5dbc7d7c26d5d4e12c10d93b0da20cfb985a_prof);

        
        $__internal_31dbf4117ee40af8750aef3ae418a9cddd63e237b6572244ba096d09011bd361->leave($__internal_31dbf4117ee40af8750aef3ae418a9cddd63e237b6572244ba096d09011bd361_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
