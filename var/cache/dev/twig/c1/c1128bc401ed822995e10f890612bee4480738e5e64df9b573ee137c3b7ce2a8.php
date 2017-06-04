<?php

/* sac/new.html.twig */
class __TwigTemplate_e5512dd3f843d1b0a67dc1e943a2e7127dc784c4c8b04cae1a78deb5b9214cf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "sac/new.html.twig", 1);
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
        $__internal_b4c84da87778a09b2fa6515c1770b52d46efb758dde80564a75c7fad4fff98d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c84da87778a09b2fa6515c1770b52d46efb758dde80564a75c7fad4fff98d2->enter($__internal_b4c84da87778a09b2fa6515c1770b52d46efb758dde80564a75c7fad4fff98d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sac/new.html.twig"));

        $__internal_ceec038374dacdaa9ecaf24e6cba885a142920afb24c08920d5c3111243d05d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceec038374dacdaa9ecaf24e6cba885a142920afb24c08920d5c3111243d05d6->enter($__internal_ceec038374dacdaa9ecaf24e6cba885a142920afb24c08920d5c3111243d05d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sac/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4c84da87778a09b2fa6515c1770b52d46efb758dde80564a75c7fad4fff98d2->leave($__internal_b4c84da87778a09b2fa6515c1770b52d46efb758dde80564a75c7fad4fff98d2_prof);

        
        $__internal_ceec038374dacdaa9ecaf24e6cba885a142920afb24c08920d5c3111243d05d6->leave($__internal_ceec038374dacdaa9ecaf24e6cba885a142920afb24c08920d5c3111243d05d6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6305bf0f7342d9dc1fb09e42cbc31f496ba355ce44c6ba40ea6008593bbc9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6305bf0f7342d9dc1fb09e42cbc31f496ba355ce44c6ba40ea6008593bbc9b3->enter($__internal_f6305bf0f7342d9dc1fb09e42cbc31f496ba355ce44c6ba40ea6008593bbc9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_42c9cee3878a939bf2a7505c66a7db51d499d522745387e42e61d5461c478cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c9cee3878a939bf2a7505c66a7db51d499d522745387e42e61d5461c478cb7->enter($__internal_42c9cee3878a939bf2a7505c66a7db51d499d522745387e42e61d5461c478cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_42c9cee3878a939bf2a7505c66a7db51d499d522745387e42e61d5461c478cb7->leave($__internal_42c9cee3878a939bf2a7505c66a7db51d499d522745387e42e61d5461c478cb7_prof);

        
        $__internal_f6305bf0f7342d9dc1fb09e42cbc31f496ba355ce44c6ba40ea6008593bbc9b3->leave($__internal_f6305bf0f7342d9dc1fb09e42cbc31f496ba355ce44c6ba40ea6008593bbc9b3_prof);

    }

    public function getTemplateName()
    {
        return "sac/new.html.twig";
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
", "sac/new.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\sac\\new.html.twig");
    }
}
