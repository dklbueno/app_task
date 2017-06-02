<?php

/* :default:homepage.html.twig */
class __TwigTemplate_31b63858ec93e3c2983a9108c1e4b2bde89754ee383e73616676fca5db39050e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_960f88e6b3e5230811362b540b0e492718ca6b7940a46994f7f966cc6428ac9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960f88e6b3e5230811362b540b0e492718ca6b7940a46994f7f966cc6428ac9b->enter($__internal_960f88e6b3e5230811362b540b0e492718ca6b7940a46994f7f966cc6428ac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:homepage.html.twig"));

        $__internal_2d6b5c5fb8043662b0dd5746631ad8031681bff74d437ab7b7a629643a13c7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6b5c5fb8043662b0dd5746631ad8031681bff74d437ab7b7a629643a13c7ae->enter($__internal_2d6b5c5fb8043662b0dd5746631ad8031681bff74d437ab7b7a629643a13c7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960f88e6b3e5230811362b540b0e492718ca6b7940a46994f7f966cc6428ac9b->leave($__internal_960f88e6b3e5230811362b540b0e492718ca6b7940a46994f7f966cc6428ac9b_prof);

        
        $__internal_2d6b5c5fb8043662b0dd5746631ad8031681bff74d437ab7b7a629643a13c7ae->leave($__internal_2d6b5c5fb8043662b0dd5746631ad8031681bff74d437ab7b7a629643a13c7ae_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e025506d0d24564d6849fa532191627a9ee7c37a6e1f25d6496351523d906519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e025506d0d24564d6849fa532191627a9ee7c37a6e1f25d6496351523d906519->enter($__internal_e025506d0d24564d6849fa532191627a9ee7c37a6e1f25d6496351523d906519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_d60fda5f13e169ff810e0a0e27bf63ac0dc11b1cb5cd760f82f79f84a5b24bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60fda5f13e169ff810e0a0e27bf63ac0dc11b1cb5cd760f82f79f84a5b24bd2->enter($__internal_d60fda5f13e169ff810e0a0e27bf63ac0dc11b1cb5cd760f82f79f84a5b24bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_d60fda5f13e169ff810e0a0e27bf63ac0dc11b1cb5cd760f82f79f84a5b24bd2->leave($__internal_d60fda5f13e169ff810e0a0e27bf63ac0dc11b1cb5cd760f82f79f84a5b24bd2_prof);

        
        $__internal_e025506d0d24564d6849fa532191627a9ee7c37a6e1f25d6496351523d906519->leave($__internal_e025506d0d24564d6849fa532191627a9ee7c37a6e1f25d6496351523d906519_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_24ba649ab811f9953350cae787d1bddc01c2202bd575a41582bda4b9544dfb6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ba649ab811f9953350cae787d1bddc01c2202bd575a41582bda4b9544dfb6d->enter($__internal_24ba649ab811f9953350cae787d1bddc01c2202bd575a41582bda4b9544dfb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_791367254630ff6e9e06f23e0ce59f363a9fb033b205f395076e4e10fd44e953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791367254630ff6e9e06f23e0ce59f363a9fb033b205f395076e4e10fd44e953->enter($__internal_791367254630ff6e9e06f23e0ce59f363a9fb033b205f395076e4e10fd44e953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_791367254630ff6e9e06f23e0ce59f363a9fb033b205f395076e4e10fd44e953->leave($__internal_791367254630ff6e9e06f23e0ce59f363a9fb033b205f395076e4e10fd44e953_prof);

        
        $__internal_24ba649ab811f9953350cae787d1bddc01c2202bd575a41582bda4b9544dfb6d->leave($__internal_24ba649ab811f9953350cae787d1bddc01c2202bd575a41582bda4b9544dfb6d_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a7e1a7e8f6aa5ba4253c81ba3702f66145e30c40cc83a5e8e70e95bb68bbb62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e1a7e8f6aa5ba4253c81ba3702f66145e30c40cc83a5e8e70e95bb68bbb62d->enter($__internal_a7e1a7e8f6aa5ba4253c81ba3702f66145e30c40cc83a5e8e70e95bb68bbb62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5f03b0719584f52af72a4a184c125123a8047c43052a4448611d4db483c1a367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f03b0719584f52af72a4a184c125123a8047c43052a4448611d4db483c1a367->enter($__internal_5f03b0719584f52af72a4a184c125123a8047c43052a4448611d4db483c1a367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_5f03b0719584f52af72a4a184c125123a8047c43052a4448611d4db483c1a367->leave($__internal_5f03b0719584f52af72a4a184c125123a8047c43052a4448611d4db483c1a367_prof);

        
        $__internal_a7e1a7e8f6aa5ba4253c81ba3702f66145e30c40cc83a5e8e70e95bb68bbb62d->leave($__internal_a7e1a7e8f6aa5ba4253c81ba3702f66145e30c40cc83a5e8e70e95bb68bbb62d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_398e36eb76b3ce45e32255503a95dbd6743d3f7aa886a457b34324f991e6f74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398e36eb76b3ce45e32255503a95dbd6743d3f7aa886a457b34324f991e6f74f->enter($__internal_398e36eb76b3ce45e32255503a95dbd6743d3f7aa886a457b34324f991e6f74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7256ee58eb6c58c6bbd185be595e93e389db80f16cfcfefc86428e4a343f687e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7256ee58eb6c58c6bbd185be595e93e389db80f16cfcfefc86428e4a343f687e->enter($__internal_7256ee58eb6c58c6bbd185be595e93e389db80f16cfcfefc86428e4a343f687e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_7256ee58eb6c58c6bbd185be595e93e389db80f16cfcfefc86428e4a343f687e->leave($__internal_7256ee58eb6c58c6bbd185be595e93e389db80f16cfcfefc86428e4a343f687e_prof);

        
        $__internal_398e36eb76b3ce45e32255503a95dbd6743d3f7aa886a457b34324f991e6f74f->leave($__internal_398e36eb76b3ce45e32255503a95dbd6743d3f7aa886a457b34324f991e6f74f_prof);

    }

    public function getTemplateName()
    {
        return ":default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  145 => 37,  139 => 34,  127 => 25,  123 => 24,  117 => 21,  107 => 14,  104 => 13,  95 => 12,  78 => 10,  61 => 9,  43 => 3,  11 => 1,);
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

{% block body_id 'homepage' %}

{#
    the homepage is a special page which displays neither a header nor a footer.
    this is done with the 'trick' of defining empty Twig blocks without any content
#}
{% block header %}{% endblock %}
{% block footer %}{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <h1>{{ 'title.homepage'|trans|raw }}</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_app'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('blog_index') }}\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'action.browse_app'|trans }}
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_admin'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('admin_index') }}\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'action.browse_admin'|trans }}
                    </a>
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", ":default:homepage.html.twig", "/var/www/html/app_task/app/Resources/views/default/homepage.html.twig");
    }
}
