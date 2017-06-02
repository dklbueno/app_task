<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d45d615ba4d3cedf100cf349056cf82a86f857def43dc10b9fd6303946b3d11a extends Twig_Template
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
        $__internal_43be7a8311151eee792ca2d4ec9d8527f3bc60fcb3d72f2bd74264cbc6047f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43be7a8311151eee792ca2d4ec9d8527f3bc60fcb3d72f2bd74264cbc6047f10->enter($__internal_43be7a8311151eee792ca2d4ec9d8527f3bc60fcb3d72f2bd74264cbc6047f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d4fad872c3b174b4aeb977039619f99d4c61790c00ede8726746ba50bb4cd662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fad872c3b174b4aeb977039619f99d4c61790c00ede8726746ba50bb4cd662->enter($__internal_d4fad872c3b174b4aeb977039619f99d4c61790c00ede8726746ba50bb4cd662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_43be7a8311151eee792ca2d4ec9d8527f3bc60fcb3d72f2bd74264cbc6047f10->leave($__internal_43be7a8311151eee792ca2d4ec9d8527f3bc60fcb3d72f2bd74264cbc6047f10_prof);

        
        $__internal_d4fad872c3b174b4aeb977039619f99d4c61790c00ede8726746ba50bb4cd662->leave($__internal_d4fad872c3b174b4aeb977039619f99d4c61790c00ede8726746ba50bb4cd662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
