<?php

/* :sac:show.html.twig */
class __TwigTemplate_235c48f220037bdd6f29c12647be38bc9223b80516e27a6f1d87890cefc3dd60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sac:show.html.twig", 1);
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
        $__internal_68cf2eef0072aa5e1763f4dac46f30e7542a5f7fd3849a0f2af33768c02770e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cf2eef0072aa5e1763f4dac46f30e7542a5f7fd3849a0f2af33768c02770e6->enter($__internal_68cf2eef0072aa5e1763f4dac46f30e7542a5f7fd3849a0f2af33768c02770e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:show.html.twig"));

        $__internal_ac8e6eedb2b9168a95f41d7ce6f73ea87de536682aeb8f86e86bacd8252d4667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8e6eedb2b9168a95f41d7ce6f73ea87de536682aeb8f86e86bacd8252d4667->enter($__internal_ac8e6eedb2b9168a95f41d7ce6f73ea87de536682aeb8f86e86bacd8252d4667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68cf2eef0072aa5e1763f4dac46f30e7542a5f7fd3849a0f2af33768c02770e6->leave($__internal_68cf2eef0072aa5e1763f4dac46f30e7542a5f7fd3849a0f2af33768c02770e6_prof);

        
        $__internal_ac8e6eedb2b9168a95f41d7ce6f73ea87de536682aeb8f86e86bacd8252d4667->leave($__internal_ac8e6eedb2b9168a95f41d7ce6f73ea87de536682aeb8f86e86bacd8252d4667_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_317e018e582fd38892d2b4f6818581ae981f0964215ffa0501cb6f7d31a154ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317e018e582fd38892d2b4f6818581ae981f0964215ffa0501cb6f7d31a154ed->enter($__internal_317e018e582fd38892d2b4f6818581ae981f0964215ffa0501cb6f7d31a154ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96c79f31c4c5c08fd5cb7b90a4ac708be33b1fa3552e6caaec969b73c171734d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c79f31c4c5c08fd5cb7b90a4ac708be33b1fa3552e6caaec969b73c171734d->enter($__internal_96c79f31c4c5c08fd5cb7b90a4ac708be33b1fa3552e6caaec969b73c171734d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96c79f31c4c5c08fd5cb7b90a4ac708be33b1fa3552e6caaec969b73c171734d->leave($__internal_96c79f31c4c5c08fd5cb7b90a4ac708be33b1fa3552e6caaec969b73c171734d_prof);

        
        $__internal_317e018e582fd38892d2b4f6818581ae981f0964215ffa0501cb6f7d31a154ed->leave($__internal_317e018e582fd38892d2b4f6818581ae981f0964215ffa0501cb6f7d31a154ed_prof);

    }

    public function getTemplateName()
    {
        return ":sac:show.html.twig";
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
", ":sac:show.html.twig", "/var/www/html/app_task/app/Resources/views/sac/show.html.twig");
    }
}
