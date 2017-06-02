<?php

/* :cliente:new.html.twig */
class __TwigTemplate_d3e148109f6fe5e0dcbd717ec0bd1c1989b2f30d27b98026fa2c74a5dfb022ec extends Twig_Template
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
        $__internal_3eea27e7bbf5b8ff6317080d117c71317a5cf8e055234cf303a66176f01c7903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eea27e7bbf5b8ff6317080d117c71317a5cf8e055234cf303a66176f01c7903->enter($__internal_3eea27e7bbf5b8ff6317080d117c71317a5cf8e055234cf303a66176f01c7903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_7dd4af8301b12462dee6112d726a51b9178b6312833b3735bc2c2f149d4ee8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd4af8301b12462dee6112d726a51b9178b6312833b3735bc2c2f149d4ee8fa->enter($__internal_7dd4af8301b12462dee6112d726a51b9178b6312833b3735bc2c2f149d4ee8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eea27e7bbf5b8ff6317080d117c71317a5cf8e055234cf303a66176f01c7903->leave($__internal_3eea27e7bbf5b8ff6317080d117c71317a5cf8e055234cf303a66176f01c7903_prof);

        
        $__internal_7dd4af8301b12462dee6112d726a51b9178b6312833b3735bc2c2f149d4ee8fa->leave($__internal_7dd4af8301b12462dee6112d726a51b9178b6312833b3735bc2c2f149d4ee8fa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f94d6593f99e48bbdfad69057e81af3b7b0e44ab931bf6ffcd2b377863faa12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f94d6593f99e48bbdfad69057e81af3b7b0e44ab931bf6ffcd2b377863faa12->enter($__internal_0f94d6593f99e48bbdfad69057e81af3b7b0e44ab931bf6ffcd2b377863faa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e9178a38c257e0064a0411ba4ff58531d9b9f531a6eea207f2131adb9901026f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9178a38c257e0064a0411ba4ff58531d9b9f531a6eea207f2131adb9901026f->enter($__internal_e9178a38c257e0064a0411ba4ff58531d9b9f531a6eea207f2131adb9901026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e9178a38c257e0064a0411ba4ff58531d9b9f531a6eea207f2131adb9901026f->leave($__internal_e9178a38c257e0064a0411ba4ff58531d9b9f531a6eea207f2131adb9901026f_prof);

        
        $__internal_0f94d6593f99e48bbdfad69057e81af3b7b0e44ab931bf6ffcd2b377863faa12->leave($__internal_0f94d6593f99e48bbdfad69057e81af3b7b0e44ab931bf6ffcd2b377863faa12_prof);

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
", ":cliente:new.html.twig", "/var/www/html/app_task/app/Resources/views/cliente/new.html.twig");
    }
}
