<?php

/* :pedido:edit.html.twig */
class __TwigTemplate_ede3aa5ba8e37520f470c9a9d092d1b4427e807feeecc6fcf19013209fb70f08 extends Twig_Template
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
        $__internal_e0fbb9b2355199b17f8442725005f9e2e6a088025042fa5242ea83a3f00183fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0fbb9b2355199b17f8442725005f9e2e6a088025042fa5242ea83a3f00183fb->enter($__internal_e0fbb9b2355199b17f8442725005f9e2e6a088025042fa5242ea83a3f00183fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $__internal_b3a8ae0a77cd737c76006781643c0368e17ec03b2409f087b0a72df23c56a020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a8ae0a77cd737c76006781643c0368e17ec03b2409f087b0a72df23c56a020->enter($__internal_b3a8ae0a77cd737c76006781643c0368e17ec03b2409f087b0a72df23c56a020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0fbb9b2355199b17f8442725005f9e2e6a088025042fa5242ea83a3f00183fb->leave($__internal_e0fbb9b2355199b17f8442725005f9e2e6a088025042fa5242ea83a3f00183fb_prof);

        
        $__internal_b3a8ae0a77cd737c76006781643c0368e17ec03b2409f087b0a72df23c56a020->leave($__internal_b3a8ae0a77cd737c76006781643c0368e17ec03b2409f087b0a72df23c56a020_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec1da4080762ccce99ab25b8380375b3097532b9678209371359fa443f1050cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1da4080762ccce99ab25b8380375b3097532b9678209371359fa443f1050cb->enter($__internal_ec1da4080762ccce99ab25b8380375b3097532b9678209371359fa443f1050cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a07c0da98951b9d071159332e471e2445022224b9ee1aeb3e212d732bb1debbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07c0da98951b9d071159332e471e2445022224b9ee1aeb3e212d732bb1debbe->enter($__internal_a07c0da98951b9d071159332e471e2445022224b9ee1aeb3e212d732bb1debbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a07c0da98951b9d071159332e471e2445022224b9ee1aeb3e212d732bb1debbe->leave($__internal_a07c0da98951b9d071159332e471e2445022224b9ee1aeb3e212d732bb1debbe_prof);

        
        $__internal_ec1da4080762ccce99ab25b8380375b3097532b9678209371359fa443f1050cb->leave($__internal_ec1da4080762ccce99ab25b8380375b3097532b9678209371359fa443f1050cb_prof);

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
", ":pedido:edit.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/pedido/edit.html.twig");
    }
}
