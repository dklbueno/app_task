<?php

/* chamado/show.html.twig */
class __TwigTemplate_5bd996b2c0e2a4adba8032233bc8fc4f5b4e52a3a40c09564d64119ddca988e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chamado/show.html.twig", 1);
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
        $__internal_488ea8ad9ed036e83037b8c3dca6ff641b2d437a2d91feb1ca0ccd9477ebded3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488ea8ad9ed036e83037b8c3dca6ff641b2d437a2d91feb1ca0ccd9477ebded3->enter($__internal_488ea8ad9ed036e83037b8c3dca6ff641b2d437a2d91feb1ca0ccd9477ebded3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/show.html.twig"));

        $__internal_da4e9e299d536a1300116086c9825aeb0e64fb770c41eda519ea77870b688900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4e9e299d536a1300116086c9825aeb0e64fb770c41eda519ea77870b688900->enter($__internal_da4e9e299d536a1300116086c9825aeb0e64fb770c41eda519ea77870b688900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_488ea8ad9ed036e83037b8c3dca6ff641b2d437a2d91feb1ca0ccd9477ebded3->leave($__internal_488ea8ad9ed036e83037b8c3dca6ff641b2d437a2d91feb1ca0ccd9477ebded3_prof);

        
        $__internal_da4e9e299d536a1300116086c9825aeb0e64fb770c41eda519ea77870b688900->leave($__internal_da4e9e299d536a1300116086c9825aeb0e64fb770c41eda519ea77870b688900_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb67103b9a87208e9f156a5e334be7ac0fbc1fe1e798303a69e3b067437e83ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb67103b9a87208e9f156a5e334be7ac0fbc1fe1e798303a69e3b067437e83ad->enter($__internal_fb67103b9a87208e9f156a5e334be7ac0fbc1fe1e798303a69e3b067437e83ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa6f21f6da52f76c68ec88bf672615cc3715c923beb727487882b6f1d82205cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6f21f6da52f76c68ec88bf672615cc3715c923beb727487882b6f1d82205cc->enter($__internal_aa6f21f6da52f76c68ec88bf672615cc3715c923beb727487882b6f1d82205cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chamado</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamado"]) ? $context["chamado"] : $this->getContext($context, "chamado")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamado"]) ? $context["chamado"] : $this->getContext($context, "chamado")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamado"]) ? $context["chamado"] : $this->getContext($context, "chamado")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_edit", array("id" => $this->getAttribute((isset($context["chamado"]) ? $context["chamado"] : $this->getContext($context, "chamado")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_aa6f21f6da52f76c68ec88bf672615cc3715c923beb727487882b6f1d82205cc->leave($__internal_aa6f21f6da52f76c68ec88bf672615cc3715c923beb727487882b6f1d82205cc_prof);

        
        $__internal_fb67103b9a87208e9f156a5e334be7ac0fbc1fe1e798303a69e3b067437e83ad->leave($__internal_fb67103b9a87208e9f156a5e334be7ac0fbc1fe1e798303a69e3b067437e83ad_prof);

    }

    public function getTemplateName()
    {
        return "chamado/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chamado</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ chamado.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ chamado.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ chamado.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chamado_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('chamado_edit', { 'id': chamado.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "chamado/show.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\chamado\\show.html.twig");
    }
}
