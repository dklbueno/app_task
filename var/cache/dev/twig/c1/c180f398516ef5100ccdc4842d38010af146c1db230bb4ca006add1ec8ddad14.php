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
        $__internal_c7dc13117cec80efaabee42928e049a2d125299ff958fe5f85e531a9d5b0c571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7dc13117cec80efaabee42928e049a2d125299ff958fe5f85e531a9d5b0c571->enter($__internal_c7dc13117cec80efaabee42928e049a2d125299ff958fe5f85e531a9d5b0c571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $__internal_9ee283dc4419aede59a80e0e35c1779b8f51e22d0daf4eebbfe6ac9f35f9eac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee283dc4419aede59a80e0e35c1779b8f51e22d0daf4eebbfe6ac9f35f9eac1->enter($__internal_9ee283dc4419aede59a80e0e35c1779b8f51e22d0daf4eebbfe6ac9f35f9eac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7dc13117cec80efaabee42928e049a2d125299ff958fe5f85e531a9d5b0c571->leave($__internal_c7dc13117cec80efaabee42928e049a2d125299ff958fe5f85e531a9d5b0c571_prof);

        
        $__internal_9ee283dc4419aede59a80e0e35c1779b8f51e22d0daf4eebbfe6ac9f35f9eac1->leave($__internal_9ee283dc4419aede59a80e0e35c1779b8f51e22d0daf4eebbfe6ac9f35f9eac1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f6119a0fc8729324621b5fd99bf3b26898a8f28dd4179bf7687c9c91a00a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f6119a0fc8729324621b5fd99bf3b26898a8f28dd4179bf7687c9c91a00a67->enter($__internal_c6f6119a0fc8729324621b5fd99bf3b26898a8f28dd4179bf7687c9c91a00a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6984c44093f6621c3d63b1164744d8dce1a1feea07599f8fda5ab14c3a36964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6984c44093f6621c3d63b1164744d8dce1a1feea07599f8fda5ab14c3a36964->enter($__internal_f6984c44093f6621c3d63b1164744d8dce1a1feea07599f8fda5ab14c3a36964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6984c44093f6621c3d63b1164744d8dce1a1feea07599f8fda5ab14c3a36964->leave($__internal_f6984c44093f6621c3d63b1164744d8dce1a1feea07599f8fda5ab14c3a36964_prof);

        
        $__internal_c6f6119a0fc8729324621b5fd99bf3b26898a8f28dd4179bf7687c9c91a00a67->leave($__internal_c6f6119a0fc8729324621b5fd99bf3b26898a8f28dd4179bf7687c9c91a00a67_prof);

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
