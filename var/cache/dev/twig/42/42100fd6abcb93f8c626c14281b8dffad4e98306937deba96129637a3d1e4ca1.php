<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_015e324ed069fb5188ae977b36b129b9c3f4c3d67958885d32b5d4985fa5022e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e2cba9b0e805c1513868cda67029a558dce4a112499fc40a40129d9bd53411e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cba9b0e805c1513868cda67029a558dce4a112499fc40a40129d9bd53411e8->enter($__internal_e2cba9b0e805c1513868cda67029a558dce4a112499fc40a40129d9bd53411e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_da26f2fa5f2faf895a4b607ce4e78b36dc13b596e269adc3f08f175738d0e6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da26f2fa5f2faf895a4b607ce4e78b36dc13b596e269adc3f08f175738d0e6bc->enter($__internal_da26f2fa5f2faf895a4b607ce4e78b36dc13b596e269adc3f08f175738d0e6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2cba9b0e805c1513868cda67029a558dce4a112499fc40a40129d9bd53411e8->leave($__internal_e2cba9b0e805c1513868cda67029a558dce4a112499fc40a40129d9bd53411e8_prof);

        
        $__internal_da26f2fa5f2faf895a4b607ce4e78b36dc13b596e269adc3f08f175738d0e6bc->leave($__internal_da26f2fa5f2faf895a4b607ce4e78b36dc13b596e269adc3f08f175738d0e6bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_439d706006c6c74333afe1401e918423c59585d5fe21b2813958d4e028d47168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439d706006c6c74333afe1401e918423c59585d5fe21b2813958d4e028d47168->enter($__internal_439d706006c6c74333afe1401e918423c59585d5fe21b2813958d4e028d47168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5bec431b4ec3a22468dbbb393bdd2774d16de52b46ef86ec867ed0738397c84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bec431b4ec3a22468dbbb393bdd2774d16de52b46ef86ec867ed0738397c84c->enter($__internal_5bec431b4ec3a22468dbbb393bdd2774d16de52b46ef86ec867ed0738397c84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5bec431b4ec3a22468dbbb393bdd2774d16de52b46ef86ec867ed0738397c84c->leave($__internal_5bec431b4ec3a22468dbbb393bdd2774d16de52b46ef86ec867ed0738397c84c_prof);

        
        $__internal_439d706006c6c74333afe1401e918423c59585d5fe21b2813958d4e028d47168->leave($__internal_439d706006c6c74333afe1401e918423c59585d5fe21b2813958d4e028d47168_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bb216e8da411684bfffc8d7ac78d6b3740602faff2ea72fdebdd744d09a9f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb216e8da411684bfffc8d7ac78d6b3740602faff2ea72fdebdd744d09a9f6f->enter($__internal_7bb216e8da411684bfffc8d7ac78d6b3740602faff2ea72fdebdd744d09a9f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60e229dc4eb6c83227e3172e4c55ab743b215b4ba6f9bd8422c10d94a3ebc20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e229dc4eb6c83227e3172e4c55ab743b215b4ba6f9bd8422c10d94a3ebc20d->enter($__internal_60e229dc4eb6c83227e3172e4c55ab743b215b4ba6f9bd8422c10d94a3ebc20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60e229dc4eb6c83227e3172e4c55ab743b215b4ba6f9bd8422c10d94a3ebc20d->leave($__internal_60e229dc4eb6c83227e3172e4c55ab743b215b4ba6f9bd8422c10d94a3ebc20d_prof);

        
        $__internal_7bb216e8da411684bfffc8d7ac78d6b3740602faff2ea72fdebdd744d09a9f6f->leave($__internal_7bb216e8da411684bfffc8d7ac78d6b3740602faff2ea72fdebdd744d09a9f6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9455ef70b5e9ada1abf6f6cbd6b8400ba298ccb873af26d52b91d5bf714f8d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9455ef70b5e9ada1abf6f6cbd6b8400ba298ccb873af26d52b91d5bf714f8d72->enter($__internal_9455ef70b5e9ada1abf6f6cbd6b8400ba298ccb873af26d52b91d5bf714f8d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e0b268fdbc8381a319967cffe067649583594f5c0d1120f51334af630a1bd6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0b268fdbc8381a319967cffe067649583594f5c0d1120f51334af630a1bd6f->enter($__internal_9e0b268fdbc8381a319967cffe067649583594f5c0d1120f51334af630a1bd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e0b268fdbc8381a319967cffe067649583594f5c0d1120f51334af630a1bd6f->leave($__internal_9e0b268fdbc8381a319967cffe067649583594f5c0d1120f51334af630a1bd6f_prof);

        
        $__internal_9455ef70b5e9ada1abf6f6cbd6b8400ba298ccb873af26d52b91d5bf714f8d72->leave($__internal_9455ef70b5e9ada1abf6f6cbd6b8400ba298ccb873af26d52b91d5bf714f8d72_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/app_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
