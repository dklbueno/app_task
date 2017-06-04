<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_60ff605e35009a30ce8d661285bb50a2d2388304ff322800d065d29c3a956b3b extends Twig_Template
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
        $__internal_11f7cedd36d476850c694129d2bd078c7127b9a4cc38ee3205846dfed8b00551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f7cedd36d476850c694129d2bd078c7127b9a4cc38ee3205846dfed8b00551->enter($__internal_11f7cedd36d476850c694129d2bd078c7127b9a4cc38ee3205846dfed8b00551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_91ed6403df7f8ff71720f35aceba91ddb1667fb42c87c441a8e74d3f3dea17f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ed6403df7f8ff71720f35aceba91ddb1667fb42c87c441a8e74d3f3dea17f8->enter($__internal_91ed6403df7f8ff71720f35aceba91ddb1667fb42c87c441a8e74d3f3dea17f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_11f7cedd36d476850c694129d2bd078c7127b9a4cc38ee3205846dfed8b00551->leave($__internal_11f7cedd36d476850c694129d2bd078c7127b9a4cc38ee3205846dfed8b00551_prof);

        
        $__internal_91ed6403df7f8ff71720f35aceba91ddb1667fb42c87c441a8e74d3f3dea17f8->leave($__internal_91ed6403df7f8ff71720f35aceba91ddb1667fb42c87c441a8e74d3f3dea17f8_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
