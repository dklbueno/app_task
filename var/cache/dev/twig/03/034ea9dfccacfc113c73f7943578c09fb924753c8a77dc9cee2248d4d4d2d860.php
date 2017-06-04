<?php

/* ::base.html.twig */
class __TwigTemplate_774d21df208b7da5cb13121c5b0878ba3fb7d628674a63248915ea2f03b2403d extends Twig_Template
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
        $__internal_9d5fc9b508dbec6ba3d1a4c520967663fa297eb749394c511782dc01efa4f3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5fc9b508dbec6ba3d1a4c520967663fa297eb749394c511782dc01efa4f3fb->enter($__internal_9d5fc9b508dbec6ba3d1a4c520967663fa297eb749394c511782dc01efa4f3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b6d7e9eb66067659ade065c22b6acdb076c80a93d70b4a34b30e393e6f3ac0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d7e9eb66067659ade065c22b6acdb076c80a93d70b4a34b30e393e6f3ac0dc->enter($__internal_b6d7e9eb66067659ade065c22b6acdb076c80a93d70b4a34b30e393e6f3ac0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 87
        echo "
       
    </body>
</html>
";
        
        $__internal_9d5fc9b508dbec6ba3d1a4c520967663fa297eb749394c511782dc01efa4f3fb->leave($__internal_9d5fc9b508dbec6ba3d1a4c520967663fa297eb749394c511782dc01efa4f3fb_prof);

        
        $__internal_b6d7e9eb66067659ade065c22b6acdb076c80a93d70b4a34b30e393e6f3ac0dc->leave($__internal_b6d7e9eb66067659ade065c22b6acdb076c80a93d70b4a34b30e393e6f3ac0dc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2debaa1bd4e19ee381af62ab79ae799a0dbf405e88e796e0e4bf6f9dc1d46e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2debaa1bd4e19ee381af62ab79ae799a0dbf405e88e796e0e4bf6f9dc1d46e33->enter($__internal_2debaa1bd4e19ee381af62ab79ae799a0dbf405e88e796e0e4bf6f9dc1d46e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_711fd932929b46f2c980722a980884c80014d59941284aa603ea34ef6c4432ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711fd932929b46f2c980722a980884c80014d59941284aa603ea34ef6c4432ad->enter($__internal_711fd932929b46f2c980722a980884c80014d59941284aa603ea34ef6c4432ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ATIVIDADES";
        
        $__internal_711fd932929b46f2c980722a980884c80014d59941284aa603ea34ef6c4432ad->leave($__internal_711fd932929b46f2c980722a980884c80014d59941284aa603ea34ef6c4432ad_prof);

        
        $__internal_2debaa1bd4e19ee381af62ab79ae799a0dbf405e88e796e0e4bf6f9dc1d46e33->leave($__internal_2debaa1bd4e19ee381af62ab79ae799a0dbf405e88e796e0e4bf6f9dc1d46e33_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_104c86076287b927bc64c873b3ed5891c1c0305f4b0a368a1f528f94a1f4d5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104c86076287b927bc64c873b3ed5891c1c0305f4b0a368a1f528f94a1f4d5c6->enter($__internal_104c86076287b927bc64c873b3ed5891c1c0305f4b0a368a1f528f94a1f4d5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2df75135d073c879ef8d84d71252322839a5ac76af75dd6f4ae290ad6e54db3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df75135d073c879ef8d84d71252322839a5ac76af75dd6f4ae290ad6e54db3a->enter($__internal_2df75135d073c879ef8d84d71252322839a5ac76af75dd6f4ae290ad6e54db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/bootstrap-flatly-3.3.7.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/font-awesome-4.6.3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/font-lato.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/highlight-solarized-light.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_2df75135d073c879ef8d84d71252322839a5ac76af75dd6f4ae290ad6e54db3a->leave($__internal_2df75135d073c879ef8d84d71252322839a5ac76af75dd6f4ae290ad6e54db3a_prof);

        
        $__internal_104c86076287b927bc64c873b3ed5891c1c0305f4b0a368a1f528f94a1f4d5c6->leave($__internal_104c86076287b927bc64c873b3ed5891c1c0305f4b0a368a1f528f94a1f4d5c6_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e1e9b01dbd3b8cd1262739b88d84aad50395ae2508092bc023f5a5c46b952a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e9b01dbd3b8cd1262739b88d84aad50395ae2508092bc023f5a5c46b952a43->enter($__internal_e1e9b01dbd3b8cd1262739b88d84aad50395ae2508092bc023f5a5c46b952a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2fcf87c5906b929fdbe7beb41928b2f4f8135530766c27f0378932fbb5387561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fcf87c5906b929fdbe7beb41928b2f4f8135530766c27f0378932fbb5387561->enter($__internal_2fcf87c5906b929fdbe7beb41928b2f4f8135530766c27f0378932fbb5387561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_2fcf87c5906b929fdbe7beb41928b2f4f8135530766c27f0378932fbb5387561->leave($__internal_2fcf87c5906b929fdbe7beb41928b2f4f8135530766c27f0378932fbb5387561_prof);

        
        $__internal_e1e9b01dbd3b8cd1262739b88d84aad50395ae2508092bc023f5a5c46b952a43->leave($__internal_e1e9b01dbd3b8cd1262739b88d84aad50395ae2508092bc023f5a5c46b952a43_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_fb211b3eefb2095d0dbae3c0e2c271686075b4c7f482d3ce60b13f0239883cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb211b3eefb2095d0dbae3c0e2c271686075b4c7f482d3ce60b13f0239883cc6->enter($__internal_fb211b3eefb2095d0dbae3c0e2c271686075b4c7f482d3ce60b13f0239883cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bed34f621154d5f33822f6217136c67461bb6ea5d5fa67c0df70eb94ef012897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed34f621154d5f33822f6217136c67461bb6ea5d5fa67c0df70eb94ef012897->enter($__internal_bed34f621154d5f33822f6217136c67461bb6ea5d5fa67c0df70eb94ef012897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_index");
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
        
        $__internal_bed34f621154d5f33822f6217136c67461bb6ea5d5fa67c0df70eb94ef012897->leave($__internal_bed34f621154d5f33822f6217136c67461bb6ea5d5fa67c0df70eb94ef012897_prof);

        
        $__internal_fb211b3eefb2095d0dbae3c0e2c271686075b4c7f482d3ce60b13f0239883cc6->leave($__internal_fb211b3eefb2095d0dbae3c0e2c271686075b4c7f482d3ce60b13f0239883cc6_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_a10cfe9b444afbb314bea60a288aafd628da14a6645d16f0f4351f995c21b552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10cfe9b444afbb314bea60a288aafd628da14a6645d16f0f4351f995c21b552->enter($__internal_a10cfe9b444afbb314bea60a288aafd628da14a6645d16f0f4351f995c21b552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efd33b9eb889ede185287679c30aa8df8b1115010836a9ed170e918759645a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd33b9eb889ede185287679c30aa8df8b1115010836a9ed170e918759645a50->enter($__internal_efd33b9eb889ede185287679c30aa8df8b1115010836a9ed170e918759645a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efd33b9eb889ede185287679c30aa8df8b1115010836a9ed170e918759645a50->leave($__internal_efd33b9eb889ede185287679c30aa8df8b1115010836a9ed170e918759645a50_prof);

        
        $__internal_a10cfe9b444afbb314bea60a288aafd628da14a6645d16f0f4351f995c21b552->leave($__internal_a10cfe9b444afbb314bea60a288aafd628da14a6645d16f0f4351f995c21b552_prof);

    }

    // line 55
    public function block_titpag($context, array $blocks = array())
    {
        $__internal_c7f16045afa244810f31f970e193b1a66e8d4b0ccc778db2a5d18559793f78a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f16045afa244810f31f970e193b1a66e8d4b0ccc778db2a5d18559793f78a3->enter($__internal_c7f16045afa244810f31f970e193b1a66e8d4b0ccc778db2a5d18559793f78a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        $__internal_be4b9e7ad074ce36500e0ae582ea1687f9216b1208b141ae3c785efd49bb5513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4b9e7ad074ce36500e0ae582ea1687f9216b1208b141ae3c785efd49bb5513->enter($__internal_be4b9e7ad074ce36500e0ae582ea1687f9216b1208b141ae3c785efd49bb5513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titpag"));

        
        $__internal_be4b9e7ad074ce36500e0ae582ea1687f9216b1208b141ae3c785efd49bb5513->leave($__internal_be4b9e7ad074ce36500e0ae582ea1687f9216b1208b141ae3c785efd49bb5513_prof);

        
        $__internal_c7f16045afa244810f31f970e193b1a66e8d4b0ccc778db2a5d18559793f78a3->leave($__internal_c7f16045afa244810f31f970e193b1a66e8d4b0ccc778db2a5d18559793f78a3_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_d34a5ed9fdc420b4968e7030ab89eeec7021c1a05d80afd475454ec1c3d7e9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34a5ed9fdc420b4968e7030ab89eeec7021c1a05d80afd475454ec1c3d7e9d3->enter($__internal_d34a5ed9fdc420b4968e7030ab89eeec7021c1a05d80afd475454ec1c3d7e9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a289d41e08e3c59a426555f80d272ac3cc2fbe97f1ed7394efa21ba78b686ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a289d41e08e3c59a426555f80d272ac3cc2fbe97f1ed7394efa21ba78b686ef0->enter($__internal_a289d41e08e3c59a426555f80d272ac3cc2fbe97f1ed7394efa21ba78b686ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a289d41e08e3c59a426555f80d272ac3cc2fbe97f1ed7394efa21ba78b686ef0->leave($__internal_a289d41e08e3c59a426555f80d272ac3cc2fbe97f1ed7394efa21ba78b686ef0_prof);

        
        $__internal_d34a5ed9fdc420b4968e7030ab89eeec7021c1a05d80afd475454ec1c3d7e9d3->leave($__internal_d34a5ed9fdc420b4968e7030ab89eeec7021c1a05d80afd475454ec1c3d7e9d3_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_116115874f9acf5e5a8f4348ba5c986443cdde0273e7d09492f06357d8e1e1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116115874f9acf5e5a8f4348ba5c986443cdde0273e7d09492f06357d8e1e1b7->enter($__internal_116115874f9acf5e5a8f4348ba5c986443cdde0273e7d09492f06357d8e1e1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d6d8cb193a15a2253f8a3a26deca25223254a3b4b48cae006f87571ea8978876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d8cb193a15a2253f8a3a26deca25223254a3b4b48cae006f87571ea8978876->enter($__internal_d6d8cb193a15a2253f8a3a26deca25223254a3b4b48cae006f87571ea8978876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Teste Duo System</p>
                            <p>Daniel Bueno da Silva</p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_d6d8cb193a15a2253f8a3a26deca25223254a3b4b48cae006f87571ea8978876->leave($__internal_d6d8cb193a15a2253f8a3a26deca25223254a3b4b48cae006f87571ea8978876_prof);

        
        $__internal_116115874f9acf5e5a8f4348ba5c986443cdde0273e7d09492f06357d8e1e1b7->leave($__internal_116115874f9acf5e5a8f4348ba5c986443cdde0273e7d09492f06357d8e1e1b7_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ac6d85be638ec78c293d77a5cd1140a48f8141577d85ce6f6546f1b7f53aeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac6d85be638ec78c293d77a5cd1140a48f8141577d85ce6f6546f1b7f53aeb7->enter($__internal_5ac6d85be638ec78c293d77a5cd1140a48f8141577d85ce6f6546f1b7f53aeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a4e1be513bfea51d445ae162959c9cc6a35febbbf6552d30b056e9a5b28c86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4e1be513bfea51d445ae162959c9cc6a35febbbf6552d30b056e9a5b28c86f->enter($__internal_0a4e1be513bfea51d445ae162959c9cc6a35febbbf6552d30b056e9a5b28c86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/bootstrap-3.3.7.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/atividade/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\"/>
        ";
        
        $__internal_0a4e1be513bfea51d445ae162959c9cc6a35febbbf6552d30b056e9a5b28c86f->leave($__internal_0a4e1be513bfea51d445ae162959c9cc6a35febbbf6552d30b056e9a5b28c86f_prof);

        
        $__internal_5ac6d85be638ec78c293d77a5cd1140a48f8141577d85ce6f6546f1b7f53aeb7->leave($__internal_5ac6d85be638ec78c293d77a5cd1140a48f8141577d85ce6f6546f1b7f53aeb7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 83,  362 => 82,  358 => 81,  354 => 80,  350 => 79,  346 => 78,  341 => 77,  332 => 76,  314 => 67,  308 => 63,  299 => 62,  282 => 56,  265 => 55,  253 => 57,  251 => 56,  247 => 55,  243 => 54,  239 => 52,  230 => 51,  210 => 39,  202 => 34,  192 => 27,  186 => 23,  177 => 22,  160 => 20,  148 => 15,  144 => 14,  140 => 13,  136 => 12,  132 => 11,  128 => 10,  123 => 9,  114 => 8,  96 => 6,  82 => 87,  80 => 76,  77 => 75,  75 => 62,  71 => 60,  69 => 51,  65 => 49,  63 => 22,  58 => 20,  51 => 17,  49 => 8,  44 => 6,  37 => 2,  34 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/bootstrap-flatly-3.3.7.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/font-awesome-4.6.3.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/font-lato.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/bootstrap-datetimepicker.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/highlight-solarized-light.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/atividade/css/jquery.dataTables.css') }}\">
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
                                    <a href=\"{{ path('atividade_index') }}\">
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
                            <p>&copy; {{ 'now'|date('Y') }} - Teste Duo System</p>
                            <p>Daniel Bueno da Silva</p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('bundles/atividade/js/jquery-2.2.4.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/moment.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/bootstrap-3.3.7.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/highlight.pack.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/bootstrap-datetimepicker.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/main.js') }}\"></script>
            <script src=\"{{ asset('bundles/atividade/js/jquery.dataTables.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\"/>
        {% endblock %}

       
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\app_task\\app/Resources\\views/base.html.twig");
    }
}
