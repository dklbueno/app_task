<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f9be907ed7da1e2daf6d56cf786473a8a4e5bc654c94ad72a29f348c8f7292e8 extends Twig_Template
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
        $__internal_84cf7cb769ff8c1a170ed9776226e5bb61177096457b6c6a3d7d5d542be3644c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cf7cb769ff8c1a170ed9776226e5bb61177096457b6c6a3d7d5d542be3644c->enter($__internal_84cf7cb769ff8c1a170ed9776226e5bb61177096457b6c6a3d7d5d542be3644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0fde0a7d43180f6db8e487206f07e809e4bb779ee52f8baef44d491cd136796e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fde0a7d43180f6db8e487206f07e809e4bb779ee52f8baef44d491cd136796e->enter($__internal_0fde0a7d43180f6db8e487206f07e809e4bb779ee52f8baef44d491cd136796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_84cf7cb769ff8c1a170ed9776226e5bb61177096457b6c6a3d7d5d542be3644c->leave($__internal_84cf7cb769ff8c1a170ed9776226e5bb61177096457b6c6a3d7d5d542be3644c_prof);

        
        $__internal_0fde0a7d43180f6db8e487206f07e809e4bb779ee52f8baef44d491cd136796e->leave($__internal_0fde0a7d43180f6db8e487206f07e809e4bb779ee52f8baef44d491cd136796e_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
