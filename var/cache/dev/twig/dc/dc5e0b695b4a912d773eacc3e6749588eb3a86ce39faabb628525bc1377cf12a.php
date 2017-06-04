<?php

/* :cliente:edit.html.twig */
class __TwigTemplate_f07dfd4b0191cecd8e396d57fc4dc4336ac76e0589912b3c05b5ec979850a9b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:edit.html.twig", 1);
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
        $__internal_6f31be511691eb981e34701b015e89ae55febbe6fbaad86f98162ebb2c0e3588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f31be511691eb981e34701b015e89ae55febbe6fbaad86f98162ebb2c0e3588->enter($__internal_6f31be511691eb981e34701b015e89ae55febbe6fbaad86f98162ebb2c0e3588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $__internal_63a78f47a122d81a254beb9c96379537e0a139d203edf49371c2d4d3268d58ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a78f47a122d81a254beb9c96379537e0a139d203edf49371c2d4d3268d58ab->enter($__internal_63a78f47a122d81a254beb9c96379537e0a139d203edf49371c2d4d3268d58ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f31be511691eb981e34701b015e89ae55febbe6fbaad86f98162ebb2c0e3588->leave($__internal_6f31be511691eb981e34701b015e89ae55febbe6fbaad86f98162ebb2c0e3588_prof);

        
        $__internal_63a78f47a122d81a254beb9c96379537e0a139d203edf49371c2d4d3268d58ab->leave($__internal_63a78f47a122d81a254beb9c96379537e0a139d203edf49371c2d4d3268d58ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bda3d8035301d6f3ae9023f48e954ed35a610fdb3f3953634c093076e4bf60ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda3d8035301d6f3ae9023f48e954ed35a610fdb3f3953634c093076e4bf60ec->enter($__internal_bda3d8035301d6f3ae9023f48e954ed35a610fdb3f3953634c093076e4bf60ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_577bff9d220a65e66b5fce29d1c00a96dc075494685018ab49326c9f9895c181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577bff9d220a65e66b5fce29d1c00a96dc075494685018ab49326c9f9895c181->enter($__internal_577bff9d220a65e66b5fce29d1c00a96dc075494685018ab49326c9f9895c181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
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
        
        $__internal_577bff9d220a65e66b5fce29d1c00a96dc075494685018ab49326c9f9895c181->leave($__internal_577bff9d220a65e66b5fce29d1c00a96dc075494685018ab49326c9f9895c181_prof);

        
        $__internal_bda3d8035301d6f3ae9023f48e954ed35a610fdb3f3953634c093076e4bf60ec->leave($__internal_bda3d8035301d6f3ae9023f48e954ed35a610fdb3f3953634c093076e4bf60ec_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:edit.html.twig";
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
    <h1>Cliente edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":cliente:edit.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/cliente/edit.html.twig");
    }
}
