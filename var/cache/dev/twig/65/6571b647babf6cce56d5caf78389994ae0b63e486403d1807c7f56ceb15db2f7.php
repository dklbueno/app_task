<?php

/* cliente/show.html.twig */
class __TwigTemplate_8b546b50318a4ddb9aa8c1ee2ee7e836d8b34380b6756dcd2aa731f379589f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/show.html.twig", 1);
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
        $__internal_92baec32da527bda89e99bfcff06b27a43e32f27e37c96ec0d458c50b17a9e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92baec32da527bda89e99bfcff06b27a43e32f27e37c96ec0d458c50b17a9e07->enter($__internal_92baec32da527bda89e99bfcff06b27a43e32f27e37c96ec0d458c50b17a9e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $__internal_0984a95d224561f737fb8aa44663472a356dd14cc813b86c84bf6e518e40e169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0984a95d224561f737fb8aa44663472a356dd14cc813b86c84bf6e518e40e169->enter($__internal_0984a95d224561f737fb8aa44663472a356dd14cc813b86c84bf6e518e40e169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92baec32da527bda89e99bfcff06b27a43e32f27e37c96ec0d458c50b17a9e07->leave($__internal_92baec32da527bda89e99bfcff06b27a43e32f27e37c96ec0d458c50b17a9e07_prof);

        
        $__internal_0984a95d224561f737fb8aa44663472a356dd14cc813b86c84bf6e518e40e169->leave($__internal_0984a95d224561f737fb8aa44663472a356dd14cc813b86c84bf6e518e40e169_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eae14a2e58080991fc1144b3450f1680814b2c81337246eb8b189d30740a5620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae14a2e58080991fc1144b3450f1680814b2c81337246eb8b189d30740a5620->enter($__internal_eae14a2e58080991fc1144b3450f1680814b2c81337246eb8b189d30740a5620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be0aff26e4e07301c41969cef3bb8de4453640caff7548030cb26e71a3e68f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0aff26e4e07301c41969cef3bb8de4453640caff7548030cb26e71a3e68f29->enter($__internal_be0aff26e4e07301c41969cef3bb8de4453640caff7548030cb26e71a3e68f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_be0aff26e4e07301c41969cef3bb8de4453640caff7548030cb26e71a3e68f29->leave($__internal_be0aff26e4e07301c41969cef3bb8de4453640caff7548030cb26e71a3e68f29_prof);

        
        $__internal_eae14a2e58080991fc1144b3450f1680814b2c81337246eb8b189d30740a5620->leave($__internal_eae14a2e58080991fc1144b3450f1680814b2c81337246eb8b189d30740a5620_prof);

    }

    public function getTemplateName()
    {
        return "cliente/show.html.twig";
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
", "cliente/show.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\cliente\\show.html.twig");
    }
}
