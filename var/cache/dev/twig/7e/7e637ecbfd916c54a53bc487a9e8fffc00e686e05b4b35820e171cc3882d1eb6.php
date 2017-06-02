<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ca39f8728669181ac4a5d84411bd5d3fa260a61b62a77596a120c3f2ffd6e422 extends Twig_Template
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
        $__internal_98694d5b267370dec439177dc9dcb0109caabaf461f8391a033c0fc47271c132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98694d5b267370dec439177dc9dcb0109caabaf461f8391a033c0fc47271c132->enter($__internal_98694d5b267370dec439177dc9dcb0109caabaf461f8391a033c0fc47271c132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3b372868fb2d69241f885ecd98ab5458384ed761bba4ee59627852401e58d097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b372868fb2d69241f885ecd98ab5458384ed761bba4ee59627852401e58d097->enter($__internal_3b372868fb2d69241f885ecd98ab5458384ed761bba4ee59627852401e58d097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_98694d5b267370dec439177dc9dcb0109caabaf461f8391a033c0fc47271c132->leave($__internal_98694d5b267370dec439177dc9dcb0109caabaf461f8391a033c0fc47271c132_prof);

        
        $__internal_3b372868fb2d69241f885ecd98ab5458384ed761bba4ee59627852401e58d097->leave($__internal_3b372868fb2d69241f885ecd98ab5458384ed761bba4ee59627852401e58d097_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
