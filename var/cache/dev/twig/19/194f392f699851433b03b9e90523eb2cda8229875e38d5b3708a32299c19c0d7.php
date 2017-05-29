<?php

/* :pedido:new.html.twig */
class __TwigTemplate_0317ae7969334ca0cb55c2397aa3f95d9cdad93687469708793ef6765440ecd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:new.html.twig", 1);
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
        $__internal_c4b7441c3e9aa1f2790097fd4fb0e282dd0629f1566fa23ed09a1aa84a2fae20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b7441c3e9aa1f2790097fd4fb0e282dd0629f1566fa23ed09a1aa84a2fae20->enter($__internal_c4b7441c3e9aa1f2790097fd4fb0e282dd0629f1566fa23ed09a1aa84a2fae20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $__internal_ca57af0a01f9c146c0f39eccd5181c8b707c7724c61f451399ca1dafbb2a6a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca57af0a01f9c146c0f39eccd5181c8b707c7724c61f451399ca1dafbb2a6a83->enter($__internal_ca57af0a01f9c146c0f39eccd5181c8b707c7724c61f451399ca1dafbb2a6a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b7441c3e9aa1f2790097fd4fb0e282dd0629f1566fa23ed09a1aa84a2fae20->leave($__internal_c4b7441c3e9aa1f2790097fd4fb0e282dd0629f1566fa23ed09a1aa84a2fae20_prof);

        
        $__internal_ca57af0a01f9c146c0f39eccd5181c8b707c7724c61f451399ca1dafbb2a6a83->leave($__internal_ca57af0a01f9c146c0f39eccd5181c8b707c7724c61f451399ca1dafbb2a6a83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ad553897f8de3fa98f147fbafc11471229555050c1ee8d14ca4f226ba13c603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad553897f8de3fa98f147fbafc11471229555050c1ee8d14ca4f226ba13c603->enter($__internal_8ad553897f8de3fa98f147fbafc11471229555050c1ee8d14ca4f226ba13c603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_593aff06a38853772aa023771c56ddf510d4dc51b404258ea9158df228f1d99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593aff06a38853772aa023771c56ddf510d4dc51b404258ea9158df228f1d99f->enter($__internal_593aff06a38853772aa023771c56ddf510d4dc51b404258ea9158df228f1d99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedido creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_593aff06a38853772aa023771c56ddf510d4dc51b404258ea9158df228f1d99f->leave($__internal_593aff06a38853772aa023771c56ddf510d4dc51b404258ea9158df228f1d99f_prof);

        
        $__internal_8ad553897f8de3fa98f147fbafc11471229555050c1ee8d14ca4f226ba13c603->leave($__internal_8ad553897f8de3fa98f147fbafc11471229555050c1ee8d14ca4f226ba13c603_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:new.html.twig";
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
    <h1>Pedido creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":pedido:new.html.twig", "/var/www/html/app_task/app/Resources/views/pedido/new.html.twig");
    }
}
