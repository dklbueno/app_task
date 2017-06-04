<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f926cd53e490646fcd550f15e27f7ccc4408429042d4f7be461ad6597171a665 extends Twig_Template
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
        $__internal_08e7f142856cdc1ae74c85fb76c26d880378dbb976091209c8f0795c82fa54dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e7f142856cdc1ae74c85fb76c26d880378dbb976091209c8f0795c82fa54dc->enter($__internal_08e7f142856cdc1ae74c85fb76c26d880378dbb976091209c8f0795c82fa54dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_54dd74a50b15ad2c505f9573c2f7a7d71efac4d0c0b9b5eabbbe154bd1524276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dd74a50b15ad2c505f9573c2f7a7d71efac4d0c0b9b5eabbbe154bd1524276->enter($__internal_54dd74a50b15ad2c505f9573c2f7a7d71efac4d0c0b9b5eabbbe154bd1524276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_08e7f142856cdc1ae74c85fb76c26d880378dbb976091209c8f0795c82fa54dc->leave($__internal_08e7f142856cdc1ae74c85fb76c26d880378dbb976091209c8f0795c82fa54dc_prof);

        
        $__internal_54dd74a50b15ad2c505f9573c2f7a7d71efac4d0c0b9b5eabbbe154bd1524276->leave($__internal_54dd74a50b15ad2c505f9573c2f7a7d71efac4d0c0b9b5eabbbe154bd1524276_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
