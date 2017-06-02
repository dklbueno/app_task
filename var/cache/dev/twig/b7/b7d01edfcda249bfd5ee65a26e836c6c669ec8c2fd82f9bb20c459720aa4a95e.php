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
        $__internal_2bf4046c95d8b4143a6c1fc6919cfae9404eea8f7be8cb4a7432a97482b0d152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf4046c95d8b4143a6c1fc6919cfae9404eea8f7be8cb4a7432a97482b0d152->enter($__internal_2bf4046c95d8b4143a6c1fc6919cfae9404eea8f7be8cb4a7432a97482b0d152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $__internal_8c51bae334ecc77d600ff2dc7fcc2cc10f308ed49228f0b5b6d6a747774dd440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c51bae334ecc77d600ff2dc7fcc2cc10f308ed49228f0b5b6d6a747774dd440->enter($__internal_8c51bae334ecc77d600ff2dc7fcc2cc10f308ed49228f0b5b6d6a747774dd440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf4046c95d8b4143a6c1fc6919cfae9404eea8f7be8cb4a7432a97482b0d152->leave($__internal_2bf4046c95d8b4143a6c1fc6919cfae9404eea8f7be8cb4a7432a97482b0d152_prof);

        
        $__internal_8c51bae334ecc77d600ff2dc7fcc2cc10f308ed49228f0b5b6d6a747774dd440->leave($__internal_8c51bae334ecc77d600ff2dc7fcc2cc10f308ed49228f0b5b6d6a747774dd440_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0068597b74bce3e81a55999761e512e2178d14f6f48a7fd669746fbdc7483c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0068597b74bce3e81a55999761e512e2178d14f6f48a7fd669746fbdc7483c48->enter($__internal_0068597b74bce3e81a55999761e512e2178d14f6f48a7fd669746fbdc7483c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cde4ba84c6e84da4d9a7c58c886dcf91695be94daa173b3d199e432ea94e69fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde4ba84c6e84da4d9a7c58c886dcf91695be94daa173b3d199e432ea94e69fb->enter($__internal_cde4ba84c6e84da4d9a7c58c886dcf91695be94daa173b3d199e432ea94e69fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cde4ba84c6e84da4d9a7c58c886dcf91695be94daa173b3d199e432ea94e69fb->leave($__internal_cde4ba84c6e84da4d9a7c58c886dcf91695be94daa173b3d199e432ea94e69fb_prof);

        
        $__internal_0068597b74bce3e81a55999761e512e2178d14f6f48a7fd669746fbdc7483c48->leave($__internal_0068597b74bce3e81a55999761e512e2178d14f6f48a7fd669746fbdc7483c48_prof);

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
