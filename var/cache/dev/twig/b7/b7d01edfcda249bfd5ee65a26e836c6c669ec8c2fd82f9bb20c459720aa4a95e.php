<?php

/* :cliente:edit.html.twig */
class __TwigTemplate_d352c19cfc63ac80957e7b3bbea478b05bc5e3ed2703ce48f21e5a43e34e0561 extends Twig_Template
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
        $__internal_c9d6b32436a0de9c9622f034a08cf12139eafcf4a8c9f2628bf759396477dd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d6b32436a0de9c9622f034a08cf12139eafcf4a8c9f2628bf759396477dd75->enter($__internal_c9d6b32436a0de9c9622f034a08cf12139eafcf4a8c9f2628bf759396477dd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $__internal_632163bb3a261304474caa2443fa0369f386c35083ea2eebd0ee2df4d7c8c8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632163bb3a261304474caa2443fa0369f386c35083ea2eebd0ee2df4d7c8c8b4->enter($__internal_632163bb3a261304474caa2443fa0369f386c35083ea2eebd0ee2df4d7c8c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d6b32436a0de9c9622f034a08cf12139eafcf4a8c9f2628bf759396477dd75->leave($__internal_c9d6b32436a0de9c9622f034a08cf12139eafcf4a8c9f2628bf759396477dd75_prof);

        
        $__internal_632163bb3a261304474caa2443fa0369f386c35083ea2eebd0ee2df4d7c8c8b4->leave($__internal_632163bb3a261304474caa2443fa0369f386c35083ea2eebd0ee2df4d7c8c8b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c647c762b9b4395910254cce384d6741a844a3021e232a8a2f99f1f5d4502a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c647c762b9b4395910254cce384d6741a844a3021e232a8a2f99f1f5d4502a1c->enter($__internal_c647c762b9b4395910254cce384d6741a844a3021e232a8a2f99f1f5d4502a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0b90ff24b4bd8081b3be21db936a75622f36a30a65271def5a65c6f05f77632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b90ff24b4bd8081b3be21db936a75622f36a30a65271def5a65c6f05f77632->enter($__internal_f0b90ff24b4bd8081b3be21db936a75622f36a30a65271def5a65c6f05f77632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0b90ff24b4bd8081b3be21db936a75622f36a30a65271def5a65c6f05f77632->leave($__internal_f0b90ff24b4bd8081b3be21db936a75622f36a30a65271def5a65c6f05f77632_prof);

        
        $__internal_c647c762b9b4395910254cce384d6741a844a3021e232a8a2f99f1f5d4502a1c->leave($__internal_c647c762b9b4395910254cce384d6741a844a3021e232a8a2f99f1f5d4502a1c_prof);

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
", ":cliente:edit.html.twig", "/var/www/html/app_task/app/Resources/views/cliente/edit.html.twig");
    }
}
