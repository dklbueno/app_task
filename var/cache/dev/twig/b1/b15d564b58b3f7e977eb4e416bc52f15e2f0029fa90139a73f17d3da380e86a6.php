<?php

/* pedido/new.html.twig */
class __TwigTemplate_b5341e2039e7fef6c77ed6f8ce05a5dfba217699d8f13e5b93cfe1f76a6721d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/new.html.twig", 1);
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
        $__internal_4b679d4fc65cab28d62958bce3f25d3b589230cfabc4f33a35e613f2671c4826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b679d4fc65cab28d62958bce3f25d3b589230cfabc4f33a35e613f2671c4826->enter($__internal_4b679d4fc65cab28d62958bce3f25d3b589230cfabc4f33a35e613f2671c4826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/new.html.twig"));

        $__internal_4a773dbc4099c0367c1c54ef21bf7939a539840182c147b4bc57d008231d169b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a773dbc4099c0367c1c54ef21bf7939a539840182c147b4bc57d008231d169b->enter($__internal_4a773dbc4099c0367c1c54ef21bf7939a539840182c147b4bc57d008231d169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b679d4fc65cab28d62958bce3f25d3b589230cfabc4f33a35e613f2671c4826->leave($__internal_4b679d4fc65cab28d62958bce3f25d3b589230cfabc4f33a35e613f2671c4826_prof);

        
        $__internal_4a773dbc4099c0367c1c54ef21bf7939a539840182c147b4bc57d008231d169b->leave($__internal_4a773dbc4099c0367c1c54ef21bf7939a539840182c147b4bc57d008231d169b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6cd2ab0c3b71904b039adbed8215aec58df35d20a9d4365bd6ec52ef4518853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cd2ab0c3b71904b039adbed8215aec58df35d20a9d4365bd6ec52ef4518853->enter($__internal_e6cd2ab0c3b71904b039adbed8215aec58df35d20a9d4365bd6ec52ef4518853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3407c62b390614f1ed0addbaab4df1adb678ae43ac74044bfa33b37c43c5838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3407c62b390614f1ed0addbaab4df1adb678ae43ac74044bfa33b37c43c5838->enter($__internal_f3407c62b390614f1ed0addbaab4df1adb678ae43ac74044bfa33b37c43c5838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3407c62b390614f1ed0addbaab4df1adb678ae43ac74044bfa33b37c43c5838->leave($__internal_f3407c62b390614f1ed0addbaab4df1adb678ae43ac74044bfa33b37c43c5838_prof);

        
        $__internal_e6cd2ab0c3b71904b039adbed8215aec58df35d20a9d4365bd6ec52ef4518853->leave($__internal_e6cd2ab0c3b71904b039adbed8215aec58df35d20a9d4365bd6ec52ef4518853_prof);

    }

    public function getTemplateName()
    {
        return "pedido/new.html.twig";
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
", "pedido/new.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\pedido\\new.html.twig");
    }
}
