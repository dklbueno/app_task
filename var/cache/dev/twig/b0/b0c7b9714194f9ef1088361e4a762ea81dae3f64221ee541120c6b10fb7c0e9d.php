<?php

/* cliente/edit.html.twig */
class __TwigTemplate_780a0d509663db780a7f51b0855dc78c99a29b3fed5e171bc7d3e29315021a80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/edit.html.twig", 1);
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
        $__internal_02c2b5f8b1a2c308f024222a6719f61b7130e478715213c03c09de294f8add07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c2b5f8b1a2c308f024222a6719f61b7130e478715213c03c09de294f8add07->enter($__internal_02c2b5f8b1a2c308f024222a6719f61b7130e478715213c03c09de294f8add07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/edit.html.twig"));

        $__internal_6218ca0c2168466cd8d7407a4a9ac3c8b40350afd0c4e47d713c7c50cf422d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6218ca0c2168466cd8d7407a4a9ac3c8b40350afd0c4e47d713c7c50cf422d66->enter($__internal_6218ca0c2168466cd8d7407a4a9ac3c8b40350afd0c4e47d713c7c50cf422d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c2b5f8b1a2c308f024222a6719f61b7130e478715213c03c09de294f8add07->leave($__internal_02c2b5f8b1a2c308f024222a6719f61b7130e478715213c03c09de294f8add07_prof);

        
        $__internal_6218ca0c2168466cd8d7407a4a9ac3c8b40350afd0c4e47d713c7c50cf422d66->leave($__internal_6218ca0c2168466cd8d7407a4a9ac3c8b40350afd0c4e47d713c7c50cf422d66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46575851779e655de8e22ba3e9977b08c794c8d5ad13ef449cee9c8113ade288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46575851779e655de8e22ba3e9977b08c794c8d5ad13ef449cee9c8113ade288->enter($__internal_46575851779e655de8e22ba3e9977b08c794c8d5ad13ef449cee9c8113ade288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29255e3bf83a97614b5394c14acea4ed1eccdbd03659f0bf211bb3c95be9cdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29255e3bf83a97614b5394c14acea4ed1eccdbd03659f0bf211bb3c95be9cdd3->enter($__internal_29255e3bf83a97614b5394c14acea4ed1eccdbd03659f0bf211bb3c95be9cdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29255e3bf83a97614b5394c14acea4ed1eccdbd03659f0bf211bb3c95be9cdd3->leave($__internal_29255e3bf83a97614b5394c14acea4ed1eccdbd03659f0bf211bb3c95be9cdd3_prof);

        
        $__internal_46575851779e655de8e22ba3e9977b08c794c8d5ad13ef449cee9c8113ade288->leave($__internal_46575851779e655de8e22ba3e9977b08c794c8d5ad13ef449cee9c8113ade288_prof);

    }

    public function getTemplateName()
    {
        return "cliente/edit.html.twig";
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
", "cliente/edit.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\cliente\\edit.html.twig");
    }
}
