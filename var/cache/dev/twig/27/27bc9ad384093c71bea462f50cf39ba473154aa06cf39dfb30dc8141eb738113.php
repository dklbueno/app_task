<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f68c818aaacf1f8d3798eea3d1b5158e78d99ca3c8416299a5b285a388cf111b extends Twig_Template
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
        $__internal_1f5485d65531c9edd993483636b05efc3b62bdf401374a9d37c3a913e1e68745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5485d65531c9edd993483636b05efc3b62bdf401374a9d37c3a913e1e68745->enter($__internal_1f5485d65531c9edd993483636b05efc3b62bdf401374a9d37c3a913e1e68745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6c51c4449cac20839af3cddea6a3d7f26e7a7e58ede7fa36d59c0e15f1d7ab50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c51c4449cac20839af3cddea6a3d7f26e7a7e58ede7fa36d59c0e15f1d7ab50->enter($__internal_6c51c4449cac20839af3cddea6a3d7f26e7a7e58ede7fa36d59c0e15f1d7ab50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1f5485d65531c9edd993483636b05efc3b62bdf401374a9d37c3a913e1e68745->leave($__internal_1f5485d65531c9edd993483636b05efc3b62bdf401374a9d37c3a913e1e68745_prof);

        
        $__internal_6c51c4449cac20839af3cddea6a3d7f26e7a7e58ede7fa36d59c0e15f1d7ab50->leave($__internal_6c51c4449cac20839af3cddea6a3d7f26e7a7e58ede7fa36d59c0e15f1d7ab50_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
