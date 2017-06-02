<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_306917864f217d92b81582c27336e8bf484146716cd97142132554f209a548d8 extends Twig_Template
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
        $__internal_96bceaae163a3283e9f06b44b603bdc6b4df4b1adb15ab995d35412d562e35b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bceaae163a3283e9f06b44b603bdc6b4df4b1adb15ab995d35412d562e35b9->enter($__internal_96bceaae163a3283e9f06b44b603bdc6b4df4b1adb15ab995d35412d562e35b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_eda698b82305a14e07d863b949cea7be76f61771e7c7a7f66f14516f1f057d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda698b82305a14e07d863b949cea7be76f61771e7c7a7f66f14516f1f057d36->enter($__internal_eda698b82305a14e07d863b949cea7be76f61771e7c7a7f66f14516f1f057d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_96bceaae163a3283e9f06b44b603bdc6b4df4b1adb15ab995d35412d562e35b9->leave($__internal_96bceaae163a3283e9f06b44b603bdc6b4df4b1adb15ab995d35412d562e35b9_prof);

        
        $__internal_eda698b82305a14e07d863b949cea7be76f61771e7c7a7f66f14516f1f057d36->leave($__internal_eda698b82305a14e07d863b949cea7be76f61771e7c7a7f66f14516f1f057d36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
