<?php

/* cliente/new.html.twig */
class __TwigTemplate_ff02dfcc569097c416f26b1635cfcb5dc0bc205413186503fe330aecb432262c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "cliente/new.html.twig", 1);
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
        $__internal_bafa8902cefc2bdd522f9b1a4fcddf52a02ecc6ecbb78299914fcb21d6087750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafa8902cefc2bdd522f9b1a4fcddf52a02ecc6ecbb78299914fcb21d6087750->enter($__internal_bafa8902cefc2bdd522f9b1a4fcddf52a02ecc6ecbb78299914fcb21d6087750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $__internal_bf19a4c0faf8a3c054089e9720921ad5ad3fec5471e4c129938d30a2efff8ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf19a4c0faf8a3c054089e9720921ad5ad3fec5471e4c129938d30a2efff8ff2->enter($__internal_bf19a4c0faf8a3c054089e9720921ad5ad3fec5471e4c129938d30a2efff8ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bafa8902cefc2bdd522f9b1a4fcddf52a02ecc6ecbb78299914fcb21d6087750->leave($__internal_bafa8902cefc2bdd522f9b1a4fcddf52a02ecc6ecbb78299914fcb21d6087750_prof);

        
        $__internal_bf19a4c0faf8a3c054089e9720921ad5ad3fec5471e4c129938d30a2efff8ff2->leave($__internal_bf19a4c0faf8a3c054089e9720921ad5ad3fec5471e4c129938d30a2efff8ff2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_96830fb8d61e231628c0930698a72b3ba5d06d44517b7690287456ac863df02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96830fb8d61e231628c0930698a72b3ba5d06d44517b7690287456ac863df02f->enter($__internal_96830fb8d61e231628c0930698a72b3ba5d06d44517b7690287456ac863df02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bd92dc86eaeefa453aa031f26413728318df72e1c03d26ab7d3175098431f1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd92dc86eaeefa453aa031f26413728318df72e1c03d26ab7d3175098431f1b6->enter($__internal_bd92dc86eaeefa453aa031f26413728318df72e1c03d26ab7d3175098431f1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bd92dc86eaeefa453aa031f26413728318df72e1c03d26ab7d3175098431f1b6->leave($__internal_bd92dc86eaeefa453aa031f26413728318df72e1c03d26ab7d3175098431f1b6_prof);

        
        $__internal_96830fb8d61e231628c0930698a72b3ba5d06d44517b7690287456ac863df02f->leave($__internal_96830fb8d61e231628c0930698a72b3ba5d06d44517b7690287456ac863df02f_prof);

    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
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
", "cliente/new.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\cliente\\new.html.twig");
    }
}
