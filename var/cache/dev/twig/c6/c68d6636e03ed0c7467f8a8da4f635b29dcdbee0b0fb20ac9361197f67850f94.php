<?php

/* :pedido:show.html.twig */
class __TwigTemplate_981c1972cf05f0a11caee5b7de3cd0cc896c1f474e9c7f647e77fb07eb96a79d extends Twig_Template
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
        $__internal_36934463152dfd3718f9d4c06d2d028288222ff4e533992f01a5ccb393b5e65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36934463152dfd3718f9d4c06d2d028288222ff4e533992f01a5ccb393b5e65d->enter($__internal_36934463152dfd3718f9d4c06d2d028288222ff4e533992f01a5ccb393b5e65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:show.html.twig"));

        $__internal_e8081483334008c7024b3213d718c9b9bdd473a22393a108eadbbf778bcc38d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8081483334008c7024b3213d718c9b9bdd473a22393a108eadbbf778bcc38d4->enter($__internal_e8081483334008c7024b3213d718c9b9bdd473a22393a108eadbbf778bcc38d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36934463152dfd3718f9d4c06d2d028288222ff4e533992f01a5ccb393b5e65d->leave($__internal_36934463152dfd3718f9d4c06d2d028288222ff4e533992f01a5ccb393b5e65d_prof);

        
        $__internal_e8081483334008c7024b3213d718c9b9bdd473a22393a108eadbbf778bcc38d4->leave($__internal_e8081483334008c7024b3213d718c9b9bdd473a22393a108eadbbf778bcc38d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1513655d723d68d3bdba26cdbb9fb4779e6f2553f578e8b4e87e2f9baf478900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1513655d723d68d3bdba26cdbb9fb4779e6f2553f578e8b4e87e2f9baf478900->enter($__internal_1513655d723d68d3bdba26cdbb9fb4779e6f2553f578e8b4e87e2f9baf478900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4db5369bd4b95a64254a2487d9e452859da31cda82e87a9f320139e94997f942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db5369bd4b95a64254a2487d9e452859da31cda82e87a9f320139e94997f942->enter($__internal_4db5369bd4b95a64254a2487d9e452859da31cda82e87a9f320139e94997f942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4db5369bd4b95a64254a2487d9e452859da31cda82e87a9f320139e94997f942->leave($__internal_4db5369bd4b95a64254a2487d9e452859da31cda82e87a9f320139e94997f942_prof);

        
        $__internal_1513655d723d68d3bdba26cdbb9fb4779e6f2553f578e8b4e87e2f9baf478900->leave($__internal_1513655d723d68d3bdba26cdbb9fb4779e6f2553f578e8b4e87e2f9baf478900_prof);

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
", ":pedido:show.html.twig", "/var/www/html/app_task/app/Resources/views/pedido/show.html.twig");
    }
}
