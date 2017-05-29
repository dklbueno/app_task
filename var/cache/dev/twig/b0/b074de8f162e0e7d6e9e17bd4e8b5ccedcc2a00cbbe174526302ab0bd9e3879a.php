<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ab2963d72209776d2533f4f2e4b7acbe55096a5fa2ca2d036503555850b81cde extends Twig_Template
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
        $__internal_d350a7620cf2581bf6c38e27eddf8d6adf1c963cbf63b774548de0e9065b727d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d350a7620cf2581bf6c38e27eddf8d6adf1c963cbf63b774548de0e9065b727d->enter($__internal_d350a7620cf2581bf6c38e27eddf8d6adf1c963cbf63b774548de0e9065b727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_602f6a060fee787ef769b3a7a874009d83912b5423b991f386c58879165d8d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602f6a060fee787ef769b3a7a874009d83912b5423b991f386c58879165d8d0a->enter($__internal_602f6a060fee787ef769b3a7a874009d83912b5423b991f386c58879165d8d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d350a7620cf2581bf6c38e27eddf8d6adf1c963cbf63b774548de0e9065b727d->leave($__internal_d350a7620cf2581bf6c38e27eddf8d6adf1c963cbf63b774548de0e9065b727d_prof);

        
        $__internal_602f6a060fee787ef769b3a7a874009d83912b5423b991f386c58879165d8d0a->leave($__internal_602f6a060fee787ef769b3a7a874009d83912b5423b991f386c58879165d8d0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
