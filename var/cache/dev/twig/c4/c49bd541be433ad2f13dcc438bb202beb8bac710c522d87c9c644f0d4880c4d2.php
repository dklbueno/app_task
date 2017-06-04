<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e7a94fa08548a14969894fdcbe30afa8b25ae37550fa34ce6080d9119b4b3b4f extends Twig_Template
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
        $__internal_b240cf1d86b53f442eb7ce8f3004090c38b5ad952e0d3c4e4443bf2bcc164f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b240cf1d86b53f442eb7ce8f3004090c38b5ad952e0d3c4e4443bf2bcc164f49->enter($__internal_b240cf1d86b53f442eb7ce8f3004090c38b5ad952e0d3c4e4443bf2bcc164f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_44b04a38b31ae8a5f3ec3e5944a147398d9c0d6f7dc2b0ffb7d2f1b6f8588713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b04a38b31ae8a5f3ec3e5944a147398d9c0d6f7dc2b0ffb7d2f1b6f8588713->enter($__internal_44b04a38b31ae8a5f3ec3e5944a147398d9c0d6f7dc2b0ffb7d2f1b6f8588713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b240cf1d86b53f442eb7ce8f3004090c38b5ad952e0d3c4e4443bf2bcc164f49->leave($__internal_b240cf1d86b53f442eb7ce8f3004090c38b5ad952e0d3c4e4443bf2bcc164f49_prof);

        
        $__internal_44b04a38b31ae8a5f3ec3e5944a147398d9c0d6f7dc2b0ffb7d2f1b6f8588713->leave($__internal_44b04a38b31ae8a5f3ec3e5944a147398d9c0d6f7dc2b0ffb7d2f1b6f8588713_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
