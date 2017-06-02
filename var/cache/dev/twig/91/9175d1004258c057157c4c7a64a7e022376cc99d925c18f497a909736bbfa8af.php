<?php

/* :sac:edit.html.twig */
class __TwigTemplate_17e020e14e4ba8835befd20358af6c4d79afabefc2629148cc53e86fc2224752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sac:edit.html.twig", 1);
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
        $__internal_5e7d86d9e11bec15997194d8e0a924a54ffe7643caf24346fca3edc2e71cda66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7d86d9e11bec15997194d8e0a924a54ffe7643caf24346fca3edc2e71cda66->enter($__internal_5e7d86d9e11bec15997194d8e0a924a54ffe7643caf24346fca3edc2e71cda66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:edit.html.twig"));

        $__internal_cc04652e8b75c2017386b3d1849e201c1067a4b4524729c8a0343dcac8b4ba0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc04652e8b75c2017386b3d1849e201c1067a4b4524729c8a0343dcac8b4ba0c->enter($__internal_cc04652e8b75c2017386b3d1849e201c1067a4b4524729c8a0343dcac8b4ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7d86d9e11bec15997194d8e0a924a54ffe7643caf24346fca3edc2e71cda66->leave($__internal_5e7d86d9e11bec15997194d8e0a924a54ffe7643caf24346fca3edc2e71cda66_prof);

        
        $__internal_cc04652e8b75c2017386b3d1849e201c1067a4b4524729c8a0343dcac8b4ba0c->leave($__internal_cc04652e8b75c2017386b3d1849e201c1067a4b4524729c8a0343dcac8b4ba0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_079774433786e4c26ac98666c2ba40fb070fba6b43f426398c461e9a71b5119e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079774433786e4c26ac98666c2ba40fb070fba6b43f426398c461e9a71b5119e->enter($__internal_079774433786e4c26ac98666c2ba40fb070fba6b43f426398c461e9a71b5119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2949a10b977dbaf3e50d5ffdf0f68d67c7e646f5aa6c9a06a2b57ac63bee0407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2949a10b977dbaf3e50d5ffdf0f68d67c7e646f5aa6c9a06a2b57ac63bee0407->enter($__internal_2949a10b977dbaf3e50d5ffdf0f68d67c7e646f5aa6c9a06a2b57ac63bee0407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2949a10b977dbaf3e50d5ffdf0f68d67c7e646f5aa6c9a06a2b57ac63bee0407->leave($__internal_2949a10b977dbaf3e50d5ffdf0f68d67c7e646f5aa6c9a06a2b57ac63bee0407_prof);

        
        $__internal_079774433786e4c26ac98666c2ba40fb070fba6b43f426398c461e9a71b5119e->leave($__internal_079774433786e4c26ac98666c2ba40fb070fba6b43f426398c461e9a71b5119e_prof);

    }

    public function getTemplateName()
    {
        return ":sac:edit.html.twig";
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
", ":sac:edit.html.twig", "/var/www/html/app_task/app/Resources/views/sac/edit.html.twig");
    }
}
