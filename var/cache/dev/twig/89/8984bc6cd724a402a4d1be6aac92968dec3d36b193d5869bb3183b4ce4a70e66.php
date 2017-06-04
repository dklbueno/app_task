<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6ff118673c1b34c41fc5846961459f5d4ca280915fd17c2bbd7e3b8df2ab35eb extends Twig_Template
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
        $__internal_74c43ca5005b91a34f576a59408e4c0b210a24b35ae6d88b8bee6bc48e53e71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c43ca5005b91a34f576a59408e4c0b210a24b35ae6d88b8bee6bc48e53e71b->enter($__internal_74c43ca5005b91a34f576a59408e4c0b210a24b35ae6d88b8bee6bc48e53e71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4c4c596505bba28d0c76c506ad58f6daccbc7a6757f20a6810e2bf17114b1328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4c596505bba28d0c76c506ad58f6daccbc7a6757f20a6810e2bf17114b1328->enter($__internal_4c4c596505bba28d0c76c506ad58f6daccbc7a6757f20a6810e2bf17114b1328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_74c43ca5005b91a34f576a59408e4c0b210a24b35ae6d88b8bee6bc48e53e71b->leave($__internal_74c43ca5005b91a34f576a59408e4c0b210a24b35ae6d88b8bee6bc48e53e71b_prof);

        
        $__internal_4c4c596505bba28d0c76c506ad58f6daccbc7a6757f20a6810e2bf17114b1328->leave($__internal_4c4c596505bba28d0c76c506ad58f6daccbc7a6757f20a6810e2bf17114b1328_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
