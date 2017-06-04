<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a559985e436fa6b6a6f076e65cb68f38169bf3c339a69a9929b49776158a014d extends Twig_Template
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
        $__internal_89449501ed7741f20691ea05f688d4ecad0eff7090c9b915df4f924981be97c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89449501ed7741f20691ea05f688d4ecad0eff7090c9b915df4f924981be97c9->enter($__internal_89449501ed7741f20691ea05f688d4ecad0eff7090c9b915df4f924981be97c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a610b7c5ce32b23b64917c4e088cdc36cae4bcc7d5cfc2a09558b676b6dd86ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a610b7c5ce32b23b64917c4e088cdc36cae4bcc7d5cfc2a09558b676b6dd86ca->enter($__internal_a610b7c5ce32b23b64917c4e088cdc36cae4bcc7d5cfc2a09558b676b6dd86ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_89449501ed7741f20691ea05f688d4ecad0eff7090c9b915df4f924981be97c9->leave($__internal_89449501ed7741f20691ea05f688d4ecad0eff7090c9b915df4f924981be97c9_prof);

        
        $__internal_a610b7c5ce32b23b64917c4e088cdc36cae4bcc7d5cfc2a09558b676b6dd86ca->leave($__internal_a610b7c5ce32b23b64917c4e088cdc36cae4bcc7d5cfc2a09558b676b6dd86ca_prof);

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
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
