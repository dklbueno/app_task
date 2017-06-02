<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_49e5b7132954c6d427dc2ab4d614ab50849b583a17f3735565ed981d8294e79d extends Twig_Template
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
        $__internal_cc058de52b002264acfde17968a8f88e25b48ce05b582e7835d47fb485c3518c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc058de52b002264acfde17968a8f88e25b48ce05b582e7835d47fb485c3518c->enter($__internal_cc058de52b002264acfde17968a8f88e25b48ce05b582e7835d47fb485c3518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_0b423b3faab00248e61fdadc8d90b5b329d58421138f5ec4bbb308731e08138f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b423b3faab00248e61fdadc8d90b5b329d58421138f5ec4bbb308731e08138f->enter($__internal_0b423b3faab00248e61fdadc8d90b5b329d58421138f5ec4bbb308731e08138f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cc058de52b002264acfde17968a8f88e25b48ce05b582e7835d47fb485c3518c->leave($__internal_cc058de52b002264acfde17968a8f88e25b48ce05b582e7835d47fb485c3518c_prof);

        
        $__internal_0b423b3faab00248e61fdadc8d90b5b329d58421138f5ec4bbb308731e08138f->leave($__internal_0b423b3faab00248e61fdadc8d90b5b329d58421138f5ec4bbb308731e08138f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
