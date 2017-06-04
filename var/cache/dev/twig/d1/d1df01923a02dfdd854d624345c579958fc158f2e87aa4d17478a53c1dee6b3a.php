<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_59d0f3212b53abe57cb6d0a17c70f6ce3d764de07fdd3859e1038b3e8bde6593 extends Twig_Template
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
        $__internal_f717b612b5770c248febbde42521b22a30658983b60659e311f886d97188de8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f717b612b5770c248febbde42521b22a30658983b60659e311f886d97188de8a->enter($__internal_f717b612b5770c248febbde42521b22a30658983b60659e311f886d97188de8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b42e657f78fecf7fb4c49707456301a3d6234410576568eec123f1f5dc215718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42e657f78fecf7fb4c49707456301a3d6234410576568eec123f1f5dc215718->enter($__internal_b42e657f78fecf7fb4c49707456301a3d6234410576568eec123f1f5dc215718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f717b612b5770c248febbde42521b22a30658983b60659e311f886d97188de8a->leave($__internal_f717b612b5770c248febbde42521b22a30658983b60659e311f886d97188de8a_prof);

        
        $__internal_b42e657f78fecf7fb4c49707456301a3d6234410576568eec123f1f5dc215718->leave($__internal_b42e657f78fecf7fb4c49707456301a3d6234410576568eec123f1f5dc215718_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
