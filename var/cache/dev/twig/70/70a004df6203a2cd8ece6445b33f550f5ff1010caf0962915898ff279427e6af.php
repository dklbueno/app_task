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
        $__internal_161b671655488c1467949f7545953ed078124cddaf503257f1a23de04aee6e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161b671655488c1467949f7545953ed078124cddaf503257f1a23de04aee6e73->enter($__internal_161b671655488c1467949f7545953ed078124cddaf503257f1a23de04aee6e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_07a124aa1b56216b61dcba7a9317b3e3b777244ed6303ca95715ab26f270e23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a124aa1b56216b61dcba7a9317b3e3b777244ed6303ca95715ab26f270e23b->enter($__internal_07a124aa1b56216b61dcba7a9317b3e3b777244ed6303ca95715ab26f270e23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_161b671655488c1467949f7545953ed078124cddaf503257f1a23de04aee6e73->leave($__internal_161b671655488c1467949f7545953ed078124cddaf503257f1a23de04aee6e73_prof);

        
        $__internal_07a124aa1b56216b61dcba7a9317b3e3b777244ed6303ca95715ab26f270e23b->leave($__internal_07a124aa1b56216b61dcba7a9317b3e3b777244ed6303ca95715ab26f270e23b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef82fb2d03311909dbb8cbc6ebd046d90df5767a4373a5cbdc84e56f804eab81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef82fb2d03311909dbb8cbc6ebd046d90df5767a4373a5cbdc84e56f804eab81->enter($__internal_ef82fb2d03311909dbb8cbc6ebd046d90df5767a4373a5cbdc84e56f804eab81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_008b617bf97b539d30deb40c01fdec9fb726b08ae25e18ce05b5ff41224d8a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008b617bf97b539d30deb40c01fdec9fb726b08ae25e18ce05b5ff41224d8a67->enter($__internal_008b617bf97b539d30deb40c01fdec9fb726b08ae25e18ce05b5ff41224d8a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ATIVIDADES";
        
        $__internal_008b617bf97b539d30deb40c01fdec9fb726b08ae25e18ce05b5ff41224d8a67->leave($__internal_008b617bf97b539d30deb40c01fdec9fb726b08ae25e18ce05b5ff41224d8a67_prof);

        
        $__internal_ef82fb2d03311909dbb8cbc6ebd046d90df5767a4373a5cbdc84e56f804eab81->leave($__internal_ef82fb2d03311909dbb8cbc6ebd046d90df5767a4373a5cbdc84e56f804eab81_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fca8ae1fcb2098b460d2ffda747a3b18dd9eb5a75ed6999d611da29e18f4fd72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca8ae1fcb2098b460d2ffda747a3b18dd9eb5a75ed6999d611da29e18f4fd72->enter($__internal_fca8ae1fcb2098b460d2ffda747a3b18dd9eb5a75ed6999d611da29e18f4fd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_151e0a0e4395799369ba6b534860791582cf0e65609f274f9c02101f75fc271a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151e0a0e4395799369ba6b534860791582cf0e65609f274f9c02101f75fc271a->enter($__internal_151e0a0e4395799369ba6b534860791582cf0e65609f274f9c02101f75fc271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_151e0a0e4395799369ba6b534860791582cf0e65609f274f9c02101f75fc271a->leave($__internal_151e0a0e4395799369ba6b534860791582cf0e65609f274f9c02101f75fc271a_prof);

        
        $__internal_fca8ae1fcb2098b460d2ffda747a3b18dd9eb5a75ed6999d611da29e18f4fd72->leave($__internal_fca8ae1fcb2098b460d2ffda747a3b18dd9eb5a75ed6999d611da29e18f4fd72_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_47c520dd744d3ed1e9eb7f1889bc7978bbb67392a13cd9891aa6487affe7976a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c520dd744d3ed1e9eb7f1889bc7978bbb67392a13cd9891aa6487affe7976a->enter($__internal_47c520dd744d3ed1e9eb7f1889bc7978bbb67392a13cd9891aa6487affe7976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_95266d3ba1a0a6659aec460470aa64da5369fe48448fa9b2a100154a5bc1d243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95266d3ba1a0a6659aec460470aa64da5369fe48448fa9b2a100154a5bc1d243->enter($__internal_95266d3ba1a0a6659aec460470aa64da5369fe48448fa9b2a100154a5bc1d243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_95266d3ba1a0a6659aec460470aa64da5369fe48448fa9b2a100154a5bc1d243->leave($__internal_95266d3ba1a0a6659aec460470aa64da5369fe48448fa9b2a100154a5bc1d243_prof);

        
        $__internal_47c520dd744d3ed1e9eb7f1889bc7978bbb67392a13cd9891aa6487affe7976a->leave($__internal_47c520dd744d3ed1e9eb7f1889bc7978bbb67392a13cd9891aa6487affe7976a_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_8395a32c018ad3a5e36cd9badb39a677ff722e9a22c8612b29a3261dff772f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8395a32c018ad3a5e36cd9badb39a677ff722e9a22c8612b29a3261dff772f71->enter($__internal_8395a32c018ad3a5e36cd9badb39a677ff722e9a22c8612b29a3261dff772f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f412250beb319e05e1f8c7dcdf06086adf61a6059bd832cd1e8b04fdadcf089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f412250beb319e05e1f8c7dcdf06086adf61a6059bd832cd1e8b04fdadcf089->enter($__internal_6f412250beb319e05e1f8c7dcdf06086adf61a6059bd832cd1e8b04fdadcf089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_index");
        echo "\">
                                ATIVIDADES
                            </a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cadastro_index");
        echo "\">
                                        <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Cadastro de Atividades
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chamado_index");
        echo "\">
                                        <i class=\"fa fa-list\" aria-hidden=\"true\"></i> Lista de Atividades
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_6f412250beb319e05e1f8c7dcdf06086adf61a6059bd832cd1e8b04fdadcf089->leave($__internal_6f412250beb319e05e1f8c7dcdf06086adf61a6059bd832cd1e8b04fdadcf089_prof);

        
        $__internal_8395a32c018ad3a5e36cd9badb39a677ff722e9a22c8612b29a3261dff772f71->leave($__internal_8395a32c018ad3a5e36cd9badb39a677ff722e9a22c8612b29a3261dff772f71_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_474297cf362b5f82477bfb8dceda479acf9862f4fa960688322c95948a9f8540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474297cf362b5f82477bfb8dceda479acf9862f4fa960688322c95948a9f8540->enter($__internal_474297cf362b5f82477bfb8dceda479acf9862f4fa960688322c95948a9f8540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaeda5b1544afb0758670b4c0ba694639c7feaa16d7118eb2a626906b402e874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaeda5b1544afb0758670b4c0ba694639c7feaa16d7118eb2a626906b402e874->enter($__internal_eaeda5b1544afb0758670b4c0ba694639c7feaa16d7118eb2a626906b402e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eaeda5b1544afb0758670b4c0ba694639c7feaa16d7118eb2a626906b402e874->leave($__internal_eaeda5b1544afb0758670b4c0ba694639c7feaa16d7118eb2a626906b402e874_prof);

        
        $__internal_474297cf362b5f82477bfb8dceda479acf9862f4fa960688322c95948a9f8540->leave($__internal_474297cf362b5f82477bfb8dceda479acf9862f4fa960688322c95948a9f8540_prof);

    }

    // line 55
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_4b1485ca78530374a6f4ed7349dca91eac65bed0f9b3cc0d2a53f2ed5d14d26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1485ca78530374a6f4ed7349dca91eac65bed0f9b3cc0d2a53f2ed5d14d26d->enter($__internal_4b1485ca78530374a6f4ed7349dca91eac65bed0f9b3cc0d2a53f2ed5d14d26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_a9d5fc74ce23610b06393584173b206422eaa6cfc30434622c41722062aed35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d5fc74ce23610b06393584173b206422eaa6cfc30434622c41722062aed35f->enter($__internal_a9d5fc74ce23610b06393584173b206422eaa6cfc30434622c41722062aed35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        
        $__internal_a9d5fc74ce23610b06393584173b206422eaa6cfc30434622c41722062aed35f->leave($__internal_a9d5fc74ce23610b06393584173b206422eaa6cfc30434622c41722062aed35f_prof);

        
        $__internal_4b1485ca78530374a6f4ed7349dca91eac65bed0f9b3cc0d2a53f2ed5d14d26d->leave($__internal_4b1485ca78530374a6f4ed7349dca91eac65bed0f9b3cc0d2a53f2ed5d14d26d_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b4b8d706fc65a4076ccb742b8fc37db49e106ebdd04311e95cdd067a643c853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4b8d706fc65a4076ccb742b8fc37db49e106ebdd04311e95cdd067a643c853->enter($__internal_6b4b8d706fc65a4076ccb742b8fc37db49e106ebdd04311e95cdd067a643c853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0ab799165635b9396e926da762d3259e950fe5bac9b14d208bab67d0efeefef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab799165635b9396e926da762d3259e950fe5bac9b14d208bab67d0efeefef8->enter($__internal_0ab799165635b9396e926da762d3259e950fe5bac9b14d208bab67d0efeefef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0ab799165635b9396e926da762d3259e950fe5bac9b14d208bab67d0efeefef8->leave($__internal_0ab799165635b9396e926da762d3259e950fe5bac9b14d208bab67d0efeefef8_prof);

        
        $__internal_6b4b8d706fc65a4076ccb742b8fc37db49e106ebdd04311e95cdd067a643c853->leave($__internal_6b4b8d706fc65a4076ccb742b8fc37db49e106ebdd04311e95cdd067a643c853_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_87d2cd19bbbd30f3679b039512bea9f315d3c1f4ccf699e9ae6aad0de6c95154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d2cd19bbbd30f3679b039512bea9f315d3c1f4ccf699e9ae6aad0de6c95154->enter($__internal_87d2cd19bbbd30f3679b039512bea9f315d3c1f4ccf699e9ae6aad0de6c95154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1c1f62773c74230ad609b910ef8dad17b421455de0f48871dcb850aa0386177b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1f62773c74230ad609b910ef8dad17b421455de0f48871dcb850aa0386177b->enter($__internal_1c1f62773c74230ad609b910ef8dad17b421455de0f48871dcb850aa0386177b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_1c1f62773c74230ad609b910ef8dad17b421455de0f48871dcb850aa0386177b->leave($__internal_1c1f62773c74230ad609b910ef8dad17b421455de0f48871dcb850aa0386177b_prof);

        
        $__internal_87d2cd19bbbd30f3679b039512bea9f315d3c1f4ccf699e9ae6aad0de6c95154->leave($__internal_87d2cd19bbbd30f3679b039512bea9f315d3c1f4ccf699e9ae6aad0de6c95154_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0af278eb2762f5ec98263acee6b179c5c17d9eb11cd34c57dea4d865d414027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0af278eb2762f5ec98263acee6b179c5c17d9eb11cd34c57dea4d865d414027->enter($__internal_d0af278eb2762f5ec98263acee6b179c5c17d9eb11cd34c57dea4d865d414027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1f8267bd7d91ee0b8551fcd40264e755f076d96119dfd3578df85e73befa10cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8267bd7d91ee0b8551fcd40264e755f076d96119dfd3578df85e73befa10cd->enter($__internal_1f8267bd7d91ee0b8551fcd40264e755f076d96119dfd3578df85e73befa10cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1f8267bd7d91ee0b8551fcd40264e755f076d96119dfd3578df85e73befa10cd->leave($__internal_1f8267bd7d91ee0b8551fcd40264e755f076d96119dfd3578df85e73befa10cd_prof);

        
        $__internal_d0af278eb2762f5ec98263acee6b179c5c17d9eb11cd34c57dea4d865d414027->leave($__internal_d0af278eb2762f5ec98263acee6b179c5c17d9eb11cd34c57dea4d865d414027_prof);

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
        <title>{% block title %}ATIVIDADES{% endblock %}</title>
        
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
                            <a class=\"navbar-brand\" href=\"{{ path('atividade_index') }}\">
                                ATIVIDADES
                            </a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"{{ path('cadastro_index') }}\">
                                        <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Cadastro de Atividades
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('chamado_index') }}\">
                                        <i class=\"fa fa-list\" aria-hidden=\"true\"></i> Lista de Atividades
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
