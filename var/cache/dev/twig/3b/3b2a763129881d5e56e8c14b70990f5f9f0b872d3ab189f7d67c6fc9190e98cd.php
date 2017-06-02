<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bae8fe075be49c771a3efb4689c64f2f11f9af5a2f431f20db88e700e86e43e5 extends Twig_Template
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
        $__internal_c5dafef1840aa367a1f6fbe4d73a5120cbccc72c8288438940b15b17213f33ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5dafef1840aa367a1f6fbe4d73a5120cbccc72c8288438940b15b17213f33ff->enter($__internal_c5dafef1840aa367a1f6fbe4d73a5120cbccc72c8288438940b15b17213f33ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_24d4ee83d1c7023277a833c4dccd577216bf0267e2148db29c6f8f40a336feda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d4ee83d1c7023277a833c4dccd577216bf0267e2148db29c6f8f40a336feda->enter($__internal_24d4ee83d1c7023277a833c4dccd577216bf0267e2148db29c6f8f40a336feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c5dafef1840aa367a1f6fbe4d73a5120cbccc72c8288438940b15b17213f33ff->leave($__internal_c5dafef1840aa367a1f6fbe4d73a5120cbccc72c8288438940b15b17213f33ff_prof);

        
        $__internal_24d4ee83d1c7023277a833c4dccd577216bf0267e2148db29c6f8f40a336feda->leave($__internal_24d4ee83d1c7023277a833c4dccd577216bf0267e2148db29c6f8f40a336feda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
