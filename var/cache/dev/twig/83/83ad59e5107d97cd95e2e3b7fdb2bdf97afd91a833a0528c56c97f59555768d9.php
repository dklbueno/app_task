<?php

/* :pedido:index.html.twig */
class __TwigTemplate_96981aaa58cc68e538b69a10eddceff23a56cee54f4d0a22853978d358b3b964 extends Twig_Template
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
        $__internal_91e509f2f661866ddc3919fb8915906898072be4b93acc2d6ddb403b710b8cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e509f2f661866ddc3919fb8915906898072be4b93acc2d6ddb403b710b8cd5->enter($__internal_91e509f2f661866ddc3919fb8915906898072be4b93acc2d6ddb403b710b8cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:index.html.twig"));

        $__internal_fce051603b2e9388be390c6f6b557d878e0b8e79f9cb57e15faa4a95f05c292f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce051603b2e9388be390c6f6b557d878e0b8e79f9cb57e15faa4a95f05c292f->enter($__internal_fce051603b2e9388be390c6f6b557d878e0b8e79f9cb57e15faa4a95f05c292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e509f2f661866ddc3919fb8915906898072be4b93acc2d6ddb403b710b8cd5->leave($__internal_91e509f2f661866ddc3919fb8915906898072be4b93acc2d6ddb403b710b8cd5_prof);

        
        $__internal_fce051603b2e9388be390c6f6b557d878e0b8e79f9cb57e15faa4a95f05c292f->leave($__internal_fce051603b2e9388be390c6f6b557d878e0b8e79f9cb57e15faa4a95f05c292f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1d55d842ceb67eee9477a733539e9625bc7ffde9b88ce840bc9aaa72c311320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d55d842ceb67eee9477a733539e9625bc7ffde9b88ce840bc9aaa72c311320->enter($__internal_d1d55d842ceb67eee9477a733539e9625bc7ffde9b88ce840bc9aaa72c311320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96e44d6f7083277e38137aaea3c0cba99050ea5860b4e11b4a44c2f72a1672d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e44d6f7083277e38137aaea3c0cba99050ea5860b4e11b4a44c2f72a1672d0->enter($__internal_96e44d6f7083277e38137aaea3c0cba99050ea5860b4e11b4a44c2f72a1672d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96e44d6f7083277e38137aaea3c0cba99050ea5860b4e11b4a44c2f72a1672d0->leave($__internal_96e44d6f7083277e38137aaea3c0cba99050ea5860b4e11b4a44c2f72a1672d0_prof);

        
        $__internal_d1d55d842ceb67eee9477a733539e9625bc7ffde9b88ce840bc9aaa72c311320->leave($__internal_d1d55d842ceb67eee9477a733539e9625bc7ffde9b88ce840bc9aaa72c311320_prof);

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
", ":pedido:index.html.twig", "/var/www/html/app_task/app/Resources/views/pedido/index.html.twig");
    }
}
