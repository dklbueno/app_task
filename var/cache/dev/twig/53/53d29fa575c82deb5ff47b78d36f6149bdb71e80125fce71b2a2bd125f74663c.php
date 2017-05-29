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
        $__internal_13599b2faa49f4149249cb4c1e112543c939c6c353834a95af565952384b666f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13599b2faa49f4149249cb4c1e112543c939c6c353834a95af565952384b666f->enter($__internal_13599b2faa49f4149249cb4c1e112543c939c6c353834a95af565952384b666f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_66af94478549aa5d91c74f94ffb7e0678e71b2a71c010ff291151144bb8da64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66af94478549aa5d91c74f94ffb7e0678e71b2a71c010ff291151144bb8da64c->enter($__internal_66af94478549aa5d91c74f94ffb7e0678e71b2a71c010ff291151144bb8da64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_13599b2faa49f4149249cb4c1e112543c939c6c353834a95af565952384b666f->leave($__internal_13599b2faa49f4149249cb4c1e112543c939c6c353834a95af565952384b666f_prof);

        
        $__internal_66af94478549aa5d91c74f94ffb7e0678e71b2a71c010ff291151144bb8da64c->leave($__internal_66af94478549aa5d91c74f94ffb7e0678e71b2a71c010ff291151144bb8da64c_prof);

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
