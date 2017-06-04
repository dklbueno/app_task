<?php

/* default/_flash_messages.html.twig */
class __TwigTemplate_fc9c6050892c7e6e69af898155f8c734a6d4265361c0318de1e9191a98a40fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d02f0017ec13ac9b3e93c80c4c31e944f73b8e4e5d1eb21df761cf3f442bfdd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02f0017ec13ac9b3e93c80c4c31e944f73b8e4e5d1eb21df761cf3f442bfdd1->enter($__internal_d02f0017ec13ac9b3e93c80c4c31e944f73b8e4e5d1eb21df761cf3f442bfdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        $__internal_03d54c57f08dec9be73e75bf639dd3a8edf1997e234762c85704b46d9b927225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d54c57f08dec9be73e75bf639dd3a8edf1997e234762c85704b46d9b927225->enter($__internal_03d54c57f08dec9be73e75bf639dd3a8edf1997e234762c85704b46d9b927225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        // line 9
        echo "
";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "started", array()) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "peekAll", array())))) {
            // line 11
            echo "    <div class=\"messages\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 13
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 14
                    echo "                ";
                    // line 15
                    echo "                <div class=\"alert alert-dismissible alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>

                    ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
";
        }
        
        $__internal_d02f0017ec13ac9b3e93c80c4c31e944f73b8e4e5d1eb21df761cf3f442bfdd1->leave($__internal_d02f0017ec13ac9b3e93c80c4c31e944f73b8e4e5d1eb21df761cf3f442bfdd1_prof);

        
        $__internal_03d54c57f08dec9be73e75bf639dd3a8edf1997e234762c85704b46d9b927225->leave($__internal_03d54c57f08dec9be73e75bf639dd3a8edf1997e234762c85704b46d9b927225_prof);

    }

    public function getTemplateName()
    {
        return "default/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  62 => 23,  53 => 20,  44 => 15,  42 => 14,  37 => 13,  33 => 12,  30 => 11,  28 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is a template fragment designed to be included in other templates
   See http://symfony.com/doc/current/book/templating.html#including-other-templates

   A common practice to better distinguish between templates and fragments is to
   prefix fragments with an underscore. That's why this template is called
   '_flash_messages.html.twig' instead of 'flash_messages.html.twig'
#}

{% if app.session.started and app.session.flashBag.peekAll is not empty %}
    <div class=\"messages\">
        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                {# Bootstrap alert, see http://getbootstrap.com/components/#alerts #}
                <div class=\"alert alert-dismissible alert-{{ type }}\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>

                    {{ message|trans }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endif %}
", "default/_flash_messages.html.twig", "C:\\xampp\\htdocs\\app_task\\app\\Resources\\views\\default\\_flash_messages.html.twig");
    }
}
