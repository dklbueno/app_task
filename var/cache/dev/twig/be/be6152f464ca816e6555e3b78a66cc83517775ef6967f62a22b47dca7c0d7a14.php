<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_994d64751933de293f1aa1a1d390c86df8b6715dbc7090d68871c24fcd4d6225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7b163fc3e73ff43653ea37af7bfe72153392227310bd78084d80d47c22d7497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b163fc3e73ff43653ea37af7bfe72153392227310bd78084d80d47c22d7497->enter($__internal_f7b163fc3e73ff43653ea37af7bfe72153392227310bd78084d80d47c22d7497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_fd50ccd23c0b4e41c2417edd663ff944ab1b5f66f01e83ea9b5b3a6ce83a4b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd50ccd23c0b4e41c2417edd663ff944ab1b5f66f01e83ea9b5b3a6ce83a4b27->enter($__internal_fd50ccd23c0b4e41c2417edd663ff944ab1b5f66f01e83ea9b5b3a6ce83a4b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f7b163fc3e73ff43653ea37af7bfe72153392227310bd78084d80d47c22d7497->leave($__internal_f7b163fc3e73ff43653ea37af7bfe72153392227310bd78084d80d47c22d7497_prof);

        
        $__internal_fd50ccd23c0b4e41c2417edd663ff944ab1b5f66f01e83ea9b5b3a6ce83a4b27->leave($__internal_fd50ccd23c0b4e41c2417edd663ff944ab1b5f66f01e83ea9b5b3a6ce83a4b27_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_73296d7ce7b8542d6fbbbc2c57f7eafb1965ffb38965fbe28e28e282ce92c060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73296d7ce7b8542d6fbbbc2c57f7eafb1965ffb38965fbe28e28e282ce92c060->enter($__internal_73296d7ce7b8542d6fbbbc2c57f7eafb1965ffb38965fbe28e28e282ce92c060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7049fb2e9dd97440e63b596d984fb91581bfb28ab5a4ba0f69f39f2a9a44fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7049fb2e9dd97440e63b596d984fb91581bfb28ab5a4ba0f69f39f2a9a44fe3->enter($__internal_d7049fb2e9dd97440e63b596d984fb91581bfb28ab5a4ba0f69f39f2a9a44fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d7049fb2e9dd97440e63b596d984fb91581bfb28ab5a4ba0f69f39f2a9a44fe3->leave($__internal_d7049fb2e9dd97440e63b596d984fb91581bfb28ab5a4ba0f69f39f2a9a44fe3_prof);

        
        $__internal_73296d7ce7b8542d6fbbbc2c57f7eafb1965ffb38965fbe28e28e282ce92c060->leave($__internal_73296d7ce7b8542d6fbbbc2c57f7eafb1965ffb38965fbe28e28e282ce92c060_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\app_task\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
