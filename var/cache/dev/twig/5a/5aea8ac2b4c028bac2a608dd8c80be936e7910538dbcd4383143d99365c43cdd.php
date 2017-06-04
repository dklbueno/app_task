<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6462d03d188ae635be9c2c6f6a1715a83aee5ad13c1df6747bcb329853627aa8 extends Twig_Template
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
        $__internal_9a78bf4d1c062b70e88f74fc262b1cc5a22df544bc23c7959f8bc471480fa3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a78bf4d1c062b70e88f74fc262b1cc5a22df544bc23c7959f8bc471480fa3d3->enter($__internal_9a78bf4d1c062b70e88f74fc262b1cc5a22df544bc23c7959f8bc471480fa3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b6eaba2b6fbbf07f58ec73c7610276c982a26145f4c90ced05868c3f2f99fa83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6eaba2b6fbbf07f58ec73c7610276c982a26145f4c90ced05868c3f2f99fa83->enter($__internal_b6eaba2b6fbbf07f58ec73c7610276c982a26145f4c90ced05868c3f2f99fa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9a78bf4d1c062b70e88f74fc262b1cc5a22df544bc23c7959f8bc471480fa3d3->leave($__internal_9a78bf4d1c062b70e88f74fc262b1cc5a22df544bc23c7959f8bc471480fa3d3_prof);

        
        $__internal_b6eaba2b6fbbf07f58ec73c7610276c982a26145f4c90ced05868c3f2f99fa83->leave($__internal_b6eaba2b6fbbf07f58ec73c7610276c982a26145f4c90ced05868c3f2f99fa83_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
