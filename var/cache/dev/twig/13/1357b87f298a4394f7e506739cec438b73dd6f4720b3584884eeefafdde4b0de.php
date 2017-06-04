<?php

/* :sac:new.html.twig */
class __TwigTemplate_058c47ba12228b12e37404927ddb39f10881c30a15574fe53be1f90ac8587881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":sac:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96228e082a6ee77661be1fd90877016ffe6654971e2f916821b4c730b21e1280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96228e082a6ee77661be1fd90877016ffe6654971e2f916821b4c730b21e1280->enter($__internal_96228e082a6ee77661be1fd90877016ffe6654971e2f916821b4c730b21e1280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:new.html.twig"));

        $__internal_e73811f06138f95db798e767fe541565071e5070fa00ea965e0ef273e2b97395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73811f06138f95db798e767fe541565071e5070fa00ea965e0ef273e2b97395->enter($__internal_e73811f06138f95db798e767fe541565071e5070fa00ea965e0ef273e2b97395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96228e082a6ee77661be1fd90877016ffe6654971e2f916821b4c730b21e1280->leave($__internal_96228e082a6ee77661be1fd90877016ffe6654971e2f916821b4c730b21e1280_prof);

        
        $__internal_e73811f06138f95db798e767fe541565071e5070fa00ea965e0ef273e2b97395->leave($__internal_e73811f06138f95db798e767fe541565071e5070fa00ea965e0ef273e2b97395_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5fddc5653010159e2a5ad37a905d0cba611aee2872e14b644bd725b5372ed5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fddc5653010159e2a5ad37a905d0cba611aee2872e14b644bd725b5372ed5ae->enter($__internal_5fddc5653010159e2a5ad37a905d0cba611aee2872e14b644bd725b5372ed5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_58f790bfd70dad94e180ec9bc26c31224e7c76eb0dcacf24d5584eaaa082bc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f790bfd70dad94e180ec9bc26c31224e7c76eb0dcacf24d5584eaaa082bc4d->enter($__internal_58f790bfd70dad94e180ec9bc26c31224e7c76eb0dcacf24d5584eaaa082bc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 

<h1>Cliente creation</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sac_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    
";
        
        $__internal_58f790bfd70dad94e180ec9bc26c31224e7c76eb0dcacf24d5584eaaa082bc4d->leave($__internal_58f790bfd70dad94e180ec9bc26c31224e7c76eb0dcacf24d5584eaaa082bc4d_prof);

        
        $__internal_5fddc5653010159e2a5ad37a905d0cba611aee2872e14b644bd725b5372ed5ae->leave($__internal_5fddc5653010159e2a5ad37a905d0cba611aee2872e14b644bd725b5372ed5ae_prof);

    }

    public function getTemplateName()
    {
        return ":sac:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  63 => 10,  58 => 8,  54 => 7,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %} 
 
{% block content %} 

<h1>Cliente creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('sac_index') }}\">Back to the list</a>
        </li>
    </ul>
    
{% endblock %}
", ":sac:new.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/sac/new.html.twig");
    }
}
