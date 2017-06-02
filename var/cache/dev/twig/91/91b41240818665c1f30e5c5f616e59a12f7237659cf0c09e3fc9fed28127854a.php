<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cc0cddd1c9fd18ba1b8d8ff4375689e355f838a605e40f292a97da4f8c946f37 extends Twig_Template
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
        $__internal_09c3487945992449bfa0c392c2d716f5fb8b0ebf7c9ff91340d48b2c9ac251e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c3487945992449bfa0c392c2d716f5fb8b0ebf7c9ff91340d48b2c9ac251e8->enter($__internal_09c3487945992449bfa0c392c2d716f5fb8b0ebf7c9ff91340d48b2c9ac251e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4b028d7c5e625a435ba5bfdc3662cedbdb4fbe71aef9935dec05d4be452f1815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b028d7c5e625a435ba5bfdc3662cedbdb4fbe71aef9935dec05d4be452f1815->enter($__internal_4b028d7c5e625a435ba5bfdc3662cedbdb4fbe71aef9935dec05d4be452f1815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_09c3487945992449bfa0c392c2d716f5fb8b0ebf7c9ff91340d48b2c9ac251e8->leave($__internal_09c3487945992449bfa0c392c2d716f5fb8b0ebf7c9ff91340d48b2c9ac251e8_prof);

        
        $__internal_4b028d7c5e625a435ba5bfdc3662cedbdb4fbe71aef9935dec05d4be452f1815->leave($__internal_4b028d7c5e625a435ba5bfdc3662cedbdb4fbe71aef9935dec05d4be452f1815_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
