<?php

/* :pedido:index.html.twig */
class __TwigTemplate_e8e584630ba81e91e230ee6e4506318f723bf792da2292b0ce864caf6beb038e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:index.html.twig", 1);
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
        $__internal_55fa9ed5d6990d59a140e080548a2e61d20abbed5e16e4d58006d05d54ccf773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fa9ed5d6990d59a140e080548a2e61d20abbed5e16e4d58006d05d54ccf773->enter($__internal_55fa9ed5d6990d59a140e080548a2e61d20abbed5e16e4d58006d05d54ccf773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:index.html.twig"));

        $__internal_ab8a01206646ac695ca2f9c6213eacadafedffa6ed47bca0efbaae279abc3d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8a01206646ac695ca2f9c6213eacadafedffa6ed47bca0efbaae279abc3d57->enter($__internal_ab8a01206646ac695ca2f9c6213eacadafedffa6ed47bca0efbaae279abc3d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55fa9ed5d6990d59a140e080548a2e61d20abbed5e16e4d58006d05d54ccf773->leave($__internal_55fa9ed5d6990d59a140e080548a2e61d20abbed5e16e4d58006d05d54ccf773_prof);

        
        $__internal_ab8a01206646ac695ca2f9c6213eacadafedffa6ed47bca0efbaae279abc3d57->leave($__internal_ab8a01206646ac695ca2f9c6213eacadafedffa6ed47bca0efbaae279abc3d57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da522b2538e4907ffa024616a41b1f1f620d1a3de420e5578e820ce119f00f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da522b2538e4907ffa024616a41b1f1f620d1a3de420e5578e820ce119f00f00->enter($__internal_da522b2538e4907ffa024616a41b1f1f620d1a3de420e5578e820ce119f00f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85c3aa04e6493b55ad429479a013d55286950ea746a791a2525e8af446657d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c3aa04e6493b55ad429479a013d55286950ea746a791a2525e8af446657d71->enter($__internal_85c3aa04e6493b55ad429479a013d55286950ea746a791a2525e8af446657d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedidos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idcliente</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_show", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idCliente", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_show", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("id" => $this->getAttribute($context["pedido"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_new");
        echo "\">Create a new pedido</a>
        </li>
    </ul>
";
        
        $__internal_85c3aa04e6493b55ad429479a013d55286950ea746a791a2525e8af446657d71->leave($__internal_85c3aa04e6493b55ad429479a013d55286950ea746a791a2525e8af446657d71_prof);

        
        $__internal_da522b2538e4907ffa024616a41b1f1f620d1a3de420e5578e820ce119f00f00->leave($__internal_da522b2538e4907ffa024616a41b1f1f620d1a3de420e5578e820ce119f00f00_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pedidos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idcliente</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for pedido in pedidos %}
            <tr>
                <td><a href=\"{{ path('pedido_show', { 'id': pedido.id }) }}\">{{ pedido.id }}</a></td>
                <td>{{ pedido.idCliente }}</td>
                <td>{{ pedido.title }}</td>
                <td>{{ pedido.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('pedido_show', { 'id': pedido.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('pedido_edit', { 'id': pedido.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pedido_new') }}\">Create a new pedido</a>
        </li>
    </ul>
{% endblock %}
", ":pedido:index.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/pedido/index.html.twig");
    }
}
