<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5facfbd9c7bb31279ea530e7efa0e7819a9ab4f35d64e88116eed782b242457b extends Twig_Template
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
        $__internal_8f325bff2b293bad46365418589688b1ad874a5cb0f64ae83faf784a8979750c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f325bff2b293bad46365418589688b1ad874a5cb0f64ae83faf784a8979750c->enter($__internal_8f325bff2b293bad46365418589688b1ad874a5cb0f64ae83faf784a8979750c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_978f2a582bc2e3e44493345a87b6ed04023c075d0d9f461254b97248877f1142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978f2a582bc2e3e44493345a87b6ed04023c075d0d9f461254b97248877f1142->enter($__internal_978f2a582bc2e3e44493345a87b6ed04023c075d0d9f461254b97248877f1142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8f325bff2b293bad46365418589688b1ad874a5cb0f64ae83faf784a8979750c->leave($__internal_8f325bff2b293bad46365418589688b1ad874a5cb0f64ae83faf784a8979750c_prof);

        
        $__internal_978f2a582bc2e3e44493345a87b6ed04023c075d0d9f461254b97248877f1142->leave($__internal_978f2a582bc2e3e44493345a87b6ed04023c075d0d9f461254b97248877f1142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
