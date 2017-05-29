<?php

/* base.html.twig */
class __TwigTemplate_29f6feb625a11effc2e4a8254daccf2b0c1a80aa2f845e5208ff3c1c4c4993bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'titpag' => array($this, 'block_titpag'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc4013d1868b06be93faa47740be42b7cb3a370c90699d105e98ee33c4dc1717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4013d1868b06be93faa47740be42b7cb3a370c90699d105e98ee33c4dc1717->enter($__internal_dc4013d1868b06be93faa47740be42b7cb3a370c90699d105e98ee33c4dc1717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b06f6b81c968265304c5d2fe1aa0ea7936dc65763289b101419e5d2accc0b760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06f6b81c968265304c5d2fe1aa0ea7936dc65763289b101419e5d2accc0b760->enter($__internal_b06f6b81c968265304c5d2fe1aa0ea7936dc65763289b101419e5d2accc0b760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "
        <div class=\"container body-container\">
            ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        </div>

        ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "
       
    </body>
</html>
";
        
        $__internal_dc4013d1868b06be93faa47740be42b7cb3a370c90699d105e98ee33c4dc1717->leave($__internal_dc4013d1868b06be93faa47740be42b7cb3a370c90699d105e98ee33c4dc1717_prof);

        
        $__internal_b06f6b81c968265304c5d2fe1aa0ea7936dc65763289b101419e5d2accc0b760->leave($__internal_b06f6b81c968265304c5d2fe1aa0ea7936dc65763289b101419e5d2accc0b760_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_589e9457144b406b3de274125556f90d9ecf2bcb6314b7426cdc67740f19f875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589e9457144b406b3de274125556f90d9ecf2bcb6314b7426cdc67740f19f875->enter($__internal_589e9457144b406b3de274125556f90d9ecf2bcb6314b7426cdc67740f19f875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5e35c389e72501fa0136f177efd99c1816cd0509c7487463df83a015a8aed9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e35c389e72501fa0136f177efd99c1816cd0509c7487463df83a015a8aed9d->enter($__internal_a5e35c389e72501fa0136f177efd99c1816cd0509c7487463df83a015a8aed9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sac - Longevo";
        
        $__internal_a5e35c389e72501fa0136f177efd99c1816cd0509c7487463df83a015a8aed9d->leave($__internal_a5e35c389e72501fa0136f177efd99c1816cd0509c7487463df83a015a8aed9d_prof);

        
        $__internal_589e9457144b406b3de274125556f90d9ecf2bcb6314b7426cdc67740f19f875->leave($__internal_589e9457144b406b3de274125556f90d9ecf2bcb6314b7426cdc67740f19f875_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72a8306d1bd8feaacee41c61afece26086d151ddf161084e24c39b8fade64ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a8306d1bd8feaacee41c61afece26086d151ddf161084e24c39b8fade64ab7->enter($__internal_72a8306d1bd8feaacee41c61afece26086d151ddf161084e24c39b8fade64ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f26312a6ea6093c7017d1df5f55ce75d47bcfdb350d72280ab47c59d522f144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f26312a6ea6093c7017d1df5f55ce75d47bcfdb350d72280ab47c59d522f144->enter($__internal_2f26312a6ea6093c7017d1df5f55ce75d47bcfdb350d72280ab47c59d522f144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/bootstrap-flatly-3.3.7.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/font-awesome-4.6.3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/font-lato.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/highlight-solarized-light.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_2f26312a6ea6093c7017d1df5f55ce75d47bcfdb350d72280ab47c59d522f144->leave($__internal_2f26312a6ea6093c7017d1df5f55ce75d47bcfdb350d72280ab47c59d522f144_prof);

        
        $__internal_72a8306d1bd8feaacee41c61afece26086d151ddf161084e24c39b8fade64ab7->leave($__internal_72a8306d1bd8feaacee41c61afece26086d151ddf161084e24c39b8fade64ab7_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4a042ac1c9e90c0e2bfb8214e672a3a6c9702486e9ccc44542ce8179693be596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a042ac1c9e90c0e2bfb8214e672a3a6c9702486e9ccc44542ce8179693be596->enter($__internal_4a042ac1c9e90c0e2bfb8214e672a3a6c9702486e9ccc44542ce8179693be596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_d1adcf9f2e3ec09d4a0d451acb64ae4fcd6bef1016b95ea6ce812b72b42e9152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1adcf9f2e3ec09d4a0d451acb64ae4fcd6bef1016b95ea6ce812b72b42e9152->enter($__internal_d1adcf9f2e3ec09d4a0d451acb64ae4fcd6bef1016b95ea6ce812b72b42e9152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_d1adcf9f2e3ec09d4a0d451acb64ae4fcd6bef1016b95ea6ce812b72b42e9152->leave($__internal_d1adcf9f2e3ec09d4a0d451acb64ae4fcd6bef1016b95ea6ce812b72b42e9152_prof);

        
        $__internal_4a042ac1c9e90c0e2bfb8214e672a3a6c9702486e9ccc44542ce8179693be596->leave($__internal_4a042ac1c9e90c0e2bfb8214e672a3a6c9702486e9ccc44542ce8179693be596_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_e41c6dfcce0816078300ff81cd9d8b1ddccd63a71e7342610499e3cf4162bd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41c6dfcce0816078300ff81cd9d8b1ddccd63a71e7342610499e3cf4162bd2b->enter($__internal_e41c6dfcce0816078300ff81cd9d8b1ddccd63a71e7342610499e3cf4162bd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b1871670f4f9bab3817873948bb9f47d529e2075ac88d4c6a433fa7d8b9c975b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1871670f4f9bab3817873948bb9f47d529e2075ac88d4c6a433fa7d8b9c975b->enter($__internal_b1871670f4f9bab3817873948bb9f47d529e2075ac88d4c6a433fa7d8b9c975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sac_index");
        echo "\">
                                LONGEVO - SAC
                            </a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sac_index");
        echo "\">
                                        <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Cadastro de Chamado
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">
                                        <i class=\"fa fa-list\" aria-hidden=\"true\"></i> Lista de Chamados
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_b1871670f4f9bab3817873948bb9f47d529e2075ac88d4c6a433fa7d8b9c975b->leave($__internal_b1871670f4f9bab3817873948bb9f47d529e2075ac88d4c6a433fa7d8b9c975b_prof);

        
        $__internal_e41c6dfcce0816078300ff81cd9d8b1ddccd63a71e7342610499e3cf4162bd2b->leave($__internal_e41c6dfcce0816078300ff81cd9d8b1ddccd63a71e7342610499e3cf4162bd2b_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_de73fa6047aa81e5d763a97db04c21bbb9f087d3a46b1be8840cb63224095478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de73fa6047aa81e5d763a97db04c21bbb9f087d3a46b1be8840cb63224095478->enter($__internal_de73fa6047aa81e5d763a97db04c21bbb9f087d3a46b1be8840cb63224095478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c596a4133e6a5712dc32c5516158aba6c876facd5f18ac56c6f80395fbc0e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c596a4133e6a5712dc32c5516158aba6c876facd5f18ac56c6f80395fbc0e18->enter($__internal_7c596a4133e6a5712dc32c5516158aba6c876facd5f18ac56c6f80395fbc0e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-12\">
                        ";
        // line 54
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "
                        <h1>";
        // line 55
        $this->displayBlock('titpag', $context, $blocks);
        echo "</h1>
                        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "                    </div>                    
                </div>
            ";
        
        $__internal_7c596a4133e6a5712dc32c5516158aba6c876facd5f18ac56c6f80395fbc0e18->leave($__internal_7c596a4133e6a5712dc32c5516158aba6c876facd5f18ac56c6f80395fbc0e18_prof);

        
        $__internal_de73fa6047aa81e5d763a97db04c21bbb9f087d3a46b1be8840cb63224095478->leave($__internal_de73fa6047aa81e5d763a97db04c21bbb9f087d3a46b1be8840cb63224095478_prof);

    }

    // line 55
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_c7ddaaf374c74baaf9621a8c7e0aef9764eef43c9d612a78073d6d1f1111cb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ddaaf374c74baaf9621a8c7e0aef9764eef43c9d612a78073d6d1f1111cb6f->enter($__internal_c7ddaaf374c74baaf9621a8c7e0aef9764eef43c9d612a78073d6d1f1111cb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_795fd5b458ae1c4974dfd6883562fefc219eed635db8e1a69048e38c1fdaf697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795fd5b458ae1c4974dfd6883562fefc219eed635db8e1a69048e38c1fdaf697->enter($__internal_795fd5b458ae1c4974dfd6883562fefc219eed635db8e1a69048e38c1fdaf697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        
        $__internal_795fd5b458ae1c4974dfd6883562fefc219eed635db8e1a69048e38c1fdaf697->leave($__internal_795fd5b458ae1c4974dfd6883562fefc219eed635db8e1a69048e38c1fdaf697_prof);

        
        $__internal_c7ddaaf374c74baaf9621a8c7e0aef9764eef43c9d612a78073d6d1f1111cb6f->leave($__internal_c7ddaaf374c74baaf9621a8c7e0aef9764eef43c9d612a78073d6d1f1111cb6f_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a43f07b53a8ab7624c08bcbefd247aef85fc074d070f91f5cbd6f9338f679dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a43f07b53a8ab7624c08bcbefd247aef85fc074d070f91f5cbd6f9338f679dc->enter($__internal_3a43f07b53a8ab7624c08bcbefd247aef85fc074d070f91f5cbd6f9338f679dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4f4d3fd4d624ae6701092c4c116f78472a13cac0d125c78bad7f79b7bba3df67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4d3fd4d624ae6701092c4c116f78472a13cac0d125c78bad7f79b7bba3df67->enter($__internal_4f4d3fd4d624ae6701092c4c116f78472a13cac0d125c78bad7f79b7bba3df67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4f4d3fd4d624ae6701092c4c116f78472a13cac0d125c78bad7f79b7bba3df67->leave($__internal_4f4d3fd4d624ae6701092c4c116f78472a13cac0d125c78bad7f79b7bba3df67_prof);

        
        $__internal_3a43f07b53a8ab7624c08bcbefd247aef85fc074d070f91f5cbd6f9338f679dc->leave($__internal_3a43f07b53a8ab7624c08bcbefd247aef85fc074d070f91f5cbd6f9338f679dc_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6ee64a311c4f70f772d12883b1a3f5a2cd3f59492b5a85bc47c05f6b17fd17b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee64a311c4f70f772d12883b1a3f5a2cd3f59492b5a85bc47c05f6b17fd17b9->enter($__internal_6ee64a311c4f70f772d12883b1a3f5a2cd3f59492b5a85bc47c05f6b17fd17b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_dd7d58e84580f6e4e24357d5dfdd2f001a357c5032300d0258fddc2f25961c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7d58e84580f6e4e24357d5dfdd2f001a357c5032300d0258fddc2f25961c87->enter($__internal_dd7d58e84580f6e4e24357d5dfdd2f001a357c5032300d0258fddc2f25961c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Teste Longevo</p>
                            <p>Daniel Bueno da Silva</p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_dd7d58e84580f6e4e24357d5dfdd2f001a357c5032300d0258fddc2f25961c87->leave($__internal_dd7d58e84580f6e4e24357d5dfdd2f001a357c5032300d0258fddc2f25961c87_prof);

        
        $__internal_6ee64a311c4f70f772d12883b1a3f5a2cd3f59492b5a85bc47c05f6b17fd17b9->leave($__internal_6ee64a311c4f70f772d12883b1a3f5a2cd3f59492b5a85bc47c05f6b17fd17b9_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4dfc2d5ddbb8df006ef0777cfc7fe1d9b43b3f29b8a739626cdcbe9494f7f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dfc2d5ddbb8df006ef0777cfc7fe1d9b43b3f29b8a739626cdcbe9494f7f9f->enter($__internal_e4dfc2d5ddbb8df006ef0777cfc7fe1d9b43b3f29b8a739626cdcbe9494f7f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3418cc649105a73af5e68bae2dd32af335feef4ba8361fcbe58b18d2f35d5006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3418cc649105a73af5e68bae2dd32af335feef4ba8361fcbe58b18d2f35d5006->enter($__internal_3418cc649105a73af5e68bae2dd32af335feef4ba8361fcbe58b18d2f35d5006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/bootstrap-3.3.7.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/longevosac/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_3418cc649105a73af5e68bae2dd32af335feef4ba8361fcbe58b18d2f35d5006->leave($__internal_3418cc649105a73af5e68bae2dd32af335feef4ba8361fcbe58b18d2f35d5006_prof);

        
        $__internal_e4dfc2d5ddbb8df006ef0777cfc7fe1d9b43b3f29b8a739626cdcbe9494f7f9f->leave($__internal_e4dfc2d5ddbb8df006ef0777cfc7fe1d9b43b3f29b8a739626cdcbe9494f7f9f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 83,  362 => 82,  358 => 81,  354 => 80,  350 => 79,  346 => 78,  341 => 77,  332 => 76,  314 => 67,  308 => 63,  299 => 62,  282 => 56,  265 => 55,  253 => 57,  251 => 56,  247 => 55,  243 => 54,  239 => 52,  230 => 51,  210 => 39,  202 => 34,  192 => 27,  186 => 23,  177 => 22,  160 => 20,  148 => 15,  144 => 14,  140 => 13,  136 => 12,  132 => 11,  128 => 10,  123 => 9,  114 => 8,  96 => 6,  82 => 85,  80 => 76,  77 => 75,  75 => 62,  71 => 60,  69 => 51,  65 => 49,  63 => 22,  58 => 20,  51 => 17,  49 => 8,  44 => 6,  37 => 2,  34 => 1,);
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
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Sac - Longevo{% endblock %}</title>
        
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/bootstrap-flatly-3.3.7.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/font-awesome-4.6.3.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/font-lato.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/bootstrap-datetimepicker.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/highlight-solarized-light.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/longevosac/css/jquery.dataTables.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"{{ path('sac_index') }}\">
                                LONGEVO - SAC
                            </a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"{{ path('sac_index') }}\">
                                        <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Cadastro de Chamado
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('chamado_index') }}\">
                                        <i class=\"fa fa-list\" aria-hidden=\"true\"></i> Lista de Chamados
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-12\">
                        {{ include('default/_flash_messages.html.twig') }}
                        <h1>{% block titpag %}{% endblock %}</h1>
                        {% block content %}{% endblock %}
                    </div>                    
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - Teste Longevo</p>
                            <p>Daniel Bueno da Silva</p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('bundles/longevosac/js/jquery-2.2.4.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/moment.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/bootstrap-3.3.7.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/highlight.pack.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/bootstrap-datetimepicker.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/main.js') }}\"></script>
            <script src=\"{{ asset('bundles/longevosac/js/jquery.dataTables.min.js') }}\"></script>
        {% endblock %}

       
    </body>
</html>
", "base.html.twig", "/var/www/html/app_task/app/Resources/views/base.html.twig");
    }
}
