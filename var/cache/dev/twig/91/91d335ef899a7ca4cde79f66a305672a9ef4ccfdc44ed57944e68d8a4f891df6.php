<?php

/* :cliente:show.html.twig */
class __TwigTemplate_51f6817318f8d312a190eec4791a4f537ad1441b906318a69263db235c77bfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:show.html.twig", 1);
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
        $__internal_5f8d897d3383c643c03db95eb6299ca1b06872646afaf081b3d3cec20de1cc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8d897d3383c643c03db95eb6299ca1b06872646afaf081b3d3cec20de1cc9c->enter($__internal_5f8d897d3383c643c03db95eb6299ca1b06872646afaf081b3d3cec20de1cc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $__internal_4b3a402237997e10f6d9f680d76e55ac4969a39f43d6f17abb71e47bcbf9059a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3a402237997e10f6d9f680d76e55ac4969a39f43d6f17abb71e47bcbf9059a->enter($__internal_4b3a402237997e10f6d9f680d76e55ac4969a39f43d6f17abb71e47bcbf9059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f8d897d3383c643c03db95eb6299ca1b06872646afaf081b3d3cec20de1cc9c->leave($__internal_5f8d897d3383c643c03db95eb6299ca1b06872646afaf081b3d3cec20de1cc9c_prof);

        
        $__internal_4b3a402237997e10f6d9f680d76e55ac4969a39f43d6f17abb71e47bcbf9059a->leave($__internal_4b3a402237997e10f6d9f680d76e55ac4969a39f43d6f17abb71e47bcbf9059a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4beea3cc29e6572696aa0d398e003df8f71298f33c99d4ca7f29f506611f9a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4beea3cc29e6572696aa0d398e003df8f71298f33c99d4ca7f29f506611f9a5d->enter($__internal_4beea3cc29e6572696aa0d398e003df8f71298f33c99d4ca7f29f506611f9a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a65c4d35fc9dc04c8381fbdc3a8d0f5de7319d2dc3624a3dededd7e72351934f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65c4d35fc9dc04c8381fbdc3a8d0f5de7319d2dc3624a3dededd7e72351934f->enter($__internal_a65c4d35fc9dc04c8381fbdc3a8d0f5de7319d2dc3624a3dededd7e72351934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a65c4d35fc9dc04c8381fbdc3a8d0f5de7319d2dc3624a3dededd7e72351934f->leave($__internal_a65c4d35fc9dc04c8381fbdc3a8d0f5de7319d2dc3624a3dededd7e72351934f_prof);

        
        $__internal_4beea3cc29e6572696aa0d398e003df8f71298f33c99d4ca7f29f506611f9a5d->leave($__internal_4beea3cc29e6572696aa0d398e003df8f71298f33c99d4ca7f29f506611f9a5d_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:show.html.twig";
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
", ":cliente:show.html.twig", "/var/www/html/app_task/app/Resources/views/cliente/show.html.twig");
    }
}
