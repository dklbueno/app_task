<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_83f52d86d53a2f592011bda7c47de2e800078d792c8e3d177af429a4791cbb61 extends Twig_Template
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
        $__internal_00e7b82955e20e5cbbf88a2e2fd3316029c16368c2fc18245e19888a7ee76902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e7b82955e20e5cbbf88a2e2fd3316029c16368c2fc18245e19888a7ee76902->enter($__internal_00e7b82955e20e5cbbf88a2e2fd3316029c16368c2fc18245e19888a7ee76902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e060cfa83fb72e6cbe8fb65600fa2a997bca21c5590484114b1ed0b86215ede5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e060cfa83fb72e6cbe8fb65600fa2a997bca21c5590484114b1ed0b86215ede5->enter($__internal_e060cfa83fb72e6cbe8fb65600fa2a997bca21c5590484114b1ed0b86215ede5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_00e7b82955e20e5cbbf88a2e2fd3316029c16368c2fc18245e19888a7ee76902->leave($__internal_00e7b82955e20e5cbbf88a2e2fd3316029c16368c2fc18245e19888a7ee76902_prof);

        
        $__internal_e060cfa83fb72e6cbe8fb65600fa2a997bca21c5590484114b1ed0b86215ede5->leave($__internal_e060cfa83fb72e6cbe8fb65600fa2a997bca21c5590484114b1ed0b86215ede5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
