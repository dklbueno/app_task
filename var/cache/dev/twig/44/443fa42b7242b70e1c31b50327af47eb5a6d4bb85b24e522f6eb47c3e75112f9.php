<?php

/* :pedido:show.html.twig */
class __TwigTemplate_0b8ceb18d3e9094ed3e3d576454a92832c14f0339675aadcb48cdb1a3b453f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:show.html.twig", 1);
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
        $__internal_8769609a557cf938692508c9ad7a460a117633ba3789605fee1a386dd5a3668a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8769609a557cf938692508c9ad7a460a117633ba3789605fee1a386dd5a3668a->enter($__internal_8769609a557cf938692508c9ad7a460a117633ba3789605fee1a386dd5a3668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:show.html.twig"));

        $__internal_0dddab480a52f2c560de7129831dfa2ceb67add1fbf8a9ac2c46296f7795b7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dddab480a52f2c560de7129831dfa2ceb67add1fbf8a9ac2c46296f7795b7a5->enter($__internal_0dddab480a52f2c560de7129831dfa2ceb67add1fbf8a9ac2c46296f7795b7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8769609a557cf938692508c9ad7a460a117633ba3789605fee1a386dd5a3668a->leave($__internal_8769609a557cf938692508c9ad7a460a117633ba3789605fee1a386dd5a3668a_prof);

        
        $__internal_0dddab480a52f2c560de7129831dfa2ceb67add1fbf8a9ac2c46296f7795b7a5->leave($__internal_0dddab480a52f2c560de7129831dfa2ceb67add1fbf8a9ac2c46296f7795b7a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ed6f7dc65b0405ddce63cc7afd73dbbc515d2bcfe97b07c01362e0f1266b0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed6f7dc65b0405ddce63cc7afd73dbbc515d2bcfe97b07c01362e0f1266b0a0->enter($__internal_6ed6f7dc65b0405ddce63cc7afd73dbbc515d2bcfe97b07c01362e0f1266b0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d76457c15964b56644b4280fb456c64ee4e54df472c9a4c5ba605c0bb0641c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d76457c15964b56644b4280fb456c64ee4e54df472c9a4c5ba605c0bb0641c6->enter($__internal_4d76457c15964b56644b4280fb456c64ee4e54df472c9a4c5ba605c0bb0641c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcliente</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "idCliente", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("id" => $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4d76457c15964b56644b4280fb456c64ee4e54df472c9a4c5ba605c0bb0641c6->leave($__internal_4d76457c15964b56644b4280fb456c64ee4e54df472c9a4c5ba605c0bb0641c6_prof);

        
        $__internal_6ed6f7dc65b0405ddce63cc7afd73dbbc515d2bcfe97b07c01362e0f1266b0a0->leave($__internal_6ed6f7dc65b0405ddce63cc7afd73dbbc515d2bcfe97b07c01362e0f1266b0a0_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ pedido.id }}</td>
            </tr>
            <tr>
                <th>Idcliente</th>
                <td>{{ pedido.idCliente }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ pedido.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ pedido.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('pedido_edit', { 'id': pedido.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pedido:show.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/pedido/show.html.twig");
    }
}
