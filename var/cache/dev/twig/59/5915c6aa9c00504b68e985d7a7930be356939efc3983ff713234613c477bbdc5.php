<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_13aaffcaedee9e89a680b738d81e3acac79d39767264f2d28ef29ebe5ab64b20 extends Twig_Template
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
        $__internal_81540a6b9a63c45c1ccc47b6be83cbdba415b06647416aef9452188a4ffeabf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81540a6b9a63c45c1ccc47b6be83cbdba415b06647416aef9452188a4ffeabf3->enter($__internal_81540a6b9a63c45c1ccc47b6be83cbdba415b06647416aef9452188a4ffeabf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2c0d31a2d32cb230e295e2c6c13a0aa911b29e2829a6ebc4e1d6ae9e2ba6ce1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0d31a2d32cb230e295e2c6c13a0aa911b29e2829a6ebc4e1d6ae9e2ba6ce1a->enter($__internal_2c0d31a2d32cb230e295e2c6c13a0aa911b29e2829a6ebc4e1d6ae9e2ba6ce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_81540a6b9a63c45c1ccc47b6be83cbdba415b06647416aef9452188a4ffeabf3->leave($__internal_81540a6b9a63c45c1ccc47b6be83cbdba415b06647416aef9452188a4ffeabf3_prof);

        
        $__internal_2c0d31a2d32cb230e295e2c6c13a0aa911b29e2829a6ebc4e1d6ae9e2ba6ce1a->leave($__internal_2c0d31a2d32cb230e295e2c6c13a0aa911b29e2829a6ebc4e1d6ae9e2ba6ce1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
