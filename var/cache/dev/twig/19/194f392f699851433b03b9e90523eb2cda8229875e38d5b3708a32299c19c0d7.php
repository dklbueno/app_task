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
        $__internal_3fe8abc7b18c30417dda5513df07b9309198a8e04502407481f4d9ad1ed48d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe8abc7b18c30417dda5513df07b9309198a8e04502407481f4d9ad1ed48d52->enter($__internal_3fe8abc7b18c30417dda5513df07b9309198a8e04502407481f4d9ad1ed48d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $__internal_f756c98e22929d2b10f87a48647a2f362f039a1e6010312d55a13eb89515a5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f756c98e22929d2b10f87a48647a2f362f039a1e6010312d55a13eb89515a5e5->enter($__internal_f756c98e22929d2b10f87a48647a2f362f039a1e6010312d55a13eb89515a5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe8abc7b18c30417dda5513df07b9309198a8e04502407481f4d9ad1ed48d52->leave($__internal_3fe8abc7b18c30417dda5513df07b9309198a8e04502407481f4d9ad1ed48d52_prof);

        
        $__internal_f756c98e22929d2b10f87a48647a2f362f039a1e6010312d55a13eb89515a5e5->leave($__internal_f756c98e22929d2b10f87a48647a2f362f039a1e6010312d55a13eb89515a5e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26737055f08d10f95d43d8508128e18224f35be62a4515dcb8fa66939b765d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26737055f08d10f95d43d8508128e18224f35be62a4515dcb8fa66939b765d0a->enter($__internal_26737055f08d10f95d43d8508128e18224f35be62a4515dcb8fa66939b765d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca39da78d5978de37af417146b29a08e31229153867c6dd333e5592b99519531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca39da78d5978de37af417146b29a08e31229153867c6dd333e5592b99519531->enter($__internal_ca39da78d5978de37af417146b29a08e31229153867c6dd333e5592b99519531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca39da78d5978de37af417146b29a08e31229153867c6dd333e5592b99519531->leave($__internal_ca39da78d5978de37af417146b29a08e31229153867c6dd333e5592b99519531_prof);

        
        $__internal_26737055f08d10f95d43d8508128e18224f35be62a4515dcb8fa66939b765d0a->leave($__internal_26737055f08d10f95d43d8508128e18224f35be62a4515dcb8fa66939b765d0a_prof);

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
