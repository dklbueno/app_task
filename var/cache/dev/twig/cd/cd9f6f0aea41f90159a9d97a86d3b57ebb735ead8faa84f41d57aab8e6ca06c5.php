<?php

/* :chamado:new.html.twig */
class __TwigTemplate_0303b0e0c766a6d156af8a8e5ab8fcd0dd0964bc894f583ee128a6be8fb7f678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chamado:new.html.twig", 1);
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
        $__internal_ff38665c03f0ab804aaeed6caa58bee46a1b82e3dd4a5975761e7fb114f7e8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff38665c03f0ab804aaeed6caa58bee46a1b82e3dd4a5975761e7fb114f7e8a5->enter($__internal_ff38665c03f0ab804aaeed6caa58bee46a1b82e3dd4a5975761e7fb114f7e8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:new.html.twig"));

        $__internal_fa30fcbebb77276f58deb3727aaa63fc7c195f4b3dd983b9584e0d70452c44fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa30fcbebb77276f58deb3727aaa63fc7c195f4b3dd983b9584e0d70452c44fd->enter($__internal_fa30fcbebb77276f58deb3727aaa63fc7c195f4b3dd983b9584e0d70452c44fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff38665c03f0ab804aaeed6caa58bee46a1b82e3dd4a5975761e7fb114f7e8a5->leave($__internal_ff38665c03f0ab804aaeed6caa58bee46a1b82e3dd4a5975761e7fb114f7e8a5_prof);

        
        $__internal_fa30fcbebb77276f58deb3727aaa63fc7c195f4b3dd983b9584e0d70452c44fd->leave($__internal_fa30fcbebb77276f58deb3727aaa63fc7c195f4b3dd983b9584e0d70452c44fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa486b474425477beac178c7553263fa30ccda61a614549f3da97d58700b1271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa486b474425477beac178c7553263fa30ccda61a614549f3da97d58700b1271->enter($__internal_aa486b474425477beac178c7553263fa30ccda61a614549f3da97d58700b1271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_980fa4f36a841995736091730ae120d98f940428320b6dbef7c2004caaebbd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980fa4f36a841995736091730ae120d98f940428320b6dbef7c2004caaebbd93->enter($__internal_980fa4f36a841995736091730ae120d98f940428320b6dbef7c2004caaebbd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chamado creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_980fa4f36a841995736091730ae120d98f940428320b6dbef7c2004caaebbd93->leave($__internal_980fa4f36a841995736091730ae120d98f940428320b6dbef7c2004caaebbd93_prof);

        
        $__internal_aa486b474425477beac178c7553263fa30ccda61a614549f3da97d58700b1271->leave($__internal_aa486b474425477beac178c7553263fa30ccda61a614549f3da97d58700b1271_prof);

    }

    public function getTemplateName()
    {
        return ":chamado:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chamado creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('chamado_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":chamado:new.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/chamado/new.html.twig");
    }
}
