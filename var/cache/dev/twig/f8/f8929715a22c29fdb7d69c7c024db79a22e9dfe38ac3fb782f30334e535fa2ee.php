<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_795b1b12d987053ac00483b01613a65946248b9266751bd30a9f07c10c4d1b64 extends Twig_Template
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
        $__internal_675d615124035dc04e4f5bfb5b1631c563dcb284000c6ca50ce2eb9b516c356c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675d615124035dc04e4f5bfb5b1631c563dcb284000c6ca50ce2eb9b516c356c->enter($__internal_675d615124035dc04e4f5bfb5b1631c563dcb284000c6ca50ce2eb9b516c356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_7d56b7b1005932ccd49fda0aca19c81d9be78a2e0d7e7d41e5f208801b672d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d56b7b1005932ccd49fda0aca19c81d9be78a2e0d7e7d41e5f208801b672d7c->enter($__internal_7d56b7b1005932ccd49fda0aca19c81d9be78a2e0d7e7d41e5f208801b672d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_675d615124035dc04e4f5bfb5b1631c563dcb284000c6ca50ce2eb9b516c356c->leave($__internal_675d615124035dc04e4f5bfb5b1631c563dcb284000c6ca50ce2eb9b516c356c_prof);

        
        $__internal_7d56b7b1005932ccd49fda0aca19c81d9be78a2e0d7e7d41e5f208801b672d7c->leave($__internal_7d56b7b1005932ccd49fda0aca19c81d9be78a2e0d7e7d41e5f208801b672d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
