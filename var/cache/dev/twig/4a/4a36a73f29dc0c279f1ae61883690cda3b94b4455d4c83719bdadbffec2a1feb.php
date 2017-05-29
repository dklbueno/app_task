<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_96b827f6945afc7616468042123663b1ecae262f6b5abca0413222c4fe3e0afd extends Twig_Template
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
        $__internal_358938e208df8b4ad553200479475c1dfb8a66e17bd7cbe2cc0f6ecb6cb29715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358938e208df8b4ad553200479475c1dfb8a66e17bd7cbe2cc0f6ecb6cb29715->enter($__internal_358938e208df8b4ad553200479475c1dfb8a66e17bd7cbe2cc0f6ecb6cb29715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c8eda9a1df37848274cc12a53ce24e98d0f69572aeb36fbac0cbd1b23b27cd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8eda9a1df37848274cc12a53ce24e98d0f69572aeb36fbac0cbd1b23b27cd55->enter($__internal_c8eda9a1df37848274cc12a53ce24e98d0f69572aeb36fbac0cbd1b23b27cd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_358938e208df8b4ad553200479475c1dfb8a66e17bd7cbe2cc0f6ecb6cb29715->leave($__internal_358938e208df8b4ad553200479475c1dfb8a66e17bd7cbe2cc0f6ecb6cb29715_prof);

        
        $__internal_c8eda9a1df37848274cc12a53ce24e98d0f69572aeb36fbac0cbd1b23b27cd55->leave($__internal_c8eda9a1df37848274cc12a53ce24e98d0f69572aeb36fbac0cbd1b23b27cd55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
