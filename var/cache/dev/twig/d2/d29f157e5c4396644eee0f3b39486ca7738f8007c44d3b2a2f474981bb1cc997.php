<?php

/* pedido/edit.html.twig */
class __TwigTemplate_2412e0f4d06b3acd072eec0d832d8bcbea340399fc256b13de8422a442a192f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/edit.html.twig", 1);
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
        $__internal_91f1f5c512933ee4b782c53c885c47d1383ab08d8ee7b3fcb80049a97cd96deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f1f5c512933ee4b782c53c885c47d1383ab08d8ee7b3fcb80049a97cd96deb->enter($__internal_91f1f5c512933ee4b782c53c885c47d1383ab08d8ee7b3fcb80049a97cd96deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $__internal_e1f5359c9e8b780abd20b4bf2879bc313e8015260b261c656eca4f8b22063f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f5359c9e8b780abd20b4bf2879bc313e8015260b261c656eca4f8b22063f6d->enter($__internal_e1f5359c9e8b780abd20b4bf2879bc313e8015260b261c656eca4f8b22063f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f1f5c512933ee4b782c53c885c47d1383ab08d8ee7b3fcb80049a97cd96deb->leave($__internal_91f1f5c512933ee4b782c53c885c47d1383ab08d8ee7b3fcb80049a97cd96deb_prof);

        
        $__internal_e1f5359c9e8b780abd20b4bf2879bc313e8015260b261c656eca4f8b22063f6d->leave($__internal_e1f5359c9e8b780abd20b4bf2879bc313e8015260b261c656eca4f8b22063f6d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_156161433654427d5001c9020b224c65e6e2215e2d51b332b37f05b9c3c7a792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156161433654427d5001c9020b224c65e6e2215e2d51b332b37f05b9c3c7a792->enter($__internal_156161433654427d5001c9020b224c65e6e2215e2d51b332b37f05b9c3c7a792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8d1d5d85b1260955a610000cfcfbeb09ce0819a13b2dea60f1c1b81b4df43a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d1d5d85b1260955a610000cfcfbeb09ce0819a13b2dea60f1c1b81b4df43a6->enter($__internal_e8d1d5d85b1260955a610000cfcfbeb09ce0819a13b2dea60f1c1b81b4df43a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8d1d5d85b1260955a610000cfcfbeb09ce0819a13b2dea60f1c1b81b4df43a6->leave($__internal_e8d1d5d85b1260955a610000cfcfbeb09ce0819a13b2dea60f1c1b81b4df43a6_prof);

        
        $__internal_156161433654427d5001c9020b224c65e6e2215e2d51b332b37f05b9c3c7a792->leave($__internal_156161433654427d5001c9020b224c65e6e2215e2d51b332b37f05b9c3c7a792_prof);

    }

    public function getTemplateName()
    {
        return "pedido/edit.html.twig";
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
", "pedido/edit.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\pedido\\edit.html.twig");
    }
}
