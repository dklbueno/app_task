<?php

/* :chamado:show.html.twig */
class __TwigTemplate_eec2d8be342d3fa9df3daf144cc6a5792f4e73c9783681e302a9657b88aa9221 extends Twig_Template
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
        $__internal_74b722c8d758eceefbdf6cf049878a2192708855f901de13edc73e06c1d36050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b722c8d758eceefbdf6cf049878a2192708855f901de13edc73e06c1d36050->enter($__internal_74b722c8d758eceefbdf6cf049878a2192708855f901de13edc73e06c1d36050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:show.html.twig"));

        $__internal_8f61a8a02c0d4e9fe60e08a5375d3257aa08464771664bddeacc9d8f26517f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f61a8a02c0d4e9fe60e08a5375d3257aa08464771664bddeacc9d8f26517f1a->enter($__internal_8f61a8a02c0d4e9fe60e08a5375d3257aa08464771664bddeacc9d8f26517f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74b722c8d758eceefbdf6cf049878a2192708855f901de13edc73e06c1d36050->leave($__internal_74b722c8d758eceefbdf6cf049878a2192708855f901de13edc73e06c1d36050_prof);

        
        $__internal_8f61a8a02c0d4e9fe60e08a5375d3257aa08464771664bddeacc9d8f26517f1a->leave($__internal_8f61a8a02c0d4e9fe60e08a5375d3257aa08464771664bddeacc9d8f26517f1a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f96e66c07399833a7407ef6dee9c540a0ca913e19f912c1e46c4d3f4241e3cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96e66c07399833a7407ef6dee9c540a0ca913e19f912c1e46c4d3f4241e3cf3->enter($__internal_f96e66c07399833a7407ef6dee9c540a0ca913e19f912c1e46c4d3f4241e3cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bac0a63820cc6ca7cb10da4882a23aa62f49201fbd2a44d77b207d261681cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bac0a63820cc6ca7cb10da4882a23aa62f49201fbd2a44d77b207d261681cc7->enter($__internal_1bac0a63820cc6ca7cb10da4882a23aa62f49201fbd2a44d77b207d261681cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1bac0a63820cc6ca7cb10da4882a23aa62f49201fbd2a44d77b207d261681cc7->leave($__internal_1bac0a63820cc6ca7cb10da4882a23aa62f49201fbd2a44d77b207d261681cc7_prof);

        
        $__internal_f96e66c07399833a7407ef6dee9c540a0ca913e19f912c1e46c4d3f4241e3cf3->leave($__internal_f96e66c07399833a7407ef6dee9c540a0ca913e19f912c1e46c4d3f4241e3cf3_prof);

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
", ":chamado:show.html.twig", "/var/www/html/app_task/app/Resources/views/chamado/show.html.twig");
    }
}
