<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1c3e605244ac9d17788a88fecce29f52b433e49e11e10386fe4688db3107b4c3 extends Twig_Template
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
        $__internal_1b17720d7d2cd653b6c25e2df0f3e7a3628a08f965a0bf7df77f84cc5e4d4efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b17720d7d2cd653b6c25e2df0f3e7a3628a08f965a0bf7df77f84cc5e4d4efb->enter($__internal_1b17720d7d2cd653b6c25e2df0f3e7a3628a08f965a0bf7df77f84cc5e4d4efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2f84ab5da6c53cc8a2b6381ac1983fc206ff2fff9327f80d579861ab824d19e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f84ab5da6c53cc8a2b6381ac1983fc206ff2fff9327f80d579861ab824d19e9->enter($__internal_2f84ab5da6c53cc8a2b6381ac1983fc206ff2fff9327f80d579861ab824d19e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1b17720d7d2cd653b6c25e2df0f3e7a3628a08f965a0bf7df77f84cc5e4d4efb->leave($__internal_1b17720d7d2cd653b6c25e2df0f3e7a3628a08f965a0bf7df77f84cc5e4d4efb_prof);

        
        $__internal_2f84ab5da6c53cc8a2b6381ac1983fc206ff2fff9327f80d579861ab824d19e9->leave($__internal_2f84ab5da6c53cc8a2b6381ac1983fc206ff2fff9327f80d579861ab824d19e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
