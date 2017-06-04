<?php

/* chamado/edit.html.twig */
class __TwigTemplate_a9f7dd23cf541a53d48236c3a2eba0d1302f5a2443f9ab0be526697f59c83232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chamado/edit.html.twig", 1);
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
        $__internal_7a0e962ccfe19526b0badb9f309d7dc7d9eb023dfeadeecc4b4b4b55b7d63b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0e962ccfe19526b0badb9f309d7dc7d9eb023dfeadeecc4b4b4b55b7d63b86->enter($__internal_7a0e962ccfe19526b0badb9f309d7dc7d9eb023dfeadeecc4b4b4b55b7d63b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/edit.html.twig"));

        $__internal_52de34f8aa4f1ae604cc86ac45a9749a689e20a821700d3e5277a898377d6be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52de34f8aa4f1ae604cc86ac45a9749a689e20a821700d3e5277a898377d6be3->enter($__internal_52de34f8aa4f1ae604cc86ac45a9749a689e20a821700d3e5277a898377d6be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a0e962ccfe19526b0badb9f309d7dc7d9eb023dfeadeecc4b4b4b55b7d63b86->leave($__internal_7a0e962ccfe19526b0badb9f309d7dc7d9eb023dfeadeecc4b4b4b55b7d63b86_prof);

        
        $__internal_52de34f8aa4f1ae604cc86ac45a9749a689e20a821700d3e5277a898377d6be3->leave($__internal_52de34f8aa4f1ae604cc86ac45a9749a689e20a821700d3e5277a898377d6be3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef7b529d7830b6f185203bc4ccceda855fa9f777f827af1d28d5d7c9a110872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef7b529d7830b6f185203bc4ccceda855fa9f777f827af1d28d5d7c9a110872->enter($__internal_cef7b529d7830b6f185203bc4ccceda855fa9f777f827af1d28d5d7c9a110872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ee4f8456be3925c9bf5dc1e6b7e3d51026fedc69e62c2cafc41a53167cd652b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee4f8456be3925c9bf5dc1e6b7e3d51026fedc69e62c2cafc41a53167cd652b->enter($__internal_4ee4f8456be3925c9bf5dc1e6b7e3d51026fedc69e62c2cafc41a53167cd652b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chamado edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
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
        
        $__internal_4ee4f8456be3925c9bf5dc1e6b7e3d51026fedc69e62c2cafc41a53167cd652b->leave($__internal_4ee4f8456be3925c9bf5dc1e6b7e3d51026fedc69e62c2cafc41a53167cd652b_prof);

        
        $__internal_cef7b529d7830b6f185203bc4ccceda855fa9f777f827af1d28d5d7c9a110872->leave($__internal_cef7b529d7830b6f185203bc4ccceda855fa9f777f827af1d28d5d7c9a110872_prof);

    }

    public function getTemplateName()
    {
        return "chamado/edit.html.twig";
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
    <h1>Chamado edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('chamado_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "chamado/edit.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\chamado\\edit.html.twig");
    }
}
