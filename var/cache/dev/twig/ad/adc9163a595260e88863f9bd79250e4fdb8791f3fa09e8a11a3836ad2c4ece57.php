<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c34f3dddcfa121a1dea770dce1d12ab5ec9e9b9955bc5d8fd6b0c42d30078365 extends Twig_Template
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
        $__internal_7eaa3cbba0c238440e1cbc1ae103697c7508785e6a12891345f4a0ef0a9da38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eaa3cbba0c238440e1cbc1ae103697c7508785e6a12891345f4a0ef0a9da38d->enter($__internal_7eaa3cbba0c238440e1cbc1ae103697c7508785e6a12891345f4a0ef0a9da38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b6bf49d29b1b94e5900c86c5e571c8ce49c47b6342593be8dd5f2ea4e6e48a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bf49d29b1b94e5900c86c5e571c8ce49c47b6342593be8dd5f2ea4e6e48a9e->enter($__internal_b6bf49d29b1b94e5900c86c5e571c8ce49c47b6342593be8dd5f2ea4e6e48a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7eaa3cbba0c238440e1cbc1ae103697c7508785e6a12891345f4a0ef0a9da38d->leave($__internal_7eaa3cbba0c238440e1cbc1ae103697c7508785e6a12891345f4a0ef0a9da38d_prof);

        
        $__internal_b6bf49d29b1b94e5900c86c5e571c8ce49c47b6342593be8dd5f2ea4e6e48a9e->leave($__internal_b6bf49d29b1b94e5900c86c5e571c8ce49c47b6342593be8dd5f2ea4e6e48a9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
