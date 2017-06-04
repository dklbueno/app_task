<?php

/* chamado/index.html.twig */
class __TwigTemplate_a7b8e64259d58cb75e3f09c0fbeebfaf47cf44c97cf5126bff87da662036254c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chamado/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'titpag' => array($this, 'block_titpag'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe57c477489a80e31e4910efc8afbb5387c0fa8a329544cf1f69b865820b659c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe57c477489a80e31e4910efc8afbb5387c0fa8a329544cf1f69b865820b659c->enter($__internal_fe57c477489a80e31e4910efc8afbb5387c0fa8a329544cf1f69b865820b659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/index.html.twig"));

        $__internal_1b8749ab8d895c5d836e67106c4ec22f26481df7ab46a7657a477748526cd343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8749ab8d895c5d836e67106c4ec22f26481df7ab46a7657a477748526cd343->enter($__internal_1b8749ab8d895c5d836e67106c4ec22f26481df7ab46a7657a477748526cd343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe57c477489a80e31e4910efc8afbb5387c0fa8a329544cf1f69b865820b659c->leave($__internal_fe57c477489a80e31e4910efc8afbb5387c0fa8a329544cf1f69b865820b659c_prof);

        
        $__internal_1b8749ab8d895c5d836e67106c4ec22f26481df7ab46a7657a477748526cd343->leave($__internal_1b8749ab8d895c5d836e67106c4ec22f26481df7ab46a7657a477748526cd343_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0ea96d8c4ea9e5affd76e2e2b160568921bd822aacda9c0539e33c625c8622b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea96d8c4ea9e5affd76e2e2b160568921bd822aacda9c0539e33c625c8622b5->enter($__internal_0ea96d8c4ea9e5affd76e2e2b160568921bd822aacda9c0539e33c625c8622b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_00ee34366b84ecf8753dd2664de1a763e4c5a7755dfb242a0fd171ba2b953d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ee34366b84ecf8753dd2664de1a763e4c5a7755dfb242a0fd171ba2b953d28->enter($__internal_00ee34366b84ecf8753dd2664de1a763e4c5a7755dfb242a0fd171ba2b953d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "atividade";
        
        $__internal_00ee34366b84ecf8753dd2664de1a763e4c5a7755dfb242a0fd171ba2b953d28->leave($__internal_00ee34366b84ecf8753dd2664de1a763e4c5a7755dfb242a0fd171ba2b953d28_prof);

        
        $__internal_0ea96d8c4ea9e5affd76e2e2b160568921bd822aacda9c0539e33c625c8622b5->leave($__internal_0ea96d8c4ea9e5affd76e2e2b160568921bd822aacda9c0539e33c625c8622b5_prof);

    }

    // line 5
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_c63b25d341af89293952b5de3ca6eabc6c9a99ed59035e7c223c5df0d665a2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c63b25d341af89293952b5de3ca6eabc6c9a99ed59035e7c223c5df0d665a2f6->enter($__internal_c63b25d341af89293952b5de3ca6eabc6c9a99ed59035e7c223c5df0d665a2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_92521aed9698821da62751aaf22a6113cde924131a36a474bc76e14830ca2f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92521aed9698821da62751aaf22a6113cde924131a36a474bc76e14830ca2f0f->enter($__internal_92521aed9698821da62751aaf22a6113cde924131a36a474bc76e14830ca2f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        echo "Lista de Atividades";
        
        $__internal_92521aed9698821da62751aaf22a6113cde924131a36a474bc76e14830ca2f0f->leave($__internal_92521aed9698821da62751aaf22a6113cde924131a36a474bc76e14830ca2f0f_prof);

        
        $__internal_c63b25d341af89293952b5de3ca6eabc6c9a99ed59035e7c223c5df0d665a2f6->leave($__internal_c63b25d341af89293952b5de3ca6eabc6c9a99ed59035e7c223c5df0d665a2f6_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_1cb1aeec1855245f938908112597e3c5a1807df937a84217362712d0d861b5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb1aeec1855245f938908112597e3c5a1807df937a84217362712d0d861b5ab->enter($__internal_1cb1aeec1855245f938908112597e3c5a1807df937a84217362712d0d861b5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8bb0d33e8f280bf5cb5b7cf773aaa98c3bc19e75a64c1027e88d2f5eac83a309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb0d33e8f280bf5cb5b7cf773aaa98c3bc19e75a64c1027e88d2f5eac83a309->enter($__internal_8bb0d33e8f280bf5cb5b7cf773aaa98c3bc19e75a64c1027e88d2f5eac83a309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"content\">
    <form class=\"form-inline\" method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">
      <div class=\"form-group\">
        <label for=\"email\">Email address:</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label for=\"id_pedido\">Pedido:</label>
        <input type=\"number\" name=\"id_pedido\" class=\"form-control\" id=\"id_pedido\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id_pedido"]) ? $context["id_pedido"] : $this->getContext($context, "id_pedido")), "html", null, true);
        echo "\">
      </div>      
      <button type=\"submit\" name=\"find\" value=\"find\" class=\"btn btn-default\">Filtrar</button>
    </form>
    <table id=\"chamados\" class=\"display table table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Id Pedido</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["chamado"]) {
            echo "            
            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "id_pedido", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chamado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    ";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "


    </div>
";
        
        $__internal_8bb0d33e8f280bf5cb5b7cf773aaa98c3bc19e75a64c1027e88d2f5eac83a309->leave($__internal_8bb0d33e8f280bf5cb5b7cf773aaa98c3bc19e75a64c1027e88d2f5eac83a309_prof);

        
        $__internal_1cb1aeec1855245f938908112597e3c5a1807df937a84217362712d0d861b5ab->leave($__internal_1cb1aeec1855245f938908112597e3c5a1807df937a84217362712d0d861b5ab_prof);

    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5c7e4582b5b3d6e96ae4f994a07ba10b6415281df86087ca156ce70fefe8c396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7e4582b5b3d6e96ae4f994a07ba10b6415281df86087ca156ce70fefe8c396->enter($__internal_5c7e4582b5b3d6e96ae4f994a07ba10b6415281df86087ca156ce70fefe8c396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_03fcf14283366b813bcd199a1e371b87b6813d9cf8c3232ffe5e53c8b163f462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fcf14283366b813bcd199a1e371b87b6813d9cf8c3232ffe5e53c8b163f462->enter($__internal_03fcf14283366b813bcd199a1e371b87b6813d9cf8c3232ffe5e53c8b163f462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 50
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_03fcf14283366b813bcd199a1e371b87b6813d9cf8c3232ffe5e53c8b163f462->leave($__internal_03fcf14283366b813bcd199a1e371b87b6813d9cf8c3232ffe5e53c8b163f462_prof);

        
        $__internal_5c7e4582b5b3d6e96ae4f994a07ba10b6415281df86087ca156ce70fefe8c396->leave($__internal_5c7e4582b5b3d6e96ae4f994a07ba10b6415281df86087ca156ce70fefe8c396_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_637453b55acb4abbdd63f583acc5f96fb041cf869f4d8e2c54ef5f8787327aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637453b55acb4abbdd63f583acc5f96fb041cf869f4d8e2c54ef5f8787327aec->enter($__internal_637453b55acb4abbdd63f583acc5f96fb041cf869f4d8e2c54ef5f8787327aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1c6d8bb43597f54b6df3d99c8e0f27ef0955029b29930bf2c90dee1310ad7f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6d8bb43597f54b6df3d99c8e0f27ef0955029b29930bf2c90dee1310ad7f87->enter($__internal_1c6d8bb43597f54b6df3d99c8e0f27ef0955029b29930bf2c90dee1310ad7f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
    /*\$(function(){
        \$('#chamados').DataTable({
            lengthMenu: [5, 10, 15, 25, 100],
        });
    })*/
    </script>
";
        
        $__internal_1c6d8bb43597f54b6df3d99c8e0f27ef0955029b29930bf2c90dee1310ad7f87->leave($__internal_1c6d8bb43597f54b6df3d99c8e0f27ef0955029b29930bf2c90dee1310ad7f87_prof);

        
        $__internal_637453b55acb4abbdd63f583acc5f96fb041cf869f4d8e2c54ef5f8787327aec->leave($__internal_637453b55acb4abbdd63f583acc5f96fb041cf869f4d8e2c54ef5f8787327aec_prof);

    }

    public function getTemplateName()
    {
        return "chamado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 54,  197 => 53,  184 => 50,  175 => 49,  160 => 43,  155 => 40,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  123 => 31,  105 => 16,  98 => 12,  92 => 9,  89 => 8,  80 => 7,  62 => 5,  44 => 3,  11 => 1,);
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

{% block body_id 'atividade' %}

{% block titpag 'Lista de Atividades' %}

{% block content %}
    <div class=\"content\">
    <form class=\"form-inline\" method=\"post\" action=\"{{ path('chamado_index') }}\">
      <div class=\"form-group\">
        <label for=\"email\">Email address:</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"{{ email }}\">
      </div>
      <div class=\"form-group\">
        <label for=\"id_pedido\">Pedido:</label>
        <input type=\"number\" name=\"id_pedido\" class=\"form-control\" id=\"id_pedido\" value=\"{{ id_pedido }}\">
      </div>      
      <button type=\"submit\" name=\"find\" value=\"find\" class=\"btn btn-default\">Filtrar</button>
    </form>
    <table id=\"chamados\" class=\"display table table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Id Pedido</th>
            </tr>
        </thead>
        <tbody>
            {% for chamado in pagination %}            
            <tr>
                <td>{{ chamado.id }}</td>
                <td>{{ chamado.title }}</td>
                <td>{{ chamado.name }}</td>
                <td>{{ chamado.email }}</td>
                <td>{{ chamado.id_pedido }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    {{ knp_pagination_render(pagination) }}


    </div>
{% endblock %}

{% block sidebar %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
    /*\$(function(){
        \$('#chamados').DataTable({
            lengthMenu: [5, 10, 15, 25, 100],
        });
    })*/
    </script>
{% endblock %}
", "chamado/index.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\chamado\\index.html.twig");
    }
}
