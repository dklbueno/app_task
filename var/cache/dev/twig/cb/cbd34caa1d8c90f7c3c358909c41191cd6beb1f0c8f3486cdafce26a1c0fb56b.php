<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_4ea4309f0a44a087699a6a76b5e9f3b53cd866bf5e9a689bb66be2981f2232e1 extends Twig_Template
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
        $__internal_004f4d7fc09e83a47a46ec5f28a25dd2ad66e84e0aca5db1d54de79ef6f0df18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004f4d7fc09e83a47a46ec5f28a25dd2ad66e84e0aca5db1d54de79ef6f0df18->enter($__internal_004f4d7fc09e83a47a46ec5f28a25dd2ad66e84e0aca5db1d54de79ef6f0df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f9971610a803f38e931dc0f0668f12088d8032be7f597ef168eaed3675e00498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9971610a803f38e931dc0f0668f12088d8032be7f597ef168eaed3675e00498->enter($__internal_f9971610a803f38e931dc0f0668f12088d8032be7f597ef168eaed3675e00498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_004f4d7fc09e83a47a46ec5f28a25dd2ad66e84e0aca5db1d54de79ef6f0df18->leave($__internal_004f4d7fc09e83a47a46ec5f28a25dd2ad66e84e0aca5db1d54de79ef6f0df18_prof);

        
        $__internal_f9971610a803f38e931dc0f0668f12088d8032be7f597ef168eaed3675e00498->leave($__internal_f9971610a803f38e931dc0f0668f12088d8032be7f597ef168eaed3675e00498_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
