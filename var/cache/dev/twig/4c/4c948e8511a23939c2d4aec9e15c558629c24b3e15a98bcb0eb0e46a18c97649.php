<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8949f60c0002bffaf790f6dc6ce9fbb36322217fbfcbcb15b4d4d05d0495b1f5 extends Twig_Template
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
        $__internal_446730f27ae1ad36f5f2fee3c67241d3383ddc32fb2c638f4824e5d178837285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446730f27ae1ad36f5f2fee3c67241d3383ddc32fb2c638f4824e5d178837285->enter($__internal_446730f27ae1ad36f5f2fee3c67241d3383ddc32fb2c638f4824e5d178837285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9a5e464869190f4cd5326f7f723ee52398bd5941dfed658c8c0e554da5148388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5e464869190f4cd5326f7f723ee52398bd5941dfed658c8c0e554da5148388->enter($__internal_9a5e464869190f4cd5326f7f723ee52398bd5941dfed658c8c0e554da5148388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_446730f27ae1ad36f5f2fee3c67241d3383ddc32fb2c638f4824e5d178837285->leave($__internal_446730f27ae1ad36f5f2fee3c67241d3383ddc32fb2c638f4824e5d178837285_prof);

        
        $__internal_9a5e464869190f4cd5326f7f723ee52398bd5941dfed658c8c0e554da5148388->leave($__internal_9a5e464869190f4cd5326f7f723ee52398bd5941dfed658c8c0e554da5148388_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
