<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e87ee8e6a3b6a54dbc2ce2a002e16d1ebc743da80efb2ab59c27995c442ab998 extends Twig_Template
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
        $__internal_ee0908266679f30b22e6cf37915a89c359e1390fe23ad06889d8311c5ceb7ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0908266679f30b22e6cf37915a89c359e1390fe23ad06889d8311c5ceb7ab0->enter($__internal_ee0908266679f30b22e6cf37915a89c359e1390fe23ad06889d8311c5ceb7ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_44b19e64b7b4a28c2bd5b86d712413a773d1d009f90971b6523c34b58115e97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b19e64b7b4a28c2bd5b86d712413a773d1d009f90971b6523c34b58115e97d->enter($__internal_44b19e64b7b4a28c2bd5b86d712413a773d1d009f90971b6523c34b58115e97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ee0908266679f30b22e6cf37915a89c359e1390fe23ad06889d8311c5ceb7ab0->leave($__internal_ee0908266679f30b22e6cf37915a89c359e1390fe23ad06889d8311c5ceb7ab0_prof);

        
        $__internal_44b19e64b7b4a28c2bd5b86d712413a773d1d009f90971b6523c34b58115e97d->leave($__internal_44b19e64b7b4a28c2bd5b86d712413a773d1d009f90971b6523c34b58115e97d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
