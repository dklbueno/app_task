<?php

/* sac/show.html.twig */
class __TwigTemplate_19ce77aab6aaf5f711cdf2242c39c807c6824d5eef005806094f47c818e126c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sac/show.html.twig", 1);
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
        $__internal_e8f2a04cfd0c5f1a70a88873e827f013f0036297ca06769ddcdf67a68ee00aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f2a04cfd0c5f1a70a88873e827f013f0036297ca06769ddcdf67a68ee00aa4->enter($__internal_e8f2a04cfd0c5f1a70a88873e827f013f0036297ca06769ddcdf67a68ee00aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sac/show.html.twig"));

        $__internal_87b37901d23573fb9b6d5b1805dedf315e7dd3eb171ce8da0d2744477bd10e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b37901d23573fb9b6d5b1805dedf315e7dd3eb171ce8da0d2744477bd10e13->enter($__internal_87b37901d23573fb9b6d5b1805dedf315e7dd3eb171ce8da0d2744477bd10e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sac/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8f2a04cfd0c5f1a70a88873e827f013f0036297ca06769ddcdf67a68ee00aa4->leave($__internal_e8f2a04cfd0c5f1a70a88873e827f013f0036297ca06769ddcdf67a68ee00aa4_prof);

        
        $__internal_87b37901d23573fb9b6d5b1805dedf315e7dd3eb171ce8da0d2744477bd10e13->leave($__internal_87b37901d23573fb9b6d5b1805dedf315e7dd3eb171ce8da0d2744477bd10e13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcdd8172dccbce3fe30956f86b2bd972891d143700e668f06893edd32cb40eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdd8172dccbce3fe30956f86b2bd972891d143700e668f06893edd32cb40eb6->enter($__internal_fcdd8172dccbce3fe30956f86b2bd972891d143700e668f06893edd32cb40eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5049e9634a26c4176f673723fd088703bc6171ba7574b8181ea6caecf21d7aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5049e9634a26c4176f673723fd088703bc6171ba7574b8181ea6caecf21d7aa8->enter($__internal_5049e9634a26c4176f673723fd088703bc6171ba7574b8181ea6caecf21d7aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente</h1>

    <table>
        <tbody>
            <tr>
                <th>Id_cliente</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_edit", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5049e9634a26c4176f673723fd088703bc6171ba7574b8181ea6caecf21d7aa8->leave($__internal_5049e9634a26c4176f673723fd088703bc6171ba7574b8181ea6caecf21d7aa8_prof);

        
        $__internal_fcdd8172dccbce3fe30956f86b2bd972891d143700e668f06893edd32cb40eb6->leave($__internal_fcdd8172dccbce3fe30956f86b2bd972891d143700e668f06893edd32cb40eb6_prof);

    }

    public function getTemplateName()
    {
        return "sac/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  111 => 39,  105 => 36,  99 => 33,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cliente</h1>

    <table>
        <tbody>
            <tr>
                <th>Id_cliente</th>
                <td>{{ cliente.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ cliente.name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ cliente.email }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if cliente.createdAt %}{{ cliente.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{% if cliente.updatedAt %}{{ cliente.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('cliente_edit', { 'id': cliente.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "sac/show.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\sac\\show.html.twig");
    }
}
