<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c018f221eee47e9d4b0159e185d9e72f3a8cfdcde4491acbdfc056fda8ec6916 extends Twig_Template
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
        $__internal_b2b6bdcd51349bc467284de4b81b1ba526ffe1b1602199b51ca46c6e08908820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b6bdcd51349bc467284de4b81b1ba526ffe1b1602199b51ca46c6e08908820->enter($__internal_b2b6bdcd51349bc467284de4b81b1ba526ffe1b1602199b51ca46c6e08908820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6c4409219e1770a2a42575ff9e440ce59d0c889ad48573a460e675534671656c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4409219e1770a2a42575ff9e440ce59d0c889ad48573a460e675534671656c->enter($__internal_6c4409219e1770a2a42575ff9e440ce59d0c889ad48573a460e675534671656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b2b6bdcd51349bc467284de4b81b1ba526ffe1b1602199b51ca46c6e08908820->leave($__internal_b2b6bdcd51349bc467284de4b81b1ba526ffe1b1602199b51ca46c6e08908820_prof);

        
        $__internal_6c4409219e1770a2a42575ff9e440ce59d0c889ad48573a460e675534671656c->leave($__internal_6c4409219e1770a2a42575ff9e440ce59d0c889ad48573a460e675534671656c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
