<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0b4d314976239f1a27c65d1972fd8f70c9d578c576dfc015d00b057f558f8637 extends Twig_Template
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
        $__internal_16960deaaf83341d86e53f611abdecbb7f9bfd3253f7b99de1bb35c3981ccaff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16960deaaf83341d86e53f611abdecbb7f9bfd3253f7b99de1bb35c3981ccaff->enter($__internal_16960deaaf83341d86e53f611abdecbb7f9bfd3253f7b99de1bb35c3981ccaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d804970aefaa7d9eab7c7e52e582b25cd01abc10db486f2f1ecf7f987beae969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d804970aefaa7d9eab7c7e52e582b25cd01abc10db486f2f1ecf7f987beae969->enter($__internal_d804970aefaa7d9eab7c7e52e582b25cd01abc10db486f2f1ecf7f987beae969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_16960deaaf83341d86e53f611abdecbb7f9bfd3253f7b99de1bb35c3981ccaff->leave($__internal_16960deaaf83341d86e53f611abdecbb7f9bfd3253f7b99de1bb35c3981ccaff_prof);

        
        $__internal_d804970aefaa7d9eab7c7e52e582b25cd01abc10db486f2f1ecf7f987beae969->leave($__internal_d804970aefaa7d9eab7c7e52e582b25cd01abc10db486f2f1ecf7f987beae969_prof);

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
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
