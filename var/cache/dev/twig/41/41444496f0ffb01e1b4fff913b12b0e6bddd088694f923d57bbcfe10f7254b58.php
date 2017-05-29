<?php

/* :chamado:new.html.twig */
class __TwigTemplate_ed98db527fa5a7f3a58e007945aabf8e4e7a27629dd065b8e0e897f52dd3cd74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chamado:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc3920f97242483288fe0d93555b110d5a3cb9db6d999039217856f46f071010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3920f97242483288fe0d93555b110d5a3cb9db6d999039217856f46f071010->enter($__internal_dc3920f97242483288fe0d93555b110d5a3cb9db6d999039217856f46f071010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:new.html.twig"));

        $__internal_f017b284b6b473a11c1fb6dbf58d1efb044125a3608e1ba0fc3762a9347fe734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f017b284b6b473a11c1fb6dbf58d1efb044125a3608e1ba0fc3762a9347fe734->enter($__internal_f017b284b6b473a11c1fb6dbf58d1efb044125a3608e1ba0fc3762a9347fe734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3920f97242483288fe0d93555b110d5a3cb9db6d999039217856f46f071010->leave($__internal_dc3920f97242483288fe0d93555b110d5a3cb9db6d999039217856f46f071010_prof);

        
        $__internal_f017b284b6b473a11c1fb6dbf58d1efb044125a3608e1ba0fc3762a9347fe734->leave($__internal_f017b284b6b473a11c1fb6dbf58d1efb044125a3608e1ba0fc3762a9347fe734_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99039627cb1fd65dd8c3468fd2329bb78d35e0fdccb7449bb41fe8f6bea742f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99039627cb1fd65dd8c3468fd2329bb78d35e0fdccb7449bb41fe8f6bea742f1->enter($__internal_99039627cb1fd65dd8c3468fd2329bb78d35e0fdccb7449bb41fe8f6bea742f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_815652770786643593603480fd1d90975d8fc6c18152c13b9075d913a58f64cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815652770786643593603480fd1d90975d8fc6c18152c13b9075d913a58f64cd->enter($__internal_815652770786643593603480fd1d90975d8fc6c18152c13b9075d913a58f64cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chamado creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_815652770786643593603480fd1d90975d8fc6c18152c13b9075d913a58f64cd->leave($__internal_815652770786643593603480fd1d90975d8fc6c18152c13b9075d913a58f64cd_prof);

        
        $__internal_99039627cb1fd65dd8c3468fd2329bb78d35e0fdccb7449bb41fe8f6bea742f1->leave($__internal_99039627cb1fd65dd8c3468fd2329bb78d35e0fdccb7449bb41fe8f6bea742f1_prof);

    }

    public function getTemplateName()
    {
        return ":chamado:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Chamado creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('chamado_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":chamado:new.html.twig", "/var/www/html/app_task/app/Resources/views/chamado/new.html.twig");
    }
}
