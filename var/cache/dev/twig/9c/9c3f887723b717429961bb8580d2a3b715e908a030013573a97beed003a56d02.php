<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_04123472454cd82e841be8a50cd9191217dc16d1f8939d20c7929fd42818b84c extends Twig_Template
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
        $__internal_bcd72ab76f6a7b44e7f460d7285608a50dd3c4f79d53af9f866aa7f457d588b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd72ab76f6a7b44e7f460d7285608a50dd3c4f79d53af9f866aa7f457d588b6->enter($__internal_bcd72ab76f6a7b44e7f460d7285608a50dd3c4f79d53af9f866aa7f457d588b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_de4c05f4952841ff2321e1a2dbf33219695211f979ee23b66eeeea0c454c4f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4c05f4952841ff2321e1a2dbf33219695211f979ee23b66eeeea0c454c4f1b->enter($__internal_de4c05f4952841ff2321e1a2dbf33219695211f979ee23b66eeeea0c454c4f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_bcd72ab76f6a7b44e7f460d7285608a50dd3c4f79d53af9f866aa7f457d588b6->leave($__internal_bcd72ab76f6a7b44e7f460d7285608a50dd3c4f79d53af9f866aa7f457d588b6_prof);

        
        $__internal_de4c05f4952841ff2321e1a2dbf33219695211f979ee23b66eeeea0c454c4f1b->leave($__internal_de4c05f4952841ff2321e1a2dbf33219695211f979ee23b66eeeea0c454c4f1b_prof);

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
", "@Framework/Form/submit_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
