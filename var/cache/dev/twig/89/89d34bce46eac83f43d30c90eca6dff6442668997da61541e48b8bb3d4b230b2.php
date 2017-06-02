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
        $__internal_df5e55bb0e457b79e26bcd9a37dc3a0446406a93a202527fae5bc3bf497d48b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5e55bb0e457b79e26bcd9a37dc3a0446406a93a202527fae5bc3bf497d48b2->enter($__internal_df5e55bb0e457b79e26bcd9a37dc3a0446406a93a202527fae5bc3bf497d48b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:index.html.twig"));

        $__internal_2462c4a3554ca7e9ad9a52a9d4ecc61e1f6578bcb203d0ad36c30ad16d8c2bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2462c4a3554ca7e9ad9a52a9d4ecc61e1f6578bcb203d0ad36c30ad16d8c2bf2->enter($__internal_2462c4a3554ca7e9ad9a52a9d4ecc61e1f6578bcb203d0ad36c30ad16d8c2bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df5e55bb0e457b79e26bcd9a37dc3a0446406a93a202527fae5bc3bf497d48b2->leave($__internal_df5e55bb0e457b79e26bcd9a37dc3a0446406a93a202527fae5bc3bf497d48b2_prof);

        
        $__internal_2462c4a3554ca7e9ad9a52a9d4ecc61e1f6578bcb203d0ad36c30ad16d8c2bf2->leave($__internal_2462c4a3554ca7e9ad9a52a9d4ecc61e1f6578bcb203d0ad36c30ad16d8c2bf2_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_10ef958edc6d4a0110709289c220c308ff0ab1b9afd217073fcca04534d95d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ef958edc6d4a0110709289c220c308ff0ab1b9afd217073fcca04534d95d2e->enter($__internal_10ef958edc6d4a0110709289c220c308ff0ab1b9afd217073fcca04534d95d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_67b3031007e5d7e6968d4cd29b8443b9aa4c07c1b246b47a7137d34b890e5a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b3031007e5d7e6968d4cd29b8443b9aa4c07c1b246b47a7137d34b890e5a46->enter($__internal_67b3031007e5d7e6968d4cd29b8443b9aa4c07c1b246b47a7137d34b890e5a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "atividade";
        
        $__internal_67b3031007e5d7e6968d4cd29b8443b9aa4c07c1b246b47a7137d34b890e5a46->leave($__internal_67b3031007e5d7e6968d4cd29b8443b9aa4c07c1b246b47a7137d34b890e5a46_prof);

        
        $__internal_10ef958edc6d4a0110709289c220c308ff0ab1b9afd217073fcca04534d95d2e->leave($__internal_10ef958edc6d4a0110709289c220c308ff0ab1b9afd217073fcca04534d95d2e_prof);

    }

    // line 5
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_0fb2dfeb0909ddf3f34016224dfd28e96f2c924d42c2de9832281876066903cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb2dfeb0909ddf3f34016224dfd28e96f2c924d42c2de9832281876066903cd->enter($__internal_0fb2dfeb0909ddf3f34016224dfd28e96f2c924d42c2de9832281876066903cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_211a9ddb089a76654cb6e96d5db56e9862967216b332f21555b0e4bcadca49c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211a9ddb089a76654cb6e96d5db56e9862967216b332f21555b0e4bcadca49c4->enter($__internal_211a9ddb089a76654cb6e96d5db56e9862967216b332f21555b0e4bcadca49c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        echo "Lista de Atividades";
        
        $__internal_211a9ddb089a76654cb6e96d5db56e9862967216b332f21555b0e4bcadca49c4->leave($__internal_211a9ddb089a76654cb6e96d5db56e9862967216b332f21555b0e4bcadca49c4_prof);

        
        $__internal_0fb2dfeb0909ddf3f34016224dfd28e96f2c924d42c2de9832281876066903cd->leave($__internal_0fb2dfeb0909ddf3f34016224dfd28e96f2c924d42c2de9832281876066903cd_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_84bf281630352aa40326eaaac5942aed1c928d574396e324abcb8ff5990e0bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bf281630352aa40326eaaac5942aed1c928d574396e324abcb8ff5990e0bd9->enter($__internal_84bf281630352aa40326eaaac5942aed1c928d574396e324abcb8ff5990e0bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c1217da0e19fab8f2fa96ab8c997995e944722475e799d65051a17b8c81b9615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1217da0e19fab8f2fa96ab8c997995e944722475e799d65051a17b8c81b9615->enter($__internal_c1217da0e19fab8f2fa96ab8c997995e944722475e799d65051a17b8c81b9615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c1217da0e19fab8f2fa96ab8c997995e944722475e799d65051a17b8c81b9615->leave($__internal_c1217da0e19fab8f2fa96ab8c997995e944722475e799d65051a17b8c81b9615_prof);

        
        $__internal_84bf281630352aa40326eaaac5942aed1c928d574396e324abcb8ff5990e0bd9->leave($__internal_84bf281630352aa40326eaaac5942aed1c928d574396e324abcb8ff5990e0bd9_prof);

    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e7e2adbf7bbb18a07fabadbb67907b77604c77fdac93828463df81e4df57e8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e2adbf7bbb18a07fabadbb67907b77604c77fdac93828463df81e4df57e8ee->enter($__internal_e7e2adbf7bbb18a07fabadbb67907b77604c77fdac93828463df81e4df57e8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_326ad783274bc2e935ed70a01aa990c7c35e812ee004a75acd6143aed56dd964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326ad783274bc2e935ed70a01aa990c7c35e812ee004a75acd6143aed56dd964->enter($__internal_326ad783274bc2e935ed70a01aa990c7c35e812ee004a75acd6143aed56dd964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 50
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_326ad783274bc2e935ed70a01aa990c7c35e812ee004a75acd6143aed56dd964->leave($__internal_326ad783274bc2e935ed70a01aa990c7c35e812ee004a75acd6143aed56dd964_prof);

        
        $__internal_e7e2adbf7bbb18a07fabadbb67907b77604c77fdac93828463df81e4df57e8ee->leave($__internal_e7e2adbf7bbb18a07fabadbb67907b77604c77fdac93828463df81e4df57e8ee_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea36637f43ce284240fc6dcc1a29530ba0d7c08110e640074942490dd5f77f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea36637f43ce284240fc6dcc1a29530ba0d7c08110e640074942490dd5f77f81->enter($__internal_ea36637f43ce284240fc6dcc1a29530ba0d7c08110e640074942490dd5f77f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9985a87b3c5e9ff4d42fb489c7ea2334b38fabb0a4ead49b957b5e87c931efc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9985a87b3c5e9ff4d42fb489c7ea2334b38fabb0a4ead49b957b5e87c931efc8->enter($__internal_9985a87b3c5e9ff4d42fb489c7ea2334b38fabb0a4ead49b957b5e87c931efc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9985a87b3c5e9ff4d42fb489c7ea2334b38fabb0a4ead49b957b5e87c931efc8->leave($__internal_9985a87b3c5e9ff4d42fb489c7ea2334b38fabb0a4ead49b957b5e87c931efc8_prof);

        
        $__internal_ea36637f43ce284240fc6dcc1a29530ba0d7c08110e640074942490dd5f77f81->leave($__internal_ea36637f43ce284240fc6dcc1a29530ba0d7c08110e640074942490dd5f77f81_prof);

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
", ":chamado:index.html.twig", "/var/www/html/app_task/app/Resources/views/chamado/index.html.twig");
    }
}
