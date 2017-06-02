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
        $__internal_0492b03635e88120d3f326d207a92381ec825d1d7b136f9fcaaeb109df104d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0492b03635e88120d3f326d207a92381ec825d1d7b136f9fcaaeb109df104d4f->enter($__internal_0492b03635e88120d3f326d207a92381ec825d1d7b136f9fcaaeb109df104d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cedcb932dcc27f18b8664c2a42a42190b06f4e21986c9200aed9ba942f2f4792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedcb932dcc27f18b8664c2a42a42190b06f4e21986c9200aed9ba942f2f4792->enter($__internal_cedcb932dcc27f18b8664c2a42a42190b06f4e21986c9200aed9ba942f2f4792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0492b03635e88120d3f326d207a92381ec825d1d7b136f9fcaaeb109df104d4f->leave($__internal_0492b03635e88120d3f326d207a92381ec825d1d7b136f9fcaaeb109df104d4f_prof);

        
        $__internal_cedcb932dcc27f18b8664c2a42a42190b06f4e21986c9200aed9ba942f2f4792->leave($__internal_cedcb932dcc27f18b8664c2a42a42190b06f4e21986c9200aed9ba942f2f4792_prof);

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
