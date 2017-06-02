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
        $__internal_e49e405b5fa849fa43e639a3de08b3c6715f814d34796975c00345a12880210b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49e405b5fa849fa43e639a3de08b3c6715f814d34796975c00345a12880210b->enter($__internal_e49e405b5fa849fa43e639a3de08b3c6715f814d34796975c00345a12880210b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:new.html.twig"));

        $__internal_c6496d161a8b2fb5a866ece2c14939dca4e1f8ae0e795cc9fde88144c56cbdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6496d161a8b2fb5a866ece2c14939dca4e1f8ae0e795cc9fde88144c56cbdcf->enter($__internal_c6496d161a8b2fb5a866ece2c14939dca4e1f8ae0e795cc9fde88144c56cbdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sac:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49e405b5fa849fa43e639a3de08b3c6715f814d34796975c00345a12880210b->leave($__internal_e49e405b5fa849fa43e639a3de08b3c6715f814d34796975c00345a12880210b_prof);

        
        $__internal_c6496d161a8b2fb5a866ece2c14939dca4e1f8ae0e795cc9fde88144c56cbdcf->leave($__internal_c6496d161a8b2fb5a866ece2c14939dca4e1f8ae0e795cc9fde88144c56cbdcf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd948b97ecb943c941e3ebea9e246f07e8f2ff520d2e33ba9c4ba8fee808e27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd948b97ecb943c941e3ebea9e246f07e8f2ff520d2e33ba9c4ba8fee808e27f->enter($__internal_dd948b97ecb943c941e3ebea9e246f07e8f2ff520d2e33ba9c4ba8fee808e27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be00295396f26e9ae6c8564793bc8b2d4dd70744a2ef26042ea7de37ca75fea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be00295396f26e9ae6c8564793bc8b2d4dd70744a2ef26042ea7de37ca75fea9->enter($__internal_be00295396f26e9ae6c8564793bc8b2d4dd70744a2ef26042ea7de37ca75fea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_be00295396f26e9ae6c8564793bc8b2d4dd70744a2ef26042ea7de37ca75fea9->leave($__internal_be00295396f26e9ae6c8564793bc8b2d4dd70744a2ef26042ea7de37ca75fea9_prof);

        
        $__internal_dd948b97ecb943c941e3ebea9e246f07e8f2ff520d2e33ba9c4ba8fee808e27f->leave($__internal_dd948b97ecb943c941e3ebea9e246f07e8f2ff520d2e33ba9c4ba8fee808e27f_prof);

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
