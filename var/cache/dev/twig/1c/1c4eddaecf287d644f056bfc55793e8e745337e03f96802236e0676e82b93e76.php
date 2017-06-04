<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_02e36d9283e1a77b4fdef4dc44f9c680cbc47cec477214b594d28a5d6ba2e290 extends Twig_Template
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
        $__internal_32a8fc7a337f5f59f8c86e8d7433dc5f2b1bc7d8345d5ac35985d3a8ed50ca8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a8fc7a337f5f59f8c86e8d7433dc5f2b1bc7d8345d5ac35985d3a8ed50ca8a->enter($__internal_32a8fc7a337f5f59f8c86e8d7433dc5f2b1bc7d8345d5ac35985d3a8ed50ca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6abdb14b99db3228686163d60db0649ce0f0537913460a0461315470ca971a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abdb14b99db3228686163d60db0649ce0f0537913460a0461315470ca971a9e->enter($__internal_6abdb14b99db3228686163d60db0649ce0f0537913460a0461315470ca971a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_32a8fc7a337f5f59f8c86e8d7433dc5f2b1bc7d8345d5ac35985d3a8ed50ca8a->leave($__internal_32a8fc7a337f5f59f8c86e8d7433dc5f2b1bc7d8345d5ac35985d3a8ed50ca8a_prof);

        
        $__internal_6abdb14b99db3228686163d60db0649ce0f0537913460a0461315470ca971a9e->leave($__internal_6abdb14b99db3228686163d60db0649ce0f0537913460a0461315470ca971a9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
