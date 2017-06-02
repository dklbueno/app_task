<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b30adbfd66ef16292e25487c2903355d40fd0641ffc1ae580436b352aec87a28 extends Twig_Template
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
        $__internal_f212e17869414561d370451b8e532335704fbf7cc232aa97eb03dbddfec0e8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f212e17869414561d370451b8e532335704fbf7cc232aa97eb03dbddfec0e8b3->enter($__internal_f212e17869414561d370451b8e532335704fbf7cc232aa97eb03dbddfec0e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_27797a717af578eaa0a30a2151639dbfb9bff8ac020143e3b42246d42388514e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27797a717af578eaa0a30a2151639dbfb9bff8ac020143e3b42246d42388514e->enter($__internal_27797a717af578eaa0a30a2151639dbfb9bff8ac020143e3b42246d42388514e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f212e17869414561d370451b8e532335704fbf7cc232aa97eb03dbddfec0e8b3->leave($__internal_f212e17869414561d370451b8e532335704fbf7cc232aa97eb03dbddfec0e8b3_prof);

        
        $__internal_27797a717af578eaa0a30a2151639dbfb9bff8ac020143e3b42246d42388514e->leave($__internal_27797a717af578eaa0a30a2151639dbfb9bff8ac020143e3b42246d42388514e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
