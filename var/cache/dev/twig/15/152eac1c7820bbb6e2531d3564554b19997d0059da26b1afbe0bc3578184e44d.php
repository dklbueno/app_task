<?php

/* pedido/show.html.twig */
class __TwigTemplate_88c94beceac0cddc71ad50cc198cee1bfbae378d62e69dd8704d2590e2805d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/show.html.twig", 1);
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
        $__internal_a9a6f5a26a8392945b35f71b0d63e6e89cc9d010ed502681a25711d81d1dc15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a6f5a26a8392945b35f71b0d63e6e89cc9d010ed502681a25711d81d1dc15b->enter($__internal_a9a6f5a26a8392945b35f71b0d63e6e89cc9d010ed502681a25711d81d1dc15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $__internal_92a738eb2b77b6e6a363dc37ef194db25544f4dde9c3cc231a2cdfa6cbe95df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a738eb2b77b6e6a363dc37ef194db25544f4dde9c3cc231a2cdfa6cbe95df0->enter($__internal_92a738eb2b77b6e6a363dc37ef194db25544f4dde9c3cc231a2cdfa6cbe95df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a6f5a26a8392945b35f71b0d63e6e89cc9d010ed502681a25711d81d1dc15b->leave($__internal_a9a6f5a26a8392945b35f71b0d63e6e89cc9d010ed502681a25711d81d1dc15b_prof);

        
        $__internal_92a738eb2b77b6e6a363dc37ef194db25544f4dde9c3cc231a2cdfa6cbe95df0->leave($__internal_92a738eb2b77b6e6a363dc37ef194db25544f4dde9c3cc231a2cdfa6cbe95df0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f15b0623a13a2f0ff5135f130b1ffda800dc58a2574583be8dc33c4e2471a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f15b0623a13a2f0ff5135f130b1ffda800dc58a2574583be8dc33c4e2471a26->enter($__internal_6f15b0623a13a2f0ff5135f130b1ffda800dc58a2574583be8dc33c4e2471a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_008f4bed9fdfd42effb5680d0440f172a8c3eb3b9aafefd91523cbac6dfdcfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008f4bed9fdfd42effb5680d0440f172a8c3eb3b9aafefd91523cbac6dfdcfae->enter($__internal_008f4bed9fdfd42effb5680d0440f172a8c3eb3b9aafefd91523cbac6dfdcfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_008f4bed9fdfd42effb5680d0440f172a8c3eb3b9aafefd91523cbac6dfdcfae->leave($__internal_008f4bed9fdfd42effb5680d0440f172a8c3eb3b9aafefd91523cbac6dfdcfae_prof);

        
        $__internal_6f15b0623a13a2f0ff5135f130b1ffda800dc58a2574583be8dc33c4e2471a26->leave($__internal_6f15b0623a13a2f0ff5135f130b1ffda800dc58a2574583be8dc33c4e2471a26_prof);

    }

    public function getTemplateName()
    {
        return "pedido/show.html.twig";
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
", "pedido/show.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\pedido\\show.html.twig");
    }
}
