<?php

/* base.html.twig_ */
class __TwigTemplate_25a3fda011779ecbc789d85a294518b020d3977219c3e9be53753135800ec30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdf9d175c43faa2e3e2acc2a8e0db128624512e628ac22dc14f5e58907ae5b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf9d175c43faa2e3e2acc2a8e0db128624512e628ac22dc14f5e58907ae5b4b->enter($__internal_bdf9d175c43faa2e3e2acc2a8e0db128624512e628ac22dc14f5e58907ae5b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig_"));

        $__internal_93eb1ab834d538f08cfd90062ac4b8ddd20fb4c55979dc92609d0098b4a3fbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93eb1ab834d538f08cfd90062ac4b8ddd20fb4c55979dc92609d0098b4a3fbf1->enter($__internal_93eb1ab834d538f08cfd90062ac4b8ddd20fb4c55979dc92609d0098b4a3fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig_"));

        // line 1
        echo "<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title> 
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo " 
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    </head> 
    <body> 
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo " 
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        echo " 
    <body> 
</html>";
        
        $__internal_bdf9d175c43faa2e3e2acc2a8e0db128624512e628ac22dc14f5e58907ae5b4b->leave($__internal_bdf9d175c43faa2e3e2acc2a8e0db128624512e628ac22dc14f5e58907ae5b4b_prof);

        
        $__internal_93eb1ab834d538f08cfd90062ac4b8ddd20fb4c55979dc92609d0098b4a3fbf1->leave($__internal_93eb1ab834d538f08cfd90062ac4b8ddd20fb4c55979dc92609d0098b4a3fbf1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_422b6dc069844e21b112551cb29d0e844b722a151a61c632deae6d273024460f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422b6dc069844e21b112551cb29d0e844b722a151a61c632deae6d273024460f->enter($__internal_422b6dc069844e21b112551cb29d0e844b722a151a61c632deae6d273024460f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2c9eb8ee3f8bdf9715114985a163c7f5aec7152e94866773512e2361e552827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c9eb8ee3f8bdf9715114985a163c7f5aec7152e94866773512e2361e552827->enter($__internal_f2c9eb8ee3f8bdf9715114985a163c7f5aec7152e94866773512e2361e552827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sac - Longevo";
        
        $__internal_f2c9eb8ee3f8bdf9715114985a163c7f5aec7152e94866773512e2361e552827->leave($__internal_f2c9eb8ee3f8bdf9715114985a163c7f5aec7152e94866773512e2361e552827_prof);

        
        $__internal_422b6dc069844e21b112551cb29d0e844b722a151a61c632deae6d273024460f->leave($__internal_422b6dc069844e21b112551cb29d0e844b722a151a61c632deae6d273024460f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_663267a0929b856fbd3d68ae49130d3665b55265589788f5885caa91cc79332b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663267a0929b856fbd3d68ae49130d3665b55265589788f5885caa91cc79332b->enter($__internal_663267a0929b856fbd3d68ae49130d3665b55265589788f5885caa91cc79332b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_99586be9bbb9727a6414e9d5917d46114958f37e3ae9405c528b91f7cedb01d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99586be9bbb9727a6414e9d5917d46114958f37e3ae9405c528b91f7cedb01d4->enter($__internal_99586be9bbb9727a6414e9d5917d46114958f37e3ae9405c528b91f7cedb01d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/saccliente/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_99586be9bbb9727a6414e9d5917d46114958f37e3ae9405c528b91f7cedb01d4->leave($__internal_99586be9bbb9727a6414e9d5917d46114958f37e3ae9405c528b91f7cedb01d4_prof);

        
        $__internal_663267a0929b856fbd3d68ae49130d3665b55265589788f5885caa91cc79332b->leave($__internal_663267a0929b856fbd3d68ae49130d3665b55265589788f5885caa91cc79332b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b13c2994bad91037c38c48ee38ca9a38fecca0b63a0632c0f54f2527a335b594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13c2994bad91037c38c48ee38ca9a38fecca0b63a0632c0f54f2527a335b594->enter($__internal_b13c2994bad91037c38c48ee38ca9a38fecca0b63a0632c0f54f2527a335b594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb1ede7e27405c101a72c00009b5945af5a7e87d4938e950cba08b39f7b5aaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1ede7e27405c101a72c00009b5945af5a7e87d4938e950cba08b39f7b5aaf5->enter($__internal_cb1ede7e27405c101a72c00009b5945af5a7e87d4938e950cba08b39f7b5aaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
        <div class=\"container\"> 
            <header class=\"row\"> 
                <div class=\"col-lg-6\"> 
                    <h1>Simples Blog</h1> 
                    <a href=\"#\" title=\"\">Home</a> | 
                    <a href=\"#\" title=\"\">administração</a>
                </div> 
            </header> 
        ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo " 
            <footer class=\"col-lg-12\"> 
                <p>© 2015 Tableless - Todos os direitos reservados</p> 
            </footer>
        </div> 
 
        ";
        
        $__internal_cb1ede7e27405c101a72c00009b5945af5a7e87d4938e950cba08b39f7b5aaf5->leave($__internal_cb1ede7e27405c101a72c00009b5945af5a7e87d4938e950cba08b39f7b5aaf5_prof);

        
        $__internal_b13c2994bad91037c38c48ee38ca9a38fecca0b63a0632c0f54f2527a335b594->leave($__internal_b13c2994bad91037c38c48ee38ca9a38fecca0b63a0632c0f54f2527a335b594_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e9975d0e5f8a681d6bea696043af5e4c57706a366dacdbab052fe4f52390317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9975d0e5f8a681d6bea696043af5e4c57706a366dacdbab052fe4f52390317->enter($__internal_2e9975d0e5f8a681d6bea696043af5e4c57706a366dacdbab052fe4f52390317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f6682de5889662e79ba6f2c12188fb6341ef4832c46023fdf51ace96c0c720a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6682de5889662e79ba6f2c12188fb6341ef4832c46023fdf51ace96c0c720a2->enter($__internal_f6682de5889662e79ba6f2c12188fb6341ef4832c46023fdf51ace96c0c720a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
        ";
        
        $__internal_f6682de5889662e79ba6f2c12188fb6341ef4832c46023fdf51ace96c0c720a2->leave($__internal_f6682de5889662e79ba6f2c12188fb6341ef4832c46023fdf51ace96c0c720a2_prof);

        
        $__internal_2e9975d0e5f8a681d6bea696043af5e4c57706a366dacdbab052fe4f52390317->leave($__internal_2e9975d0e5f8a681d6bea696043af5e4c57706a366dacdbab052fe4f52390317_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47e2b3d73a6885b41c3f153aff3dcf029495f54cedf8354571e23a11cc42a194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e2b3d73a6885b41c3f153aff3dcf029495f54cedf8354571e23a11cc42a194->enter($__internal_47e2b3d73a6885b41c3f153aff3dcf029495f54cedf8354571e23a11cc42a194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1106dc2e6c9eb16e407e55a22eed14136daac9d474581e16297875f8fb0418e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1106dc2e6c9eb16e407e55a22eed14136daac9d474581e16297875f8fb0418e8->enter($__internal_1106dc2e6c9eb16e407e55a22eed14136daac9d474581e16297875f8fb0418e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1106dc2e6c9eb16e407e55a22eed14136daac9d474581e16297875f8fb0418e8->leave($__internal_1106dc2e6c9eb16e407e55a22eed14136daac9d474581e16297875f8fb0418e8_prof);

        
        $__internal_47e2b3d73a6885b41c3f153aff3dcf029495f54cedf8354571e23a11cc42a194->leave($__internal_47e2b3d73a6885b41c3f153aff3dcf029495f54cedf8354571e23a11cc42a194_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig_";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 29,  147 => 21,  131 => 22,  129 => 21,  110 => 12,  98 => 7,  87 => 6,  69 => 5,  56 => 29,  53 => 28,  51 => 12,  45 => 9,  42 => 8,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Sac - Longevo{% endblock %}</title> 
        {% block stylesheets %} 
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/saccliente/css/bootstrap.min.css') }}\" />
        {% endblock %} 
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" /> 
    </head> 
    <body> 
        {% block body %} 
        <div class=\"container\"> 
            <header class=\"row\"> 
                <div class=\"col-lg-6\"> 
                    <h1>Simples Blog</h1> 
                    <a href=\"#\" title=\"\">Home</a> | 
                    <a href=\"#\" title=\"\">administração</a>
                </div> 
            </header> 
        {% block content %} 
        {% endblock %} 
            <footer class=\"col-lg-12\"> 
                <p>© 2015 Tableless - Todos os direitos reservados</p> 
            </footer>
        </div> 
 
        {% endblock %} 
        {% block javascripts %}{% endblock %} 
    <body> 
</html>", "base.html.twig_", "/var/www/html/app_task/app/Resources/views/base.html.twig_");
    }
}
