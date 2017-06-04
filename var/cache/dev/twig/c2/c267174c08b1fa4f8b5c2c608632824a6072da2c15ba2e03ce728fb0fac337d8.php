<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_920116772afd4b3ecb8071fa168046cd7fbcb15eb629dd283d844ec59d4c8fe7 extends Twig_Template
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
        $__internal_987f26d5833a7fe1b24a784bdd1398b6d25f522ec2f52ac8e6dd20a7e798cdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987f26d5833a7fe1b24a784bdd1398b6d25f522ec2f52ac8e6dd20a7e798cdcc->enter($__internal_987f26d5833a7fe1b24a784bdd1398b6d25f522ec2f52ac8e6dd20a7e798cdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3f883347c8dcbece3c73eba3d35ccfb25d104d5cf8dc8bd6a773a8ec14be02b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f883347c8dcbece3c73eba3d35ccfb25d104d5cf8dc8bd6a773a8ec14be02b7->enter($__internal_3f883347c8dcbece3c73eba3d35ccfb25d104d5cf8dc8bd6a773a8ec14be02b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_987f26d5833a7fe1b24a784bdd1398b6d25f522ec2f52ac8e6dd20a7e798cdcc->leave($__internal_987f26d5833a7fe1b24a784bdd1398b6d25f522ec2f52ac8e6dd20a7e798cdcc_prof);

        
        $__internal_3f883347c8dcbece3c73eba3d35ccfb25d104d5cf8dc8bd6a773a8ec14be02b7->leave($__internal_3f883347c8dcbece3c73eba3d35ccfb25d104d5cf8dc8bd6a773a8ec14be02b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
