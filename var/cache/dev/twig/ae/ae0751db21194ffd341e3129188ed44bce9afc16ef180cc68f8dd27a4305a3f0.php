<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e6d260601ffd8030fe8a4a6958f4f568d00bff0d7a8a73fd82484cc760714f68 extends Twig_Template
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
        $__internal_e08248b068ca57aef1836b261167d889f065a1e7206efe63ff98d000f4751a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08248b068ca57aef1836b261167d889f065a1e7206efe63ff98d000f4751a11->enter($__internal_e08248b068ca57aef1836b261167d889f065a1e7206efe63ff98d000f4751a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ea255a900362c13a61ba53f8e98c0c91a01bf055cba0718feee401503e4901ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea255a900362c13a61ba53f8e98c0c91a01bf055cba0718feee401503e4901ce->enter($__internal_ea255a900362c13a61ba53f8e98c0c91a01bf055cba0718feee401503e4901ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e08248b068ca57aef1836b261167d889f065a1e7206efe63ff98d000f4751a11->leave($__internal_e08248b068ca57aef1836b261167d889f065a1e7206efe63ff98d000f4751a11_prof);

        
        $__internal_ea255a900362c13a61ba53f8e98c0c91a01bf055cba0718feee401503e4901ce->leave($__internal_ea255a900362c13a61ba53f8e98c0c91a01bf055cba0718feee401503e4901ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
