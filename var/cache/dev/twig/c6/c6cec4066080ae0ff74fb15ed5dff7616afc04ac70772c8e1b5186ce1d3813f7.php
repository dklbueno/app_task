<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e542bf934096eb4a53df8c1887e34a1a1285353752fd318751329bb42b2ce5f9 extends Twig_Template
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
        $__internal_a58a602566e5a1126ff7a207b5cebf656fa4cb916d53ee178819d50e1294eb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58a602566e5a1126ff7a207b5cebf656fa4cb916d53ee178819d50e1294eb6c->enter($__internal_a58a602566e5a1126ff7a207b5cebf656fa4cb916d53ee178819d50e1294eb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5b717da8f65ab299faeabde51d2bb8c175d2717086a8d5b6a5bff57374a4cbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b717da8f65ab299faeabde51d2bb8c175d2717086a8d5b6a5bff57374a4cbaa->enter($__internal_5b717da8f65ab299faeabde51d2bb8c175d2717086a8d5b6a5bff57374a4cbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a58a602566e5a1126ff7a207b5cebf656fa4cb916d53ee178819d50e1294eb6c->leave($__internal_a58a602566e5a1126ff7a207b5cebf656fa4cb916d53ee178819d50e1294eb6c_prof);

        
        $__internal_5b717da8f65ab299faeabde51d2bb8c175d2717086a8d5b6a5bff57374a4cbaa->leave($__internal_5b717da8f65ab299faeabde51d2bb8c175d2717086a8d5b6a5bff57374a4cbaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
