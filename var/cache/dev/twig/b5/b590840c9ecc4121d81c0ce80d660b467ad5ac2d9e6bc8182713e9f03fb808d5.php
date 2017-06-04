<?php

/* :chamado:show.html.twig */
class __TwigTemplate_adf142f3e251c18d54959ff9e80cb45c8fb7004561e66e7733281eef94fa889a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chamado:show.html.twig", 1);
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
        $__internal_77dee9c9254887818838411814120ade3c773a9b5f9906cc684e58a0aadd214e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dee9c9254887818838411814120ade3c773a9b5f9906cc684e58a0aadd214e->enter($__internal_77dee9c9254887818838411814120ade3c773a9b5f9906cc684e58a0aadd214e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:show.html.twig"));

        $__internal_f27251444c0f6443f7156accd7274bffcaa6e0c82a3aa3685957f23eb998fdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27251444c0f6443f7156accd7274bffcaa6e0c82a3aa3685957f23eb998fdac->enter($__internal_f27251444c0f6443f7156accd7274bffcaa6e0c82a3aa3685957f23eb998fdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77dee9c9254887818838411814120ade3c773a9b5f9906cc684e58a0aadd214e->leave($__internal_77dee9c9254887818838411814120ade3c773a9b5f9906cc684e58a0aadd214e_prof);

        
        $__internal_f27251444c0f6443f7156accd7274bffcaa6e0c82a3aa3685957f23eb998fdac->leave($__internal_f27251444c0f6443f7156accd7274bffcaa6e0c82a3aa3685957f23eb998fdac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f9ec6e772cd080db2610d2f031e9d0950999a7e7866e37cfff9102ce1a8e3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9ec6e772cd080db2610d2f031e9d0950999a7e7866e37cfff9102ce1a8e3f2->enter($__internal_0f9ec6e772cd080db2610d2f031e9d0950999a7e7866e37cfff9102ce1a8e3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a0bb0060c77b32e997d0a61af7203f9457d1ea4a5b4fcfde0dfd902255cb634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0bb0060c77b32e997d0a61af7203f9457d1ea4a5b4fcfde0dfd902255cb634->enter($__internal_7a0bb0060c77b32e997d0a61af7203f9457d1ea4a5b4fcfde0dfd902255cb634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a0bb0060c77b32e997d0a61af7203f9457d1ea4a5b4fcfde0dfd902255cb634->leave($__internal_7a0bb0060c77b32e997d0a61af7203f9457d1ea4a5b4fcfde0dfd902255cb634_prof);

        
        $__internal_0f9ec6e772cd080db2610d2f031e9d0950999a7e7866e37cfff9102ce1a8e3f2->leave($__internal_0f9ec6e772cd080db2610d2f031e9d0950999a7e7866e37cfff9102ce1a8e3f2_prof);

    }

    public function getTemplateName()
    {
        return ":chamado:show.html.twig";
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
", ":chamado:show.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/chamado/show.html.twig");
    }
}
