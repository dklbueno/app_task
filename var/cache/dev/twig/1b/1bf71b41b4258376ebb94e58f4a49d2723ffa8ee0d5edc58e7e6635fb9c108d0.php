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
        $__internal_ad2134b4aed68c63d7df2d1b5608cd1a92cda75eaf5969c98d58403f23a0a0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2134b4aed68c63d7df2d1b5608cd1a92cda75eaf5969c98d58403f23a0a0b8->enter($__internal_ad2134b4aed68c63d7df2d1b5608cd1a92cda75eaf5969c98d58403f23a0a0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:show.html.twig"));

        $__internal_64e4802980069c67c47c6da8f567c2d15e946ee3444eae36117897e0a4c9c7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e4802980069c67c47c6da8f567c2d15e946ee3444eae36117897e0a4c9c7e7->enter($__internal_64e4802980069c67c47c6da8f567c2d15e946ee3444eae36117897e0a4c9c7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2134b4aed68c63d7df2d1b5608cd1a92cda75eaf5969c98d58403f23a0a0b8->leave($__internal_ad2134b4aed68c63d7df2d1b5608cd1a92cda75eaf5969c98d58403f23a0a0b8_prof);

        
        $__internal_64e4802980069c67c47c6da8f567c2d15e946ee3444eae36117897e0a4c9c7e7->leave($__internal_64e4802980069c67c47c6da8f567c2d15e946ee3444eae36117897e0a4c9c7e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d5534e3df4e621b40ecf5b93cce82feb8e1d296f54f68f25ba6d423c0ac992c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5534e3df4e621b40ecf5b93cce82feb8e1d296f54f68f25ba6d423c0ac992c->enter($__internal_6d5534e3df4e621b40ecf5b93cce82feb8e1d296f54f68f25ba6d423c0ac992c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1df173df41907d67e77571fcc2e4290b2a7dac7328e9432b1b83168969d8e88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df173df41907d67e77571fcc2e4290b2a7dac7328e9432b1b83168969d8e88f->enter($__internal_1df173df41907d67e77571fcc2e4290b2a7dac7328e9432b1b83168969d8e88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1df173df41907d67e77571fcc2e4290b2a7dac7328e9432b1b83168969d8e88f->leave($__internal_1df173df41907d67e77571fcc2e4290b2a7dac7328e9432b1b83168969d8e88f_prof);

        
        $__internal_6d5534e3df4e621b40ecf5b93cce82feb8e1d296f54f68f25ba6d423c0ac992c->leave($__internal_6d5534e3df4e621b40ecf5b93cce82feb8e1d296f54f68f25ba6d423c0ac992c_prof);

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
