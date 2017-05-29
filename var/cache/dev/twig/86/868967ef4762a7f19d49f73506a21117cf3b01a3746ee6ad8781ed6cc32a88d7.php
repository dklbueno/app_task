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
        $__internal_3b6aaf892b6c77236162335723aee722d4c3edc77d0f7694ed4e088ebe191fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6aaf892b6c77236162335723aee722d4c3edc77d0f7694ed4e088ebe191fbf->enter($__internal_3b6aaf892b6c77236162335723aee722d4c3edc77d0f7694ed4e088ebe191fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6579ea66d059bcf7fafe813bd6c71390de57eecfd2d4967b8e1f8147a4077ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6579ea66d059bcf7fafe813bd6c71390de57eecfd2d4967b8e1f8147a4077ae6->enter($__internal_6579ea66d059bcf7fafe813bd6c71390de57eecfd2d4967b8e1f8147a4077ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3b6aaf892b6c77236162335723aee722d4c3edc77d0f7694ed4e088ebe191fbf->leave($__internal_3b6aaf892b6c77236162335723aee722d4c3edc77d0f7694ed4e088ebe191fbf_prof);

        
        $__internal_6579ea66d059bcf7fafe813bd6c71390de57eecfd2d4967b8e1f8147a4077ae6->leave($__internal_6579ea66d059bcf7fafe813bd6c71390de57eecfd2d4967b8e1f8147a4077ae6_prof);

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
