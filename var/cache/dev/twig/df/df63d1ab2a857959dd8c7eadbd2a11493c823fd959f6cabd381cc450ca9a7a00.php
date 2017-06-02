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
        $__internal_03b7bac4da35165a03bf71d7ea8cf4369c1efd550eb4a1ff577be6e3f243aedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b7bac4da35165a03bf71d7ea8cf4369c1efd550eb4a1ff577be6e3f243aedb->enter($__internal_03b7bac4da35165a03bf71d7ea8cf4369c1efd550eb4a1ff577be6e3f243aedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_097b70b0494fa19f930218b3d0688d00a6ef10db345b45a05658f1f2ae9d70ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097b70b0494fa19f930218b3d0688d00a6ef10db345b45a05658f1f2ae9d70ce->enter($__internal_097b70b0494fa19f930218b3d0688d00a6ef10db345b45a05658f1f2ae9d70ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_03b7bac4da35165a03bf71d7ea8cf4369c1efd550eb4a1ff577be6e3f243aedb->leave($__internal_03b7bac4da35165a03bf71d7ea8cf4369c1efd550eb4a1ff577be6e3f243aedb_prof);

        
        $__internal_097b70b0494fa19f930218b3d0688d00a6ef10db345b45a05658f1f2ae9d70ce->leave($__internal_097b70b0494fa19f930218b3d0688d00a6ef10db345b45a05658f1f2ae9d70ce_prof);

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
