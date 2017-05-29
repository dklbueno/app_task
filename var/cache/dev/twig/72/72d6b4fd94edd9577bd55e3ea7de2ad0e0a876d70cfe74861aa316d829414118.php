<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6b5896a0478642b27c3aaa6200aae55742d84135ead24102603d59fba71a1ae9 extends Twig_Template
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
        $__internal_3b7f6edaf2983d33e079196fb2f496b664cda41589a2cdeabc2f081be05f4ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7f6edaf2983d33e079196fb2f496b664cda41589a2cdeabc2f081be05f4ab3->enter($__internal_3b7f6edaf2983d33e079196fb2f496b664cda41589a2cdeabc2f081be05f4ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a5070731ced48061faadd03d7a5e7928b925ec90b21c0f223678cc1f1f1d9bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5070731ced48061faadd03d7a5e7928b925ec90b21c0f223678cc1f1f1d9bd6->enter($__internal_a5070731ced48061faadd03d7a5e7928b925ec90b21c0f223678cc1f1f1d9bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3b7f6edaf2983d33e079196fb2f496b664cda41589a2cdeabc2f081be05f4ab3->leave($__internal_3b7f6edaf2983d33e079196fb2f496b664cda41589a2cdeabc2f081be05f4ab3_prof);

        
        $__internal_a5070731ced48061faadd03d7a5e7928b925ec90b21c0f223678cc1f1f1d9bd6->leave($__internal_a5070731ced48061faadd03d7a5e7928b925ec90b21c0f223678cc1f1f1d9bd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
