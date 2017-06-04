<?php

/* :pedido:new.html.twig */
class __TwigTemplate_8040c892723b611f954e1cab2802e278f3f56df259d659500ac0f8f3a392e489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:new.html.twig", 1);
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
        $__internal_a07c6807253eb66d19897c41cfbbb9d671dadf3ac08df2e5c52d4902c1fa832e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07c6807253eb66d19897c41cfbbb9d671dadf3ac08df2e5c52d4902c1fa832e->enter($__internal_a07c6807253eb66d19897c41cfbbb9d671dadf3ac08df2e5c52d4902c1fa832e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $__internal_f6ab7bd287cee30df98925063735ee32dcca2cf55e4150fef7719cf7e7670cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ab7bd287cee30df98925063735ee32dcca2cf55e4150fef7719cf7e7670cc2->enter($__internal_f6ab7bd287cee30df98925063735ee32dcca2cf55e4150fef7719cf7e7670cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a07c6807253eb66d19897c41cfbbb9d671dadf3ac08df2e5c52d4902c1fa832e->leave($__internal_a07c6807253eb66d19897c41cfbbb9d671dadf3ac08df2e5c52d4902c1fa832e_prof);

        
        $__internal_f6ab7bd287cee30df98925063735ee32dcca2cf55e4150fef7719cf7e7670cc2->leave($__internal_f6ab7bd287cee30df98925063735ee32dcca2cf55e4150fef7719cf7e7670cc2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b96893b30fa770488b1abed87e32cd98cdab81e2d06db4839688b40b399ef337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96893b30fa770488b1abed87e32cd98cdab81e2d06db4839688b40b399ef337->enter($__internal_b96893b30fa770488b1abed87e32cd98cdab81e2d06db4839688b40b399ef337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dba80e16aceb009c5f2fbca411cc4c5b1bd037e9e79b8bae82d1e977cd0a5233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba80e16aceb009c5f2fbca411cc4c5b1bd037e9e79b8bae82d1e977cd0a5233->enter($__internal_dba80e16aceb009c5f2fbca411cc4c5b1bd037e9e79b8bae82d1e977cd0a5233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedido creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_dba80e16aceb009c5f2fbca411cc4c5b1bd037e9e79b8bae82d1e977cd0a5233->leave($__internal_dba80e16aceb009c5f2fbca411cc4c5b1bd037e9e79b8bae82d1e977cd0a5233_prof);

        
        $__internal_b96893b30fa770488b1abed87e32cd98cdab81e2d06db4839688b40b399ef337->leave($__internal_b96893b30fa770488b1abed87e32cd98cdab81e2d06db4839688b40b399ef337_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:new.html.twig";
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
    <h1>Pedido creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":pedido:new.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/pedido/new.html.twig");
    }
}
