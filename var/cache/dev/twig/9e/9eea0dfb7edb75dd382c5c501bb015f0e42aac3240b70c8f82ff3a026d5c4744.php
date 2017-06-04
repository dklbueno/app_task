<?php

/* :sac:show.html.twig */
class __TwigTemplate_8865ea21ba936e153cd81007e2b14698a7c3ae0cd06b4fb111731488c94a1666 extends Twig_Template
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
        $__internal_675f36fe2864f60734244209bdbdf0e80db205528f04f628da60470dcc3352f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675f36fe2864f60734244209bdbdf0e80db205528f04f628da60470dcc3352f8->enter($__internal_675f36fe2864f60734244209bdbdf0e80db205528f04f628da60470dcc3352f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:show.html.twig"));

        $__internal_2e47c3f6222d2f98670f4fe6d059c5b50e1ead9ca614d892f22fbc975db5bc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e47c3f6222d2f98670f4fe6d059c5b50e1ead9ca614d892f22fbc975db5bc84->enter($__internal_2e47c3f6222d2f98670f4fe6d059c5b50e1ead9ca614d892f22fbc975db5bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675f36fe2864f60734244209bdbdf0e80db205528f04f628da60470dcc3352f8->leave($__internal_675f36fe2864f60734244209bdbdf0e80db205528f04f628da60470dcc3352f8_prof);

        
        $__internal_2e47c3f6222d2f98670f4fe6d059c5b50e1ead9ca614d892f22fbc975db5bc84->leave($__internal_2e47c3f6222d2f98670f4fe6d059c5b50e1ead9ca614d892f22fbc975db5bc84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99aa6b72595877dc7caf2a0c2765d1bddbd0755ab0ba96c5dadf19e6abdf34b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99aa6b72595877dc7caf2a0c2765d1bddbd0755ab0ba96c5dadf19e6abdf34b9->enter($__internal_99aa6b72595877dc7caf2a0c2765d1bddbd0755ab0ba96c5dadf19e6abdf34b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fb4b5169c76ab5d72d123112030fd55974d2e23d0bbe3c945597d8d101459cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb4b5169c76ab5d72d123112030fd55974d2e23d0bbe3c945597d8d101459cc->enter($__internal_5fb4b5169c76ab5d72d123112030fd55974d2e23d0bbe3c945597d8d101459cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5fb4b5169c76ab5d72d123112030fd55974d2e23d0bbe3c945597d8d101459cc->leave($__internal_5fb4b5169c76ab5d72d123112030fd55974d2e23d0bbe3c945597d8d101459cc_prof);

        
        $__internal_99aa6b72595877dc7caf2a0c2765d1bddbd0755ab0ba96c5dadf19e6abdf34b9->leave($__internal_99aa6b72595877dc7caf2a0c2765d1bddbd0755ab0ba96c5dadf19e6abdf34b9_prof);

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
", ":sac:show.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/sac/show.html.twig");
    }
}
