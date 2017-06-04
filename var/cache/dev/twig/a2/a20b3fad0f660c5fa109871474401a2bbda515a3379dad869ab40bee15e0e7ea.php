<?php

/* :cliente:index.html.twig */
class __TwigTemplate_e9073df2bbde1297b87b75cd8bb8fec0f39541248ea85cbb2bc92f5bdeb3395b extends Twig_Template
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
        $__internal_cdcbf8f6f1887e12e791be3610fe34078f596cd7fb8d8f2b7df5ac3165d3ac95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcbf8f6f1887e12e791be3610fe34078f596cd7fb8d8f2b7df5ac3165d3ac95->enter($__internal_cdcbf8f6f1887e12e791be3610fe34078f596cd7fb8d8f2b7df5ac3165d3ac95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:index.html.twig"));

        $__internal_8a1822932ccba9a7a1483f2040c16c594626ad45c55968e3b6211c41066d4e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1822932ccba9a7a1483f2040c16c594626ad45c55968e3b6211c41066d4e7f->enter($__internal_8a1822932ccba9a7a1483f2040c16c594626ad45c55968e3b6211c41066d4e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdcbf8f6f1887e12e791be3610fe34078f596cd7fb8d8f2b7df5ac3165d3ac95->leave($__internal_cdcbf8f6f1887e12e791be3610fe34078f596cd7fb8d8f2b7df5ac3165d3ac95_prof);

        
        $__internal_8a1822932ccba9a7a1483f2040c16c594626ad45c55968e3b6211c41066d4e7f->leave($__internal_8a1822932ccba9a7a1483f2040c16c594626ad45c55968e3b6211c41066d4e7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08f041a4f61207b7da72305e6cf21d314800103c226b0cbe697f35617a1b311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08f041a4f61207b7da72305e6cf21d314800103c226b0cbe697f35617a1b311->enter($__internal_f08f041a4f61207b7da72305e6cf21d314800103c226b0cbe697f35617a1b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf729144a1c52cf21374d4562eb9168bef5134f7b28cb0d6c35a111882ada82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf729144a1c52cf21374d4562eb9168bef5134f7b28cb0d6c35a111882ada82b->enter($__internal_bf729144a1c52cf21374d4562eb9168bef5134f7b28cb0d6c35a111882ada82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf729144a1c52cf21374d4562eb9168bef5134f7b28cb0d6c35a111882ada82b->leave($__internal_bf729144a1c52cf21374d4562eb9168bef5134f7b28cb0d6c35a111882ada82b_prof);

        
        $__internal_f08f041a4f61207b7da72305e6cf21d314800103c226b0cbe697f35617a1b311->leave($__internal_f08f041a4f61207b7da72305e6cf21d314800103c226b0cbe697f35617a1b311_prof);

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
", ":cliente:index.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/cliente/index.html.twig");
    }
}
