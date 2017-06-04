<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_45096b815e15ab285a309fe08b3ce0de0e7c8cd1069f834e51a1823c4de5ab84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f60dc3030e950b8736db9abac6c097939e9d07eac06da98125b3538b4fd35cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60dc3030e950b8736db9abac6c097939e9d07eac06da98125b3538b4fd35cbe->enter($__internal_f60dc3030e950b8736db9abac6c097939e9d07eac06da98125b3538b4fd35cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4e50d1fe7e98aca325f72de8979701649153280a8889a1fae80b20dee2fbd522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e50d1fe7e98aca325f72de8979701649153280a8889a1fae80b20dee2fbd522->enter($__internal_4e50d1fe7e98aca325f72de8979701649153280a8889a1fae80b20dee2fbd522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f60dc3030e950b8736db9abac6c097939e9d07eac06da98125b3538b4fd35cbe->leave($__internal_f60dc3030e950b8736db9abac6c097939e9d07eac06da98125b3538b4fd35cbe_prof);

        
        $__internal_4e50d1fe7e98aca325f72de8979701649153280a8889a1fae80b20dee2fbd522->leave($__internal_4e50d1fe7e98aca325f72de8979701649153280a8889a1fae80b20dee2fbd522_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c5ab017921ad90b2f7c35bc21f1b555664a29e0dd065cb06e8cc876f418f137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5ab017921ad90b2f7c35bc21f1b555664a29e0dd065cb06e8cc876f418f137->enter($__internal_0c5ab017921ad90b2f7c35bc21f1b555664a29e0dd065cb06e8cc876f418f137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0298782d4d79314becd4c5df3eacdd8da885772b367eadafd731b298a1a75a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0298782d4d79314becd4c5df3eacdd8da885772b367eadafd731b298a1a75a0d->enter($__internal_0298782d4d79314becd4c5df3eacdd8da885772b367eadafd731b298a1a75a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0298782d4d79314becd4c5df3eacdd8da885772b367eadafd731b298a1a75a0d->leave($__internal_0298782d4d79314becd4c5df3eacdd8da885772b367eadafd731b298a1a75a0d_prof);

        
        $__internal_0c5ab017921ad90b2f7c35bc21f1b555664a29e0dd065cb06e8cc876f418f137->leave($__internal_0c5ab017921ad90b2f7c35bc21f1b555664a29e0dd065cb06e8cc876f418f137_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70f977bb02a2973226a68ce3602a00a57b9395ab7988a82e36993f0eac41935c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f977bb02a2973226a68ce3602a00a57b9395ab7988a82e36993f0eac41935c->enter($__internal_70f977bb02a2973226a68ce3602a00a57b9395ab7988a82e36993f0eac41935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4621f39343a26cad949bd3ac4e60acc758685d03aeb878fbbb37a52069a1a5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4621f39343a26cad949bd3ac4e60acc758685d03aeb878fbbb37a52069a1a5c7->enter($__internal_4621f39343a26cad949bd3ac4e60acc758685d03aeb878fbbb37a52069a1a5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4621f39343a26cad949bd3ac4e60acc758685d03aeb878fbbb37a52069a1a5c7->leave($__internal_4621f39343a26cad949bd3ac4e60acc758685d03aeb878fbbb37a52069a1a5c7_prof);

        
        $__internal_70f977bb02a2973226a68ce3602a00a57b9395ab7988a82e36993f0eac41935c->leave($__internal_70f977bb02a2973226a68ce3602a00a57b9395ab7988a82e36993f0eac41935c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1c929c89002285344c2169f319d5105f284afc0ee7fd656e06e95492e7ae560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c929c89002285344c2169f319d5105f284afc0ee7fd656e06e95492e7ae560->enter($__internal_f1c929c89002285344c2169f319d5105f284afc0ee7fd656e06e95492e7ae560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57ee569f89899fee2fd84045d1ebc51a93444b4fd955edcbafbeca1e5812dd47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ee569f89899fee2fd84045d1ebc51a93444b4fd955edcbafbeca1e5812dd47->enter($__internal_57ee569f89899fee2fd84045d1ebc51a93444b4fd955edcbafbeca1e5812dd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57ee569f89899fee2fd84045d1ebc51a93444b4fd955edcbafbeca1e5812dd47->leave($__internal_57ee569f89899fee2fd84045d1ebc51a93444b4fd955edcbafbeca1e5812dd47_prof);

        
        $__internal_f1c929c89002285344c2169f319d5105f284afc0ee7fd656e06e95492e7ae560->leave($__internal_f1c929c89002285344c2169f319d5105f284afc0ee7fd656e06e95492e7ae560_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
