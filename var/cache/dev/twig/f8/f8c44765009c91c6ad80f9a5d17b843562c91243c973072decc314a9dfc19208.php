<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c4de54adf5663681be7260d0442acc586c45c1b37cbd87068df9117d0e62fe22 extends Twig_Template
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
        $__internal_7e34540363597335644b4807d9fd3711acb5bdef1cfb1566e28c9d017bc0ae14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e34540363597335644b4807d9fd3711acb5bdef1cfb1566e28c9d017bc0ae14->enter($__internal_7e34540363597335644b4807d9fd3711acb5bdef1cfb1566e28c9d017bc0ae14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c58af49d859144fd92e63c1342c703dd9739e90172bfe4022623f6c6b54894b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58af49d859144fd92e63c1342c703dd9739e90172bfe4022623f6c6b54894b8->enter($__internal_c58af49d859144fd92e63c1342c703dd9739e90172bfe4022623f6c6b54894b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7e34540363597335644b4807d9fd3711acb5bdef1cfb1566e28c9d017bc0ae14->leave($__internal_7e34540363597335644b4807d9fd3711acb5bdef1cfb1566e28c9d017bc0ae14_prof);

        
        $__internal_c58af49d859144fd92e63c1342c703dd9739e90172bfe4022623f6c6b54894b8->leave($__internal_c58af49d859144fd92e63c1342c703dd9739e90172bfe4022623f6c6b54894b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
