<?php

/* pedido/index.html.twig */
class __TwigTemplate_194a22c3e6c51f8dc4acc828e714d8692dfc0e580556835aee4b92657bc8184a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/index.html.twig", 1);
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
        $__internal_ea81b21e43ba36fa39d42ceb0382267683d9c629ba2fa7546b7a7c81c1aa3c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea81b21e43ba36fa39d42ceb0382267683d9c629ba2fa7546b7a7c81c1aa3c43->enter($__internal_ea81b21e43ba36fa39d42ceb0382267683d9c629ba2fa7546b7a7c81c1aa3c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $__internal_2a27bd7b40638a43f3efff2b4e800e826b1a9031c082dde90064271e1e602745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a27bd7b40638a43f3efff2b4e800e826b1a9031c082dde90064271e1e602745->enter($__internal_2a27bd7b40638a43f3efff2b4e800e826b1a9031c082dde90064271e1e602745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea81b21e43ba36fa39d42ceb0382267683d9c629ba2fa7546b7a7c81c1aa3c43->leave($__internal_ea81b21e43ba36fa39d42ceb0382267683d9c629ba2fa7546b7a7c81c1aa3c43_prof);

        
        $__internal_2a27bd7b40638a43f3efff2b4e800e826b1a9031c082dde90064271e1e602745->leave($__internal_2a27bd7b40638a43f3efff2b4e800e826b1a9031c082dde90064271e1e602745_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8bd710dd6a69c351df4bc4b69aa806cb7d87c307a4ed204db099a39e89367a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bd710dd6a69c351df4bc4b69aa806cb7d87c307a4ed204db099a39e89367a9->enter($__internal_c8bd710dd6a69c351df4bc4b69aa806cb7d87c307a4ed204db099a39e89367a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23c2a0ad6152c54bdfa5b57e999ad1dc48e4bf14ac1dde7ba14e70e19eba1a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c2a0ad6152c54bdfa5b57e999ad1dc48e4bf14ac1dde7ba14e70e19eba1a32->enter($__internal_23c2a0ad6152c54bdfa5b57e999ad1dc48e4bf14ac1dde7ba14e70e19eba1a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_23c2a0ad6152c54bdfa5b57e999ad1dc48e4bf14ac1dde7ba14e70e19eba1a32->leave($__internal_23c2a0ad6152c54bdfa5b57e999ad1dc48e4bf14ac1dde7ba14e70e19eba1a32_prof);

        
        $__internal_c8bd710dd6a69c351df4bc4b69aa806cb7d87c307a4ed204db099a39e89367a9->leave($__internal_c8bd710dd6a69c351df4bc4b69aa806cb7d87c307a4ed204db099a39e89367a9_prof);

    }

    public function getTemplateName()
    {
        return "pedido/index.html.twig";
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
", "pedido/index.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\pedido\\index.html.twig");
    }
}
