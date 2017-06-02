<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8a8217f0b1f85d83d4ed14757da5602703d2005fc0b4f41c9352bb66bd79355d extends Twig_Template
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
        $__internal_5ddaf020353282f6b545fb038855dab0ac66ef627aa9cb7e9c46260c7cb217e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddaf020353282f6b545fb038855dab0ac66ef627aa9cb7e9c46260c7cb217e8->enter($__internal_5ddaf020353282f6b545fb038855dab0ac66ef627aa9cb7e9c46260c7cb217e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a4debed0fc7f75d367d949d399bd8aaf99423b01f31714a98f3fbe6a48d1c0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4debed0fc7f75d367d949d399bd8aaf99423b01f31714a98f3fbe6a48d1c0b2->enter($__internal_a4debed0fc7f75d367d949d399bd8aaf99423b01f31714a98f3fbe6a48d1c0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5ddaf020353282f6b545fb038855dab0ac66ef627aa9cb7e9c46260c7cb217e8->leave($__internal_5ddaf020353282f6b545fb038855dab0ac66ef627aa9cb7e9c46260c7cb217e8_prof);

        
        $__internal_a4debed0fc7f75d367d949d399bd8aaf99423b01f31714a98f3fbe6a48d1c0b2->leave($__internal_a4debed0fc7f75d367d949d399bd8aaf99423b01f31714a98f3fbe6a48d1c0b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
