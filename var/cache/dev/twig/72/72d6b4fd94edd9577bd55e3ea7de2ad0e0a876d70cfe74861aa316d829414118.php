<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6b5896a0478642b27c3aaa6200aae55742d84135ead24102603d59fba71a1ae9 extends Twig_Template
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
        $__internal_a9148ba4f29770a2b03123e4d2d4291f12ea306c1c47e82a415fea528cb20b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9148ba4f29770a2b03123e4d2d4291f12ea306c1c47e82a415fea528cb20b75->enter($__internal_a9148ba4f29770a2b03123e4d2d4291f12ea306c1c47e82a415fea528cb20b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_7626b642e0db538f4dbd2cd9a02629194b01a8549fb522d4cd9bfa796c072034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7626b642e0db538f4dbd2cd9a02629194b01a8549fb522d4cd9bfa796c072034->enter($__internal_7626b642e0db538f4dbd2cd9a02629194b01a8549fb522d4cd9bfa796c072034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_a9148ba4f29770a2b03123e4d2d4291f12ea306c1c47e82a415fea528cb20b75->leave($__internal_a9148ba4f29770a2b03123e4d2d4291f12ea306c1c47e82a415fea528cb20b75_prof);

        
        $__internal_7626b642e0db538f4dbd2cd9a02629194b01a8549fb522d4cd9bfa796c072034->leave($__internal_7626b642e0db538f4dbd2cd9a02629194b01a8549fb522d4cd9bfa796c072034_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
