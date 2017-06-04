<?php

/* :cliente:new.html.twig */
class __TwigTemplate_32528d7ea74db685718a89ad744411614aaed77197fa989732ff268aa5b2af20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":cliente:new.html.twig", 1);
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
        $__internal_467d1a25245235839ed8a3371a8363bd49809cefb970b9080d226f0db6475791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467d1a25245235839ed8a3371a8363bd49809cefb970b9080d226f0db6475791->enter($__internal_467d1a25245235839ed8a3371a8363bd49809cefb970b9080d226f0db6475791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_06332b2d04ebe56acad26a1858d99d9d19bdcdd1ab916f569f9aeacea76eaee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06332b2d04ebe56acad26a1858d99d9d19bdcdd1ab916f569f9aeacea76eaee4->enter($__internal_06332b2d04ebe56acad26a1858d99d9d19bdcdd1ab916f569f9aeacea76eaee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_467d1a25245235839ed8a3371a8363bd49809cefb970b9080d226f0db6475791->leave($__internal_467d1a25245235839ed8a3371a8363bd49809cefb970b9080d226f0db6475791_prof);

        
        $__internal_06332b2d04ebe56acad26a1858d99d9d19bdcdd1ab916f569f9aeacea76eaee4->leave($__internal_06332b2d04ebe56acad26a1858d99d9d19bdcdd1ab916f569f9aeacea76eaee4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_73e5fb613eebccbefe620d35d1c3a374f5d39b9df6b859d895dbb187a094fdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e5fb613eebccbefe620d35d1c3a374f5d39b9df6b859d895dbb187a094fdba->enter($__internal_73e5fb613eebccbefe620d35d1c3a374f5d39b9df6b859d895dbb187a094fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9c86008f4cf58976df2c17592b12f06a372ee1297bcd8aeb548e7a630ea9894d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c86008f4cf58976df2c17592b12f06a372ee1297bcd8aeb548e7a630ea9894d->enter($__internal_9c86008f4cf58976df2c17592b12f06a372ee1297bcd8aeb548e7a630ea9894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    
";
        
        $__internal_9c86008f4cf58976df2c17592b12f06a372ee1297bcd8aeb548e7a630ea9894d->leave($__internal_9c86008f4cf58976df2c17592b12f06a372ee1297bcd8aeb548e7a630ea9894d_prof);

        
        $__internal_73e5fb613eebccbefe620d35d1c3a374f5d39b9df6b859d895dbb187a094fdba->leave($__internal_73e5fb613eebccbefe620d35d1c3a374f5d39b9df6b859d895dbb187a094fdba_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:new.html.twig";
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
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
    </ul>
    
{% endblock %}
", ":cliente:new.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/cliente/new.html.twig");
    }
}
