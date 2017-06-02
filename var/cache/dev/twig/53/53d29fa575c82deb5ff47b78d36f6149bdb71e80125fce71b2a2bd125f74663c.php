<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cdeccb980253bb648b4c2d25ddcd69e0ee920e721a096f504262464453de8ab7 extends Twig_Template
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
        $__internal_bc7d2b44ca2a9d72f91f4d5b37dd27c2dcf3fd3c8f16db4d7a8722e3e07d1bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7d2b44ca2a9d72f91f4d5b37dd27c2dcf3fd3c8f16db4d7a8722e3e07d1bf8->enter($__internal_bc7d2b44ca2a9d72f91f4d5b37dd27c2dcf3fd3c8f16db4d7a8722e3e07d1bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_19ec43716c94b5f14ae4fef31bcb6393824a4088a9b65d79b15b25a66f4ca7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ec43716c94b5f14ae4fef31bcb6393824a4088a9b65d79b15b25a66f4ca7eb->enter($__internal_19ec43716c94b5f14ae4fef31bcb6393824a4088a9b65d79b15b25a66f4ca7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bc7d2b44ca2a9d72f91f4d5b37dd27c2dcf3fd3c8f16db4d7a8722e3e07d1bf8->leave($__internal_bc7d2b44ca2a9d72f91f4d5b37dd27c2dcf3fd3c8f16db4d7a8722e3e07d1bf8_prof);

        
        $__internal_19ec43716c94b5f14ae4fef31bcb6393824a4088a9b65d79b15b25a66f4ca7eb->leave($__internal_19ec43716c94b5f14ae4fef31bcb6393824a4088a9b65d79b15b25a66f4ca7eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
