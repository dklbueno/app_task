<?php

/* :chamado:index.html.twig */
class __TwigTemplate_baf5aeb63a960f43fa627b63f3e9c88ec76a2d5ed1a8085aad65b4be232078ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chamado:index.html.twig", 1);
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
        $__internal_efb505c264174b81c671eeab7f6cd5abea3d4b0111b7b0c260e690b729549cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb505c264174b81c671eeab7f6cd5abea3d4b0111b7b0c260e690b729549cbe->enter($__internal_efb505c264174b81c671eeab7f6cd5abea3d4b0111b7b0c260e690b729549cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:index.html.twig"));

        $__internal_27778066b74b71e6679e0b140fe0312fed1cd98a9d938e5cd7b685d350995e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27778066b74b71e6679e0b140fe0312fed1cd98a9d938e5cd7b685d350995e1f->enter($__internal_27778066b74b71e6679e0b140fe0312fed1cd98a9d938e5cd7b685d350995e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb505c264174b81c671eeab7f6cd5abea3d4b0111b7b0c260e690b729549cbe->leave($__internal_efb505c264174b81c671eeab7f6cd5abea3d4b0111b7b0c260e690b729549cbe_prof);

        
        $__internal_27778066b74b71e6679e0b140fe0312fed1cd98a9d938e5cd7b685d350995e1f->leave($__internal_27778066b74b71e6679e0b140fe0312fed1cd98a9d938e5cd7b685d350995e1f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f4eabe64e82e153c2a8042e1ac324df07eb39780ea88563e9d8f934e14ac6727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4eabe64e82e153c2a8042e1ac324df07eb39780ea88563e9d8f934e14ac6727->enter($__internal_f4eabe64e82e153c2a8042e1ac324df07eb39780ea88563e9d8f934e14ac6727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_5d72d46d26973b839e78149f691df214a9edf2dd51281ca9619d59c0e9198c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d72d46d26973b839e78149f691df214a9edf2dd51281ca9619d59c0e9198c30->enter($__internal_5d72d46d26973b839e78149f691df214a9edf2dd51281ca9619d59c0e9198c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "sac";
        
        $__internal_5d72d46d26973b839e78149f691df214a9edf2dd51281ca9619d59c0e9198c30->leave($__internal_5d72d46d26973b839e78149f691df214a9edf2dd51281ca9619d59c0e9198c30_prof);

        
        $__internal_f4eabe64e82e153c2a8042e1ac324df07eb39780ea88563e9d8f934e14ac6727->leave($__internal_f4eabe64e82e153c2a8042e1ac324df07eb39780ea88563e9d8f934e14ac6727_prof);

    }

    // line 5
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_25d61ff3aa324ff542d3d0240be9e9adf752e2c48063526c994a7278f6871d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d61ff3aa324ff542d3d0240be9e9adf752e2c48063526c994a7278f6871d4e->enter($__internal_25d61ff3aa324ff542d3d0240be9e9adf752e2c48063526c994a7278f6871d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_9fe68a2190e05668e6586b18e6602a6e96c8a15deb4ffc04ab0785437ad026ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe68a2190e05668e6586b18e6602a6e96c8a15deb4ffc04ab0785437ad026ae->enter($__internal_9fe68a2190e05668e6586b18e6602a6e96c8a15deb4ffc04ab0785437ad026ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        echo "Lista de Chamados";
        
        $__internal_9fe68a2190e05668e6586b18e6602a6e96c8a15deb4ffc04ab0785437ad026ae->leave($__internal_9fe68a2190e05668e6586b18e6602a6e96c8a15deb4ffc04ab0785437ad026ae_prof);

        
        $__internal_25d61ff3aa324ff542d3d0240be9e9adf752e2c48063526c994a7278f6871d4e->leave($__internal_25d61ff3aa324ff542d3d0240be9e9adf752e2c48063526c994a7278f6871d4e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ede8e6327dee39793e3716926abb40cd30644844220ff61308fc8c3c8637b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ede8e6327dee39793e3716926abb40cd30644844220ff61308fc8c3c8637b18->enter($__internal_4ede8e6327dee39793e3716926abb40cd30644844220ff61308fc8c3c8637b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c49efe8484ba94967ac7968ed8b74a272463da68869a72dcc44bf1711c5ef2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49efe8484ba94967ac7968ed8b74a272463da68869a72dcc44bf1711c5ef2bd->enter($__internal_c49efe8484ba94967ac7968ed8b74a272463da68869a72dcc44bf1711c5ef2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c49efe8484ba94967ac7968ed8b74a272463da68869a72dcc44bf1711c5ef2bd->leave($__internal_c49efe8484ba94967ac7968ed8b74a272463da68869a72dcc44bf1711c5ef2bd_prof);

        
        $__internal_4ede8e6327dee39793e3716926abb40cd30644844220ff61308fc8c3c8637b18->leave($__internal_4ede8e6327dee39793e3716926abb40cd30644844220ff61308fc8c3c8637b18_prof);

    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8f3eab2ee2e1081f0f53c81a8e28ec23a552528db9c768f0a4195b1a84660faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3eab2ee2e1081f0f53c81a8e28ec23a552528db9c768f0a4195b1a84660faf->enter($__internal_8f3eab2ee2e1081f0f53c81a8e28ec23a552528db9c768f0a4195b1a84660faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_47c3862d4e635d9b1880ec56b3d2c044569e4490e871f53d309f561f69fdae7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c3862d4e635d9b1880ec56b3d2c044569e4490e871f53d309f561f69fdae7a->enter($__internal_47c3862d4e635d9b1880ec56b3d2c044569e4490e871f53d309f561f69fdae7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 50
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_47c3862d4e635d9b1880ec56b3d2c044569e4490e871f53d309f561f69fdae7a->leave($__internal_47c3862d4e635d9b1880ec56b3d2c044569e4490e871f53d309f561f69fdae7a_prof);

        
        $__internal_8f3eab2ee2e1081f0f53c81a8e28ec23a552528db9c768f0a4195b1a84660faf->leave($__internal_8f3eab2ee2e1081f0f53c81a8e28ec23a552528db9c768f0a4195b1a84660faf_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e73416352b89bf04c68c07b3b0cb972aea53605369f0acf9be7c7bd64178a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e73416352b89bf04c68c07b3b0cb972aea53605369f0acf9be7c7bd64178a14->enter($__internal_6e73416352b89bf04c68c07b3b0cb972aea53605369f0acf9be7c7bd64178a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_35d390292be3f0e3f435c689e83afeebf2a3488e6f7378f901c426ff194ab22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d390292be3f0e3f435c689e83afeebf2a3488e6f7378f901c426ff194ab22e->enter($__internal_35d390292be3f0e3f435c689e83afeebf2a3488e6f7378f901c426ff194ab22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_35d390292be3f0e3f435c689e83afeebf2a3488e6f7378f901c426ff194ab22e->leave($__internal_35d390292be3f0e3f435c689e83afeebf2a3488e6f7378f901c426ff194ab22e_prof);

        
        $__internal_6e73416352b89bf04c68c07b3b0cb972aea53605369f0acf9be7c7bd64178a14->leave($__internal_6e73416352b89bf04c68c07b3b0cb972aea53605369f0acf9be7c7bd64178a14_prof);

    }

    public function getTemplateName()
    {
        return ":chamado:index.html.twig";
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

{% block body_id 'sac' %}

{% block titpag 'Lista de Chamados' %}

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
", ":chamado:index.html.twig", "/var/www/html/app_task/app/Resources/views/chamado/index.html.twig");
    }
}
