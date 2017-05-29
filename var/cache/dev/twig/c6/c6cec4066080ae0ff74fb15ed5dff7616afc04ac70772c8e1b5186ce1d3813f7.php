<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e542bf934096eb4a53df8c1887e34a1a1285353752fd318751329bb42b2ce5f9 extends Twig_Template
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
        $__internal_17d03d1df50b57573420cdb32f4a31c04e5e7eea5ae595fef3b31edfac01196d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d03d1df50b57573420cdb32f4a31c04e5e7eea5ae595fef3b31edfac01196d->enter($__internal_17d03d1df50b57573420cdb32f4a31c04e5e7eea5ae595fef3b31edfac01196d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_816dcda8ba0af6caa9bac3ad23008828739b1dd4cf902b1b96a4df9682f1b36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816dcda8ba0af6caa9bac3ad23008828739b1dd4cf902b1b96a4df9682f1b36f->enter($__internal_816dcda8ba0af6caa9bac3ad23008828739b1dd4cf902b1b96a4df9682f1b36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_17d03d1df50b57573420cdb32f4a31c04e5e7eea5ae595fef3b31edfac01196d->leave($__internal_17d03d1df50b57573420cdb32f4a31c04e5e7eea5ae595fef3b31edfac01196d_prof);

        
        $__internal_816dcda8ba0af6caa9bac3ad23008828739b1dd4cf902b1b96a4df9682f1b36f->leave($__internal_816dcda8ba0af6caa9bac3ad23008828739b1dd4cf902b1b96a4df9682f1b36f_prof);

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
", "@Framework/Form/container_attributes.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
