<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_683023e476513584de4a1d8ef0be7947196339bc5330d358ba91f754f4697776 extends Twig_Template
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
        $__internal_d546a12ac102e809871bcbad6bd387789aaca8291461f96d91acf93d7ddc8ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d546a12ac102e809871bcbad6bd387789aaca8291461f96d91acf93d7ddc8ae9->enter($__internal_d546a12ac102e809871bcbad6bd387789aaca8291461f96d91acf93d7ddc8ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8a0186d081bdad9d5c82c42008aa7d1a7265cb0ff05fa096294fab463a19f421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0186d081bdad9d5c82c42008aa7d1a7265cb0ff05fa096294fab463a19f421->enter($__internal_8a0186d081bdad9d5c82c42008aa7d1a7265cb0ff05fa096294fab463a19f421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d546a12ac102e809871bcbad6bd387789aaca8291461f96d91acf93d7ddc8ae9->leave($__internal_d546a12ac102e809871bcbad6bd387789aaca8291461f96d91acf93d7ddc8ae9_prof);

        
        $__internal_8a0186d081bdad9d5c82c42008aa7d1a7265cb0ff05fa096294fab463a19f421->leave($__internal_8a0186d081bdad9d5c82c42008aa7d1a7265cb0ff05fa096294fab463a19f421_prof);

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
", "@Framework/Form/percent_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
