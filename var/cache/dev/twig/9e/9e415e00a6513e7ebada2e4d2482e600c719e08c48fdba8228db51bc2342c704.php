<?php

/* :cliente:index.html.twig */
class __TwigTemplate_ac2409d2910c997e945547e1f727264a465866761ea62824f8d96c96e3076c24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:index.html.twig", 1);
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
        $__internal_134f95fd03dfb24a5959b932474264ae4ea3c466284f6117b8e4c4a425bd204e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134f95fd03dfb24a5959b932474264ae4ea3c466284f6117b8e4c4a425bd204e->enter($__internal_134f95fd03dfb24a5959b932474264ae4ea3c466284f6117b8e4c4a425bd204e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:index.html.twig"));

        $__internal_7f381ff3188cf24043d022766d85accf2bd71530859e5ef3bd50b338b2906629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f381ff3188cf24043d022766d85accf2bd71530859e5ef3bd50b338b2906629->enter($__internal_7f381ff3188cf24043d022766d85accf2bd71530859e5ef3bd50b338b2906629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134f95fd03dfb24a5959b932474264ae4ea3c466284f6117b8e4c4a425bd204e->leave($__internal_134f95fd03dfb24a5959b932474264ae4ea3c466284f6117b8e4c4a425bd204e_prof);

        
        $__internal_7f381ff3188cf24043d022766d85accf2bd71530859e5ef3bd50b338b2906629->leave($__internal_7f381ff3188cf24043d022766d85accf2bd71530859e5ef3bd50b338b2906629_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e557e55a82bf18cbe0e7464cda9fd57df32c64f3a5fe0b2a610e8a091f8a8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e557e55a82bf18cbe0e7464cda9fd57df32c64f3a5fe0b2a610e8a091f8a8de->enter($__internal_3e557e55a82bf18cbe0e7464cda9fd57df32c64f3a5fe0b2a610e8a091f8a8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d89066edf54e1dc81b5d01c539f54dfb9a3f3f5a7926253bb200f9610bc3da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d89066edf54e1dc81b5d01c539f54dfb9a3f3f5a7926253bb200f9610bc3da0->enter($__internal_7d89066edf54e1dc81b5d01c539f54dfb9a3f3f5a7926253bb200f9610bc3da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Clientes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id_cliente</th>
                <th>Name</th>
                <th>Email</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["cliente"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["cliente"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_new");
        echo "\">Create a new cliente</a>
        </li>
    </ul>
";
        
        $__internal_7d89066edf54e1dc81b5d01c539f54dfb9a3f3f5a7926253bb200f9610bc3da0->leave($__internal_7d89066edf54e1dc81b5d01c539f54dfb9a3f3f5a7926253bb200f9610bc3da0_prof);

        
        $__internal_3e557e55a82bf18cbe0e7464cda9fd57df32c64f3a5fe0b2a610e8a091f8a8de->leave($__internal_3e557e55a82bf18cbe0e7464cda9fd57df32c64f3a5fe0b2a610e8a091f8a8de_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  119 => 37,  107 => 31,  101 => 28,  92 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Clientes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id_cliente</th>
                <th>Name</th>
                <th>Email</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for cliente in clientes %}
            <tr>
                <td><a href=\"{{ path('cliente_show', { 'id': cliente.id }) }}\">{{ cliente.id }}</a></td>
                <td>{{ cliente.name }}</td>
                <td>{{ cliente.email }}</td>
                <td>{% if cliente.createdAt %}{{ cliente.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if cliente.updatedAt %}{{ cliente.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('cliente_show', { 'id': cliente.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('cliente_edit', { 'id': cliente.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cliente_new') }}\">Create a new cliente</a>
        </li>
    </ul>
{% endblock %}
", ":cliente:index.html.twig", "/var/www/html/app_task/app/Resources/views/cliente/index.html.twig");
    }
}