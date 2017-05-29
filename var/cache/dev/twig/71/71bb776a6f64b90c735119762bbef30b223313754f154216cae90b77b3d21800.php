<?php

/* :sac:new.html.twig */
class __TwigTemplate_c6d29afbfe8378b1b749502d37672cae6796d9c333dce314f1cd6ac4852ee221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":sac:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f6317aa98c523ba8e996153a01f3a86a8217a43348b772bbe4db943a3f5b6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6317aa98c523ba8e996153a01f3a86a8217a43348b772bbe4db943a3f5b6d3->enter($__internal_0f6317aa98c523ba8e996153a01f3a86a8217a43348b772bbe4db943a3f5b6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:new.html.twig"));

        $__internal_13f63ada82e39b2934973228f81b1a2e943967e7dd0d3645698445377d6bb562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f63ada82e39b2934973228f81b1a2e943967e7dd0d3645698445377d6bb562->enter($__internal_13f63ada82e39b2934973228f81b1a2e943967e7dd0d3645698445377d6bb562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6317aa98c523ba8e996153a01f3a86a8217a43348b772bbe4db943a3f5b6d3->leave($__internal_0f6317aa98c523ba8e996153a01f3a86a8217a43348b772bbe4db943a3f5b6d3_prof);

        
        $__internal_13f63ada82e39b2934973228f81b1a2e943967e7dd0d3645698445377d6bb562->leave($__internal_13f63ada82e39b2934973228f81b1a2e943967e7dd0d3645698445377d6bb562_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_24c9c7fcac56c3a4846ad2b4d48c5a18626b30cd420aee8d047c14fc12bb41ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c9c7fcac56c3a4846ad2b4d48c5a18626b30cd420aee8d047c14fc12bb41ae->enter($__internal_24c9c7fcac56c3a4846ad2b4d48c5a18626b30cd420aee8d047c14fc12bb41ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_92da08c3bcd8097ce71c2b559444be737e609d1ff481dbd4a0fbd10f9ac6cd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92da08c3bcd8097ce71c2b559444be737e609d1ff481dbd4a0fbd10f9ac6cd7c->enter($__internal_92da08c3bcd8097ce71c2b559444be737e609d1ff481dbd4a0fbd10f9ac6cd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 

<h1>Cliente creation</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sac_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    
";
        
        $__internal_92da08c3bcd8097ce71c2b559444be737e609d1ff481dbd4a0fbd10f9ac6cd7c->leave($__internal_92da08c3bcd8097ce71c2b559444be737e609d1ff481dbd4a0fbd10f9ac6cd7c_prof);

        
        $__internal_24c9c7fcac56c3a4846ad2b4d48c5a18626b30cd420aee8d047c14fc12bb41ae->leave($__internal_24c9c7fcac56c3a4846ad2b4d48c5a18626b30cd420aee8d047c14fc12bb41ae_prof);

    }

    public function getTemplateName()
    {
        return ":sac:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  63 => 10,  58 => 8,  54 => 7,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %} 
 
{% block content %} 

<h1>Cliente creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('sac_index') }}\">Back to the list</a>
        </li>
    </ul>
    
{% endblock %}
", ":sac:new.html.twig", "/var/www/html/app_task/app/Resources/views/sac/new.html.twig");
    }
}
