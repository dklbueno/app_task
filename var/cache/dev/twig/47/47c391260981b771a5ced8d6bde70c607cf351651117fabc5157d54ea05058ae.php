<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d0a26ab3864267a96cecea02583cb7ac33e539833b3b6e387000e6d12bf694ea extends Twig_Template
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
        $__internal_33596a5b4472a1df10d5231d13fb9f32247d22b957e27a3e14b7fff523ccd962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33596a5b4472a1df10d5231d13fb9f32247d22b957e27a3e14b7fff523ccd962->enter($__internal_33596a5b4472a1df10d5231d13fb9f32247d22b957e27a3e14b7fff523ccd962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_54a1ce6c34a05eee1d532ef7280f04f88d859715b3fc8497fcbefb2ca0b79288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a1ce6c34a05eee1d532ef7280f04f88d859715b3fc8497fcbefb2ca0b79288->enter($__internal_54a1ce6c34a05eee1d532ef7280f04f88d859715b3fc8497fcbefb2ca0b79288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_33596a5b4472a1df10d5231d13fb9f32247d22b957e27a3e14b7fff523ccd962->leave($__internal_33596a5b4472a1df10d5231d13fb9f32247d22b957e27a3e14b7fff523ccd962_prof);

        
        $__internal_54a1ce6c34a05eee1d532ef7280f04f88d859715b3fc8497fcbefb2ca0b79288->leave($__internal_54a1ce6c34a05eee1d532ef7280f04f88d859715b3fc8497fcbefb2ca0b79288_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
