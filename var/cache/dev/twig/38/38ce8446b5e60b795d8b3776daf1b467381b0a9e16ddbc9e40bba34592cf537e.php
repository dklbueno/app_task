<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_026fcbc1990acaf2f69e6571d91009c8ed5f56e8703977e0568d3ba2943e89ee extends Twig_Template
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
        $__internal_07be10e556bc173ba58baa127bccdc3b16398904a8a0e5f844693097c0b5c9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07be10e556bc173ba58baa127bccdc3b16398904a8a0e5f844693097c0b5c9ae->enter($__internal_07be10e556bc173ba58baa127bccdc3b16398904a8a0e5f844693097c0b5c9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_83d2e991efc465b40c5ec35e317860240989dc3a2dded15434920b6187a32c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d2e991efc465b40c5ec35e317860240989dc3a2dded15434920b6187a32c65->enter($__internal_83d2e991efc465b40c5ec35e317860240989dc3a2dded15434920b6187a32c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_07be10e556bc173ba58baa127bccdc3b16398904a8a0e5f844693097c0b5c9ae->leave($__internal_07be10e556bc173ba58baa127bccdc3b16398904a8a0e5f844693097c0b5c9ae_prof);

        
        $__internal_83d2e991efc465b40c5ec35e317860240989dc3a2dded15434920b6187a32c65->leave($__internal_83d2e991efc465b40c5ec35e317860240989dc3a2dded15434920b6187a32c65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
