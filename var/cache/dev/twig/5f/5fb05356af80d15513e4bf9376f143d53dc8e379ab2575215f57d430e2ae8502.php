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
        $__internal_3f667bc028d76a2e17114f769e7e1b2241e37ca73517a48204d4e2472d28244a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f667bc028d76a2e17114f769e7e1b2241e37ca73517a48204d4e2472d28244a->enter($__internal_3f667bc028d76a2e17114f769e7e1b2241e37ca73517a48204d4e2472d28244a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f1982a5b6cc011f5267e72af21a4b1c3f60763820dd1a6be725ef300c89f22f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1982a5b6cc011f5267e72af21a4b1c3f60763820dd1a6be725ef300c89f22f3->enter($__internal_f1982a5b6cc011f5267e72af21a4b1c3f60763820dd1a6be725ef300c89f22f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3f667bc028d76a2e17114f769e7e1b2241e37ca73517a48204d4e2472d28244a->leave($__internal_3f667bc028d76a2e17114f769e7e1b2241e37ca73517a48204d4e2472d28244a_prof);

        
        $__internal_f1982a5b6cc011f5267e72af21a4b1c3f60763820dd1a6be725ef300c89f22f3->leave($__internal_f1982a5b6cc011f5267e72af21a4b1c3f60763820dd1a6be725ef300c89f22f3_prof);

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
