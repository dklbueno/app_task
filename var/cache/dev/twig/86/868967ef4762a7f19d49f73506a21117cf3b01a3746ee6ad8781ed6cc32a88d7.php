<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_920740608f3b7db3603cca4b24b352ecbfc6048a5b66cdd2e0864c6266a28f89 extends Twig_Template
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
        $__internal_914fe425e0235e525760d35ff716e5ded52bb72c859603f4b60e4bb0b468e3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914fe425e0235e525760d35ff716e5ded52bb72c859603f4b60e4bb0b468e3b2->enter($__internal_914fe425e0235e525760d35ff716e5ded52bb72c859603f4b60e4bb0b468e3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d85b7579d32922372c72c0de6a8724a3d58eb85dd7a1451bd1540bf735f2f152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85b7579d32922372c72c0de6a8724a3d58eb85dd7a1451bd1540bf735f2f152->enter($__internal_d85b7579d32922372c72c0de6a8724a3d58eb85dd7a1451bd1540bf735f2f152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_914fe425e0235e525760d35ff716e5ded52bb72c859603f4b60e4bb0b468e3b2->leave($__internal_914fe425e0235e525760d35ff716e5ded52bb72c859603f4b60e4bb0b468e3b2_prof);

        
        $__internal_d85b7579d32922372c72c0de6a8724a3d58eb85dd7a1451bd1540bf735f2f152->leave($__internal_d85b7579d32922372c72c0de6a8724a3d58eb85dd7a1451bd1540bf735f2f152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
