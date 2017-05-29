<?php

/* :pedido:edit.html.twig */
class __TwigTemplate_834d45a82865c34aae95a9f6657720ab696f3e78e82d1ceae9adc9fa602648bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:edit.html.twig", 1);
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
        $__internal_cad293ee029b9c7743e92c4fc819d0969b52021275545b0fab17b16cddc3eccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad293ee029b9c7743e92c4fc819d0969b52021275545b0fab17b16cddc3eccc->enter($__internal_cad293ee029b9c7743e92c4fc819d0969b52021275545b0fab17b16cddc3eccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $__internal_f3ebdd357f8b9686d74a3b01336c96da0ed1b930463894857854eb9b20b2badb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ebdd357f8b9686d74a3b01336c96da0ed1b930463894857854eb9b20b2badb->enter($__internal_f3ebdd357f8b9686d74a3b01336c96da0ed1b930463894857854eb9b20b2badb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cad293ee029b9c7743e92c4fc819d0969b52021275545b0fab17b16cddc3eccc->leave($__internal_cad293ee029b9c7743e92c4fc819d0969b52021275545b0fab17b16cddc3eccc_prof);

        
        $__internal_f3ebdd357f8b9686d74a3b01336c96da0ed1b930463894857854eb9b20b2badb->leave($__internal_f3ebdd357f8b9686d74a3b01336c96da0ed1b930463894857854eb9b20b2badb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a6245b13ee10030ed75bd236fd25e4c1e3ed98e66ceef4b749d6be87e048cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6245b13ee10030ed75bd236fd25e4c1e3ed98e66ceef4b749d6be87e048cbc->enter($__internal_7a6245b13ee10030ed75bd236fd25e4c1e3ed98e66ceef4b749d6be87e048cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c747ca742b47f29e3d3a785a0fe7461c410aebdd28568885931bf680ab3a7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c747ca742b47f29e3d3a785a0fe7461c410aebdd28568885931bf680ab3a7ad->enter($__internal_8c747ca742b47f29e3d3a785a0fe7461c410aebdd28568885931bf680ab3a7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedido edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8c747ca742b47f29e3d3a785a0fe7461c410aebdd28568885931bf680ab3a7ad->leave($__internal_8c747ca742b47f29e3d3a785a0fe7461c410aebdd28568885931bf680ab3a7ad_prof);

        
        $__internal_7a6245b13ee10030ed75bd236fd25e4c1e3ed98e66ceef4b749d6be87e048cbc->leave($__internal_7a6245b13ee10030ed75bd236fd25e4c1e3ed98e66ceef4b749d6be87e048cbc_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pedido edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pedido:edit.html.twig", "/var/www/html/app_task/app/Resources/views/pedido/edit.html.twig");
    }
}
