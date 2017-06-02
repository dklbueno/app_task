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
        $__internal_3f00aeb38b0e2ae42b66ade8aa8ae76bf8a71bd2040aae1c1460992031e3bf63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f00aeb38b0e2ae42b66ade8aa8ae76bf8a71bd2040aae1c1460992031e3bf63->enter($__internal_3f00aeb38b0e2ae42b66ade8aa8ae76bf8a71bd2040aae1c1460992031e3bf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_237b31439e35b52a2cb9989b6c982d4d990235371fc9280c9f471814462e561f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237b31439e35b52a2cb9989b6c982d4d990235371fc9280c9f471814462e561f->enter($__internal_237b31439e35b52a2cb9989b6c982d4d990235371fc9280c9f471814462e561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3f00aeb38b0e2ae42b66ade8aa8ae76bf8a71bd2040aae1c1460992031e3bf63->leave($__internal_3f00aeb38b0e2ae42b66ade8aa8ae76bf8a71bd2040aae1c1460992031e3bf63_prof);

        
        $__internal_237b31439e35b52a2cb9989b6c982d4d990235371fc9280c9f471814462e561f->leave($__internal_237b31439e35b52a2cb9989b6c982d4d990235371fc9280c9f471814462e561f_prof);

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
