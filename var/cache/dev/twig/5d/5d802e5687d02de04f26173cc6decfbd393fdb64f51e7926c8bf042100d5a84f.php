<?php

/* :chamado:edit.html.twig */
class __TwigTemplate_fb9b3b2301e1a25b87f2e126e2b9d3a489e3703cd7a0262f8d2fb37e984350f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chamado:edit.html.twig", 1);
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
        $__internal_b624a31211c174bf3e751ec2b097b596118fb8d0ddbcfa187ec465054f04202f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b624a31211c174bf3e751ec2b097b596118fb8d0ddbcfa187ec465054f04202f->enter($__internal_b624a31211c174bf3e751ec2b097b596118fb8d0ddbcfa187ec465054f04202f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:edit.html.twig"));

        $__internal_d5b12caba0a7e97d2e896646ac93904c2d77fbb210ecc5496662230f9a006d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b12caba0a7e97d2e896646ac93904c2d77fbb210ecc5496662230f9a006d62->enter($__internal_d5b12caba0a7e97d2e896646ac93904c2d77fbb210ecc5496662230f9a006d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b624a31211c174bf3e751ec2b097b596118fb8d0ddbcfa187ec465054f04202f->leave($__internal_b624a31211c174bf3e751ec2b097b596118fb8d0ddbcfa187ec465054f04202f_prof);

        
        $__internal_d5b12caba0a7e97d2e896646ac93904c2d77fbb210ecc5496662230f9a006d62->leave($__internal_d5b12caba0a7e97d2e896646ac93904c2d77fbb210ecc5496662230f9a006d62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d141b71d84a5a04122128b07e2ea2c19de9c10ecba3264f20a34e17c54fa6bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d141b71d84a5a04122128b07e2ea2c19de9c10ecba3264f20a34e17c54fa6bba->enter($__internal_d141b71d84a5a04122128b07e2ea2c19de9c10ecba3264f20a34e17c54fa6bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0de043c5d5bf5afbb593e4ef0a6d457d5d60aeefbb81df80f12efb8db61a915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0de043c5d5bf5afbb593e4ef0a6d457d5d60aeefbb81df80f12efb8db61a915->enter($__internal_f0de043c5d5bf5afbb593e4ef0a6d457d5d60aeefbb81df80f12efb8db61a915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0de043c5d5bf5afbb593e4ef0a6d457d5d60aeefbb81df80f12efb8db61a915->leave($__internal_f0de043c5d5bf5afbb593e4ef0a6d457d5d60aeefbb81df80f12efb8db61a915_prof);

        
        $__internal_d141b71d84a5a04122128b07e2ea2c19de9c10ecba3264f20a34e17c54fa6bba->leave($__internal_d141b71d84a5a04122128b07e2ea2c19de9c10ecba3264f20a34e17c54fa6bba_prof);

    }

    public function getTemplateName()
    {
        return ":chamado:edit.html.twig";
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
", ":chamado:edit.html.twig", "/var/www/html/app_task/app/Resources/views/chamado/edit.html.twig");
    }
}
