<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1fc28a67e146f2bd0b99ade0caad7ea659843453c7a4200c409085ff4d8176c8 extends Twig_Template
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
        $__internal_17e01b260c5f7ba526d8201eecd7f849cd9bd2297e00fb91ea7d7316f42a2020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e01b260c5f7ba526d8201eecd7f849cd9bd2297e00fb91ea7d7316f42a2020->enter($__internal_17e01b260c5f7ba526d8201eecd7f849cd9bd2297e00fb91ea7d7316f42a2020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d36453488ef6eabc9302bc43fbc1e8f292732f959d4c22c395e64e792042eadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36453488ef6eabc9302bc43fbc1e8f292732f959d4c22c395e64e792042eadf->enter($__internal_d36453488ef6eabc9302bc43fbc1e8f292732f959d4c22c395e64e792042eadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_17e01b260c5f7ba526d8201eecd7f849cd9bd2297e00fb91ea7d7316f42a2020->leave($__internal_17e01b260c5f7ba526d8201eecd7f849cd9bd2297e00fb91ea7d7316f42a2020_prof);

        
        $__internal_d36453488ef6eabc9302bc43fbc1e8f292732f959d4c22c395e64e792042eadf->leave($__internal_d36453488ef6eabc9302bc43fbc1e8f292732f959d4c22c395e64e792042eadf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
