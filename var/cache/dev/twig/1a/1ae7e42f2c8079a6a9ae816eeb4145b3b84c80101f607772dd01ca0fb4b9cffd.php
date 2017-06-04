<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6edf7eb13d28519f3df528e800bf09933d1a9ed3b2f32c4254a70ea00688b448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e52d88fb97e768ae8d9976c4221e211ccf61bcc8c96e3fc13c898844dfa3cb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52d88fb97e768ae8d9976c4221e211ccf61bcc8c96e3fc13c898844dfa3cb31->enter($__internal_e52d88fb97e768ae8d9976c4221e211ccf61bcc8c96e3fc13c898844dfa3cb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4a1518897390822a9abc3a3e408316181f3b1d486ad3f69d6894dda5dfebe183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1518897390822a9abc3a3e408316181f3b1d486ad3f69d6894dda5dfebe183->enter($__internal_4a1518897390822a9abc3a3e408316181f3b1d486ad3f69d6894dda5dfebe183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e52d88fb97e768ae8d9976c4221e211ccf61bcc8c96e3fc13c898844dfa3cb31->leave($__internal_e52d88fb97e768ae8d9976c4221e211ccf61bcc8c96e3fc13c898844dfa3cb31_prof);

        
        $__internal_4a1518897390822a9abc3a3e408316181f3b1d486ad3f69d6894dda5dfebe183->leave($__internal_4a1518897390822a9abc3a3e408316181f3b1d486ad3f69d6894dda5dfebe183_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_495634371cab5b58107af7631f0a05f3427fc25b62dc1c028bff5afb8feca014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495634371cab5b58107af7631f0a05f3427fc25b62dc1c028bff5afb8feca014->enter($__internal_495634371cab5b58107af7631f0a05f3427fc25b62dc1c028bff5afb8feca014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec1c6750853f48396613180502112181490b9bff552b5df2e7ec2548de13d696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1c6750853f48396613180502112181490b9bff552b5df2e7ec2548de13d696->enter($__internal_ec1c6750853f48396613180502112181490b9bff552b5df2e7ec2548de13d696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec1c6750853f48396613180502112181490b9bff552b5df2e7ec2548de13d696->leave($__internal_ec1c6750853f48396613180502112181490b9bff552b5df2e7ec2548de13d696_prof);

        
        $__internal_495634371cab5b58107af7631f0a05f3427fc25b62dc1c028bff5afb8feca014->leave($__internal_495634371cab5b58107af7631f0a05f3427fc25b62dc1c028bff5afb8feca014_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_991d74bee456816eebd63106b9f8a61458f9f83b1725b95785fc8089c73709a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991d74bee456816eebd63106b9f8a61458f9f83b1725b95785fc8089c73709a7->enter($__internal_991d74bee456816eebd63106b9f8a61458f9f83b1725b95785fc8089c73709a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f70833c0a6f067923f7e36d50543271632d15bcd2db1b9db9377f401a05656b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70833c0a6f067923f7e36d50543271632d15bcd2db1b9db9377f401a05656b6->enter($__internal_f70833c0a6f067923f7e36d50543271632d15bcd2db1b9db9377f401a05656b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f70833c0a6f067923f7e36d50543271632d15bcd2db1b9db9377f401a05656b6->leave($__internal_f70833c0a6f067923f7e36d50543271632d15bcd2db1b9db9377f401a05656b6_prof);

        
        $__internal_991d74bee456816eebd63106b9f8a61458f9f83b1725b95785fc8089c73709a7->leave($__internal_991d74bee456816eebd63106b9f8a61458f9f83b1725b95785fc8089c73709a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
