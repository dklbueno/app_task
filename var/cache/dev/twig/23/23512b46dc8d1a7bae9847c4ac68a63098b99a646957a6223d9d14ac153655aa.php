<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4b641fad35f8e052f44575f384e7661ae2f6daa170fdd1b1c9392f8159444291 extends Twig_Template
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
        $__internal_2376d09ff0f49886445c12e694cac4ec00b4a6db1f87d9dc4421016d7ebe3a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2376d09ff0f49886445c12e694cac4ec00b4a6db1f87d9dc4421016d7ebe3a7c->enter($__internal_2376d09ff0f49886445c12e694cac4ec00b4a6db1f87d9dc4421016d7ebe3a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_92c98b512b59080423ba53c6edc7247febeeff0fe668c5f8b53dcbb0fc0f6258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c98b512b59080423ba53c6edc7247febeeff0fe668c5f8b53dcbb0fc0f6258->enter($__internal_92c98b512b59080423ba53c6edc7247febeeff0fe668c5f8b53dcbb0fc0f6258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2376d09ff0f49886445c12e694cac4ec00b4a6db1f87d9dc4421016d7ebe3a7c->leave($__internal_2376d09ff0f49886445c12e694cac4ec00b4a6db1f87d9dc4421016d7ebe3a7c_prof);

        
        $__internal_92c98b512b59080423ba53c6edc7247febeeff0fe668c5f8b53dcbb0fc0f6258->leave($__internal_92c98b512b59080423ba53c6edc7247febeeff0fe668c5f8b53dcbb0fc0f6258_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
