<?php

/* @LongevoChamado/Default/index.html.twig */
class __TwigTemplate_45704cce6488abebcd791c11e1dc4472983cebc4aff7dca553a3b56e1dbfb1fb extends Twig_Template
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
        $__internal_4fa26bffd60a1adf3109c3430d8c4a903ed5315250fa8a5befa435d366dae048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa26bffd60a1adf3109c3430d8c4a903ed5315250fa8a5befa435d366dae048->enter($__internal_4fa26bffd60a1adf3109c3430d8c4a903ed5315250fa8a5befa435d366dae048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LongevoChamado/Default/index.html.twig"));

        $__internal_3ab43951d17c2d3d5bac63ccef16ffbafda7ae72e66c2c3c351cddd6837891f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab43951d17c2d3d5bac63ccef16ffbafda7ae72e66c2c3c351cddd6837891f3->enter($__internal_3ab43951d17c2d3d5bac63ccef16ffbafda7ae72e66c2c3c351cddd6837891f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LongevoChamado/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4fa26bffd60a1adf3109c3430d8c4a903ed5315250fa8a5befa435d366dae048->leave($__internal_4fa26bffd60a1adf3109c3430d8c4a903ed5315250fa8a5befa435d366dae048_prof);

        
        $__internal_3ab43951d17c2d3d5bac63ccef16ffbafda7ae72e66c2c3c351cddd6837891f3->leave($__internal_3ab43951d17c2d3d5bac63ccef16ffbafda7ae72e66c2c3c351cddd6837891f3_prof);

    }

    public function getTemplateName()
    {
        return "@LongevoChamado/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@LongevoChamado/Default/index.html.twig", "C:\\xampp\\htdocs\\app_task\\src\\Longevo\\ChamadoBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
