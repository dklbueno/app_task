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
        $__internal_19f20d8e2578f2f953b013178f86c04d2bb116fe665c67695763ab0c2810c02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f20d8e2578f2f953b013178f86c04d2bb116fe665c67695763ab0c2810c02c->enter($__internal_19f20d8e2578f2f953b013178f86c04d2bb116fe665c67695763ab0c2810c02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_ccf6c5d6457f47d49966c92bb9f155efae6cb0b6d7941ff7eba6e72d5e59666a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf6c5d6457f47d49966c92bb9f155efae6cb0b6d7941ff7eba6e72d5e59666a->enter($__internal_ccf6c5d6457f47d49966c92bb9f155efae6cb0b6d7941ff7eba6e72d5e59666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f20d8e2578f2f953b013178f86c04d2bb116fe665c67695763ab0c2810c02c->leave($__internal_19f20d8e2578f2f953b013178f86c04d2bb116fe665c67695763ab0c2810c02c_prof);

        
        $__internal_ccf6c5d6457f47d49966c92bb9f155efae6cb0b6d7941ff7eba6e72d5e59666a->leave($__internal_ccf6c5d6457f47d49966c92bb9f155efae6cb0b6d7941ff7eba6e72d5e59666a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e81f41e4239db8d4d4c7a42693cc49abca4ccf1eefdc16d8e1ef5d4186fb13ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81f41e4239db8d4d4c7a42693cc49abca4ccf1eefdc16d8e1ef5d4186fb13ca->enter($__internal_e81f41e4239db8d4d4c7a42693cc49abca4ccf1eefdc16d8e1ef5d4186fb13ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e74b66a87863a9975fd09dc99c81cc4117582725bb034080ff6b40ced356c1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74b66a87863a9975fd09dc99c81cc4117582725bb034080ff6b40ced356c1ae->enter($__internal_e74b66a87863a9975fd09dc99c81cc4117582725bb034080ff6b40ced356c1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e74b66a87863a9975fd09dc99c81cc4117582725bb034080ff6b40ced356c1ae->leave($__internal_e74b66a87863a9975fd09dc99c81cc4117582725bb034080ff6b40ced356c1ae_prof);

        
        $__internal_e81f41e4239db8d4d4c7a42693cc49abca4ccf1eefdc16d8e1ef5d4186fb13ca->leave($__internal_e81f41e4239db8d4d4c7a42693cc49abca4ccf1eefdc16d8e1ef5d4186fb13ca_prof);

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
