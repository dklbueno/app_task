<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_01b13984b04ef8c05f40447ab4219691884e134386be6f3e2ad2172478b6f07d extends Twig_Template
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
        $__internal_01143df5f77ef1d8a4279498470c714f5ca165f12e9d3707294c4852fa40ed3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01143df5f77ef1d8a4279498470c714f5ca165f12e9d3707294c4852fa40ed3d->enter($__internal_01143df5f77ef1d8a4279498470c714f5ca165f12e9d3707294c4852fa40ed3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ac57071f29cf6583d40177d27648e715be5ce9e899fa5f37d4d86aba1f263b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac57071f29cf6583d40177d27648e715be5ce9e899fa5f37d4d86aba1f263b14->enter($__internal_ac57071f29cf6583d40177d27648e715be5ce9e899fa5f37d4d86aba1f263b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_01143df5f77ef1d8a4279498470c714f5ca165f12e9d3707294c4852fa40ed3d->leave($__internal_01143df5f77ef1d8a4279498470c714f5ca165f12e9d3707294c4852fa40ed3d_prof);

        
        $__internal_ac57071f29cf6583d40177d27648e715be5ce9e899fa5f37d4d86aba1f263b14->leave($__internal_ac57071f29cf6583d40177d27648e715be5ce9e899fa5f37d4d86aba1f263b14_prof);

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
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
